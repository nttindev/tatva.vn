<?php 
						 	  			 if(isset($_GET['Huy']))
						 	  			 {
						 	  			 	 
						 	  			 		$maDonDatHang = $_GET['Huy'];
						 	  			 		$donDatHangBUS = new DonDatHangBus();
						 	  			 		$donDatHangBUS->Update($maDonDatHang);
						 	  			 		$maNguoiDung = $_SESSION['id_nguoidung'];
						 	  			 		echo "<script>window.open('?a=9&orderKiemTra=$maNguoiDung','_self')</script>";
						 	  			 	 
						 	  			 	
						 	  			 }

						 	  			 ?>

 