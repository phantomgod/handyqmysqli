<html>
<head>
</head>
<body>
<table class="print" style="width:80%" summary="Modificar auditorías">
<caption><?php echo AINFORMES_ADMINISTRAR; include('acciones/acciones_ainformes.php'); ?></caption>
<tbody>
<tr>
<td>
<a href="?seccion=auditorias_admin&amp;aktion=add"><?php echo AINFORMES_ANADIR; ?></a>::
<a href="?seccion=auditorias_admin&amp;aktion=change"><?php echo AINFORMES_CAMBIAR; ?></a>
</td>
</tr>
</tbody>
</table>
<br>


<?php
			// requires the class
			require "class.datepicker.php";
			
			// instantiate the object
			$db=new datepicker();
			
			// uncomment the next line to have the calendar show up in german
			//$db->language = "dutch";
			
			$db->firstDayOfWeek = 1;

			// set the format in which the date to be returned
			$db->dateFormat = "Y-m-d";

// Aktionen
$aktion = '';
if(isset($_GET['aktion'])) $aktion = $_GET['aktion'];

if($aktion == ""){
 echo 'Admin Area';
}

if($aktion == "add"){
  if((empty($_POST['ai'])) AND (empty($_POST['Fecha'])) AND (empty($_POST['AreaAuditada'])) AND (empty($_POST['Documentacion'])) AND (empty($_POST['Auditor'])) AND (empty($_POST['ObjetoAuditoria']))  AND (empty($_POST['Resultado']))){
    echo '<form action="" method="POST">';
       echo '<table class="print" style="width:80%" summary="Modificar auditorías">';
	   echo '<caption>';
		  echo AINFORMES_ANADIR;
      echo '</caption>';
       echo '<tbody>';
		echo '<tr>';
          echo '<th>';
		  echo AINFORMES_NUMERO;
          echo '</th>';
           echo '<td>';
		   echo ' <select name="ai" value="">';
                 echo '<option>...</option>';

                 $sql = "SELECT * FROM aisgc ORDER BY fecha DESC";
                 $sql = mysqli_query($mysqli, $sql);
                 while($row = mysqli_fetch_assoc($sql)) {
                 //$row['ai'] = htmlentities($row['ai']);
                 echo '<option value="'.$row[ai].'">'.$row[ai].' de fecha: '.$row[fecha].'</option>';
                 }

           echo '</select>';
          echo '</td>';
        echo '</tr>';
        echo '<tr>';
          echo '<th>';
		 echo FECHA;
		  echo '</th>';		    			
					  
          echo '<td><input type="text" id="date" class="inputfecha" name="Fecha" value="">';
		  ?>
		  
		  <input type="button" value="::" onclick="<?=$db->show('date')?>">
		  
		  <?php
		  echo '</td>';		  
		  		  
        echo '</tr>';
        echo '<tr>';
          echo '<th>';
		 echo AINFORMES_AREA_AUDITADA;
		  echo '</th>';
		  
		  
		  
         // echo '<td><input class="inputlargo" name="AreaAuditada" value=""></td>';
		  
		  
		 // SOME TESTS
		   /*echo '<td>';
		   echo ' <select name="AreaAuditada" value="">';
                 echo '<option>...</option>';

                 $sql = "SELECT * FROM areassensibles ORDER BY nombrearea";
                 $sql = mysql_query($sql);
                 while($row = mysql_fetch_assoc($sql)) {
                 //$row['nombrearea'] = htmlentities($row['nombrearea']);
                 echo '<option value="'.$row[nombrearea].'">'.$row[nombrearea].'</option>';
                 }

           echo '</select>';
           echo '</td>';
		  
		  
		   echo '<td>';
				 $sql2 = "SELECT nombrearea FROM areassensibles ORDER BY nombrearea";
                 $sql2 = mysql_query($sql2);
				 define("nombrearea", "nombrearea");
                 while($row = mysql_fetch_assoc($sql2)) {
				 echo $row['nombrearea'];
				 echo '<input type=checkbox name="AreaAuditada" value="'.$row[nombrearea].'">';
				 }
			echo '<td>';*/
			
			
		   echo '<td>';			
				$sql2="SELECT * FROM areassensibles";
				define("nombrearea", "nombrearea");
				$resultado=mysqli_query($mysqli, $sql2); 
				while($nombrearea=mysqli_fetch_array($resultado)){
				
				echo '<input id="IDnombrearea[]" name="AreaAuditada[]" type="checkbox" value="'.$nombrearea[nombrearea].'">'.$nombrearea[nombrearea].'';
				
				}
				
				
				
				
			echo '<td>';			
			
						
	
        echo '</tr>';
        echo '<tr>';
          echo '<th>';
		 echo DOCUMENTACION;
		  echo '</th>';
          echo '<td><input class="inputlargo" name="Documentacion" value=""></td>';
        echo '</tr>';
        echo '<tr>';
          echo '<th>';
		 echo AUDITORIAS_AUDITOR;
		  echo '</th>';
          echo '<td>';
		   echo ' <select name="Auditor" value="">';
                 echo '<option>...</option>';

                 $sql = "SELECT * FROM auditores WHERE activo=1";
                 $sql = mysqli_query($mysqli, $sql);
                 while($row = mysqli_fetch_assoc($sql)) {
                 //$row['auditor'] = htmlentities($row['auditor']);
                 echo '<option value="'.$row[auditor].'">'.$row[auditor].'</option>';
                 }

           echo '</select>';
          echo '</td>';
		  //echo '<td><input class="width:90%" name="Auditor" value=""></td>';
        echo '</tr>';
		echo '<tr>';
          echo '<th>';
		 echo AINFORMES_OBJETO;
		  echo '</th>';
          echo '<td><textarea class="textareasmall" name="ObjetoAuditoria" value=""></textarea></td>';
        echo '</tr>';
        echo '<tr>';
          echo '<th>';
		 echo RESULTADO;
		  echo '</th>';
          echo '<td><textarea class="textareanormal" name="Resultado" value=""></textarea></td>';
          echo '</tr>';
          echo '<td colspan="2"><input type="submit" value="'.ANADIR.'"></td>';
        echo '</tr>';
       echo '</tbody>';		
      echo '</table>';
    echo '</form>';
  }else{
	$ai_Post = $_POST['ai'];
	$Fecha_Post = $_POST['Fecha'];
	$AreaAuditada_Post = $_POST['AreaAuditada'];
	
	

				foreach ( $_POST['AreaAuditada'] as $area )
				{
					$AreaAuditada_Post .= '[' . $area . ']';
				}


	
	$Documentacion_Post = ((isset($mysqli) && is_object($mysqli)) ? mysqli_real_escape_string($mysqli, $_POST['Documentacion']) : ((trigger_error("[MySQLConverterToo] Fix the mysql_escape_string() call! This code does not work.", E_USER_ERROR)) ? "" : ""));
	$Auditor_Post = ((isset($mysqli) && is_object($mysqli)) ? mysqli_real_escape_string($mysqli, $_POST['Auditor']) : ((trigger_error("[MySQLConverterToo] Fix the mysql_escape_string() call! This code does not work.", E_USER_ERROR)) ? "" : ""));
	$ObjetoAuditoria_Post = ((isset($mysqli) && is_object($mysqli)) ? mysqli_real_escape_string($mysqli, $_POST['ObjetoAuditoria']) : ((trigger_error("[MySQLConverterToo] Fix the mysql_escape_string() call! This code does not work.", E_USER_ERROR)) ? "" : ""));
	$Resultado_Post = ((isset($mysqli) && is_object($mysqli)) ? mysqli_real_escape_string($mysqli, $_POST['Resultado']) : ((trigger_error("[MySQLConverterToo] Fix the mysql_escape_string() call! This code does not work.", E_USER_ERROR)) ? "" : ""));
    $sql =    mysqli_query($mysqli, "INSERT INTO informeauditoria (ai, Fecha, AreaAuditada, Documentacion, Auditor, ObjetoAuditoria, Resultado) VALUES ('".$ai_Post."', '".$Fecha_Post."', '".$AreaAuditada_Post."', '".$Documentacion_Post."', '".$Auditor_Post."', '".$ObjetoAuditoria_Post."', '".$Resultado_Post."')");
    if($sql) echo "Auditoría añadida";
    else echo "Error al añadir el registro!";
  }
}

