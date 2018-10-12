<?php
/**
* Mod COMBINAR auditorías y no conformidades
*
* PHP version 5
*
* @category Mod
* @package  Handy-q
* @author   JJuan <javier@textblock.org>
* @license  http://www.gnu.org/copyleft/gpl.html GNU General Public License
* @link     http://www.textblock.org
*/


$_pagi_sql = "SELECT hojas.id id_1, hojas.numhoja, hojas.descripcion, hojas.acciones, hojas.fecha, hojas.afectaa, hojas.cerradofecha, audit.ai, audit.id id_2
FROM hojasdemejora AS hojas
LEFT JOIN informeauditoria AS audit ON hojas.ai = audit.ai
GROUP BY hojas.id DESC
ORDER BY  `audit`.`id` ASC ";

//cantidad de resultados por página (opcional, por defecto 20)
$_pagi_cuantos = 30;

//Incluimos el script de paginación. Éste ya ejecuta la consulta automáticamente
require "includes/paginator.inc.php";

echo "<p align=right>".$_pagi_info."</p>";


echo NCS_AUDITS_JOIN_LIST;

    echo "<table class='sortable'>";
        echo "<caption>";
            ?>
            <div id="help" onMouseOver="showdiv(event,'<?php echo AUDITORIAS_JOIN_HELP; ?>');" onMouseOut="hiddenDiv()" style='display:table;margin-top3px;'>
        <?php echo AUDITORIAS_JOIN; ?>
            &nbsp;&nbsp;&nbsp;&nbsp;
            <img src="images/help.png" /></div>
        <?php
        echo "</caption>";
        
                echo "<tbody>";
                echo "<tr>";
                echo "<th>Id:</th>";
                echo "<th>";
                echo AUDITORIAS_AI;
                echo "</th>";
                echo "<th>";
                echo AUDITORIAS_HOJA;
                echo "</th>";
                echo "</tr>";
//Leemos y escribimos los registros de la página actual

while ($row = mysql_fetch_array($_pagi_result)) {

        echo "<tr>";
            echo "<td>$row[id_1]</td>";
            echo "<td><a href=?seccion=auditorias_print&amp;aktion=print_id&amp;id=".$row['id_2'].">$row[ai]</a></td>";
            echo "<td><a href=?seccion=ncs_print&amp;aktion=print_id&amp;id=".$row['id_1'].">$row[numhoja]</a></td>";

        echo "</tr>";
}
    echo "</tbody>";
    echo "</table><br /><br />";
//Incluimos la barra de navegación
echo"<p>".$_pagi_navegacion."</p>";
?>