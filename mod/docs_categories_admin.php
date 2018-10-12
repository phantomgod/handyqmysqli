<html>
<head>
<link rel="stylesheet" type="text/css" href="/modulares/style.css">
</head>
<body>
<body style="background-color:5f5f5f ">

<?php
/*
****************************************
PHP Link Script Version 1.0            *
                                       *
[Copyright by DiamondDog]              *
                                       *
Bei Fragen zum Copyright               *
oder Script, besuchen Sie:             *
                                       *
If you have questions about copyrights *
or script, visit view:                 *
                                       *
http://www.DiamondDogHamm.de           *
****************************************
*/
include("../includes/mysql.php");
$db = new MySQL();
?>
<table>
  <tr>
    <td>
      <a href="?aktion=add">A�adir categor&iacute;a</a> ::
      <a href="?aktion=change">Cambiar categor&iacute;a</a>
    </td>
  </tr>
</table>
<br>
<?php


// Aktionen
$aktion = '';
if (isset($_GET['aktion'])) {
    $aktion = $_GET['aktion'];
}

if ($aktion == "") {
 echo 'Admin Area';
}

if ($aktion == "add") {
  if ((empty($_POST['categoryID'])) AND (empty($_POST['name'])) AND (empty($_POST['parent'])) AND (empty($_POST['docs_count'])) AND (empty($_POST['description'])) AND (empty($_POST['picture']))  AND (empty($_POST['docs_count_admin']))) {
    echo '<form action="" method="POST">';
      echo '<table border="0" cellpadding="0" cellspacing="2" width="100%">';
        echo '<tr>';
          /*echo '<td width="10%"><font color="#4698ca"><b>CatID:</b></font></td>';
          echo '<td><input style="width:10%" name="categoryID" value=""></td>';
        echo '</tr>';*/
        echo '<tr>';
          echo '<td width="10%"><font color="#4698ca"><b>Nombre:</b></font></td>';
          echo '<td><input style="width:30%" name="name" value=""></td>';
        echo '</tr>';
        echo '<tr>';
          echo '<td width="10%"><font color="#4698ca"><b>Padre:</b></font></td>';
          echo '<td>';

                echo '<select name="parent">';
                    echo '<option>...</option>';

                     $sql = "SELECT categoryID, name FROM docs_categories ORDER BY categoryID";
                     $sql = mysqli_query($mysqli, $sql);
                     while ($row = mysqli_fetch_assoc($sql)) {
                     $row['categoryID'] = htmlentities($row['categoryID']);
                     $row['name'] = htmlentities($row['name']);
                     echo '<option value="'.$row['categoryID'].'">'.$row[categoryID].'-'.$row[name].'</option>';
                     }

                echo '</select>';

            echo '</td>';

          //echo '<td><input style="width:40%" name="parent" value=""></td>';
        echo '</tr>';
        echo '<tr>';
          echo '<td width="10%"><font color="#4698ca"><b>Docs_count:</b></font></td>';
          echo '<td><input style="width:10%" name="docs_count" value=""></td>';
        echo '</tr>';
        echo '<tr>';
          echo '<td width="10%"><font color="#4698ca"><b>Descripci&oacute;n:</b></font></td>';
          echo '<td><input style="width:70%" name="description" value=""></td>';
        echo '</tr>';
        echo '<tr>';
          echo '<td width="10%"><font color="#4698ca"><b>Imagen:</b></font></td>';
          echo '<td><input style="width:40%" name="picture" value=""></td>';
        echo '</tr>';
        echo '<tr>';
          echo '<td width="10%"><font color="#4698ca"><b>Docs_count_admin:</b></font></td>';
          echo '<td><input style="width:10%" name="docs_count_admin" value=""></td>';
          echo '</tr>';
          echo '<td colspan="2"><input type="submit" value="Submit"></td>';
        echo '</tr>';
      echo '</table>';
    echo '</form>';
  } else {
    //$categoryID_Post = $_POST['categoryID'];
    $name_Post = $_POST['name'];
    $parent_Post = $_POST['parent'];
    $docs_count_Post = $_POST['docs_count'];
    $description_Post = $_POST['description'];
    $picture_Post = $_POST['picture'];
    $docs_count_admin_Post = $_POST['docs_count_admin'];
    $sql =    mysqli_query($mysqli, "INSERT INTO docs_categories (name, parent, docs_count, description, picture, docs_count_admin) VALUES ('".$name_Post."', '".$parent_Post."', '".$docs_count_Post."', '".$description_Post."', '".$picture_Post."', '".$docs_count_admin_Post."')");
    if ($sql) echo "Categor&iacute;a añadida";
    else echo "Error al añadir el registro!";
  }
}

