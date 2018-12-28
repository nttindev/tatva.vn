<?php 

class QuanTriBUS
{
	 var $quanTriDAO;
	 public function __construct()
	 {
	 	$this->quanTriDAO = new QuanTriDAO();
	 }
	 public function Count_UserName($tenDangNhap)
	 {
	 	return $this->quanTriDAO->Count_UserName($tenDangNhap);
	 }
}

 ?>