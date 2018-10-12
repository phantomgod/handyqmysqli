<?php

  /* $Id: api.php,v 1.2 2004/07/20 09:13:50 jfenin Exp $ */
	
class DB
{
   function DB($dbhost = "localhost", $dbname = 'smartreferer', $dbusername = 'root', $dbpassword = '')
   {
       	$this->host = $dbhost;
       	$this->db = $dbname;
       	$this->user = $dbusername;
       	$this->pass = $dbpassword;
       	$this->link = mysql_connect($this->host, $this->user, $this->pass);
       	if (!$this->link)
       	{
	   		die('keine Verbindung möglich: ' . mysql_error());
		}
       	mysql_select_db($this->db) or die('Auswahl der Datenbank fehlgeschlagen!');
       	register_shutdown_function(array(&$this, 'close'));
   }
   function query($query) {
       $result = mysql_query($query, $this->link);
       return $result;
   }
   function close() {
       mysql_close($this->link);
   }
}


function addReferer($db, $url)
{
	# check if this referer is already in the database

	$query = "SELECT ACCESSCOUNT FROM " . TBL_REFERER . " WHERE URL = '$url'";
	$result = $db->query($query) or die("Anfrage fehlgeschlagen: " . mysql_error());

	$currentdatetime = date("Y-m-d H:i:s");
	$numRows = mysql_num_rows($result);

	if ($numRows == 0)
	{
		# insert new row when referer is not present yet
    	$query =  "INSERT INTO " . TBL_REFERER . " (URL, LASTACCESS, ACCESSCOUNT) ";
    	$query .= "VALUES ('$url', '$currentdatetime', '1')";
    	$result = $db->query($query) or die("Anfrage fehlgeschlagen: " . mysql_error());
	}
	else
	{
	  	# increment accesscount when referer is already present
	  	$row = mysql_fetch_array($result, MYSQL_ASSOC);
	  	$accesscount = $row['ACCESSCOUNT'];
	  	$accesscount = $accesscount + 1;
	  	$query = "UPDATE " . TBL_REFERER . " SET ACCESSCOUNT='$accesscount', LASTACCESS='$currentdatetime' WHERE URL = '$url'";
      	$result = $db->query($query) or die("Anfrage fehlgeschlagen: " . mysql_error());
	}
	$db->query("COMMIT");
}

function addUseragent($db,$useragent)
{
  // calculate md5hash value from the HTTP USER-AGENT string
  $md5hash = md5($useragent);
  
	# check if this user agent is already in the browser database
  $query = "SELECT ACCESSCOUNT FROM " . TBL_USERAGENT . " WHERE MD5HASH = '$md5hash'";
 	$result = $db->query($query) or die("Query failed: " . mysql_error());

	$currentdatetime = date("Y-m-d H:i:s");
	$numRows = mysql_num_rows($result);
	if ($numRows == 0)
	{
		# insert new row in useragent table when agent is not present yet
    $query =  "INSERT INTO " . TBL_USERAGENT . " (MD5HASH, LASTACCESS, ACCESSCOUNT) ";
    $query .= "VALUES ('$md5hash', '$currentdatetime', '1')";
    $result = $db->query($query) or die("Query failed: " . mysql_error());
        
    # also insert new row in browser table
    # remember to manually alter the name of the browser later to 'real' name
    #   instead of presenting the user a cryptic user agent string
    #   you can find a lot of user agent strings here:
    #     http://www.pgts.com.au/pgtsj/pgtsj0208c.html
    
    # first check if the hash value is not already present in the db
    # (referers will be truncated, browsers will NOT! )
    $query = "SELECT BROWSER FROM " . TBL_BROWSER . " WHERE MD5HASH = '$md5hash'";
  	$result = $db->query($query) or die("Query failed: " . mysql_error());
  	$numRows = mysql_num_rows($result);
	  if ($numRows == 0)
	  {
      $query =  "INSERT INTO " . TBL_BROWSER . " (MD5HASH,BROWSER) ";
      $query .= "VALUES ('$md5hash', '$useragent')";
      $result = $db->query($query) or die("Query failed: " . mysql_error());
    }
	}
	else
	{
	  	# increment accesscount when user is already present
	  	$row = mysql_fetch_array($result, MYSQL_ASSOC);
	  	$accesscount = $row['ACCESSCOUNT'];
	  	$accesscount = $accesscount + 1;
	  	$query =  "UPDATE " . TBL_USERAGENT . " SET ACCESSCOUNT='$accesscount', LASTACCESS='$currentdatetime' ";
      $query .= "WHERE MD5HASH = '$md5hash'";
      	$result = $db->query($query) or die("Anfrage fehlgeschlagen: " . mysql_error());
	}
	$db->query("COMMIT");
}

