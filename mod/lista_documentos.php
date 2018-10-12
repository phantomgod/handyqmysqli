<?php
/**
* Mod lista informes de auditorías
* 
* PHP version 5
* 
* @category Mod
* @package  Handy-q
* @author   JJuan <javier@textblock.org>
* @license  http://www.gnu.org/copyleft/gpl.html GNU General Public License
* @link     http://www.textblock.org
*/

if (!defined('comment')) {
     define('COMMENT', 'comment');
}

if (!defined('clave1')) {
     define('CLAVE1', 'clave1');
}
if (!defined('link')) {
     define('LINK', 'link');
}

if (isset($_POST['seleccione'])) {     
     $seccionid = $_POST['seleccione'];
} 

//$_pagi_sql = "SELECT * FROM enlaces ORDER BY clave1"; 
$sql = mysqli_query($mysqli, "SELECT * FROM enlaces ORDER BY clave1");

 
//cantidad de resultados por página (opcional, por defecto 20) 
//$_pagi_cuantos = 100; 
 
//Incluimos el script de paginación. Éste ya ejecuta la consulta automáticamente 
//require "includes/paginator.inc.php"; 
 
//Incluimos la barra de navegación 
//echo $_pagi_navegacion; 
//$_pagi_info = (isset($_pagi_info)) ? $_pagi_info : ''; 
//echo "<p align=right>".$_pagi_info."</p>";


?>
 
<span class="yellow"><?php echo LISTA_DOCUMENTOS; ?></span>
	<table id="myTable" class="sortable">
      <thead>
         <tr>
             <th>ID:</th>
             <th><?php echo DOCUMENTO; ?>:</th>
             <th><?php echo REVISIONUM; ?>:</th>
             <th><?php echo FECHA; ?>:</th>
             <th><?php echo DISTRIBUCION; ?></th>
			 <th><i class="fa fa-eye" style="color:#1b5e20;"></i></th>
			 <th><a href="#" title="<?php echo EDITAR; ?>"><i class="fa fa-edit" style="color:#1b5e20;"></i></th> 			   
         </tr>
	  </thead>
	  <tbody>
 <?php
//Leemos y escribimos los registros de la página actual 
while ($row = mysqli_fetch_array($sql)) {

			if (!defined('TITULO')) {
				define('TITULO', 'titulo');
			} 
			if (!defined('COMMENT')) {
				define('COMMENT', 'comment');
			} 
			if (!defined('FECHA')) {
				define('FECHA', 'fecha');
			} 
			if (!defined('CLAVE1')) {
				define('CLAVE1', 'clave1');
			} 
			
			
            echo "<tr>"; 
                   echo "<td>$row[id]</td>";
                   echo "<td>$row[titulo]</td>"; 
                   echo "<td>$row[comment]</td>"; 
                   echo "<td>$row[fecha]</td>"; 
                   echo "<td>$row[clave1]</td>";
				   echo '<td>';
				   ?>
								
							<a href="<?php echo $row['link']?>" target="_blank" title="<?php echo VISTAPREVIA ?>" onclick="alert('Solo tiene validez de un día!');">
								<i class="fa fa-eye" style="color:#1b5e20;"></i></a>
								
					<?php
				   echo '</td>';
				   echo '<td><a href="?seccion=documentos_admin&amp;aktion=change_id&amp;id='.$row['id'].'" target="_blank" title="'.EDITAR.' - '.$row['id'].'">
								<i class="fa fa-pencil" style="color:#1b5e20;"></i>
							</a>
						 </td>'; 
            echo "</tr>"; 
} 
       echo '</tbody>'; 
     echo '</table>';        
?>
<script>
$(document).ready(function() {
    $('#myTable').DataTable( {
        "order": [[ 0, "desc" ]]
    } );
} );
</script>