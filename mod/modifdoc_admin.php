<?php
/**
* Mod ADMINISTRAR modificaciones a documentos
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


			<?php echo DOCUMENTOS_MODIFDOC_ADMIN;?> / 
			<a href="?seccion=modifdoc_admin&amp;aktion=add"><?php echo DOCUMENTOS_ANOTAR_MODIFICACION; ?></a> :: 
			<a href="?seccion=modifdoc_admin&amp;aktion=change"><?php echo DOCUMENTOS_EDITAR_MODIFICACION; ?></a>

<br />
<?php

/*
 * requires the class require "class.datepicker.php"; // instantiate the object $db=new datepicker(); // uncomment the next line to have the calendar show up in german $db->language = "spanish"; $db->firstDayOfWeek = 1; // set the format in which the date to be returned $db->dateFormat = "Y-m-d";
 */

// Aktionen
$aktion = '';
if (isset ( $_GET ['aktion'] )) {
	$aktion = $_GET ['aktion'];
}

if ($aktion == "") {
	echo 'Admin Area';
}

if ($aktion == "add") {
	if ((empty ( $_POST ['titulo'] )) 
	and (empty ( $_POST ['revision_num'] )) 
	and (empty ( $_POST ['modificacion'] )) 
	and (empty ( $_POST ['capapart'] )) 
	and (empty ( $_POST ['fechamodificacion'] ))) {

		echo '<br /><div align="left">';
		echo '<span class="documenttitle">';
		echo DOCUMENTOS_ANOTAR_MODIFICACION;
		echo '</span>';
		echo '</div>';
		
		?>
		<button type="submit" class="btn btn-info"  onclick="Abrir_ventana('mod/ultimasrevisiones2.php');"><?php echo CONSULTAR; ?></button>
		<?php
		
		echo '<form action="" method="POST">';
		echo '<table class="print">';
		echo '<tbody>';
		echo '<tr>';
		echo '<th>' . NOMBRE_DOCUMENTO . ':</td>';
		echo '<td>';
		echo '<select name="titulo">';
		echo '<option>...</option>';
		$sql = "SELECT s.id id1, s.nombre, e.* FROM secciones s, enlaces e\n"
				. "WHERE e. seccionid = s.id\n"
				. "ORDER BY s.nombre ASC";
		$sql = mysqli_query($mysqli,  $sql );
	
		while ( $row = mysqli_fetch_assoc( $sql ) ) {
			
			echo '<option value="' . $row ['titulo'] . '" title="' . $row [titulo] . '">' . $row ['nombre'] . ' / ' . $row ['titulo'] . ' - ' . REVISION_NUMERO . '-: ' . $row ['comment'] . '';			
			echo '</option>';
		}
		echo '</select></td>';
		echo '</tr>';
		echo '<tr>';
		echo '<th>';
		
		/*?>
		<div id="help"
			onMouseOver="showdiv(event,'<?php echo DOCUMENTOS_ULTIMA_REVISION; ?>');"
			onMouseOut="hiddenDiv()" style='display: table;'>

			<img src="images/help.png" />
		</div>
		<?php*/
 
	  			echo '<div align="center">';
				echo '<p align="left">';
				echo '<a class="tooltip2" href="#">' . DOCUMENTOS_NUMEROREVISION . ':
				<span class="custom info"><img src="images/Info.png" alt="Info" title="Info" height="48" width="48" /><em>
				' . AYUDA . '</em>' . DOCUMENTOS_ULTIMA_REVISION . '</span></a></p>
				</div>';				
				
				echo '</th>';
				echo '<td><input type="text" class="form-control input-mini" id="revision_num" name="revision_num" value="Rev:">';

		echo '</td>';
		echo '</tr>';
		echo '<tr>';
		echo '<th>' . DOCUMENTOS_MODIFICACION . ': </th>';
		echo '<td><textarea class="form-control input-xlarge" id="textarea" name="modificacion"></textarea></td>';
		echo '</tr>';
		echo '<tr>';
		echo '<th>' . DOCUMENTOS_CAPAPART . '</th>';
		echo '<td><input type="text" class="form-control input-medium" id="capapart" name="capapart" value="Cap:"></td>';
		echo '</tr>';
		echo '<tr>';
		echo '<th><b>' . FECHA . ':</b></th>';
		// echo '<td><input type="text" id="date" class="inputfecha" style="width:15%" name="fechamodificacion" value="">&nbsp;&nbsp;&nbsp;';
		echo '<td><input id="date" class="datepicker" name="fechamodificacion" />&nbsp;&nbsp;&nbsp;';
		echo '</td>';
		echo '</tr>';
		echo '<th></th>';
		echo '<td align=left><button type="submit" class="btn btn-info">' . ANADIR . '</button></td>';
		echo '</tr>';
		echo '</table>';
		echo '</form>';
	} else {

		if (isset ( $_POST ['titulo'] )) {
			$titulo = $_POST ['titulo'];
		}
		if (isset ( $_POST ['revision_num'] )) {
			$revision_num_Post = $_POST ['revision_num'];
		}
		if (isset ( $_POST ['modificacion'] )) {
			//$modificacion_Post = $_POST ['modificacion'];
			$modificacion_Post = mysqli_real_escape_string($mysqli,$_POST['modificacion']);
		}
		if (isset ( $_POST ['capapart'] )) {
			$capapart_Post = $_POST ['capapart'];
		}
		if (isset ( $_POST ['fechamodificacion'] )) {
			$fechamodificacion_Post = $_POST ['fechamodificacion'];
		}
		$sql = mysqli_query($mysqli,  "INSERT INTO modifdoc (titulo, revision_num, modificacion, capapart, fechamodificacion) VALUES ('" . $titulo . "', '" . $revision_num_Post . "', '" . $modificacion_Post . "', '" . $capapart_Post . "', '" . $fechamodificacion_Post . "')" );
		if ($sql) {
			$update = mysqli_query($mysqli,  "UPDATE enlaces SET comment='$_POST[revision_num]',fecha='$_POST[fechamodificacion]' WHERE enlaces.titulo='$titulo'" );

			echo MODIFICACION_ANOTADA;
		} else {
			echo ((is_object($mysqli)) ? mysqli_error($mysqli) : (($___mysqli_res = mysqli_connect_error()) ? $___mysqli_res : false));
			echo "Error al añadir el registro!";
		}
	}
}

