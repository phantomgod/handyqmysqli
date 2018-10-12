<HTML>
<HEAD>
<TITLE>Actualizar NC&acute;s por &aacute;rea</TITLE>
</HEAD>
<BODY>
<?
//Conexion con la base
include_once("../includes/mysql.php");
$db = new MySQL();


//Ejecucion de la sentencia SQL
mysql_query("REPLACE INTO ncsporarea
SELECT afectaa, count( * ) AS cantidad
FROM hojasdemejora
GROUP BY afectaa ");
?>
<div align="center"><h1>Gr&aacute;fico actualizado!</h1></div>
</BODY>
</HTML>