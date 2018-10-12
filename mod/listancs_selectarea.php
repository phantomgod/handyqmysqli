<?php 
/** 
* Mod LISTAR las NCS
*  
* PHP version 5 
*  
* @category Mod 
* @package  Handy-q 
* @author   JJuan <javier@textblock.org> 
* @license  http://www.gnu.org/copyleft/gpl.html GNU General Public License 
* @link     http://www.textblock.org 
*/ 



//@$afectaa = $_POST['seleccione'];
 $afectaa = (isset ($_POST ['seleccione'])) ? $_POST ['seleccione'] : '';

	$sql = "SELECT h.*, c.id id1, c.ai ai1, c.auditor1, c.obstrat, c.obscal, c.obsalmac, c.obscompras, c.obsformac, c.obsdocum, c.obslegio
			FROM hojasdemejora h
			LEFT JOIN aisgc c ON h.ai = c.ai
			WHERE h.afectaa = '$afectaa'
			ORDER BY h.id DESC"; 

$result = mysqli_query($mysqli, $sql);
 
	echo '<div style="float: right;">'; 
		echo '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="?seccion=ncs_print2">'; 
		echo PAGINAR; 
		echo '</a>'; 
		echo '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="?seccion=listancs_selectarea">Filtrar por área afectada</a>';
		echo '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="?seccion=listancs_selectarea_ai_fecha">Filtrar por OR</a>';
		echo '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="?seccion=listancs_selectarea_and_ai">Filtrar por AND</a>';
	echo '</div>';
 
 
 ?>
 <br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Debe seleccionar una parte afectada.
<div style="float: left;">
<form action="?seccion=listancs_selectarea" method="POST">

<?php
            echo '<select name="seleccione">'; 
                echo '<option>'.SELECCIONAR_AREAAFECTADA,'</option>';         
                 $sql2 = "SELECT * FROM afectaa"; 
                 $sql2 = mysqli_query($mysqli, $sql2); 
        if (!defined('afectaa')) { 
             define('AFECTAA', 'afectaa'); 
        } 
        while ($row2 = mysqli_fetch_assoc($sql2)) {                  
                echo '<option value="'.$row2['afectaa'].'">'.$row2['afectaa'].'</option>'; 
        }         
            echo '</select>';          
?>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<button type="submit" class="btn btn-info"><?php echo CONSULTAR; ?></button>
</form>
</div>
<div style="float: right;">
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="pdfs/ncspdf.php"><img src="images/pdf.png" /></a>
</div>

<?php

  
//Leemos y escribimos los registros de la página actual 
 
echo '<br /><br />';
		
		echo NCS_LISTA; 		 
	echo '<table id="myTable" class="sortable">'; 
		echo '<thead>'; 
			echo '<tr>'; 
			echo '<th>Id:</th>'; 
			echo '<th style width="3%">' .  AUDITORIAS_NUMERO_AUDITORIA . ''; 
			echo '<th style width="10%">' .  NCS_NUMERO . ''; 
			echo '<th>' .  DESCRIPCION . '';
			echo '<th>' .  FECHA . ''; 			
			echo '<th>' .  NCS_AFECTAA . '';
			echo '<th style width="10%">' .  NCS_FECHACIERRE . ''; 
			echo "<th>"; 
				echo "<a href='#' alt='".NCS_EDITAR_NC."' title='".NCS_EDITAR_NC."'>"; 
				echo "<i class='fa fa-pencil fa-2x' style='color: #9fff30;'></i></a>"; 
			echo "</th>"; 
			echo "<th>"; 
				echo "<a href='#' alt='".NCS_IMPRIMIR."' title='".NCS_IMPRIMIR."'>"; 
				echo "<i class='fa fa-print fa-2x' style='color: #9fff30;'></i></a>"; 
			echo "</th>";
		echo "</tr>";
		echo '</thead>';
		echo '<tbody>';
		
