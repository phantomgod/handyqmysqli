<html>
<head>
</head>
<body>

			<?php

echo DOCUMENTOS_ADMINISTRAR_DOCUMENTOS;

		?>
			/ <a href="?seccion=documentos_admin&amp;aktion=add"><?php echo DOCUMENTOS_ANADIR_DOCUMENTO; ?></a>::
					<a href="?seccion=documentos_admin&amp;aktion=change"><?php echo DOCUMENTOS_CAMBIAR_DOCUMENTO; ?></a>
			<br />
	<?php

// Aktionen
$aktion = '';
if (isset ( $_GET ['aktion'] ))
	$aktion = $_GET ['aktion'];

if ($aktion == "") {
	echo 'Admin Area';
}

if ($aktion == "add") {
	if ((empty ( $_POST ['idsolicitud'] )) and (empty ( $_POST ['fecha'] )) and (empty ( $_POST ['titulo'] )) and (empty ( $_POST ['link'] )) and (empty ( $_POST ['comment'] )) and (empty ( $_POST ['seccionid'] )) and (empty ( $_POST ['clave1'] ))) {
		echo '<form action="" method="POST">';
		echo '<table class="print">';
		echo '<caption>' . DOCUMENTOS_ANADIR_DOCUMENTO . '</caption>';
		echo '<tbody>';
		echo '<tr>';
		echo '<th>' . DOCUMENTOS_IDSOLICITUD . '</th>';
		echo '<td><input class="inputlargo" name="idsolicitud" value=""></td>';
		echo '</tr>';
		echo '<tr>';
		echo '<th>' . FECHA . '</th>';
		echo '<td><input class="inputlargo" name="fecha" value=""></td>';
		echo '</tr>';
		echo '<tr>';
		echo '<th>' . NOMBRE_DOCUMENTO . '</th>';
		echo '<td><input class="inputlargo" name="titulo" value=""></td>';
		echo '</tr>';
		echo '<tr>';
		echo '<th>Link</th>';
		echo '<td><input class="inputlargo" name="link" value=""></td>';
		echo '</tr>';
		echo '<tr>';
		echo '<th>' . COMENTARIOS . '</th>';
		echo '<td><input class="inputlargo" name="comment" value=""></td>';
		echo '</tr>';
		echo '<tr>';
		echo '<th>' . DOCUMENTOS_SECCIONID . '</th>';
		echo '<td><input class="inputlargo" name="seccionid" value=""></td>';
		echo '</tr>';
		echo '<tr>';
		echo '<th>Clave1</th>';
		echo '<td><input class="inputlargo" name="clave1" value=""></td>';
		echo '</tr>';
		echo '<td colspan="2"><input type="submit" value="' . MODIFICAR . '"></td>';
		echo '</tr>';
		echo '</tbody>';
		echo '</table>';
		echo '</form>';
	} else {
		$idsolicitud_Post = $_POST ['idsolicitud'];
		$fecha_Post = $_POST ['fecha'];
		$titulo_Post = $_POST ['titulo'];
		$link_Post = $_POST ['link'];
		$comment_Post = $_POST ['comment'];
		$seccionid_Post = $_POST ['seccionid'];
		$clave1_Post = $_POST ['clave1'];
		$sql = mysqli_query($mysqli,  "INSERT INTO enlaces (idsolicitud, fecha, titulo, link, comment, seccionid, clave1) VALUES ('" . $idsolicitud_Post . "', '" . $fecha_Post . "', '" . $titulo_Post . "', '" . $link_Post . "', '" . $comment_Post . "', '" . $seccionid_Post . "', '" . $clave1_Post . "')" );
		if ($sql)
			echo "Documento añadido";
		else
			echo "Error al añadir el registro!";
	}
}

