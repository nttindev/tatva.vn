<div class="bao-loai-sanpham-new">

<?php
					 $loaiSanPhamBUS = new LoaiSanPhamBUS();
				     $lstSanPham = $loaiSanPhamBUS->GetAllAvailable();
				     foreach($lstSanPham as $loaiSanPhamBUS)
				     {
				     	echo '<div class="most xe-may">
			   <a href="?a=5&cat='.$loaiSanPhamBUS->MaLoaiSanPham.'" cid="">
				   
							 '.$loaiSanPhamBUS->TenLoaiSanPham.'
						   
				   
			  </a>
		   </div>';
				     }
					?>
				</div>	
				 
				  
				  
         <div class="boc">
	   	     <form action="?a=13" enctype="multipart/form-data" method="POST" class="form-cart">
                     
                      


  

			<?php

			 if(isset($_SESSION['id_nguoidung']))
			 {
			// global $con;
			 $maNguoiDung = $_SESSION['id_nguoidung'];
			 
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
   				 
                   $tong += $gia*$soluong;

			?>

                     <div class="boc-sp">
                       
                      <!-- 	<input type="checkbox" name="remove_<?php echo $maSanPham;?>" class="i" value="<?php echo $sanPhamBUS->MaSanPham;?>"> -->
                       	<input type="checkbox" name="remove[]" class="i" value="<?php echo $sanPhamBUS->MaSanPham;?>">
                      <div class="sanpham-img">
                      	 <div class="div-img">
                      	 	<img src="GUI/images/<?php echo $sanPhamBUS->AnhURL;?>" alt="" class="img">
                      	 </div>
                      	 <div class="thongtinsp">
                      	 	<div class="tensp">
                      	 		<?php echo $sanPhamBUS->TenSanPham;?>
                      	 	</div>
							<img src="GUI/images/icons8-star-filled-48.png" alt="" class="anh-them">
 	  				  	<img src="GUI/images/icons8-star-filled-48.png" alt="" class="anh-them">
 	  				  	<img src="GUI/images/icons8-star-filled-48.png" alt="" class="anh-them">
 	  				  	<img src="GUI/images/icons8-star-filled-48.png" alt="" class="anh-them">
 	  				  	<img src="GUI/images/icons8-star-filled-48.png" alt="" class="anh-them">
                      	 </div>
                  	 </div>
                      	
                      	 <div class="soluong">
                      	 	<select name="soluong_<?php echo $gioHangBUS->MaSanPham;?>" id="" class="sl" >
						<option>
						   [Số lượng]
						</option>
						<?php

						for($i=1; $i < 1000;++$i)
						{
						?>
						      <option value="<?php echo $i; ?>" >
						      	<?php echo $i; ?>
						      </option>
						<?php
						}
						?>
				</select>
                      	 	  
                      	 </div>
                      	  <div class="giasp">
                      	 	   <?php echo number_format($sanPhamBUS->GiaSanPham*$soluong); echo 'đ'?>
                      	 </div>
                      	 <input type="text" name="" readonly="readonly" class="sl-sp" value="<?php echo $soluong?>">
                     </div>

			
                      
                    

						<?php
					  }
			 }
		 
			  
			?>
			
	 
                   
 				
               <span class="tien">Tổng tiền:  <?php echo number_format($tong); ?></span>
               	<input type="submit" name="xoa-s" value="Xóa" class="bam">
               	<input type="submit" name="update-s" value="Cập Nhật" class="bam">
	   	     	<!-- <input type="submit" name="muasam" value="Thanh Toán" class="bam"> -->
                <div class="nut-thanh-toan"><a href="?a=11&order=<?php echo  $maNguoiDung; ?>" class="xac-nhan-hang">Xác nhận giỏ hàng</a></div>

              <!--  </div> -->
	   	     	
	   	     </form>
	   	      
				
				 
	   	      
		 
	   </div>
	    
 

			<div class="ban-chay-nhat" id="cha-di-chuyen">
						
				  
				 
	 
			</div> <!-- 1180 -->
		 </div> <!-- ket thuc most-popular -->
			
			  <!-- ket thuc collections -->
			<div class="flash-sale">
				
			</div> <!-- ket thuc flash-sale -->
			<div class="lazMall">
				
			</div><!-- ket thuc lazMall -->
			<div class="categories">
				
			</div> <!-- ket thuc categories -->
			<div class="just-for-you">
				
			</div> <!-- ket thuc just-for-you -->
		</div>