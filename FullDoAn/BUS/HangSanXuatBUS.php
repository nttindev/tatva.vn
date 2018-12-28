<?php
class HangSanXuatBUS
{
    var $hangSanXuatDAO;
    public function __construct()
    {
        $this->hangSanXuatDAO = new HangSanXuatDAO();
        
    }
    public function GetAllAvailable()
    {
        return $this->hangSanXuatDAO->GetAllAvailable();
    }
    public function GetByID($maHangSanXuat)
    {
        return $this->hangSanXuatDAO->GetByID($maHangSanXuat);
    }
    //admin
    public function fetchAll()
    {
        
        return $this->hangSanXuatDAO->fetchAll();
    }
    public function fetchID($MaLoaiSanPham)
    {
        
        return $this->hangSanXuatDAO->fetchID($MaLoaiSanPham);
    }
    public function postInput($string)
    {
        
        return $this->hangSanXuatDAO->postInput($string);
    }
    
    public function getInput($string)
    {
        return $this->hangSanXuatDAO->getInput($string);
    }
    public function insert($loaisanpham)
    {
        return $this->hangSanXuatDAO->insert($loaisanpham);
    }
    
    public function Insert_With_SanPham($tenHangSanXUat, $loGoURL, $biXoa)
    {
        $loaisanpham                 = new HangSanXuat();
        $loaisanpham->TenHangSanXuat = $tenHangSanXUat;
        $loaisanpham->LogoURL        = $loGoURL;
        $loaisanpham->BiXoa          = $biXoa;
        $this->hangSanXuatDAO->Insert($loaisanpham);
    }
    public function delete($loaisanpham)
    {
        return $this->hangSanXuatDAO->delete($loaisanpham);
    }
    public function update($loaisanpham)
    {
        return $this->hangSanXuatDAO->update($loaisanpham);
    }
    public function Update_With_LoaiSanPham($tenSanPham, $loGo, $biXoa, $masp)
    {
        $loaisanpham                 = new HangSanXuat();
        $loaisanpham->TenHangSanXuat = $tenSanPham;
        $loaisanpham->LogoURL        = $loGo;
        $loaisanpham->BiXoa          = $biXoa;
        $loaisanpham->MaHangSanXuat  = $masp;
        $this->hangSanXuatDAO->update($loaisanpham);
    }
    public function timkiem($seach)
    {
        return $this->hangSanXuatDAO->timkiem($seach);
    }
}

?>