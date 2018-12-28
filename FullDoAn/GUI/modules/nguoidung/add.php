<?php
$open="nguoidung";


$loaisanphambus=new TaiKhoanBUS();

    if($_SERVER["REQUEST_METHOD"]=='POST'){
        
            
            $a= $loaisanphambus->postInput('tennd');
            $b= $loaisanphambus->postInput('tendn');
            $c= $loaisanphambus->postInput('ngaysinh');
            $d= $loaisanphambus->postInput('noisinh');
            $e=$loaisanphambus->postInput('mk');
            $f= $loaisanphambus->postInput('sdt');
        $error=[];
        if($a=='' or $b==''or  $c==''or  $d==''or  $e==''or  $f=='')
        {
            $error['tennd']="mời bạn nhập vào mã loại sản phẩm";
            $error['tendn']="mời bạn nhập vào tên loại";
            $error['ngaysinh']="mời bạn nhập vào logo";
        }
        if(empty($error))
        {
                $loaisanphambus->Insert_With_TaiKhoan($a,$b,$c,$d,$e,$f); ?>
                    <script> window.location = "?a=24"; </script><?php
        }
    }
?>
                    <div class="row">
                        <div class="col-lg-12">
                            <h1 class="page-header">
                                Thêm mới tài khoản
                            </h1>
                            <ol class="breadcrumb">
                                <li>
                                    <i class="fa fa-dashboard"></i>  <a href="?a=1">Dashboard</a>
                                </li>
                                <li>
                                    <i></i>  <a href="?a=24">Tài khoản</a>
                                </li>
                                <li class="active">
                                    <i class="fa fa-file"></i> Thêm tài khoản
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
                            <input type="text" class="form-control"  id="exampleFormControlInput1" placeholder="nguyentrantin" name="tennd">
                            <?php if(isset($error['tennd'])): ?>        
                            <p class="text-danger"><?php echo $error['tennd']?></p>
                            <?php endif ?>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlSelect2">Tên đăng nhập</label>
                            <input type="text" class="form-control"  id="exampleFormControlInput1" placeholder="tincr7" name="tendn">
                            <?php if(isset($error['tendn'])): ?>        
                            <p class="text-danger"><?php echo $error['tendn']?></p>
                            <?php endif ?>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlSelect1">Ngày sinh</label>
                            <input type="text" class="form-control"  id="exampleFormControlInput1" placeholder="1998-09-01" name="ngaysinh">
                            <?php if(isset($error['ngaysinh'])): ?>        
                            <p class="text-danger"><?php echo $error['ngaysinh']?></p>
                            <?php endif ?>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlSelect1">Nơi sinh</label>
                            <input type="text" class="form-control"  id="exampleFormControlInput1" placeholder="Quảng Ngãi" name="noisinh">
                            <?php if(isset($error['noisinh'])): ?>        
                            <p class="text-danger"><?php echo $error['noisinh']?></p>
                            <?php endif ?>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlSelect1">Mật khẩu</label>
                            <input type="text" class="form-control"  id="exampleFormControlInput1" placeholder="Tin123456789a" name="mk">
                            <?php if(isset($error['mk'])): ?>        
                            <p class="text-danger"><?php echo $error['mk']?></p>
                            <?php endif ?>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlSelect1">SDT</label>
                            <input type="number" class="form-control"  id="exampleFormControlInput1" placeholder="0963473807" name="sdt">
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
 