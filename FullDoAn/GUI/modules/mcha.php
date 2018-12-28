<div class="cha">
	   		<div class="cha-di-chuyen" id="cha-di-chuyen">
               <?php
                 // layHangSanPham();

                   $hangSanXuatBUS = new HangSanXuatBUS();
                   $lstHang  = $hangSanXuatBUS->GetAllAvailable();
                   foreach($lstHang as $hangSanXuatBUS)
                   {
			                   	    echo '<a href="?a=6&brand='.$hangSanXuatBUS->MaHangSanXuat.'" bid="">
						<div class="con">
							<img class="anh1 anh" src="GUI/images/'.$hangSanXuatBUS->LogoURL.'" alt="">
							
						</div>
						</a>';
                   }
               ?>
	   				 
	   	    		
	   		</div>
	   	    		
	   	  </div>