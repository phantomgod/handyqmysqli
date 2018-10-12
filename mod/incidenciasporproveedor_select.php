<?php 
/** 
* Mod Incidencias por proveedor-select 
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

<table class="print"> 
<caption><?php echo DOCUMENTOS_LISTA_MODIFICACIONES; ?></caption> 
<tbody> 
</tbody> 
</table> 
 
<?php 
 
if (!defined('proveedor')) {
     define('PROVEEDOR', 'proveedor');
}
if (!defined('incidencia')) {
     define('INCIDENCIA', 'incidencia');
}
if (!defined('codigoincidencia')) {
    define('CODIGOINCIDENCIA', 'codigoincidencia');
}
if (!defined('afectaa')) {
     define('AFECTAA', 'afectaa');
}
if (!defined('fecha')) {
     define('FECHA', 'fecha');
}


if (isset($_POST['seleccione'])) {     
     $proveedor = $_POST['seleccione'];
} 

@$proveedor = $_POST['seleccione'];

$_pagi_sql = "SELECT * FROM incidenciasdeproveedor WHERE proveedor =  '$proveedor'"; 
//cantidad de resultados por página (opcional, por defecto 20) 
$_pagi_cuantos = 20; 
 
//Incluimos el script de paginación. Éste ya ejecuta la consulta automáticamente 
require "includes/paginator.inc.php"; 
 
//Incluimos la barra de navegación 
echo "$_pagi_navegacion";
/*echo"&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
echo "Imprimir la lista completa";
echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
echo "<a href='pdfs/listdocpdf.php'><img src='images/pdf.png' border='0' /></a>";*/

echo "<p align=right>".$_pagi_info."</p>"; 

//echo "<a href='pdfs/listdocpdf.php'><img src='images/pdf.png' border='0' /></a>"; 

?>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Debe seleccionar un documento.
<form action="?seccion=incidenciasporproveedor_select" method="POST">

<?php
            echo '<select name="seleccione">'; 
                echo '<option>' . SELECCIONAR_PROVEEDOR . '</option>';         
                 $sql = "SELECT * FROM proveedores ORDER BY proveedor"; 
                 $sql = mysqli_query($mysqli, $sql); 
        if (!defined('proveedor')) { 
             define('PROVEEDOR', 'proveedor'); 
        } 
        if (!defined('estado')) { 
             define('ESTADO', 'estado'); 
        }		
	    if (!defined('fecha')) { 
             define('FECHA', 'fecha'); 
        }	
		
        while ($row = mysqli_fetch_assoc($sql)) {                  
                echo '<option value="'.$row[PROVEEDOR].'">'.$row[PROVEEDOR].' - '.$row[ESTADO].' - '.$row[FECHA].'</option>'; 
        }         
            echo '</select></td>';          
?>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<button type="submit" class="btn btn-info"><?php echo CONSULTAR; ?></button>
</form>
<?php

    echo '<table class="sortable">'; 
    echo '<tbody>'; 
    echo '<tr>'; 
    echo '<th>ID:</th>';
    //echo '<th>ID SECCIÓN:</th>';    
    echo '<th>'; 
    echo PROVEEDORES_PROVEEDOR; 
    echo ':</th>';
    echo '<th>'; 
    echo INCIDENCIA; 
    echo ':</th>';
    echo '<th>'; 
    echo CODIGO; 
    echo ':</th>';
    echo '<th>'; 
    echo NCS_AFECTAA; 
    echo ':</th>';
    echo '<th><a href="#" title="'.EDITAR.'"><i class="fa fa-edit fa-2x"></i></a></th>';    
    echo '</tr>'; 
 
//Leemos y escribimos los registros de la página actual 

    if(mysqli_num_rows($_pagi_result) == 0) {
          echo '<br /><br /><br />'; 
          echo NOSEHAENCONTRADO;
      } else {
    while ($row = mysqli_fetch_array($_pagi_result)) { 
            echo '<tr>'; 
            echo '<td>'.$row[id].'</td>'; 
            //
            echo '<td>'.$row[PROVEEDOR].'</td>';
            echo '<td>'.$row[INCIDENCIA].'</td>';
            echo '<td>'.$row[CODIGOINCIDENCIA].'</td>';
            echo '<td>'.$row[AFECTAA].'</td>';
			echo '<td>'.$row[FECHA].'</td>';
            echo '<td><a href="?seccion=modifdoc_admin&amp;aktion=change_id&amp;id='.$row[id].'" title="'.EDITAR.' - '.$row[id].'"><i class="fa fa-edit fa-2x"></i></a></td>';                 
            echo '</tr>'; 
     
    } 
}
    echo '</tbody>'; 
    echo '</table>'; 
//Incluimos la barra de navegación 
echo "<p>$_pagi_navegacion</p>"; 
?>