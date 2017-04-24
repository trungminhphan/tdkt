<?php
require_once('header_none.php');
$chucvu = new ChucVu();
$id = isset($_POST['id']) ? $_POST['id'] : '';
$act = isset($_POST['act']) ? $_POST['act'] : '';
$url = isset($_POST['url']) ? $_POST['url'] : '';
$ten = isset($_POST['ten']) ? $_POST['ten'] : '';
$chucvu->ten = $ten;
$l = explode("?", $url); $url = $l[0];

if($act == 'edit'){
	$chucvu->id = $id;
	if($chucvu->edit()) {
		if($url) transfers_to($url . '?msg=Chỉnh sửa thành công.');
		else transfers_to('chucvu.htmlmsg=Chỉnh sửa thành công!');
	}
} else {
	if($chucvu->insert()){
		if($url) transfers_to($url . '?msg=Thêm thành công.');
		else transfers_to('chucvu.htmlmsg=Thêm mới thành công!');
	}
}
?>