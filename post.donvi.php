<?php
require_once('header_none.php');
$donvi = new DonVi();
$id = isset($_POST['id']) ? $_POST['id'] : '';
$act = isset($_POST['act']) ? $_POST['act'] : '';
$url = isset($_POST['url']) ? $_POST['url'] : '';
$ten = isset($_POST['ten']) ? $_POST['ten'] : '';
$id_parent = isset($_POST['id_parent']) ? $_POST['id_parent'] : '';
$diachi = isset($_POST['diachi']) ? $_POST['diachi'] : '';
$dienthoai = isset($_POST['dienthoai']) ? $_POST['dienthoai'] : '';
$thongtinkhac = isset($_POST['thongtinkhac']) ? $_POST['thongtinkhac'] : '';

$donvi->ten = $ten;
$donvi->id_parent = $id_parent;
$donvi->diachi = $diachi;
$donvi->dienthoai = $dienthoai;
$donvi->thongtinkhac = $thongtinkhac;

$l = explode("?", $url); $url = $l[0];
if($act == 'edit'){
	$donvi->id = $id;
	if($donvi->edit()) {
		if($url) transfers_to($url . '?msg=Chỉnh sửa thành công.');
		else transfers_to('donvi.htmlmsg=Chỉnh sửa thành công!');
	}
} else if($act == 'del'){
	$donvi->id = $id;
	if($donvi->delete()){
		if($url) transfers_to($url . '?msg=Xoá thành công.');
		else transfers_to('donvi.htmlmsg=Xoá thành công!');
	}
} else {
	if($donvi->insert()){
		if($url) transfers_to($url . '?msg=Thêm thành công.');
		else transfers_to('donvi.htmlmsg=Thêm mới thành công!');
	}
}
?>