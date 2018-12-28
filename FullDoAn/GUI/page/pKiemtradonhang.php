<div class="boc-ben-ngoai">
 	  	<div class="trai-khac">
 	  		<div class="cot-tieu-de-ngoai">
 	  		   <div class="ma-don"><span>Mã Đơn Hàng</span></div>
 	  		   <div class="tinh-trang"><span>Tình Trạng</span></div>
 	  		   <div class="huy"><span>Hủy</span></div>
 	  		   <div class="xac-nhan"><span>Xác nhận Đơn Hàng</span></div>	
 	  		</div>
 	  		<?php 
 	  		    if(isset($_GET['orderKiemTra']))
 	  		    {
 	  		    	 $maNguoiDung = $_GET['orderKiemTra'];
 	  		    	  $donDatHangBUS = new DonDatHangBus();
 	  		    	  $lst = $donDatHangBUS->GetDonHang($maNguoiDung);
 	  		    	  foreach($lst as $donDatHangBUS)
 	  		    	  {
 	  		    	  	  ?>

		

								<div class="mat-hang-thong-tin">
					 	  			<div class="san-pham-thanh-toan-roi">
					 	  				<!--  <img src="images/8.jpg" alt="" class="img-tt"> -->
					 	  				 <p class="ma-don-hang"><?php echo $donDatHangBUS->MaDonDatHang; ?></p>
					 	  				 <!--  <div class="hang-san-xuat"><p class="hang">OPPO</p></div> -->
					 	  			</div>
									<?php 
									   if($donDatHangBUS->TinhTrang == 0)
									   {
									   		echo '<div class="tinh-trang-xu-ly"><p class="xu-ly">Đang được xử lý</p></div>';
									   }
									   else
									   {
									   	  echo '<div class="tinh-trang-xu-ly"><p class="xu-ly">Đang bắt đầu giao</p></div>';
									   	   

									   }
									 ?>
					 	  			
					 	  			<!-- <div class="so-luong-hang"><p class="p-so-luong">2</p></div> -->
					 	  			<?php 
					 	  			     if($donDatHangBUS->BiXoa == 0)
					 	  			     {
					 	  			     	echo '<div class="thong-bao-huy-roi"><p class="xu-ly">Đang đặt hàng</p></div>';
					 	  			     }
					 	  			     else
					 	  			     {
					 	  			     	echo '<div class="thong-bao-huy-roi"><p class="xu-ly">Đã hủy</p></div>';
					 	  			     }
					 	  			 ?>
					 	  			<!-- <div class="thong-bao-huy-roi"><p class="xu-ly">Đã hủy</p></div> -->

					 	  			 <a href="?a=16&Huy=<?php echo $donDatHangBUS->MaDonDatHang; ?>" onclick="return confirm('Bạn có chắc chắn hủy đơn hàng');" class="huy-don">Hủy đơn hàng</a>
										 
						 	  			  
					 	  			  
					 	  		</div>


 	  		    	  	 <?php  
 	  		    	  }
 	  		    }
 	  		    
 	  		   

 	  		 ?>
 	  		
 	  		 
 	  		     
 	  	</div>
 	   
 	  </div>