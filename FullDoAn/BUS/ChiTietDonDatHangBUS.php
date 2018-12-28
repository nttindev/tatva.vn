<?php 
  class ChiTietDonDatHangBUS
  {
  	  var $chiTietDonDatHangDAO;
  	 public function __construct()
  	 {
  	 	 $this->chiTietDonDatHangDAO = new ChiTietDonDatHangDAO();

  	 }

  	 public function GetAllAvailable()
  	 {
  	 	return $this->chiTietDonDatHangDAO->GetAllAvailable();
  	 }
  	 public function GetByID($maDonDatHang)
  	 {
  	 	return $this->chiTietDonDatHangDAO->GetByID($maDonDatHang);
  	 }
  	 public function Insert($chiTietDonDatHang)
  	 {
  	 	$this->chiTietDonDatHangDAO->Insert($chiTietDonDatHang);
  	 }
  	 public function Insert_With_DonDatHang($maSanPham,$soLuong,$giaBan,$maDonDatHang)
  	 {
  	 	$chiTietDonDatHang = new ChiTietDonDatHang();
  	 	$chiTietDonDatHang->MaSanPham = $maSanPham;
  	 	$chiTietDonDatHang->SoLuong = $soLuong;
  	 	$chiTietDonDatHang->GiaBan = $giaBan;
  	 	$chiTietDonDatHang->MaDonDatHang = $maDonDatHang;
  	 	$this->chiTietDonDatHangDAO->Insert($chiTietDonDatHang);
  	 }
  }

 ?>