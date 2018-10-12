<?php
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'avazquez_biouser');
define('DB_PASSWORD', 'biouser@5940');
define('DB_DATABASE', 'avazquez_analisis');

class DB_con {

    function __construct() {
        $connection = ($GLOBALS["___mysqli_ston"] = mysqli_connect(DB_SERVER,  DB_USERNAME,  DB_PASSWORD)) or die('Oops connection error -> ' . ((is_object($GLOBALS["___mysqli_ston"])) ? mysqli_error($GLOBALS["___mysqli_ston"]) : (($___mysqli_res = mysqli_connect_error()) ? $___mysqli_res : false)));
        ((bool)mysqli_query( $connection, "USE " . constant('DB_DATABASE'))) or die('Database error -> ' . ((is_object($GLOBALS["___mysqli_ston"])) ? mysqli_error($GLOBALS["___mysqli_ston"]) : (($___mysqli_res = mysqli_connect_error()) ? $___mysqli_res : false)));
    }

}
?>
