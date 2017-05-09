<?php
require_once('header.php');
check_permis($users->is_admin());
$msg = isset($_GET['msg']) ? $_GET['msg'] : '';
$sangkienkinhnghiem = new SangKienKinhNghiem();$nhansu = new NhanSu();$nam = new Nam();
$sangkienkinhnghiem_list = $sangkienkinhnghiem->get_all_list();
$nhansu_list = $nhansu->get_all_list();
$nam_list = $nam->get_all_list();
?>
<link href="assets/plugins/select2/dist/css/select2.min.css" rel="stylesheet" />
<link href="assets/plugins/gritter/css/jquery.gritter.css" rel="stylesheet" />
<link href="assets/plugins/DataTables/media/css/dataTables.bootstrap.min.css" rel="stylesheet" />
<link href="assets/plugins/DataTables/extensions/Responsive/css/responsive.bootstrap.min.css" rel="stylesheet" />
<div class="row">
    <div class="col-md-12">
        <div class="panel panel-danger">
            <div class="panel-heading">
                <div class="panel-heading-btn">
                    <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
                    <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i class="fa fa-times"></i></a>
                </div>
                <h4 class="panel-title"><i class="fa fa-list"></i> Thi đua</h4>
            </div>
            <div class="panel-body">
            	<a href="#modal-thidua" data-toggle="modal" class="btn btn-primary m-10 themthidua"><i class="fa fa-plus"></i> Thêm mới</a>
            </div>
        </div>
    </div>
</div>

<div style="clear:both;"></div>
<?php require_once('footer.php'); ?>
<!-- ================== BEGIN PAGE LEVEL JS ================== -->
<script src="assets/plugins/gritter/js/jquery.gritter.js"></script>
<script src="assets/plugins/parsley/dist/parsley.js"></script>
<script src="assets/plugins/DataTables/media/js/jquery.dataTables.js"></script>
<script src="assets/plugins/DataTables/media/js/dataTables.bootstrap.min.js"></script>
<script src="assets/plugins/DataTables/extensions/Responsive/js/dataTables.responsive.min.js"></script>
<script src="assets/plugins/select2/dist/js/select2.min.js"></script>
<script src="assets/js/table-manage-default.demo.min.js"></script>
<script src="assets/js/apps.min.js"></script>
<script>
    $(document).ready(function() {
        <?php if(isset($msg) && $msg): ?>
        $.gritter.add({
            title:"Thông báo !",
            text:"<?php echo $msg; ?>",
            image:"assets/img/login.png",
            sticky:false,
            time:""
        });
        <?php endif; ?> 
        $(".select2").select2();
        App.init();TableManageDefault.init();
    });
</script>