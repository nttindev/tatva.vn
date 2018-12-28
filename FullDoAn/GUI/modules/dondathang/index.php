<?php
$open="dondathang";
// require_once __DIR__."/../../layout/header.php";

$dondathang=new DonDatHangBus();

$dondathang=$dondathang->fetchAll(); ?>
                    <div class="row">
                        <div class="col-lg-12">
                            <h1 class="page-header">
                                Danh sách đơn đặt hàng
                                <a href="?a=2" class="btn btn-success">Thêm đơn đặt hàng</a>
                            </h1>
                            <ol class="breadcrumb">
                                <li>
                                    <i class="fa fa-dashboard"></i>  <a href="?a=1">Dashboard</a>
                                </li>
                                <li class="active">
                                    <i class="fa fa-file"></i> Đơn đặt hàng
                                </li>
                            </ol>
                        </div>
                    </div>
                    <!-- /.row -->
                    <div class="row">
                    <div class="col-lg-12">
                    <nav class="navbar navbar-light bg-light pull-right">
                        <form class="form-inline" action="?a=9" method="POST">
                            <input class="form-control mr-sm-2" type="search" placeholder="Tìm kiếm" aria-label="Search" name="name11">
                            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Tìm kiếm</button>
                        </form>
                    </nav>
                    </div>
                    </div>
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
                    <td><?php echo number_format($item->TongThanhTien) ?></td>
                    <td><?php echo $item->TinhTrang ?></td>
                    <td><?php echo $item->BiXoa ?></td>
                    <td>
                        <a class="btn btn-xs btn-info" href="?a=6&MaDonDatHang=<?php echo $item->MaDonDatHang?>">Duyệt</a>
                        <a class="btn btn-xs btn-danger" href="?a=4&MaDonDatHang=<?php echo $item->MaDonDatHang?>" onclick="return confirm('Bạn có chắc chắn muốn xóa đơn đặt hàng');">Xóa</a>
                        <a class="btn btn-xs btn-info" href="?a=3&MaDonDatHang=<?php echo $item->MaDonDatHang?>">Xem</a>
                        <a class="btn btn-xs btn-success" href="?a=10&MaDonDatHang=<?php echo $item->MaDonDatHang?>">Sửa</a>
                        <a class="btn btn-xs btn-danger" href="?a=5&MaDonDatHang=<?php echo $item->MaDonDatHang?>">Xóa NC</a>
                    </td>
                </tr>
                <?php endforeach ?>
            </tbody>
</table>            

  