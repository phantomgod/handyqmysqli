<?php
require_once '../includes/mysqli.php';

$arr = array();

if (!empty($_POST['keywords'])) {
	$keywords = $mysqli->real_escape_string($_POST['keywords']);
	$sql = "SELECT id, ai, numhoja, descripcion, docum, abiertopor, afectaa, causas, acciones FROM hojasdemejora WHERE ai LIKE '%".$keywords."%' OR numhoja LIKE '%".$keywords."%' OR descripcion LIKE '%".$keywords."%' OR docum LIKE '%".$keywords."%' OR abiertopor LIKE '%".$keywords."%' OR afectaa LIKE '%".$keywords."%' OR causas LIKE '%".$keywords."%' OR acciones LIKE '%".$keywords."%' ";
	$result = $mysqli->query($sql) or die($mysqli->error);
	if ($result->num_rows > 0) {
		while ($obj = $result->fetch_object()) {
			$arr[] = array('id' => $obj->id, 'numhoja' => $obj->numhoja, 'descripcion' => $obj->descripcion, 'docum' => $obj->docum, 'abiertopor' => $obj->abiertopor, 'afectaa' => $obj->afectaa, 'causas' => $obj->causas, 'acciones' => $obj->acciones);
		}
	}
}
echo json_encode($arr);