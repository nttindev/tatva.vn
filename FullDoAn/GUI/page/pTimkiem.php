<div class="div-most-popular">
				 
				 
			<div class="most-popular-new" id="cha-di-chuyen">
					<div class="bao-loai-sanpham">	
					<?php
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



                <?php
     
                

                   
                     if(isset($_POST['btn-search']))
                     {
                     	 $Search = $_POST['search'];
                     	  
                     	 $sanPhamBUS = new SanPhamBUS();
                     	 $lstSanPham = $sanPhamBUS->TimKiemNangCao($Search);
                     	 foreach($lstSanPham as $sanPhamBUS)
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


                        //  laysanpham();
                   
                ?>
                        
        
			 
	 
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