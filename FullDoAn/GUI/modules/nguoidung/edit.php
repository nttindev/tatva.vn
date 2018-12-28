<?php
$open="nguoidung";

$loaisanphambus=new TaiKhoanBUS();
$masp= $loaisanphambus->getInput('MaNguoidung');
$editsanpham=$loaisanphambus->fetchID($masp);
    if($_SERVER["REQUEST_METHOD"]=='POST'){
            $a= $loaisanphambus->postInput('tennd');
            $b= $loaisanphambus->postInput('tendn');
            $c= $loaisanphambus->postInput('ngaysinh');
            $d= $loaisanphambus->postInput('noisinh');
            $f= $loaisanphambus->postInput('sdt');
        $error=[];
        if($a=='' or $b==''or  $c==''or  $d==''or  $f=='')
        {
            $error['tennd']="mời bạn nhập vào mã loại sản phẩm";
            $error['tendn']="mời bạn nhập vào tên loại";
            $error['ngaysinh']="mời bạn nhập vào logo";
        }
        if(empty($error))
        {
                $loaisanphambus->Update_With_LoaiSanPham($a,$b,$c,$d,$f,$masp); ?>
                    <script> window.location = "?a=24"; </script><?php
        }
    }
?>
                    <div class="row">
                        <div class="col-lg-12">
                            <h1 class="page-header">
                                Sửa tài khoản
                            </h1>
                            <ol class="breadcrumb">
                                <li>
                                    <i class="fa fa-dashboard"></i>  <a href="?a=1">Dashboard</a>
                                </li>
                                <li>
                                    <i></i>  <a href="?a=24">Tài khoản</a>
                                </li>
                                <li class="active">
                                    <i class="fa fa-file"></i> Sửa tài khoản
                                </li>
                            </ol>
                        </div>
                    </div>
                    <!-- /.row -->
                    <div class="row">
                        <div class="col-md-12">
                        <form action="" method="POST">
                        
                        <div class="form-group">
                            <label for="exampleFormControlSelect2">Tên người dùng</label>
                            <input type="text" class="form-control"  id="exampleFormControlInput1" placeholder="nguyentrantin" name="tennd" value="<?php echo $editsanpham->TenNguoiDung ?>">
                            <?php if(isset($error['tennd'])): ?>        
                            <p class="text-danger"><?php echo $error['tennd']?></p>
                            <?php endif ?>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlSelect2">Tên đăng nhập</label>
                            <input type="text" class="form-control"  id="exampleFormControlInput1" placeholder="tincr7" name="tendn" value="<?php echo $editsanpham->TenDangNhap ?>">
                            <?php if(isset($error['tendn'])): ?>        
                            <p class="text-danger"><?php echo $error['tendn']?></p>
                            <?php endif ?>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlSelect1">Ngày sinh</label>
                            <input type="text" class="form-control"  id="exampleFormControlInput1" placeholder="1998-09-01" name="ngaysinh" value="<?php echo $editsanpham->NgaySinh ?>">
                            <?php if(isset($error['ngaysinh'])): ?>        
                            <p class="text-danger"><?php echo $error['ngaysinh']?></p>
                            <?php endif ?>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlSelect1">Nơi sinh</label>
                            <input type="text" class="form-control"  id="exampleFormControlInput1" placeholder="Quảng Ngãi" name="noisinh" value="<?php echo $editsanpham->NoiSinh ?>">
                            <?php if(isset($error['noisinh'])): ?>        
                            <p class="text-danger"><?php echo $error['noisinh']?></p>
                            <?php endif ?>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlSelect1">SDT</label>
                            <input type="number" class="form-control"  id="exampleFormControlInput1" placeholder="0963473807" name="sdt" value="<?php echo $editsanpham->SDT ?>">
                            <?php if(isset($error['sdt'])): ?>        
                            <p class="text-danger"><?php echo $error['sdt']?></p>
                            <?php endif ?>
                        </div>
                        
                        <div class="form-group">
                        <button type="submit" class="btn btn-primary pull-right">Lưu</button>
                        </div>
                        </form>
                        </div>
                    </div>
 