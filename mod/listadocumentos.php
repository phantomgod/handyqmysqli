<?php
/**
* Mod LISTA de documentos
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

	<!--<script>
	// addEvent function by John Resig:
	// http://ejohn.org/projects/flexible-javascript-events/
	function addEvent( obj, type, fn ) {
	  if ( obj.attachEvent ) {
		obj['e'+type+fn] = fn;
		obj[type+fn] = function(){obj['e'+type+fn]( window.event );}
		obj.attachEvent( 'on'+type, obj[type+fn] );
	  } else
		obj.addEventListener( type, fn, false );
	}
	</script>-->

</head>
<body>

	<!--<script>
	// Script for example event goes here
	addEvent(window, 'load', function(event) {
		alert('There are no documents here. You will download a -page not found!-. This is cause this is a demo. Contact to javier@textblock.org. Hope you like!');
	});
	</script>-->

<div class="text-center"><?php echo DOCUMENTOS_LISTA; ?></div>

<?php


	if (isset($_POST['seleccione'])) {
		 $seccionid = $_POST['seleccione'];
	}

$seccionid = (isset ($_POST ['seleccione'])) ? $_POST ['seleccione'] : '';

$sql = "SELECT * FROM enlaces WHERE seccionid =  '$seccionid'";
 $sql = mysqli_query($mysqli, $sql);

?>

<div align="center"><a href="?seccion=listadocumentosporfamilias" target="_self">Selección múltiple</a>
&nbsp;&nbsp;
<a href="?seccion=lista_documentos" target="_self" title="<?php echo VER_LISTA_COMPLETA; ?>"><i class="fa fa-list-alt" style="color:#8BC34A;"></i></a></div>

	<form action="?seccion=listadocumentos" method="POST">
		<?php
			echo '<select name="seleccione">';
				echo '<option>'.SELECCIONAR_CATEGORIA.'</option>';
				 $sql3 = "SELECT id, nombre FROM  `secciones` ORDER BY secciones.id ASC ";
				 $sql3 = mysqli_query($mysqli, $sql3);
		while ($row3 = mysqli_fetch_assoc($sql3)) {
				echo '<option value="'.$row3[id].'">'.$row3[id].' - '.$row3[nombre].'</option>';
		}
			echo '</select></td>';
		?>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<button type="submit" class="btn btn-info"><?php echo CONSULTAR; ?></button>
	</form>

<?php

	$sql2 = "SELECT * FROM  `secciones` WHERE id =  '$seccionid'";
    $sql2 = mysqli_query($mysqli, $sql2);

        while ($row2 = mysqli_fetch_assoc($sql2)) {

                echo '<p class="text-center"><span class="orange">Categoría seleccionada: ' . $row2['nombre'] . '</span></p>';
				//echo '<div style="overflow-x:auto;">';

				?>

				<table id="myTable" class="sortable">
					<thead>
						<tr>
							<th>Id:</th>
							<th><?php echo DOCUMENTOS_DOCUMENTO; ?></th>
							<th>Url:</th>
							<th><?php echo DOCUMENTOS_NUMEROREVISION; ?></th>
							<th style width="10%"><?php echo FECHA; ?></th>
							<th><?php echo DISTRIBUCION; ?></th>
							<th><i class="fa fa-edit" style="color:#8BC34A;" title="<?php echo EDITAR; ?>"></i></th>
							<th><i class="fa fa-trash" style="color:#8BC34A;" title="<?php echo BORRAR; ?>"></i></th>
						 </tr>
					</thead>
					<tbody>
						<?php
		 }
//Leemos y escribimos los registros de la página actual


           while ($row = mysqli_fetch_array($sql)) {
				echo '<tr>';
					echo '<td>'.$row['id'].'</td>';
					echo '<td>'.$row['titulo'].'</td>';

					//echo '<td><a href="' . $row[LINK] . '?keepThis=true&TB_iframe=true&height=500&width=800" title="' . VISTAPREVIA . '" class="thickbox"><i class="fa fa-eye"></i></a></td>';

					echo '<td><a href="' . $row['link'] . '" target="_blank" title="' . VISTAPREVIA . '"><i class="fa fa-eye"></i></a></td>';


					echo '<td>'.$row['comment'].'</td>';
					echo '<td style width="10%">'.$row['fecha'].'</td>';
					echo '<td>'.$row['clave1'].'</td>';
					echo '<td><a href="?seccion=documentos_admin&amp;aktion=change_id&amp;id='.$row['id'].'" title="'.EDITAR.' - '.$row['id'].'">
							  <i class="fa fa-pencil" style="color:#8BC34A;"></i>
							  </a>
						  </td>';
					 echo '<td>';
					 ?>
								<a href="mod/javaformdelete_documentos.php?var=<?php echo $row ['0']; ?>" target="popup" onClick="window.open(this.href, this.target, 'width=360,height=215'); return false;" title="<?php echo BORRAR; echo "&nbsp;"; echo DOCUMENTO; echo "&nbsp;"; echo $row ['0']; ?>"><i class="fa fa-trash-o" style="color:#8BC34A;"></i>
								</a>
					<?php
					echo '</td>';
					 if(mysqli_num_rows($sql) == 0) {
						echo '<br /><br /><br />';
						echo NOSEHAENCONTRADO;
					}
				echo '</tr>';
			}


    echo '</tbody>';
    echo '</table><!--</div>--><br />';

?>
<script>
$(document).ready(function() {
    $('#myTable').DataTable( {
        "order": [[ 0, "desc" ]]
    } );
} );
</script>
</body>
</html>
