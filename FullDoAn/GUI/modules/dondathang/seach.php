<?php
$open="dondathang";
 

$dondathang=new DonDatHangBus();

$masp=$dondathang->postInput('name11');
$dondathang=$dondathang->TimKiem($masp); ?>
                    <div class="row">
                        <div class="col-lg-12">
                            <h1 class="page-header">
                                Danh sách đơn đặt hàng
                            </h1>
                            <ol class="breadcrumb">
                                <li>
                                    <i class="fa fa-dashboard"></i>  <a href="?a=1">Dashboard</a>
                                </li>
                                <li class="active">
                                    <i class="fa fa-file"></i> Đơn đặt hàng
                                </li>
                            </ol>
                            <div class="clearfix"></div>
                            <?php   
                                if(isset($_SESSION['success'])): ?>
                                    <div class="lert alert-succsess">
                                    <?php echo $_SESSION['success']; unset($_SESSION['success']) ?>
                            <?php endif ;?>
                            <?php   
                                if(isset($_SESSION['error'])): ?>
                                    <div class="lert alert-danger">
                                    <?php echo $_SESSION['error']; unset($_SESSION['error']) ?>
                            <?php endif ;?>
                        </div>
                    </div>
                    <!-- /.row -->
<div class="row">
    <div class="col-lg-12">

        <div class="table-responsive">
            
        <table class="table table-bordered table-hover">
            <thead>
                <tr>
                    <th>Mã đặt hàng</th>
                    <th>Mã người dùng</th>
                    <th>Ngày lập</th>
                    <th>Tổng thành tiền</th>
                    <th>Tình trạng</th>
                    <th>Bị xóa</th>
                    <th>Sửa xóa</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($dondathang as $item):?>
                <tr>
                    <td><?php echo $item->MaDonDatHang ?></td>
                    <td><?php echo $item->MaNguoiDung ?></td>
                    <td><?php echo $item->NgayLap ?></td>
                    <td><?php echo $item->TongThanhTien ?></td>
                    <td><?php echo $item->TinhTrang ?></td>
                    <td><?php echo $item->BiXoa ?></td>
                    <td>
                        <a class="btn btn-xs btn-info" href="?a=6&MaDonDatHang=<?php echo $item->MaDatHang?>">Duyệt</a>
                        <a class="btn btn-xs btn-danger" href="?a=4&MaDonDatHang=<?php echo $item->MaDatHang?>">Xóa</a>
                        <a class="btn btn-xs btn-info" href="?a=3&MaDonDatHang=<?php echo $item->MaDatHang?>">Xem</a>
                    </td>
                </tr>
                <?php endforeach ?>
            </tbody>
</table>            

  