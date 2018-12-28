<?php

class HangSanXuatDAO extends DB
{
    public function GetAllAvailable()
    {
        $sql            = "SELECT MaHangSanXuat,TenHangSanXuat,LogoURL,BiXoa from HangSanXuat";
        $result         = $this->ExecuteQuery($sql);
        $lstHangSanXuat = array();
        while ($row = mysqli_fetch_array($result)) {
            $hangSanXuat                 = new HangSanXuat();
            $hangSanXuat->MaHangSanXuat  = $row['MaHangSanXuat'];
            $hangSanXuat->TenHangSanXuat = $row['TenHangSanXuat'];
            $hangSanXuat->LogoURL        = $row['LogoURL'];
            $hangSanXuat->BiXoa          = $row['BiXoa'];
            $lstHangSanXuat[]            = $hangSanXuat;
        }
        return $lstHangSanXuat;
    }
    public function GetByID($maHangSanXuat) //chi tiet san pham
    {
        $sql    = "SELECT MaHangSanXuat , TenHangSanXuat , LogoURL,BiXoa from HangSanXuat where MaHangSanXuat = $maHangSanXuat";
        $result = $this->ExecuteQuery($sql);
        if ($result == null)
            return null;
        $row                         = mysqli_fetch_array($result);
        $hangSanXuat                 = new HangSanXuat();
        $hangSanXuat->MaHangSanXuat  = $row['MaHangSanXuat'];
        $hangSanXuat->TenHangSanXuat = $row['TenHangSanXuat'];
        $hangSanXuat->LogoURL        = $row['LogoURL'];
        $hangSanXuat->BiXoa          = $row['BiXoa'];
        return $hangSanXuat;
    }
    //admin
    public function fetchAll()
    {
        $sql            = "SELECT MaHangSanXuat,TenHangSanXuat,LogoURL,BiXoa from HangSanXuat";
        $result         = $this->ExecuteQuery($sql);
        $lstHangSanXuat = array();
        while ($row = mysqli_fetch_array($result)) {
            $hangSanXuat                 = new HangSanXuat();
            $hangSanXuat->MaHangSanXuat  = $row['MaHangSanXuat'];
            $hangSanXuat->TenHangSanXuat = $row['TenHangSanXuat'];
            $hangSanXuat->LogoURL        = $row['LogoURL'];
            $hangSanXuat->BiXoa          = $row['BiXoa'];
            $lstHangSanXuat[]            = $hangSanXuat;
        }
        return $lstHangSanXuat;
    }
    public function fetchID($MaHangSanXuat)
    {
        $sql = "SELECT  MaHangSanXuat,TenHangSanXuat,LogoURL,BiXoa FROM hangsanxuat WHERE MaHangSanXuat = $MaHangSanXuat ";
        $rs  = $this->ExecuteQuery($sql);
        if ($rs == null)
            return null;
        
        $row = mysqli_fetch_array($rs);
        extract($row);
        
        $sanPham                 = new HangSanXuat();
        $sanPham->MaHangSanXuat  = $MaHangSanXuat;
        $sanPham->TenHangSanXuat = $TenHangSanXuat;
        $sanPham->LogoURL        = $LogoURL;
        $sanPham->BiXoa          = $BiXoa;
        return $sanPham;
    }
    public function postInput($string)
    {
        $xxx = $string . '';
        return isset($_POST[$string]) ? $_POST[$string] : '';
    }
    
    public function getInput($string)
    {
        return isset($_GET[$string]) ? $_GET[$string] : '';
    }
    public function insert($loaisanpham)
    {
        $sql    = "INSERT INTO hangsanxuat(TenHangSanXuat,LogoURL,BiXoa)
            values('$loaisanpham->TenHangSanXuat','$loaisanpham->LogoURL','$loaisanpham->BiXoa')";
        $result = $this->ExecuteQuery($sql);
    }
    public function delete($MaLoaiSanPham)
    {
        
        $sql = "DELETE FROM hangsanxuat WHERE MaHangSanXuat = $MaLoaiSanPham  ";
        $this->ExecuteQuery($sql);
    }
    public function update($loaisanpham)
    {
        
        $sql = "UPDATE hangsanxuat SET TenHangSanXuat='$loaisanpham->TenHangSanXuat',LogoURL='$loaisanpham->LogoURL',BiXoa=$loaisanpham->BiXoa WHERE MaHangSanXuat=$loaisanpham->MaHangSanXuat";
        $this->ExecuteQuery($sql);
    }
    public function timkiem($seach)
    {
        $sql            = "SELECT MaHangSanXuat,TenHangSanXuat,LogoURL,BiXoa from HangSanXuat where TenHangSanXuat like '%$seach%'";
        $result         = $this->ExecuteQuery($sql);
        $lstHangSanXuat = array();
        while ($row = mysqli_fetch_array($result)) {
            $hangSanXuat                 = new HangSanXuat();
            $hangSanXuat->MaHangSanXuat  = $row['MaHangSanXuat'];
            $hangSanXuat->TenHangSanXuat = $row['TenHangSanXuat'];
            $hangSanXuat->LogoURL        = $row['LogoURL'];
            $hangSanXuat->BiXoa          = $row['BiXoa'];
            $lstHangSanXuat[]            = $hangSanXuat;
        }
        return $lstHangSanXuat;
    }
}
?>