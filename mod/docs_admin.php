<html>
<head>
<link rel="stylesheet" type="text/css" href="/modulares/style.css">
</head>
<body>


</body>
<body style="background-color: 5f5f5f">

	<?php
/*
 * *************************************** PHP Link Script Version 1.0 * [Copyright by DiamondDog] * Bei Fragen zum Copyright * oder Script, besuchen Sie: * If you have questions about copyrights * or script, visit view: * http://www.DiamondDogHamm.de * ***************************************
 */
include ("../includes/mysql.php");
$db = new MySQL ();
?>

	<table class="print">
		<tbody>
			<tr>
				<td><a href="?aktion=add">A�adir documento</a> :: <a
					href="?aktion=change">Cambiar documento</a></td>
			</tr>
		</tbody>
	</table>
	<br>
	<?php

// Aktionen
$aktion = '';
if (isset ( $_GET ['aktion'] )) {
	$aktion = $_GET ['aktion'];
}

if ($aktion == "") {
	echo '&Aacute;rea de administraci&oacute;n';
}

if ($aktion == "add") {
	if ((empty ( $_POST ['docID'] )) and (empty ( $_POST ['categoryID'] )) and (empty ( $_POST ['docname'] )) and (empty ( $_POST ['description'] )) and (empty ( $_POST ['picture'] )) and (empty ( $_POST ['enabled'] )) and (empty ( $_POST ['doc_code'] ))) {
		echo '<form action="" method="POST">';
		echo '<table border="0" cellpadding="0" cellspacing="2" width="150%">';

		/*
		 * echo '<tr>'; echo '<td width="10%"><font color="#4698ca"><b>Doc. ID:</b></font></td>'; echo '<td><input style="width:10%" name="docID" value=""></td>'; echo '</tr>';
		 */

		echo '<tr>';
		echo '<td width="10%"><font color="#4698ca"><b>Categor&iacute;a:</b></font></td>';

		echo '<td>';
		echo '<select name="categoryID">';
		echo '<option>...</option>';

		$sql = "SELECT categoryID, name, parent FROM docs_categories WHERE parent=categoryID ORDER BY parent";
		$sql = mysqli_query($mysqli,  $sql );
		while ( $row = mysqli_fetch_assoc( $sql ) ) {
			$row ['parent'] = htmlentities ( $row ['parent'] );
			$row ['name'] = htmlentities ( $row ['name'] );
			echo '<option value="' . $row [categoryID] . '">' . $row [categoryID] . '-' . $row [name] . '</option>';
		}

		echo '</select>';
		echo '</td>';

		// echo '<td><input style="width:10%" name="categoryID" value=""></td>';
		echo '</tr>';
		echo '<tr>';
		echo '<td width="10%"><font color="#4698ca"><b>Nombre:</b></font></td>';
		echo '<td><input style="width:40%" name="docname" value=""></td>';
		echo '</tr>';
		echo '<tr>';
		echo '<td width="10%"><font color="#4698ca"><b>Descripci&oacute;n:</b></font></td>';
		echo '<td><textarea style="width:40%" rows="5" name="description" value=""></textarea></td>';
		echo '</tr>';
		echo '<tr>';
		echo '<td width="10%"><font color="#4698ca"><b>Imagen:</b></font></td>';
		echo '<td><input style="width:40%" name="picture" value=""></td>';
		echo '</tr>';
		echo '<tr>';
		echo '<td width="10%"><font color="#4698ca"><b>Activo / inactivo:</b></font></td>';

		echo '<td>';
		echo ' <select name="enabled" value="">';
		echo '<option>...</option>';
		echo '<option>Activo</option>';
		echo '<option>Inactivo</option>';
		echo '</select>';
		echo '</td>';

		// echo '<td><input style="width:5%" name="enabled" value=""></td>';
		echo '</tr>';
		echo '<tr>';
		echo '<td width="10%"><font color="#4698ca"><b>Doc. Code:</b></font></td>';
		echo '<td><input style="width:20%" name="doc_code" value=""></td>';
		echo '</tr>';
		echo '<td colspan="2"><input type="submit" value="Enviar"></td>';
		echo '</tr>';
		echo '</table>';
		echo '</form>';
	} else {
		$docID_Post = $_POST ['docID'];
		$categoryID_Post = $_POST ['categoryID'];
		$docname_Post = $_POST ['docname'];
		$description_Post = $_POST ['description'];
		$picture_Post = $_POST ['picture'];
		$enabled_Post = $_POST ['enabled'];
		$doc_code_Post = $_POST ['doc_code'];
		$sql = mysqli_query($mysqli,  "INSERT INTO docs (docID, categoryID, docname, description, picture, enabled, doc_code) VALUES ('" . $docID_Post . "', '" . $categoryID_Post . "', '" . $docname_Post . "', '" . $description_Post . "', '" . $picture_Post . "', '" . $enabled_Post . "', '" . $doc_code_Post . "')" );
		if ($sql)
			echo "Documento añadido";
		else
			echo "Error al añadir el registro!";
	}
}

