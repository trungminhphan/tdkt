<?php
require_once('header_none.php');
$chucvu = new ChucVu();
$id = isset($_GET['id']) ? $_GET['id'] : '';
$act = isset($_GET['act']) ? $_GET['act'] : '';

if($act == 'edit'){
	$chucvu->id = $id; $cv = $chucvu->get_one();
	$arr = array(
		'id' => $id,
		'act' => $act,
		'ten' => $cv['ten']
	);
	echo json_encode($arr);
}

if($act == 'del'){
	$chucvu->id = $id;
	if($chucvu->delete()){
		transfers_to('chucvu.html?msg=Xóa thành công!');
	}
}

?>