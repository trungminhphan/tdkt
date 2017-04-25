<?php
require_once('header.php');
check_permis($users->is_admin());
$msg = isset($_GET['msg']) ? $_GET['msg'] : '';
$nhansu = new NhanSu();$donvi = new DonVi();$chucvu = new ChucVu();
$nhansu_list = $nhansu->get_all_list();
$donvi_list = $donvi->get_all_list(); $chucvu_list = $chucvu->get_all_list();
?>
<link href="assets/plugins/select2/dist/css/select2.min.css" rel="stylesheet" />
<link href="assets/plugins/gritter/css/jquery.gritter.css" rel="stylesheet" />
<link href="assets/plugins/DataTables/media/css/dataTables.bootstrap.min.css" rel="stylesheet" />
<link href="assets/plugins/DataTables/extensions/Responsive/css/responsive.bootstrap.min.css" rel="stylesheet" />
<link href="assets/plugins/bootstrap-datepicker/css/bootstrap-datepicker.css" rel="stylesheet" />
<link href="assets/plugins/bootstrap-datepicker/css/bootstrap-datepicker3.css" rel="stylesheet" />
<div class="row">
    <div class="col-md-12">
        <div class="panel panel-danger">
            <div class="panel-heading">
                <div class="panel-heading-btn">
                    <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
                    <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i class="fa fa-times"></i></a>
                </div>
                <h4 class="panel-title"><i class="fa fa-list"></i> Danh mục Nhân sự</h4>
            </div>
            <div class="panel-body">
                <a href="#modal-nhansu" data-toggle="modal" class="btn btn-primary m-10 themnhansu"><i class="fa fa-plus"></i> Thêm mới</a>
                <table id="data-table" class="table table-striped table-bordered table-hovered">
                    <thead>
                        <tr>
                            <th>STT</th>
                            <th>CMND</th>
                            <th>Họ tên</th>
                            <th>Ngày sinh</th>
                            <th>Giới tính</th>
                            <th>Chuyển cơ quan</th>
                            <th class="text-center"><i class="fa fa-trash"></i></th>
                            <th class="text-center"><i class="fa fa-pencil"></i></th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                    if($nhansu_list){
                        $i = 1;
                        foreach($nhansu_list as $ns){
                            echo '<tr>';
                            echo '<td>'.$i.'</td>';
                            echo '<td>'.$ns['cmnd'].'</td>';
                            echo '<td>'.$ns['hoten'].'</td>';
                            echo '<td>'.($ns['ngaysinh'] ? date("d/m/Y", $ns['ngaysinh']->sec) : '').'</td>';
                            echo '<td>'.$arr_gioitinh[$ns['gioitinh']].'</td>';
                            echo '<td class="text-center" style="width:50px;"><a href="get.nhansu.html?id='.$ns['_id'].'&act=chuyencoquan#modal-chuyencoquan" data-toggle="modal" class="chuyencoquan"><i class="fa fa-refresh"></i></a></td>';
                            echo '<td class="text-center"><a href="get.nhansu.html?id='.$ns['_id'].'&act=del" onclick="return confirm(\'Chắc chắn muốn xoá?\');"><i class="fa fa-trash"></i></a></td>';
                            echo '<td class="text-center"><a href="get.nhansu.html?id='.$ns['_id'].'&act=edit#modal-nhansu" data-toggle="modal" class="suanhansu"><i class="fa fa-pencil"></i></a></td>';
                            echo '</tr>';$i++;
                        }
                    }
                    ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="modal-chuyencoquan">
<form action="post.nhansu.html" method="POST" class="form-horizontal" data-parsley-validate="true" name="congtyform">
    <input type="hidden" name="id" id="id_chuyencoquan" />
    <input type="hidden" name="act" id="act_chuyencoquan" />
    <input type="hidden" name="url" id="url" value="<?php echo $_SERVER['REQUEST_URI']; ?>">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title">Thông tin cơ quan chuyển</h4>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label class="col-md-3 control-label">Đơn vị công tác</label>
                    <div class="col-md-9">
                    <select name="id_donvi" id="id_chucvu_chuyencoquan" class="select2" style="width:100%">
                        <option value="">Chọn đơn vị</option>
                        <?php
                        if($donvi_list){
                            $list_tree = iterator_to_array($donvi_list);
                            showCategories($list_tree);
                        }
                        ?>
                    </select>                       
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-3 control-label">Chức vụ</label>
                    <div class="col-md-3">
                        <select name="id_chucvu" id="id_chucvu_chuyencoquan" class="select2" style="width:100%">
                            <option value="">Chức vụ</option>
                            <?php
                            if($chucvu_list){
                                foreach ($chucvu_list as $cv) {
                                    echo '<option value="'.$cv['_id'].'">'.$cv['ten'].'</option>';
                                }
                            }
                            ?>
                        </select>                       
                    </div>
                    <label class="col-md-3 control-label">Ngày quyết định</label>
                    <div class="col-md-3">
                        <input type="text" name="ngayquyetdinh" id="ngayquyetdinh_chuyencoquan" value="<?php echo date("d/m/Y"); ?>" class="form-control ngaythangnam" data-date-format="dd/mm/yyyy" data-inputmask="'alias': 'date'" data-parsley-required="true" />
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