if($aktion == "change"){
  $sql = mysqli_query($mysqli, "SELECT * FROM informeauditoria ORDER BY id DESC");

  echo '<table class="print" summary="Modificar auditorías">';
  echo '<caption>';
		  echo AINFORMES_CAMBIAR;
      echo '</caption>';
  echo '<thead>';
    echo AINFORMES_ADVERTICE; 
   echo '</thead>';
    echo '<tbody>';
  echo '<tr>';
  //<!--<th>Id</th>-->';
    echo '<th>';
		 echo AINFORMES_INFORME;
	echo '</th>';
    echo '<th>';
		 echo FECHA;
   echo '</th>';
    echo '<th>';
		 echo AINFORMES_AREA_AUDITADA;
	echo '</th>';
   //<!--<th>Documentaci&oacute;n</th>-->
   echo '<th>';
		 echo AUDITORIAS_AUDITOR;
   echo '</th>';
   //<!--<th>Objeto</th><th>Resultado</th>-->
    echo '</tr>';
  while($row = mysqli_fetch_row($sql)) {
		echo "<tr>";  
		//echo "<td>".$row['0']."</td>";
		echo "<td><a href='?seccion=auditorias_admin&amp;aktion=change_id&amp;id=".$row['0']."'>".$row['1']."</a></td>";
		echo "<td><a href='?seccion=auditorias_admin&amp;aktion=change_id&amp;id=".$row['0']."'>".$row['2']."</a></td>";
		echo "<td><a href='?seccion=auditorias_admin&amp;aktion=change_id&amp;id=".$row['0']."'>".$row['3']."</a></td>";
		//echo "<td><a href='?seccion=auditorias_admin&amp;aktion=change_id&amp;id=".$row['0']."'>".$row['4']."</a></td>";
		echo "<td><a href='?seccion=auditorias_admin&amp;aktion=change_id&amp;id=".$row['0']."'>".$row['5']."</a></td>";
		/*echo "<td><a href='?seccion=auditorias_admin&amp;aktion=change_id&amp;id=".$row['0']."'>".$row['6']."</a></td>";
		echo "<td><a href='?seccion=auditorias_admin&amp;aktion=change_id&amp;id=".$row['0']."'>".$row['7']."</a></td>";*/
		echo "</tr>";
  }
      echo '</tbody>';
  echo "</table>";
}