if ($aktion == "change") {
	$sql = mysqli_query($mysqli,  "SELECT * FROM enlaces ORDER BY titulo ASC" );
	mysqli_query($mysqli,  "SET NAMES 'utf8'" );

	echo '<table class="print">';
	echo '<caption>';
	echo DOCUMENTOS_CAMBIAR_DOCUMENTO;
	echo '</caption>';
	echo '<thead>';
	echo DOCUMENTOS_THEAD_ADVERTICE;
	echo '</thead>';
	echo '<tbody>';
	echo '<tr>';
	echo '<th>';
	echo NOMBRE_DOCUMENTO;
	echo '</th>';
	echo '<th>Link</th>';
	echo '<th>' . COMENTARIOS . '</th>';
	echo '</tr>';
	while ( $row = mysqli_fetch_row( $sql ) ) {
		echo "<tr>";
		/*
		 * echo "<td>".$row['0']."</td>"; echo "<td><a href='?seccion=documentos_admin&amp;aktion=change_id&amp;id=".$row['0']."'>".$row['1']."</a></td>"; echo "<td><a href='?seccion=documentos_admin&amp;aktion=change_id&amp;id=".$row['0']."'>".$row['2']."</a></td>";
		 */
		echo "<td><a href='?seccion=documentos_admin&amp;aktion=change_id&amp;id=" . $row ['0'] . "'>" . $row ['3'] . "</a></td>";
		echo "<td><a href='?seccion=documentos_admin&amp;aktion=change_id&amp;id=" . $row ['0'] . "'>" . $row ['4'] . "</a></td>";
		echo "<td><a href='?seccion=documentos_admin&amp;aktion=change_id&amp;id=" . $row ['0'] . "'>" . $row ['5'] . "</a></td>";
		/*
		 * echo "<td><a href='?seccion=documentos_admin&amp;aktion=change_id&amp;id=".$row['0']."'>".$row['6']."</a></td>"; echo "<td><a href='?seccion=documentos_admin&amp;aktion=change_id&amp;id=".$row['0']."'>".$row['7']."</a></td>";
		 */
		echo "</tr>";
	}
	echo '</tbody>';
	echo "</table>";
}

if ($aktion == "change_id") {
	if ((empty ( $_POST ['idsolicitud_change'] )) and (empty ( $_POST ['fecha_change'] )) and (empty ( $_POST ['titulo_change'] )) and (empty ( $_POST ['link_change'] )) and (empty ( $_POST ['comment_change'] )) and (empty ( $_POST ['seccionid_change'] )) and (empty ( $_POST ['clave1_change'] ))) {
		$id = $_GET ['id'];
		$sql = mysqli_query($mysqli,  "SELECT * FROM enlaces WHERE id = $_GET[id] " );
		$data = mysqli_fetch_row( $sql );

		echo '<form action="" method="POST">';
		echo '<table class="print">';
		echo '<caption>';
		echo DOCUMENTOS_PRINT_DETAILS;
		echo '</caption>';
		echo '<tbody>';
		echo '<tr>';
		echo '<th>';
		echo DOCUMENTOS_IDSOLICITUD;
		echo '</th>';
		echo '<td><input class="inputlargo" name="idsolicitud_change" value="' . $data [1] . '"></td>';
		echo '</tr>';
		echo '<tr>';
		echo '<th>';
		echo FECHA;
		echo '</th>';
		echo '<td><input class="inputlargo" name="fecha_change" value="' . $data [2] . '"></td>';
		echo '</tr>';
		echo '<tr>';
		echo '<th>';
		echo NOMBRE_DOCUMENTO;
		echo '</th>';
		echo '<td><input class="inputlargo" name="titulo_change" value="' . $data [3] . '"></td>';
		echo '</tr>';
		echo '<tr>';
		echo '<th>Link</th>';
		echo '<td><input class="inputlargo" name="link_change" value="' . $data [4] . '"></td>';
		echo '</tr>';
		echo '<tr>';
		echo '<th>' . COMENTARIOS . '</th>';
		echo '<td><input class="inputlargo" name="comment_change" value="' . $data [5] . '"></td>';
		echo '</tr>';
		echo '<tr>';
		echo '<th>' . DOCUMENTOS_SECCIONID . '</th>';
		echo '<td><input class="inputlargo" name="seccionid_change" value="' . $data [6] . '"></td>';
		echo '</tr>';
		echo '<tr>';
		echo '<th>Clave1</th>';
		echo '<td><input class="inputlargo" name="clave1_change" value="' . $data [7] . '"></td>';
		echo '</tr>';
		echo '<td colspan="2"><input type="submit" value="' . MODIFICAR . '"></td>';
		echo '</tr>';
		echo '</tbody>';
		echo '</table>';
		echo '</form>';
	} else {
		$sql = mysqli_query($mysqli,  "UPDATE enlaces SET idsolicitud='$_POST[idsolicitud_change]',fecha='$_POST[fecha_change]',titulo='$_POST[titulo_change]',link='$_POST[link_change]',comment='$_POST[comment_change]',seccionid='$_POST[seccionid_change]',clave1='$_POST[clave1_change]' WHERE id=$_GET[id]" );
		if ($sql)
			echo '' . DOCUMENTO_ACTUALIZADO . '';
  }
}
?>
</body>
</html>