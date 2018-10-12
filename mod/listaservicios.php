<?php 
/** 
* Mod LISTAR los servicios (clientes)
*  
* PHP version 5 
*  
* @category Mod 
* @package  Handy-q 
* @author   JJuan <javier@textblock.org> 
* @license  http://www.gnu.org/copyleft/gpl.html GNU General Public License 
* @link     http://www.textblock.org 
*/ 

$_pagi_sql = "SELECT * FROM servicios WHERE activo=1 ORDER BY id"; 
 
//cantidad de resultados por página (opcional, por defecto 20) 
$_pagi_cuantos = 20; 
 
//Incluimos el script de paginación. Éste ya ejecuta la consulta automáticamente 
require "includes/paginator.inc.php"; 
    echo "<p align=right>".$_pagi_info."</p>"; 
    echo "<table class = 'sortable'>"; 
    echo "<tbody>"; 
        echo "<tr>"; 
            echo "<th><font class=fontd><b>Id:</b></font></th>"; 
            echo "<th><font class=fontd><b>Servicio:</b></font></th>"; 
            echo "<th><font class=fontd><b>Activo:</b></font></th>"; 
            echo "<th><font class=fontd><b>Nº inspecciones:</b></font></th>"; 
        echo "</tr>"; 
 
//Leemos y escribimos los registros de la página actual 
while ($row = mysqli_fetch_array($_pagi_result)) { 
        echo "<tr>"; 
                echo "<td align=center>$row[id]</td>"; 
                echo "<td align=center>$row[servicio]</td>"; 
                echo "<td align=center>$row[activo]</td>"; 
                echo "<td align=center><a target=blank href=$row[urlquery]><img src=images/ico_edit.gif border=0></a></td>"; 
        echo "</tr>"; 
 
} 
        echo "</tbody>"; 
    echo "</table>"; 
//Incluimos la barra de navegación 
echo"<p>".$_pagi_navegacion."</p>"; 
?>