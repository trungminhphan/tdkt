<?php
require_once('header_none.php');
$nam = new Nam();
$id = isset($_POST['id']) ? $_POST['id'] : '';
$act = isset($_POST['act']) ? $_POST['act'] : '';
$url = isset($_POST['url']) ? $_POST['url'] : '';
$ten = isset($_POST['ten']) ? $_POST['ten'] : '';
$nam->ten = $ten;
$l = explode("?", $url); $url = $l[0];

if($act == 'edit'){
	$nam->id = $id;
	if($nam->edit()) {
		if($url) transfers_to($url . '?msg=Chỉnh sửa thành công.');
		else transfers_to('nam.htmlmsg=Chỉnh sửa thành công!');
	}
} else {
	if($nam->insert()){
		if($url) transfers_to($url . '?msg=Thêm thành công.');
		else transfers_to('nam.htmlmsg=Thêm mới thành công!');
	}
}
?>