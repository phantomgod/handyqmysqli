<link type="text/css" rel="stylesheet" href="../../font-awesome-4.4.0/css/font-awesome.min.css">
<?php
//*require('conexion.php');
require_once "../../includes/mysqli.php";
require "../../lang/spanish.lang.php";


//capturar el nº de la CodigoObjetivo
@$nom=$_POST['CodigoObjetivo'];

//seleccionamos los datos del cliente por su nombre
        $sql = "SELECT * FROM objetivosdatosgenerales WHERE CodigoObjetivo='".$nom."'";
        $sql = mysqli_query($mysqli, $sql);
		$row = mysqli_fetch_array($sql);

//mostrando el resultado


                        echo "<table class=print>";       
                            echo "<caption>Objetivo: <span class=documenttitle>"; echo "$row[2]"; echo "</span>
								
									<a href='../../?seccion=objetivos_admin&amp;aktion=change_id&amp;id=$row[0]' alt=''".OBJETIVOS_EDITAR_OBJETIVO."' title='".OBJETIVOS_EDITAR_OBJETIVO."'><i class='fa fa-edit fa-2x' style='color:#752209;'></i></a>
								
								</caption>";                                                                       
                            echo "<tbody>"; 
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
                            echo "</table>";