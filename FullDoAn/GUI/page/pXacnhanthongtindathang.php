<div class="boc-ngoai">
 	  	<div class="trai">
 	  		<div class="cot-tieu-de">
 	  		   <div class="ten-sp"><span>Tên Sản Phẩm</span></div>
 	  		   <div class="gia-spham"><span>Giá</span></div>
 	  		   <div class="so-luong-sp"><span>Số Lượng</span></div>	
 	  		</div>


 	  		<?php 

 	  		     if(isset($_GET['order']))
 	  		     {
 	  		     	  $maNguoiDung = $_GET['order'];
			 
			 $gioHangBUS = new GioHangBUS();
			 $lstGioHang = $gioHangBUS->GetByID($maNguoiDung);
			 $tong = 0;
			 foreach($lstGioHang as $gioHangBUS)
			 {

			 	$maSanPham = $gioHangBUS->MaSanPham;
			 	$soluong = $gioHangBUS->SoLuong;
			 	 $sanPhamBUS = new SanPhamBUS();
			 	 $sanPhamBUS = $sanPhamBUS->GetByID_ChiTiet($maSanPham);
                  $maSanPham = $sanPhamBUS->MaSanPham;
                  $gia = $sanPhamBUS->GiaSanPham;
                  $hinh = $sanPhamBUS->AnhURL;
 	  		      $tensp = $sanPhamBUS->TenSanPham;
 	  		      
 	  		      $tong += $gia*$soluong;



 	  		
 	  		 ?>
 	  		 
 	  		
					 <div class="mat-hang">
 	  			<div class="san-pham-thanh-toan">
 	  				 <img src="GUI/images/<?php echo $hinh; ?>" alt="" class="img-tt">
 	  				 <p class="p-ten"><?php echo $tensp; ?></p>
 	  				  <div class="hang-san-xuat"><img src="GUI/images/icons8-star-filled-48.png" alt="" class="anh-them">
 	  				  	<img src="GUI/images/icons8-star-filled-48.png" alt="" class="anh-them">
 	  				  	<img src="GUI/images/icons8-star-filled-48.png" alt="" class="anh-them">
 	  				  	<img src="GUI/images/icons8-star-filled-48.png" alt="" class="anh-them">
 	  				  	<img src="GUI/images/icons8-star-filled-48.png" alt="" class="anh-them">
 	  				  </div>
 	  			</div>
 	  			<div class="gia-sp"><p class="p-gia"><?php echo number_format($soluong*$gia); echo ' đ'?></p></div>
 	  			<div class="so-luong-hang"><p class="p-so-luong"><?php echo $soluong; ?></p></div>
 	  		</div>

 	  		<?php 
		 	  	}
		 	  }

 	  		 ?>
 	  		 
 	  	</div>
 	  	<div class="phai">
 	  		 <?php 
 	  		    if(isset($_GET['order']))
 	  		    {
 	  		    	$maNguoiDung = $_GET['order'];
 	  		    	$taiKhoanBUSS = new TaiKhoanBUS();
 	  		    $taiKhoanBUSS =	$taiKhoanBUSS->GetID($maNguoiDung);
 	  		    	 
 	  		    		 
 	  		    		echo '<div class="nut-thanh-toan"><a href="index.php?addOrder='.$taiKhoanBUSS->MaNguoiDung.'&Sum='.$tong.'" class="thanh-toan">Thanh Toán</a></div>
 	  		<div class="thong-tin-khach-hang">
 	  			<p class="thanh-toan-van-chuyen">Thanh toán vận chuyển</p>
 	  			<p class="giao-hang">Giao hàng tới</p>
 	  			<p class="ten-khach-hang">'.$taiKhoanBUSS->TenNguoiDung.'</p>
 	  			<p class="p-khach-hang">Địa chỉ: '.$taiKhoanBUSS->NoiSinh.'</p>
 	  		</div>
 	  		<div class="thong-tin-don-hang">
 	  			<p class="thanh-toan-van-chuyen">Thông tin đơn hàng</p>
 	  			<p class="p-tam-tinh">Tạm tính</p>
 	  			<p class="p-tong-tien">'.number_format($tong).' đ</p>
 	  		</div>
 	  		<div class="tam-tinh"></div>
 	  		<div class="nut-thanh-toan"><a href="index.php?addOrder='.$taiKhoanBUSS->MaNguoiDung.'&Sum='.$tong.'" class="thanh-toan">Thanh Toán</a></div>';
 	  		    	 
 	  		    }
 	  		  ?>
 	  		

 	  	</div>
 	  </div>