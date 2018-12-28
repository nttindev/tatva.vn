<?php 
	 class LoaiTaiKhoanBUS
	 {
	 	var $loaiTaiKhoanDAO;
	 	public function __construct()
	 	{
	 		$this->loaiTaiKhoanDAO = new LoaiTaiKhoanDAO();
	 	}
	 	public function GetAllAvailable()
	 	{
	 		return $this->loaiTaiKhoanDAO->GetAllAvailable();
	 	}
	 }

 ?>