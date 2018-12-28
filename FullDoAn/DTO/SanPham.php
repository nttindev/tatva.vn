<?php 
 class SanPham
 {
 	var $MaSanPham;
 	var $TenSanPham;
 	var $AnhURL;
 	var $GiaSanPham;
 	var $NgayNhap;
 	var $SoLuongTon;
 	var $SoLuongBan;
 	var $SoLuotXem;
 	var $MoTa;
 	var $BiXoa;
 	var $MaLoaiSanPham;
 	var $MaHangSanXuat;
 	var $XuatXu;
 	public function __construct()
 	{
 		$this->MaSanPham = 0;
 		$this->TenSanPham = "";
 		$this->AnhURL = "";
 		$this->GiaSanPham = 0;
 		$this->NgayNhap="2017-12-2";
 		$this->SoLuongTon = 0;
 		$this->SoLuongBan = 0;
 		$this->SoLuotXem = 0;
 		$this->MoTa ="";
 		$this->BiXoa = 0;
 		$this->MaLoaiSanPham = 0;
 		$this->MaHangSanXuat = 0;
 		$this->XuatXu = "";


 	}
 }

 ?>