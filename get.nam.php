<?php
require_once('header_none.php');
$nam = new Nam();
$id = isset($_GET['id']) ? $_GET['id'] : '';
$act = isset($_GET['act']) ? $_GET['act'] : '';

if($act == 'edit'){
	$nam->id = $id; $cv = $nam->get_one();
	$arr = array(
		'id' => $id,
		'act' => $act,
		'ten' => $cv['ten']
	);
	echo json_encode($arr);
}

if($act == 'del'){
	$nam->id = $id;
	if($nam->delete()){
		transfers_to('nam.html?msg=Xóa thành công!');
	}
}

?>