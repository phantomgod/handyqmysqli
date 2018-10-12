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

<span class="yellow"><?php echo LISTA_DOCUMENTOS; ?></span>
 
<?php 
 
if (!defined('comment')) {
     define('COMMENT', 'comment');
}
if (!defined('clave1')) {
     define('CLAVE1', 'clave1');
}
if (!defined('link')) {
     define('LINK', 'link');
}
if (!defined('seccionid')) {
     define('SECCIONID', 'seccionid');
}

$_POST['seleccione3'] = (isset($_POST['seleccione3'])) ? $_POST['seleccione3'] : '';
$_POST['seleccione4'] = (isset($_POST['seleccione4'])) ? $_POST['seleccione4'] : '';
$_POST['seleccione5'] = (isset($_POST['seleccione5'])) ? $_POST['seleccione5'] : '';
$_POST['seleccione6'] = (isset($_POST['seleccione6'])) ? $_POST['seleccione6'] : '';

 $seccionid3 = (isset ($_POST ['seleccione3'])) ? $_POST ['seleccione3'] : '';
 $seccionid4 = (isset ($_POST ['seleccione4'])) ? $_POST ['seleccione4'] : '';
 $seccionid5 = (isset ($_POST ['seleccione5'])) ? $_POST ['seleccione5'] : '';
 $seccionid6 = (isset ($_POST ['seleccione6'])) ? $_POST ['seleccione6'] : '';
 


$sql = "SELECT * 
              FROM  `enlaces` 
              WHERE  `seccionid` ='$seccionid3'
              OR  `seccionid` ='$seccionid4'
              OR  `seccionid` ='$seccionid5'
              OR  `seccionid` ='$seccionid6'
              ORDER BY `enlaces`.`seccionid` ASC"; 
			  
 $result = mysqli_query($mysqli, $sql); 

//cantidad de resultados por página (opcional, por defecto 20) 
//$_pagi_cuantos = 20; 
 
//Incluimos el script de paginación. Éste ya ejecuta la consulta automáticamente 
//require "includes/paginator.inc.php"; 
 
//Incluimos la barra de navegación 
//echo "$_pagi_navegacion";
/*echo"&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
echo "Imprimir la lista completa";
echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
echo "<a href='pdfs/listdocpdf.php'><img src='images/pdf.png' border='0' /></a>";*/
//echo "<p align=right>".$_pagi_info."</p>"; 
//echo "<a href='pdfs/listdocpdf.php'><img src='images/pdf.png' border='0' /></a>"; 


?>
<form action="?seccion=listadocumentosporfamilias" method="POST">

<?php


            echo '<select name="seleccione3">'; 
                echo '<option>'.SELECCIONAR_CATEGORIA,'</option>';         
                 $sql = "SELECT id, nombre FROM  `secciones` ORDER BY secciones.id ASC "; 
                 $sql = mysqli_query($mysqli, $sql); 
                 
        while ($row = mysqli_fetch_assoc($sql)) {         
                echo '<option value="'.$row['id'].'">'.$row['id'].' - '.$row['nombre'].'</option>';

		}
            echo '</select>';
            
            echo '&nbsp;&nbsp;';
            
            echo '<select name="seleccione4">'; 
                echo '<option>'.SELECCIONAR_CATEGORIA,'</option>';         
                 $sql = "SELECT id, nombre FROM  `secciones` ORDER BY secciones.id ASC "; 
                 $sql = mysqli_query($mysqli, $sql); 
                 
        while ($row = mysqli_fetch_assoc($sql)) {         
                echo '<option value="'.$row['id'].'">'.$row['id'].' - '.$row['nombre'].'</option>';

		}
            echo '</select>';
            
            echo '&nbsp;&nbsp;';
            
            echo '<select name="seleccione5">'; 
                echo '<option>'.SELECCIONAR_CATEGORIA,'</option>';         
                 $sql = "SELECT id, nombre FROM  `secciones` ORDER BY secciones.id ASC "; 
                 $sql = mysqli_query($mysqli, $sql); 
                 
        while ($row = mysqli_fetch_assoc($sql)) {         
                echo '<option value="'.$row['id'].'">'.$row['id'].' - '.$row['nombre'].'</option>';

		}
            echo '</select>';            
            
            echo '&nbsp;&nbsp;';
            
            echo '<select name="seleccione6">'; 
                echo '<option>'.SELECCIONAR_CATEGORIA,'</option>';         
                 $sql = "SELECT id, nombre FROM  `secciones` ORDER BY secciones.id ASC "; 
                 $sql = mysqli_query($mysqli, $sql); 
                 
        while ($row = mysqli_fetch_assoc($sql)) {         
                echo '<option value="'.$row['id'].'">'.$row['id'].' - '.$row['nombre'].'</option>';

		}
            echo '</select>';
        
?>
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<button type="submit" class="btn btn-info"><?php echo CONSULTAR; ?></button>
	</form>
<?php
     
    echo '<table id="myTable" class="sortable">'; 
    echo '<thead>';
    echo '<tr>'; 
    echo '<th>Id:</th>'; 
    echo '<th>SeccionId:</th>';
    echo '<th>'; 
    echo DOCUMENTOS_DOCUMENTO; 
    echo ':</th>'; 
    echo '<th>Url:</th>'; 
    echo '<th>'; 
    echo DOCUMENTOS_NUMEROREVISION; 
    echo ':</th>'; 
    echo '<th style width="10%">'; 
    echo FECHA; 
    ECHO ':</th>'; 
    echo '<th>'.DISTRIBUCION.'</th>';
    echo '<th><a href="#" title="'.EDITAR.'"><i class="fa fa-edit fa-2x" style="color:#9fff30;"></i></th>';    
    echo '</tr>';
	echo '</thead>';
	echo '<tbody>';
 
//Leemos y escribimos los registros de la página actual 

    if(mysqli_num_rows($result) == 0) {
          echo '<br /><br /><br />'; 
          echo NOSEHAENCONTRADO;
      } else {
        while ($row = mysqli_fetch_array($result)) { 
            echo '<tr>'; 
                echo '<td>'.$row['id'].'</td>';
                echo '<td>'.$row['seccionid'].'</td>';
                echo '<td>'.$row['titulo'].'</td>'; 
                echo '<td><a href="'.$row['link'].'?keepThis=true&TB_iframe=true&height=500&width=800" title="'.$row['titulo'].'" class="thickbox"><img src="images/preview.png" alt="'.VISTAPREVIA.'" title="'.VISTAPREVIA.'"></a></td>'; 
                echo '<td>'.$row['comment'].'</td>'; 
                echo '<td style width="10%">'.$row['fecha'].'</td>'; 
                echo '<td>'.$row['clave1'].'</td>';
                echo '<td><a href="?seccion=documentos_admin&amp;aktion=change_id&amp;id='.$row['id'].'" title="'.EDITAR.' - '.$row['id'].'">
							<i class="fa fa-pencil fa-2x" style="color:#9fff30;"></i></a></td>';     
            echo '</tr>'; 
 
        }
    }

    echo '</tbody>'; 
    echo '</table>'; 

    
//Incluimos la barra de navegación 
//echo "<p>$_pagi_navegacion</p>"; 
?>
<script>
$(document).ready(function() {
    $('#myTable').DataTable( {
        "order": [[ 0, "desc" ]]
    } );
} );
</script>