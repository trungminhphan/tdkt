<?php
require_once('header.php');
check_permis($users->is_admin());
$msg = isset($_GET['msg']) ? $_GET['msg'] : '';
$sangkienkinhnghiem = new SangKienKinhNghiem();$nhansu = new NhanSu();$nam = new Nam();$danhhieu = new DanhHieu();
$thidua = new ThiDua();
$sangkienkinhnghiem_list = $sangkienkinhnghiem->get_all_list();
$nhansu_list = $nhansu->get_all_list();
$nam_list = $nam->get_all_list();
$danhhieu_list = $danhhieu->get_all_list();
$thidua_list = $thidua->get_all_list_1();
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
                <h4 class="panel-title"><i class="fa fa-list"></i> Xét duyệt thi đua cá nhân vòng 1</h4>
            </div>
            <div class="panel-body">
                <table id="data-table" class="table table-striped table-bordered table-hovered">
                    <thead>
                        <tr>
                            <th>STT</th>
                            <th>Năm</th>
                            <th>Họ tên</th>
                            <th class="text-center">Danh hiệu đăng ký</th>
                            <th class="text-center">SKKN</th>
                            <th class="text-center">Danh hiệu vòng 1</th>
                            <th class="text-center">Xét duyệt</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                    if($thidua_list){
                        $i = 1;
                        foreach($thidua_list as $td){
                            $nhansu->id = $td['nhansu']['id_nhansu']; $ns = $nhansu->get_one();
                            $nam->id = $td['id_nam']; $n = $nam->get_one();
                            $danhhieu->id = $td['id_danhhieu']; $dh = $danhhieu->get_one();
                            $t = isset($td['xetduyet_1']['t']) ? $td['xetduyet_1']['t'] : 0;
                            $sangkienkinhnghiem->id_nam = $td['id_nam'];
                            $sangkienkinhnghiem->nhansu = $td['nhansu'];
                            if($sangkienkinhnghiem->check_skkn()){
                                $skkn = '<i class="fa fa-check-square text-primary"></i>';
                            } else { $skkn = '<i class="fa fa-times-circle text-danger"></i>'; }
                            if(isset($td['xetduyet_1']['id_danhhieu'])){
                                $danhhieu->id = $td['xetduyet_1']['id_danhhieu']; $dh1 = $danhhieu->get_one();
                                $danhhieu_1 = $dh1['ten'];
                            } else { $danhhieu_1 = ''; }
                            echo '<tr>';
                            echo '<td>'.$i.'</td>';
                            echo '<td>'.$n['ten'].'</td>';
                            echo '<td>'.$ns['hoten'].'</td>';
                            echo '<td class="text-center">'.$dh['ten'].'</td>';
                            echo '<td class="text-center">'.$skkn.'</td>';
                            echo '<td class="text-center">'.$danhhieu_1.'</td>';
                            echo '<td class="text-center"><a href="get.thidua.html?id='.$td['_id'].'&act=xetduyet_1#modal-xetduyet" data-toggle="modal" class="xetduyet">'.$arr_tinhtrang[$t].'</a></td>';
                            echo '</tr>'; $i++;
                        }
                    }
                    ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="modal-xetduyet">
    <form action="post.thidua.html" method="POST" class="form-horizontal" data-parsley-validate="true" name="congtyform">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h4 class="modal-title">XÉT DUYỆT ĐĂNG KÝ THI ĐUA CÁ NHÂN VÒNG 1</h4>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label class="col-md-3 control-label">Tình trạng</label>
                        <div class="col-md-3">
                            <input type="hidden" name="id" id="id" />
                            <input type="hidden" name="act" id="act" value="xetduyet_1" />
                            <input type="hidden" name="url" id="url" value="<?php echo $_SERVER['REQUEST_URI']; ?>">
                            <select name="xetduyet" id="xetduyet" class="select2" style="width:100%">
                                <?php
                                if($arr_tinhtrang){
                                    foreach($arr_tinhtrang as $key => $value){
                                       if($key > 0) echo '<option value="'.$key.'">'.$value.'</option>';
                                    }
                                }
                                ?>
                            </select>
                        </div>
                        <label class="col-md-3 control-label">Danh hiệu được duyệt</label>
                        <div class="col-md-3">
                            <select name="id_danhhieu" id="id_danhhieu" class="select2" style="width:100%">
                                <?php
                                if($danhhieu_list){
                                    foreach($danhhieu_list as $dh){
                                        echo '<option value="'.$dh['_id'].'">'.$dh['ten'].'</option>';
                                    }
                                }
                                ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label">Nội dung xử lý</label>
                        <div class="col-md-9">
                            <input type="text" name="noidung" id="noidung" value="" class="form-control"/>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <a href="#" class="btn btn-sm btn-white" data-dismiss="modal">Đóng</a>
                    <button type="submit" name="submit" id="submit" class="btn btn-sm btn-primary">Lưu</button>
                </div>
            </div>
        </div>
    </form>
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
        $(".xetduyet").click(function(){
            var _link = $(this).attr("href");
            $.getJSON(_link, function(data){
                $("#id").val(data.id);
                $("#id_danhhieu").val(data.id_danhhieu); $("#id_danhhieu").select2();
                $("#xetduyet").val(data.t); $("#xetduyet").select2();
                $("#noidung").val(data.noidung);
            });
        });
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