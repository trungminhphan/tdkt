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
	if($thidua->insert()){
		if($url) transfers_to($url . '?msg=Cập nhật thành công.');
		else transfers_to('thiduatapthe.htmlmsg=Cập nhật thành công!');
	}
}

if($act == 'edit'){
	$thidua->id = $id;
	
	if($thidua->edit()){
		if($url) transfers_to($url . '?msg=Cập nhật thành công.');
		else transfers_to('sangkienkinhnghiem.htmlmsg=Cập nhật thành công!');
	}

}
?>