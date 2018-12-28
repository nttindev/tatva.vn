


<div class="header">
	<a href="index.php"><img src="GUI/images/logoweb.png" alt="" class="logo"></a>
	   	    <div class="header-tim-kiem">
	   	    	<div class="navigate">
	   	    		 
						 <div class="main-wrapper">
						  
							  <?php
							   include "mheader.php";
							   // ThemVaoGioHang();
							   if(isset($_GET['addcart']))
							   {
								   	  if(isset($_SESSION['id_nguoidung']))
								   	  {
								   	  	 $maSanPham = $_GET['addcart'];
								   	  	 $maNguoiDung = $_SESSION['id_nguoidung'];
								   	  	 $gioHangBUS = new GioHangBus();
								   	  	 $SoDong = $gioHangBUS->DemSoDong($maNguoiDung, $maSanPham);
								   	  	  // $gioHangBUS = $gioHangBUS->GetByID($maNguoiDung);
								   	  	 	// $SoLuong = $gioHangBUS->SoLuong;



										   	  	 if($SoDong > 0)
										   	  	 {
										   	  	 	$gioHangBUSS = new GioHangBUS();
														 $gioHangBUSS->Update_SoLuong($maSanPham,$maNguoiDung);
										   	  	 		  echo "<script>alert('Sản phẩm đã được tồn tại trong giỏ hàng')</script>";
														echo "<script>window.open('?a=4&pro_id=$maSanPham','_self')</script>";
														 
										   	  	 }
										   	  	 else
										   	  	 {
										   	  	 	    $gioHangBUS->Insert_With_DangNhap($maSanPham,$maNguoiDung);
										   	  	 	    // echo "<script>alert('Sản phẩm đã được thêm vào giỏ hàng thành công')</script>";
									 		           echo "<script>window.open('?a=4&pro_id=$maSanPham','_self')</script>";
										   	  	 }

								   	  }
								   	  else
								   	  {
	                                     // $maSanPham = $_GET['pro_id'];
	                                     $maSanPham = $_GET['addcart'];
	                                     echo "<script>alert('Bạn phải đăng nhập để mua hàng')</script>";
							 		           echo "<script>window.open('?a=3','_self')</script>";

								   	  	 

								   	  }
							   }

							   //insert Order
							   if(isset($_GET['addOrder']) && isset($_GET['Sum']))
							   {


							   	 			date_default_timezone_set('Asia/Ho_Chi_Minh');
  												$maNguoiDung = $_GET['addOrder'];
  												$tongThanhTien = $_GET['Sum'];
  												 // Insert_With_donDatHang($maDonDatHang,$maNguoiDung,$ngayLap,$tongThanhTien)
  												$ngayLap =  date('Y-m-d H:i:s');
  												$thang = date('m');
											    $ngay = date('d');
											    $nam = date('y');
											   // $gio = date('h:i:s');
											   $ngayy = $ngay.$thang.$nam; 
											   $stt = 1;
											   $maDonDatHang = $ngayy.str_repeat('0',3-strlen($stt)).$stt;
											  											  
  										  $donDatHangBUS = new DonDatHangBUS();
  										  $soDong = $donDatHangBUS->DemSoDong();

  										if($soDong == 0)
  						 				{
  											 
  											$donDatHangBUS->Insert_With_donDatHang($maDonDatHang,$maNguoiDung,$ngayLap,$tongThanhTien);

  												//Insert Chi Tiet Don Dat Hang.
  												if(isset($_GET['addOrder']))
  												{
  													$maNguoiDung = $_GET['addOrder'];
  													$gioHangBUS = new GioHangBUS();
  													$lst = $gioHangBUS->GetByID($maNguoiDung);
		  											foreach($lst as $gioHangBUS)
		  											{
		  												$maSanPham = $gioHangBUS->MaSanPham;
		  												$soLuong = $gioHangBUS->SoLuong;
		  												$sanPhamBUS = new SanPhamBUS();
		  												$sanPhamBUS = $sanPhamBUS->GetByID_ChiTiet($maSanPham);
		  												$gia = $sanPhamBUS->GiaSanPham;
		  												$giaBan = $soLuong*$gia;

		  												$chiTietDonDatHangBUS  = new ChiTietDonDatHangBUS();
		  												$chiTietDonDatHangBUS->Insert_With_DonDatHang($maSanPham,$soLuong,$giaBan,$maDonDatHang);

		  													//Cập nhật giỏ hàng số lượng đã bán
		  											// 		tăng số lượng bán lên 1 ứng với mã sản phẩm
									   	  // giảm số lượng tồn
											   	    
											   	   
		  											}

		  											$chiTietDonDatHangBUS = new ChiTietDonDatHangBUS();
											   	    $lst = $chiTietDonDatHangBUS->GetByID($maDonDatHang);
											   	    foreach($lst as $chiTietDonDatHang)
											   	    {
											   	    	$maSanPham = $chiTietDonDatHang->MaSanPham;
											   	    	$soLuong = $chiTietDonDatHang->SoLuong;
											   	    	$sanPhamBUS = new SanPhamBUS();
											   	    	$sanPhamBUS = $sanPhamBUS->GetByID_ChiTiet($maSanPham);

											   	    	$soLuongTon = $sanPhamBUS->SoLuongTon;
											   	    	$soLuongTon = $soLuongTon - $soLuong;

											   	    	$soLuongBan = $sanPhamBUS->SoLuongBan;
											   	    	$soLuongBan = $soLuongBan + $soLuong;

											   	    	$sanPhamBUSS = new SanPhamBUS();
											   	    	$sanPhamBUSS->Update_SoLuongTon($soLuongTon,$maSanPham);

											   	    	$sanPhamBUSS->Update_SoLuongBan($soLuongBan,$maSanPham);

									   	  			  }
		  											//Cập nhật giỏ hàng số lượng đã bán
		  											 


		  											//Xóa giỏ hàng
		  											
		  											$gioHangBUSS = new GioHangBUS();
		  											$gioHangBUSS->Delete_gioHang($maNguoiDung);
		  											 // echo "<script>alert('Bạn đã đặt thành Công')</script>";
	  											 echo "<script>window.open('index.php','_self')</script>";
  												}
  												 
  												
  											
  											 
  										}
  										else
  										{
  											 $donDatHangBUSS = new DonDatHangBUS();
  											 $lst = $donDatHangBUSS->GetAllAvailable();
  											 foreach($lst as $donDatHangBUSS)
  											 {
  											 	$maDonDatHang = $donDatHangBUSS->MaDonDatHang;
  											 }

  											  
  											  $maDonDatHang_new = substr($maDonDatHang,0,6);//cắt chuỗi lấy 6 ký tự từ vị trí 0
  											  if($maDonDatHang_new!=$ngayy) //Nếu khác ngày thì reset cho số thứ tự về 1
  											  {
  											  	$stt = 1;
  											  	$maDonDatHang = $ngayy.str_repeat('0',3-strlen($stt)).$stt;
  											  	$donDatHangBUS->Insert_With_donDatHang($maDonDatHang,$maNguoiDung,$ngayLap,$tongThanhTien);

  											  	//chitiet
  											  	if(isset($_GET['addOrder']))
  												{
  													$maNguoiDung = $_GET['addOrder'];
  													$gioHangBUS = new GioHangBUS();
  													$lst = $gioHangBUS->GetByID($maNguoiDung);
		  											foreach($lst as $gioHangBUS)
		  											{
		  												$maSanPham = $gioHangBUS->MaSanPham;
		  												$soLuong = $gioHangBUS->SoLuong;
		  												$sanPhamBUS = new SanPhamBUS();
		  												$sanPhamBUS = $sanPhamBUS->GetByID_ChiTiet($maSanPham);
		  												$gia = $sanPhamBUS->GiaSanPham;
		  												$giaBan = $soLuong*$gia;

		  												$chiTietDonDatHangBUS  = new ChiTietDonDatHangBUS();
		  												$chiTietDonDatHangBUS->Insert_With_DonDatHang($maSanPham,$soLuong,$giaBan,$maDonDatHang);

		  													//Cập nhật giỏ hàng số lượng đã bán
		  											// 		tăng số lượng bán lên 1 ứng với mã sản phẩm
									   	  // giảm số lượng tồn
											   	    
											   	   
		  											}

		  											$chiTietDonDatHangBUS = new ChiTietDonDatHangBUS();
											   	    $lst = $chiTietDonDatHangBUS->GetByID($maDonDatHang);
											   	    foreach($lst as $chiTietDonDatHang)
											   	    {
											   	    	$maSanPham = $chiTietDonDatHang->MaSanPham;
											   	    	$soLuong = $chiTietDonDatHang->SoLuong;
											   	    	$sanPhamBUS = new SanPhamBUS();
											   	    	$sanPhamBUS = $sanPhamBUS->GetByID_ChiTiet($maSanPham);

											   	    	$soLuongTon = $sanPhamBUS->SoLuongTon;
											   	    	$soLuongTon = $soLuongTon - $soLuong;

											   	    	$soLuongBan = $sanPhamBUS->SoLuongBan;
											   	    	$soLuongBan = $soLuongBan + $soLuong;

											   	    	$sanPhamBUSS = new SanPhamBUS();
											   	    	$sanPhamBUSS->Update_SoLuongTon($soLuongTon,$maSanPham);

											   	    	$sanPhamBUSS->Update_SoLuongBan($soLuongBan,$maSanPham);

									   	  			  }
		  											//Cập nhật giỏ hàng số lượng đã bán
		  											 


		  											//Xóa giỏ hàng
		  											
		  											$gioHangBUSS = new GioHangBUS();
		  											$gioHangBUSS->Delete_gioHang($maNguoiDung);
		  											 // echo "<script>alert('Bạn đã đặt thành Công')</script>";
	  											 echo "<script>window.open('index.php','_self')</script>";
  												}
  											  }
  											  else //ngược lại nếu cùng ngày thì 001 tăng lên 002 
  											  {
  											  	$maDonDatHang = substr($maDonDatHang,6,3);
  											  	$maDonDatHang +=1;
  											 	$maDonDatHang = $ngayy.str_repeat('0',3-strlen($maDonDatHang)).$maDonDatHang;
  											 	$donDatHangBUS->Insert_With_donDatHang($maDonDatHang,$maNguoiDung,$ngayLap,$tongThanhTien);

  											 	//chi tiet
  											 	if(isset($_GET['addOrder']))
  												{
  													$maNguoiDung = $_GET['addOrder'];
  													$gioHangBUS = new GioHangBUS();
  													$lst = $gioHangBUS->GetByID($maNguoiDung);
		  											foreach($lst as $gioHangBUS)
		  											{
		  												$maSanPham = $gioHangBUS->MaSanPham;
		  												$soLuong = $gioHangBUS->SoLuong;
		  												$sanPhamBUS = new SanPhamBUS();
		  												$sanPhamBUS = $sanPhamBUS->GetByID_ChiTiet($maSanPham);
		  												$gia = $sanPhamBUS->GiaSanPham;
		  												$giaBan = $soLuong*$gia;

		  												$chiTietDonDatHangBUS  = new ChiTietDonDatHangBUS();
		  												$chiTietDonDatHangBUS->Insert_With_DonDatHang($maSanPham,$soLuong,$giaBan,$maDonDatHang);

		  													//Cập nhật giỏ hàng số lượng đã bán
		  											// 		tăng số lượng bán lên 1 ứng với mã sản phẩm
									   	  // giảm số lượng tồn
											   	    
											   	   
		  											}

		  											$chiTietDonDatHangBUS = new ChiTietDonDatHangBUS();
											   	    $lst = $chiTietDonDatHangBUS->GetByID($maDonDatHang);
											   	    foreach($lst as $chiTietDonDatHang)
											   	    {
											   	    	$maSanPham = $chiTietDonDatHang->MaSanPham;
											   	    	$soLuong = $chiTietDonDatHang->SoLuong;
											   	    	$sanPhamBUS = new SanPhamBUS();
											   	    	$sanPhamBUS = $sanPhamBUS->GetByID_ChiTiet($maSanPham);

											   	    	$soLuongTon = $sanPhamBUS->SoLuongTon;
											   	    	$soLuongTon = $soLuongTon - $soLuong;

											   	    	$soLuongBan = $sanPhamBUS->SoLuongBan;
											   	    	$soLuongBan = $soLuongBan + $soLuong;

											   	    	$sanPhamBUSS = new SanPhamBUS();
											   	    	$sanPhamBUSS->Update_SoLuongTon($soLuongTon,$maSanPham);

											   	    	$sanPhamBUSS->Update_SoLuongBan($soLuongBan,$maSanPham);

									   	  			  }
		  											//Cập nhật giỏ hàng số lượng đã bán
		  											//Xóa giỏ hàng
		  											
		  											$gioHangBUSS = new GioHangBUS();
		  											$gioHangBUSS->Delete_gioHang($maNguoiDung);
		  											 // echo "<script>alert('Bạn đã đặt thành Công')</script>";
	  											 echo "<script>window.open('index.php','_self')</script>";
  												}
  											  }
  											  
  											
  										}

  										 
  												
  												
							   }
							  ?>
							 
							 
						 </div>
	   	    		<form action="?a=10" method="post" accept-charset="utf-8">
	   	    			 <input type="search" name="search" placeholder="search here">
	   	    			 
							<button type="submit" class="button_1" name="btn-search">search</button>
	   	    		</form>
	   	    		 
	   	    	</div>  
				 
	   	    </div> <!-- ket thuc header tim kiem -->
	   	    <div class="div-menu-bu">
   	    	 	
	   	    	<div class="img-chay">
	   	    		  
	   	    		 	<img class="maithi" src="GUI/images/oppo.png" alt="">
	   	    		 	 <ul>
	   	    		 	 	<li class="ul"></li>
	   	    		 	 	<li class="ul"></li>
	   	    		 	 	<li class="ul"></li>
	   	    		 	 	<li class="ul"></li>
	   	    		 	 	<li class="ul"></li>
	   	    		 	 	<li class="ul"></li>
	   	    		 	 	<li class="ul"></li>
	   	    		 	 </ul>
	   	    		 
	   	    	</div>
	   	    	
	   	    </div> <!-- ket thuc div menu bu -->
	   	   
	   	</div> <!-- ket thuc header -->