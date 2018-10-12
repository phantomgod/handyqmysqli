<?php
/**
* Mod borrar auditorías al sistema de calidad
*
* PHP version 5
*
* @category Mod
* @package  Handy-q
* @author   JJuan <javier@textblock.org>
* @license  http://www.gnu.org/copyleft/gpl.html GNU General Public License
* @link     http://www.textblock.org
*/
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="../templates/style.css" rel="stylesheet" type="text/css" />

<script type="JavaScript">
function onDelete() {
    if ( confirm('<?php echo AUDITORES_QUIERE_BORRAR; ?>\n <?php echo RECUERDE_SELECCIONAR; ?>')==true) {
        return true;
    } else {
        return false;
    }
}
</script>
</head>

<body>

<div id="container">
   <div id="listing">

     <!-- now we need to loop throguh and display our fields -->

<?php

require_once 'includes/mysql.php';

$query = "SELECT * FROM auditores";

// run the query and store the results in the $result variable.
$result = $mysqli->query($query) or die(mysqli_error($mysqli));

if ($result) {

    // create a new form and then put the results into a table.

    echo DELETE_ADVERTICE;
    echo "<form method='post' action='?seccion=borrados_auditores' OnSubmit='return onDelete(); '>";


        echo "<table class='sortable'>";
            echo "<caption>";
            echo AUDITORES_BORRAR;
            echo "</caption>";

                echo "<tbody>";
                    echo "<tr>";
                    echo "<th>ID</th>";
                    echo "<th>";
                    echo AUDITORIAS_AUDITOR;
                    echo "</th>";
                    echo "<th>";
                    echo IMAGEN;
                    echo "</th>";
                    echo "<th>";
                    echo ESTADO;
                    echo "</th>";
                    echo "<th>";
                    echo SELECCIONAR;
                    echo "</th>";
                    echo "<th>";
                    echo BORRAR;
                    echo "</th>";
                    echo "</tr>";
    while ($row = $result->fetch_object()) {
                        $id = $row->id;
                        $auditor = $row->auditor;
                        $imgsrc = $row->imgsrc;
                        $activo = $row->activo;

                        //put each record into a new table row with a checkbox
                    echo "<tr>
                        <td>$id</td>
                        <td>$auditor</td>
                        <td><a href='?seccion=auditores_admin2c&amp;aktion=change_id&amp;id=$id'><img src=$imgsrc width=80px height=113px></a></td>
                        <td>$activo</td>
                        <td><input type='checkbox' name='checkbox[]' id='checkbox[]'  value=$id /></td>
                        <td><input id='delete' type='submit' class='button' name='delete' value='X'/></td>
                        <td></td>
                         </tr>";
    }

    // when the loop is complete, close off the list.
    echo "</tbody></table><p><input id='delete' type='submit' class='button' name='delete' value='";
    echo BORRAR_SELECCIONADOS;
    echo "'/></p></form>";
}

?>

</div>
</div>
<!-- end container -->
</body>
</html>