if ($aktion == "change") {


//--------------------------contamos los registros

$result = mysqli_query($mysqli, 'select count(*) AS count from ( SELECT enlaces.id id1, enlaces.seccionid, secciones.nombre seccion, modifdoc. *
                        FROM enlaces, secciones, modifdoc
                        WHERE enlaces.titulo = modifdoc.titulo
                        AND enlaces.seccionid = secciones.id ) m');

while($row = mysqli_fetch_array($result))
{
    echo '<div align="right">Nº registros: ';
	echo $row['0'];
	echo '</div>';
}

if($result === FALSE) {
    die(((is_object($mysqli)) ? mysqli_error($mysqli) : (($___mysqli_res = mysqli_connect_error()) ? $___mysqli_res : false))); // TODO: better error handling
}

while($row = mysqli_fetch_array($result))
{
    echo '<div align="right">Nº registros: ';
	echo $row['0'];
	echo '</div>';
}

//--------------------------fin contar registros




	$sql = mysqli_query($mysqli,  "SELECT enlaces.id id1, enlaces.seccionid, secciones.nombre, modifdoc. *
								FROM enlaces, secciones, modifdoc
								WHERE enlaces.titulo = modifdoc.titulo
								AND enlaces.seccionid = secciones.id
								ORDER BY modifdoc.titulo ASC" );

	echo '<span class="documenttitle">' . DOCUMENTOS_LISTA . '</span>';
	echo '<table id="myTable" class="sortable">';
	echo '<thead>';
		echo '<tr>
					<th>' . NOMBRE_DOCUMENTO . '</th>	
					<th>doc-Id</th>
					<th>seccion-id</th>
					<th>modif-Id</th>
					<th>' . DOCUMENTOS_NUMEROREVISION . '</th>
					<th>' . DOCUMENTOS_FECHAMODIFICACION . '</th>
					<th><i class="fa fa-edit" style="color:#FFC107;"></i></th>
					<th><i class="fa fa-print" style="color:#FFC107;"></i></th>
			  </tr>';
		echo '</thead>';
		echo '<tbody>';  
	while ( $row = mysqli_fetch_row( $sql ) ) {
		echo "<tr>";
		
		echo "<td>";
		
       ?>
		<div class="ToolText"  onMouseOver="javascript:this.className='ToolTextHover'" onMouseOut="javascript:this.className='ToolText'">
		<?php echo $row['4'] ?>
		
			<span>
			<?php 
			echo "<table class=print2>";
			echo "<tbody>";
				echo "<tr>"; 
					echo "<th><font color='white'>"; echo NOMBRE_DOCUMENTO; echo "</font></th>";
					echo "<th><font color='white'>" . DOCUMENTOS_NUMEROREVISION . "</font></th>";
					echo "<th><font color='white'>" .  DOCUMENTOS_MODIFICACION . "</font></th>";
					echo "<th></th>";
				echo "</tr>"; 
				echo "<tr>";
					echo "<td>" . $row['4'] . "</td>";
					echo "<td>" . $row['5'] . "</td>";
					echo "<td colspan=2>". strip_tags($row['6']) . "</td>";
				echo "</tr>";
				echo "<tr>";
					echo "<th colspan=2><font color='white'>" . DOCUMENTOS_CAPAPART . "</font></th>";
					echo "<th colspan=2><font color='white'>" . DOCUMENTOS_FECHAMODIFICACION . "</font></th>";
				echo "</tr>"; 
				echo "<tr>";
					echo "<td colspan=2>" . $row['7'] . "</td>";
					echo "<td colspan=2>" . $row['8'] . "</td>";
				echo "</tr>";
			echo "</tbody>";
			echo "</table>"; ?>
			</span>
		</div>
		<?php     
        
		
		echo "</td>"; 		
		echo "<td>" . $row ['0'] . "</td>";
		echo "<td>" . $row ['1'] . " - " . $row ['2'] . "</td>";
		echo "<td>" . $row ['3'] . "</td>";
				
		//echo "<td><a href='?seccion=modifdoc_admin&amp;aktion=change_id&amp;id=" . $row ['3'] . "'>" . $row ['4'] . "</a></td>";
		
		echo "<td>" . $row ['5'] . "</td>";
		echo "<td>" . $row ['8'] . "</td>";
		echo "<td><a href='?seccion=modifdoc_admin&amp;aktion=change_id&amp;id=" . $row['3'] . "' alt='" . EDITAR . " - " . $row[3] . "' title='" . EDITAR . " - " . $row[3] . "'><i class='fa fa-pencil' style='color:#FFC107;'></i></a></td>";
		echo "<td><a href='?seccion=modifdoc_print&amp;aktion=print_id&amp;id=" . $row['3'] . "' alt='" . IMPRIMIR . " - " . $row[3] . "' title='" . IMPRIMIR . " - " . $row[3] . "'><i class='fa fa-print' style='color:#FFC107;'></i></a></td>"; 
		echo "</tr>";
	}
	echo '</tbody>';
	echo "</table>";
}
if ($aktion == "change_id") {
	if ((empty ( $_POST ['id_change'] )) and (empty ( $_POST ['titulo_change'] )) and (empty ( $_POST ['revision_num_change'] )) and (empty ( $_POST ['modificacion_change'] )) and (empty ( $_POST ['capapart_change'] )) and (empty ( $_POST ['fechamodificacion_change'] ))) {

		$id = ( int ) $_GET ['id'];
		$sql = mysqli_query($mysqli,  "SELECT enlaces.id id1, enlaces.seccionid, secciones.nombre, modifdoc . *
                            FROM enlaces, modifdoc, secciones
                            WHERE enlaces.titulo = modifdoc.titulo
                            AND enlaces.seccionid = secciones.id
                            AND modifdoc.id = $id " );
		$data = mysqli_fetch_row( $sql );
		
		echo '<br /><div align="left">';
		echo "<button onclick='history.go(-1);' class='btn btn-warning'>" . VOLVER . "</button>";
		echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
		echo '<span class="documenttitle">';
		echo DOCUMENTOS_MODIFICACIONES_DETALLES;
		echo '</span>';
		echo '</div>';

		echo '<form action="" method="POST">';
		echo '<table class="print">';
		//echo '<caption>' . DOCUMENTOS_MODIFICACIONES_DETALLES . '</caption>';
		echo '<tbody>';
		echo '<tr>';
		echo '<th>doc-ID: </th>';
		echo '<td>' . $data [0] . '</td>';
		echo '</tr>';
		echo '<tr>';
		echo '<th>seccion-ID: </th>';
		echo '<td>' . $data [1] . ' - ' . $data [2] . '</td>';
		echo '</tr>';
		echo '<tr>';
		echo '<th>modif-ID: </th>';
		echo '<td>' . $data [3] . '</td>';
		echo '</tr>';
		echo '<tr>';
		echo '<th>' . NOMBRE_DOCUMENTO . ': </th>';
		echo '<td>';
		echo '<select name="titulo_change">';
		echo '<option>' . $data [4] . '</option>';
		$sql = "SELECT titulo FROM enlaces";
		$sql = mysqli_query($mysqli,  $sql );
		if (! defined ( 'titulo' )) {
			define ( 'TITULO', 'titulo' );
		}
		while ( $row = mysqli_fetch_assoc( $sql ) ) {

			echo '<option value="' . $row [TITULO] . '">' . $row [TITULO] . '</option>';
		}
		echo '</select></td>';
		echo '</tr>';
		echo '<tr>';
		echo '<th>' . DOCUMENTOS_NUMEROREVISION . ':</th>';
		echo '<td><input class="inputlargo" name="revision_num_change" value="' . $data [5] . '"></td>';
		echo '</tr>';
		echo '<tr>';
		echo '<th>' . DOCUMENTOS_MODIFICACION . ': </th>';
		echo '<td><textarea class="textareanormal" name="modificacion_change">' . $data [6] . '</textarea></td>';

		// <input class="inputfecha" name="modificacion_change" value="'.$data[3].'"></td>';
		echo '</tr>';
		echo '<tr>';
		echo '<th>' . DOCUMENTOS_CAPAPART . ': </th>';
		echo '<td><input class="inputfecha" name="capapart_change" value="' . $data [7] . '"></td>';
		echo '</tr>';
		echo '<tr>';
		echo '<th>' . DOCUMENTOS_FECHAMODIFICACION . ': </th>';
		// echo '<td><input type="text" id="date2" class="inputfecha" name="fechamodificacion_change" value="' . $data [8] . '"></td>';

		echo '<td><input id="date1" class="datepicker" name="fechamodificacion_change" value="' . $data [8] . '" /></td>';
		echo '</tr>';
		echo '<td><button type="submit" class="btn btn-info">' . MODIFICAR . '</button></td>';
		echo '</tr>';
		echo '</tbody>';
		echo '</table>';
		echo '</form>';
	} else {
		/*
		 * $sql = mysql_query("UPDATE modifdoc SET titulo='$_POST[titulo_change]', revision_num='$_POST[revision_num_change]', modificacion='$_POST[modificacion_change]', capapart='$_POST[capapart_change]', fechamodificacion='$_POST[fechamodificacion_change]' WHERE id=$_GET[id]");
		 */

		$id = ( int ) $_GET ['id'];
		$sql = mysqli_query($mysqli,  "SELECT enlaces.id id1, enlaces.comment, enlaces.fecha, modifdoc . *
                                        FROM enlaces, modifdoc
                                        WHERE enlaces.titulo = modifdoc.titulo AND modifdoc.id = $id " );
		$data = mysqli_fetch_row( $sql );

		$sql = mysqli_query($mysqli,  "UPDATE modifdoc m1, enlaces e2
                      SET m1.titulo='$_POST[titulo_change]',
                          m1.revision_num='$_POST[revision_num_change]',
                          m1.modificacion='$_POST[modificacion_change]',
                          m1.capapart='$_POST[capapart_change]',
                          m1.fechamodificacion='$_POST[fechamodificacion_change]',
                          e2.comment='$_POST[revision_num_change]',
                          e2.fecha='$_POST[fechamodificacion_change]'
                          WHERE m1.id=$data[3] AND e2.id=$data[0]" );

		echo ((is_object($mysqli)) ? mysqli_error($mysqli) : (($___mysqli_res = mysqli_connect_error()) ? $___mysqli_res : false));

		if ($sql) {

			echo MODIFICACION_ACTUALIZADA;
		}
	}
}
?>