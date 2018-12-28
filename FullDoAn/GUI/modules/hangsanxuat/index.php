<?php
$open="hangsanxuat";
 

$loaisanphambus=new HangSanXuatBUS();

$loaisanphambus=$loaisanphambus->fetchAll(); ?>
                    <div class="row">
                        <div class="col-lg-12">
                            <h1 class="page-header">
                                Danh sách nhà sản xuất
                                <a href="?a=11" class="btn btn-success">Thêm loại nhà sản xuất</a>
                            </h1>
                            <ol class="breadcrumb">
                                <li>
                                    <i class="fa fa-dashboard"></i>  <a href="?a=1">Dashboard</a>
                                </li>
                                <li class="active">
                                    <i class="fa fa-file"></i> Loại nhà sản xuất
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
                        <form class="form-inline" action="?a=15" method="POST">
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
                    <th>Mã hãng sản phẩm</th>
                    <th>Tên hãng sản phẩm</th>
                    <th>LogoURL</th>
                    <th>Bị Xóa</th>
                    <th>Thêm Xóa</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($loaisanphambus as $item):?>
                <tr>
                    <td><?php echo $item->MaHangSanXuat ?></td>
                    <td><?php echo $item->TenHangSanXuat ?></td>
                    <td><img src="/fulldoan/gui/images/<?php echo $item->LogoURL ?>" alt="" width="150" height="35"></td>
                    <td><?php echo $item->BiXoa ?></td>
                    <td>
                        <a class="btn btn-xs btn-info" href="?a=13&MaHangSanXuat=<?php echo $item->MaHangSanXuat?>">Sửa</a>
                        <a class="btn btn-xs btn-danger" href="?a=12&MaHangSanXuat=<?php echo $item->MaHangSanXuat?>" onclick="return confirm('Bạn có chắc chắn muốn xóa hãng sản xuất này!!');">Xóa</a>
                    </td>
                </tr>
                <?php endforeach ?>
            </tbody>
</table>            

 