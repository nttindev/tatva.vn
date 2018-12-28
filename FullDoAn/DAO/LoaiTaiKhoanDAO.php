<?php 
  class LoaiTaiKhoanDAO extends DB
  {
  	 public function GetAllAvailable()
  	 {
  	 	$sql ="SELECT MaLoaiTaiKhoan,TenDangNhap from LoaiTaiKhoan";
  	 	$result = $this->ExecuteQuery($sql);
  	 	$lstLoaiTaiKhoan = array();
  	 	while($row = mysqli_fetch_array($result))
  	 	{
  	 		$loaiTaiKhoan = new LoaiTaiKhoan();
  	 		$loaiTaiKhoan->MaLoaiTaiKhoan = $row['MaLoaiTaiKhoan'];
  	 		 $loaiTaiKhoan->TenDangNhap=$row['TenDangNhap'];
  	 		 $lstLoaiTaiKhoan[] = $loaiTaiKhoan;
  	 	}
  	 	return $lstLoaiTaiKhoan;
  	 }
  }

 ?>