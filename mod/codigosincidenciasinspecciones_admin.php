<?php
/**
* Mod c�digos de incidencias de inspecciones
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
<html>
<head>
</head>
<body>

		<?php echo INSPECCIONES_ADMINISTRAR_CODIGOSINCIDENCIAS;?> /
			
		<a href="?seccion=codigosincidenciasinspecciones_admin&amp;aktion=add"><?php echo INSPECCIONES_ANADIR_CODIGOSINCIDENCIA; ?></a> ::
		<a href="?seccion=codigosincidenciasinspecciones_admin&amp;aktion=change"><?php echo INSPECCIONES_MODIFICAR_CODIGOSINCIDENCIA; ?></a>

	<br />
	<?php

	// Aktionen
	$aktion = '';
	if (isset ( $_GET ['aktion'] )) {
		$aktion = $_GET ['aktion'];
	}

	if ($aktion == "") {
		echo 'Admin Area';
	}

	if ($aktion == "add") {
		if ((empty ( $_POST ['codname'] ))) {
			echo '<form action="" method="POST">';
			echo '<table class="print">';
			echo '<tbody>';
			echo '<tr>';
			echo '<th width="15%">';
	?>

	<div align="center">
    <p align="left">
    <a class="tooltip2" href="#"><?php echo CODIGO; ?><span class="custom help"><img src="images/Help2.png" alt="Help" title="Help" height="48" width="48" /><em><?php echo AYUDA; ?></em><?php echo CODIGOSINCIDENCIAS_LASTID_HELP; ?></span></a></p>
    </div>
	<?php
			echo '</th>';
			echo '<td>';
			echo '<input type="text" class="form-control input-mini" id="cod" name="cod" value=""> ';
			$sql = "SELECT * FROM incidenciasinspeccion ORDER BY id DESC LIMIT 1";
			$sql = mysqli_query($mysqli,  $sql );
			define ( 'COD', 'cod' );
			define ( 'CODNAME', 'codname' );
			while ( $row = mysqli_fetch_assoc( $sql ) ) {
				echo 'El último código fue: ' . $row [COD] . ' - ' . $row [CODNAME] . '';
			}
			echo '</td>';
			echo '</tr>';
			echo '<tr>';
			echo '<th style width="15%">';
			echo NOMBRE_INCIDENCIA;
			echo '</th>';
			echo '<td><input type="text" class="form-control input-xxlarge" id="codname" name="codname" value=""></td>';
			echo '</tr>';
			echo '<td colspan="2"><button type="submit" class="btn btn-info">' . ANADIR . '</button></td>';
			echo '</tr>';
			echo '<tbody>';
			echo '</table>';
			echo '</form>';
		} else {
			$cod_Post = $_POST ['cod'];
			$codname_Post = $_POST ['codname'];
			$sql = mysqli_query($mysqli,  "INSERT INTO incidenciasinspeccion (cod,codname) VALUES ('" . $cod_Post . "','" . $codname_Post . "')" );
			// if ($sql) echo INSPECCIONES_CODIGO_ANADIDO;
			// else echo ERROR_ANADIR_REGISTRO;

			if ($sql) {
				echo INSPECCIONES_CODIGO_ANADIDO;
			} else {
				echo ERROR_ANADIR_REGISTRO;
			}
		}
	}

	if ($aktion == "change") {
		$sql = mysqli_query($mysqli,  "SELECT * FROM incidenciasinspeccion ORDER BY id ASC" );

		echo '<br /><br />';
		echo '<table id="myTable" class="sortable">';
		echo '<thead>';
			echo '<tr>';
				echo '<th style width="15%">';
				echo PROVEEDORES_INCIDENCIA_CODIGO;
				echo '</th>';
				echo '<th style width="15%">';
				echo NOMBRE_INCIDENCIA;
				echo '</th>';
			echo '</tr>';
		echo '</thead>';
		echo '<tbody>';
		
		while ( $row = mysqli_fetch_row( $sql ) ) {
			echo "<tr>";
			echo "<td><a href='?seccion=codigosincidenciasinspecciones_admin&amp;aktion=change_id&amp;id=" . $row ['0'] . "'>" . $row ['1'] . "</a></td>";
			echo "<td><a href='?seccion=codigosincidenciasinspecciones_admin&amp;aktion=change_id&amp;id=" . $row ['0'] . "'>" . $row ['2'] . "</a></td>";
			echo "</tr>";
		}
		echo "</tbody>";
		echo "</table>";
	}
	if ($aktion == "change_id") {
		if ((empty ( $_POST ['codname_change'] ))) {
			$id = ( int ) $_GET ['id'];
			$sql = mysqli_query($mysqli,  "SELECT * FROM incidenciasinspeccion WHERE id = $id " );
			$data = mysqli_fetch_row( $sql );
			echo '<br /><br />';
			echo '<form action="" method="POST">';
			echo '<table class="print">';
			echo '<tbody>';
			echo '<tr>';
			echo '<th width="25%">';

			?>
	<div id="help"
		onMouseOver="showdiv(event,'<?php echo INSPECCIONES_CODIGOSINCIDENCIAS_HELP; ?>');"
		onMouseOut="hiddenDiv()" style='display: table;'>
		<?php echo CODIGO_INCIDENCIA; ?>

		&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-question fa-2x" style="color:White;"></i></div>

		<?php
			echo '</th>';
			echo '<td><input type="text" class="form-control input-mini" id="cod_change" name="cod_change" value="' . $data [1] . '"></td>';
			echo '</tr>';
			echo '<tr>';
			echo '<th style width="20%">';
			echo NOMBRE_INCIDENCIA;
			echo '</th>';
			echo '<td><input type="text" class="form-control input-xxlarge" id="cod_change" name="cod_change" value="' . $data [2] . '"></td>';
			echo '</tr>';
			echo '<tr>';
			echo '<td colspan="2"><button type="submit" class="btn btn-warning">' . MODIFICAR . '</button></td>';
			echo '</tr>';
			echo '</tbody>';
			echo '</table>';
			echo '</form>';
		} else {
			$sql = mysqli_query($mysqli,  "UPDATE incidenciasinspeccion SET cod='$_POST[cod_change]', codname='$_POST[codname_change]' WHERE id=$_GET[id]" );
			echo CODIGO_ACTUALIZADO;
		}
	}
	?>

</body>
</html>