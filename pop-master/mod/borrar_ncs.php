<?php
/**
* Mod borrar no conformidades
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
    if ( confirm('<?php echo NCS_QUIERE_BORRAR; ?>\n <?php echo GENERAL_RECUERDE_SELECCIONAR; ?>')==true) {
        return true;
    } else {
        return false;
    }
}
</script>
</head>
<body>

<h1><?php echo NCS_BORRAR_NC; ?></h1>

<div id="container">
   <div id="listing">

     <!-- now we need to loop through and display our fields -->

<?php
require_once 'includes/mysql.php';
$query = "SELECT id, numhoja, descripcion, fecha FROM hojasdemejora";

// run the query and store the results in the $result variable.
$result = $mysqli->query($query) or die(mysqli_error($mysqli));

if ($result) {
    // create a new form and then put the results into a table.
      echo "<form method='post' action='?seccion=borradas_ncs' OnSubmit='return onDelete();'>";
      echo "<table class='sortable'>";
        echo "<tbody><tr>";
           echo "<th>";
             echo NCS_NUMERO;
           echo "</th><th>";
             echo NCS_DESCRIPCION;
           echo "</th><th>";
             echo GENERAL_FECHA;
           echo "</th><th>";
             echo GENERAL_BORRAR;
           echo "</th>";
        echo "</tr>";
    while ($row = $result->fetch_object()) {
        $numhoja = $row->numhoja;
        $descripcion = $row->descripcion;
        $fecha = $row->fecha;
        $id = $row->id;

        //put each record into a new table row with a checkbox
        echo "<tr>
            <td>$numhoja</td>
            <td style width='60%'>$descripcion</td>
            <td>$fecha</td>
            <td><input type='checkbox' name='checkbox[]' id='checkbox[]'  value=$id /></td>
            <td><input id='delete' type='submit' class='button' name='delete' value='::'/></td>
         </tr>";

    }

    // when the loop is complete, close off the list.
    echo "</table><p><input id='delete' type='submit' class='button' name='delete' value='Borrar las seleccionadas'/></p></form>";
}

?>
  </div>
</div><!-- end container -->
</body>
</html>