<?php
$open="sanpham";


$sanphambus=new SanPhamBus();

$sanphambus=$sanphambus->fetchAll(); ?>
                    <div class="row">
                        <div class="col-lg-12">
                            <h1 class="page-header">
                                Danh sách sản phẩm
                                <a href="?a=26" class="btn btn-success">Thêm sản phẩm</a>
                                
                            </h1>
                            <ol class="breadcrumb">
                                <li>
                                    <i class="fa fa-dashboard"></i>  <a href="?a=29">Dashboard</a>
                                </li>
                                <li class="active">
                                    <i class="fa fa-file"></i> Sản phẩm
                                </li>
                            </ol>
                        </div>
                    </div>
                    <!-- /.row -->
                    <div class="row">
                    <div class="col-lg-12">
                    <nav class="navbar navbar-light bg-light pull-right">
                        <form class="form-inline" action="?a=30" method="POST">
                            <input class="form-control mr-sm-2" type="search" placeholder="Tìm kiếm" aria-label="Search" name="name11">
                            <button class="btn btn-outline-success my-2 my-sm-0 btn-color" type="submit">Tìm kiếm</button>
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
                    <th>Mã SP</th>
                    <th>Tên SP</th>
                    <th>Ảnh URL</th>
                    <th>Giá SP</th>
                    <th>Ngày Nhập</th>
                    <th>Số lượng tồn</th>
                    <th>Số lượng bán</th>
                    <th>Số lượt xem</th>
                    <th>Mô tả SP</th>
                    <th>Xuất xứ SP</th>
                    <th>Mã loại SP</th>
                    <th>Mã hãng SP</th>
                    <th>Bị Xóa</th>
                    <th>Thao tác</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($sanphambus as $item):?>
                <tr>
                    <td><?php echo $item->MaSanPham  ?></td>
                    <td><?php echo $item->TenSanPham ?></td>
                    <td><img src="/fulldoan/gui/images/<?php echo $item->AnhURL ?>" alt="" width="50" height="75"></td>
                    <td><?php echo $item->GiaSanPham ?></td>
                    <td><?php echo $item->NgayNhap ?></td>
                    <td><?php echo $item->SoLuongTon ?></td>
                    <td><?php echo $item->SoLuongBan ?></td>
                    <td><?php echo $item->SoLuotXem?></td>
                    <td><?php echo $item->MoTa ?></td>
                    <td><?php echo $item->XuatXu?></td>
                    <td><?php echo $item->MaLoaiSanPham ?></td>
                    <td><?php echo $item->MaHangSanXuat ?></td>
                    <td><?php echo $item->BiXoa ?></td>
                    <td>
                        <a class="btn btn-xs btn-info" href="?a=28&MaSanPham=<?php echo $item->MaSanPham?>">Sửa</a>
                        <a class="btn btn-xs btn-danger" href="?a=27&MaSanPham=<?php echo $item->MaSanPham?>" onclick="return confirm('Bạn có chắc chắn muốn xóa sản phẩm này!!!');">Xóa</a>
                    </td>
                </tr>
                <?php endforeach ?>
            </tbody>
</table>            

