<html>
<head>
<script language="JavaScript">
function Abrir_ventana (pagina) {
var opciones="toolbar=yes,location=no, directories=no, status=no, menubar=no, scrollbars=yes, resizable=yes, width=400, height=250, top=85, left=140";
window.open(pagina,"",opciones);
}
</script>
</head>
<body>

<?php
    // requires the class
    require "class.datepicker.php";
    
    // instantiate the object
    $db=new datepicker();
    
    // uncomment the next line to have the calendar show up in german
    $db->language = "spanish";    
    $db->firstDayOfWeek = 1;

    // set the format in which the date to be returned
    $db->dateFormat = "Y-m-d";
?>


<table class="print" summary="Administrar inspecciones">
   <caption><?php echo INSPECCIONES_EDITAR_INSPECCION;?></caption>
    <tbody>
        <tr>
            <td>
              <a href="?seccion=inspecciones_admin&amp;aktion=add"><?php echo INSPECCIONES_ANADIR_INSPECCION; ?></a> :: 
              <a href="?seccion=inspecciones_admin&amp;aktion=change"><?php echo INSPECCIONES_CAMBIAR_INSPECCION; ?></a>
            </td>
        </tr>
    </tbody>
</table>
<br>
<?php
// Aktionen
$aktion = '';
if (isset($_GET['aktion'])) {
    $aktion = $_GET['aktion'];
}

if ($aktion == "") {
 echo 'Admin Area';
}

