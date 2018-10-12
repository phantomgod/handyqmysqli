<style>
.btn-link{
  border:none;
  outline:none;
  background:none;
  cursor:pointer;
  color:#0000EE;
  padding:0;
  text-decoration:underline;
  font-family:inherit;
  font-size:inherit;
}
</style>

<span class="documenttitle"><?php echo NCS_LISTA; ?></span> 
<?php 
//Conexión a la base de datos 
 
$_pagi_sql = "SELECT * FROM hojasdemejora WHERE visible = 1 ORDER BY id DESC"; 
 
//cantidad de resultados por página (opcional, por defecto 20) 
$_pagi_cuantos = 1; 
 
//Incluimos el script de paginación. Éste ya ejecuta la consulta automáticamente 
include("includes/paginator.inc.php"); 
 
echo '<br /><br />'; 
 
//Incluimos la barra de navegación 
echo "$_pagi_navegacion"; 
echo "<p align=right>".$_pagi_info."</p>"; 
 
while ($row = mysqli_fetch_array($_pagi_result)) { 

 if (! defined('id')) define('id', 'id');

echo '<br /><p align="center">';
echo '<a href="?seccion=ncs_admin&amp;aktion=change_id&amp;id='.$row['id'].'" title="'.NCS_EDITAR_NC.' - '.$row[id].'"><i class="fa fa-pencil fa-2x" style="color:#9fff30;"></i></a>';

?>

<a href="mod/javaformdelete.php?var=<?php echo $row ['0']; ?>" target="popup" onClick="window.open(this.href, this.target, 'width=360,height=215'); return false;" title="<?php echo BORRAR; echo "&nbsp;"; echo NC; echo "&nbsp;"; echo $row ['0']; ?>"><i class="fa fa-trash-o fa-2x" style="color:#9fff30;"></i></a>

<?php
echo '</p>';
echo '<table class="print">'; 
echo "<tbody>"; 
echo "<tr>"; 
echo "<th>Id:</th><td>$row[id]</td>"; 
echo "</tr>"; 
echo "<tr>"; 
echo "<th>AI:</th><td>$row[ai]</td>"; 
echo "</tr>"; 
echo "<tr>"; 
echo "<th>Hoja nº:</th><td>$row[numhoja]</td>"; 
echo "</tr>"; 
echo "<tr>"; 
echo "<th>Descripcion:</th><td>$row[descripcion]</td>"; 
echo "</tr>"; 
echo "<tr>"; 
echo "<th>Fecha:</th><td>$row[fecha]</td>"; 
echo "</tr>"; 
echo "<tr>"; 
echo "<th>Documentaci&oacute;n:</th><td>$row[docum]</td>"; 
echo "</tr>"; 
echo "<tr>"; 
echo "<th>Abri&oacute;:</th><td>$row[abiertopor]</td>"; 
echo "</tr>"; 
echo "<tr>"; 
echo "<th>&Aacute;rea afectada:</th><td>$row[afectaa]</td>"; 
echo "</tr>"; 
echo "<tr>"; 
echo "<th>Causas:</th><td>$row[causas]</td>"; 
echo "</tr>"; 
echo "<tr>"; 
echo "<th>Acciones:</th><td>$row[acciones]</td>"; 
echo "</tr>"; 
echo "<tr>"; 
echo "<th>Plazo:</th><td>$row[plazo]</td>"; 
echo "</tr>"; 
echo "<tr>"; 
echo "<th>Cierres parciales:</th><td>$row[cierresparc]</td>"; 
echo "</tr>"; 
echo "<tr>"; 
echo "<th>Eficacia:</th><td>$row[eficacia]</td>"; 
echo "</tr>"; 
echo "<tr>"; 
echo "<th>Cierre:</th><td>$row[cerradofecha]</td>"; 
echo "</tr>"; 
echo "<tr>"; 
echo "<th>Desviaci&oacute;n:</th><td>$row[desviacion]</td>"; 
echo "</tr>"; 
echo "<tr>"; 
//echo "<th>Visible:</th>"; 
echo "</tr>"; 
} 
echo "</tbody>"; 
echo "</table>"; 

		/*	*****************************************  FruitstatsHNCDeletit  ********************************  */			   
				   
				   if(isset($_GET['FruitstatsHNCDeletit'])) 
				   if($_GET["FruitstatsHNCDeletit"]==77083368)  
				   {
				   echo "<div class='alert alert-error'>"; 
				   echo "<button type='button' class='close' data-dismiss='alert'>&times;</button>";
				   echo "<h4>Borrado.</h4>"; 
				   echo "Se ha borrado una HNC"; 
				   echo "</div>"; 
				   } 
				   
		/*	*****************************************  FIN FruitstatsHNCDeletit  ******************************  */
