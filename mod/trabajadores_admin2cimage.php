<?php
/**
* Mod administrar trabajadores
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

		<link type="text/css" rel="stylesheet" href="../mod/aisgclistadesplegable/style.css" media="screen" />
		<?php require '../lang/spanish.lang.php';
		echo TRABAJADOR_ADMINISTRAR_TRABAJADORES; ?>/ 
			<a href="trabajadores_admin2cimage.php?&amp;aktion=add"><?php echo TRABAJADOR_ANADIR_TRABAJADOR; ?></a></td>::
			<a href="trabajadores_admin2cimage.php?&amp;aktion=change"><?php echo TRABAJADOR_CAMBIAR_TRABAJADOR; ?></a></td>

<br />
<?php

require '../lang/spanish.lang.php';
require '../secciones.php';
require_once '../includes/mysqli.php';

header('Content-Type: text/html;charset=UTF-8');

// Aktionen
$aktion = '';
if (isset($_GET['aktion'])) {
    $aktion = $_GET['aktion'];
}

if ($aktion == "") {
    echo 'Admin Area';
}

/*if ($aktion == "add") {
    if ((empty($_POST['trabajador'])) AND (empty($_POST['activo']))) {
        echo '<form action="" method="POST">';
            echo '<table class="print">';
            echo '<caption>';
                echo TRABAJADOR_ANADIR_TRABAJADOR;
            echo '</caption>';
            echo '<tbody>';
                echo '<tr>';
                    echo '<th style width="20%">';
                        echo TRABAJADOR_TRABAJADOR;
                    echo '</th>';
                        echo '<td><input class="inputlargo" name="trabajador" value=""></td>';
                echo '</tr>';
                echo '<tr>';
                    echo '<th style width="20%">';
                        echo TRABAJADOR_ACTIVIDAD;
                    echo '</th>';
                        echo '<td><input class="inputlargo" name="actividad" value=""></td>';
                echo '</tr>';

                    ?>
                    <tr>
                        <td> <input type="button" value="Subir imagen" onclick="Abrir_ventana('mod/faces/selectfile.php');"></td>
                    </tr>
                    <?php
                echo '<tr>';
                    echo '<th style width="20%">';
                    ?>
                         <div id="help" onMouseOver="showdiv(event,'<?php echo IMAGEN_URLHELP ?>');" onMouseOut="hiddenDiv()" style='display:table;margin-top3px;'>
                    <?php
                        echo IMAGEN_URL;
                         echo '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="images/help.png" /></div>';
                    echo '</th>';
                        echo '<td><input class="inputlargo" name="imgsrc" value=""></td>';
                echo '</tr>';
                echo '<tr>';
                    echo '<th>';
                        echo ESTADO;
                    echo '</th>';
                        echo '<td>';
                            echo '<select size="1" name="activo">';
                                echo '<option>...</option>';
                                echo '<option  value="1">'.ACTIVO.'</option>';
                                echo '<option  value="0">'.INACTIVO.'</option>';
                            echo '</select>';
                        echo '</td>';
                      //echo '<td><input name="activo" value=""></td>';
                echo '</tr>';
                        echo '<td colspan="2"><button type="submit" class="btn btn-info">' . ANADIR . '</button></td>';
                echo '</tr>';
            echo '</tbody>';
            echo '</table>';
         echo '</form>';
    } else {

        if (isset($_POST['trabajador'])) {
            $trabajador_Post = $_POST['trabajador'];
        }
        if (isset($_POST['actividad'])) {
            $actividad_Post = $_POST['actividad'];
        }
        if (isset($_POST['imgsrc'])) {
            $imgsrc_Post = $_POST['imgsrc'];
        }
        if (isset($_POST['activo'])) {
            $activo_Post = $_POST['activo'];
        }

    $sql =    mysql_query("INSERT INTO trabajadores (trabajador,actividad,imgsrc,activo) VALUES ('".$trabajador_Post."','".$actividad_Post."','".$imgsrc_Post."','".$activo_Post."')");
    if ($sql) echo TRABAJADOR_ANADIDO;
    else echo ERROR;
  }
} */

