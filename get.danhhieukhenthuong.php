<?php
require_once('header_none.php');
$danhhieukhenthuong = new DanhHieuKhenThuong();
$id = isset($_GET['id']) ? $_GET['id'] : '';
$act = isset($_GET['act']) ? $_GET['act'] : '';
if($act == 'edit'){
	$danhhieu->id = $id; $cv = $danhhieu->get_one();
	$arr = array(
		'id' => $id,
		'act' => $act,
		'ten' => $cv['ten']
	);
	echo json_encode($arr);
}

if($act == 'del'){
	$danhhieu->id = $id;
	if($danhhieu->delete()){
		transfers_to('danhhieu.html?msg=Xóa thành công!');
	}
}

?>