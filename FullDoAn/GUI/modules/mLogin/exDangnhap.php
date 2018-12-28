<?php 



    // session_start();
   if(isset($_POST['submit']))
   {
	   // include "DataProvider/db.php";
	   // global $con;
		    $tenDangNhap = $_POST['username'];
	      $password =$_POST['password'];

	   if(empty($tenDangNhap) || empty($password))
			{
				echo "<script>alert('Tài Khoản hoặc Mật Khẩu Trống')</script>";
				echo "<script>window.open('?a=3','_self')</script>";
			}
           else
           {
           	
           	   
           	  $quanTriBUS = new QuanTriBUS();
           	      $kiemtra_admin   =  $quanTriBUS->Count_UserName($tenDangNhap);

             
           	   
           	   if($kiemtra_admin < 1)
           	   {
           	         
           	        $taiKhoanBUS = new TaiKhoanBUS();
           	        $user_check = $taiKhoanBUS->Count_row_so($tenDangNhap);
           	        if($user_check < 1)
           	        {
						echo "<script>alert('Tài Khoản Không Tồn Tại')</script>";
						echo "<script>window.open('?a=3','_self')</script>";
           	        }
           	        else
           	        {
           	        			$taiKhoanBUS = $taiKhoanBUS->GetUserName($tenDangNhap);
						    
								$check_mahoa_password = password_verify($password,$taiKhoanBUS->MatKhau);
								if($check_mahoa_password == false)
								{
									echo "<script>alert('Mật Khẩu Không Đúng')</script>";
									echo "<script>window.open('?a=3','_self')</script>";
								}
								else if($check_mahoa_password == true)
								{
									
									$_SESSION['id_nguoidung']= $taiKhoanBUS->MaNguoiDung;
									$_SESSION['ten_nguoidung']= $taiKhoanBUS->TenNguoiDung;
									 
									echo "<script>alert('Đăng Nhập Thành Công')</script>";
									echo "<script>window.open('index.php','_self')</script>";
								 
									// exit();
								}
						  
           	        	
           	        }
           	   }
           	   else //khi là admin
           	   {
           	   	   
           	   	              $taiKhoanBUS = new TaiKhoanBUS();
           	   	            $kiemtra_user =  $taiKhoanBUS->Count_row_so($tenDangNhap);
           	   	             
           	   	            @$_SESSION['admin'] = $quanTriBUS->TenDangNhap;
           	   	   
           	   	  if($kiemtra_user < 0)
           	   	  {
					echo "<script>alert('Người dùng không tồn tại')</script>";
                    echo "<script>window.open('?a=3','_self')</script>";
           	   	  }
           	   	  else
           	   	  {
							 
							 $taiKhoanBUS = $taiKhoanBUS->GetUserName($tenDangNhap);
						    
								$check_mahoa_password = password_verify($password,$taiKhoanBUS->MatKhau);
								if($check_mahoa_password == false)
								{
									echo "<script>alert('Mật Khẩu Không Đúng')</script>";
									echo "<script>window.open('?a=3','_self')</script>";
								}
								else if($check_mahoa_password == true)
								{
									
									 $_SESSION['id_nguoidung']= $taiKhoanBUS->MaNguoiDung;
									 
									echo "<script>alert('Đăng Nhập admin Thành Công')</script>";
									echo "<script>window.open('GUI/index.php','_self')</script>";
								 
									 
								}
           	   	  	
           	   	  }
           	   }
           }



			 
   }



 ?>