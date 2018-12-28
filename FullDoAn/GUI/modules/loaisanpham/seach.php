<?php
$open="loaisanpham";


$loaisanphambus=new LoaiSanPhamBus();

$masp=$loaisanphambus->postInput('name11');
$loaisanphambus=$loaisanphambus->TimKiem($masp); ?>
                    <div class="row">
                        <div class="col-lg-12">
                            <h1 class="page-header">
                                Danh sách loại sản phẩm
                                <a href="?a=16" class="btn btn-success">Thêm loại sản phẩm</a>
                            </h1>
                            <ol class="breadcrumb">
                                <li>
                                    <i class="fa fa-dashboard"></i>  <a href="?a=1">Dashboard</a>
                                </li>
                                <li class="active">
                                    <i class="fa fa-file"></i> Loại sản phẩm
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
                    <th>Mã loại sản phẩm</th>
                    <th>Tên loại sản phẩm</th>
                    <th>Hình URL</th>
                    <th>Bị xóa</th>
                    <th>Thêm Xóa</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($loaisanphambus as $item):?>
                <tr>
                    <td><?php echo $item->MaLoaiSanPham ?></td>
                    <td><?php echo $item->TenLoaiSanPham ?></td>
                    <td><img src="/fulldoan/gui/images/<?php echo $item->logo ?>" alt="" width="50" height="35"></td>
                    <td><?php echo $item->BiXoa ?></td>
                    <td>
                        <a class="btn btn-xs btn-info" href="?a=18&MaLoaiSanPham=<?php echo $item->MaLoaiSanPham?>">Sửa</a>
                        <a class="btn btn-xs btn-danger" href="?a=17&MaLoaiSanPham=<?php echo $item->MaLoaiSanPham?>">Xóa</a>
                    </td>
                </tr>
                <?php endforeach ?>
            </tbody>
</table>            

 