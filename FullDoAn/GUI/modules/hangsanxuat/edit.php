<?php
$open="hangsanxuat";
// require_once __DIR__."/../../layout/header.php";
$loaisanphambus=new HangSanXuatBUS();
$masp= $_GET['MaHangSanXuat'];
$editsanpham=$loaisanphambus->fetchID($masp);
if($_SERVER["REQUEST_METHOD"]=='POST'){
    $tenSanPham=$loaisanphambus->postInput('tenloai');
    $loGo= $loaisanphambus->postInput('logo');
    $biXoa= $loaisanphambus->postInput('bixoa');
    $error=[];
    if($loaisanphambus->postInput('logo')=='' or $loaisanphambus->postInput('bixoa')=='' or $loaisanphambus->postInput('tenloai')=='')
    {
        $error['bixoa']="mời bạn nhập vào mã loại sản phẩm";
        $error['tenloai']="mời bạn nhập vào tên loại";
        $error['logo']="mời bạn nhập vào tên logo";
    }
    if(empty($error))
    {
         
        $loaisanphambus->Update_With_LoaiSanPham($tenSanPham,$loGo,$biXoa,$masp);?>
        <script> window.location = "?a=14"; </script><?php
    }
                
        } ?>
                    <div class="row">
                        <div class="col-lg-12">
                            <h1 class="page-header">
                                Thêm mới loại sản phẩm
                            </h1>
                            <ol class="breadcrumb">
                                <li>
                                    <i class="fa fa-dashboard"></i>  <a href="?a=1">Dashboard</a>
                                </li>
                                <li>
                                    <i></i>  <a href="?a=14">Loại sản phẩm</a>
                                </li>
                                <li class="active">
                                    <i class="fa fa-file"></i> Thêm mã loại sản phẩm
                                </li>
                            </ol>
                        </div>
                    </div>
                    <!-- /.row -->
                    <div class="row">
                        <div class="col-lg-12">
                        <form action="" method="POST">
                        
                        <div class="form-group">
                            <label for="exampleFormControlSelect2">Tên nhà sản xuất</label>
                            <input type="text" class="form-control"  id="exampleFormControlInput1" placeholder="SMART PHONE" name="tenloai" value="<?php echo $editsanpham->TenHangSanXuat;?>">
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
                            <input type="text" class="form-control"  id="exampleFormControlInput1" placeholder="3" name="bixoa" value="<?php echo $editsanpham->BiXoa;?>">
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
  