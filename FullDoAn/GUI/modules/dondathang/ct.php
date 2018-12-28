<?php
$open="dondathang";
// require_once __DIR__."/../../layout/header.php";
    // require_once __DIR__."/../../../bus/DonDatHangBUS.php";
    // require_once __DIR__."/../../../dao/DonDatHangDAo.php";
    // require_once __DIR__."/../../../dto/ChiTietDonDatHang.php";
    // require_once __DIR__."/../../../dto/DonDatHang.php";

    $loaisanphambus=new DonDatHangBus();
    $masp= $loaisanphambus->getInput('MaDonDatHang');
    $loaisanphambus=$loaisanphambus->fetchAll1($masp); ?>
    <div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">
            Danh sách chi tiết đơn đặt hàng
        </h1>
        <ol class="breadcrumb">
            <li>
                <i class="fa fa-dashboard"></i>  <a href="/fulldoan/gui/index.php">Dashboard</a>
            </li>
            <li class="active">
                <i class="fa fa-file"></i> Chi tiết đơn đặt hàng
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
<form>
<table class="table table-bordered table-hover">
<thead>
<tr>
<th>Mã chi tiết đơn đặt hàng</th>
<th>Mã sản phẩm</th>
<th>Tên sản phẩm</th>
<th>Số lượng</th>
<th>Giá bán</th>
<th>Mã đơn đặt hàng</th>
</tr>
</thead>
<tbody>
<?php foreach($loaisanphambus as $item):?>
<tr>
<td><?php echo $item->MaChiTietDonDatHang ?></td>
<td><?php echo $item->MaSanPham ?></td>
<td><?php 
$sanphambus=new SanPhamBus();
$masp= $item->MaSanPham ;
$editsanpham=$sanphambus->fetchID($masp);
echo $editsanpham->TenSanPham;
?></td>
<td><?php echo $item->SoLuong ?></td>
<td><?php echo number_format($item->GiaBan) ?></td>
<td><?php echo $item->MaDonDatHang ?></td>
</tr>
<?php endforeach ?>
</tbody>
</table>
<input type="button" value="Print" onclick="window.print()" />
</form>       

 