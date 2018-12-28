<?php 

 


 
  if(isset($_SESSION['id_nguoidung']))
  		{
			  			if(isset($_POST['update-s']) )
			  			{
			  				// foreach($_POST['remove'] as $remove){
			  				$maNguoiDung = $_SESSION['id_nguoidung'];
			  				 
				   			$gioHangBUS = new GioHangBUS();
				   			$lstGioHangss = $gioHangBUS->GetByID($maNguoiDung);
				   			foreach($lstGioHangss as $gioHangBUS)
				   			{
									
			                        
						 				  
						 			$maSanPham = $gioHangBUS->MaSanPham;
						 			$maNguoiDung = $gioHangBUS->MaNguoiDung;

						 			$SoLuong = $_POST["soluong_$gioHangBUS->MaSanPham"];  
						 			 if(isset($SoLuong))
						 			 {

			                              $gioHangBUSS = new GioHangBUS();
										  $gioHangBUSS->Update($maSanPham,$maNguoiDung,$SoLuong);//cập nhật số lượng
										   echo "<script>window.open('?a=7','_self')</script>";  
						 			 }
						 			 else
						 			 {
						 			 	echo "<script>alert('hãy chọn số lượng cập nhật')</script>";
						 			 	echo "<script>window.open('?a=7','_self')</script>"; 
						 			 }
										// echo $ip;
									 
				 	 
				   			 }


			  			}
			   			else
			   			{
			   				if(isset($_POST['xoa-s'])){
			   					if(isset($_POST['remove']))
						   						{
													foreach($_POST['remove'] as $remove){
												
												$maNguoiDung = $_SESSION['id_nguoidung'];
												$maSanPham = $remove;
													$gioHangBUS  = new GioHangBUS();
													$gioHangBUS->Delete_DangNhap($maSanPham,$maNguoiDung);
													echo "<script>window.open('?a=7','_self')</script>";
													 
												
									   					}
						   						}
					 							else
					 							{
					 								echo "<script>alert('Bạn phải chọn ít nhất 1 sản phẩm để xóa')</script>";
					 								echo "<script>window.open('?a=7','_self')</script>";
					 							}
									
								  
			   							}			//$ip = getip();
			   			
						}
   
			  } 
				

 ?>