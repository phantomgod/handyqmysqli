<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link type="text/css" rel="stylesheet" href="smartreferer/css/sr.css" media="screen" />
</head>
<body>
<?php
        require ('smartreferer/api.php');
        require ('smartreferer/format.php');
        $db = new DB($sr_database_host, $sr_database_name, $sr_database_username,
                     $sr_database_password);
        $result=getData($db,"topreferer",10);
        formatReferer($result,"Top-Referer");
        echo("<br>\n");
        $result=getData($db,"latestreferer",10);
        formatReferer($result,"latest referer");
        echo("<br>\n");
        $result=getData($db,"topuseragents",10);
        formatUseragents($result,"Top-Browser");
        echo("<br>\n");
        $result=getData($db,"latestuseragents",10);
        formatUseragents($result,"latest browser");
?>
</body>
</html>
