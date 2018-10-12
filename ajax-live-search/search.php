<?php
require_once '../includes/mysqli.php';

$arr = array();

if (!empty($_POST['keywords'])) {
	$keywords = $mysqli->real_escape_string($_POST['keywords']);
	$sql = "SELECT id, link FROM enlaces WHERE titulo LIKE '%".$keywords."%'";
	$result = $mysqli->query($sql) or die($mysqli->error);
	if ($result->num_rows > 0) {
		while ($obj = $result->fetch_object()) {
			$arr[] = array('id' => $obj->id, 'title' => $obj->link);
		}
	}
}
echo json_encode($arr);