if ($aktion == "change") {
  $sql = mysqli_query($mysqli, "SELECT * FROM docs_categories ORDER BY categoryID ASC");

  echo '<table border="1" cellpadding="5">';
  echo '<tr><td align=center><font color="#4698ca"><b>CatID</b></font></td><td align=center><font color="#4698ca"><b>Nombre</b></font></td><td align=center><font color="#4698ca"><b>Padre</b></font></td><td align=center><font color="#4698ca"><b>Docs_count</b></font></td><td align=center><font color="#4698ca"><b>Descripci&oacute;n</b></font></td><td align=center><font color="#4698ca"><b>Imagen</b></font></td><td align=center><font color="#4698ca"><b>Docs_count_admin</b></font></td></tr>';
  while ($row = mysqli_fetch_row($sql)) {
    echo "<tr>";
    echo "<td>".$row['0']."</td>";
    echo "<td><a href='?aktion=change_id&amp;id=".$row['0']."'>".$row['1']."</a></td>";
    echo "<td><a href='?aktion=change_id&amp;id=".$row['0']."'>".$row['2']."</a></td>";
    echo "<td><a href='?aktion=change_id&amp;id=".$row['0']."'>".$row['3']."</a></td>";
    echo "<td><a href='?aktion=change_id&amp;id=".$row['0']."'>".$row['4']."</a></td>";
    echo "<td><a href='?aktion=change_id&amp;id=".$row['0']."'>".$row['5']."</a></td>";
    echo "<td><a href='?aktion=change_id&amp;id=".$row['0']."'>".$row['6']."</a></td>";
    echo "<td><a href='?aktion=change_id&amp;id=".$row['0']."'>".$row['7']."</a></td>";
    echo "</tr>";
  }
  echo "</table>";
}
if ($aktion == "change_id") {
  if ((empty($_POST['name_change'])) AND (empty($_POST['parent_change'])) AND (empty($_POST['docs_count_change'])) AND (empty($_POST['description_change'])) AND (empty($_POST['picture_change'])) AND (empty($_POST['docs_count_admin_change']))) {
    $id = $_GET['categoryID'];
    $sql = mysqli_query($mysqli, "SELECT * FROM docs_categories WHERE categoryID = $_GET[id] ");
    $data = mysqli_fetch_row($sql);

    echo '<form action="" method="POST">';
      echo '<table border="0" cellpadding="0" cellspacing="2" width="100%">';
        echo '<tr>';
          echo '<td width="10%"><font color="#4698ca">Nombre:</font></td>';
          echo '<td><input style="width:40%" name="name_change" value="'.$data[1].'"></td>';
        echo '</tr>';
        echo '<tr>';
          echo '<td width="10%"><font color="#4698ca">Padre:</font></td>';
          echo '<td><input style="width:10%" name="parent_change" value="'.$data[2].'"></td>';
        echo '</tr>';
        echo '<tr>';
          echo '<td width="10%"><font color="#4698ca">Docs_count:</font></td>';
          echo '<td><input style="width:10%" name="docs_count_change" value="'.$data[3].'"></td>';
        echo '</tr>';
        echo '<tr>';
          echo '<td width="10%"><font color="#4698ca">Descripci&oacute;n:</font></td>';
          echo '<td><textarea style="width:50%" rows="4" name="description_change">'.$data[4].'</textarea></td>';
        echo '</tr>';
        echo '<tr>';
          echo '<td width="10%"><font color="#4698ca">Imagen:</font></td>';
          echo '<td><input style="width:20%" name="picture_change" value="'.$data[5].'"></td>';
        echo '</tr>';
        echo '<tr>';
          echo '<td width="10%"><font color="#4698ca">Docs_count_admin:</font></td>';
          echo '<td><input style="width:10%" name="docs_count_admin_change" value="'.$data[6].'"></td>';
        echo '</tr>';
          echo '<td colspan="2"><input type="submit" value="Enviar"></td>';
        echo '</tr>';
      echo '</table>';
    echo '</form>';
  } else {
    $sql = mysqli_query($mysqli, "UPDATE docs_categories SET name='$_POST[name_change]',parent='$_POST[parent_change]',docs_count='$_POST[docs_count_change]',description='$_POST[description_change]',picture='$_POST[picture_change]',docs_count_admin='$_POST[docs_count_admin_change]' WHERE categoryID=$_GET[id]");
    if ($sql) echo 'Categor&iacute;a actualizada!';
  }
}
?>
</body>
</html>