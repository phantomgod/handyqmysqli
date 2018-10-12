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
    if ( confirm('<?php echo DOCUMENTOS_QUIERE_BORRAR; ?>\n <?php echo GENERAL_RECUERDE_SELECCIONAR; ?>')==true) {
        return true;
    } else {
        return false;
    }
}
</script>
</head>

<div id="container">
<div id="listing">
    <h1><?php echo BORRAR_DOCUMENTO; ?></h1>
     <!-- now we need to loop throguh and display our fields -->

<?php

require_once 'includes/mysql.php';

$query = "SELECT id, titulo, link FROM enlaces ORDER BY titulo ASC";

// run the query and store the results in the $result variable.
$result = $mysqli->query($query) or die(mysqli_error($mysqli));

if ($result) {

    // create a new form and then put the results
    // into a table.
      echo "<form method='post' action='?seccion=borrados_documentos' OnSubmit='return onDelete();'>";
       echo "<table class='sortable'>";
        echo "<tr>";
          echo "<th>ID</th>";
          echo "<th>";
            echo NOMBRE_DOCUMENTO;
          echo "</th><th>Url</th><th>";
            echo GENERAL_BORRAR;
          echo "</th>";
        echo "</tr>";

    while ($row = $result->fetch_object()) {
        $id = $row->id;
        $titulo = $row->titulo;
        $link = $row->link;

        //put each record into a new table row with a checkbox
        echo "<tr>
            <td>$id</td>
            <td>$titulo</td>
            <td>$link</td>
            <td><input type='checkbox' name='checkbox[]' id='checkbox[]'  value=$id /></td>
            <td><input id='delete' type='submit' class='button' name='delete' value='×'/></td></tr>";

    }

    // when the loop is complete, close off the list.
    echo "</table><p><input id='delete' type='submit' class='button' name='delete' value='Delete Selected Items'/></p></form>";
}

?>

</div>
</div><!-- end container -->

</body>
</html>