<?php


 if(isset($_POST['dangky'])) //
 {
     //echo $_POST['dangky'];
    // include_once "DataProvider/db.php";
    $tenNguoiDung =  $_POST['hoten'];
    $ngay =  $_POST['ngay'];
    $thang =   $_POST['thang'];
    $nam =   $_POST['nam'];
    $noiSinh = $_POST['thanhpho'];
    $tenDangNhap = $_POST['username'];
    $matkhau = $_POST['password'];
    $xacnhan_password = $_POST['xacnhan_password'];
    $SDT = $_POST['sdt'];
    
    if(empty($tenNguoiDung) || empty($ngay) ||empty($thang) ||empty($nam) ||empty($noiSinh) || empty($tenDangNhap) ||empty($matkhau) || empty($xacnhan_password) || empty($SDT))
    {
        echo "<script>alert('Thông tin đăng ký không được trống')</script>";
        echo "<script>window.open('?a=2','_self')</script>";
        // header("location: dangkythu.php?dangkythongtin=empty");
        // exit();
    
    }
    if(is_numeric($tenNguoiDung)){
         echo "<script>alert('Tên không hợp lệ')</script>";
        echo "<script>window.open('?a=2','_self')</script>";
        exit();
    }
     if(strlen($tenDangNhap) < 4 or strlen($tenDangNhap) >50)
     {
        echo "<script>alert('Tên đăng nhập phải từ 4 - 50 ký tự')</script>";
        echo "<script>window.open('?a=2','_self')</script>";
        exit();
     }
     if(strlen($SDT) < 10 ||strlen($SDT) >10 )
     {
            echo "<script>alert('Số Điện Thoại không hợp lệ phải đủ 10 số')</script>";
        echo "<script>window.open('?a=2','_self')</script>";
        exit();
     }
      

    else 
    { 
          
            
          
               
                $taiKhoanBUS = new TaiKhoanBUS();
                $resultCheck = $taiKhoanBUS->Count_row_so($tenDangNhap);
                
                if($matkhau!=$xacnhan_password)
                {
                   // echo "loi";
                    echo "<script>alert('Mật Khẩu Không Giống')</script>";
                    echo "<script>window.open('?a=2','_self')</script>";
                    // exit();
                }
               else 
                {
                    if($resultCheck > 0)
                    {
                             // header("location: dangkythu.php?signup=taikhoantontai");
                    echo "<script>alert('Tên Đăng Nhập Đã Tồn Tại Hãy dùng Tên đăng nhập khác')</script>";
                     echo "<script>window.open('?a=2','_self')</script>";
                    // exit();
                    }
                    else{
                        echo $resultCheck;
                        $ngaySinh = $nam.'-'.$thang.'-'.$ngay;
                        $matKhau = password_hash($matkhau, PASSWORD_DEFAULT);
                    
                        $taiKhoanBUS->Insert_With_TaiKhoan($tenNguoiDung,$tenDangNhap,$ngaySinh,$noiSinh,$matKhau,$SDT);
                        echo "<script>alert('Đăng ký thành công')</script>
                        ";
                        echo "<script>window.open('index.php','_self')</script>";
                        // exit();
                    }
                }
                
            
       
      
    }
}
  
?>