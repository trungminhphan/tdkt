<?php
require_once('header_none.php');
$nhansu = new NhanSu();
$id = isset($_POST['id']) ? $_POST['id'] : '';
$act = isset($_POST['act']) ? $_POST['act'] : '';
$url = isset($_POST['url']) ? $_POST['url'] : '';
$hoten = isset($_POST['hoten']) ? $_POST['hoten'] : '';
$bidanh = isset($_POST['bidanh']) ? $_POST['bidanh'] : '';
$ngaysinh = isset($_POST['ngaysinh']) ? $_POST['ngaysinh'] : '';
$gioitinh = isset($_POST['gioitinh']) ? $_POST['gioitinh'] : '';
$nguyenquan = isset($_POST['nguyenquan']) ? $_POST['nguyenquan'] : '';
$cmnd = isset($_POST['cmnd']) ? $_POST['cmnd'] : '';
$sodienthoai = isset($_POST['sodienthoai']) ? $_POST['sodienthoai'] : '';
$id_donvi = isset($_POST['id_donvi']) ? $_POST['id_donvi'] : '';
$id_chucvu = isset($_POST['id_chucvu']) ? $_POST['id_chucvu'] : '';
$ngayquyetdinh = isset($_POST['ngayquyetdinh']) ? $_POST['ngayquyetdinh'] : '';
$arr_donvi = array(
	'_id' => new MongoId(),
	'id_donvi' => $id_donvi ? new MongoId($id_donvi) : '',
	'id_chucvu' => $id_chucvu ? new MongoId($id_chucvu) : '',
	'ngayquyetdinh' => $ngayquyetdinh ? new MongoDate(convert_date_yyyy_mm_dd($ngayquyetdinh)) : ''
);
$l = explode("?", $url); $url = $l[0];
if($act == 'edit'){
	$nhansu->id = $id;
	$nhansu->hoten = $hoten;
	$nhansu->bidanh = $bidanh;
	$nhansu->ngaysinh = $ngaysinh ? new MongoDate(convert_date_yyyy_mm_dd($ngaysinh)) : '';
	$nhansu->gioitinh = $gioitinh;
	$nhansu->nguyenquan = $nguyenquan;
	$nhansu->cmnd = $cmnd;
	$nhansu->sodienthoai = $sodienthoai;
	if($nhansu->edit()){
		if($url) transfers_to($url.'?msg=Thêm thành công.');
		else transfers_to('donvi.html?msg=Thêm mới thành công!');
	}
} else if($act == 'del'){

} else if($act == 'push'){

} else {
	//insert
	$nhansu->hoten = $hoten;
	$nhansu->bidanh = $bidanh;
	$nhansu->ngaysinh = $ngaysinh ? new MongoDate(convert_date_yyyy_mm_dd($ngaysinh)) : '';
	$nhansu->gioitinh = $gioitinh;
	$nhansu->nguyenquan = $nguyenquan;
	$nhansu->cmnd = $cmnd;
	$nhansu->sodienthoai = $sodienthoai;
	$nhansu->donvi = $arr_donvi;
	if($nhansu->insert()){
		if($url) transfers_to($url . '?msg=Thêm thành công.');
		else transfers_to('donvi.html?msg=Thêm mới thành công!');
	}
}
?>