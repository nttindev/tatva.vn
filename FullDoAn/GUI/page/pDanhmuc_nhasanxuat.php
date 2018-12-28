<div class="div-most-popular">
				 
				 
			<div class="most-popular-new" id="cha-di-chuyen">
						
					
				  
                 <?php
                 // LaySanPhamTheoHang();
	                 if(isset($_GET['brand']))
	                 {
	                 	$maHangSanXuat = $_GET['brand'];
	                 	$sanPhamBUS = new SanPhamBUS();
	                 	$lstSanPhamHang = $sanPhamBUS->GetByID_Hang($maHangSanXuat);
	                 	foreach($lstSanPhamHang as $sanPhamBUS)
	                 	{
	                 		echo '<div class="most most1">
                            <a href="?a=4&pro_id='.$sanPhamBUS->MaSanPham.'">
                               <div class="most-nho">
                                   <div class="nho"><img class="img1" src="GUI/images/'.$sanPhamBUS->AnhURL.'" alt=""></div>
                                   <div class="nho">
                                       <div class="ten-san-pham">
                                           '.$sanPhamBUS->TenSanPham.'
                                       </div>
                                       <p class="the-p">'.number_format($sanPhamBUS->GiaSanPham).' đ</p>
                                   </div>
                               </div>
                           </a>
                    </div>';
	                 	}

	                 }
                 ?>
                 
                  
                
				 
	  
			</div>

			 <!-- 1180 -->
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