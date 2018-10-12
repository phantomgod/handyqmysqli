<html>
<head>
</head>
<body>
<table class="print" style="width:80%" summary="Modificar auditorías">
<caption><?php echo AUDITORIAS_ADMINISTRAR_AUDITORIAS; ?></caption>
<tbody>
<tr>
<td><a href="?seccion=aisgc_admin&amp;aktion=add"><?php echo AUDITORIAS_ANADIR_AUDITORIA; ?></a>::
<a href="?seccion=aisgc_admin&amp;aktion=change"><?php echo AUDITORIAS_CAMBIAR_AUDITORIA; ?></a>
</td>
</tr>
</tbody>
</table>
<br>

<?php
require_once("../includes/ErrorManager.class.php"); 
require_once("../includes/Mysql.class.php"); 
$mysql = new Mysql();
$mysql->connect("localhost", "donkey", "root", ""); // change this line here
?>
<?php


			// requires the class
			require "../class.datepicker.php";
			
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
  if((empty($_POST['fecha'])) AND (empty($_POST['ai'])) AND (empty($_POST['auditor1'])) AND (empty($_POST['auditor2'])) AND (empty($_POST['auditor3'])) AND (empty($_POST['docum'])) AND (empty($_POST['trabajador1'])) AND (empty($_POST['trabajador2'])) AND (empty($_POST['trabajador3'])) AND (empty($_POST['servicio1'])) AND (empty($_POST['servicio2'])) AND (empty($_POST['vehiculos'])) AND (empty($_POST['obstrat'])) AND (empty($_POST['obscal'])) AND (empty($_POST['obsalmac'])) AND (empty($_POST['obscompras'])) AND (empty($_POST['obsformac'])) AND (empty($_POST['obsdocum']))  AND (empty($_POST['obslegio']))){
    echo '<form action="" method="POST">';
       echo '<table class="print" style="width:80%" summary="Modificar auditorías">';
	   echo '<caption>';
		  echo AUDITORIAS_ANADIR_AUDITORIA;
      echo '</caption>';
       echo '<tbody>';
		echo '<tr>';
          echo '<th>';
		 echo FECHA;
		  echo '</th>';
          echo '<td><input input type="text" id="date" class="inputfecha" name="fecha" value="">';
		  
		   ?>
		  
		  <input type="button" value="::" onclick="<?=$db->show("date")?>">
		  
		  <?php
		  
		  
		  echo '</td>';
        echo '</tr>';
		echo '<tr>';
          echo '<th>';
		  echo AUDITORIAS_NUMERO_AUDITORIA;
          echo '</th>';
          echo '<td><input class="inputchico" name="ai" value=""></td>';
        echo '</tr>';        
        echo '<tr>';
          echo '<th>';
		 echo AUDITORIAS_AUDITOR;
		  echo '</th>';
          echo '<td>';
		   echo ' <select name="auditor1" value="">';
                 echo '<option>...</option>';

                 $sql = "SELECT * FROM members
							WHERE actividad='auditor'
							AND active='Yes'
							ORDER BY username ASC";
                 $sql = mysqli_query($mysqli, $sql);
                 while($row = mysqli_fetch_assoc($sql)) {
                 $row['auditor'] = htmlentities($row['auditor']);
                 echo '<option value="'.$row[auditor].'">'.$row[auditor].'</option>';
                 }

           echo '</select>';
          echo '</td>';
        echo '</tr>';
		echo '<tr>';
          echo '<th>';
		 echo AUDITORIAS_AUDITOR;
		  echo '</th>';
          echo '<td>';
		   echo ' <select name="auditor2" value="">';
                 echo '<option>...</option>';

                 $sql = "SELECT * FROM members
							WHERE actividad='auditor'
							AND active='Yes'
							ORDER BY username ASC";
                 $sql = mysqli_query($mysqli, $sql);
                 while($row = mysqli_fetch_assoc($sql)) {
                 $row['auditor'] = htmlentities($row['auditor']);
                 echo '<option value="'.$row[auditor].'">'.$row[auditor].'</option>';
                 }

           echo '</select>';
          echo '</td>';
        echo '</tr>';
        echo '<tr>';
          echo '<th>';
		 echo AUDITORIAS_AUDITOR;
		  echo '</th>';
          echo '<td>';
		   echo ' <select name="auditor3" value="">';
                 echo '<option>...</option>';

                 $sql = "SELECT * FROM members
							WHERE actividad='auditor'
							AND active='Yes'
							ORDER BY username ASC";
                 $sql = mysqli_query($mysqli, $sql);
                 while($row = mysqli_fetch_assoc($sql)) {
                 $row['auditor'] = htmlentities($row['auditor']);
                 echo '<option value="'.$row[auditor].'">'.$row[auditor].'</option>';
                 }

           echo '</select>';
          echo '</td>';
        echo '</tr>';
		echo '<tr>';
          echo '<th>';
		 echo DOCUMENTOS;
		  echo '</th>';
          echo '<td><textarea class="textareasmall" name="docum" value=""></textarea></td>';
        echo '</tr>';
		
		
		
		
		echo '<tr>';
		echo '<form name="form" method="post">';
    	

			$id=$_REQUEST['ID'];
			$sql=mysqli_query($mysqli, "SELECT trabajadores FROM table WHERE trabajador='".$trabajador."'");
			while($row=mysqli_fetch_array($sql)){

			echo '<tr>';
			echo '<td><input type="checkbox" name="select[]" value="<?php echo "$trabajador"; ?>"/></td>';
			echo '<td>$row["trabajador"]';
			echo '</td>';
			echo '</tr>';
			echo '</form>';

			}//end while loop
	
		echo '</tr>';
		
	

	
		
		echo '<tr>';
			echo '<th style="width:100px">';
		   echo TRABAJADOR_TRABAJADOR;
		   echo '</th>';
			echo '<td>';
			
				echo '<select name="trabajador1"  value="">';
			 echo '<option>...</option>';   
					 $sql = "SELECT * FROM trabajadores WHERE activo=1";
					 $sql = mysqli_query($mysqli, $sql);
					 while($row = mysqli_fetch_assoc($sql)) {
					 $row['trabajador'] = htmlentities($row['trabajador']);
					 echo '<option value="'.$row[trabajador].'">'.$row[trabajador].'</option>';
					 }
			 echo '</select>';			
		 echo '</tr>';
		 
		 echo '<tr>';
			echo '<th style="width:100px">';
		   echo TRABAJADOR_TRABAJADOR;
		   echo '</th>';
			echo '<td>';
			
				echo '<select name="trabajador2"  value="">';
			 echo '<option>...</option>';   
					 $sql = "SELECT * FROM trabajadores WHERE activo=1";
					 $sql = mysqli_query($mysqli, $sql);
					 while($row = mysqli_fetch_assoc($sql)) {
					 $row['trabajador'] = htmlentities($row['trabajador']);
					 echo '<option value="'.$row[trabajador].'">'.$row[trabajador].'</option>';
					 }
			 echo '</select>';			
		 echo '</tr>';
		 
		 echo '<tr>';
			echo '<th style="width:100px">';
		   echo TRABAJADOR_TRABAJADOR;
		   echo '</th>';
			echo '<td>';
			
				echo '<select name="trabajador3"  value="">';
			 echo '<option>...</option>';   
					 $sql = "SELECT * FROM trabajadores WHERE activo=1";
					 $sql = mysqli_query($mysqli, $sql);
					 while($row = mysqli_fetch_assoc($sql)) {
					 $row['trabajador'] = htmlentities($row['trabajador']);
					 echo '<option value="'.$row[trabajador].'">'.$row[trabajador].'</option>';
					 }
			 echo '</select>';			
		 echo '</tr>';
		 
		 echo '<tr>';
			echo '<th style="width:100px">';
		   echo CLIENTE;
		   echo '</th>';
			echo '<td>';			
				echo '<select name="servicio1">';
					echo '<option>...</option>';			
					 $sql = "SELECT * FROM servicios WHERE activo=1";
					 $sql = mysqli_query($mysqli, $sql);
					 while($row = mysqli_fetch_assoc($sql)) {
					 $row['servicio'] = htmlentities($row['servicio']);
					 echo '<option value="'.$row[servicio].'">'.$row[servicio].'</option>';
					 }			
				echo '</select>';			
			echo '</td>';
		echo '</tr>';
		
		echo '<tr>';
			echo '<th style="width:100px">';
		   echo CLIENTE;
		   echo '</th>';
			echo '<td>';			
				echo '<select name="servicio2">';
					echo '<option>...</option>';			
					 $sql = "SELECT * FROM servicios WHERE activo=1";
					 $sql = mysqli_query($mysqli, $sql);
					 while($row = mysqli_fetch_assoc($sql)) {
					 $row['servicio'] = htmlentities($row['servicio']);
					 echo '<option value="'.$row[servicio].'">'.$row[servicio].'</option>';
					 }			
				echo '</select>';			
			echo '</td>';
		echo '</tr>';
		
		echo '<tr>';
          echo '<th>';
		  echo VEHICULOS;
          echo '</th>';
          echo '<td><input class="inputlargo" name="vehiculos" value=""></td>';
        echo '</tr>';
		
		echo '<tr>';
		echo '<th>';
		?>
		<div id="" onMouseOver="showdiv(event,'<?php echo AUDITORIAS_CUESTIONARIOALSERVICIO; ?>');" onMouseOut="hiddenDiv()" style='display:table;margin-top3px;'>
		<?php
		   echo CUESTIONARIO_TRATAMIENTOS;
		echo '</th>';
          /*echo '<td>Comprobar desviaciones en la atención mensual de clientes<br/>
					Comprobar que no falta documentación de trabajo<br/>
					Comprobar stock mínimo en el vehículo<br/>
					Comprobar limpieza y mantenimiento de vehículos<br/>
					Comprobar órdenes de trabajo completas<br/>
					Comprobar trabajo realizado</td>';*/
        /*echo '</tr>';
		 
        echo '<tr>';
          echo '<th>';
		   echo OBSERVACIONES;
		 echo '</th>';*/
           echo '<td><textarea class="textareanormal" name="obstrat" value=""></textarea></td>';
        echo '</tr>';
		
		echo '<tr>';
		echo '<th>';
		?>
		<div id="" onMouseOver="showdiv(event,'<?php echo AUDITORIAS_CUESTIONARIOACALIDAD; ?>');" onMouseOut="hiddenDiv()" style='display:table;margin-top3px;'>
		<?php
		   echo CUESTIONARIO_CALIDAD;
		echo '</th>';
          /*echo '<td>Revisar que se ha actualizado la normativa (si procede)<br/>
					Comprobar que los documentos apropiados del sistema se encuentran distribuidos y aprobados. Comprobar archovo de documentos<br/>
					Comprobar que el listado de documentos en vigor está actualizado<br/>
					Comprobar si hay atrasos en las tareas planificadas (auditorías, objetivos, formación, indicadores, inspecciones)<br/>
					Comprobar que se actualizan los datos en la BD<br/>
					Comprobar que se han anotado las incidencias de los proveedores, en la BD.<br/>
					Comprobar que se han cerrado las NC-AACCPP en las que proceda, así como las mejoras<br/>
					Comprobar que se han atendido las reclamaciones de clientes<br/>
					Comprobar el seguimiento de los indicadores</td>';
        echo '</tr>';
		 
        echo '<tr>';
          echo '<th>';
		   echo OBSERVACIONES;
		 echo '</th>';*/
           echo '<td><textarea class="textareanormal" name="obscal" value=""></textarea></td>';
        echo '</tr>';
		
		echo '<tr>';
		echo '<th>';
		?>
		<div id="" onMouseOver="showdiv(event,'<?php echo AUDITORIAS_CUESTIONARIOALMACEN; ?>');" onMouseOut="hiddenDiv()" style='display:table;margin-top3px;'>
		<?php
		   echo CUESTIONARIO_ALMACEN;
		echo '</th>';
          /*echo '<td>Comprobar la suciedad y el desorden en estanterías y útiles de trabajo.<br/>
					Comprobar la suciedad en el suelo, restos de materiales u otros.<br/>
					Comprobar la fecha de revisión, señalización y zona libre de obstáculos en extintores.<br/>
					Comprobar que los accesos se encuentran despejados de piezas, materiales, cajas u otros obstáculos que impidan el tránsito de personas o medios de transporte<br/>
					Comprobar el estado y adecuación de los contenedores.<br/>
					Comprobar el estado de seguridad en los aparatos eléctricos, instalaciones en general y sistemas de iluminación.<br/>
					Comprobar que los extintores están limpios, tarjetas de revisión en vigor y situados en las áreas señalizadas para los mismos.<br/>
					Comprobar que los productos están libres de corrosión.<br/>
					Comprobar que no haya apilamientos vencidos.<br/>
					Comprobar que no hay materiales sin identificar.<br/>
					Comprobarla inexistencia de depósitos contenedores de basura en zonas de almacén<br/>
					Comprobar derrames.</td>';
        echo '</tr>';
		 
        echo '<tr>';
          echo '<th>';
		   echo OBSERVACIONES;
		 echo '</th>';*/
           echo '<td><textarea class="textareanormal" name="obsalmac" value=""></textarea></td>';
        echo '</tr>';
		
		echo '<tr>';
		echo '<th>';
		?>
		<div id="" onMouseOver="showdiv(event,'<?php echo AUDITORIAS_CUESTIONARIOACOMPRAS; ?>');" onMouseOut="hiddenDiv()" style='display:table;margin-top3px;'>
		<?php
		   echo CUESTIONARIO_COMPRAS;
		echo '</th>';
          /*echo '<td>Comprobar que no faltan las certificaciones u homologaciones de los proveedores y los productos.<br/>
					Comprobar que se han anotado todas las incidencias habidas con los proveedores.<br/>
					Comprobar si el personal conoce la manera correcta de recepcionar los materiales.<br/>
					Comprobar que se ha valorado a cada proveedor y que se ha anotado el resultado.<br/>
					Comprobar que los albaranes u hojas de pedido están archivados correctamente y están firmados por la persona que los recepciona.<br/>
					Comprobar el visto bueno de las facturas con los albaranes.</td>';
        echo '</tr>';
		 
        echo '<tr>';
          echo '<th>';
		   echo OBSERVACIONES;
		 echo '</th>';*/
           echo '<td><textarea class="textareanormal" name="obscompras" value=""></textarea></td>';
        echo '</tr>';
		
		echo '<tr>';
		echo '<th>';
		?>
		<div id="" onMouseOver="showdiv(event,'<?php echo AUDITORIAS_CUESTIONARIOAFORMACION; ?>');" onMouseOut="hiddenDiv()" style='display:table;margin-top3px;'>
		<?php
		   echo CUESTIONARIO_FORMACION;
		echo '</th>';
          /*echo '<td>Comprobar estado de actualización de los registros de formación en la BD.<br/>
					Comprobar carnets.<br/>
					Comprobar las revalidaciones.<br/>
					Comprobar los cursos impartidos.</td>';
        echo '</tr>';
		 
        echo '<tr>';
          echo '<th>';
		   echo OBSERVACIONES;
		 echo '</th>';*/
           echo '<td><textarea class="textareanormal" name="obsformac" value=""></textarea></td>';
        echo '</tr>';
		
		
		echo '<tr>';
		echo '<th>';
		?>
		<div id="" onMouseOver="showdiv(event,'<?php echo AUDITORIAS_CUESTIONARIOADOCUMENTACION; ?>');" onMouseOut="hiddenDiv()" style='display:table;margin-top3px;'>
		<?php
		   echo CUESTIONARIO_DOCUMENTACION;
		echo '</th>';
          /*echo '<td>Comprobar estados de revisión.<br/>
					Comprobar estado de almacenamiento y archivo.<br/>
					Comprobar si se ha comunicado la distribución pertinente.</td>';
        echo '</tr>';
		
		 
        echo '<tr>';
          echo '<th>';
		   echo OBSERVACIONES;
		 echo '</th>';*/
           echo '<td><textarea class="textareanormal" name="obsdocum" value=""></textarea></td>';
        echo '</tr>';
		
		echo '<tr>';
		echo '<th>';
		?>
		<div id="" onMouseOver="showdiv(event,'<?php echo AUDITORIAS_CUESTIONARIOATALLER; ?>');" onMouseOut="hiddenDiv()" style='display:table;margin-top3px;'>
		<?php
		   echo CUESTIONARIO_TALLER;
		echo '</th>';
          /*echo '<td>- Manómetros comprobados.<br/>
					- Orden y limpieza<br/>
					- Seguridad y prevencíon<br/>
					- Documentación<br/>
					- Separación de zonas
					- Identificaciones de productos<br/>
					- Control de operaciones<br/>
					</td>';
        echo '</tr>';
		 
        echo '<tr>';
          echo '<th>';
		   echo OBSERVACIONES;
		 echo '</th>';*/
           echo '<td><textarea class="textareanormal" name="obslegio" value=""></textarea></td>';
        echo '</tr>';
		
		
		  
          echo '<td colspan="2"><button type="submit" class="btn btn-info">' . ANADIR . '</button></td>';
        echo '</tr>';
       echo '</tbody>';		
      echo '</table>';
    echo '</form>';
  }else{
	//$id_Post = $_POST['id'];
	
	$select[] = $_POST['select'];
    $select=$_POST['select'];
	
	$fecha_Post = $_POST['fecha'];
	$ai_Post = $_POST['ai'];	
	$auditor1_Post = $_POST['auditor1'];
	$auditor2_Post = $_POST['auditor2'];
	$auditor3_Post = $_POST['auditor3'];
	$docum_Post = $_POST['docum'];
	//$trabajador1_Post = $_POST['trabajador1'];
	$trabajador2_Post = $_POST['trabajador2'];
	$trabajador3_Post = $_POST['trabajador3'];
	$servicio1_Post = $_POST['servicio1'];
	$servicio2_Post = $_POST['servicio2'];
	$vehiculos_Post = $_POST['vehiculos'];
	$obstrat_Post = $_POST['obstrat'];
	$obscal_Post = $_POST['obscal'];
	$obsalmac_Post = $_POST['obsalmac'];
	$obscompras_Post = $_POST['obscompras'];
	$obsformac_Post = $_POST['obsformac'];
	$obsdocum_Post = $_POST['obsdocum'];
	$obslegio_Post = $_POST['obslegio'];
	
    $sql =    mysqli_query($mysqli, "INSERT INTO aisgc (fecha, ai, auditor1, auditor2, auditor3, docum, trabajador1, trabajador2, trabajador3, servicio1, servicio2, vehiculos, obstrat, obscal, obsalmac, obscompras, obsformac, obsdocum, obslegio) VALUES ('".$fecha_Post."', '".$ai_Post."', '".$auditor1_Post."', '".$auditor2_Post."', '".$auditor3_Post."', '".$docum_Post."', '".$select[$trabajador]."', '".$trabajador2_Post."', '".$trabajador3_Post."', '".$servicio1_Post."', '".$servicio2_Post."', '".$vehiculos_Post."', '".$obstrat_Post."', '".$obscal_Post."', '".$obsalmac_Post."', '".$obscompras_Post."', '".$obsformac_Post."', '".$obsdocum_Post."', '".$obslegio_Post."')");
    if($sql) echo "Auditoría añadida";
    else echo "Error al añadir el registro!";
	echo "Error message = ".((is_object($mysqli)) ? mysqli_error($mysqli) : (($___mysqli_res = mysqli_connect_error()) ? $___mysqli_res : false));

  }
}

