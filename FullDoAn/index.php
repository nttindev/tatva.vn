

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>TATAVA</title>
	<link rel="stylesheet" type="text/css" href="./GUI/css/style.css">
	<link rel="shortcut icon" type="image/png" href="./GUI/images/logoweb.png"/>
</head>
<body>
	 
	   <div class="container">
                    
                  <?php
                  			require_once "DTO/SanPham.php";
                  			require_once "DTO/LoaiSanPham.php";
               				require_once "DTO/TaiKhoan.php";
			   	  	       	require_once "DTO/HangSanXuat.php";
			   	  	        require_once "DTO/QuanTri.php";
			   	  	        require_once "DTO/GioHang.php";
		   	  	         	require_once "DTO/DonDatHang.php";
		   	  	         	require_once "DTO/ChiTietDonDatHang.php";

			   	  	        require_once "DAO/db.php";
			   	  	        require_once "DAO/SanPhamDAO.php";
			   	  	        require_once "DAO/HangSanXuatDAO.php";
	   	  	         	    require_once "DAO/LoaiSanPhamDAO.php";
   	  	         			require_once "DAO/TaiKhoanDAO.php";
		   	  	            require_once "DAO/QuanTriDAO.php";
		   	  	          	require_once "DAO/GioHangDAO.php";
		   	  	          	require_once "DAO/DonDatHangDAO.php";
	   	  	          		require_once "DAO/ChiTietDonDatHangDAO.php";

			   	  	      	require_once "BUS/SanPhamBUS.php";
			   	  	       	require_once "BUS/HangSanXuatBUS.php";
			   	  	        require_once "BUS/LoaiSanPhamBUS.php";
			   	  	        require_once "BUS/TaiKhoanBUS.php";
		   	  	         	require_once "BUS/QuanTriBUS.php";
		   	  	          	require_once "BUS/GioHangBUS.php";
		   	  	          	require_once "BUS/DonDatHangBUS.php";
		   	  	          	require_once "BUS/ChiTietDonDatHangBUS.php";
			   	   include_once ("GUI/modules/mheader_chung.php");
			   	    ?>
			   	     <?php include_once ("GUI/modules/mcha.php"); ?>
			   <div class="content">
			   	  	  <?php 
			   	  	       
			   	  	  		// $a = isset($_GET['b'])&&$_GET['b']?$_GET['b']:'home';
			   	  	  		// $path = 'GUI/page/'.$a.'.php';
			   	  	  		// if(file_exists($path))
			   	  	  		// {
			   	  	  		// 	include $path;
			   	  	  			 
			   	  	  		// }
			   	  	  		// else
			   	  	  		// {
			   	  	  		// 	include "GUI/page/404.php";
			   	  	  		// }
			   	  	  		$a = 1;
			   	  	  	  if(isset($_GET['a']))
			   	  	  	  {
			   	  	  	  	 $a = $_GET['a'];
			   	  	  	  }
			   	  	  	   switch($a)
			   	  	  	   {
			   	  	  	   	  case 1: 

			   	  	  	   	   include "GUI/page/pIndex.php";
			   	  	  	   	    break;
			   	  	  	   	     
		   	  	  	   	  	case 2:
			   	  	  	   	     include "GUI/page/pDangky.php";
			   	  	  	   	     break;
	   	  	  	   	 		case  3:
			   	  	  	   	     include "GUI/page/pDangnhap.php";
			   	  	  	   	     break;
		   	  	  	   	  	case 4:
			   	  	  	   	 	 include "GUI/page/pChitiet.php";
			   	  	  	   	   break;
		   	  	  	   	   	case 5:
		   	  	  	   	    	include "GUI/page/pDanhmuc_loaisanpham.php";
			   	  	  	   	    break;
	   	  	  	   	 	 	case 6:
			   	  	  	   	    include "GUI/page/pDanhmuc_nhasanxuat.php";
			   	  	  	   	    break;
	   	  	  	   	     	case 7:
			   	  	  	   	    include "GUI/page/pGiohang.php";
			   	  	  	   	    break;
	   	  	  	   	     	 
	   	  	  	   	    	case 9:
			   	  	  	   	    include "GUI/page/pKiemtradonhang.php";
			   	  	  	   	    break;
	   	  	  	   	     	case 10:
			   	  	  	   	    include "GUI/page/pTimkiem.php";
			   	  	  	   	    break;
   	  	  	   	     		case  11:
			   	  	  	   	    include "GUI/page/pXacnhanthongtindathang.php";
			   	  	  	   	    break;
	   	  	  	   	     	case 12:
			   	  	  	   	    include "GUI/modules/mDangky/exDangKy.php";
			   	  	  	   	    break;
   	  	  	   	    		case 13:
			   	  	  	   	    include "GUI/modules/mGiohang/exGioHang.php";
			   	  	  	   	    break;
	   	  	  	   	   		case 14:
			   	  	  	   	    include "GUI/modules/mLogin/exDangNhap.php";
			   	  	  	   	    break;
	   	  	  	   	    	case 15:
			   	  	  	   	    include "GUI/modules/mLogin/exDangxuat.php";
			   	  	  	   	    break;
		   	  	  	   	    case 16:
			   	  	  	   	    include "GUI/modules/mXuLy/exHuy.php";
			   	  	  	   	    break;
			   	  	  	   	 default: 
			   	  	  	   	   include "GUI/page/404.php";
			   	  	  	   	   break;

			   	  	  	   }
			   	  	   ?>
			   	  </div>
                   
                 
			   	 

	 			
			   	 
			   	  	
			   	  <?php include ("GUI/modules/mfooter.php") ?>
	   </div>
	     
</body>
</html>