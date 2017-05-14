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
                <h4 class="panel-title"><i class="fa fa-list"></i> Sáng kiến kinh nghiệm</h4>
            </div>
            <div class="panel-body">
                <a href="#modal-sangkienkinhnghiem" data-toggle="modal" class="btn btn-primary m-10 themsangkienkinhnghiem"><i class="fa fa-plus"></i> Thêm mới</a>
                <table id="data-table" class="table table-striped table-bordered table-hovered">
                    <thead>
                        <tr>
                            <th>STT</th>
                            <th>Năm</th>
                            <th>Sáng kiến kinh nghiệm</th>
                            <th>Họ tên người đăng ký</th>
                            <th class="text-center">Tình trạng</th>
                            <th class="text-center"><i class="fa fa-trash"></i></th>
                            <th class="text-center"><i class="fa fa-pencil"></i></th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                    if($sangkienkinhnghiem_list){
                        $i = 1;
                        foreach ($sangkienkinhnghiem_list as $sk) {
                            $xd = isset($sk['xetduyet']) ? $sk['xetduyet'] : 0;
                            $str_nhansu = '';$nam->id = $sk['id_nam']; $n2 = $nam->get_one();
                            if($sk['nhansu']){
                                foreach($sk['nhansu'] as $s){
                                    $nhansu->id = $s['id_nhansu'];$n = $nhansu->get_one();
                                    $str_nhansu .= $n['hoten'] . ', ';
                                }
                            }
                            echo '<tr>
                                <td>'.$i.'</td>
                                <td>'.$n2['ten'].'</td>
                                <td>'.$sk['ten'].'</td>
                                <td style="width: 150px;">'.$str_nhansu.'</td>
                                <td class="text-center"><a href="get.sangkienkinhnghiem.html?id='.$sk['_id'].'&act=check#modal-xetduyet" data-toggle="modal" class="xetduyet">'.$arr_tinhtrang[$xd].'</a></td>
                                <td class="text-center"><a href="get.sangkienkinhnghiem.html?id='.$sk['_id'].'&act=del" onclick="return confirm(\'Chắc chắn muốn xoá?\');"><i class="fa fa-trash"></i></a></td>
                                <td class="text-center"><a href="get.sangkienkinhnghiem.html?id='.$sk['_id'].'&act=edit#modal-sangkienkinhnghiem" data-toggle="modal" class="suasangkienkinhnghiem"><i class="fa fa-pencil"></i></a></td>
                            </tr>';$i++;
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
    <form action="post.sangkienkinhnghiem.html" method="POST" class="form-horizontal" data-parsley-validate="true" name="congtyform">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h4 class="modal-title">Xét duyệt sáng kiến kinh nghiệm</h4>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label class="col-md-3 control-label">Tình trạng</label>
                        <div class="col-md-9">
                            <input type="hidden" name="id" id="id" />
                            <input type="hidden" name="act" id="act" />
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
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label">Nội dung xử lý</label>
                        <div class="col-md-9">
                            <input type="text" name="noidung" value="" class="form-control"/>
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

<div class="modal fade" id="modal-sangkienkinhnghiem">
<form action="post.sangkienkinhnghiem.html" method="POST" class="form-horizontal" data-parsley-validate="true" name="congtyform">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title">Thông tin sáng kiến kinh nghiệm</h4>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label class="col-md-3 control-label">Tên sáng kiến kinh nghiệm</label>
                    <div class="col-md-9">
                        <input type="hidden" name="id" id="id" />
                        <input type="hidden" name="act" id="act" />
                        <input type="hidden" name="url" id="url" value="<?php echo $_SERVER['REQUEST_URI']; ?>">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-12">
                        <textarea name="ten" id="ten" class="form-control" data-parsley-required="true" placeholder="Nội dung tên sáng kiến kinh nghiệm" rows="10"></textarea>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-12 control-label text-left">Họ tên người đăng ký</label>
                </div>
                <div class="form-group">
                    <div class="col-md-12">
                        <select name="id_nhansu[]" id="id_nhansu" multiple="multiple" class="select2" style="width:100%">
                        <?php
                        if($nhansu_list){
                            foreach($nhansu_list as $ns){
                                $v = $ns['_id'] . '/' . $ns['donvi'][0]['_id'];
                                echo '<option value="'.$v.'">'.$ns['hoten'].'</option>';
                            }
                        }
                        ?>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-1 control-label text-right">Năm</label>
                    <div class="col-md-3">
                        <select name="id_nam" id="id_nam" class="select2" style="width:100%">
                        <?php
                        if($nam_list){
                            foreach($nam_list as $n){
                                echo '<option value="'.$n['_id'].'">'.$n['ten'].'</option>';
                            }
                        }
                        ?>
                        </select>
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
<!-- ================== END PAGE LEVEL JS ================== -->
<script>
    $(document).ready(function() {
        $("#themsangkienkinhnghiem").click(function(){
            $("#id").val();$("#act").val();
        });
        $(".suasangkienkinhnghiem").click(function(){
            var _link = $(this).attr("href");
            $.getJSON(_link, function(data){
                $("#id").val(data.id); $("#act").val(data.act);
                $("#ten").val(data.ten);
                $("#id_nam").val(data.id_nam);$("#id_nam").select2();
                $("#id_nhansu").val(data.nhansu);$("#id_nhansu").select2();

            });
        });
        $(".xetduyet").click(function(){
            var _link = $(this).attr("href");
            $.getJSON(_link, function(data){
                $("#id").val(data.id); $("#act").val(data.act);
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