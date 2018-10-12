<?php
/* $Id: config.inc.php,v 1.2 2004/07/20 09:30:39 jfenin Exp $*/

// ------------------------ Database connection parameters --------------------
$sr_database_host =         "localhost";
$sr_database_name =         "smartreferer";
$sr_database_username =     "root";
$sr_database_password =     "";

// ------------------------ other important values ----------------------------
$lang =                     "EN"; // Language
$mysql_datetime_format=     "%d-%d-%d %d:%d:%d";
$truncateCountReferer=      "50"; // number of records TO KEEP
$truncateCountUseragents=   "50"; // number of records TO KEEP
$debug =                    0;
$browserstring =            "%1\$s (%2\$s)";
$maxrefererlength =         80;   // maximum length of the referer string
                                  // (including "..." at the string end)

// ---- change these only if you changed the table names in the database ------
define("TBL_REFERER",       "sr_referer"); // Table for the referers
define("TBL_USERAGENT",     "sr_useragent");  // Table for the HTTP USER-AGENTS
define("TBL_BROWSER",       "sr_browser");  // Table for the browser names

// ------------------------ ABSOLUTELY NO CHANGES BELOW!!! --------------------
$languageFile = "lang/lang_$lang.inc";
?>
