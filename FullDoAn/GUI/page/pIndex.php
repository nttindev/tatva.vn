

 
<div class="div-most-popular">
				 
				 
			<div class="most-popular" id="cha-di-chuyen">
				<div class="bao-loai-sanpham">
					<?php
					//layLoaiSanPham();
				    $loaiSanPhamBUS = new LoaiSanPhamBUS();
				     $lstSanPham = $loaiSanPhamBUS->GetAllAvailable();
				     foreach($lstSanPham as $loaiSanPhamBUS)
				     {
				     	echo '<div class="most xe-may">
			   <a href="?a=5&cat='.$loaiSanPhamBUS->MaLoaiSanPham.'" cid="">
				   <img class="icon" src="GUI/images/'.$loaiSanPhamBUS->HinhURL.'" alt="">
							 '.$loaiSanPhamBUS->TenLoaiSanPham.'
						   
				   
			  </a>
		   </div>';
				     }
					?>
				</div>	
					
					
				 
				  
				  <div class="ban-chay">
				 	  CÁC SẢN PHẨM BÁN CHẠY NHẤT
				 </div>



                <?php
     
                 
                          $sanPhamBUS = new SanPhamBUS();
   	      $lstSanPhamBanChay = $sanPhamBUS->GetProductSelling();
   	      $count = 0;

   	      foreach($lstSanPhamBanChay as $sanPhamBUS)
   	      {
 		      
 		       if($count < 10)
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
 		      	 $count ++;
 		       
   	      }
                   
                ?>
                        
        
				 
				 
	 
			</div> <!-- ket thuc most-popular -->

			<div class="ban-chay-nhat" id="cha-di-chuyen">
						
				 <div class="cung-loai">
				 	  SẢN PHẨM MỚI NHẤT
				 </div>
				  
				  <?php
				  // laySanPhamMoi();
				     $sanPhamBUS = new SanPhamBUS();
				    $lstSanPham =  $sanPhamBUS->GetProductNew();
				   $count = 0;
				   foreach ($lstSanPham as $sanPhamBUS)
				   {
				   	    
				   	     if($count < 10)
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
				   	      $count ++;
				   }
				 ?>
				 
	 
			</div> <!-- 1180 --> <!-- ket thuc ban chay nhat -->
		 </div> <!-- ket thuc div- most-popular -->
			
			  <!-- ket thuc collections -->
			<div class="flash-sale">
				
			</div> <!-- ket thuc flash-sale -->
			<div class="lazMall">
				
			</div><!-- ket thuc lazMall -->
			<div class="categories">
				
			</div> <!-- ket thuc categories -->
			<div class="just-for-you">
				
			</div> <!-- ket thuc just-for-you -->