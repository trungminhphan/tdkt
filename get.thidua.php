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

if($act == 'xetduyet_1'){
	$arr = array(
		'id' => $id,
		'act' => $act,
		'id_nam' => strval($td['id_nam']),
		't' => isset($td['xetduyet_1']['t']) ? intval($td['xetduyet_1']['t']) : 0,
		'id_danhhieu' => (isset($td['xetduyet_1']['id_danhhieu']) && $td['xetduyet_1']['id_danhhieu']) ? strval($td['xetduyet_1']['id_danhhieu']) : strval($td['id_danhhieu']),
		'noidung' => isset($td['xetduyet_1']['noidung']) ? $td['xetduyet_1']['noidung'] : ''
	);
	echo json_encode($arr);
}

if($act == 'xetduyet_2'){
	$arr = array(
		'id' => $id,
		'act' => $act,
		'id_nam' => strval($td['id_nam']),
		't' => isset($td['xetduyet_2']['t']) ? intval($td['xetduyet_2']['t']) : 0,
		'id_danhhieu' => (isset($td['xetduyet_2']['id_danhhieu']) && $td['xetduyet_2']['id_danhhieu']) ? strval($td['xetduyet_2']['id_danhhieu']) : strval($td['xetduyet_1']['id_danhhieu']),
		'noidung' => isset($td['xetduyet_2']['noidung']) ? $td['xetduyet_2']['noidung'] : ''
	);
	echo json_encode($arr);
}

if($act == 'xetduyet_3'){
	$arr = array(
		'id' => $id,
		'act' => $act,
		'id_nam' => strval($td['id_nam']),
		't' => isset($td['xetduyet_3']['t']) ? intval($td['xetduyet_3']['t']) : 0,
		'id_danhhieu' => (isset($td['xetduyet_3']['id_danhhieu']) && $td['xetduyet_3']['id_danhhieu']) ? strval($td['xetduyet_3']['id_danhhieu']) : strval($td['xetduyet_2']['id_danhhieu']),
		'noidung' => isset($td['xetduyet_3']['noidung']) ? $td['xetduyet_3']['noidung'] : ''
	);
	echo json_encode($arr);
}

if($act == 'del'){
	if($thidua->delete()) transfers_to('thidua.html?msg=Xóa thành công');
}
?>