if ($aktion == "change") {
	// $sql = mysql_query("SELECT * FROM docs ORDER BY docname ASC");

	$sql = mysqli_query($mysqli,  "SELECT DISTINCT docs.*, categories.name FROM docs as docs INNER JOIN docs_categories as categories WHERE categories.categoryID=docs.categoryID ORDER BY docname" );

	echo '<table border="1" cellpadding="5">';
	echo '<tr><td align=center><font color="#4698ca"><b>Doc.ID</b></font></td><td align=center><font color="#4698ca"><b>Categor&iacute;a</b></font></td><td align=center><font color="#4698ca"><b>Nombre del documento</b></font></td><td align=center><font color="#4698ca"><b>Url</b></font></td><td align=center><font color="#4698ca"><b>Picture</b></font></td><td align=center><font color="#4698ca"><b>Activo / inactivo</b></font></td><td align=center><font color="#4698ca"><b>C&oacute;digo del doc.</b></font></td></tr>';
	while ( $row = mysqli_fetch_row( $sql ) ) {
		echo "<tr>";
		echo "<td>" . $row ['0'] . "</td>";
		echo "<td><a href='?aktion=change_id&amp;id=" . $row ['0'] . "'>" . $row ['1'] . "</a> - <a href='?aktion=change_id&amp;id=" . $row ['0'] . "'>" . $row ['7'] . "</a></td>";
		// echo "<td><a href='?aktion=change_id&amp;id=".$row['0']."'>".$row['7']."</a></td>";
		echo "<td><a href='?aktion=change_id&amp;id=" . $row ['0'] . "'>" . $row ['2'] . "</a></td>";
		echo "<td><a href='?aktion=change_id&amp;id=" . $row ['0'] . "'>" . $row ['3'] . "</a></td>";
		echo "<td><a href='?aktion=change_id&amp;id=" . $row ['0'] . "'>" . $row ['4'] . "</a></td>";
		echo "<td><a href='?aktion=change_id&amp;id=" . $row ['0'] . "'>" . $row ['5'] . "</a></td>";
		echo "<td><a href='?aktion=change_id&amp;id=" . $row ['0'] . "'>" . $row ['6'] . "</a></td>";

		echo "</tr>";
	}
	echo "</table>";
}
if ($aktion == "change_id") {
	if ((empty ( $_POST ['docID'] )) and (empty ( $_POST ['categoryID'] )) and (empty ( $_POST ['docname'] )) and (empty ( $_POST ['description'] )) and (empty ( $_POST ['picture'] )) and (empty ( $_POST ['enabled'] )) and (empty ( $_POST ['doc_code'] ))) {
		$id = $_GET ['docID'];
		$sql = mysqli_query($mysqli,  "SELECT * FROM docs WHERE docID = $_GET[id] " );
		$data = mysqli_fetch_row( $sql );

		echo '<form action="" method="POST">';
		echo '<table border="0" cellpadding="0" cellspacing="2" width="100%">';
		echo '<tr>';
		echo '<td width="15%"><font color="#4698ca"><b>ID:</font></td>';
		echo '<td><input style="width:5%" name="docID" value="' . $data [0] . '"></td>';
		echo '</tr>';
		echo '<tr>';
		echo '<td width="15%"><font color="#4698ca"><b>Categor&iacute;a:</font></td>';

		/*
		 * function fillTheCList($parent,$level) //completely expand category tree { $q = mysql_query("SELECT categoryID, name, docs_count, docs_count_admin, parent FROM docs_categories WHERE categoryID<>0 and parent=$parent ORDER BY name"); $a = array(); //parents while ($row = mysql_fetch_row($q)) { $row[5] = $level; $a[] = $row; //process subcategories $b = fillTheCList($row[0],$level+1); //add $b[] to the end of $a[] for ($j=0; $j<count($b); $j++) { $a[] = $b[$j]; } } return $a; } //fillTheCList //show categories select element $cats = fillTheCList(0,0); for ($i=0; $i<count($cats); $i++) { echo "<option value=\"".$cats[$i][0]."\""; if ($row[0] == $cats[$i][0]) //select category echo " selected"; echo ">"; for ($j=0;$j<$cats[$i][5];$j++) echo "&nbsp;&nbsp;"; echo $cats[$i][1]; echo "</option>"; }
		 */
		echo '<td><input style="width:5%" name="categoryID" value="' . $data [1] . '"></td>';
		echo '</tr>';
		echo '<tr>';
		echo '<td width="15%"><font color="#4698ca"><b>Nombre:</font></td>';
		echo '<td><input style="width:40%" name="docname" value="' . $data [2] . '"></td>';
		echo '</tr>';
		echo '<tr>';
		echo '<td width="15%"><font color="#4698ca"><b>Descripci&oacute;n:</font></td>';
		echo '<td><textarea style="width:50%" rows="4" name="description">' . $data [3] . '</textarea></td>';
		echo '</tr>';
		echo '<tr>';
		echo '<td width="15%"><font color="#4698ca"><b>Imagen:</font></td>';
		echo '<td><input style="width:40%" name="picture" value="' . $data [4] . '"></td>';
		echo '</tr>';
		echo '<tr>';
		echo '<td width="15%"><font color="#4698ca"><b>Activo / inactivo:</font></td>';
		echo '<td><input style="width:10%" name="enabled" value="' . $data [5] . '"></td>';
		echo '</tr>';
		echo '<tr>';
		echo '<td width="15%"><font color="#4698ca"><b>Doc. code:</font></td>';
		echo '<td><input style="width:10%" name="doc_code" value="' . $data [6] . '"></td>';
		echo '</tr>';
		echo '<td colspan="2"><input type="submit" value="Enviar"></td>';
		echo '</tr>';
		echo '</table>';
		echo '</form>';
	} else {
		$sql = mysqli_query($mysqli,  "UPDATE docs SET docID='$_POST[docID]',categoryID='$_POST[categoryID]',docname='$_POST[docname]',description='$_POST[description]',picture='$_POST[picture]',enabled='$_POST[enabled]',doc_code='$_POST[doc_code]' WHERE docID=$_GET[id]" );
		if ($sql)
			echo 'Documento actualizado!';
	}
}
?>

</body>
</html>