if($aktion == "change"){
  $sql = mysqli_query($mysqli, "SELECT * FROM aisgc ORDER BY id DESC");

  echo '<table class="print" summary="Modificar auditorías">';
  echo '<caption>';
		  echo AUDITORIAS_CAMBIAR_AUDITORIA;
      echo '</caption>';
  echo '<thead>';
    echo AUDITORIAS_ADVERTICE; 
   echo '</thead>';
    echo '<tbody>';
  echo '<tr>';
  //<!--<th>Id</th>-->';
		echo '<th>';
			 echo FECHA;
		echo '</th>';
		echo '<th>';
			 echo AUDITORIAS_NUMERO_AUDITORIA;
		echo '</th>';
  echo '</tr>';
  while($row = mysqli_fetch_row($sql)) {
		echo "<tr>";  
		//echo "<td>".$row['0']."</td>";
		echo "<td><a href='?seccion=aisgc_admin&amp;aktion=change_id&amp;id=".$row['0']."'>".$row['1']."</a></td>";
		echo "<td><a href='?seccion=aisgc_admin&amp;aktion=change_id&amp;id=".$row['0']."'>".$row['2']."</a></td>";
  echo "</tr>";
  }
      echo '</tbody>';
  echo "</table>";
}


if($aktion == "change_id"){
  if((empty($_POST['fecha_change'])) AND (empty($_POST['ai_change'])) AND (empty($_POST['auditor1_change'])) AND (empty($_POST['auditor2_change'])) AND (empty($_POST['auditor3_change'])) AND (empty($_POST['docum_change'])) AND (empty($_POST['trabajador1_change'])) AND (empty($_POST['trabajador2_change'])) AND (empty($_POST['trabajador3_change'])) AND (empty($_POST['servicio1_change'])) AND (empty($_POST['servicio2_change'])) AND (empty($_POST['vehiculos_change'])) AND (empty($_POST['obstrat_change'])) AND (empty($_POST['obscal_change'])) AND (empty($_POST['obsalmac_change'])) AND (empty($_POST['obscompras_change'])) AND (empty($_POST['obsformac_change'])) AND (empty($_POST['obsdocum_change'])) AND (empty($_POST['obslegio_change']))){
    $id = $_GET['id'];
    $sql = mysqli_query($mysqli, "SELECT * FROM aisgc WHERE id = $_GET[id] ");
    $data = mysqli_fetch_row($sql);

    echo '<form action="" method="POST">';
      echo '<table class="print" summary="Modificar auditorías">';
	  echo '<caption>';
		  echo AUDITORIAS_PRINT_DETAILS;
      echo '</caption>';
       echo '<tbody>';
		echo '<tr>';
          echo '<th>';
		 echo FECHA;
	     echo '</th>';
          echo '<td><input class="inputlargo" name="fecha_change" value="'.$data[1].'"></td>';
        echo '</tr>';
        echo '<tr>';
          echo '<th>';
		 echo AUDITORIAS_AUDITORIA;
		  echo '</th>';
          echo '<td><input class="inputlargo" name="ai_change" value="'.$data[2].'"></td>';
        echo '</tr>';
         echo '<tr>';
          echo '<th>';
		 echo AUDITORIAS_AUDITOR;
          echo '</th>';
          echo '<td><input class="inputlargo" name="auditor1_change" value="'.$data[3].'"></td>';
        echo '</tr>';
		echo '<tr>';
          echo '<th>';
		 echo AUDITORIAS_AUDITOR;
          echo '</th>';
          echo '<td><input class="inputlargo" name="auditor2_change" value="'.$data[4].'"></td>';
        echo '</tr>';
		echo '<tr>';
          echo '<th>';
		 echo AUDITORIAS_AUDITOR;
          echo '</th>';
          echo '<td><input class="inputlargo" name="auditor3_change" value="'.$data[5].'"></td>';
        echo '</tr>';
        echo '<tr>';
           echo '<th>';
		 echo DOCUMENTACION;
		  echo '</th>';
          echo '<td><input class="inputlargo" name="docum_change" value="'.$data[6].'"></td>';
        echo '</tr>';
		echo '<tr>';
          echo '<th>';
		 echo TRABAJADOR_TRABAJADOR;
          echo '</th>';
          echo '<td><input class="inputlargo" name="trabajador1_change" value="'.$data[7].'"></td>';
        echo '</tr>';
		echo '<tr>';
          echo '<th>';
		 echo TRABAJADOR_TRABAJADOR;
          echo '</th>';
          echo '<td><input class="inputlargo" name="trabajador2_change" value="'.$data[8].'"></td>';
        echo '</tr>';
		echo '<tr>';
          echo '<th>';
		 echo TRABAJADOR_TRABAJADOR;
          echo '</th>';
          echo '<td><input class="inputlargo" name="trabajador3_change" value="'.$data[9].'"></td>';
        echo '</tr>';
		echo '<tr>';
          echo '<th>';
		 echo SERVICIO_SERVICIO;
          echo '</th>';
          echo '<td><input class="inputlargo" name="servicio1_change" value="'.$data[10].'"></td>';
        echo '</tr>';
		echo '<tr>';
          echo '<th>';
		 echo SERVICIO_SERVICIO;
          echo '</th>';
          echo '<td><input class="inputlargo" name="servicio2_change" value="'.$data[11].'"></td>';
        echo '</tr>';
        echo '<tr>';
          echo '<th>';
		 echo VEHICULOS;
          echo '</th>';
          echo '<td><input class="inputlargo" name="vehiculos_change" value="'.$data[12].'"></td>';
        echo '</tr>';
		
		
		echo '<tr>';		  
		  echo '<td>Comprobar desviaciones en la atención mensual de clientes<br/>
					Comprobar que no falta documentación de trabajo<br/>
					Comprobar stock mínimo en el vehículo<br/>
					Comprobar limpieza y mantenimiento de vehículos<br/>
					Comprobar órdenes de trabajo completas<br/>
					Comprobar trabajo realizado</td>';					
		   /*echo '<th>';
		 echo OBSERVACIONES;
          echo '</th>';*/		  
		  echo '<td><textarea class="textareanormal" rows="5" name="obstrat_change">'.$data[13].'</textarea></td>';
		echo '</tr>';
		
		
		echo '<tr>';		  
		  echo '<td>Revisar que se ha actualizado la normativa (si procede)<br/>
					Comprobar que los documentos apropiados del sistema se encuentran distribuidos y aprobados. Comprobar archovo de documentos<br/>
					Comprobar que el listado de documentos en vigor está actualizado<br/>
					Comprobar si hay atrasos en las tareas planificadas (auditorías, objetivos, formación, indicadores, inspecciones)<br/>
					Comprobar que se actualizan los datos en la BD<br/>
					Comprobar que se han anotado las incidencias de los proveedores, en la BD.<br/>
					Comprobar que se han cerrado las NC-AACCPP en las que proceda, así como las mejoras<br/>
					Comprobar que se han atendido las reclamaciones de clientes<br/>
					Comprobar el seguimiento de los indicadores</td>';
		  /*echo '<th>';
		 echo OBSERVACIONES;
          echo '</th>';*/
		 echo '<td><textarea class="textareanormal" rows="5" name="obscal_change">'.$data[14].'</textarea></td>';
        echo '</tr>';
		
		
		echo '<tr>';		  
		  echo '<td>Comprobar la suciedad y el desorden en estanterías y útiles de trabajo.<br/>
					Comprobar la suciedad en el suelo, restos de materiales u otros.<br/>
					Comprobar la fecha de revisión, señalización y zona libre de obstáculos en extintores.<br/>
					Comprobar que los accesos se encuentran despejados de piezas, materiales, cajas u otros obstáculos que impidan el tránsito de personas o medios de transporte<br/>
					Comprobar el estado y adecuación de los contenedores.<br/>
					Comprobar el estado de seguridad en los aparatos eléctricos, instalaciones en general y sistemas de iluminación.<br/>
					Comprobar que los extintores están limpios, tarjetas de revisión en vigor y situados en las áreas señalizadas para los mismos.<br/>
					Comprobar que los productos están libres de corrosión.<br/>
					Comprobar que no haya apilamientos vencidos.<br/>
					Comprobar que no hay materiales sin identificar.<br/>
					Comprobarla inexistencia de depósitos contenedores de basura en zonas de almacén<br/>
					Comprobar derrames.</td>';
		  /*echo '<th>';
		 echo OBSERVACIONES;
          echo '</th>';*/		  
		  echo '<td><textarea class="textareanormal" rows="5" name="obsalmac_change">'.$data[15].'</textarea></td>';
        echo '</tr>';
		
		
		echo '<tr>';		  
		   echo '<td>Comprobar que no faltan las certificaciones u homologaciones de los proveedores y los productos.<br/>
					Comprobar que se han anotado todas las incidencias habidas con los proveedores.<br/>
					Comprobar si el personal conoce la manera correcta de recepcionar los materiales.<br/>
					Comprobar que se ha valorado a cada proveedor y que se ha anotado el resultado.<br/>
					Comprobar que los albaranes u hojas de pedido están archivados correctamente y están firmados por la persona que los recepciona.<br/>
					Comprobar el visto bueno de las facturas con los albaranes.</td>';
		  /*echo '<th>';
		 echo OBSERVACIONES;
          echo '</th>';*/		  
		  echo '<td><textarea class="textareanormal" rows="5" name="obscompras_change">'.$data[16].'</textarea></td>';
        echo '</tr>';
		
		
		echo '<tr>';		  
		 echo '<td>Comprobar estado de actualización de los registros de formación en la BD.<br/>
					Comprobar los carnets.<br/>
					Comprobar las revalidaciones.<br/>
					Comprobar los cursos impartidos.</td>';
		 /*echo '<th>';
		 echo OBSERVACIONES;
          echo '</th>';*/		 		 
		 echo '<td><textarea class="textareanormal" rows="5" name="obsformac_change">'.$data[17].'</textarea></td>';
        echo '</tr>';
		
		
		echo '<tr>';		  
		  echo '<td>Comprobar estados de revisión.<br/>
					Comprobar estado de almacenamiento y archivo.<br/>
					Comprobar si se ha comunicado la distribución pertinente.</td>';
		  /*echo '<th>';
		 echo OBSERVACIONES;
          echo '</th>';*/   		  
		  echo '<td><textarea class="textareanormal" rows="5" name="obsdocum_change">'.$data[18].'</textarea></td>';
        echo '</tr>';
       

	   echo '<tr>';		  
		   echo '<td>- Manómetros comprobados.<br/>
					- Orden y limpieza<br/>
					- Seguridad y prevencíon<br/>
					- Documentación<br/>
					- Separación de zonas
					- Identificaciones de productos<br/>
					- Control de operaciones<br/>
				</td>';
		  /*echo '<th>';
		 echo OBSERVACIONES;
          echo '</th>';*/		  
		  echo '<td><textarea class="textareanormal" rows="5" name="obslegio_change">'.$data[19].'</textarea></td>';
        echo '</tr>';
          
		  
		  echo '<td colspan="2"><button type="submit" class="btn btn-info">' . MODIFICAR . '</button></td>';
        echo '</tr>';
      echo '</tbody>';	  
      echo '</table>';
    echo '</form>'; 
  }else{
    $sql = mysqli_query($mysqli, "UPDATE aisgc SET fecha='$_POST[fecha_change]',ai='$_POST[ai_change]',auditor1='$_POST[auditor1_change]',auditor2='$_POST[auditor2_change]',auditor3='$_POST[auditor3_change]',docum='$_POST[docum_change]',trabajador1='$_POST[trabajador1_change]',trabajador2='$_POST[trabajador2_change]',trabajador3='$_POST[trabajador3_change]',servicio1='$_POST[servicio1_change]',servicio2='$_POST[servicio2_change]',vehiculos='$_POST[vehiculos_change]',obstrat='$_POST[obstrat_change]',obscal='$_POST[obscal_change]',obsalmac='$_POST[obsalmac_change]',obscompras='$_POST[obscompras_change]',obsformac='$_POST[obsformac_change]',obsdocum='$_POST[obsdocum_change]',obslegio='$_POST[obslegio_change]' WHERE id=$_GET[id]");
    if($sql) echo AUDITORIA_ACTUALIZADA;
	echo "Error message = ".((is_object($mysqli)) ? mysqli_error($mysqli) : (($___mysqli_res = mysqli_connect_error()) ? $___mysqli_res : false));
  }
}
?>
</body>
</html>