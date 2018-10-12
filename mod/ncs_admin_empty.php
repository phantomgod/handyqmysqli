<?php
/**
* Mod administrar no conformidades
*
* PHP version 5
*
* @category Mod
* @package  Handy-q
* @author   JJuan <javier@textblock.org>
* @license  http://www.gnu.org/copyleft/gpl.html GNU General Public License
* @link     http://www.textblock.org
*/


    /* requires the class
    require "class.datepicker.php";

    // instantiate the object
    $db=new datepicker();

    // uncomment the next line to have the calendar show up in german
    $db->language = "spanish";

    $db->firstDayOfWeek = 1;

    // set the format in which the date to be returned
    $db->dateFormat = "Y-m-d"; */
	
	
require '../lang/spanish.lang.php';
require_once '../includes/mysqli.php';
header('Content-Type: text/html;charset=UTF-8');
?>
<html>
<head>
<link type="text/css" rel="stylesheet" href="../templates/style.css" media="screen" />
<link type="text/css" rel="stylesheet" href="../templates/printstyle.css" media="print" />

<!-- Datepicker chrishulbert-datepicker-8a22db6 [http://splinter.com.au/blog/?p=278](http://splinter.com.au/blog/?p=278) -->
<link type="text/css" rel="stylesheet" href="../templates/datepicker.css" />
<!-- FIN Datepicker chrishulbert-datepicker-->

<link type="text/css" rel="stylesheet" href="../templates/thickbox.css"  media="screen" />
<link type="text/css" rel="stylesheet" href="../font-awesome-4.4.0/css/font-awesome.min.css">




<!-- TinyMCE -->
<!-- Place inside the head of your HTML -->
<script type="text/javascript" src="../tinymce/tinymce.min.js"></script>
<script type="text/javascript">
tinymce.init({
        selector: "textarea",
        menubar: false,
        plugins: "textcolor, table, charmap, link, code, image",
        language: "es",
        custom_undo_redo : true,
        toolbar: "bold italic underline undo redo link unlink image code"
    });
</script>
<!-- /TinyMCE -->


<link rel="shortcut icon" href="../images/favicon.png">
<title><?php echo PAGE_TITLE; ?> <?php echo" &raquo; ".$seccionweb."";?></title>

</head>

<body class="top">

<?php

$aktion = '';
if (isset($_GET['aktion'])) {
    $aktion = $_GET['aktion'];
}

if ($aktion == "") {
    echo 'Admin Area';
}

if ($aktion == "add") {
    if ((empty($_POST['ai_add']))
        AND (empty($_POST['numhoja_add']))
        AND (empty($_POST['codhoja_add']))
        AND (empty($_POST['descripcion_add']))
        AND (empty($_POST['fecha_add']))
        AND (empty($_POST['docum_add']))
        AND (empty($_POST['abiertopor_add']))
        AND (empty($_POST['afectaa_add']))
        AND (empty($_POST['causas_add']))
        AND (empty($_POST['acciones_add']))
        AND (empty($_POST['plazo_add']))
        AND (empty($_POST['cierresparc_add']))
        AND (empty($_POST['eficacia_add']))
        AND (empty($_POST['cerradofecha_add']))
        AND (empty($_POST['desviacion_add']))
        AND (empty($_POST['visible_add']))) {
		
		echo '<br /><br />';
        echo '<form action="" method="POST">';
          echo '<table class="print">';
           echo '<caption><span class="documenttitle">'.NCS_ABRIR_NC.'</span></caption>';
            echo '<tbody>';
             echo '<tr>';
              echo '<th>';
               
			   /* ?>
                  <div id="help" onMouseOver="showdiv(event,'<?php echo NCS_AI_HELP; ?>');" onMouseOut="hiddenDiv()" style='display:table;margin-top3px;'>
                  <?php echo AUDITORIAS_NUMERO_AUDITORIA; ?>
                   &nbsp;&nbsp;&nbsp;&nbsp;<img src="images/help.png" /></div>

              <?php*/
			  
			  	echo '<div align="center">';
				echo '<p align="left">';
				echo '<a class="tooltip2" href="#">' . AUDITORIAS_NUMERO_AUDITORIA . '<span class="custom info"><img src="images/Info.png" alt="Info" title="Info" height="48" width="48" /><em>
				' . INFORMACION . '</em>' . NCS_AI_HELP . '</span></a></p>
				</div>';
			  
			  echo'</th>';
                echo '<td>';
                echo '<select name="ai_add">';
                    echo '<option>Ninguna auditoría o... (seleccionar)</option>';
                     $sql = "SELECT ai, fecha FROM aisgc ORDER BY id DESC";
                     $sql = mysqli_query($mysqli, $sql);
        if (!defined('ai')) {
            define('AI', 'ai');
        }
        if (!defined('fecha')) {
            define('FECHA', 'fecha');
        }
        while ($row = mysqli_fetch_assoc($sql)) {
                     echo '<option value="'.$row[AI].'">'.$row[AI].' - '.$row[FECHA].'</option>';
        }
               echo '</select>';
               echo '</td>';
             echo '</tr>';
             echo '<tr>';
              echo '<th>';

                 /*?>
                 <div id="help" onMouseOver="showdiv(event,'<?php echo NCS_LASTID_HELP; ?>');" onMouseOut="hiddenDiv()" style='display:table;margin-top3px;'>
                 <?php echo NCS_NUMERO; ?>
                   &nbsp;&nbsp;&nbsp;&nbsp;<img src="images/help.png" /></div>
                 <?php*/
			   
				echo '<div align="center">';
				echo '<p align="left">';
				echo '<a class="tooltip2" href="#">' . NCS_NUMERO . '<span class="custom info"><img src="images/Info.png" alt="Help" title="Help" height="48" width="48" /><em>
				' . INFORMACION . '</em>' . NCS_LASTID_HELP . '</span></a></p>
				</div>';
			   echo '</th>';
               echo '<td>';
					echo '<input type="text" class="form-control input-medium" id="numhoja_add" name="numhoja_add" value="Nº hoja...">';
					echo '&nbsp;&nbsp;&nbsp;&nbsp;';
				 $sql = "SELECT id, numhoja,fecha FROM hojasdemejora ORDER BY id DESC LIMIT 1";
				 $sql = mysqli_query($mysqli, $sql);
        if (!defined('numhoja')) {
                     define('NUMHOJA', 'numhoja');
        }
        while ($row = mysqli_fetch_assoc($sql)) {
                 echo 'Última: '.$row[NUMHOJA].' de fecha: '.$row[FECHA].'';
        }
                
				
             echo '</td></tr>';
             echo '<tr>';
               echo '<th>';
			   
                  /*?>
                  <div id="help" onMouseOver="showdiv(event,'<?php echo NCS_CODIGO_HELP; ?>');" onMouseOut="hiddenDiv()" style='display:table;margin-top3px;'>
                  <?php echo NCS_CODIGO_NC; ?>
                  &nbsp;&nbsp;&nbsp;&nbsp;<img src="images/help.png" /></div>
                  <?php*/
				  
				  
				echo '<div align="center">';
				echo '<p align="left">';
				echo '<a class="tooltip2" href="#">' . NCS_CODIGO_NC . '<span class="custom info"><img src="images/Info.png" alt="Info" title="Info" height="48" width="48" /><em>
				' . INFORMACION . '</em>' . NCS_CODIGO_HELP . '</span></a></p>
				</div>';
				
				
				echo '</th>';
				 echo '<td><input type="text" class="form-control input-medium" id="codhoja_add" name="codhoja_add" value="Cod."></td>';
             echo '</tr>';
             echo '<tr>';
               echo '<th>'.NCS_DESCRIPCION.': </th>';
                 echo '<td><textarea class="textareanormal" name="descripcion_add" value=""></textarea></td>';
              echo '</tr>';
              echo '<tr>';
                 echo '<th>'.NCS_FECHA_APERTURA.': </th>';
                echo '<td>';
				echo '<input id="date" class="datepicker" name="fecha_add" />';// Date picker**************************************
                echo '</td>';
             echo '</tr>';
             echo '<tr>';
               echo '<th>'.DOCUMENTOS.':</th>';
				 echo '<td><input type="text" class="form-control input-medium" id="docum_add" name="docum_add" value="Docs..."></td>';
             echo '</tr>';
             echo '<tr>';
               echo '<th>'.NCS_ABIERTOPOR.':</th>';
                 echo '<td>';
                  echo '<select name="abiertopor_add">';
                    echo '<option>...</option>';
        $sql = "SELECT auditor
                FROM auditores
                UNION SELECT inspector
                FROM inspectores
                UNION SELECT trabajador
                FROM trabajadores";
        $sql = mysqli_query($mysqli, $sql);
        if (!defined('auditor')) {
                     define('AUDITOR', 'auditor');
        }
        while ($row = mysqli_fetch_assoc($sql)) {
                echo '<option value="'.$row[AUDITOR].'">'.$row[AUDITOR].'</option>';
        }
                echo '</select>';
                echo '</td>';
             echo '</tr>';
              echo '<tr>';
               echo '<th>'.NCS_AFECTAA.':</th>';
                echo '<td>';

                 echo '<select name="afectaa_add">';
                   echo '<option>...</option>';
                   $sql = "SELECT afectaa FROM afectaa";
                   $sql = mysqli_query($mysqli, $sql);
        if (!defined('afectaa')) {
                     define('AFECTAA', 'afectaa');
        }
        while ($row = mysqli_fetch_assoc($sql)) {
                 echo '<option value="'.$row[AFECTAA].'">'.$row[AFECTAA].'</option>';
        }
         echo '</select>';

               echo '</td>';
            echo '</tr>';
            echo '<tr>';
              echo '<th>'.NCS_CAUSAS.': </th>';
                echo '<td><textarea class="textareanormal" name="causas_add" value=""></textarea></td>';
            echo '</tr>';
            echo '<tr>';
              echo '<th>'.NCS_ACCIONES.': </th>';
               echo '<td><textarea class="textareanormal" name="acciones_add" value=""></textarea></td>';
            echo '</tr>';
            echo '<tr>';
              echo '<th>'.NCS_PLAZO.':</th>';
			   echo '<td><input type="text" class="form-control input-medium" id="plazo_add" name="plazo_add" value="0"></td>';
            echo '</tr>';
            echo '<tr>';
              echo '<th>'.NCS_CIERRE_PARCIAL.':</th>';
               echo '<td><textarea class="textareanormal" name="cierresparc_add" value=""></textarea></td>';
            echo '</tr>';
           echo '<tr>';
              echo '<th>'.NCS_EFICACIA.':</th>';
                echo '<td><textarea class="textareanormal" name="eficacia_add" value=""></textarea></td>';
           echo '</tr>';
           echo '<tr>';
              echo '<th>'.NCS_FECHACIERRE.':</th>';
                echo '<td>';
				
				echo '<input id="date2" class="datepicker" name="cerradofecha_add" />';// Date picker**************************************
              echo '</td>';
            echo '</tr>';
            echo '<tr>';
              echo '<th>'.NCS_DESVIACION.':</th>';
				 echo '<td><input type="text" class="form-control input-medium" id="desviacion_add" name="desviacion_add" value="0"></td>';
            echo '</tr>';
            echo '<tr>';
              echo '<th>Visible:</th>';
                 echo '<td>';
                  echo '<select size="1" name="visible_add" value="">';
                   echo '<option selected>1</option>';
                   echo '<option>0</option>';
                 echo '</td>';
             echo '</tr>';
                 echo '<td colspan="2"><button type="submit" class="btn btn-info">' . ABRIR . '</button></td>';




        echo '</tbody>';
        echo '</table>';
        echo '</form>';
    } else {
        if (isset($_POST['ai_add'])) {
            @$ai_Post = $_POST['ai_add'];
        }
        if (isset($_POST['numhoja_add'])) {
            @$numhoja_Post = $_POST['numhoja_add'];
        }
        if (isset($_POST['codhoja_add'])) {
            @$codhoja_Post = $_POST['codhoja_add'];
        }
        if (isset($_POST['descripcion_add'])) {
           //@$descripcion_Post = $_POST['descripcion_add'];
		   $descripcion_Post = mysqli_real_escape_string($mysqli,$_POST['descripcion_add']);
        }
        if (isset($_POST['fecha_add'])) {
            @$fecha_Post = $_POST['fecha_add'];
        }
        if (isset($_POST['docum_add'])) {
           //@$docum_Post = $_POST['docum_add'];
		   $docum_Post = mysqli_real_escape_string($mysqli,$_POST['docum_add']);
		   
        }
        if (isset($_POST['abiertopor_add'])) {
            @$abiertopor_Post = $_POST['abiertopor_add'];
        }
        if (isset($_POST['afectaa_add'])) {
            @$afectaa_Post = $_POST['afectaa_add'];
        }
        if (isset($_POST['causas_add'])) {
            //@$causas_Post = $_POST['causas_add'];
			 $causas_Post = mysqli_real_escape_string($mysqli,$_POST['causas_add']);
        }
        if (isset($_POST['acciones_add'])) {
            //@$acciones_Post = $_POST['acciones_add'];
			$acciones_Post = mysqli_real_escape_string($mysqli,$_POST['acciones_add']);
        }
        if (isset($_POST['plazo_add'])) {
            @$plazo_Post = $_POST['plazo_add'];
        }
        if (isset($_POST['cierresparc_add'])) {
            //@$cierresparc_Post = $_POST['cierresparc_add'];
			$cierresparc_Post = mysqli_real_escape_string($mysqli,$_POST['cierresparc_add']);
        }
        if (isset($_POST['eficacia_add'])) {
            //@$eficacia_Post = $_POST['eficacia_add'];
			$eficacia_Post = mysqli_real_escape_string($mysqli,$_POST['eficacia_add']);
        }
        if (isset($_POST['cerradofecha_add'])) {
            @$cerradofecha_Post = $_POST['cerradofecha_add'];
        }
        if (isset($_POST['desviacion_add'])) {
            @$desviacion_Post = $_POST['desviacion_add'];
        }
        if (isset($_POST['visible_add'])) {
            @$visible_Post = $_POST['visible_add'];
        }

        $sql =  mysqli_query($mysqli, 
                 "INSERT INTO hojasdemejora
                  (ai, numhoja, codhoja,
                  descripcion, fecha,
                  docum, abiertopor,
                  afectaa, causas,
                  acciones, plazo,
                  cierresparc, eficacia,
                  cerradofecha, desviacion,
                  visible)
                  VALUES ('".$ai_Post."', '".$numhoja_Post."',
                  '".$codhoja_Post."', '".$descripcion_Post."',
                  '".$fecha_Post."', '".$docum_Post."',
                  '".$abiertopor_Post."', '".$afectaa_Post."',
                  '".$causas_Post."', '".$acciones_Post."',
                  '".$plazo_Post."', '".$cierresparc_Post."',
                  '".$eficacia_Post."', '".$cerradofecha_Post."',
                  '".$desviacion_Post."', '".$visible_Post."')");
        if ($sql) {
		
		if (isset($_GET['id'])) {
            @$id = $_GET['id'];
        }
		
			
            $sql2 = mysqli_query($mysqli, "SELECT * FROM hojasdemejora WHERE id = ( SELECT MAX(id) FROM hojasdemejora)");
            $data = mysqli_fetch_row($sql2);
            echo '<br /><br /><br />';
			echo NC;
            echo '&nbsp;<span class="documenttitle">' . $data ['2'] . '</span>&nbsp;';
            echo ANADIDA;
            echo '!';

        } else {
 echo "Error message = ".((is_object($mysqli)) ? mysqli_error($mysqli) : (($___mysqli_res = mysqli_connect_error()) ? $___mysqli_res : false));
            echo ERROR_ANADIR_REGISTRO;
        }
    }
}

if ($aktion == "change") {
    $sql = mysqli_query($mysqli, "SELECT * FROM hojasdemejora ORDER BY id DESC");
        echo '<div align="center">';
		echo '' . NCS_LISTA . '</div>';
        echo '<table class="sortable">';
        echo '<tbody>';

        echo '<tr><th>Id</th><th style width="10%">' . NCS_NUMERO . '</th>
		<th style width="70%">'.NCS_DESCRIPCION.'</th>
		<th style width="10%">'.NCS_FECHA_APERTURA.'</th>
		<th>' . NCS_ABIERTOPOR . '</th>

		<th>' . CERRADOFECHA . '</th>
		<th><a href="#" alt="' . NCS_MODIFICAR_NC . '" title="' . NCS_MODIFICAR_NC . '" /><i class="fa fa-edit fa-2x" style="color:#9fff30"></i></a></th>
		<th><a href="#" alt="' . NCS_IMPRIMIR . '" title="' . NCS_IMPRIMIR . '" /><i class="fa fa-print fa-2x" style="color:#9fff30"></i></a></th>
		</tr>';
    while ($row = mysqli_fetch_row($sql)) {
        echo "<tr>";
        echo "<td style width='5%'>".$row['0']."</td>";
        echo "<td>";

            echo "<a href='index.php?seccion=ncs_print&amp;aktion=print_id&amp;id=".$row['0']."' alt='Image Tooltip' rel='tooltip' content='<table class=print2><tr>";
            echo "<th>"; echo NCS_NUMERO; echo "</th><th>"; echo FECHA; echo "</th></tr>";
            echo "<tr><td>"; echo "$row[2]"; echo "</td><td>"; echo "$row[5]"; echo "</td></tr>";
            echo "<tr><th>"; echo AUDITORIAS_NUMERO_AUDITORIA; echo"</th><th>"; echo DOCUMENTACION; echo "</th></tr>";
            echo "<tr><td>"; echo "$row[1]"; echo "</td><td>"; echo "$row[6]"; echo"</td></tr>";
            echo "<tr><th>"; echo NCS_ABIERTOPOR; echo "</th><th>"; echo NCS_AFECTAA; echo "</th></tr>";
            echo "<tr><td>"; echo "$row[7]"; echo "</td><td>"; echo "$row[8]"; echo "</td></tr>";
            echo "<tr><th>"; echo NCS_CAUSAS; echo"</th><th>"; echo NCS_ACCIONES; echo"</th></tr>";
            echo "<tr><td>"; echo "$row[9]"; echo"</td><td>"; echo "$row[10]"; echo "</td></tr>";
            echo "<tr><th>"; echo NCS_PLAZO;echo "</th><th>"; echo NCS_CIERRE_PARCIAL; echo"</th></tr>";
            echo "<tr><td>"; echo "$row[11]"; echo "</td><td>"; echo "$row[12]"; echo "</td></tr>";
            echo "<tr><th>"; echo NCS_EFICACIA;echo "</th><th>"; echo NCS_FECHACIERRE; echo"</th></tr>";
            echo "<tr><td>"; echo "$row[13]"; echo "</td><td>"; echo "$row[14]"; echo "</td></tr>";
            echo "<tr><th>"; echo NCS_DESVIACION; echo "</th></tr>";
            echo "<tr><td>"; echo "$row[15]"; echo "</td></tr>";
            echo "</table>'>";
            echo "$row[2]</a>";
         echo "</td>";

        echo "<td>".$row['4']."</td>";
        echo "<td>".$row['5']."</td>";
        echo "<td>".$row['7']."</td>";
        echo "<td>".$row['14']."</td>";
		echo "<td>	
					<a href='?seccion=ncs_admin&amp;aktion=change_id&amp;id=".$row['0']."' alt='".NCS_EDITAR_NC."-$row[0]' title='".NCS_EDITAR_NC."-$row[0]' />
						<i class='fa fa-pencil fa-2x' style='color:#9fff30'></i>
					</a>
			  </td>";
		echo "<td>
					<a href='?seccion=ncs_print&amp;aktion=change_id&amp;id=".$row['0']."' alt='".NCS_IMPRIMIR."-$row[0]' title='".NCS_IMPRIMIR."-$row[0]' />
						<i class='fa fa-print fa-2x' style='color:#9fff30'></i>
					</a>
			   </td>";
        echo "</tr>";
    }
        echo '</tbody>';
        echo "</table>";
}
if ($aktion == "change_id") {
    if ((empty($_POST['ai_change']))
        AND (empty($_POST['numhoja_change']))
        AND (empty($_POST['codhoja_change']))
        AND (empty($_POST['descripcion_change']))
        AND (empty($_POST['fecha_change']))
        AND (empty($_POST['docum_change']))
        AND (empty($_POST['abiertopor_change']))
        AND (empty($_POST['afectaa_change']))
        AND (empty($_POST['causas_change']))
        AND (empty($_POST['acciones_change']))
        AND (empty($_POST['plazo_change']))
        AND (empty($_POST['cierresparc_change']))
        AND (empty($_POST['eficacia_change']))
        AND (empty($_POST['cerradofecha_change']))
        AND (empty($_POST['desviacion_change']))
        AND (empty($_POST['visible_change']))) {
        $id = (int)$_GET['id'];
        $sql = mysqli_query($mysqli, "SELECT * FROM hojasdemejora WHERE id = $id ");
        $data = mysqli_fetch_row($sql);

        echo '<form action="ncs_admin_empty.php" method="POST">';
        echo '<table class="print">';
        echo '<caption>'.NCS_EDITAR_NC.'</caption>';
        echo '<tbody>';
        echo '<tr>';
          echo '<th>Id: </th>';
          echo '<td><input class="inputfecha" name="id_change" value="'.$data[0].'"></td>';
        echo '</tr>';
        echo '<tr>';
          echo '<th>'.AUDITORIAS_NUMERO_AUDITORIA.': </th>';
              echo '<td>';
               echo '<select name="ai_change">';
                    echo '<option>'.$data[1].'</option>';
                     $sql = "SELECT ai FROM aisgc ORDER BY id DESC";
                     $sql = mysqli_query($mysqli, $sql);
        if (!defined('ai')) {
             define('AI', 'ai');
        }
        while ($row = mysqli_fetch_assoc($sql)) {
            echo '<option value="'.$row[AI].'">'.$row[AI].'</option>';
        }
                echo '</select>';
              echo '</td>';
        echo '</tr>';
        echo '<tr>';
          echo '<th>'.NCS_NUMERO.': </th>';
          echo '<td><input class="inputfecha" name="numhoja_change" value="'.$data[2].'"></td>';
        echo '</tr>';
        echo '<tr>';
          echo '<th>'.CODIGO.': </th>';
          echo '<td><input class="inputfecha" name="codhoja_change" value="'.$data[3].'"></td>';
        echo '</tr>';
        echo '<tr>';
          echo '<th>'.NCS_DESCRIPCION.': </th>';
          echo '<td><textarea class="textareanormal" name="descripcion_change">'.$data[4].'</textarea></td>';
        echo '</tr>';
        echo '<tr>';
          echo '<th>'.NCS_FECHA_APERTURA.': </th>';
           echo '<td>';
           
		   echo '<input id="date" class="datepicker" name="fecha_change" value="' . $data[5] . '" />';// Date picker**************************************
		   /*?>
          <input type="text" id="date" class="inputfecha" name="fecha_change" value="<?php echo $data[5];?>" /><input type="button" value="::" onclick="<?php echo $db->show('date') ?>">
          <?php*/
           echo '</td>';

        echo '</tr>';
        echo '<tr>';
          echo '<th>'.NCS_REFERENCIA_DOCUMENTAL.': </th>';
          echo '<td><input class="inputnormal" name="docum_change" value="'.$data[6].'"></td>';
        echo '</tr>';
        echo '<tr>';
          echo '<th>'.NCS_ABIERTOPOR.': </th>';
           echo '<td>';

           echo '<select name="abiertopor_change">';
                echo '<option>'.$data[7].'</option>';
                 $sql = "SELECT auditor
                        FROM auditores
                        UNION SELECT inspector
                        FROM inspectores
                        UNION SELECT trabajador
                        FROM trabajadores";
                 $sql = mysqli_query($mysqli, $sql);
        if (!defined('auditor')) {
                     define('AUDITOR', 'auditor');
        }
        while ($row = mysqli_fetch_assoc($sql)) {
            echo '<option value="'.$row[AUDITOR].'">'.$row[AUDITOR].'</option>';
        }
         echo '</select>';

          echo '</td>';

        echo '</tr>';
        echo '<tr>';
          echo '<th>'.NCS_AFECTAA.': </th>';
          echo '<td>';

            echo '<select name="afectaa_change">';
                echo '<option>'.$data[8].'</option>';
                 $sql = "SELECT afectaa FROM afectaa";
                 $sql = mysqli_query($mysqli, $sql);
        if (!defined('afectaa')) {
             define('AFECTAA', 'afectaa');
        }
        while ($row = mysqli_fetch_assoc($sql)) {
             echo '<option value="'.$row[AFECTAA].'">'.$row[AFECTAA].'</option>';

        }
           echo '</select>';
             echo '&nbsp&nbsp';
            echo NCS_SELECCIONE_PARA_CAMBIAR;
          echo '</td>';
        echo '</tr>';
        echo '<tr>';
          echo '<th>'.NCS_CAUSAS.': </th>';
          echo '<td><textarea class="textareanormal" name="causas_change">'.$data[9].'</textarea></td>';
        echo '</tr>';
        echo '<tr>';
          echo '<th>'.NCS_ACCIONES.': </th>';
          echo '<td><textarea class="textareanormal" name="acciones_change">'.$data[10].'</textarea></td>';
        echo '</tr>';
        echo '<tr>';
          echo '<th>'.NCS_PLAZO.': </th>';
          echo '<td><input class="inputfecha" name="plazo_change" value="'.$data[11].'"></td>';
        echo '</tr>';
        echo '<tr>';
          echo '<th>'.NCS_CIERRE_PARCIAL.': </th>';
          echo '<td><textarea class="textareanormal" name="cierresparc_change">'.$data[12].'</textarea></td>';
        echo '</tr>';
        echo '<tr>';
          echo '<th>'.NCS_EFICACIA.': </th>';
          echo '<td><textarea class="textareanormal" name="eficacia_change">'.$data[13].'</textarea></td>';
        echo '</tr>';
        echo '<tr>';
          echo '<th>'.NCS_FECHACIERRE.': </th>';
          echo '<td>';
		  
		  echo '<input id="date2" class="datepicker" name="cerradofecha_change" value="' . $data[14] . '" />';// Date picker**************************************

           /*?>
          <input type="text" id="date2" class="inputfecha" name="cerradofecha_change" value="<?php echo $data[14];?>" /><input type="button" value="::" onclick="<?php echo $db->show('date2')?>">
          <?php*/

          echo '</td>';
        echo '</tr>';
        echo '<tr>';
          echo '<th>'.NCS_DESVIACION.': <t/h>';
          echo '<td><input class="inputfecha" name="desviacion_change" value="'.$data[15].'"></td>';
        echo '</tr>';
        echo '<tr>';
          echo '<th>Visible: </th>';
          echo '<td><input class="inputid" name="visible_change" value="'.$data[16].'"></td>';
        echo '</tr>';
          echo '<td colspan="2"><button type="submit" class="btn btn-info">' . MODIFICAR . '</button></td>';
        echo '</tr>';
        echo '</tbody>';
        echo '</table>';
        echo '</form>';
    } else {
        $sql = mysqli_query($mysqli, "UPDATE hojasdemejora SET ai='$_POST[ai_change]',
                            numhoja='$_POST[numhoja_change]',
                            codhoja='$_POST[codhoja_change]',
                            descripcion='$_POST[descripcion_change]',
                            fecha='$_POST[fecha_change]',
                            docum='$_POST[docum_change]',
                            abiertopor='$_POST[abiertopor_change]',
                            afectaa='$_POST[afectaa_change]',
                            causas='$_POST[causas_change]',
                            acciones='$_POST[acciones_change]',
                            plazo='$_POST[plazo_change]',
                            cierresparc='$_POST[cierresparc_change]',
                            eficacia='$_POST[eficacia_change]',
                            cerradofecha='$_POST[cerradofecha_change]',
                            desviacion='$_POST[desviacion_change]',
                            visible='$_POST[visible_change]'
                            WHERE id=$_GET[id]");
        if ($sql) {

        $id = (int)$_GET['id'];
        $sql2 = mysqli_query($mysqli, "SELECT * FROM hojasdemejora WHERE id = $id ");
        $data = mysqli_fetch_row($sql2);
            echo 'Nc <span class="documenttitle">'.$data[2].'</span>&nbsp;'; echo ACTUALIZADA; echo '!';
        }
    }
}

?>

</body>
<script src="http://cdn.jquerytools.org/1.2.7/full/jquery.tools.min.js"    type="text/javascript"></script>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script>
<script type="text/javascript" src="../jscripts/styleswitcher.js"></script>
<script type="text/javascript" src="../jscripts/indexcapaemergente.js"></script>
<script type="text/javascript" src="../jscripts/print.js"></script>
<script type="text/javascript" src="../jscripts/sorttable.js"></script>
<script type="text/javascript" src="../jscripts/checkbox3.js"></script>
<script type="text/javascript" src="../jscripts/queriesttip.js"></script>
<script type="text/javascript" src="../jscripts/windowopen.js"></script>
<!--<script src="../jscripts/even.js"></script>-->
<script type="text/javascript" src="../jscripts/windowopenajaxupload.js"></script>
<script type="text/javascript" src="../jscripts/jquery-2.0.3.min.js"></script>
<script type="text/javascript" src="../jscripts/thickbox.js"></script>
<!--<script type="text/javascript" src="jscripts/resizable-table.js"></script>-->

<!-- Datepicker chrishulbert-datepicker-8a22db6 [http://splinter.com.au/blog/?p=278](http://splinter.com.au/blog/?p=278) -->
<script type="text/javascript" src="../jscripts/datepicker.js"></script>
<!-- FIN Datepicker chrishulbert-datepicker-->

</html>