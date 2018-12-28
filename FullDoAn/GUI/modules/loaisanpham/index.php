<?php
$open="loaisanpham";


$loaisanphambus=new LoaiSanPhamBus();

$loaisanphambus=$loaisanphambus->fetchAll(); ?>
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
                    <nav class="navbar navbar-light bg-light pull-right">
                        <form class="form-inline" action="?a=20" method="POST">
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
                        <a class="btn btn-xs btn-danger" href="?a=17&MaLoaiSanPham=<?php echo $item->MaLoaiSanPham?>" onclick="return confirm('Bạn có chắc chắn muốn xóa loại sản phẩm này!!!');">Xóa</a>
                    </td>
                </tr>
                <?php endforeach ?>
            </tbody>
</table>            

 