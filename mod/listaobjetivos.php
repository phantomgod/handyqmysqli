<?php 
/** 
* Mod LISTAR los objetivos de calidad
*  
* PHP version 5 
*  
* @category Mod 
* @package  Handy-q 
* @author   JJuan <javier@textblock.org> 
* @license  http://www.gnu.org/copyleft/gpl.html GNU General Public License 
* @link     http://www.textblock.org 
*/ 
 
$_pagi_sql = "SELECT * FROM objetivosdatosgenerales ORDER BY CodigoObjetivo"; 
 
//cantidad de resultados por página (opcional, por defecto 20) 
$_pagi_cuantos = 10; 
 
//Incluimos el script de paginación. Éste ya ejecuta la consulta automáticamente 
require "includes/paginator.inc.php"; 
echo "<p align=right>".$_pagi_info."</p>"; 
 
echo "<table class='sortable'>"; 
echo "<tr>"; 
echo "<th>" . CODIGO . "</th>"; 
echo "<th>" . NOMBRE . "</th>"; 
/*echo "<th>" . ORIGEN . "</th>"; 
echo "<th>" . OBJETIVOS_DETECCION . "</th>";*/ 
echo "<th>" . OBJETIVOS_CAUSAS . "</th>"; 
//echo "<th>" . OBJETIVOS_RECURSOS . "</th>"; 
echo "<th>" . INDICADOR . "</th>"; 
/*echo "<th>" . OBJETIVOS_FUENTE . "</th>";
echo "<th>" . OBJETIVOS_FRECUENCIA . "</th>";*/ 
echo "<th>" . OBJETIVOS_PLAZO . "</th>"; 
echo "<th>" . RESPONSABLE . "</th>"; 
echo "<th>" . RESULTADO . "</th>"; 
echo "<th>" . FECHA . "</th>"; 
echo "</tr>"; 
 
//Leemos y escribimos los registros de la página actual 
while ($row = mysqli_fetch_array($_pagi_result)) { 
    echo "<tr>"; 
    echo "<td>$row[CodigoObjetivo]</td>"; 
    echo "<td>$row[NombreObjetivo]</td>"; 
    /*echo "<td>$row[Origen]</td>"; 
    echo "<td>$row[Deteccion]</td>";*/ 
    echo "<td>$row[Causas]</td>"; 
    //echo "<td>$row[Recursos]</td>"; 
    echo "<td>$row[Indicador]</td>"; 
    /*echo "<td>$row[Fuente]</td>";
    echo "<td>$row[FrecuenciaDeRevision]</td>";*/ 
    echo "<td width='10%'>$row[Plazo]</td>"; 
    echo "<td>$row[ResponsableDeEjecucion]</td>"; 
    echo "<td>$row[ResultadoFinal]</td>"; 
    echo "<td width='10%'>$row[Fecha]</td>"; 
    echo "</tr>"; 
 
} 
    echo "</table>"; 
//Incluimos la barra de navegación 
echo"<p>".$_pagi_navegacion."</p>"; 
?>