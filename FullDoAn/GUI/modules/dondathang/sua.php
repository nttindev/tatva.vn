<?php
$open="dondathang";
 

$dondathang=new DonDatHangBus();

$masp= $_GET['MaDonDatHang'];
$editsanpham=$dondathang->fetchID($masp);
if($_SERVER["REQUEST_METHOD"]=='POST'){
    if($_SERVER["REQUEST_METHOD"]=='POST'){
        $b= $dondathang->postInput('manguoi');
        $c= $dondathang->postInput('ngay');
        $d =$dondathang->postInput('tien');
        $e= $dondathang->postInput('tinhtrang');
        $f= $dondathang->postInput('bixoa');
    $error=[];
    if($b=='' or $c=='' or $d=='' or $e=='' or $f=='')
    {
        $error['manguoi']="mời bạn nhập mã người dùng";
        $error['ngay']="mời bạn nhập ngày";
        $error['tien']="mời bạn nhập vào tổng tiền";
        $error['tinhtrang']="mời bạn nhập vào tình trạng";
        $error['bixoa']="mời bạn nhập vào bị xóa";
    }
    if(empty($error))
    {
            $id_insert =$dondathang->Update_With_SanPham($masp,$b,$c,$d,$e,$f); ?>
                <script> window.location = "?a=7"; </script><?php
    }
                
        } ?>
<?php

    } ?>
                    <div class="row">
                        <div class="col-lg-12">
                            <h1 class="page-header">
                                Danh sách đơn đặt hàng
                            </h1>
                            <ol class="breadcrumb">
                                <li>
                                    <i class="fa fa-dashboard"></i>  <a href="?a=1">Dashboard</a>
                                </li>
                                <li>
                                    <i></i>  <a href="?a=7">Đơn đặt hàng</a>
                                </li>
                                <li class="active">
                                    <i class="fa fa-file"></i> Sửa đơn đặt hàng
                                </li>
                            </ol>
                        </div>
                    </div>
                    <!-- /.row -->
                    <div class="row">
                        <div class="col-lg-12">
                        <form action="" method="POST">
                        <div class="form-group">
                            <label for="exampleFormControlSelect2">Mã người dùng</label>
                            <input type="text" class="form-control"  id="exampleFormControlInput1" placeholder="14" name="manguoi" value="<?php echo $editsanpham->MaNguoiDung;?>">
                            <?php if(isset($error['manguoi'])): ?>        
                            <p class="text-danger"><?php echo $error['manguoi']?></p>
                            <?php endif ?>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlSelect2">Ngày lập</label>
                            <input type="text" class="form-control"  id="exampleFormControlInput1" placeholder="2018-12-14" name="ngay" value="<?php echo $editsanpham->NgayLap;?>">
                            <?php if(isset($error['ngay'])): ?>        
                            <p class="text-danger"><?php echo $error['ngay']?></p>
                            <?php endif ?>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlSelect2">Tổng thành tiền</label>
                            <input type="number" class="form-control"  id="exampleFormControlInput1" placeholder="39800000" name="tien" value="<?php echo $editsanpham->TongThanhTien;?>">
                            <?php if(isset($error['tien'])): ?>        
                            <p class="text-danger"><?php echo $error['tien']?></p>
                            <?php endif ?>
                        </div>
                        
                        <div class="form-group">
                            <label for="exampleFormControlSelect1">Tình trạng</label>
                            <select class="form-control" id="exampleFormControlSelect1" name="tinhtrang">
                            <option>0</option>
                            <option>1</option>
                            </select>
                            <?php if(isset($error['tinhtrang'])): ?>        
                            <p class="text-danger"><?php echo $error['tinhtrang']?></p>
                            <?php endif ?>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlSelect1">Bị xóa</label>
                            <select class="form-control" id="exampleFormControlSelect1" name="bixoa">
                            <option>0</option>
                            <option>1</option>
                            </select>
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

 