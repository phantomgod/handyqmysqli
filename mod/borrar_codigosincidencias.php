<?php
/**
* Mod BORRAR códigos de incidencias
* de proveedor
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

<script type="JavaScript">
function onDelete() {
    if ( confirm('<?php echo BORRAR_AREASSENSIBLES; ?>\n <?php echo RECUERDE_SELECCIONAR; ?>')==true) {
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

$query = "SELECT * FROM codigosincidencias";

// run the query and store the results in the $result variable.
$result = $mysqli->query($query) or die(mysqli_error($mysqli));

if ($result) {

    // create a new form and then put the results into a table.

    echo DELETE_ADVERTICE;
    echo "<form method='post' action='?seccion=borrados_codigosincidencias' OnSubmit='return onDelete(); '>";
        echo "<table class='sortable'>";
            echo "<caption>";
            echo PROVEEDORES_BORRAR_CODIGOINCIDENCIA;
            echo "</caption>";
                echo "<tbody>";
                    echo "<tr>";
                    echo "<th>ID</th>";
                    echo "<th>";
                    echo CODIGO;
                    echo "</th>";
                     echo "<th>";
                    echo NOMBRE_INCIDENCIA;
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
                        $cod = $row->cod;
                        $codname = $row->codname;
                        //put each record into a new table row with a checkbox
                    echo "<tr>
                        <td>$id</td>
                        <td>$cod</td>
                        <td>$codname</td>
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