if ($aktion == "add") {
  if ((empty($_POST['inspector_add'])) AND (empty($_POST['fecha_add'])) AND (empty($_POST['servicio_add'])) AND (empty($_POST['hora_add'])) AND (empty($_POST['vigilante_add'])) AND (empty($_POST['incidencia_add']))  AND (empty($_POST['codigo_incidencia_add'])) AND (empty($_POST['servicio2_add'])) AND (empty($_POST['hora2_add'])) AND (empty($_POST['vigilante2_add'])) AND (empty($_POST['incidencia2_add']))  AND (empty($_POST['codigo_incidencia2_add'])) AND (empty($_POST['servicio3_add'])) AND (empty($_POST['hora3_add'])) AND (empty($_POST['vigilante3_add'])) AND (empty($_POST['incidencia3_add']))  AND (empty($_POST['codigo_incidencia3_add'])) AND (empty($_POST['servicio4_add'])) AND (empty($_POST['hora4_add'])) AND (empty($_POST['vigilante4_add'])) AND (empty($_POST['incidencia4_add']))  AND (empty($_POST['codigo_incidencia4_add'])) AND (empty($_POST['servicio5_add'])) AND (empty($_POST['hora5_add'])) AND (empty($_POST['vigilante5_add'])) AND (empty($_POST['incidencia5_add']))  AND (empty($_POST['codigo_incidencia5_add'])) AND (empty($_POST['servicio6_add'])) AND (empty($_POST['hora6_add'])) AND (empty($_POST['vigilante6_add'])) AND (empty($_POST['incidencia6_add']))  AND (empty($_POST['codigo_incidencia6_add'])) AND (empty($_POST['servicio7_add'])) AND (empty($_POST['hora7_add'])) AND (empty($_POST['vigilante7_add'])) AND (empty($_POST['incidencia7_add']))  AND (empty($_POST['codigo_incidencia7_add']))) {
    echo '<form action="" method="POST">';
      echo '<table class="print" summary="A&ntilde;adir inspecci&oacute;n">';
        echo '<caption>Abrir una nueva inspecci&oacute;n</caption>';
        echo '<tbody>';
        echo '<tr>';
          echo '<th style width="10%">Inspector:</th>';
          echo '<td>';
          echo '<select name="inspector_add">';
          echo '<option>..inspector</option>';        
                 $sql = "SELECT * FROM inspectores WHERE activo=1";
                 $sql = mysqli_query($mysqli, $sql);
                 while ($row = mysqli_fetch_assoc($sql)) {
                 if (!defined('inspector')) define('inspector', 'inspector');               
                 echo '<option value="'.$row[inspector].'">'.$row[inspector].'</option>';
                 }        
                 echo '</select>';         
          echo '</td>';          
        echo '</tr>';
        echo '<tr>';
          echo '<th>';          
            echo FECHA;          
          echo '</th>';
          echo '<td>';      
          ?>          
              <input type="text" id="date" class="inputfecha" name="fecha_add" value="" /><input type="button" value="::" onclick="<?php echo $db->show('date') ?>">&nbsp;&nbsp;&nbsp;&nbsp;<input type="button" value="Ver codigos" onclick="Abrir_ventana('../mod/codigosincidencias.html');">
          
          <?php
          echo '</td>';          
        echo '</tr>';
        echo '</tbody>';
      echo '</table>';
      
      echo '<br /><br />';

      //---Corte de tabla-----------------------------------------------------------
      
         echo '<table class="print" summary="Añadir inspección">';
            echo '<thead></thead>';
                echo '<tbody>';        
                    //echo '<tr><td colspan="2"><h3>Inspección del sitio 1<h3></td></tr>';
                    echo '<tr>';                        
                        
                        /*echo '<td>';           
                            echo '<select name="servicio_add">';
                            echo '<option>...';
                            echo SERVICIO_SERVICIO;
                            echo '</option>';       
                                $sql = "SELECT * FROM servicios WHERE activo=1";
                                $sql = mysql_query($sql);
                                while ($row = mysql_fetch_assoc($sql)) {
                                //$row['servicio'] = htmlentities($row['servicio']);
                                echo '<option value="'.$row[servicio].'">'.$row[servicio].'</option>';
                                }                    
                            echo '</select>';
                        echo '</td>';*/
                        
                        echo '<th style width="10%">';
                            echo SERVICIO_SERVICIO;
                        echo '</th>';
                        
                        echo '<td>';            
                                $sql2="SELECT * FROM servicios WHERE activo=1";
                                define("servicios", "servicios");
                                define("servicio", "servicio");
                                $resultado=mysqli_query($mysqli, $sql2); 
                                while ($servicio=mysqli_fetch_array($resultado)) {
                                
                                echo '<input id="IDservicio[]" name="servicio[]" type="checkbox" value="'.$servicio[servicio].'">'.$servicio[servicio].'';
                                
                                }                
                        echo '</td>';
                    echo '</tr>';
                    echo '<tr>';
                        echo '<th style width="10%">';
                            echo SERVICIO_INCIDENCIA;
                        echo '</th>';                    
                        
                        echo '<td><textarea class="textareasmall"  name="incidencia_add" value=""></textarea></td>';
                    echo '</tr>';
                    echo '<tr>';
                        echo '<th>';
                            echo HORA;
                        echo '</th>';
                        echo '<td><input class="inputfecha" name="hora_add" value="hora.."></td>';
                    echo '</tr>';
                    echo '<tr>';                    
                        echo '<th>';
                            echo TRABAJADOR_TRABAJADOR;
                        echo '</th>';
                        echo '<td>';
                            echo '<select name="vigilante_add">';
                            echo '<option>...';
                            echo TRABAJADOR_TRABAJADOR;
                            echo '</option>';       
                            $sql = "SELECT * FROM trabajadores WHERE activo=1";
                            $sql = mysqli_query($mysqli, $sql);
                            while ($row = mysqli_fetch_assoc($sql)) {
                            if (!defined('trabajador')) define('trabajador', 'trabajador');
                            //define("trabajador", "trabajador");
                            //$row['trabajador'] = htmlentities($row['trabajador']);
                            echo '<option value="'.$row[trabajador].'">'.$row[trabajador].'</option>';
                            }         
                            echo '</select>';
                        echo '</td>';
                    echo '</tr>';
                    
                    echo '<tr>';
                        //echo '<td><input class="inputfecha" name="codigo_incidencia_add" value="Cod.."></td>';
                        echo '<th style width="10%">';                        
                            echo CODIGO;
                            ?>          
                                <div id="" onMouseOver="showdiv(event,'<?php echo SELECCIONE_EL_CODIGO; ?>');" onMouseOut="hiddenDiv()" style='display:table;margin-top3px;'>
                             <?php
                        echo '<img src="images/help.png">';
                        echo '</th>';
                        
                        echo '<td colspan="2">';                             
                            echo '<select name="codigo_incidencia_add">';
                            echo '<option>0</option>';        
                            $sql = "SELECT * FROM incidenciasinspeccion";
                            $sql = mysqli_query($mysqli, $sql);
                            while ($row = mysqli_fetch_assoc($sql)) {
                            if (!defined('cod')) define('cod', 'cod');
                            if (!defined('codname')) define('codname', 'codname');                           
                            echo '<option value="'.$row[cod].'">'.$row[cod].'--'.$row[codname].'</option>';
                             }        
                            echo '</select>';
                        echo '</td>';
                        
                    echo '</tr>';
                    
                    
                    /*echo '<tr><td colspan="2"><h3>Inspección del sitio 2<h3></td></tr>';
                    echo '<tr>';
                        echo '<td>';
                            echo '<select name="servicio2_add">';
                            echo '<option>...';
                            echo SERVICIO_SERVICIO;
                            echo '</option>';              
                                $sql = "SELECT * FROM servicios WHERE activo=1";
                                $sql = mysql_query($sql);
                                while ($row = mysql_fetch_assoc($sql)) {
                                //$row['servicio'] = htmlentities($row['servicio']);
                                echo '<option value="'.$row[servicio].'">'.$row[servicio].'</option>';
                                }
                                echo '</select>';
                        echo '</td>';
                        echo '<td rowspan="4"><textarea class="textareasmall"  name="incidencia2_add" value=""></textarea></td>';
                    echo '</tr>';
                    echo '<tr>';
                        echo '<td><input class="inputfecha" name="hora2_add" value="hora.."></td>';
                    echo '</tr>';
                    echo '<tr>';
                        echo '<td>';            
                            echo '<select name="vigilante2_add">';
                            echo '<option>...';
                            echo TRABAJADOR_TRABAJADOR;
                            echo '</option>';
                            $sql = "SELECT * FROM trabajadores WHERE activo=1";
                            $sql = mysql_query($sql);
                            while ($row = mysql_fetch_assoc($sql)) {
                            //$row['trabajador'] = htmlentities($row['trabajador']);
                            echo '<option value="'.$row[trabajador].'">'.$row[trabajador].'</option>';
                            }                
                            echo '</select>';
                        echo '</td>';            
                    echo '</tr>';
                    echo '<tr>';
                        echo '<td>';
                        
                        //echo '<input class="inputfecha" name="codigo_incidencia2_add" value="">';
                        
                            echo '<select name="codigo_incidencia2_add">';
                            echo '<option>0</option>';        
                            $sql = "SELECT * FROM incidenciasinspeccion";
                            $sql = mysql_query($sql);
                            while ($row = mysql_fetch_assoc($sql)) {
                              //$row['inspector'] = htmlentities($row['inspector']);
                            echo '<option value="'.$row[cod].'">'.$row[cod].'--'.$row[codname].'</option>';
                             }        
                            echo '</select>';         
                        
                        echo '</td>';
                    echo '</tr>';
                    echo '<tr><td colspan="2"><h3>Inspección del sitio 3<h3></td></tr>';
                    echo '<tr>';          
                        echo '<td>';           
                            echo '<select name="servicio3_add">';
                            echo '<option>...';
                            echo SERVICIO_SERVICIO;
                            echo '</option>';       
                            $sql = "SELECT * FROM servicios WHERE activo=1";
                            $sql = mysql_query($sql);
                            while ($row = mysql_fetch_assoc($sql)) {
                            $row['inspector'] = htmlentities($row['servicio']);
                            echo '<option value="'.$row[servicio].'">'.$row[servicio].'</option>';
                            }
                            echo '</select>';
                        echo '</td>';
                        echo '<td rowspan="4"><textarea class="textareasmall"  name="incidencia3_add" value=""></textarea></td>';
                    echo '</tr>';
                    echo '<tr>';
                        echo '<td><input class="inputfecha" name="hora3_add" value="hora.."></td>';
                    echo '</tr>';
                    echo '<tr>';
                        echo '<td>';
                            echo '<select name="vigilante3_add">';
                            echo '<option>...';
                            echo TRABAJADOR_TRABAJADOR;
                            echo '</option>';
                            $sql = "SELECT * FROM trabajadores WHERE activo=1";
                            $sql = mysql_query($sql);
                            while ($row = mysql_fetch_assoc($sql)) {
                            //$row['trabajador'] = htmlentities($row['trabajador']);
                            echo '<option value="'.$row[trabajador].'">'.$row[trabajador].'</option>';
                            }         
                            echo '</select>';
                        echo '</td>';            
                    echo '</tr>';
                    echo '<tr>';
                        echo '<td>';
                        
                        //echo '<input class="inputfecha" name="codigo_incidencia3_add" value="">';
                        
                            echo '<select name="codigo_incidencia3_add">';
                            echo '<option>0</option>';        
                            $sql = "SELECT * FROM incidenciasinspeccion";
                            $sql = mysql_query($sql);
                            while ($row = mysql_fetch_assoc($sql)) {
                              //$row['inspector'] = htmlentities($row['inspector']);
                            echo '<option value="'.$row[cod].'">'.$row[cod].'--'.$row[codname].'</option>';
                             }        
                            echo '</select>';         
                        
                        echo '</td>';
                    echo '</tr>';            
                    echo '<tr><td colspan="2"><h3>Inspección del sitio 4<h3></td></tr>';
                    echo '<tr>';          
                        echo '<td>';
                            echo '<select name="servicio4_add">';
                            echo '<option>...';
                            echo SERVICIO_SERVICIO;
                            echo '</option>';       
                            $sql = "SELECT * FROM servicios WHERE activo=1";
                            $sql = mysql_query($sql);
                            while ($row = mysql_fetch_assoc($sql)) {
                            //$row['servicio'] = htmlentities($row['servicio']);
                            echo '<option value="'.$row[servicio].'">'.$row[servicio].'</option>';
                            }
                            echo '</select>';
                        echo '</td>';
                        echo '<td rowspan="4"><textarea class="textareasmall"  name="incidencia4_add" value=""></textarea></td>';
                    echo '</tr>';
                    echo '<tr>';
                        echo '<td><input class="inputfecha" name="hora4_add" value="hora.."></td>';
                    echo '</tr>';
                    echo '<tr>';
                        echo '<td>';
                            echo '<select name="vigilante4_add">';
                            echo '<option>...';
                            echo TRABAJADOR_TRABAJADOR;
                            echo '</option>';
                            $sql = "SELECT * FROM trabajadores WHERE activo=1";
                            $sql = mysql_query($sql);
                            while ($row = mysql_fetch_assoc($sql)) {
                            //$row['trabajador'] = htmlentities($row['trabajador']);
                            echo '<option value="'.$row[trabajador].'">'.$row[trabajador].'</option>';
                            }         
                            echo '</select>';
                        echo '</td>';        
                    echo '</tr>';
                    echo '<tr>';
                        echo '<td>';
                        
                        //echo '<input class="inputfecha" name="codigo_incidencia4_add" value="">';
                        
                            echo '<select name="codigo_incidencia4_add">';
                            echo '<option>0</option>';        
                            $sql = "SELECT * FROM incidenciasinspeccion";
                            $sql = mysql_query($sql);
                            while ($row = mysql_fetch_assoc($sql)) {
                              //$row['inspector'] = htmlentities($row['inspector']);
                            echo '<option value="'.$row[cod].'">'.$row[cod].'--'.$row[codname].'</option>';
                             }        
                            echo '</select>';         
                        
                        echo '</td>';
                    echo '</tr>';
                    echo '<tr><td colspan="2"><h3>Inspección del sitio 5<h3></td></tr>';
                    echo '<tr>';          
                        echo '<td>';                
                            echo '<select name="servicio5_add">';
                            echo '<option>...';
                            echo SERVICIO_SERVICIO;
                            echo '</option>';       
                            $sql = "SELECT * FROM servicios WHERE activo=1";
                            $sql = mysql_query($sql);
                            while ($row = mysql_fetch_assoc($sql)) {
                            //$row[servicio'] = htmlentities($row['servicio']);
                            echo '<option value="'.$row[servicio].'">'.$row[servicio].'</option>';
                            }
                            echo '</select>';
                        echo '</td>';
                        echo '<td rowspan="4"><textarea class="textareasmall"  name="incidencia5_add" value=""></textarea></td>';
                    echo '</tr>';            
                    echo '<tr>';                 
                        echo '<td><input class="inputfecha" name="hora5_add" value="hora.."></td>';
                    echo '</tr>';            
                    echo '<tr>';                 
                        echo '<td>';
                            echo '<select name="vigilante5_add">';
                            echo '<option>...';
                            echo TRABAJADOR_TRABAJADOR;
                            echo '</option>';
                            $sql = "SELECT * FROM trabajadores WHERE activo=1";
                            $sql = mysql_query($sql);
                            while ($row = mysql_fetch_assoc($sql)) {
                            //$row['trabajador'] = htmlentities($row['trabajador']);
                            echo '<option value="'.$row[trabajador].'">'.$row[trabajador].'</option>';
                            }         
                            echo '</select>';
                        echo '</td>';
                    echo '</tr>';            
                    echo '<tr>';                      
                        echo '<td>';
                        
                        //echo '<input class="inputfecha" name="codigo_incidencia5_add" value="">';
                        
                            echo '<select name="codigo_incidencia5_add">';
                            echo '<option>0</option>';        
                            $sql = "SELECT * FROM incidenciasinspeccion";
                            $sql = mysql_query($sql);
                            while ($row = mysql_fetch_assoc($sql)) {
                              //$row['inspector'] = htmlentities($row['inspector']);
                            echo '<option value="'.$row[cod].'">'.$row[cod].'--'.$row[codname].'</option>';
                             }        
                            echo '</select>';         
                        
                        echo '</td>';
                    echo '</tr>';
                    echo '<tr><td colspan="2"><h3>Inspección del sitio 6<h3></td></tr>';
                    echo '<tr>';          
                        echo '<td>';                
                            echo '<select name="servicio6_add">';
                            echo '<option>...';
                            echo SERVICIO_SERVICIO;
                            echo '</option>';       
                            $sql = "SELECT * FROM servicios WHERE activo=1";
                            $sql = mysql_query($sql);
                            while ($row = mysql_fetch_assoc($sql)) {
                            //$row['servicio'] = htmlentities($row['servicio']);
                            echo '<option value="'.$row[servicio].'">'.$row[servicio].'</option>';
                            }
                            echo '</select>';
                        echo '</td>';
                        echo '<td rowspan="4"><textarea class="textareasmall"  name="incidencia6_add" value=""></textarea></td>';
                    echo '</tr>';
                    echo '<tr>'; 
                        echo '<td><input class="inputfecha" name="hora6_add" value="hora.."></td>';
                    echo '</tr>';
                    echo '<tr>'; 
                        echo '<td>';
                            echo '<select name="vigilante6_add">';
                            echo '<option>...';
                            echo TRABAJADOR_TRABAJADOR;
                            echo '</option>';
                            $sql = "SELECT * FROM trabajadores WHERE activo=1";
                            $sql = mysql_query($sql);
                            while ($row = mysql_fetch_assoc($sql)) {
                            //$row['trabajador'] = htmlentities($row['trabajador']);
                            echo '<option value="'.$row[trabajador].'">'.$row[trabajador].'</option>';
                            }         
                            echo '</select>';
                        echo '</td>';
                    echo '</tr>';            
                    echo '<tr>'; 
                        echo '<td>';
                        
                        //echo '<input class="inputfecha" name="codigo_incidencia6_add" value="">';
                        
                            echo '<select name="codigo_incidencia6_add">';
                            echo '<option>0</option>';        
                            $sql = "SELECT * FROM incidenciasinspeccion";
                            $sql = mysql_query($sql);
                            while ($row = mysql_fetch_assoc($sql)) {
                              //$row['inspector'] = htmlentities($row['inspector']);
                            echo '<option value="'.$row[cod].'">'.$row[cod].'--'.$row[codname].'</option>';
                             }        
                            echo '</select>'; 
                        
                        echo '</td>';
                    echo '</tr>';
                    echo '<tr><td colspan="2"><h3>Inspección del sitio 7<h3></td></tr>';
                    echo '<tr>';          
                        echo '<td>';
                            echo '<select name="servicio7_add">';
                            echo '<option>...';
                            echo SERVICIO_SERVICIO;
                            echo '</option>';       
                            $sql = "SELECT * FROM servicios WHERE activo=1";
                            $sql = mysql_query($sql);
                            while ($row = mysql_fetch_assoc($sql)) {
                            //$row['servicio'] = htmlentities($row['servicio']);
                            echo '<option value="'.$row[servicio].'">'.$row[servicio].'</option>';
                            }
                            echo '</select>';
                        echo '</td>';
                        echo '<td rowspan="4"><textarea class="textareasmall"  name="incidencia7_add" value=""></textarea></td>';
                    echo '</tr>';            
                    echo '<tr>';             
                        echo '<td><input class="inputfecha" name="hora7_add" value="hora.."></td>';
                    echo '</tr>';        
                    echo '<tr>';                
                        echo '<td>';
                            echo '<select name="vigilante7_add">';
                            echo '<option>...';
                            echo TRABAJADOR_TRABAJADOR;
                            echo '</option>';
                            $sql = "SELECT * FROM trabajadores WHERE activo=1";
                            $sql = mysql_query($sql);
                            while ($row = mysql_fetch_assoc($sql)) {
                            //$row['trabajador'] = htmlentities($row['trabajador']);
                            echo '<option value="'.$row[trabajador].'">'.$row[trabajador].'</option>';
                            }         
                            echo '</select>';
                        echo '</td>';
                    echo '</tr>';
                    echo '<tr>';
                        echo '<td>';
                        
                        //echo '<input class="inputfecha" name="codigo_incidencia7_add" value="">';
                        
                            echo '<select name="codigo_incidencia7_add">';
                            echo '<option>0</option>';        
                            $sql = "SELECT * FROM incidenciasinspeccion";
                            $sql = mysql_query($sql);
                            while ($row = mysql_fetch_assoc($sql)) {
                              //$row['inspector'] = htmlentities($row['inspector']);
                            echo '<option value="'.$row[cod].'">'.$row[cod].'--'.$row[codname].'</option>';
                             }        
                            echo '</select>';
                        
                        echo '</td>';
                    echo '</tr>';*/        
                    echo '<tr>';
                        echo '<td colspan="5"><input type="submit" value="'.ANADIR.'"></td>';
                    echo '</tr>';
            echo '</tbody>';
        echo '</table>';
    echo '</form>';
  } else {
   
    $inspector_Post = $_POST['inspector_add'];
    $fecha_Post = $_POST['fecha_add'];    
    
    $servicio_Post = $_POST['servicio'];
    
    foreach ( $_POST['servicio'] as $servicio )    {
                    $servicio_Post .= '[' . $servicio . ']';
                }
    $hora_Post = $_POST['hora_add'];
    $vigilante_Post = $_POST['vigilante_add'];
     $incidencia_Post = $_POST['incidencia_add'];
    $codigo_incidencia_Post = $_POST['codigo_incidencia_add'];
    
    /*$servicio2_Post = $_POST['servicio2_add'];
    $hora2_Post = $_POST['hora2_add'];
    $vigilante2_Post = $_POST['vigilante2_add'];
     $incidencia2_Post = $_POST['incidencia2_add'];
    $codigo_incidencia2_Post = $_POST['codigo_incidencia2_add'];
    
    $servicio3_Post = $_POST['servicio3_add'];
    $hora3_Post = $_POST['hora3_add'];
    $vigilante3_Post = $_POST['vigilante3_add'];
     $incidencia3_Post = $_POST['incidencia3_add'];
    $codigo_incidencia3_Post = $_POST['codigo_incidencia3_add'];
    
    $servicio4_Post = $_POST['servicio4_add'];
    $hora4_Post = $_POST['hora4_add'];
    $vigilante4_Post = $_POST['vigilante4_add'];
     $incidencia4_Post = $_POST['incidencia4_add'];
    $codigo_incidencia4_Post = $_POST['codigo_incidencia4_add'];
    
    $servicio5_Post = $_POST['servicio5_add'];
    $hora5_Post = $_POST['hora5_add'];
    $vigilante5_Post = $_POST['vigilante5_add'];
     $incidencia5_Post = $_POST['incidencia5_add'];
    $codigo_incidencia5_Post = $_POST['codigo_incidencia5_add'];
    
    $servicio6_Post = $_POST['servicio6_add'];
    $hora6_Post = $_POST['hora6_add'];
    $vigilante6_Post = $_POST['vigilante6_add'];
     $incidencia6_Post = $_POST['incidencia6_add'];
    $codigo_incidencia6_Post = $_POST['codigo_incidencia6_add'];
    
    $servicio7_Post = $_POST['servicio7_add'];
    $hora7_Post = $_POST['hora7_add'];
    $vigilante7_Post = $_POST['vigilante7_add'];
     $incidencia7_Post = $_POST['incidencia7_add'];
    $codigo_incidencia7_Post = $_POST['codigo_incidencia7_add'];*/
    
    //$sql =    mysql_query("INSERT INTO inspecciones (inspector, fecha, servicio, hora, vigilante, incidencia, codigo_incidencia, servicio2, hora2, vigilante2, incidencia2, codigo_incidencia2, servicio3, hora3, vigilante3, incidencia3, codigo_incidencia3, servicio4, hora4, vigilante4, incidencia4, codigo_incidencia4, servicio5, hora5, vigilante5, incidencia5, codigo_incidencia5, servicio6, hora6, vigilante6, incidencia6, codigo_incidencia6, servicio7, hora7, vigilante7, incidencia7, codigo_incidencia7) VALUES ('".$inspector_Post."', '".$fecha_Post."', '".$servicio_Post."', '".$hora_Post."', '".$vigilante_Post."', '".$incidencia_Post."', '".$codigo_incidencia_Post."', '".$servicio2_Post."', '".$hora2_Post."', '".$vigilante2_Post."', '".$incidencia2_Post."', '".$codigo_incidencia2_Post."', '".$servicio3_Post."', '".$hora3_Post."', '".$vigilante3_Post."', '".$incidencia3_Post."', '".$codigo_incidencia3_Post."', '".$servicio4_Post."', '".$hora4_Post."', '".$vigilante4_Post."', '".$incidencia4_Post."', '".$codigo_incidencia4_Post."', '".$servicio5_Post."', '".$hora5_Post."', '".$vigilante5_Post."', '".$incidencia5_Post."', '".$codigo_incidencia5_Post."', '".$servicio6_Post."', '".$hora6_Post."', '".$vigilante6_Post."', '".$incidencia6_Post."', '".$codigo_incidencia6_Post."', '".$servicio7_Post."', '".$hora7_Post."', '".$vigilante7_Post."', '".$incidencia7_Post."', '".$codigo_incidencia7_Post."')");
    $sql =    mysqli_query($mysqli, "INSERT INTO inspecciones (inspector, fecha, servicio, hora, vigilante, incidencia, codigo_incidencia) VALUES ('".$inspector_Post."', '".$fecha_Post."', '".$servicio_Post."', '".$hora_Post."', '".$vigilante_Post."', '".$incidencia_Post."', '".$codigo_incidencia_Post."')");
    if ($sql) echo "Inspección añadida";
    else echo "Error al añadir el registro!";
  }
}

