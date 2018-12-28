<?php
class DonDatHangBus
{
    var $donDatHangDAO;
    public function __construct()
    {
        $this->donDatHangDAO = new DonDatHangDAO();
    }
    public function GetAllAvailable()
    {
        return $this->donDatHangDAO->GetAllAvailable();
    }
    public function GetByID($maNguoiDung)
    {
        return $this->donDatHangDAO->GetByID($maNguoiDung);
    }
    public function Insert($donDatHang)
    {
        $this->donDatHangDAO->Insert($donDatHang);
    }
    public function Insert_With_donDatHang($maDonDatHang, $maNguoiDung, $ngayLap, $tongThanhTien)
    {
        $donDatHang                = new DonDatHang();
        $donDatHang->MaDonDatHang  = $maDonDatHang;
        $donDatHang->MaNguoiDung   = $maNguoiDung;
        $donDatHang->NgayLap       = $ngayLap;
        $donDatHang->TongThanhTien = $tongThanhTien;
        $this->donDatHangDAO->Insert($donDatHang);
    }
    public function DemSoDong()
    {
        return $this->donDatHangDAO->DemSoDong();
    }
    public function GetDonHang($maNguoiDung)
    {
        return $this->donDatHangDAO->GetDonHang($maNguoiDung);
    }
    public function Update($maDonDatHang)
    {
        $donDatHang = new DonDatHang();
        
        $donDatHang->MaDonDatHang = $maDonDatHang;
        $this->donDatHangDAO->Update($donDatHang);
    }
    public function Update_DonDatHang($maDonDatHang)
    {
        $donDatHang = new DonDatHang();
        
        $donDatHang->MaDonDatHang = $maDonDatHang;
        $this->donDatHangDAO->Update_ma($donDatHang);
    }
    ///admin
    public function fetchAll()
    {
        
        return $this->donDatHangDAO->fetchAll();
    }
    public function fetchAll1($ma)
    {
        
        return $this->donDatHangDAO->fetchAll1($ma);
        
    }
    public function fetchID($id)
    {
        
        return $this->donDatHangDAO->fetchID($id);
    }
    public function postInput($string)
    {
        
        return $this->donDatHangDAO->postInput($string);
    }
    
    public function getInput($string)
    {
        return $this->donDatHangDAO->getInput($string);
    }
    public function delete($MaDonDatHang)
    {
        return $this->donDatHangDAO->delete($MaDonDatHang);
    }
    public function delete1($MaDonDatHang)
    {
        return $this->donDatHangDAO->delete1($MaDonDatHang);
    }
    public function duyet($MaDonDatHang)
    {
        return $this->donDatHangDAO->duyet($MaDonDatHang);
    }
    public function timkiem($seach)
    {
        
        return $this->donDatHangDAO->timkiem($seach);
    }
    public function thongkedoanhthu()
    {
        return $this->donDatHangDAO->thongkedoanhthu();
    }
    public function insert1($dondathang)
    {
        return $this->donDatHangDAO->insert1($dondathang);
    }
    public function Insert_With_SanPham($a, $b, $c, $d, $e, $f)
    {
        $loaisanpham                = new DonDatHang();
        $loaisanpham->MaDonDatHang  = $a;
        $loaisanpham->MaNguoiDung   = $b;
        $loaisanpham->NgayLap       = $c;
        $loaisanpham->TongThanhTien = $d;
        $loaisanpham->TinhTrang     = $e;
        $loaisanpham->BiXoa         = $f;
        $this->donDatHangDAO->Insert1($loaisanpham);
    }
    public function update1($dondathang)
    {
        return $this->donDatHangDAO->update1($dondathang);
        
    }
    public function Update_With_SanPham($a, $b, $c, $d, $e, $f)
    {
        $loaisanpham                = new DonDatHang();
        $loaisanpham->MaDonDatHang  = $a;
        $loaisanpham->MaNguoiDung   = $b;
        $loaisanpham->NgayLap       = $c;
        $loaisanpham->TongThanhTien = $d;
        $loaisanpham->TinhTrang     = $e;
        $loaisanpham->BiXoa         = $f;
        $this->donDatHangDAO->update1($loaisanpham);
    }
}
?>