<?php
// Script and tutorial written by Adam Khoury @ developphp.com
// Line by line explanation : youtube.com/watch?v=T2QFNu_mivw

$db_name = "handyq";    // The database we created earlier in phpMyAdmin. 
$db_server = "localhost";    // Change if you have this hosted. 
$db_user = "root";    // Your USERNAME     
$db_pass = "";     // Your PASSWORD. Working locally, mine is blank. Change if you plan on deploying. 


$mysqli = new mysqli($db_server, $db_user, $db_pass, $db_name);
 
// check connection
if ($mysqli->connect_error) {
  trigger_error('Database connection failed: '  . $mysqli->connect_error, E_USER_ERROR);
}


$mysqli->set_charset("utf8"); 
// This first query is just to get the total count of rows

$sql = "SELECT COUNT(*) FROM\n"
    . "(\n"
    . " SELECT hojas . * \n"
    . "	FROM hojasdemejora AS hojas\n"
    . "	INNER JOIN informeauditoria AS audit ON hojas.ai = audit.ai\n"
    . ") AS subquery";

$query = mysqli_query($mysqli, $sql);
$row = mysqli_fetch_row($query);
// Here we have the total row count
$rows = $row[0];
// This is the number of results we want displayed per page
$page_rows = 10;
// This tells us the page number of our last page
$last = ceil($rows/$page_rows);
// This makes sure $last cannot be less than 1
if($last < 1){
	$last = 1;
}
// Establish the $pagenum variable
$pagenum = 1;
// Get pagenum from URL vars if it is present, else it is = 1
if(isset($_GET['pn'])){
	$pagenum = preg_replace('#[^0-9]#', '', $_GET['pn']);
}
// This makes sure the page number isn't below 1, or more than our $last page
if ($pagenum < 1) { 
    $pagenum = 1; 
} else if ($pagenum > $last) { 
    $pagenum = $last; 
}
// This sets the range of rows to query for the chosen $pagenum
$limit = 'LIMIT ' .($pagenum - 1) * $page_rows .',' .$page_rows;
// This is your query again, it is for grabbing just one page worth of rows by applying $limit
$sql = "SELECT hojas . * , audit . * 
			FROM hojasdemejora AS hojas
			INNER JOIN informeauditoria AS audit ON hojas.ai = audit.ai
			GROUP BY hojas.id DESC 
			ORDER BY  `audit`.`id` ASC $limit";

$query = mysqli_query($mysqli, $sql);

// This shows the user what page they are on, and the total number of pages
$textline1 = "Testimonials (<b>$rows</b>)";
$textline2 = "Page <b>$pagenum</b> of <b>$last</b>";
// Establish the $paginationCtrls variable
$paginationCtrls = '';
// If there is more than 1 page worth of results
if($last != 1){
	/* First we check if we are on page one. If we are then we don't need a link to 
	   the previous page or the first page so we do nothing. If we aren't then we
	   generate links to the first page, and to the previous page. */
	if ($pagenum > 1) {
        $previous = $pagenum - 1;
		$paginationCtrls .= '<a href="?seccion=paginatormysqliainc&pn='.$previous.'">Previous</a> &nbsp; &nbsp; ';
		// Render clickable number links that should appear on the left of the target page number
		for($i = $pagenum-4; $i < $pagenum; $i++){
			if($i > 0){
		        $paginationCtrls .= '<a href="?seccion=paginatormysqliainc&pn='.$i.'">'.$i.'</a> &nbsp; ';
			}
	    }
    }
	// Render the target page number, but without it being a link
	$paginationCtrls .= ''.$pagenum.' &nbsp; ';
	// Render clickable number links that should appear on the right of the target page number
	for($i = $pagenum+1; $i <= $last; $i++){
		$paginationCtrls .= '<a href="?seccion=paginatormysqliainc&pn='.$i.'">'.$i.'</a> &nbsp; ';
		if($i >= $pagenum+4){
			break;
		}
	}
	// This does the same as above, only checking if we are on the last page, and then generating the "Next"
    if ($pagenum != $last) {
        $next = $pagenum + 1;
        $paginationCtrls .= ' &nbsp; &nbsp; <a href="?seccion=paginatormysqliainc&pn='.$next.'">Next</a> ';
    }
}

				echo AUDITORIAS_JOIN;
				echo '<a class="tooltip2" href="#"><i class="fa fa-exclamation fa-2x" style="color:#1A237E;"></i>';
					echo '<span class="custom warning">';
						echo '<img src="images/Warning.png" alt="Help" title="Help" height="48" width="48" />';
						echo '<em>';
						echo ATENCION;
						echo '</em>';
						echo AUDITORIAS_JOIN_HELP;
					echo '</span>';
				echo '</a>';
