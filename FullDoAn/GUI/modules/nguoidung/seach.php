<?php
$open="nguoidung";


$taikhoan=new TaiKhoanBUS();

$masp=$taikhoan->postInput('name11');
$taikhoan=$taikhoan->TimKiem($masp); ?>
                    <div class="row">
                        <div class="col-lg-12">
                            <h1 class="page-header">
                                Danh sách tài khoản
                            </h1>
                            <ol class="breadcrumb">
                                <li>
                                    <i class="fa fa-dashboard"></i>  <a href="?a=1">Dashboard</a>
                                </li>
                                <li class="active">
                                    <i class="fa fa-file"></i> Tài khoản
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
                    <th>Mã người dùng</th>
                    <th>Tên người dùng</th>
                    <th>Tên đăng nhập</th>
                    <th>Ngày sinh</th>
                    <th>Nơi sinh</th>
                    <th>Mật khẩu</th>
                    <th>Số điện thoại</th>
                    <th>Bị xóa</th>
                    <th>Sửa Xóa</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($taikhoan as $item):?>
                <tr>
                    <td><?php echo $item->MaNguoiDung ?></td>
                    <td><?php echo $item->TenNguoiDung ?></td>
                    <td><?php echo $item->TenDangNhap ?></td>
                    <td><?php echo $item->NgaySinh ?></td>
                    <td><?php echo $item->NoiSinh ?></td>
                    <td>Check PHPadmin</td>
                    <td><?php echo $item->SDT ?></td>
                    <td><?php echo $item->BiXoa ?></td>
                    <td>
                        <a class="btn btn-xs btn-info" href="?a=23&MaNguoidung=<?php echo $item->MaNguoiDung?>">Sửa</a>
                        <a class="btn btn-xs btn-danger" href="?a=22&MaNguoidung=<?php echo $item->MaNguoiDung?>">Xóa</a>
                    </td>
                </tr>
                <?php endforeach ?>
            </tbody>
</table>  