if ($aktion == "change") {
    $sql = mysqli_query($mysqli, "SELECT * FROM trabajadores ORDER BY id ASC");

       echo TRABAJADOR_THEAD_EDIT;
          echo '<table class="sortable">';
           echo '<caption>';
            echo TRABAJADOR_LISTA_TRABAJADORES;
          echo '</caption>';
           echo '<tbody>';
            echo '<tr>';
                echo '<th>Id</th>';
                echo '<th>';
                    echo TRABAJADOR_TRABAJADOR;
                echo '</th>';
                echo '<th>';
                    echo TRABAJADOR_ACTIVIDAD;
                echo '</th>';
                echo '<th>';
                    echo TRABAJADOR_IMG;
                echo '</th>';
                echo '<th>';
                    echo ESTADO;
                echo '</th>';
           echo '<tr>';
    while ($row = mysqli_fetch_row($sql)) {
            echo "<tr>";
                echo "<td>".$row['0']."</td>";
                echo "<td><a href='?seccion=trabajadores_admin2c&amp;aktion=change_id&amp;id=".$row['0']."'>".$row['1']."</a></td>";
                echo "<td><a href='?seccion=trabajadores_admin2c&amp;aktion=change_id&amp;id=".$row['0']."'>".$row['2']."</a></td>";
                echo "<td><a href='?seccion=trabajadores_admin2c&amp;aktion=change_id&amp;id=".$row['0']."'><img src='".$row['3']."' width='40px' /></a></td>";
                echo "<td><a href='?seccion=trabajadores_admin2c&amp;aktion=change_id&amp;id=".$row['0']."'>".$row['4']."</a></td>";
            echo "</tr>";
    }
             echo '</tbody>';
          echo "</table>";
}
if ($aktion == "change_id") {
    if ((empty($_POST['trabajador_change']))
        AND (empty($_POST['actividad_change']))
        AND (empty($_POST['imgsrc_change']))
        AND (empty($_POST['activo_change']))
        ) {
        $id = (int)$_GET['id'];
        $sql = mysqli_query($mysqli, "SELECT * FROM trabajadores WHERE id = $id ");
        $data = mysqli_fetch_row($sql);

        echo '<form action="" method="POST">';
            echo '<table class="print">';
                echo '<caption>';
                    echo TRABAJADOR_CAMBIAR_TRABAJADOR;
                echo '</caption>';
                    echo '<tr>';
                        echo '<th>';
                            echo TRABAJADOR_TRABAJADOR;
                        echo '</th>';
                            echo '<td><input class="inputlargo" name="trabajador_change" value="'.$data[1].'"></td>';
                    echo '</tr>';
                    echo '<tr>';
                        echo '<th>';
                            echo TRABAJADOR_ACTIVIDAD;
                        echo '</th>';
                            echo '<td><input class="inputlargo" name="actividad_change" value="'.$data[2].'"></td>';
                    echo '</tr>';
                    echo '<tr>';
                        echo '<th>';
									
									
									/*?>
									<div id="help"
										onMouseOver="showdiv(event,'<?php echo IMAGEN_HELP ?>');"
										onMouseOut="hiddenDiv()" style='display: table;'>
										<?php echo IMAGEN;?>
										&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <img src="images/help.png" alt="" />
									</div>
									<?php*/
																
							echo '<div align="center">';
							echo '<p align="left">';
							echo '<a class="tooltip2" href="#">' . IMAGEN . '<span class="custom info"><img src="images/Info.png" alt="Info" title="Info" height="48" width="48" /><em>
							' . INFORMACION . '</em>' . IMAGEN_HELP . '</span></a></p>
							</div>';
									
									
									
									
                         echo '</th>';
                              echo '<td>';


                            ?>
			<form method='post' action='' onsubmit='alert(this.image.value)'>
			<!--<a href='javascript:void(0);' onclick='$("#images").imageSelector("first");'>first</a>&nbsp;&nbsp;&nbsp;
														<a href='javascript:void(0);' onclick='$("#images").imageSelector("prev")'>prev</a>&nbsp;&nbsp;&nbsp;-->


							<?php
                                echo '<select name="imgsrc_change" id="images">';
                                       echo '<option>'.$data[3].'</option>';
                                    $handle=opendir('mod/ajaximage/uploads/');
        while (false!==($file = readdir($handle))) {
            if ($file != "." && $file != "..") {
                                    //echo "<option value=\"$file\">$file   - ".filesize("mod/faces/tmp/$file")." bytes</option>\n";
                                      echo "<option value=\"mod/ajaximage/uploads/$file\">$file</option>\n";

            }
        }
                                      closedir($handle);
                                 echo "</select>";

                            ?>

	<!--<a href='javascript:void(0);' onclick='$("#images").imageSelector("next")'>next</a>&nbsp;&nbsp;&nbsp;
                                <a href='javascript:void(0);' onclick='$("#images").imageSelector("last")'>last</a>-->
			</form>
			<script
				src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js"
				type="text/javascript"></script>
			<script type="text/javascript" src="jscripts/image_selector.jquery.js"></script>
			<script type="text/javascript">
											$("#images").imageSelector({
												//width of images
												width: 32,
												//height of images
												height: 46,
												//change image on click
												changeOnClick: true,
												//hide original input
												hideInput: false
											});
			</script>

			<!--<p class="ToolText" onMouseOver="javascript:this.className='ToolTextHover'" onMouseOut="javascript:this.className='ToolText'"><img src="images/help.png" align="left" /><span>< ?php echo DATABASE_HOST_HELP; ?></span></p>-->

			<?php

                              echo '</td>';
                              echo '<td><img src='.$data[3].' />&nbsp;&nbsp;'.IMAGENACTUAL.'</td>';

                    echo '</tr>';
                    echo '<tr>';
                        echo '<th>';
                            echo ESTADO;
                        echo '</th>';
                           echo '<td>';

                                    echo '<select size="1" name="activo_change">';
                                       echo '<option>'.$data[4].'</option>';
                                       echo '<option  value="1">'.ACTIVAR.'</option>';
                                       echo '<option  value="0">'.DESACTIVAR.'</option>';
                                    echo '</select>';

                                    echo '&nbsp;1: &nbsp;'.ACTIVO.', &nbsp; 0: &nbsp; '.INACTIVO.'';

                            echo '</td>';
                    echo '</tr>';
                           echo '<td colspan="2"><button type="submit" class="btn btn-warning">' . ACTUALIZAR . '</button>';
                                echo "<button onclick='history.go(-1);'>";
                                     echo VOLVER;
                                echo "</button>";
                           echo '</td>';
                    echo '</tr>';
            echo '</table>';
         echo '</form>';
    } else {
          $sql = mysqli_query($mysqli, "UPDATE trabajadores SET trabajador='$_POST[trabajador_change]',actividad='$_POST[actividad_change]',imgsrc='$_POST[imgsrc_change]',activo='$_POST[activo_change]' WHERE id=$_GET[id]");
        if ($sql) {
                    echo "<span class='documenttitle'>";
                      echo TRABAJADOR_ACTUALIZADO;
                    echo "</span>";
                    echo ((is_object($mysqli)) ? mysqli_error($mysqli) : (($___mysqli_res = mysqli_connect_error()) ? $___mysqli_res : false));

                ?>

<?php
        }
    }
}
?>