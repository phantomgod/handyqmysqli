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

<table class="print"> 
<caption><?php echo DOCUMENTOS_LISTA_MODIFICACIONES; ?></caption> 
<tbody> 
</tbody> 
</table> 
 
<?php 
 
if (!defined('titulo')) {
     define('TITULO', 'titulo');
}
if (!defined('revision_num')) {
     define('REVISION_NUM', 'revision_num');
}
if (!defined('modificacion')) {
    define('MODIFICACION', 'modificacion');
}
if (!defined('capapart')) {
     define('CAPAPART', 'capapart');
}
if (!defined('fechamodificacion')) {
     define('FECHAMODIFICACION', 'fechamodificacion');
}


if (isset($_POST['seleccione'])) {     
     $titulo = $_POST['seleccione'];
} 

@$titulo = $_POST['seleccione'];

$_pagi_sql = "SELECT * FROM modifdoc WHERE titulo =  '$titulo'"; 
/*$_pagi_sql = "SELECT enlaces.seccionid, secciones.nombre seccion, modifdoc . * 
              FROM enlaces, secciones, modifdoc
              WHERE enlaces.titulo = modifdoc.titulo
              AND enlaces.seccionid = secciones.id
              AND modifdoc.titulo = '$titulo'";*/

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
<form action="?seccion=listamodificaciones" method="POST">

<?php
            echo '<select name="seleccione">'; 
                echo '<option>' . SELECCIONAR_DOCUMENTO . '</option>';         
                 $sql = "SELECT m.*, e.* FROM modifdoc AS m INNER JOIN enlaces AS e ON m.titulo = e.titulo GROUP BY m.titulo ORDER BY m.titulo ASC"; 
                 $sql = mysqli_query($mysqli, $sql); 
        if (!defined('titulo')) { 
             define('TITULO', 'titulo'); 
        } 
		if (!defined('comment')) { 
             define('COMMENT', 'comment'); 
        } 
        while ($row = mysqli_fetch_assoc($sql)) {                  
                echo '<option value="'.$row[TITULO].'">'.$row[TITULO].' - ' . REVISIONUM . ' : '.$row[COMMENT].'</option>'; 
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
    echo DOCUMENTOS_DOCUMENTO; 
    echo ':</th>';
    echo '<th>'; 
    echo DOCUMENTOS_NUMEROREVISION; 
    echo ':</th>';
    echo '<th>'; 
    echo DOCUMENTOS_MODIFICACION; 
    echo ':</th>';
    echo '<th>'; 
    echo FECHA; 
    echo ':</th>';
    echo '<th><a href="#" title="'.EDITAR.'"><i class="fa fa-edit fa-2x" style="color:#FFC107;"></i></a></th>';    
    echo '</tr>'; 
 
//Leemos y escribimos los registros de la página actual 

    if(mysqli_num_rows($_pagi_result) == 0) {
          echo '<br /><br /><br />'; 
          echo NOSEHAENCONTRADO;
      } else {
    while ($row = mysqli_fetch_array($_pagi_result)) { 
            echo '<tr>'; 
            echo '<td>'.$row[id].'</td>'; 
            //echo '<td>'.$row[seccionid].' - '.$row[seccion].'</td>';
            echo '<td><a href="#" target="_blank">'.$row[titulo].'</td>';
            echo '<td>'.$row[revision_num].'</td>';
            echo '<td>'.$row[modificacion].'</td>';
            echo '<td>'.$row[fechamodificacion].'</td>'; 
            echo '<td><a href="?seccion=modifdoc_admin&amp;aktion=change_id&amp;id='.$row[id].'" title="'.EDITAR.' - '.$row[id].'">
					<i class="fa fa-pencil fa-2x" style="color:#FFC107;"></i></a></td>';                 
            echo '</tr>'; 
     
    } 
}
    echo '</tbody>'; 
    echo '</table>'; 
//Incluimos la barra de navegación 
echo "<p>$_pagi_navegacion</p>"; 
?>