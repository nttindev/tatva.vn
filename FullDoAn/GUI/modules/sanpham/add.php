<?php
    date_default_timezone_set('Asia/Ho_Chi_Minh');
    $open="sanpham";
    $a = new HangSanXuatBUS();
    $b= new LoaiSanPhamBUS();
    $x= $a->fetchAll();
    $y= $b->fetchAll();
    $sanphambus=new SanPhamBus();
    if($_SERVER["REQUEST_METHOD"]=='POST')
    {
        
        $tenSanPham=$sanphambus->postInput('tensanpham');
        $anhURL=$sanphambus->postInput('anhurl');
        $giaSanPham= $sanphambus->postInput('giasanpham');
        $ngayNhap= $sanphambus->postInput('ngaynhap');
        $slt= $sanphambus->postInput('ton');
        $moTa = $sanphambus->postInput('mota');
        $xuatXu= $sanphambus->postInput('xuatxu');
        $maLoaiSanPham= $sanphambus->postInput('maloai');
        $maHangSanXuat= $sanphambus->postInput('mahang');
        $error=[];
        if($tenSanPham=='' or $giaSanPham=='' or $anhURL==''
        or $ngayNhap==''or $moTa==''or $xuatXu=='' 
        or $maLoaiSanPham==''or $maHangSanXuat=='' or $slt=='')
        {
            $error['tensanpham']="mời bạn nhập vào tên sản phẩm";
            $error['mahang']="mời bạn nhập vào mã hãng";
            $error['maloai']="mời bạn nhập vào mã loại sản phẩm";
            $error['anhurl']="mời bạn nhập vào ảnh url sản phẩm";
            $error['giasanpham']="mời bạn nhập vào giá sản phẩm";
            $error['mota']="mời bạn nhập vào mô tả sản phẩm";
            $error['xuatxu']="mời bạn nhập vào xuất xứ sản phẩm";
            $error['ngaynhap']="mời bạn nhập vào ngày nhập sản phẩm";
            $error['ton']="mời bạn nhập vào số lượng tồn sản phẩm";
        }
        if(empty($error))
        {
                    
                     
                    $sanphambus->Insert_With_SanPham($tenSanPham,$anhURL,$giaSanPham,$ngayNhap,$slt,$moTa,$xuatXu,$maLoaiSanPham,$maHangSanXuat,0); ?>
                    <script> window.location = "?a=29"; </script><?php
        }
    }
?>
                    <div class="row">
                        <div class="col-lg-12">
                            <h1 class="page-header">
                                Thêm mới sản phẩm
                            </h1>
                            <ol class="breadcrumb">
                                <li>
                                    <i class="fa fa-dashboard"></i>  <a href="?a=1">Dashboard</a>
                                </li>
                                <li>
                                    <i></i>  <a href="?a=29">Sản phẩm</a>
                                </li>
                                <li class="active">
                                    <i class="fa fa-file"></i> Thêm sản phẩm
                                </li>
                            </ol>
                        </div>
                    </div>
                    <!-- /.row -->
                    <div class="row">
                        <div class="col-md-12">
                        <form action="" method="POST">
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Tên sản phẩm</label>

                            <input type="text" class="form-control"  id="exampleFormControlInput1" placeholder="HuaWei Mate 20 black" name="tensanpham">
                            <?php if(isset($error['tensanpham'])): ?>        
                            <p class="text-danger"><?php echo $error['tensanpham']?></p>
                            <?php endif ?>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlFile1">Ảnh URl</label>
                            <input type="file" class="form-control-file" id="exampleFormControlFile1" name="anhurl">
                            <?php if(isset($error['anhurl'])): ?>        
                            <p class="text-danger"><?php echo $error['anhurl']?></p>
                            <?php endif ?>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Giá sản phẩm</label>
                            <input type="number" class="form-control" id="exampleFormControlInput1" placeholder="0" name="giasanpham">
                            <?php if(isset($error['giasanpham'])): ?>        
                            <p class="text-danger"><?php echo $error['giasanpham']?></p>
                            <?php endif ?>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Ngày nhập</label>
                            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="2018-11-29" name="ngaynhap" value="<?php echo $ngayLap =  date('Y-m-d'); ?>">
                            <?php if(isset($error['ngaynhap'])): ?>        
                            <p class="text-danger"><?php echo $error['ngaynhap']?></p>
                            <?php endif ?>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Số lượng tồn</label>
                            <input type="number" class="form-control" id="exampleFormControlInput1" placeholder="0" name="ton">
                            <?php if(isset($error['ton'])): ?>        
                            <p class="text-danger"><?php echo $error['ton']?></p>
                            <?php endif ?>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Mô tả</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="mota"></textarea>
                            <?php if(isset($error['mota'])): ?>        
                            <p class="text-danger"><?php echo $error['mota']?></p>
                            <?php endif ?>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Xuất Xứ</label>
                            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Trung Quốc" name="xuatxu">
                            <?php if(isset($error['xuatxu'])): ?>        
                            <p class="text-danger"><?php echo $error['xuatxu']?></p>
                            <?php endif ?>
                        </div>
                        
                        <div class="form-group">
                            <label for="exampleFormControlSelect1">Mã loại sản phẩm</label>
                            <select class="form-control" id="exampleFormControlSelect1" name="maloai">
                            <?php foreach($y as $item2):?>
                            <option><?php echo $item2->MaLoaiSanPham ?></option>
                            <?php endforeach ?>
                            </select>
                            <?php if(isset($error['maloai'])): ?>        
                            <p class="text-danger"><?php echo $error['maloai']?></p>
                            <?php endif ?>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlSelect1">Mã hãng sản xuất</label>
                            <select class="form-control" id="exampleFormControlSelect1" name="mahang">
                            <?php foreach($x as $item2):?>
                            <option><?php echo $item2->MaHangSanXuat ?></option>
                            <?php endforeach ?>
                            </select>
                            <?php if(isset($error['mahang'])): ?>        
                            <p class="text-danger"><?php echo $error['mahang']?></p>
                            <?php endif ?>
                        </div>
                        <div class="form-group">
                        <button type="submit" class="btn btn-primary pull-right">Lưu</button>
                        </div>
                        </form>
                        </div>
                    </div>
 