<?php

/** 
* Mod IMPRIMIR modificaciones a documentos
*  
* PHP version 5 
*  
* @category Mod 
* @package  Handy-q 
* @author   JJuan <javier@textblock.org> 
* @license  http://www.gnu.org/copyleft/gpl.html GNU General Public License 
* @link     http://www.textblock.org 
*/ 
 
// Aktionen 
$aktion = ''; 
if (isset($_GET['aktion'])) {
    $aktion = $_GET['aktion'];
} 
 
if ($aktion == "") { 
    echo 'Admin Area'; 
} 
 
if ($aktion == "print") { 


    //--------------------------contamos los registros

            $result = mysqli_query($mysqli, 'select count(*) AS count from ( SELECT * FROM modifdoc ) m');

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




    $sql = mysqli_query($mysqli, "SELECT * FROM modifdoc"); 
       
		echo '<span class="documenttitle">' . MODIFDOC_PRINT . '</span>';
        echo '<table id="myTable" class="sortable">'; 
        echo "<thead>"; 
        echo '<tr>';
		echo "<th>Id</th>";
		echo "<th>";
        echo NOMBRE_DOCUMENTO; 
        echo '</th>';
		echo "<th>";
        echo MODIFICACION; 
        echo '</th>';
        echo '<th>'; 
        echo DOCUMENTOS_NUMEROREVISION; 
        echo '</th>'; 
        
        echo '<th><a href="#" title="' . EDITAR . '"><i class="fa fa-edit" style="color:#FFC107;"></i></th>'; 
        echo '<th><a href="#" title="' . IMPRIMIR . '"><i class="fa fa-print" style="color:#FFC107;"></i></th>';
        echo '</tr>';
		echo '</thead>';
		echo '<tbody>';
		
    while ($row = mysqli_fetch_row($sql)) { 
        echo "<tr>";   
        echo "<td>".$row['0']."</td>"; 
        echo "<td>";		
		?>
		
		<div class="ToolText"  onMouseOver="javascript:this.className='ToolTextHover'" onMouseOut="javascript:this.className='ToolText'">
			<a href="index.php?seccion=modifdoc_print&amp;aktion=print_id&amp;id=<?php echo $row['0'] ?>"><?php echo $row['1'] ?></a>	
			<span>
			
			<?php echo $row ['1']; ?>
			
			<?php
			
				echo "<table class=print2><tr>"; 
				echo "<th>"; echo NOMBRE_DOCUMENTO; echo "</th><th>"; echo DOCUMENTOS_NUMEROREVISION; echo "</th><th>"; echo DOCUMENTOS_MODIFICACION; echo"</th><th></th></tr>"; 
				echo "<tr><td>"; echo "$row[1]"; echo "</td><td>"; echo "$row[2]"; echo "</td><td colspan=2>"; echo "".strip_tags($row['3'],'<div><a><br><p><font>').""; echo "</td></tr>"; 
				echo "<tr><th colspan=2>"; echo DOCUMENTOS_CAPAPART; echo "</th><th colspan=2>"; echo DOCUMENTOS_FECHAMODIFICACION; echo "</th></tr>"; 
				echo "<tr><td colspan=2>"; echo "$row[4]"; echo"</td><td colspan=2>"; echo "$row[5]"; echo "</td></tr>"; 
				echo "</table>";  
			?>
			</span>
		</div>
		
		<?php                
        echo "</td>"; 
		echo "<td>".strip_tags($row['3'],'<div><a><br><p><font>')."</td>"; 
        echo "<td><a href='?seccion=modifdoc_print&amp;aktion=print_id&amp;id=".$row['0']."'>".$row['2']."</a></td>"; 
        
            echo '<td><a href="?seccion=modifdoc_admin&amp;aktion=change_id&amp;id='.$row[0].'" title="'.EDITAR.' - '.$row[0].'">
                          <i class="fa fa-pencil" style="color:#FFC107;"></i>
                      </a></td>';
            echo '<td><a href="?seccion=modifdoc_print&amp;aktion=print_id&amp;id='.$row[0].'" title="'.IMPRIMIR.' - '.$row[0].'">
                          <i class="fa fa-print" style="color:#FFC107;"></i>
                      </a></td>';
        echo "</tr>"; 
    } 
        echo "</tbody>";   
        echo "</table>"; 
} 
if ($aktion == "print_id") { 

    if ((empty($_POST['titulo'])) AND (empty($_POST['revision_num']))) { 
        $id = $_GET['id']; 
        $sql = mysqli_query($mysqli, "SELECT * FROM modifdoc WHERE id = $_GET[id] "); 
        $data = mysqli_fetch_row($sql); 

 
        echo '<table class="sortable">'; 
        echo '<caption>Corresponde a la rev. nº &nbsp;'; 
            echo "<span class='documenttitle'>".$data[2]."</span>"; 
            echo '&nbsp;del documento: &nbsp;'; 
            echo "<span class='documenttitle'>".$data[1]."</span> 
			&nbsp; <a href='?seccion=modifdoc_admin&aktion=change_id&id=" . $data[0] . "' title='" . DOCUMENTOS_CAMBIAR_DOCUMENTO . " - " . $data[1] . "'>
			<i class='fa fa-pencil' style='color:#FFC107;'></i></a>"; 
        echo "<tbody>";       
         echo '<tr>'; 
         echo '<th>'.NOMBRE_DOCUMENTO.':</th>'; 
            echo "<td>".$data[1]."</td>"; 
        echo '</tr>'; 
        echo '<tr>'; 
        echo '<th>'.DOCUMENTOS_NUMEROREVISION.':</th>'; 
            echo "<td>".$data[2]."</td>"; 
        echo '</tr>'; 
        echo '<tr>'; 
        echo '<th>'.DOCUMENTOS_MODIFICACION.':</th>'; 
            echo "<td>".$data[3]."</td>"; 
        echo '</tr>'; 
        echo '<tr>'; 
        echo '<th>'.DOCUMENTOS_CAPAPART.':</th>'; 
            echo "<td>".$data[4]."</td>"; 
        echo '</tr>'; 
        echo '<tr>'; 
        echo '<th>'.DOCUMENTOS_FECHAMODIFICACION.':</th>'; 
            echo "<td>".$data[5]."</td>"; 
        echo '</tr>'; 
        echo "</tbody>";       
        echo '</table>'; 
        echo '<br>';         
                        echo "<button onclick='history.go(-1);'>";
                            echo VOLVER;
                        echo "</button>";
    } 
} 
?>
<br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
			<script>
			$(document).ready(function() {
				$('#myTable').DataTable( {
					"order": [[ 0, "desc" ]],
					"deferRender": true
				} );
			} );
			</script>