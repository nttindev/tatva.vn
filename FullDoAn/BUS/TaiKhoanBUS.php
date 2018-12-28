<?php
class TaiKhoanBUS
{
    var $taiKhoanDAO;
    public function __construct()
    {
        $this->taiKhoanDAO = new TaiKhoanDAO();
    }
    public function GetID($maNguoiDung)
    {
        return $this->taiKhoanDAO->GetID($maNguoiDung);
    }
    public function GetAllAvailable()
    {
        return $this->taiKhoanDAO->GetAllAvailable();
    }
    public function GetUserName($tenDangNhap)
    {
        return $this->taiKhoanDAO->GetUserName($tenDangNhap);
    }
    public function Insert($taiKhoan)
    {
        
        $this->taiKhoanDAO->Insert($taiKhoan);
    }
    public function Count_row_so($tenDangNhap)
    {
        return $this->taiKhoanDAO->Count_row_so($tenDangNhap);
    }
    public function Insert_With_TaiKhoan($tenNguoiDung, $tenDangNhap, $ngaySinh, $noiSinh, $matKhau, $SDT)
    {
        $taiKhoan               = new TaiKhoan();
        $taiKhoan->TenNguoiDung = $tenNguoiDung;
        $taiKhoan->TenDangNhap  = $tenDangNhap;
        $taiKhoan->NgaySinh     = $ngaySinh;
        $taiKhoan->NoiSinh      = $noiSinh;
        $taiKhoan->MatKhau      = $matKhau;
        $taiKhoan->SDT          = $SDT;
        
        $this->taiKhoanDAO->Insert($taiKhoan);
    }
    //admin
    public function fetchAll()
    {
        
        return $this->taiKhoanDAO->fetchAll();
    }
    public function fetchID($MaLoaiSanPham)
    {
        
        return $this->taiKhoanDAO->fetchID($MaLoaiSanPham);
    }
    public function postInput($string)
    {
        
        return $this->taiKhoanDAO->postInput($string);
    }
    
    public function getInput($string)
    {
        return $this->taiKhoanDAO->getInput($string);
    }
    public function insert1($loaisanpham)
    {
        $this->taiKhoanDAO->insert1($loaisanpham);
    }
    
    public function Insert_With_SanPham($tenNguoiDung, $tenDangNhap, $ngaySinh, $noiSinh, $matKhau, $sDT)
    {
        $loaisanpham               = new TaiKhoan();
        $loaisanpham->TenNguoiDung = $tenNguoiDung;
        $loaisanpham->TenDangNhap  = $tenDangNhap;
        $loaisanpham->NgaySinh     = $ngaySinh;
        $loaisanpham->NoiSinh      = $noiSinh;
        $loaisanpham->MatKhau      = $matKhau;
        $loaisanpham->SDT          = $sDT;
        $this->taiKhoanDAO->Insert1($loaisanpham);
    }
    public function delete($loaisanpham)
    {
        return $this->taiKhoanDAO->delete($loaisanpham);
    }
    public function update($loaisanpham)
    {
        return $this->taiKhoanDAO->update($loaisanpham);
    }
    public function Update_With_LoaiSanPham($tenNguoiDung, $tenDangNhap, $ngaySinh, $noiSinh, $sDT, $id)
    {
        $loaisanpham               = new TaiKhoan();
        $loaisanpham->TenNguoiDung = $tenNguoiDung;
        $loaisanpham->TenDangNhap  = $tenDangNhap;
        $loaisanpham->NgaySinh     = $ngaySinh;
        $loaisanpham->NoiSinh      = $noiSinh;
        $loaisanpham->SDT          = $sDT;
        $loaisanpham->MaNguoiDung  = $id;
        $this->taiKhoanDAO->update($loaisanpham);
    }
    public function timkiem($seach)
    {
        return $this->taiKhoanDAO->timkiem($seach);
    }
}
?>