<?php
require_once('header_none.php');
$sangkienkinhnghiem = new SangKienKinhNghiem();
$id = isset($_GET['id']) ? $_GET['id'] : '';
$act = isset($_GET['act']) ? $_GET['act'] : '';

if($act == 'edit'){
	$sangkienkinhnghiem->id = $id; $sk = $sangkienkinhnghiem->get_one();
	$arr_nhansu = array();
	if(isset($sk['nhansu']) && $sk['nhansu']){
		foreach($sk['nhansu'] as $ns){
			$arr_nhansu[] = $ns['id_nhansu'] .'/'.$ns['id_donvi'];
		}
	}
	$arr = array(
		'id' => $id,
		'act' => $act,
		'ten' => $sk['ten'],
		'id_nam' => strval($sk['id_nam']),
		'nhansu' => $arr_nhansu
	);
	echo json_encode($arr);
}

if($act == 'check'){
	$sangkienkinhnghiem->id = $id; $sk = $sangkienkinhnghiem->get_one();
	$arr = array(
		'id' => $id,
		'act' => $act
	);
	echo json_encode($arr);
}

if($act == 'del'){
	$sangkienkinhnghiem->id = $id;
	if($sangkienkinhnghiem->delete()){
		transfers_to('sangkienkinhnghiem.html?msg=Xóa thành công');
	}
}
?>