while ($row = mysqli_fetch_array($result)) { 		
		
			echo '<tr>';
				echo "<td style width=5%>"; echo "$row[id]"; echo "</td>"; 
			
			echo "<td>";     				 
				echo "<a href='index.php?seccion=aisgc_print&amp;aktion=print_id&amp;id=".$row['0']."' alt='Image Tooltip' rel='tooltip' content='<table class=print2><tr>"; 
				echo "<th>"; echo FECHA; echo "</th><th>"; echo AUDITORIAS_NUMERO_AUDITORIA; echo "</th><th>"; echo AUDITORIAS_AUDITOR; echo"</th><th></th></tr>"; 
				echo "<tr><td>"; echo "$row[fecha]"; echo "</td><td>"; echo "$row[ai]"; echo "</td><td colspan=2>"; echo "$row[auditor1]"; echo "</td></tr>"; 
				echo "<tr><th colspan=2>"; echo CUESTIONARIO_TRATAMIENTOS; echo "</th><th colspan=2>"; echo CUESTIONARIO_CALIDAD; echo "</th></tr>"; 
				echo "<tr><td colspan=2>"; echo "$row[obstrat]"; echo"</td><td colspan=2>"; echo "$row[obscal]"; echo "</td></tr>"; 
				echo "<tr><th colspan=2>"; echo CUESTIONARIO_ALMACEN; echo "</th><th>"; echo CUESTIONARIO_COMPRAS; echo"</th></tr>"; 
				echo "<tr><td colspan=2>"; echo "$row[obsalmac]"; echo "</td><td colspan=2>"; echo "$row[obscompras]"; echo"</td></tr>"; 
				echo "<tr><th colspan=2>"; echo CUESTIONARIO_FORMACION; echo"</th><th colspan=2>"; echo CUESTIONARIO_DOCUMENTACION;echo "</th></tr>"; 
				echo "<tr><td colspan=2>"; echo "$row[obsformac]"; echo "</td><td colspan=2>"; echo "$row[obsdocum]"; echo "</td></tr>"; 
				echo "<tr><th colspan=2>"; echo CUESTIONARIO_LEGIONELLA; echo "</th></tr>"; 
				echo "<tr><td colspan=2>"; echo "$row[obslegio]"; echo "</td></tr></table>'>"; 
	  
				echo "$row[ai]</a>";     
     
			echo "</td>"; 
			echo "<td>";
    
    
				echo "<a href='index.php?seccion=ncs_print&amp;aktion=print_id&amp;id=".$row['10']."' alt='Image Tooltip' rel='tooltip' content='<table class=print2><tr>"; 
				echo "<th>"; echo NCS_NUMERO; echo "</th><th>"; echo FECHA; echo "</th></tr>"; 
				echo "<tr><td>"; echo "$row[numhoja]"; echo "</td><td>"; echo "$row[fecha]"; echo "</td></tr>"; 
				echo "<tr><th>"; echo AUDITORIAS_NUMERO_AUDITORIA; echo"</th><th>"; echo DOCUMENTACION; echo "</th></tr>"; 
				echo "<tr><td>"; echo "$row[ai]"; echo "</td><td>"; echo "$row[docum]"; echo"</td></tr>"; 
				echo "<tr><th>"; echo NCS_ABIERTOPOR; echo "</th><th>"; echo NCS_AFECTAA; echo "</th></tr>"; 
				echo "<tr><td>"; echo "$row[abiertopor]"; echo "</td><td>"; echo "$row[afectaa]"; echo "</td></tr>"; 
				echo "<tr><th>"; echo NCS_CAUSAS; echo"</th><th>"; echo NCS_ACCIONES; echo"</th></tr>"; 
				echo "<tr><td>"; echo "$row[causas]"; echo"</td><td>"; echo "$row[acciones]"; echo "</td></tr>";
				echo "<tr><th>"; echo NCS_PLAZO;echo "</th><th>"; echo NCS_CIERRE_PARCIAL; echo"</th></tr>"; 
				echo "<tr><td>"; echo "$row[plazo]"; echo "</td><td>"; echo "$row[cierresparc]"; echo "</td></tr>";            
				echo "<tr><th>"; echo NCS_EFICACIA;echo "</th><th>"; echo NCS_FECHACIERRE; echo"</th></tr>"; 
				echo "<tr><td>"; echo "$row[eficacia]"; echo "</td><td>"; echo "$row[cerradofecha]"; echo "</td></tr>";
				echo "<tr><th>"; echo NCS_DESVIACION; echo "</th></tr>";
				echo "<tr><td>"; echo "$row[desviacion]"; echo "</td></tr>";
				echo "</table>'>"; 
	  
				echo "$row[numhoja]</a>";
			echo "</td>"; 
			echo "<td>"; echo "$row[descripcion]"; echo "</td>"; 
			echo "<td>"; echo "$row[fecha]"; echo "</td>"; 
			echo "<td>"; echo "$row[afectaa]"; echo "</td>"; 
			echo "<td style width=12%>"; echo "$row[cerradofecha]"; echo "</td>"; 
			
			echo "<td>"; 
				echo "<a href='?seccion=ncs_admin&amp;aktion=change_id&amp;id=$row[id]' alt='".NCS_EDITAR_NC." $row[id]' title='".NCS_EDITAR_NC." $row[id]'>"; 
				echo "<i class='fa fa-pencil fa-2x' style='color: #9fff30;'></i></a>"; 
			echo "</td>"; 
			echo "<td>"; 
				echo "<a href='?seccion=ncs_print&amp;aktion=print_id&amp;id=$row[id]' alt='".NCS_IMPRIMIR." $row[id]' title='".NCS_IMPRIMIR." $row[id]'>"; 
				echo "<i class='fa fa-print fa-2x' style='color: #9fff30;'></i></a>"; 
			echo "</td>"; 
		echo "</tr>"; 
		
 
} 
echo "</tbody>"; 
	echo "</table>"; 


if(mysqli_num_rows($result) == 0) {
          echo '<br /><br /><br />'; 
          echo NOSEHAENCONTRADO;
}

 
?> 
<br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
<script>
$(document).ready(function() {
    $('#myTable').DataTable( {
        "order": [[ 0, "desc" ]]
    } );
} );
</script>