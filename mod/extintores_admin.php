<html>
<head>
</head>
<body>
</body>
<body style="background-color: transparent">
	<table class="print">
		<caption>
			<?php echo EXTINTORES_ADMINISTRAR_EXTINTORES; ?>
		</caption>
		<tbody>
			<tr>
				<td><a href="?seccion=extintores_admin&amp;aktion=add"><?php echo EXTINTORES_ANADIR_EXTINTOR; ?></a>
					:: <a href="?seccion=extintores_admin&amp;aktion=change"><?php echo EXTINTORES_MODIFICAR_EXTINTOR; ?></a>
				</td>
			</tr>
		</tbody>
	</table>
	<br>
	<?php
	$aktion = '';
	if (isset ( $_GET ['aktion'] )) {
		$aktion = $_GET ['aktion'];
	}

	if ($aktion == "") {
		echo 'Admin Area';
	}

	if ($aktion == "add") {
		if ((empty ( $_POST ['fecha_add'] ))
		and (empty ( $_POST ['cliente_add'] ))
		and (empty ( $_POST ['ndeserie_add'] ))
		and (empty ( $_POST ['fechafabricacion_add'] ))
		and (empty ( $_POST ['agente_add'] ))
		and (empty ( $_POST ['ejecucion_add'] ))
		and (empty ( $_POST ['proxima_add'] ))
		and (empty ( $_POST ['estado_add'] ))
		and (empty ( $_POST ['numextintores_add'] ))) {
			?>
			<form action="" method="POST">
			<table class=print>
			<caption><?php echo EXTINTORES_ANADIR_EXTINTOR ?></caption>
			<tbody>
			<tr>
			<th><?php echo FECHA ?>:</th>
			<td><input class="inputfecha" name="fecha_add" value="">&nbsp;aaa/mm/dd</td>
			</tr>
			<tr>
			<th><?php echo EXTINTORES_CLIENTE ?>:</th>
			<td><input class="inputlargo" name="cliente_add" value=""></td>
			</tr>
			<tr>
			<th><?php echo EXTINTORES_NDESERIE ?>:</th>
			<td><input class="inputlargo" name="ndeserie_add" value=""></td>
			</tr>
			<tr>
			<th><?php echo EXTINTORES_FECHA_FABRICACION ?>: </th>
			<td><input class="inputfecha" name="fechafabricacion_add" value=""></td>
			</tr>
			<tr>
			<th><?php echo EXTINTORES_AGENTE_EXTINTOR ?>: </th>
			<td><input class="inputlargo" name="agente_add" value=""></td>
			</tr>
			<tr>
			<th><?php echo EXTINTORES_EJECUCION ?>:</th>
			<td><textarea class="textareanormal" name="ejecucion_add"></textarea></td>
			</tr>
			<tr>
			<th><?php echo EXTINTORES_PROXIMA_EJECUCION ?>:</th>
			<td><input class="inputfecha" name="proxima_add" value=""></td>
			</tr>
			<tr>
			<th><?php echo ESTADO ?>:</th>
			<td><input class="inputfecha" name="estado_add" value=""></td>
			</tr>
			<tr>
			<th><?php echo EXTINTORES_NUMEXTINTORES ?>:</th>
			<td><input class="inputnormal" name="numextintores_add" value=""></td>
			</tr>
			<tr>
			<td colspan="2"><button type="submit" class="btn btn-info"><?php echo ANADIR; ?></button></td>
			</tr>
			</tbody>
			</table>
			</form>
			<?php
		} else {
			$fecha_Post = $_POST ['fecha_add'];
			$cliente_Post = $_POST ['cliente_add'];
			$ndeserie_Post = $_POST ['ndeserie_add'];
			$fechafabricacion_Post = $_POST ['fechafabricacion_add'];
			$agente_Post = $_POST ['agente_add'];
			$ejecucion_Post = $_POST ['ejecucion_add'];
			$proxima_Post = $_POST ['proxima_add'];
			$estado_Post = $_POST ['estado_add'];
			$numextintores_Post = $_POST ['numextintores_add'];
			$sql = mysqli_query($mysqli,  "INSERT INTO extintores (fecha, cliente, ndeserie, fechafabricacion, agente, ejecucion, proxima, estado, numextintores) VALUES ('" . $fecha_Post . "', '" . $cliente_Post . "', '" . $ndeserie_Post . "', '" . $fechafabricacion_Post . "', '" . $agente_Post . "', '" . $ejecucion_Post . "', '" . $proxima_Post . "', '" . $estado_Post . "', '" . $numextintores_Post . "')" );
			if ($sql)
				echo EXTINTORES_EXTINTOR_ANADIDO;
			else
				echo "Error al añadir el registro!";
		}
	}

	if ($aktion == "change") {
		$sql = mysqli_query($mysqli,  "SELECT * FROM extintores ORDER BY id DESC" );

		echo '<table class="print">';
		echo '<tbody>';
		echo '<caption>' . EXTINTORES_LISTA . '</caption>';
		echo '<thead>' . EXTINTORES_THEAD_ADVERTICE . '</thead>';
		echo '<tr><th style width=10%>' . FECHA . '</th><th style width="40%">' . EXTINTORES_CLIENTE . '</th><th>' . EXTINTORES_NDESERIE . '</th>';
		while ( $row = mysqli_fetch_row( $sql ) ) {
			echo "<tr>";
			// echo "<td>".$row['0']."</td>";
			echo "<td><a href='?seccion=extintores_admin&amp;aktion=change_id&amp;id=" . $row ['0'] . "'>" . $row ['1'] . "</a></td>";
			echo "<td style width=40%><a href='?seccion=extintores_admin&amp;aktion=change_id&amp;id=" . $row ['0'] . "'>" . $row ['2'] . "</a></td>";
			echo "<td><a href='?seccion=extintores_admin&amp;aktion=change_id&amp;id=" . $row ['0'] . "'>" . $row ['3'] . "</a></td>";
			echo "</tr>";
		}
		echo '<t/body>';
		echo "</table>";
	}
	if ($aktion == "change_id") {
		if ((empty ( $_POST ['fecha_change'] )) and (empty ( $_POST ['cliente_change'] )) and (empty ( $_POST ['ndeserie_change'] )) and (empty ( $_POST ['fechafabricacion_change'] )) and (empty ( $_POST ['agente_change'] )) and (empty ( $_POST ['ejecucion_change'] )) and (empty ( $_POST ['proxima_change'] )) and (empty ( $_POST ['estado_change'] )) and (empty ( $_POST ['numextintores_change'] ))) {
			$id = $_GET ['id'];
			$sql = mysqli_query($mysqli,  "SELECT * FROM extintores WHERE id = $_GET[id] " );
			$data = mysqli_fetch_row( $sql );

			echo '<form action="" method="POST">';
			echo '<table class="print">';
			echo '<caption>' . EXTINTORES_MODIFICAR_EXTINTOR . '</caption>';
			echo '<tbody>';
			/*
			 * echo '<tr>'; echo '<th>Id: </th>'; echo '<td><input class="inputid" name="id_change" value="'.$data[0].'"></td>'; echo '</tr>';
			 */
			echo '<tr>';
			echo '<th>' . FECHA . ': </th>';
			echo '<td><input class="inputfecha" name="fecha_change" value="' . $data [1] . '"></td>';
			echo '</tr>';
			echo '<tr>';
			echo '<th>' . EXTINTORES_CLIENTE . ': </th>';
			echo '<td><input class="inputlargo" name="cliente_change" value="' . $data [2] . '"></td>';
			echo '</tr>';
			echo '<tr>';
			echo '<th>' . EXTINTORES_NDESERIE . ': </th>';
			echo '<td><input class="inputlargo" name="ndeserie_change" value="' . $data [3] . '"></td>';
			echo '</tr>';
			echo '<tr>';
			echo '<th>' . EXTINTORES_FECHA_FABRICACION . ': </th>';
			echo '<td><input class="inputfecha" name="fechafabricacion_change" value="' . $data [4] . '"></td>';
			echo '</tr>';
			echo '<tr>';
			echo '<th>' . EXTINTORES_AGENTE_EXTINTOR . ': </th>';
			echo '<td><input class="inputnormal" name="agente_change" value="' . $data [5] . '"></td>';
			echo '</tr>';
			echo '<tr>';
			echo '<th>' . EXTINTORES_EJECUCION . ': </th>';
			echo '<td><textarea class="textareanormal" rows="5" name="ejecucion_change">' . $data [6] . '</textarea></td>';
			echo '</tr>';
			echo '<tr>';
			echo '<th>' . EXTINTORES_PROXIMA_EJECUCION . ': </th>';
			echo '<td><input class="inputfecha" name="proxima_change" value="' . $data [7] . '"></td>';
			echo '</tr>';
			echo '<tr>';
			echo '<th>' . ESTADO . ': </th>';
			echo '<td><input class="inputlargo" name="estado_change" value="' . $data [8] . '"></td>';
			echo '</tr>';
			echo '<tr>';
			echo '<th>' . EXTINTORES_NUMEXTINTORES . ': </th>';
			echo '<td><input class="inputid" name="numextintores_change" value="' . $data [9] . '"></td>';
			echo '</tr>';
			echo '<tr>';
			echo '<td colspan="2"><button type="submit" class="btn btn-info">' . MODIFICAR . '</button></td>';
			echo '</tr>';
			echo '<tbody>';
			echo '</table>';
			echo '</form>';
		} else {
			$sql = mysqli_query($mysqli,  "UPDATE extintores SET fecha='$_POST[fecha_change]',cliente='$_POST[cliente_change]',ndeserie='$_POST[ndeserie_change]',fechafabricacion='$_POST[fechafabricacion_change]',agente='$_POST[agente_change]',ejecucion='$_POST[ejecucion_change]',proxima='$_POST[proxima_change]',estado='$_POST[estado_change]',numextintores='$_POST[numextintores_change]' WHERE id=$_GET[id]" );
			if ($sql)
				echo EXTINTORES_EXTINTOR_ACTUALIZADO;
		}
	}
	?>
</body>
</html>
