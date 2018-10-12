<?php
/**
* Mod BORRAR TAREAS de seguimiento de objetivos
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
<link href="../includes/style.css" rel="stylesheet" type="text/css" />
<script src="jscripts/even.js"></script>

<script type="JavaScript">
function onDelete() {
    if ( confirm('<?php echo SEGUIMIENTO_QUIERE_BORRAR; ?>\n <?php echo GENERAL_RECUERDE_SELECCIONAR; ?>')==true) {
        return true;
    } else {
        return false;
    }
}
</script>
</head>


    <h1><?php echo BORRAR_SEGUIMIENTO; ?></h1>
     <!-- now we need to loop through and display our fields -->

<?php

require_once 'includes/mysql.php';

$query = "SELECT * FROM objetivosseguimiento";

// run the query and store the results in the $result variable.
$result = $mysqli->query($query) or die(mysqli_error($mysqli));

if ($result) {

    // create a new form and then put the results into a table.
    echo "<form method='post' action='?seccion=borrado_seguimiento' OnSubmit='return onDelete();'>";
     echo "<table class='sortable'>";
        echo "<tr>";
            echo "<th>";
                echo ID;
            echo "</th><th>";
            echo "<th>";
                echo GENERAL_CODIGO;
            echo "</th><th>";
                echo GENERAL_ACCION;
            echo "</th><th>";
                echo GENERAL_RESPONSABLE;
            echo "</th><th>";
                echo DOCUMENTOS_CAPAPART;
            echo "</th><th>";
                echo DOCUMENTOS_FECHAMODIFICACION;
            echo "</th>";
        echo "</tr>";

    while ($row = $result->fetch_object()) {
        $titulo = $row->titulo;
        $revision_num = $row->revision_num;
        $modificacion = $row->modificacion;
        $capapart = $row->capapart;
        $fechamodificacion = $row->fechamodificacion;

        //put each record into a new table row with a checkbox
         echo "<tr>
            <td>$titulo</td>
            <td>$revision_num</td>
            <td>$modificacion</td>
            <td>$capapart</td>
            <td>$fechamodificacion</td>
            <td><input type='checkbox' name='checkbox[]' id='checkbox[]'  value=$id /></td>
            <td><input id='delete' type='submit' class='button' name='delete' value='::'/></td>
         </tr>";

    }

    // when the loop is complete, close off the list.
     echo "</tbody></table><p><input id='delete' type='submit' class='button' name='delete' value='";
     echo GENERAL_BORRAR_SELECCIONADOS;
     echo "'/></p></form>";
}

?>


</body>
</html>