if($aktion == "change_id"){
  if((empty($_POST['ai_change'])) AND (empty($_POST['Fecha_change'])) AND (empty($_POST['AreaAuditada_change'])) AND (empty($_POST['Documentacion_change'])) AND (empty($_POST['Auditor_change'])) AND (empty($_POST['ObjetoAuditoria_change'])) AND (empty($_POST['Resultado_change']))){
    $id = $_GET['id'];
    $sql = mysqli_query($mysqli, "SELECT * FROM informeauditoria WHERE id = $_GET[id] ");
    $data = mysqli_fetch_row($sql);

    echo '<form action="" method="POST">';
      echo '<table class="print" summary="Modificar auditorías">';
	  echo '<caption>';
		  echo AINFORMES_PRINT_DETAILS;
      echo '</caption>';
       echo '<tbody>';
		echo '<tr>';
          echo '<th>';
		 echo AINFORMES_INFORME;
	     echo '</th>';
          echo '<td><input class="inputlargo" name="ai_change" value="'.$data[1].'"></td>';
        echo '</tr>';
        echo '<tr>';
          echo '<th>';
		 echo FECHA;
		  echo '</th>';
          echo '<td><input class="inputlargo" name="Fecha_change" value="'.$data[2].'"></td>';
        echo '</tr>';
        echo '<tr>';
          echo '<th>';
		 echo AINFORMES_AREA_AUDITADA;
	      echo '</th>';
          echo '<td><input class="inputlargo" name="AreaAuditada_change" value="'.$data[3].'"></td>';
        echo '</tr>';
        echo '<tr>';
           echo '<th>';
		 echo DOCUMENTACION;
		  echo '</th>';
          echo '<td><input class="inputlargo" name="Documentacion_change" value="'.$data[4].'"></td>';
        echo '</tr>';
        echo '<tr>';
          echo '<th>';
		 echo AUDITORIAS_AUDITOR;
          echo '</th>';
          echo '<td><input class="inputlargo" name="Auditor_change" value="'.$data[5].'"></td>';
        echo '</tr>';
		echo '<tr>';
          echo '<th>';
		 echo AINFORMES_OBJETO;
          echo '</th>';
          echo '<td><textarea class="inputlargo" rows="5" name="ObjetoAuditoria_change">'.$data[6].'</textarea></td>';
        echo '</tr>';
        echo '<tr>';
          echo '<th>';
		 echo RESULTADO;
          echo '</th>';
          echo '<td><textarea class="textareanormal" rows="15" name="Resultado_change">'.$data[7].'</textarea></td>';
        echo '</tr>';
          echo '<td colspan="2"><input type="submit" value="'.MODIFICAR.'"></td>';
        echo '</tr>';
      echo '</tbody>';	  
      echo '</table>';
    echo '</form>'; 
  }else{
    $sql = mysqli_query($mysqli, "UPDATE informeauditoria SET ai='$_POST[ai_change]',Fecha='$_POST[Fecha_change]',AreaAuditada='$_POST[AreaAuditada_change]',Documentacion='$_POST[Documentacion_change]',Auditor='$_POST[Auditor_change]',ObjetoAuditoria='$_POST[ObjetoAuditoria_change]',Resultado='$_POST[Resultado_change]' WHERE id=$_GET[id]");
    if($sql) echo 'Auditor&iacute;a actualizada!';
  }
}
?>
</body>
</html>