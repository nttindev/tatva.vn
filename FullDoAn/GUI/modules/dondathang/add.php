<?php
$open="dondathang";
// require_once __DIR__."/../../layout/header.php";

$dondathang=new DonDatHangBus();
if($_SERVER["REQUEST_METHOD"]=='POST'){
        
            
                $a= $dondathang->postInput('madon');
                $b= $dondathang->postInput('manguoi');
                $c= $dondathang->postInput('ngay');
                $d =$dondathang->postInput('tien');
                $e= $dondathang->postInput('tinhtrang');
                $f= $dondathang->postInput('bixoa');
            $error=[];
            if($a=='' or $b=='' or $c=='' or $d=='' or $e=='' or $f=='')
            {
                $error['madon']="mời bạn nhập vào mã đơn";
                $error['manguoi']="mời bạn nhập mã người dùng";
                $error['ngay']="mời bạn nhập ngày";
                $error['tien']="mời bạn nhập vào tổng tiền";
                $error['tinhtrang']="mời bạn nhập vào tình trạng";
                $error['bixoa']="mời bạn nhập vào bị xóa";
            }
            if(empty($error))
            {
                    $id_insert =$dondathang->Insert_With_SanPham($a,$b,$c,$d,$e,$f); ?>
                        <script> window.location = "?a=7"; </script><?php
            }
}?>
                    <div class="row">
                        <div class="col-lg-12">
                            <h1 class="page-header">
                                Danh sách đơn đặt hàng
                            </h1>
                            <ol class="breadcrumb">
                                <li>
                                    <i class="fa fa-dashboard"></i>  <a href="/fulldoan/gui/index.php">Dashboard</a>
                                </li>
                                <li>
                                    <i></i>  <a href="/fulldoan/gui/modules/dondathang/index.php">Đơn đặt hàng</a>
                                </li>
                                <li class="active">
                                    <i class="fa fa-file"></i> Thêm mã đơn đặt hàng
                                </li>
                            </ol>
                        </div>
                    </div>
                    <!-- /.row -->
</div>
<div class="row">
                        <div class="col-md-12">
                        <form action="" method="POST">
                        
                        <div class="form-group">
                            <label for="exampleFormControlSelect2">Mã đơn đặt hàng</label>
                            <input type="text" class="form-control"  id="exampleFormControlInput1" placeholder="141218002" name="madon">
                            <?php if(isset($error['madon'])): ?>        
                            <p class="text-danger"><?php echo $error['madon']?></p>
                            <?php endif ?>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlSelect2">Mã người dùng</label>
                            <input type="text" class="form-control"  id="exampleFormControlInput1" placeholder="14" name="manguoi">
                            <?php if(isset($error['manguoi'])): ?>        
                            <p class="text-danger"><?php echo $error['manguoi']?></p>
                            <?php endif ?>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlSelect2">Ngày lập</label>
                            <input type="text" class="form-control"  id="exampleFormControlInput1" placeholder="2018-12-14" name="ngay">
                            <?php if(isset($error['ngay'])): ?>        
                            <p class="text-danger"><?php echo $error['ngay']?></p>
                            <?php endif ?>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlSelect2">Tổng thành tiền</label>
                            <input type="number" class="form-control"  id="exampleFormControlInput1" placeholder="39800000" name="tien">
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

        

  