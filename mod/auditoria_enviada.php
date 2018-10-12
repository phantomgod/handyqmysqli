<html> 
 
<head> 
<table class="print" summary="Administrar documentos"> 
<caption><?php echo AUDITORIAS_AUDITORIA_ENVIADA; ?></caption> 
<tbody> 
</tbody> 
</table> 
</head> 
 
<body> 
<? 
/*require_once("includes/mysql.php"); 
$db = new MySQL();*/ 
# AÑADIMOS EL NUEVO REGISTRO 
mysql_query("INSERT INTO informeauditoria (ai,Fecha,AreaAuditada,Documentacion,Auditor,ObjetoAuditoria,Resultado) VALUES ('{$_POST['ai']}','{$_POST['Fecha']}','{$_POST['AreaAuditada']}','{$_POST['Documentacion']}','{$_POST['Auditor']}','{$_POST['ObjetoAuditoria']}','{$_POST['Resultado']}')"); 
//echo "<h2>$lang['AUDITORIAS_AUDITORIA_ENVIADA']</h2>"; 
echo "<a href=\"../modulares/?mod=poner_auditoria\">$lang['AUDITORIAS_PONER_OTRA']</a>"; 
?> 
</body> 
</html>