<?php

$open="loaisanpham";

$loaisanphambus=new LoaiSanPhamBUS();
$masp= $_GET['MaLoaiSanPham'];
$editsanpham=$loaisanphambus->fetchID($masp);
if($_SERVER["REQUEST_METHOD"]=='POST'){
    $tenSanPham=$loaisanphambus->postInput('tenloai');
    $biXoa= $loaisanphambus->postInput('bixoa');
    $logo= $loaisanphambus->postInput('logo');
    $error=[];
    if($loaisanphambus->postInput('bixoa')=='' or $loaisanphambus->postInput('tenloai')=='' or $logo=='')
    {
        $error['bixoa']="mời bạn nhập vào mã loại sản phẩm";
        $error['tenloai']="mời bạn nhập vào tên loại";
    }
    if(empty($error))
    {
        $loaisanphambus->Update_With_LoaiSanPham($tenSanPham,$logo,$biXoa,$masp);?>
        <script> window.location = "?a=19"; </script><?php
    }
                
        } ?>
                    <div class="row">
                        <div class="col-lg-12">
                            <h1 class="page-header">
                                Sửa loại sản phẩm
                            </h1>
                            <ol class="breadcrumb">
                                <li>
                                    <i class="fa fa-dashboard"></i>  <a href="?a=1">Dashboard</a>
                                </li>
                                <li>
                                    <i></i>  <a href="?a=19">Loại sản phẩm</a>
                                </li>
                                <li class="active">
                                    <i class="fa fa-file"></i> Sửa loại sản phẩm
                                </li>
                            </ol>
                        </div>
                    </div>
                    <!-- /.row -->
                    <div class="row">
                        <div class="col-md-12">
                        <form action="" method="POST">
                        <div class="form-group">
                            <label for="exampleFormControlSelect2">Tên loại sản phẩm</label>
                            <input type="text" class="form-control"  id="exampleFormControlInput1" placeholder="SMART PHONE" name="tenloai" value="<?php echo $editsanpham->TenLoaiSanPham;?>">
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
                            <label for="exampleFormControlSelect1">Bi Xóa</label>
                            <input type="text" class="form-control"  id="exampleFormControlInput1" placeholder="0" name="bixoa" value="<?php echo $editsanpham->BiXoa;?>">
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
 