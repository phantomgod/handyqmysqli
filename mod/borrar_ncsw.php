<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Delete Multiple Rows using PHP and MySQL</title>
<link href="../includes/style.css" rel="stylesheet" type="text/css" />
<script src="../includes/sorttable.js"></script>
<script type="JavaScript">
function onDelete()
    {
    if (confirm('<?php echo AUDITORIAS_QUIERE_BORRAR; ?>')==true)
        {
        return true;
        }
    else
        {
        return false;
        }
    }
</script>

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script>

<script>
$(document).ready(function() {
$("tr:nth-child(even)").addClass("even");
 });
</script>



</head>
<body>


<div id="container">
<div id="listing">

     <!-- now we need to loop throguh and display our fields -->

<?php
require_once '../includes/mysql.php';
$query = "SELECT * FROM aisgc";

// run the query and store the results in the $result variable.
$result = $mysqli->query($query) or die(mysqli_error($mysqli));

if ($result) {

  // create a new form and then put the results into a table.

  echo DELETE_ADVERTICE;

        echo "<form method='post' action='?seccion=borradas_ncs' OnSubmit='return onDelete();'>";
          echo "<table class='sorttable'>";
            echo "<caption>";
             echo NCS_BORRAR_NCS;
            echo "</caption>";
              echo "<tbody>";
                echo "<tr>";
                 echo "<th>";
                   echo NCS_NUMERO;
                 echo "</th>";
                 echo "<th>";
                    echo NCS_DESCRIPCION;
                  echo "</th>";
                  echo "<th>";
                    echo FECHA;
                  echo "</th>";
                  echo "<th>";
                    echo BORRAR;
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
    echo "</tbody></table><p><input id='delete' type='submit' class='button' name='delete' value='Borrar las seleccionadas'/></p></form>";
}


?>

</div>
</div><!-- end container -->

</body>
</html>
