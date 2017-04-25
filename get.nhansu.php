<?php
require_once('header_none.php');
$nhansu = new NhanSu();
$id = isset($_GET['id']) ? $_GET['id'] : '';
$act = isset($_GET['act']) ? $_GET['act'] : '';

if($act == 'del'){
	$nhansu->id = $id;
	if($nhansu->delete()) transfers_to('nhansu.html?msg=Xoá thành công');
	else transfers_to('nhansu.html?msg=Không thể xoá, ràng buộc dữ liệu.');
}

if($act == 'edit'){
	$nhansu->id = $id; $ns = $nhansu->get_one();
	$arr = array(
		'id' => $id,
		'act' => $act,
		'hoten' => $ns['hoten'],
		'bidanh' => $ns['bidanh'],
		'ngaysinh' => $ns['ngaysinh'] ? date("d/m/Y", $ns['ngaysinh']->sec) : '',
		'gioitinh' => $ns['gioitinh'],
		'nguyenquan' => $ns['nguyenquan'],
		'cmnd' => $ns['cmnd'],
		'sodienthoai' => $ns['sodienthoai'],
		'id_donvi' => strval($ns['donvi'][0]['id_donvi']),
		'id_chucvu' => strval($ns['donvi'][0]['id_chucvu']),
		'ngayquyetdinh' => $ns['donvi'][0]['ngayquyetdinh'] ? date("d/m/Y", $ns['donvi'][0]['ngayquyetdinh']->sec) : ''
 	);
	echo json_encode($arr);
}

if($act == 'chuyencoquan'){
	$nhansu->id = $id; $ns = $nhansu->get_one();
	$arr = array(
		'id' => $id,
		'act' => $act,
 	);
	echo json_encode($arr);
}
?>