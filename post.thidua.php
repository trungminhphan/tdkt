<?php
require_once('header_none.php');
$thidua = new ThiDua();
$id = isset($_POST['id']) ? $_POST['id'] : '';
$act = isset($_POST['act']) ? $_POST['act'] : '';
$url = isset($_POST['url']) ? $_POST['url'] : '';
$l = explode("?", $url); $url = $l[0];
$id_nam = isset($_POST['id_nam']) ? $_POST['id_nam'] : '';
$id_danhhieu = isset($_POST['id_danhhieu']) ? $_POST['id_danhhieu'] : '';
$id_nhansu = isset($_POST['id_nhansu']) ? $_POST['id_nhansu'] : '';
$thidua->id_nam = $id_nam; $thidua->id_danhhieu = $id_danhhieu;
$id_user = $users->get_userid();
$msg = '';
if($act == 'register'){
	if($id_nhansu){
		foreach($id_nhansu as $key => $value){
			$a = explode("/", $value);
			$arr_nhansu = array('id_nhansu' => new MongoId($a[0]), 'id_donvi' => new MongoId($a[1]));
			$thidua->nhansu = $arr_nhansu;
			if(!$thidua->check_exists()){
				$thidua->insert();
			} else {
				$msg = 'Một số nhân sự bị đã đăng ký rồi';
			}
		}
	}
	if($url) transfers_to($url . '?msg=Cập nhật thành công.' . $msg);
	else transfers_to('thidua.html?msg=Cập nhật thành công!' . $msg);
}

if($act == 'edit'){
	$thidua->id = $id;
	if($thidua->edit()){
		if($url) transfers_to($url . '?msg=Cập nhật thành công.');
		else transfers_to('thidua.html?msg=Cập nhật thành công!');
	} else {
		echo 'Không thể chỉnh sửa';
	}
	/*if($id_nhansu){
		$a = explode("/", $id_nhansu[0]);
		$arr_nhansu = array('id_nhansu' => new MongoId($a[0]), 'id_donvi' => new MongoId($a[1]));
		$thidua->nhansu = $arr_nhansu;
		if($thidua->edit()){
			if($url) transfers_to($url . '?msg=Cập nhật thành công.');
			else transfers_to('thidua.html?msg=Cập nhật thành công!');
		} else {
			echo 'Không thể chỉnh sửa';
		}
	} else {
		echo 'Không có nhân sự';
	}*/
}

//arr = (t, id_danhhieu noidung, date_post, id_user)
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
		else transfers_to('thidua_1.htmlmsg=Xét duyệt thành công!');
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
		else transfers_to('thidua_2.htmlmsg=Xét duyệt thành công!');
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
		else transfers_to('thidua_3.htmlmsg=Xét duyệt thành công!');
	}	
}
?>