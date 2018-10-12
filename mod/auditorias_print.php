<?php
/**
* Mod IMPRIMIR auditorías al sistema de calidad
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


<?php

// Aktionen
$aktion = '';
if (isset($_GET['aktion'])) {
        $aktion = $_GET['aktion'];
}

if ($aktion == "") {
    echo 'Admin Area';
}

if ($aktion == "print") {
    $sql = mysqli_query($mysqli, "SELECT * FROM informeauditoria ORDER BY id DESC");
	 echo '<span class="yellow">' . AINFORMES_LISTA_PRINTSCREEN . '</span>';
     echo AINFORMES_ADVERTICE;
        echo '<table id="myTable" class="sortable">';
          echo "<thead>";
            echo '<tr>';
				echo '<th>Id</th>';
				echo '<th>';
					echo AINFORMES_INFORME;
				echo '</th>';
				echo '<th>';
					echo FECHA;
				echo '</th>';
				echo '<th>';
					 echo AINFORMES_AREA_AUDITADA;
				echo '</th>';
				echo '<th width="5%">';
				echo "<a href='#' title='";
				echo MENU_ALT_ADMINISTRAR_AINFORMES;
				echo "'>";
				echo "<i class='fa fa-edit' style='color:#ffeb3b;'></i></th>";
				echo '<th width="5%">';
				echo "<a href='#' title='";
				echo AINFORMES_IMPRIMIR;
				echo "'>";
				echo "<i class='fa fa-print' style='color:#ffeb3b;'></i></th>";
            echo '</tr>';
		echo '</thead>';
		echo '<tbody>';
        while ($row = mysqli_fetch_row($sql)) {
             echo "<tr>";
                echo "<td>".$row['0']."</td>";
                echo "<td>";


      						?>
      						<div class="ToolText"  onMouseOver="javascript:this.className='ToolTextHover'" onMouseOut="javascript:this.className='ToolText'">
      							<a href='?seccion=auditorias_admin&amp;aktion=change_id&amp;id=<?php echo $row ['0']; ?> alt='<?php echo $row ['3']; ?>><?php echo $row['1']; ?></a>

      							<span>

      							<a href="?seccion=auditorias_admin&aktion=change_id&id=<?php echo $row ['0']; ?>" title="<?php echo EDITAR; echo "&nbsp;"; echo INFORME; echo "&nbsp;"; echo $row ['1']; ?>"><i class="fa fa-pencil fa-2x" style="position:absolute; left:50px; top:10px; color:#ffeb3b;"></i></a>

      							<a href="mod/javaformdelete_informes.php?var=<?php echo $row ['1']; ?>" target="popup" onClick="window.open(this.href, this.target, 'width=360,height=215'); return false;" title="<?php echo BORRAR; echo "&nbsp;"; echo INFORME; echo "&nbsp;"; echo $row ['1']; ?>"><i class="fa fa-trash-o fa-2x" style="position:absolute; left:90px; top:10px; color:#ffeb3b;"></i></a>

      							<a href="?seccion=auditorias_admin&amp;aktion=print_id&id=<?php echo $row ['0']; ?>" title="<?php echo IMPRIMIR; echo "&nbsp;"; echo INFORME; echo "&nbsp;"; echo $row ['1']; ?>"><i class="fa fa-print fa-2x" style="position:absolute; left:130px; top:10px; color:#ffeb3b;"></i></a>
                    <br />
      								<table>
      								<tr>
      									<th><?php echo AUDITORIAS_AUDITORIA; ?></th>
      									<th><?php echo FECHA; ?></th>
      									<th><?php echo AINFORMES_AREA_AUDITADA; ?></th>
      									<th></th>
      								</tr>
      								<tr>
      									<td><?php echo $row['1']; ?></td>
      									<td><?php echo $row['2']; ?></td>
      									<td colspan=2><?php echo $row['3']; ?></td>
      								</tr>
      								<tr>
      									<th colspan=2><?php echo DOCUMENTACION; ?></th>
      									<th colspan=2><?php echo AUDITORIAS_AUDITOR; ?></th>
      								</tr>
      								<tr>
      									<td colspan=2><?php echo $row['4']; ?></td>
      									<td colspan=2><?php echo $row['5']; ?></td>
      								</tr>
      								<tr>
      									<th colspan=2><?php echo AINFORMES_OBJETO; ?></th>
      									<th><?php echo RESULTADO; ?></th>
      								</tr>
      								<tr>
      								<td colspan=2><?php echo $row['6']; ?></td>
      								<td colspan=2><?php echo $row['7']; ?></td></tr>
      								</td></tr></table>'>

      							</span>
      						</div>


      						<?php
      					echo "</td>";
                echo "<td>".$row['2']."</td>";
                echo "<td>".$row['3']."</td>";

        ?>
        <td width="5%"><a href="?seccion=auditorias_admin&amp;aktion=change_id&amp;id=<?php echo $row['0'];?>" title="<?php echo AINFORMES_EDITAR; echo '- ' . $row[1] . ''; ?>">
		<i class='fa fa-pencil' style='color:#ffeb3b;'></i></a></td>
        <td width="5%"><a href="?seccion=auditorias_print&amp;aktion=print_id&amp;id=<?php echo $row['0'];?>" title="<?php echo AINFORMES_IMPRIMIR; echo '- ' . $row[1] . ''; ?>">
		<i class='fa fa-print' style='color:#ffeb3b;'></i></a></td>
        <?php


             echo "</tr>";
        }
        echo "</tbody>";
        echo "</table>";
}
if ($aktion == "print_id") {
    if ((empty($_POST['ai'])) AND (empty($_POST['Fecha'])) AND (empty($_POST['AreaAuditada'])) AND (empty($_POST['Documentacion'])) AND (empty($_POST['Auditor'])) AND (empty($_POST['ObjetoAuditoria'])) AND (empty($_POST['Resultado']))) {
        $id = $_GET['id'];
        $sql = mysqli_query($mysqli, "SELECT * FROM informeauditoria WHERE id = $_GET[id] ");
        $data = mysqli_fetch_row($sql);

	echo '<span class="yellow">' . AINFORMES_PRINT_DETAILS . '</span><br/>';
	   echo "<a href='?seccion=auditorias_print&amp;aktion=print'>Volver</a>&nbsp;&nbsp;&nbsp;<a href='?seccion=auditorias_admin&amp;aktion=change_id&amp;id=".$data[0]."'>editar</a>";

		echo '<table class="print">';
         echo '<tbody>';
          echo '<tr>';
            echo '<th>';
                echo AINFORMES_INFORME;
            echo '</th>';
               echo '<td>'.$data[1].'</td>';
          echo '</tr>';
          echo '<tr>';
            echo '<th>';
                echo FECHA;
            echo '</th>';
                echo '<td>'.$data[2].'</td>';
          echo '</tr>';
          echo '<tr>';
            echo '<th>';
                 echo AINFORMES_AREA_AUDITADA;
            echo '</th>';
                 echo '<td>'.$data[3].'</td>';
          echo '</tr>';
          echo '<tr>';
            echo '<th>';
              echo DOCUMENTACION;
            echo '</th>';
                 echo '<td>'.$data[4].'</td>';
         echo '</tr>';
         echo '<tr>';
            echo '<th>';
              echo AUDITORIAS_AUDITOR;
            echo '</th>';
              echo '<td>'.$data[5].'</td>';
         echo '</tr>';
         echo '<tr>';
           echo '<th>';
             echo AINFORMES_OBJETO;
           echo '</th>';
              echo '<td>'.$data[6].'</td>';
         echo '</tr>';
         echo '<tr>';
            echo '<th>';
              echo RESULTADO;
            echo '</th>';
               echo '<td>'.$data[7].'</td>';
         echo '</tr>';
         echo ' </tbody>';
         echo '</table>';

         echo '<p id="para1">';
           echo '<a href="javascript:history.go(-1)" title="' . VOLVER . '"><i class="fa fa-step-backward" style="color:Black;"></i></a>';
        echo '</p>';
    }
}
?>
<script>
$(document).ready(function() {
    $('#myTable').DataTable( {
        "order": [[ 0, "desc" ]]
    } );
} );
</script>
