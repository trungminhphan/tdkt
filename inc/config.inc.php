<?php
	//DEFINE QUYEN CHO TUNG NGUOI
	define("ADMIN", 1);
	define("FACTORY", 2);
	define("RETAIL", 4);
	define("FARMER", 8);
	define("PACKER", 16);

	$target_files = 'uploads/files/';
	$target_files_regis = 'uploads_regis/';
	$folder_regis = '../lanhsuthutuc/';
	$target_images = 'uploads/images/';
	$files_extension = array('pdf', 'zip', 'rar', 'doc', 'docx', 'xls', 'png', 'gif', 'jpg', 'jpeg', 'bmp', 'rtf');
	$images_extension = array('png', 'gif', 'jpg', 'jpeg', 'bmp');
	$valid_formats = array("jpg", "png", "gif", "zip", "bmp", "doc", "docx", "pdf", "xls", "xlsx", "ppt", "pptx", 'zip', 'rar');
	$max_file_size = 50*1024*1024*1024; //50MB
	
	$arr_gioitinh = array('M' => 'Nam', 'F' => 'Nữ');
	$arr_dungdenngay = array('D' => 'Ngày', 'M' => 'Tháng', 'Y' => 'Năm');

	$link_frontend = 'http://103.7.41.160/anovafarm/traceweb';
?>