function getData($db,$selection,$count)
{
	switch($selection)
	{
		case "topreferer":
      $table=TBL_REFERER;
			$query="SELECT * FROM $table WHERE DISPLAY = 'Y' ORDER BY ACCESSCOUNT DESC LIMIT $count";
			break;

		case "latestreferer":
      $table=TBL_REFERER;
			$query="SELECT * FROM $table WHERE DISPLAY = 'Y' ORDER BY LASTACCESS DESC LIMIT $count";
			break;

		case "topuseragents":
      $table=TBL_USERAGENT;
			$query="SELECT * FROM $table ORDER BY ACCESSCOUNT DESC LIMIT $count";
      $query="SELECT t2.BROWSER, t2.OS, t1.MD5HASH, t1.LASTACCESS, t1.ACCESSCOUNT ";
      $query.="FROM " . TBL_BROWSER . " AS t2, " . TBL_USERAGENT . " AS t1 ";
      $query.="WHERE t1.MD5HASH = t2.MD5HASH ORDER BY ACCESSCOUNT DESC LIMIT $count"; 
			break;

		case "latestuseragents":
      $table=TBL_USERAGENT;
			$query="SELECT * FROM $table ORDER BY ACCESSCOUNT DESC LIMIT $count";
      $query="SELECT t2.BROWSER, t2.OS, t1.MD5HASH, t1.LASTACCESS, t1.ACCESSCOUNT ";
      $query.="FROM " . TBL_BROWSER . " AS t2, " . TBL_USERAGENT . " AS t1 ";
      $query.="WHERE t1.MD5HASH = t2.MD5HASH ORDER BY LASTACCESS DESC LIMIT $count"; 
			break;
	}

	$result = $db->query($query) or die ("Query failed: " . mysql_error());
	return $result;
}

function truncate($db, $table, $keepcount)
{
  $query="SELECT COUNT(ACCESSCOUNT) FROM $table";
  $result = $db->query($query) or die ("Query failed: " . mysql_error());
  $row = mysql_fetch_row($result);
  $numRows = $row[0];
  debug("sr.log", "Table: $table, NumRows: $numRows");
	  
  $numRowsToDelete = ($keepcount <= $numRows) ? ($numRows - $keepcount) : 0;
  
  if ($numRowsToDelete > 0)
  {
    // ORDER BY in DELETE or subqueries work only in MySQL >= 4
    $mysqlserver=mysql_get_server_info();
    if (substr($mysqlserver,0,1) >= 4)
    {
      $query = "DELETE FROM $table ORDER BY LASTACCESS ASC LIMIT $numRowsToDelete";
      debug("sr.log", "DELETE: $query");
      $db->query($query) or die ("MySQL-Server: $mysqlserver: Query ($query) failed: " . mysql_error());
    }
    else
    {
      // in MySQL 3: do it all by hand :-(
      $query = "SELECT LASTACCESS FROM $table ORDER BY LASTACCESS ASC LIMIT $numRowsToDelete";
      $result = $db->query($query) or die ("MySQL-Server: $mysqlserver: Query ($query) failed: " . mysql_error());
      $query = "DELETE FROM $table WHERE LASTACCESS IN ( ";
      while ($row = mysql_fetch_array($result, MYSQL_ASSOC))
      {
       $query .= "'" . $row["LASTACCESS"] . "',";
      }
      $query .= "NULL)";
      $result = $db->query($query) or die ("MySQL-Server: $mysqlserver: Query ($query) failed: " . mysql_error());
    }
  }                                          
}
?>
