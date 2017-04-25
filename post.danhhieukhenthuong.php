<?php
require_once('header_none.php');
$danhhieukhenthuong = new DanhHieuKhenThuong();
$id = isset($_POST['id']) ? $_POST['id'] : '';
$act = isset($_POST['act']) ? $_POST['act'] : '';
$url = isset($_POST['url']) ? $_POST['url'] : '';
$ten = isset($_POST['ten']) ? $_POST['ten'] : '';
$danhhieukhenthuong->ten = $ten;

$l = explode("?", $url); $url = $l[0];
if($act == 'edit'){
	$danhhieukhenthuong->id = $id;
	if($danhhieukhenthuong->edit()) {
		if($url) transfers_to($url . '?msg=Chỉnh sửa thành công.');
		else transfers_to('danhhieu.htmlmsg=Chỉnh sửa thành công!');
	}
} else {
	if($danhhieukhenthuong->insert()){
		if($url) transfers_to($url . '?msg=Thêm thành công.');
		else transfers_to('danhhieu.htmlmsg=Thêm mới thành công!');
	}
}
?>