<div class="modal fade" id="modal-nhansu">
<form action="post.nhansu.html" method="POST" class="form-horizontal" data-parsley-validate="true" name="congtyform">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title">Thông tin Nhân sự</h4>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label class="col-md-3 control-label">Họ tên</label>
                    <div class="col-md-3">
                        <input type="hidden" name="id" id="id" />
                        <input type="hidden" name="act" id="act" />
                        <input type="hidden" name="url" id="url" value="<?php echo $_SERVER['REQUEST_URI']; ?>">
                        <input type="text" name="hoten" id="hoten" value="" class="form-control" data-parsley-required="true"/>
                    </div>
                    <label class="col-md-3 control-label">Bí danh</label>
                    <div class="col-md-3">
                        <input type="text" name="bidanh" id="bidanh" value="" class="form-control" data-parsley-required="true"/>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-3 control-label">Ngày sinh</label>
                    <div class="col-md-3">
                        <input type="text" name="ngaysinh" id="ngaysinh" value="" class="form-control ngaythangnam" data-date-format="dd/mm/yyyy" data-inputmask="'alias': 'date'" data-parsley-required="true" />
                    </div>
                    <label class="col-md-3 control-label">Giới tính</label>
                    <div class="col-md-3">
                        <select name="gioitinh" id="gioitinh" class="select2" style="width:100%;">
                        <?php
                        foreach ($arr_gioitinh as $key => $value) {
                            echo '<option value="'.$key.'">'.$value.'</option>';
                        }
                        ?>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-3 control-label">Nguyên quán</label>
                    <div class="col-md-9">
                        <input type="text" name="nguyenquan" id="nguyenquan" value="" class="form-control" data-parsley-required="true"/>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-3 control-label">CMND</label>
                    <div class="col-md-3">
                        <input type="text" name="cmnd" id="cmnd" value="" class="form-control" data-parsley-required="true"/>
                    </div>
                    <label class="col-md-3 control-label">Số điện thoại</label>
                    <div class="col-md-3">
                        <input type="text" name="sodienthoai" id="sodienthoai" value="" class="form-control" data-parsley-required="true"/>
                    </div>
                </div>
                <div class="form-group donvi">
                    <label class="col-md-3 control-label">Đơn vị công tác</label>
                    <div class="col-md-9">
                    <select name="id_donvi" id="id_donvi" class="select2" style="width:100%">
                        <option value="">Chọn đơn vị</option>
                        <?php
                        if($donvi_list){
                            $list_tree = iterator_to_array($donvi_list);
                            showCategories($list_tree);
                        }
                        ?>
                    </select>                       
                    </div>
                </div>
                <div class="form-group donvi">
                    <label class="col-md-3 control-label">Chức vụ</label>
                    <div class="col-md-3">
                        <select name="id_chucvu" id="id_chucvu" class="select2" style="width:100%">
                            <option value="">Chức vụ</option>
                            <?php
                            if($chucvu_list){
                                foreach ($chucvu_list as $cv) {
                                    echo '<option value="'.$cv['_id'].'">'.$cv['ten'].'</option>';
                                }
                            }
                            ?>
                        </select>                       
                    </div>
                    <label class="col-md-3 control-label">Ngày quyết định</label>
                    <div class="col-md-3">
                        <input type="text" name="ngayquyetdinh" id="ngayquyetdinh" value="<?php echo date("d/m/Y"); ?>" class="form-control ngaythangnam" data-date-format="dd/mm/yyyy" data-inputmask="'alias': 'date'" data-parsley-required="true" />
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
<script src="assets/plugins/select2/dist/js/select2.min.js"></script>
<script src="assets/plugins/parsley/dist/parsley.js"></script>
<script src="assets/js/table-manage-default.demo.min.js"></script>
<script src="assets/js/ui-tree.demo.min.js"></script>
<script src="assets/plugins/DataTables/media/js/jquery.dataTables.js"></script>
<script src="assets/plugins/DataTables/media/js/dataTables.bootstrap.min.js"></script>
<script src="assets/plugins/DataTables/extensions/Responsive/js/dataTables.responsive.min.js"></script>
<script src="assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
<script src="assets/plugins/input-mask/jquery.inputmask.js"></script>
<script src="assets/js/table-manage-default.demo.min.js"></script>
<script src="assets/js/apps.min.js"></script>
<!-- ================== END PAGE LEVEL JS ================== -->
<script>
    $(document).ready(function() {
        $(".themnhansu").click(function(){
            $(".donvi").show();
            $("#id").val("");$("#act").val("");
        });
        $(".select2").select2();
        <?php if(isset($msg) && $msg): ?>
        $.gritter.add({
            title:"Thông báo !",
            text:"<?php echo $msg; ?>",
            image:"assets/img/login.png",
            sticky:false,
            time:""
        });
        <?php endif; ?>  
        $(".ngaythangnam").datepicker({todayHighlight:!0});
        $(".ngaythangnam").inputmask();
        $(".suanhansu").click(function(){
            //$(".donvi").hide();
            var _link = $(this).attr("href");
            $.getJSON(_link, function(data){
                $("#id").val(data.id); $("#act").val(data.act);
                $("#hoten").val(data.hoten);
                $("#bidanh").val(data.bidanh);
                $("#ngaysinh").val(data.ngaysinh);
                $("#gioitinh").val(data.gioitinh); $("#gioitinh").select2();
                $("#nguyenquan").val(data.nguyenquan);
                $("#cmnd").val(data.cmnd);
                $("#sodienthoai").val(data.sodienthoai);
                $("#id_donvi").val(data.id_donvi); $("#id_donvi").select2();
                $("#id_chucvu").val(data.id_chucvu); $("#id_chucvu").select2();
                $("#ngayquyetdinh").val(data.ngayquyetdinh);
            });
        });
        $(".chuyencoquan").click(function(){
            var _link = $(this).attr("href");
            $.getJSON(_link, function(data){
                $("#id_chuyencoquan").val(data.id); $("#act_chuyencoquan").val(data.act);
            });
        });
        App.init();TableManageDefault.init();
    });
</script>