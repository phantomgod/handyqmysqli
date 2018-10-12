<?php
require_once '../includes/mysqli.php';

$arr = array();

if (!empty($_POST['keywords'])) {
	$keywords = $mysqli->real_escape_string($_POST['keywords']);
	$sql = "SELECT id, fecha, ai, auditor1, auditor2, auditor3, docum, obstrat, obscal, obsalmac, obscompras, obsformac, obsdocum, obslegio FROM aisgc WHERE fecha LIKE '%".$keywords."%' OR 
auditor1 LIKE '%".$keywords."%' OR auditor2 LIKE '%".$keywords."%' OR auditor3 LIKE '%".$keywords."%' OR docum LIKE '%".$keywords."%' OR obstrat LIKE '%".$keywords."%' OR obscal LIKE '%".$keywords."%' OR obsalmac LIKE '%".$keywords."%' OR obscompras LIKE '%".$keywords."%' OR obsformac LIKE '%".$keywords."%' OR obsdocum LIKE '%".$keywords."%' OR obslegio LIKE '%".$keywords."%'";
	$result = $mysqli->query($sql) or die($mysqli->error);
	if ($result->num_rows > 0) {
		while ($obj = $result->fetch_object()) {
			$arr[] = array('id' => $obj->id, 'fecha'=>$obj->fecha, 'ai'=>$obj->ai, 'auditor1'=>$obj->auditor1, 'auditor2'=>$obj->auditor2, 'auditor3'=>$obj->auditor3, 'docum'=>$obj->docum, 'obstrat'=>$obj->obstrat, 'obscal'=>$obj->obscal, 'obsalmac'=>$obj->obsalmac, 'obscompras'=>$obj->obscompras, 'obsformac'=>$obj->obsformac, 'obsdocum'=>$obj->obsdocum, 'obslegio'=>$obj->obslegio);
		}
	}
}
echo json_encode($arr);