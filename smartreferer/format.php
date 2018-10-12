<?php
/* $Id: format.php,v 1.3 2004/07/20 11:58:12 jfenin Exp $ */

require (dirname(__FILE__) . "/config.inc.php");
require (dirname(__FILE__) . "/" . $languageFile);
require (dirname(__FILE__) . "/debug.php");

function formatDatetime($datetime)
{
  global $mysql_datetime_format;
  
  debug("sr.log","mysql_datetime_format: $mysql_datetime_format");
  list($yyyy,$mm,$dd,$hh,$ii,$ss) = sscanf($datetime,$mysql_datetime_format);
  $timestamp = mktime($hh,$ii,$ss,$mm,$dd,$yyyy);
  return strftime(DATE_AND_TIME, $timestamp);
  debug("sr.log","ss=$ss");
  return $list;
}
  
function formatReferer($result,$caption)
{
  global $maxrefererlength;
  
  echo <<<EOD
  
  <!-- referer listed in a table -->
  <table id="srr">
EOD;

  echo ("  <caption id=\"srr\">$caption</caption>\n");

  echo <<<EOD
	<thead>
	<tr id="srr">
		<th id="srr"><a href="http://scripts.fenin.de" target="_blank">&copy;</a></th>
EOD;

  echo("  <th id=\"srr\">" .REFERER . "</th>\n");
  echo("  <th id=\"srr\">" . LASTACCESS . "</th>\n");
  echo("  <th id=\"srr\">". ACCESSCOUNT . "</th>\n");

  echo <<<EOD
	</tr>
	</thead>
EOD;
  $rowcount = 1;
  while ($row = mysql_fetch_array($result, MYSQL_ASSOC))
  {
    echo("  <tr id=\"srr\">\n");
    echo("    <td id=\"srr\">$rowcount.</td>\n");
    $url = $row["URL"];
    $urllength = strlen($url);
    if ($urllength == 0)
    {
      $url = UNKNOWN_REFERER;
    }
    else
    {
      if ($urllength > ($maxrefererlength - 3))
      {
        $refererstring = substr($url,0,($maxrefererlength - 3)) . "...";
      }
      else
      {
        $refererstring = $url;
      }
      $url="<a href=\"" . $url . "\" target=\"blank\">" . $refererstring . "</a>";
    }
    echo("    <td id=\"srr\">$url</td>\n");
    $lastaccess = formatDatetime($row["LASTACCESS"]);
    echo("    <td id=\"srr\">" . $lastaccess . "</td>\n");
    echo("    <td id=\"srr\" align=\"right\">" . $row["ACCESSCOUNT"] . "</td>\n");
    echo("  </tr>\n");
    $rowcount += 1;
  }
  echo <<<EOD
  </table>
EOD;
}

function formatUseragents($result,$caption)
{
  global $browserstring;
  echo <<<EOD
  
  <!-- useragents listed in a table -->
  <table id="sru">
EOD;

  echo ("  <caption id=\"sru\">$caption</caption>\n");

  echo <<<EOD
	<thead>
	<tr id="sru">
		<th id="sru"><a href="http://scripts.fenin.de" target="_blank">&copy;</a></th>
EOD;

  echo("  <th id=\"sru\">" . USERAGENT . "</th>\n");
  echo("  <th id=\"sru\">" . LASTACCESS . "</th>\n");
  echo("  <th id=\"sru\">". ACCESSCOUNT . "</th>\n");

  echo <<<EOD
	</tr>
	</thead>
EOD;
  $rowcount = 1;
  while ($row = mysql_fetch_array($result, MYSQL_ASSOC))
  {
    echo("  <tr id=\"sru\">\n");
    echo("    <td id=\"sru\">$rowcount.</td>\n");
    $browser = sprintf($browserstring,$row["BROWSER"], $row["OS"]);
    echo("    <td id=\"sru\">" . $browser ."</td>\n");
    $lastaccess = formatDatetime($row["LASTACCESS"]);
    echo("    <td id=\"sru\">" . $lastaccess . "</td>\n");
    echo("    <td id=\"sru\" align=\"right\">" . $row["ACCESSCOUNT"] . "</td>\n");
    echo("  </tr>\n");
    $rowcount += 1;
  }
  echo <<<EOD
  </table>
EOD;
}

?>
