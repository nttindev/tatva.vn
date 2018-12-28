<?php
    session_start();
?>


 
 
  <?php
  
          if(isset($_SESSION['id_nguoidung']))
          {
               $maNguoiDung = $_SESSION['id_nguoidung'];
               $gioHangBUS = new GioHangBUS();
               $lst = $gioHangBUS->GetByID($maNguoiDung);
               $tong = 0;
               foreach($lst as $gioHangBUS)
               {
                  $tong += $gioHangBUS->SoLuong;
               }

                echo ' 
                <div class="navi"><a class="a" href="index.php">Hi '.@$_SESSION['ten_nguoidung'].' !</a></div>
                <div class="navi"><a class="a" href="?a=7" name="giohang"><img class="giohang" src="GUI/images/giohang.png" alt=""></a>
                <a href="?a=7"><span class="span-soluong">'.$tong.'</span></a>
                </div>
                <div class="navi"><a class="a" href="index.php">HOME</a></div>
                <div class="kiem-tra-don-hang"><a class="a" href="?a=9&orderKiemTra='.$maNguoiDung.'">Kiểm tra đơn hàng</a></div>
                
                <form action="index.php?a=15" method="POST">
                 
                          <button type="submit" name="logout" class="logout" >Logout</button>
                </form> 
                
                ';
          }
          else{

              echo ' 
              <div class="nav-login">
              
              <div class="navi"><a class="a" href="index.php">HOME</a></div>
              <div class="navi"><a class="a" href="?a=2">SIGN UP</a></div>
              <div class="navi"><a class="a" href="?a=3">SIGN IN</a></div>
              </div>
              ';
          }
          
         
  ?>
         

        
    
    
 
