<?php
$open="hangsanxuat";
// require_once __DIR__."/../../layout/header.php";

$loaisanphambus=new HangSanXuatBUS();

    if($_SERVER["REQUEST_METHOD"]=='POST'){
        
            
            $tenloaisanpham= $loaisanphambus->postInput('tenloai');
            $loGo= $loaisanphambus->postInput('logo');
            $bixoa= $loaisanphambus->postInput('bixoa');
        $error=[];
        if($loaisanphambus->postInput('logo')=='' or $loGo==''or  $loaisanphambus->postInput('logo')=='')
        {
            $error['bixoa']="mời bạn nhập vào mã loại sản phẩm";
            $error['tenloai']="mời bạn nhập vào tên loại";
            $error['logo']="mời bạn nhập vào logo";
        }
        if(empty($error))
        {
                    $tmp_name = $_FILES["logo"]["tmp_name"];
                    $name = $_FILES["logo"]["name"];
                    move_uploaded_file($tmp_name, "../../../../../GUI/images/$name");
                $id_insert =$loaisanphambus->Insert_With_SanPham($tenloaisanpham,$loGo,$bixoa); ?>
                    <script> window.location = "?a=14"; </script><?php
        }
    }
?>
                    <div class="row">
                        <div class="col-lg-12">
                            <h1 class="page-header">
                                Thêm mới hãng sản xuất
                            </h1>
                            <ol class="breadcrumb">
                                <li>
                                    <i class="fa fa-dashboard"></i>  <a href="?a=1">Dashboard</a>
                                </li>
                                <li>
                                    <i></i>  <a href="?a=14">Hãng sản xuất</a>
                                </li>
                                <li class="active">
                                    <i class="fa fa-file"></i> Thêm hãng sản xuất
                                </li>
                            </ol>
                        </div>
                    </div>
                    <!-- /.row -->
                    <div class="row">
                        <div class="col-md-12">
                        <form action="" method="POST">
                        
                        <div class="form-group">
                            <label for="exampleFormControlSelect2">Tên loại sản xuất</label>
                            <input type="text" class="form-control"  id="exampleFormControlInput1" placeholder="SMART PHONE" name="tenloai">
                            <?php if(isset($error['tenloai'])): ?>        
                            <p class="text-danger"><?php echo $error['tenloai']?></p>
                            <?php endif ?>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlFile1">Ảnh URl</label>
                            <input type="file" class="form-control-file" id="exampleFormControlFile1" name="logo">
                            <?php if(isset($error['logo'])): ?>        
                            <p class="text-danger"><?php echo $error['logo']?></p>
                            <?php endif ?>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlSelect1">Bị xóa</label>
                            <input type="text" class="form-control"  id="exampleFormControlInput1" placeholder="0" name="bixoa">
                            <?php if(isset($error['bixoa'])): ?>        
                            <p class="text-danger"><?php echo $error['bixoa']?></p>
                            <?php endif ?>
                        </div>
                        <div class="form-group">
                        <button type="submit" class="btn btn-primary pull-right">Lưu</button>
                        </div>
                        </form>
                        </div>
                    </div>
  