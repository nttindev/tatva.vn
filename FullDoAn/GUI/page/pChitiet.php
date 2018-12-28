
 
<div class="cha">
	   		<div class="cha-di-chuyen" id="cha-di-chuyen">
	   				  
					   <?php
		 // laychitietsanpham();
		 // $count
		      if(isset($_GET['pro_id']))
		      {


				  $maSanPham = $_GET['pro_id'];
				  $sanPhamBUSS = new SanPhamBUS();
				  $sanPhamBUSS->Update($maSanPham);
		      	   $sanPhamBUS = new SanPhamBUS();

		     	 $sanPhamBUS = $sanPhamBUS->GetByID_ChiTiet($maSanPham);
		       
		      
		       
		      	//    $sanPhamBUS->Update($soLuotXem,$maSanPham);
		      	    @$maHangSanXuat = $sanPhamBUS->MaHangSanXuat;
		      	     	 // $soLuotXem = $sanPhamBUSS->SoLuotXem;
                         
		      	     	   
		      	     	 
		      	     	$hangSanXuatBUS = new HangSanXuatBUS();
		      	     	$hangSanXuatBUS =  $hangSanXuatBUS->GetByID($maHangSanXuat);
		      	         

		      	     		
		      	     	 
		      	     	// echo ''
		       
		      	        
		      	   	    

		      	   	     // $hangSanXuatBUS = new HangSanXuatBUS();
		      	   	     // $lstHang = $hangSanXuatBUS ->GetByID($maHangSanXuat);
		      	   	      
                  //            $tenHang = $hangSanXuatBUS->TenHangSanXuat;
		      	   	     
		      	   
		      	   echo '<div class="sanpham">
             <div class="img-right">
                     <img src="GUI/images/'.@$sanPhamBUS->AnhURL.'" alt="" class="img-sanpham">
             </div>
             <div class="thong-tin">
                   <div class="tensanpham">
                        <a href="" class="a-nha-san-xuat">Tên sản phẩm: '.@$sanPhamBUS->TenSanPham.'</a>
                   </div>
                   <div class="gia-ban">
                       <p class="p-gia-ban">Giá:  '.@number_format($sanPhamBUS->GiaSanPham).' đ</p>
                   </div>
                   <div class="so-luot-xem">
                        <div>
                            <p class="p-luot-xem">Lượt xem: '.@$sanPhamBUS->SoLuotXem.' </p>
                        </div>
                        <div>
                            <img src="" alt="" class="img-con-mat">
                        </div>
                   </div>
                   <div class="so-luot-ban">
                       <p class="p-so-luot-ban">Lượt bán: '.@$sanPhamBUS->SoLuongBan.' </p>
                   </div>
                   <div class="mo-ta">
                       
                       <div class="tieu-de">
                             <p class="mo-ta">Mô Tả</p>
                             <div class="thong-tin-sp">
                                 <p class="p-mota">'.@$sanPhamBUS->MoTa.'</p>
                             </div>
                       </div>
                   </div>
                   <div class="xuat-xu">
                       <p class="p-xuat-xu">Xuất xứ: '.@$sanPhamBUS->XuatXu.'</p>
                   </div>
                   <div class="nha-san-xuat">
                        <p class="p-xuat-xu">Nhà sản xuất: '.@$hangSanXuatBUS->TenHangSanXuat.'</p>
                   </div>
                   <div class="mua-ngay">
                       <a href="" class="nut-nhan" name="shopping">MUA NGAY</a>
                   </div>
                    <div class="them-vao-gio-hang">
                        <a href="index.php?addcart='.@$sanPhamBUS->MaSanPham.'" class="nut-nhan1" name="AddtoCart">THÊM VÀO GIỎ HÀNG</a>
                    </div>
             </div>
        </div>';
		      }
		 ?>
		 
					<!-- <div class="most xe-may">
				 	 CÁC SẢN PHẨM CÙNG LOẠI
				 </div> -->
				
    		<div class="nam-san-pham-cung-loai">
    			 <div class="cung-loai">
				 	  CÁC SẢN PHẨM CÙNG LOẠI
				 </div>
				 <?php
				  // sanphamtuongtu();
       if(isset($_GET['pro_id'])){
       	   $maSanPham = $_GET['pro_id'];
       	   @$sanPhamBUS = new SanPhamBUS();
       	   $sanPhamBUSS =  $sanPhamBUS->GetByID_ChiTiet($maSanPham);
       	   @$maLoaiSanPham = $sanPhamBUSS->MaLoaiSanPham;
       	   $lstSanPham   = $sanPhamBUS->GetByID_Loai($maLoaiSanPham);
       	   $count = 0;
       	   foreach(@$lstSanPham as $sanPhamBUS)
       	   {
	       	   	if($count < 5)
	       	   	{
	       	   		 echo '<div class="most most1">
	                         <a href="?a=4&pro_id='.@$sanPhamBUS->MaSanPham.'">
	                         <div class="most-nho">
	                             <div class="nho"><img class="img1" src="GUI/images/'.@$sanPhamBUS->AnhURL.'" alt=""></div>
	                             <div class="nho">
	                                 <div class="ten-san-pham">
	                                     '.@$sanPhamBUS->TenSanPham.'
	                                 </div>
	                                 <p class="the-p">'.@number_format($sanPhamBUS->GiaSanPham).' đ</p>
	                             </div>
	                         </div>
	                     </a>
	                 </div>';
	       	   	}
	               $count ++;
       	   }

       }
       
         

				 ?>
       
			 
	    		</div>
	   		</div>
	   	    		
	   	  </div>
  
	