<?php
require_once('header_none.php');
$thidua = new ThiDua();
$id = isset($_GET['id']) ? $_GET['id'] : '';
$act = isset($_GET['act']) ? $_GET['act'] : '';
$thidua->id = $id; $td = $thidua->get_one();
if($act == 'edit'){
	$arr = array(
		'id' => $id,
		'act' => $act,
		'id_nam' => strval($td['id_nam']),
		'id_danhhieu' => strval($td['id_danhhieu']),
		'id_nhansu' => $td['nhansu']['id_nhansu'] .'/'.$td['nhansu']['id_donvi']
	);

	echo json_encode($arr);
}
?>