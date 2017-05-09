<?php
require_once('header_none.php');
$sangkienkinhnghiem = new SangKienKinhNghiem();
$id = isset($_POST['id']) ? $_POST['id'] : '';
$id_nam = isset($_POST['id_nam']) ? $_POST['id_nam'] : '';
$act = isset($_POST['act']) ? $_POST['act'] : '';
$url = isset($_POST['url']) ? $_POST['url'] : '';
$ten = isset($_POST['ten']) ? $_POST['ten'] : '';
$id_user = $users->get_userid();
$arr_nhansu = array();
$id_nhansu = isset($_POST['id_nhansu']) ? $_POST['id_nhansu'] : '';
if($id_nhansu){
	foreach($id_nhansu as $key => $value){
		$a = explode("/", $value);
		array_push($arr_nhansu, array('id_nhansu' => new MongoId($a[0]), 'id_donvi' => new MongoId($a[1])));
	}
}
$sangkienkinhnghiem->id_nam = $id_nam;
$sangkienkinhnghiem->ten = $ten;
$sangkienkinhnghiem->nhansu = $arr_nhansu;
$sangkienkinhnghiem->id_user_regis = $id_user;
$l = explode("?", $url); $url = $l[0];

if($act == 'edit'){
	$sangkienkinhnghiem->id = $id;
	if($sangkienkinhnghiem->edit()) {
		if($url) transfers_to($url . '?msg=Chỉnh sửa thành công.');
		else transfers_to('sangkienkinhnghiem.htmlmsg=Chỉnh sửa thành công!');
	}
} else if($act == 'check'){ 
	$sangkienkinhnghiem->id = $id;
	$xetduyet = isset($_POST['xetduyet']) ? $_POST['xetduyet'] : 0;
	$noidung = isset($_POST['noidung']) ? $_POST['noidung'] : '';
	$sangkienkinhnghiem->xetduyet = $xetduyet;
	$sangkienkinhnghiem->noidung = $noidung;
	$sangkienkinhnghiem->id_user_check = $id_user;
	if($sangkienkinhnghiem->check()) {
		if($url) transfers_to($url . '?msg=Xét duyệt thành công.');
		else transfers_to('sangkienkinhnghiem.htmlmsg=Xét duyệt thành công!');
	}
} else {
	if($sangkienkinhnghiem->insert()){
		if($url) transfers_to($url . '?msg=Thêm thành công.');
		else transfers_to('sangkienkinhnghiem.htmlmsg=Thêm mới thành công!');
	}
}
?>