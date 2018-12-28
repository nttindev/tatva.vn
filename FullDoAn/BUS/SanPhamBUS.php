<?php
class SanPhamBUS
{
    var $sanPhamDAO;
    public function __construct()
    {
        $this->sanPhamDAO = new SanPhamDAO();
    }
    public function GetAllAvailable()
    {
        return $this->sanPhamDAO->GetAllAvailable();
    }
    public function GetByID_ChiTiet($maSanPham)
    {
        return $this->sanPhamDAO->GetByID_ChiTiet($maSanPham);
    }
    public function GetByID_Loai($maLoaiSanPham)
    {
        return $this->sanPhamDAO->GetByID_Loai($maLoaiSanPham);
        
    }
    public function GetByID_Hang($maHangSanXuat)
    {
        return $this->sanPhamDAO->GetByID_Hang($maHangSanXuat);
    }
    public function TimKiem($Search)
    {
        return $this->sanPhamDAO->TimKiem($Search);
    }
    public function GetProductSelling()
    {
        return $this->sanPhamDAO->GetProductSelling();
    }
    public function GetProductNew()
    {
        return $this->sanPhamDAO->GetProductNew();
    }
    public function Update($maSanPham)
    {
        $sanPham = new SanPham();
        
        $sanPham->MaSanPham = $maSanPham;
        $this->sanPhamDAO->Update($sanPham);
    }
    public function Update_SoLuongTon($soLuongTon, $maSanPham)
    {
        $sanPham             = new SanPham();
        $sanPham->SoLuongTon = $soLuongTon;
        $sanPham->MaSanPham  = $maSanPham;
        $this->sanPhamDAO->Update_SoLuongTon($sanPham);
    }
    public function Update_SoLuongBan($soLuongBan, $maSanPham)
    {
        $sanPham             = new SanPham();
        $sanPham->SoLuongBan = $soLuongBan;
        $sanPham->MaSanPham  = $maSanPham;
        $this->sanPhamDAO->Update_SoLuongBan($sanPham);
    }
    public function TimKiemNangCao($Search)
    {
        return $this->sanPhamDAO->TimKiemNangCao($Search);
    }
    //admin
    public function fetchAll()
    {
        
        return $this->sanPhamDAO->fetchAll();
    }
    public function fetchID($MaSanPham)
    {
        
        return $this->sanPhamDAO->fetchID($MaSanPham);
    }
    public function fileInput($string)
    {
        return $this->sanPhamDAO->fileInput($string);
    }
    public function tfileInput($string)
    {
        return $this->sanPhamDAO->tfileInput($string);
    }
    public function postInput($string)
    {
        
        return $this->sanPhamDAO->postInput($string);
    }
    
    public function getInput($string)
    {
        return $this->sanPhamDAO->getInput($string);
    }
    public function insert($sanpham)
    {
        $this->sanPhamDAO->insert($sanpham);
    }
    
    public function Insert_With_SanPham($tenSanPham, $anhURL, $giaSanPham, $ngayNhap, $slt, $moTa, $xuatXu, $maLoaiSanPham, $maHangSanXuat, $biXoa)
    {
        $sanpham                = new SanPham();
        $sanpham->TenSanPham    = $tenSanPham;
        $sanpham->AnhURL        = $anhURL;
        $sanpham->GiaSanPham    = $giaSanPham;
        $sanpham->MoTa          = $moTa;
        $sanpham->NgayNhap      = $ngayNhap;
        $sanpham->SoLuongTon    = $slt;
        $sanpham->XuatXu        = $xuatXu;
        $sanpham->MaLoaiSanPham = $maLoaiSanPham;
        $sanpham->MaHangSanXuat = $maHangSanXuat;
        $sanpham->BiXoa         = $biXoa;
        $this->sanPhamDAO->insert($sanpham);
    }
    public function delete($sanpham)
    {
        return $this->sanPhamDAO->delete($sanpham);
    }
    public function update1($sanpham)
    {
        return $this->sanPhamDAO->update($sanpham);
    }
    public function Update_With_SanPham($tenSanPham, $anhURL, $giaSanPham, $moTa, $ngayNhap, $xuatXu, $maLoaiSanPham, $maHangSanXuat, $biXoa, $masp)
    {
        $sanpham                = new SanPham();
        $sanpham->TenSanPham    = $tenSanPham;
        $sanpham->AnhURL        = $anhURL;
        $sanpham->GiaSanPham    = $giaSanPham;
        $sanpham->MoTa          = $moTa;
        $sanpham->NgayNhap      = $ngayNhap;
        $sanpham->XuatXu        = $xuatXu;
        $sanpham->MaLoaiSanPham = $maLoaiSanPham;
        $sanpham->MaHangSanXuat = $maHangSanXuat;
        $sanpham->BiXoa         = $biXoa;
        $sanpham->MaSanPham     = $masp;
        $this->sanPhamDAO->Update1($sanpham);
    }
    public function TimKiem1($Search)
    {
        return $this->sanPhamDAO->TimKiem1($Search);
    }
}
?>