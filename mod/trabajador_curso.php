<html> 
<head> 
<meta http-equiv="Content-Type" content="text/html; charset=ISO 8859-1"> 
<link rel="stylesheet" type="text/css" href="/modulares/style.css"> 
<title>Listado de Nc´s por auditoría</title> 
</head> 
<body style="background-color:transparent "> 
<center> 
<? 
require_once("../includes/mysql.php"); 
$db = new MySQL(); 
 
$_pagi_sql = "SELECT cursos.id id_1,cursos.trabajador trabajador_1,cursos.curso,cursos.lugar,cursos.fecha,cursos.horas,cursos.validacion,trabajadores.trabajador trabajador_2,trabajadores.id id_2 FROM cursos                INNER JOIN trabajadores ON cursos.trabajador=trabajadores.trabajador ORDER BY trabajadores.trabajador";//SELECT g.*,s.* from objetivosdatosgenerales as g                         //INNER JOIN objetivosseguimiento as s on s.codigoobjetivo=g.CodigoObjetivo//$sql = mysql_query("SELECT * FROM objetivosdatosgenerales ORDER BY Id DESC"); 
//cantidad de resultados por página (opcional, por defecto 20) 
$_pagi_cuantos = 20; 
//Incluimos el script de paginación. Éste ya ejecuta la consulta automáticamente 
include("../includes/paginator.inc.php"); 
    echo "<table width='90%' border = '1'>"; 
    echo "<tr>"; 
    echo "<td align=center><b><font color=#4698ca>Id:</font></b></td>"; 
    echo "<td align=center><b><font color=#4698ca>Trabajador:</font></b></td>"; 
    echo "<td align=center><b><font color=#4698ca>Curso:</font></b></td>"; 
    echo "<td align=center><b><font color=#4698ca>Lugar:</font></b></td>"; 
    echo "<td align=center><b><font color=#4698ca>Fecha:</font></b></td>"; 
    echo "<td align=center><b><font color=#4698ca>Horas:</font></b></td>"; 
    echo "<td align=center><b><font color=#4698ca>Validaci&oacute;n:</font></b></td>";     
    echo "</tr>"; 
//Leemos y escribimos los registros de la página actual 
while ($row = mysql_fetch_array($_pagi_result)) { 
 
    echo "<tr>"; 
    echo "<td>$row[id_1]</td>"; 
     
    //echo "<td><a href=auditorias_print.php?aktion=print_id&amp;id=".$row['id_2'].">$row[ai]</a></td>"; 
    //echo "<td><a href=ncs_print.php?aktion=print_id&amp;id=".$row['id_1'].">$row[numhoja]</a></td>";     
    //echo "<td>$row[numhoja]</td>"; 
    echo "<td>$row[trabajador_2]</td>"; 
    echo "<td>$row[curso]</td>"; 
    echo "<td>$row[lugar]</td>"; 
    echo "<td>$row[fecha]</td>"; 
    echo "<td>$row[horas]</td>"; 
    echo "<td>$row[validacion]</td>"; 
    echo "</tr>"; 
} 
//Incluimos la barra de navegación 
echo"<p>".$_pagi_navegacion."</p>"; 
?> 
</body> 
</html>