$list = '';
while($row = mysqli_fetch_array($query, MYSQLI_ASSOC)){
	$id=$row["id"];
	$ai=$row["ai"];
	$numhoja=$row["numhoja"];
	$codhoja=$row["codhoja"];
	$descripcion=$row["descripcion"];
	$fecha=$row["fecha"];
	$docum=$row["docum"];
	$abiertopor=$row["abiertopor"];
	$afectaa=$row["afectaa"];
	$causas=$row["causas"];
	$acciones=$row["acciones"];
	$plazo=$row["plazo"];
	$cierresparc=$row["cierresparc"];
	$eficacia=$row["eficacia"];
	$cerradofecha=$row["cerradofecha"];
	$desviacion=$row["desviacion"];
	$visible=$row["visible"];
	//$id=$row["id"];
	$ai=$row["ai"];
	$Fecha=$row["Fecha"];
	$AreaAuditada=$row["AreaAuditada"];
	$Documentacion=$row["Documentacion"];
	$Auditor=$row["Auditor"];
	$ObjetoAuditoria=$row["ObjetoAuditoria"];
	$Resultado=$row["Resultado"];
	


	$list .= '

	
			<table class="sortable">
                <tbody>
                <tr>
					<th style="width:2%">Id</th>
					<th style="width:10%">' . AUDITORIAS_AI . '</th>
					
					
					<th style="width:2%"><a href="#" title="' . MENU_ALT_ADMINISTRAR_AINFORMES . '">
						<i class="fa fa-edit fa-2x" style="color:#1A237E;"></i>
					</th>

					<th style="width:2%">
						<a href="#" title="' . AINFORMES_IMPRIMIR . '">
						<i class="fa fa-print fa-2x" style="color:#1A237E;"></i>
					</th>
					
					
					<th style="width:30%">' . AUDITORIAS_HOJA . '</th>
					
					<th style="width:2%">
						<a href="#" title="' . NCS_EDITAR_NC . '">
						<i class="fa fa-edit fa-2x" style="color:#9fff30;"></i>
					</th>

					<th style="width:2%">
						<a href="#" title="' . NCS_IMPRIMIR . '">
						<i class="fa fa-print fa-2x" style="color:#9fff30;"></i>
					</th>                
                </tr>
				
				
				<tr>
					<td style="width: 50px;">' . $id . '</td>
					
    <!--*************************************Tooltip*************************Tooltip*********************-->
	
					<td style="width: 200px;">
						<a href="?seccion=auditorias_print&amp;aktion=print_id&amp;id=' . $ai . '" alt="Image Tooltip" rel="tooltip" content="
						<table class=print2>
								<tr>
									<th>' . AUDITORIAS_AUDITORIA . ' </th>
									<th>' . FECHA . '</th>
									<th>' . AINFORMES_AREA_AUDITADA . '</th>
									<th></th>
								</tr>
								<tr>
										<td>' . $ai . '</td><td>' . $Fecha . '</td><td colspan=2>' . $AreaAuditada . '</td>
								</tr>
								<tr>
									<th colspan=2>' . DOCUMENTACION . '</th>
									<th colspan=2>' . AUDITORIAS_AUDITOR . '</th>
								</tr>
								<tr>
										<td colspan=2>' . $Documentacion . '</td><td colspan=2>' . $Auditor . '</td></tr>
								<tr>
									<th colspan=2>' . AINFORMES_OBJETO . '</th>
									<th>' . RESULTADO . '</th>
								</tr>
								<tr>
										<td colspan=2>' . $ObjetoAuditoria . '</td><td colspan=2>' . $Resultado . '</td>
								</tr>
							</td>
						</table>">' . $ai . '</a>

    <!--*************************************End-Tooltip*************************End-Tooltip*********************-->						

				
				
                    <td style="width: 50px;">
						<a href="?seccion=auditorias_admin&amp;aktion=change_id&amp;id=' . $id . '" title="' . AINFORMES_EDITAR . ' - ' . $ai . '">
							<i class="fa fa-edit fa-2x" style="color:#1A237E;"></i>
						</a>
					</td>
                    <td>
						<div style="width: 5%;">
						<a href="?seccion=auditorias_print&amp;aktion=print_id&amp;id=' . $id . '" title="' . AINFORMES_IMPRIMIR . ' - ' . $ai . '">
							<i class="fa fa-print fa-2x" style="color:#1A237E;"></i>
						</a>
						</div>
					</td>
            
    <!--*************************************Tooltip*************************Tooltip*********************-->
					<td>			
						<a href="index.php?seccion=ncs_print&amp;aktion=print_id&amp;id=' . $id . '" alt="Image Tooltip" rel="tooltip" content="
						<table class=print2>
							<tr>
								<th>' .NCS_NUMERO . '</th><th>' .FECHA . '</th>
							</tr>
							<tr>
									<td>' . $numhoja . '</td><td>' . $fecha . '</td>
							</tr>
							<tr>
								<th>' .AUDITORIAS_NUMERO_AUDITORIA . '</th><th>' .DOCUMENTACION . '</th>
							</tr>
							<tr>
									<td>' . $ai . '</td><td>' . $docum . '</td>
							</tr>
							<tr>
								<th>' .NCS_ABIERTOPOR . '</th><th>' .NCS_AFECTAA . '</th>
							</tr>
							<tr>
									<td>' . $abiertopor . '</td><td>' . $afectaa . '</td>
							</tr>
							<tr>
								<th>' .NCS_CAUSAS . '</th><th>' .NCS_ACCIONES . '</th>
							</tr>
							<tr>
									<td>' . $causas . '</td><td>' . $acciones . '</td>
							</tr>
							<tr>
								<th>' .NCS_PLAZO . '</th><th>' .NCS_CIERRE_PARCIAL . '</th>
							</tr>
							<tr>
									<td>' . $plazo . '</td><td>' . $cierresparc . '</td>
							</tr>      
							<tr>
								<th>' .NCS_EFICACIA . '</th><th>' .NCS_FECHACIERRE . '</th>
							</tr>
							<tr>
									<td>' . $eficacia . '</td><td>' . $cerradofecha . '</td>
							</tr>
							<tr>
								<th>' .NCS_DESVIACION . '</th><th>' .DESCRIPCION . '</th>
							</tr>
							<tr>
									<td>' . $desviacion . '</td><td><span class=spanred>' . $descripcion . '</span></td>
							</tr>
						</table>"><span style="color: #9fff30; font-weight: bold;">' . $numhoja . '</span></a>
					
					</td>
					
    <!--*************************************End-Tooltip*************************End-Tooltip*********************-->
					
					<td>
						<a href="?seccion=ncs_admin&amp;aktion=change_id&amp;id=' . $id . '" title="' .NCS_EDITAR_NC . ' - ' . $numhoja . '">              
						<i class="fa fa-edit fa-2x" style="color:#9fff30;"></i></a>
					
					</td>
					<td>
						<a href="?seccion=ncs_print&amp;aktion=print_id&amp;id=' . $id . '" title="' .NCS_IMPRIMIR . ' - ' . $numhoja . '">
						<i class="fa fa-print fa-2x" style="color:#9fff30;"></i></a>
					</td>					

				</tr>
				</tbody>
			</table>
			<br /><br />
						
			';
			
			
			
			
			
			
			

}
// Close your database connection
mysqli_close($mysqli);
?>
<!DOCTYPE html>
<html>
<head>
<style type="text/css">
body{ font-family:"Trebuchet MS", Arial, Helvetica, sans-serif;}
div#pagination_controls{font-size:21px;}
div#pagination_controls > a{ color:#06F; }
div#pagination_controls > a:visited{ color:#06F; }
</style>
</head>
<body>
<div>
  <h2><?php echo $textline1; ?> Paged</h2>
  <p><?php echo $textline2; ?></p>
  <p><?php echo $list; ?></p>
  <div id="pagination_controls"><?php echo $paginationCtrls; ?></div>
</div>
</body>
</html>