<?php 

/** 
* Mod COMBINAR seguimientos con sus objetivos 
*  
* PHP version 5 
*  
* @category Mod 
* @package  Handy-q 
* @author   JJuan <javier@textblock.org> 
* @license  http://www.gnu.org/copyleft/gpl.html GNU General Public License 
* @link     http://www.textblock.org 
*/ 

 /** Aktionen **/
    $aktion = ''; 
if (isset($_GET['aktion'])) {
        $aktion = $_GET['aktion'];
} 
     
if ($aktion == "") { 
     echo 'Admin Area'; 
} 
     
if ($aktion == "print") { 
     $sql = mysqli_query($mysqli, "SELECT * FROM objetivosdatosgenerales ORDER BY Id DESC");   
    
       echo OBJETIVOS_JOIN_THEAD;     
		echo '<table class="sortable">'; 
			echo '<caption>'; 
			echo OBJETIVOS_LISTA; 
			echo '</caption>'; 
				echo '<tbody>';     
					echo '<tr>'; 
					echo '<th>Id</th>'; 
					echo '<th>'; 
					echo CODIGO; 
					echo '</th>'; 
					echo '<th>'; 
					echo OBJETIVOS_NOMBRE_OBJETIVO; 
					echo '</th>';  
					echo '<th style width="5%"><a href="?seccion=objetivos_admin&amp;aktion=change_id&amp;id=$row[id]" title="'.OBJETIVOS_EDITAR_OBJETIVO.'">';
					echo '<i class="fa fa-edit fa-2x" style="color:#752209;"></i></a></th>';
					echo '<th style width="5%"><a href="?seccion=objetivos_print&amp;aktion=change_id&amp;id=$row[id]" title="'.OBJETIVOS_IMPRIMIR_OBJETIVO.'">
						  <i class="fa fa-retweet fa-2x" style="color:Gold;"></i></a></th>';


                
    while ($row = mysqli_fetch_row($sql)) { 
                    echo "<tr>";   
                    echo "<td>".$row['0']."</td>"; 
                    
                    
                    echo "<td>"; 
                
                        echo "<a href='?seccion=objetivos_admin&amp;aktion=change_id&amp;id=".$row['0']."' alt='Image Tooltip' rel='tooltip' content='<table class=print2>";       
                                    echo "<caption>Objetivo: <span class=documenttitle>"; echo "$row[2]"; echo "</span></caption>";                                                                       
                                    echo "<tbody>"; 
                                        echo "<tr>"; 
                                            echo "<th style=width:50px>"; 
                                                echo "ID"; 
                                            echo "</th>"; 
                                                echo "<td>"; echo "$row[0]"; echo "</td>"; 
                                        echo "</tr>";
                                        echo "<tr>"; 
                                            echo "<th style=width:50px>"; 
                                                echo CODIGO; 
                                            echo "</th>"; 
                                                echo "<td>"; echo "$row[1]"; echo "</td>"; 
                                        echo "</tr>"; 
                                        echo "<tr>"; 
                                            echo "<th style=width:50px>"; 
                                                echo OBJETIVOS_NOMBRE_OBJETIVO; 
                                            echo "</th>"; 
                                                echo "<td>"; echo "$row[2]"; echo "</td>"; 
                                        echo "</tr>"; 
                                        echo "<tr>"; 
                                            echo "<th style=width:50px>"; 
                                                echo ANO; 
                                            echo "</th>"; 
                                                echo "<td>"; echo "$row[3]"; echo "</td>"; 
                                        echo "</tr>"; 
                                        echo "<tr>"; 
                                            echo "<th style=width:50px>"; 
                                                echo OBJETIVOS_ORIGEN; 
                                            echo "</th>"; 
                                                echo "<td>"; echo "$row[4]"; echo "</td>"; 
                                        echo "</tr>"; 
                                        echo "<tr>"; 
                                            echo "<th style=width:50px>"; 
                                                echo OBJETIVOS_DETECCION; 
                                            echo "</th>"; 
                                                echo "<td>"; echo "$row[5]"; echo "</td>"; 
                                        echo "</tr>"; 
                                        echo "<tr>"; 
                                            echo "<th style=width:50px>"; 
                                                echo OBJETIVOS_CAUSAS; 
                                            echo "</th>"; 
                                                echo "<td>"; echo "$row[6]"; echo "</td>"; 
                                        echo "</tr>"; 
                                        echo "<tr>"; 
                                            echo "<th style=width:50px>"; 
                                                echo OBJETIVOS_RECURSOS; 
                                            echo "</th>"; 
                                                echo "<td>"; echo "$row[7]"; echo "</td>"; 
                                        echo "</tr>"; 
                                        echo "<tr>"; 
                                            echo "<th style=width:50px>"; 
                                                echo INDICADOR; 
                                            echo "</th>"; 
                                                echo "<td>"; echo "$row[8]"; echo "</td>"; 
                                        echo "</tr>"; 
                                        echo "<tr>"; 
                                            echo "<th style=width:50px>"; 
                                               echo OBJETIVOS_FUENTE; 
                                            echo "</th>"; 
                                                echo "<td>"; echo "$row[9]"; echo "</td>"; 
                                        echo "</tr>"; 
                                        echo "<tr>"; 
                                            echo "<th style=width:50px>"; 
                                               echo OBJETIVOS_FRECUENCIA; 
                                            echo "</th>"; 
                                                echo "<td>"; echo "$row[10]"; echo "</td>"; 
                                        echo "</tr>"; 
                                        echo "<tr>"; 
                                            echo "<th style=width:50px>"; 
                                               echo OBJETIVOS_PLAZO; 
                                            echo "</th>"; 
                                                echo "<td>"; echo "$row[11]"; echo "</td>"; 
                                        echo "</tr>"; 
                                        echo "<tr>"; 
                                            echo "<th style=width:50px>"; 
                                                echo OBJETIVOS_EJECUTOR; 
                                            echo "</th>"; 
                                                echo "<td>"; echo "$row[12]"; echo "</td>"; 
                                        echo "</tr>"; 
                                        echo "<tr>"; 
                                            echo "<th style=width:50px>"; 
                                                 echo OBJETIVOS_PERSEGUIDOR; 
                                            echo "</th>"; 
                                                echo "<td>"; echo "$row[13]"; echo "</td>"; 
                                        echo "</tr>"; 
                                        echo "<tr>"; 
                                            echo "<th>VºBº: </th>"; 
                                                echo "<td>"; echo "$row[14]"; echo "</td>"; 
                                        echo "</tr>"; 
                                        echo "<tr>"; 
                                            echo "<th style=width:50px>"; 
                                                 echo RESULTADO; 
                                            echo "</th>"; 
                                                echo "<td>"; echo "$row[15]"; echo "</td>"; 
                                        echo "</tr>"; 
                                        echo "<tr>"; 
                                            echo "<th style=width:50px>"; 
                                                 echo FECHA; 
                                            echo "</th>"; 
                                                echo "<td>"; echo "$row[16]"; echo "</td>"; 
                                        echo "</tr>"; 
                                    echo "</tbody>";         
                                    echo "</table>'>"; echo "$row[1]"; echo "</a>";                  
                    echo "</td>";
                    
                    //echo "<td><a href='?seccion=seguimientos_por_objetivo&amp;aktion=print_id&amp;id=".$row['1']."'>".$row['1']."</a></td>"; 
                    
                    
                    echo "<td>".$row['2']."</td>"; 
                    
                    echo "<td>"; 
                    echo "<a href='?seccion=objetivos_admin&amp;aktion=change_id&amp;id=" . $row['0'] . "' title='".OBJETIVOS_EDITAR_OBJETIVO." - $row[1]'>"; 
                    echo "<i class='fa fa-pencil fa-2x' style='color:#752209;'></i></a>"; 
                    echo "</td>"; 
                    echo "<td>"; 
                    echo "<a href='?seccion=seguimientos_por_objetivo&amp;aktion=print_id&amp;id=".$row['1']."' title='".OBJETIVOS_VER_TAREAS." - $row[1]'>"; 
                    echo "<i class='fa fa-retweet fa-2x' style='color:Gold;'></i></a>"; 
                    echo "</td>"; 
                    
                    
                    
                    echo "</tr>"; 
    } 
              echo '</tbody>';       
      echo "</table>"; 
} 
if ($aktion == "print_id") { 
     
         
        $_pagi_sql = "SELECT *  
    FROM `objetivosseguimiento`  
    WHERE `codigoobjetivo` LIKE '$_GET[id]' ORDER BY `fechalimite` DESC"; 
     
    $sql = mysqli_query($mysqli, "SELECT * FROM objetivosdatosgenerales WHERE `codigoobjetivo` LIKE '$_GET[id]'"); 
    $data = mysqli_fetch_row($sql); 
     
    //cantidad de resultados por página (opcional, por defecto 20) 
    $_pagi_cuantos = 20; 
    //Incluimos el script de paginación. Éste ya ejecuta la consulta automáticamente 
    include "includes/paginator.inc.php"; 
     
     
    if (mysqli_num_rows($sql) > 0) { 
     
       echo OBJETIVOS_FOLLOWUP;
       echo '<table class="sortable">'; 
           echo '<caption>'; 
           echo OBJETIVO;
           echo ':&nbsp&nbsp';           
           echo $data[2]; 
           echo '</caption>';         
           echo '<tbody>'; 
            echo '<tr>';          
                echo "<th>Id:</th>"; 
                echo '<th>'; 
                echo CODIGO; 
                echo '</th>'; 
                echo '<th>'; 
                echo OBJETIVOS_ACCION; 
                echo '</th>'; 
                echo '<th>'; 
                echo RESPONSABLE; 
                echo '</th>'; 
                echo '<th>'; 
                echo LIMITE; 
                echo '</th>'; 
                echo '<th>'; 
                echo TERMINACION; 
                echo '</th>'; 
                echo '<th>'; 
                echo OBSERVACIONES; 
                echo '</th>'; 
                echo '<th>'; 
                echo '<i class="fa fa-edit fa-2x" style="color:Gold;"></i>'; 
                echo '</th>'; 
            echo "</tr>"; 
     
    //Leemos y escribimos los registros de la página actual 
        while ($row = mysqli_fetch_array($_pagi_result)) { 
            echo "<tr>"; 
            echo "<td>".$row[0]."</td>"; 
            
            
            echo "<td>"; 
                
                        echo "<a href='?seccion=objetivos_admin&amp;aktion=change_id&amp;id=".$data['0']."' alt='Image Tooltip' rel='tooltip' content='<table class=print2>";       
                                    echo "<caption>Objetivo: <span class=documenttitle>"; echo "$data[2]"; echo "</span></caption>";                                                                       
                                    echo "<tbody>"; 
                                        echo "<tr>"; 
                                            echo "<th style=width:50px>"; 
                                                echo "ID"; 
                                            echo "</th>"; 
                                                echo "<td>"; echo "$data[0]"; echo "</td>"; 
                                        echo "</tr>";
                                        echo "<tr>"; 
                                            echo "<th style=width:50px>"; 
                                                echo CODIGO; 
                                            echo "</th>"; 
                                                echo "<td>"; echo "$data[1]"; echo "</td>"; 
                                        echo "</tr>"; 
                                        echo "<tr>"; 
                                            echo "<th style=width:50px>"; 
                                                echo OBJETIVOS_NOMBRE_OBJETIVO; 
                                            echo "</th>"; 
                                                echo "<td>"; echo "$data[2]"; echo "</td>"; 
                                        echo "</tr>"; 
                                        echo "<tr>"; 
                                            echo "<th style=width:50px>"; 
                                                echo ANO; 
                                            echo "</th>"; 
                                                echo "<td>"; echo "$data[3]"; echo "</td>"; 
                                        echo "</tr>"; 
                                        echo "<tr>"; 
                                            echo "<th style=width:50px>"; 
                                                echo OBJETIVOS_ORIGEN; 
                                            echo "</th>"; 
                                                echo "<td>"; echo "$data[4]"; echo "</td>"; 
                                        echo "</tr>"; 
                                        echo "<tr>"; 
                                            echo "<th style=width:50px>"; 
                                                echo OBJETIVOS_DETECCION; 
                                            echo "</th>"; 
                                                echo "<td>"; echo "$data[5]"; echo "</td>"; 
                                        echo "</tr>"; 
                                        echo "<tr>"; 
                                            echo "<th style=width:50px>"; 
                                                echo OBJETIVOS_CAUSAS; 
                                            echo "</th>"; 
                                                echo "<td>"; echo "$data[6]"; echo "</td>"; 
                                        echo "</tr>"; 
                                        echo "<tr>"; 
                                            echo "<th style=width:50px>"; 
                                                echo OBJETIVOS_RECURSOS; 
                                            echo "</th>"; 
                                                echo "<td>"; echo "$data[7]"; echo "</td>"; 
                                        echo "</tr>"; 
                                        echo "<tr>"; 
                                            echo "<th style=width:50px>"; 
                                                echo INDICADOR; 
                                            echo "</th>"; 
                                                echo "<td>"; echo "$data[8]"; echo "</td>"; 
                                        echo "</tr>"; 
                                        echo "<tr>"; 
                                            echo "<th style=width:50px>"; 
                                               echo OBJETIVOS_FUENTE; 
                                            echo "</th>"; 
                                                echo "<td>"; echo "$data[9]"; echo "</td>"; 
                                        echo "</tr>"; 
                                        echo "<tr>"; 
                                            echo "<th style=width:50px>"; 
                                               echo OBJETIVOS_FRECUENCIA; 
                                            echo "</th>"; 
                                                echo "<td>"; echo "$data[10]"; echo "</td>"; 
                                        echo "</tr>"; 
                                        echo "<tr>"; 
                                            echo "<th style=width:50px>"; 
                                               echo OBJETIVOS_PLAZO; 
                                            echo "</th>"; 
                                                echo "<td>"; echo "$data[11]"; echo "</td>"; 
                                        echo "</tr>"; 
                                        echo "<tr>"; 
                                            echo "<th style=width:50px>"; 
                                                echo OBJETIVOS_EJECUTOR; 
                                            echo "</th>"; 
                                                echo "<td>"; echo "$data[12]"; echo "</td>"; 
                                        echo "</tr>"; 
                                        echo "<tr>"; 
                                            echo "<th style=width:50px>"; 
                                                 echo OBJETIVOS_PERSEGUIDOR; 
                                            echo "</th>"; 
                                                echo "<td>"; echo "$data[13]"; echo "</td>"; 
                                        echo "</tr>"; 
                                        echo "<tr>"; 
                                            echo "<th>VºBº: </th>"; 
                                                echo "<td>"; echo "$data[14]"; echo "</td>"; 
                                        echo "</tr>"; 
                                        echo "<tr>"; 
                                            echo "<th style=width:50px>"; 
                                                 echo RESULTADO; 
                                            echo "</th>"; 
                                                echo "<td>"; echo "$data[15]"; echo "</td>"; 
                                        echo "</tr>"; 
                                        echo "<tr>"; 
                                            echo "<th style=width:50px>"; 
                                                 echo FECHA; 
                                            echo "</th>"; 
                                                echo "<td>"; echo "$data[16]"; echo "</td>"; 
                                        echo "</tr>"; 
                                    echo "</tbody>";         
                                    echo "</table>'>"; echo "$row[1]"; echo "</a>";                  
            echo "</td>";
            
            //echo "<td>".$row[1]."</td>"; 
            
            
            
            echo "<td>".$row[2]."</td>"; 
            echo "<td>".$row[3]."</td>"; 
            echo "<td>".$row[4]."</td>"; 
            echo "<td>".$row[5]."</td>";     
            echo "<td>".$row[6]."</td>";     
            echo '<td><a href="?seccion=seguimientos_admin&aktion=change_id&id='.$row[0].'" title="' . OBJETIVOS_FOLLOWUP . '-' . $row[0] . '">
						<i class="fa fa-pencil fa-2x" style="color:Gold;"></i></a></td>';            
            echo "</tr>"; 
            echo ((is_object($mysqli)) ? mysqli_error($mysqli) : (($___mysqli_res = mysqli_connect_error()) ? $___mysqli_res : false)); 
     
        } 
        echo "</tbody>"; 
        echo "</table>"; 
    } 
        echo "<br />&nbsp;&nbsp;&nbsp;&nbsp;<a href='javascript:history.go(-1)' title'" . VOLVER . "'><i class='fa fa-step-backward fa-2x' style='color:Black'></i></a></td>";     
} 
    //Incluimos la barra de navegación 
    echo"<p>".$_pagi_navegacion."</p>"; 
?>