if ($aktion == "change") {
  $sql = mysqli_query($mysqli, "SELECT * FROM inspecciones ORDER BY Id DESC");
      
  echo '<table class="print" summary="A&ntilde;adir inspecci&oacute;n">';
        echo '<caption>';
        echo INSPECCIONES_CAMBIAR_INSPECCION;
        echo '</caption>';
        echo '<tbody>';        
          echo '<tr><th>Id</th><th>'.INSPECCIONES_INSPECTOR.'</th><th>'.FECHA.'</th><th>'.SERVICIO_SERVICIO.'</th></tr>';
          while ($row = mysqli_fetch_row($sql)) {
            echo "<tr>";  
                echo "<td>".$row['0']."</td>";
                echo "<td><a href='?seccion=inspecciones_admin&amp;aktion=change_id&amp;id=".$row['0']."'>".$row['1']."</a></td>";
                echo "<td><a href='?seccion=inspecciones_admin&amp;aktion=change_id&amp;id=".$row['0']."'>".$row['2']."</a></td>";
                echo "<td><a href='?seccion=inspecciones_admin&amp;aktion=change_id&amp;id=".$row['0']."'>".$row['3']."</a></td>";
            echo "</tr>";
          }
              echo '<tbody>';
          echo "</table>";
}
if ($aktion == "change_id") {
  //if ((empty($_POST['Id'])) AND (empty($_POST['inspector'])) AND (empty($_POST['fecha'])) AND (empty($_POST['servicio'])) AND (empty($_POST['hora'])) AND (empty($_POST['vigilante'])) AND (empty($_POST['incidencia'])) AND (empty($_POST['codigo_incidencia'])) AND (empty($_POST['servicio2'])) AND (empty($_POST['hora2'])) AND (empty($_POST['vigilante2'])) AND (empty($_POST['incidencia2'])) AND (empty($_POST['codigo_incidencia2'])) AND (empty($_POST['servicio3'])) AND (empty($_POST['hora3'])) AND (empty($_POST['vigilante3'])) AND (empty($_POST['incidencia3'])) AND (empty($_POST['codigo_incidencia3'])) AND (empty($_POST['servicio4'])) AND (empty($_POST['hora4'])) AND (empty($_POST['vigilante4'])) AND (empty($_POST['incidencia4'])) AND (empty($_POST['codigo_incidencia4'])) AND (empty($_POST['servicio5'])) AND (empty($_POST['hora5'])) AND (empty($_POST['vigilante5'])) AND (empty($_POST['incidencia5'])) AND (empty($_POST['codigo_incidencia5'])) AND (empty($_POST['servicio6'])) AND (empty($_POST['hora6'])) AND (empty($_POST['vigilante6'])) AND (empty($_POST['incidencia6'])) AND (empty($_POST['codigo_incidencia6'])) AND (empty($_POST['servicio7'])) AND (empty($_POST['hora7'])) AND (empty($_POST['vigilante7'])) AND (empty($_POST['incidencia7'])) AND (empty($_POST['codigo_incidencia7']))) {
  if ((empty($_POST['Id'])) AND (empty($_POST['inspector'])) AND (empty($_POST['fecha'])) AND (empty($_POST['servicio'])) AND (empty($_POST['hora'])) AND (empty($_POST['vigilante'])) AND (empty($_POST['incidencia'])) AND (empty($_POST['codigo_incidencia']))) {
    $id = $_GET['id'];
    $sql = mysqli_query($mysqli, "SELECT * FROM inspecciones WHERE Id = $_GET[id] ");
    $data = mysqli_fetch_row($sql);
    
      echo '<form action="" method="POST">';
          //echo 'Id: <input class="inputfecha" name="id" value="'.$data[0].'"></td>';
          //echo '<br>';
          
     echo '<table class="print" summary="A&ntilde;adir inspecci&oacute;n">';
        echo '<caption>Modificar una inspecci&oacute;n</caption>';
        echo '<tbody>';
        echo '<tr>';
          echo '<th>'.INSPECCIONES_INSPECTOR.':</th>';
          
           echo '<td>';
          
          
           echo '<select name="inspector">';
                echo '<option>'.$data[1].'</option>';
                 $sql = "SELECT trabajador FROM trabajadores";
                 $sql = mysqli_query($mysqli, $sql);
                  if (!defined('trabajador')) {
                     define('trabajador', 'trabajador');
                    }
                 while ($row = mysqli_fetch_assoc($sql)) {                 
                echo '<option value="'.$row[trabajador].'">'.$row[trabajador].'</option>';
                 }        
         echo '</select>';

                
          echo '</td>';
          
         // echo '<td><input class="inputlargo" name="inspector" value="'.$data[1].'"></td>';
          
          
        echo '</tr>';
        echo '<tr>';
          echo '<th>'.FECHA.':</th><td> <input class="inputfecha" name="fecha" value="'.$data[2].'"></td>';
        echo '</tr>';
        echo '<tr>';
          echo '<th>'.SERVICIO_SERVICIO.':</th><td><input class="inputlargo" name="servicio" value="'.$data[3].'"></td>';
          echo '</tr>';
        echo '<tr>';
           echo '<th>'.HORA.':</th><td><input class="inputfecha" name="hora" value="'.$data[4].'"></td>'; 
        echo '</tr>';
        echo '<tr>';          
          echo '<th>'.TRABAJADOR_TRABAJADOR.':</th><td> <input class="inputlargo" name="vigilante" value="'.$data[5].'"></td>';
        echo '</tr>';
        echo '<tr>';          
          echo '<th>'.SERVICIO_INCIDENCIA.':</th><td><textarea class="textareacambiarinspeccion" name="incidencia">'.$data[6].'</textarea></td>';
        echo '</tr>';
        
        
        /*echo '<tr>';          
          echo '<th>'.CODIGO.':</th><td>';          
           ?>          
                <div id="" onMouseOver="showdiv(event,'<?php echo RECUERDE_LOS_CODIGOS; ?>');" onMouseOut="hiddenDiv()" style='display:table;margin-top3px;'>
         <?php
            echo '<img src="images/help.png">';
            echo' &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';          
          echo '<input class="inputfecha" name="codigo_incidencia" value="'.$data[7].'"></td>';                    
        echo '<tr>';*/
        
        
        
        echo '<tr>';
                        //echo '<td><input class="inputfecha" name="codigo_incidencia_add" value="Cod.."></td>';
            echo '<th style width="10%">';                        
                echo CODIGO;
                            ?>          
                                <div id="" onMouseOver="showdiv(event,'<?php echo SELECCIONE_EL_CODIGO; ?>');" onMouseOut="hiddenDiv()" style='display:table;margin-top3px;'>
                             <?php
                        echo '<img src="images/help.png">';
            echo '</th>';
                        
                echo '<td colspan="2">';                             
                            echo '<select name="codigo_incidencia">';
                            echo '<option>'.$data[7].'</option>';        
                            $sql = "SELECT * FROM incidenciasinspeccion";
                            $sql = mysqli_query($mysqli, $sql);
                            while ($row = mysqli_fetch_assoc($sql)) {
                            if (!defined('cod')) define('cod', 'cod');
                            if (!defined('codname')) define('codname', 'codname');                           
                            echo '<option value="'.$row[cod].'">'.$row[cod].'--'.$row[codname].'</option>';
                             }        
                            echo '</select>';
                 echo '</td>';                        
        echo '</tr>';
        
        
        
        
        
     echo '</tbody>';
    echo '</table>';
        
        
          /*echo '<input class="inputnormal" name="servicio2" value="'.$data[8].'">&nbsp;';               
          echo '<input class="inputfecha" name="hora2" value="'.$data[9].'">&nbsp;';         
          echo '<input name="vigilante2" value="'.$data[10].'">&nbsp;';         
          echo '<textarea class="textareacambiarinspeccion" name="incidencia2">'.$data[11].'</textarea>&nbsp;';         
          echo '<input class="inputfecha" name="codigo_incidencia2" value="'.$data[12].'">';
          echo '<br>';
          
          
          echo '<input class="inputnormal" name="servicio3" value="'.$data[13].'">&nbsp;';        
          echo '<input class="inputfecha" name="hora3" value="'.$data[14].'">&nbsp;';          
          echo '<input name="vigilante3" value="'.$data[15].'">&nbsp;';          
          echo '<textarea class="textareacambiarinspeccion" name="incidencia3">'.$data[16].'</textarea>&nbsp;';
          echo '<input class="inputfecha" name="codigo_incidencia3" value="'.$data[17].'">';
          echo '<br>';
          
          
        
          echo '<input class="inputnormal" name="servicio4" value="'.$data[18].'">&nbsp;';          
          echo '<input class="inputfecha" name="hora4" value="'.$data[19].'">&nbsp;';          
          echo '<input name="vigilante4" value="'.$data[20].'">&nbsp;';          
          echo '<textarea class="textareacambiarinspeccion" name="incidencia4">'.$data[21].'</textarea>&nbsp;';      
          echo '<input class="inputfecha" name="codigo_incidencia4" value="'.$data[22].'">';
          echo '<br>';          
          
       
          echo '<input class="inputnormal" name="servicio5" value="'.$data[23].'">&nbsp;';         
          echo '<input class="inputfecha" name="hora5" value="'.$data[24].'">&nbsp;';          
          echo '<input name="vigilante5" value="'.$data[25].'">&nbsp;';          
          echo '<textarea class="textareacambiarinspeccion" name="incidencia5">'.$data[26].'</textarea>&nbsp;';         
          echo '<input class="inputfecha" name="codigo_incidencia5" value="'.$data[27].'">';
          echo '<br>';          
          
      
          echo '<input class="inputnormal" name="servicio6" value="'.$data[28].'">&nbsp;';        
          echo '<input class="inputfecha" name="hora6" value="'.$data[29].'">&nbsp;';          
          echo '<input name="vigilante6" value="'.$data[30].'">&nbsp;';          
          echo '<textarea class="textareacambiarinspeccion" name="incidencia6">'.$data[31].'</textarea>&nbsp;';        
          echo '<input class="inputfecha" name="codigo_incidencia6" value="'.$data[32].'">';
          echo '<br>';    
          
       
          echo '<td><input class="inputnormal" name="servicio7" value="'.$data[33].'">&nbsp;';         
          echo '<td><input class="inputfecha" name="hora7" value="'.$data[34].'">&nbsp;';          
          echo '<td><input name="vigilante7" value="'.$data[35].'">&nbsp;';          
          echo '<td><textarea class="textareacambiarinspeccion" name="incidencia7">'.$data[36].'</textarea>&nbsp;';        
          echo '<td><input class="inputfecha" name="codigo_incidencia7" value="'.$data[37].'">';*/
          echo '<br>';
        
          echo '<td colspan="5"><input type="submit" value="'.ENVIAR.'"></td>';
          
         echo '</form>'; 
  } else {
    //$sql = mysql_query("UPDATE inspecciones SET id='$_POST[id]',inspector='$_POST[inspector]',fecha='$_POST[fecha]',servicio='$_POST[servicio]',hora='$_POST[hora]',vigilante='$_POST[vigilante]',incidencia='$_POST[incidencia]',codigo_incidencia='$_POST[codigo_incidencia]',servicio2='$_POST[servicio2]',hora2='$_POST[hora2]',vigilante2='$_POST[vigilante2]',incidencia2='$_POST[incidencia2]',codigo_incidencia2='$_POST[codigo_incidencia2]',servicio3='$_POST[servicio3]',hora3='$_POST[hora3]',vigilante3='$_POST[vigilante3]',incidencia3='$_POST[incidencia3]',codigo_incidencia3='$_POST[codigo_incidencia3]',servicio4='$_POST[servicio4]',hora4='$_POST[hora4]',vigilante4='$_POST[vigilante4]',incidencia4='$_POST[incidencia4]',codigo_incidencia4='$_POST[codigo_incidencia4]',servicio5='$_POST[servicio5]',hora5='$_POST[hora5]',vigilante5='$_POST[vigilante5]',incidencia5='$_POST[incidencia5]',codigo_incidencia5='$_POST[codigo_incidencia5]',servicio6='$_POST[servicio6]',hora6='$_POST[hora6]',vigilante6='$_POST[vigilante6]',incidencia6='$_POST[incidencia6]',codigo_incidencia6='$_POST[codigo_incidencia6]',servicio7='$_POST[servicio7]',hora7='$_POST[hora7]',vigilante7='$_POST[vigilante7]',incidencia7='$_POST[incidencia7]',codigo_incidencia7='$_POST[codigo_incidencia7]' WHERE id=$_GET[id]");
    $sql = mysqli_query($mysqli, "UPDATE inspecciones SET inspector='$_POST[inspector]',fecha='$_POST[fecha]',servicio='$_POST[servicio]',hora='$_POST[hora]',vigilante='$_POST[vigilante]',incidencia='$_POST[incidencia]',codigo_incidencia='$_POST[codigo_incidencia]' WHERE id=$_GET[id]");
    if ($sql) echo 'Inspecci&oacute;n actualizada!';
    echo ((is_object($mysqli)) ? mysqli_error($mysqli) : (($___mysqli_res = mysqli_connect_error()) ? $___mysqli_res : false));
  }
}
//mysql_close($db);
?>
<br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
</body>
</html>