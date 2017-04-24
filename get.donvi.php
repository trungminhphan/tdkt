<?php
require_once('header_none.php');
$id = isset($_GET['id']) ? $_GET['id'] : '';
$act = isset($_GET['act']) ? $_GET['act'] : '';
$donvi = new DonVi();
$donvi->id = $id; $dv = $donvi->get_one();

if($act == 'del'){
	$arr = array(
		'id' => $id,
		'act' => $act
	);
	echo json_encode($arr);
}

if($act == 'edit'){
	$arr = array(
		'id' => $id,
		'act' => $act,
		'ten' => $dv['ten'],
		'id_parent' => strval($dv['id_parent']),
		'diachi' => $dv['diachi'],
		'dienthoai' => $dv['dienthoai'],
		'thongtinkhac' => $dv['thongtinkhac']
	);
	echo json_encode($arr);
}

?>