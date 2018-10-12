<html>
<head>
<table class="print">
<caption>!</caption>
<tbody>
</tbody>
</table>
</head>
<body>
<?
# AÑADIMOS EL NUEVO REGISTRO
mysql_query("INSERT INTO objetivosseguimiento (codigoobjetivo,accion,responsable,fechalimite,fechaterminacion,observaciones) VALUES ('{$_POST['codobj']}','{$_POST['accion']}','{$_POST['responsable']}','{$_POST['limite']}','{$_POST['terminacion']}','{$_POST['observaciones']}')");
echo "<b>Seguimiento A&Ntilde;ADIDO</b></br>";
echo "&nbsp;&nbsp;&nbsp;&nbsp;";
echo "<a href=\"?seccion=poner_seguimiento\"><b>Poner otro seguimiento</b></a>";
?>
</body>
</html>