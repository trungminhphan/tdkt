<?php
require_once('header_none.php');
$thidua = new ThiDuaTapThe();
$id = isset($_POST['id']) ? $_POST['id'] : '';
$act = isset($_POST['act']) ? $_POST['act'] : '';
$url = isset($_POST['url']) ? $_POST['url'] : '';
$l = explode("?", $url); $url = $l[0];
$id_nam = isset($_POST['id_nam']) ? $_POST['id_nam'] : '';
$id_danhhieu = isset($_POST['id_danhhieu']) ? $_POST['id_danhhieu'] : '';
$id_donvi = isset($_POST['id_donvi']) ? $_POST['id_donvi'] : '';
$thidua->id_nam = $id_nam; $thidua->id_danhhieu = $id_danhhieu;
$thidua->id_donvi = $id_donvi;
if($act == 'register'){
	if($thidua->check_exists()){
		transfers_to('thiduatapthe.html?msg=Không thể thêm, đã đăng ký rồi!');
	} else {
		if($thidua->insert()){
			if($url) transfers_to($url . '?msg=Cập nhật thành công.');
			else transfers_to('thiduatapthe.html?msg=Cập nhật thành công!');
		}	
	}
	
}

if($act == 'edit'){
	$thidua->id = $id;
	if($thidua->edit()){
		if($url) transfers_to($url . '?msg=Cập nhật thành công.');
		else transfers_to('thiduatapthe.htmlmsg=Cập nhật thành công!');
	}
}

if($act == 'xetduyet_1'){
	$thidua->id = $id;
	$xetduyet = isset($_POST['xetduyet']) ? $_POST['xetduyet'] : 0;
	$noidung = isset($_POST['noidung']) ? $_POST['noidung'] : '';
	$arr_xetduyet = array(
		't' => intval($xetduyet),
		'id_danhhieu' => new MongoId($id_danhhieu),
		'noidung' => $noidung,
		'date_post' => new MongoDate(),
		'id_user' => new MongoId($id_user)
	);
	$thidua->xetduyet_1 = $arr_xetduyet;
	if($thidua->xetduyet_1()) {
		if($url) transfers_to($url . '?msg=Xét duyệt thành công.');
		else transfers_to('thiduatapthe_1.htmlmsg=Xét duyệt thành công!');
	}
}
if($act == 'xetduyet_2'){
	$thidua->id = $id;
	$xetduyet = isset($_POST['xetduyet']) ? $_POST['xetduyet'] : 0;
	$noidung = isset($_POST['noidung']) ? $_POST['noidung'] : '';
	$arr_xetduyet = array(
		't' => intval($xetduyet),
		'id_danhhieu' => new MongoId($id_danhhieu),
		'noidung' => $noidung,
		'date_post' => new MongoDate(),
		'id_user' => new MongoId($id_user)
	);
	$thidua->xetduyet_2 = $arr_xetduyet;
	if($thidua->xetduyet_2()) {
		if($url) transfers_to($url . '?msg=Xét duyệt thành công.');
		else transfers_to('thiduatapthe_2.htmlmsg=Xét duyệt thành công!');
	}
}
if($act == 'xetduyet_3'){
	$thidua->id = $id;
	$xetduyet = isset($_POST['xetduyet']) ? $_POST['xetduyet'] : 0;
	$noidung = isset($_POST['noidung']) ? $_POST['noidung'] : '';
	$arr_xetduyet = array(
		't' => intval($xetduyet),
		'id_danhhieu' => new MongoId($id_danhhieu),
		'noidung' => $noidung,
		'date_post' => new MongoDate(),
		'id_user' => new MongoId($id_user)
	);
	$thidua->xetduyet_3 = $arr_xetduyet;
	if($thidua->xetduyet_3()) {
		if($url) transfers_to($url . '?msg=Xét duyệt thành công.');
		else transfers_to('thiduatapthe_3.htmlmsg=Xét duyệt thành công!');
	}	
}
?>