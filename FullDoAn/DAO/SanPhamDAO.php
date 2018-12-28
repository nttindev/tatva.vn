<?php

class SanPhamDAO extends DB
{
    public function GetAllAvailable()
    {
        $sql        = "SELECT MaSanPham,TenSanPham,AnhURL,GiaSanPham,NgayNhap,SoLuongTon,SoLuongBan,SoLuotXem,MoTa,BiXoa,MaLoaiSanPham,MaHangSanXuat from SanPham";
        $result     = $this->ExecuteQuery($sql);
        $lstSanPham = array();
        while ($row = mysqli_fetch_array($result)) {
            $sanPham                = new SanPham();
            $sanPham->MaSanPham     = $row["MaSanPham"];
            $sanPham->TenSanPham    = $row['TenSanPham'];
            $sanPham->AnhURL        = $row['AnhURL'];
            $sanPham->GiaSanPham    = $row['GiaSanPham'];
            $sanPham->SoLuongBan    = $row['SoLuongBan'];
            $sanPham->SoLuotXem     = $row['SoLuotXem'];
            $sanPham->MoTa          = $row['MoTa'];
            $sanPham->MaLoaiSanPham = $row['MaLoaiSanPham'];
            $sanPham->MaHangSanXuat = $row['MaHangSanXuat'];
            $sanPham->NgayNhap      = $row['NgayNhap'];
            $sanPham->BiXoa         = $row['BiXoa'];
            $sanPham->SoLuongTon    = $row['SoLuongTon'];
            $lstSanPham[]           = $sanPham;
        }
        return $lstSanPham;
    }
    
    public function GetProductSelling()
    {
        
        $sql               = "SELECT MaSanPham,TenSanPham,AnhURL,GiaSanPham,NgayNhap,SoLuongTon,SoLuongBan,SoLuotXem,MoTa,BiXoa,MaLoaiSanPham,MaHangSanXuat 
              from SanPham 
              ORDER by SoLuongBan DESC
                 ";
        // $count = 0;
        $result            = $this->ExecuteQuery($sql);
        $lstSanPhamBanChay = array();
        while ($row = mysqli_fetch_array($result)) {
            
            $sanPham                = new SanPham();
            $sanPham->MaSanPham     = $row['MaSanPham'];
            $sanPham->TenSanPham    = $row['TenSanPham'];
            $sanPham->AnhURL        = $row['AnhURL'];
            $sanPham->GiaSanPham    = $row['GiaSanPham'];
            $sanPham->SoLuongBan    = $row['SoLuongBan'];
            $sanPham->SoLuotXem     = $row['SoLuotXem'];
            $sanPham->MoTa          = $row['MoTa'];
            $sanPham->MaLoaiSanPham = $row['MaLoaiSanPham'];
            $sanPham->MaHangSanXuat = $row['MaHangSanXuat'];
            $sanPham->NgayNhap      = $row['NgayNhap'];
            $sanPham->BiXoa         = $row['BiXoa'];
            $sanPham->SoLuongTon    = $row['SoLuongTon'];
            $lstSanPhamBanChay[]    = $sanPham;
        }
        return $lstSanPhamBanChay;
        
    }
    
    public function GetProductNew()
    {
        $sql           = "SELECT MaSanPham,TenSanPham,AnhURL,GiaSanPham,NgayNhap,SoLuongTon,SoLuongBan,SoLuotXem,MoTa,BiXoa,MaLoaiSanPham,MaHangSanXuat 
              from SanPham 
              ORDER by NgayNhap DESC";
        $result        = $this->ExecuteQuery($sql);
        $lstSanPhamNew = array();
        while ($row = mysqli_fetch_array($result)) {
            $sanPham                = new SanPham();
            $sanPham->MaSanPham     = $row['MaSanPham'];
            $sanPham->TenSanPham    = $row['TenSanPham'];
            $sanPham->AnhURL        = $row['AnhURL'];
            $sanPham->GiaSanPham    = $row['GiaSanPham'];
            $sanPham->SoLuongBan    = $row['SoLuongBan'];
            $sanPham->SoLuotXem     = $row['SoLuotXem'];
            $sanPham->MoTa          = $row['MoTa'];
            $sanPham->MaLoaiSanPham = $row['MaLoaiSanPham'];
            $sanPham->MaHangSanXuat = $row['MaHangSanXuat'];
            $sanPham->NgayNhap      = $row['NgayNhap'];
            $sanPham->BiXoa         = $row['BiXoa'];
            $sanPham->SoLuongTon    = $row['SoLuongTon'];
            $lstSanPhamNew[]        = $sanPham;
        }
        return $lstSanPhamNew;
    }
    
    public function GetByID_ChiTiet($maSanPham) //chi Tiết Sản Phẩm
    {
        $sql    = "SELECT MaSanPham,TenSanPham,AnhURL,GiaSanPham,NgayNhap,SoLuongTon,SoLuongBan,SoLuotXem,MoTa,BiXoa,MaLoaiSanPham,MaHangSanXuat,XuatXu from SanPham where MaSanPham = $maSanPham";
        $result = $this->ExecuteQuery($sql);
        if ($result == null)
            return null;
        $row                    = mysqli_fetch_array($result);
        $sanPham                = new SanPham();
        $sanPham->MaSanPham     = $row['MaSanPham'];
        $sanPham->TenSanPham    = $row['TenSanPham'];
        $sanPham->AnhURL        = $row['AnhURL'];
        $sanPham->GiaSanPham    = $row['GiaSanPham'];
        $sanPham->SoLuongBan    = $row['SoLuongBan'];
        $sanPham->SoLuotXem     = $row['SoLuotXem'];
        $sanPham->MoTa          = $row['MoTa'];
        $sanPham->MaLoaiSanPham = $row['MaLoaiSanPham'];
        $sanPham->MaHangSanXuat = $row['MaHangSanXuat'];
        $sanPham->NgayNhap      = $row['NgayNhap'];
        $sanPham->BiXoa         = $row['BiXoa'];
        $sanPham->SoLuongTon    = $row['SoLuongTon'];
        $sanPham->XuatXu        = $row['XuatXu'];
        return $sanPham;
        
    }
    public function GetByID_Loai($maLoaiSanPham)
    {
        $sql                = "SELECT MaSanPham,TenSanPham,AnhURL,GiaSanPham,NgayNhap,SoLuongTon,SoLuongBan,SoLuotXem,MoTa,BiXoa,MaLoaiSanPham,MaHangSanXuat from SanPham where MaLoaiSanPham = $maLoaiSanPham ORDER BY RAND()";
        $result             = $this->ExecuteQuery($sql);
        // if($result == null)
        //     return null;
        $lstSanPhamTheoLoai = array();
        
        while (@$row = mysqli_fetch_array($result)) {
            $sanPham                = new SanPham();
            $sanPham->MaSanPham     = $row['MaSanPham'];
            $sanPham->TenSanPham    = $row['TenSanPham'];
            $sanPham->AnhURL        = $row['AnhURL'];
            $sanPham->GiaSanPham    = $row['GiaSanPham'];
            $sanPham->SoLuongBan    = $row['SoLuongBan'];
            $sanPham->SoLuotXem     = $row['SoLuotXem'];
            $sanPham->MoTa          = $row['MoTa'];
            $sanPham->MaLoaiSanPham = $row['MaLoaiSanPham'];
            $sanPham->MaHangSanXuat = $row['MaHangSanXuat'];
            $sanPham->NgayNhap      = $row['NgayNhap'];
            $sanPham->BiXoa         = $row['BiXoa'];
            $sanPham->SoLuongTon    = $row['SoLuongTon'];
            $lstSanPhamTheoLoai[]   = $sanPham;
        }
        
        return $lstSanPhamTheoLoai;
    }
    public function GetByID_Hang($maHangSanXuat)
    {
        $sql                = "SELECT MaSanPham,TenSanPham,AnhURL,GiaSanPham,NgayNhap,SoLuongTon,SoLuongBan,SoLuotXem,MoTa,BiXoa,MaLoaiSanPham,MaHangSanXuat from SanPham where MaHangSanXuat = $maHangSanXuat";
        $result             = $this->ExecuteQuery($sql);
        $lstSanPhamTheoHang = array();
        
        while ($row = mysqli_fetch_array($result)) {
            $sanPham                = new SanPham();
            $sanPham->MaSanPham     = $row['MaSanPham'];
            $sanPham->TenSanPham    = $row['TenSanPham'];
            $sanPham->AnhURL        = $row['AnhURL'];
            $sanPham->GiaSanPham    = $row['GiaSanPham'];
            $sanPham->SoLuongBan    = $row['SoLuongBan'];
            $sanPham->SoLuotXem     = $row['SoLuotXem'];
            $sanPham->MoTa          = $row['MoTa'];
            $sanPham->MaLoaiSanPham = $row['MaLoaiSanPham'];
            $sanPham->MaHangSanXuat = $row['MaHangSanXuat'];
            $sanPham->NgayNhap      = $row['NgayNhap'];
            $sanPham->BiXoa         = $row['BiXoa'];
            $sanPham->SoLuongTon    = $row['SoLuongTon'];
            $lstSanPhamTheoHang[]   = $sanPham;
        }
        
        return $lstSanPhamTheoHang;
    }
    
    public function TimKiem($Search)
    {
        $sql                = "SELECT MaSanPham,TenSanPham,AnhURL,GiaSanPham,NgayNhap,SoLuongTon,SoLuongBan,SoLuotXem,MoTa,BiXoa,MaLoaiSanPham,MaHangSanXuat from SanPham where TenSanPham like '%$Search%'";
        $result             = $this->ExecuteQuery($sql);
        $lstSanPhamTheoHang = array();
        
        while ($row = mysqli_fetch_array($result)) {
            $sanPham                = new SanPham();
            $sanPham->MaSanPham     = $row['MaSanPham'];
            $sanPham->TenSanPham    = $row['TenSanPham'];
            $sanPham->AnhURL        = $row['AnhURL'];
            $sanPham->GiaSanPham    = $row['GiaSanPham'];
            $sanPham->SoLuongBan    = $row['SoLuongBan'];
            $sanPham->SoLuotXem     = $row['SoLuotXem'];
            $sanPham->MoTa          = $row['MoTa'];
            $sanPham->MaLoaiSanPham = $row['MaLoaiSanPham'];
            $sanPham->MaHangSanXuat = $row['MaHangSanXuat'];
            $sanPham->NgayNhap      = $row['NgayNhap'];
            $sanPham->BiXoa         = $row['BiXoa'];
            $sanPham->SoLuongTon    = $row['SoLuongTon'];
            $lstSanPhamTheoHang[]   = $sanPham;
        }
        
        return $lstSanPhamTheoHang;
    }
    public function TimKiemNangCao($Search)
    {
        $sql    = "SELECT sp.MaSanPham,sp.TenSanPham,sp.AnhURL,sp.GiaSanPham,sp.NgayNhap,sp.SoLuongTon,sp.SoLuongBan,sp.SoLuotXem,sp.MoTa,sp.BiXoa,hsx.TenHangSanXuat,hsx.MaHangSanXuat,lsp.TenLoaiSanPham,lsp.MaLoaiSanPham from SanPham sp JOIN hangsanxuat hsx ON sp.MaHangSanXuat = hsx.MaHangSanXuat JOIN loaisanpham lsp ON sp.MaLoaiSanPham = lsp.MaLoaiSanPham WHERE sp.TenSanPham LIKE '%$Search%' or hsx.TenHangSanXuat LIKE '%$Search%' or lsp.TenLoaiSanPham LIKE '%$Search%'  ";
        $result = $this->ExecuteQuery($sql);
        $lst    = array();
        while ($row = mysqli_fetch_array($result)) {
            $sanPham = new SanPham();
            
            $sanPham->MaSanPham     = $row['MaSanPham'];
            $sanPham->TenSanPham    = $row['TenSanPham'];
            $sanPham->AnhURL        = $row['AnhURL'];
            $sanPham->GiaSanPham    = $row['GiaSanPham'];
            $sanPham->SoLuongBan    = $row['SoLuongBan'];
            $sanPham->SoLuotXem     = $row['SoLuotXem'];
            $sanPham->MoTa          = $row['MoTa'];
            $sanPham->MaLoaiSanPham = $row['MaLoaiSanPham'];
            $sanPham->MaHangSanXuat = $row['MaHangSanXuat'];
            $sanPham->NgayNhap      = $row['NgayNhap'];
            $sanPham->BiXoa         = $row['BiXoa'];
            $sanPham->SoLuongTon    = $row['SoLuongTon'];
            
            $lst[] = $sanPham;
        }
        return $lst;
    }
    public function Update($sanPham)
    {
        $sql    = "UPDATE SanPham set SoLuotXem = SoLuotXem + 1 where MaSanPham = $sanPham->MaSanPham";
        $result = $this->ExecuteQuery($sql);
    }
    public function Update_SoLuongTon($sanPham)
    {
        $sql    = "UPDATE SanPham set SoLuongTon = $sanPham->SoLuongTon where MaSanPham = $sanPham->MaSanPham";
        $result = $this->ExecuteQuery($sql);
    }
    public function Update_SoLuongBan($sanPham)
    {
        $sql    = "UPDATE SanPham set SoLuongBan = $sanPham->SoLuongBan where MaSanPham =$sanPham->MaSanPham ";
        $result = $this->ExecuteQuery($sql);
    }
    //admin
    public function fetchAll()
    {
        $sql        = "SELECT MaSanPham,TenSanPham,AnhURL,GiaSanPham,NgayNhap,SoLuongTon,SoLuongBan,SoLuotXem,MoTa,XuatXu,BiXoa,MaLoaiSanPham,MaHangSanXuat from SanPham";
        $result     = $this->ExecuteQuery($sql);
        $lstSanPham = array();
        while ($row = mysqli_fetch_array($result)) {
            $sanPham                = new SanPham();
            $sanPham->MaSanPham     = $row["MaSanPham"];
            $sanPham->TenSanPham    = $row['TenSanPham'];
            $sanPham->AnhURL        = $row['AnhURL'];
            $sanPham->GiaSanPham    = $row['GiaSanPham'];
            $sanPham->NgayNhap      = $row['NgayNhap'];
            $sanPham->SoLuongTon    = $row['SoLuongTon'];
            $sanPham->SoLuongBan    = $row['SoLuongBan'];
            $sanPham->SoLuotXem     = $row['SoLuotXem'];
            $sanPham->MoTa          = $row['MoTa'];
            $sanPham->XuatXu        = $row['XuatXu'];
            $sanPham->MaLoaiSanPham = $row['MaLoaiSanPham'];
            $sanPham->MaHangSanXuat = $row['MaHangSanXuat'];
            $sanPham->BiXoa         = $row['BiXoa'];
            $lstSanPham[]           = $sanPham;
        }
        return $lstSanPham;
    }
    
    
    public function fetchID($MaSanPham)
    {
        $sql = "SELECT  MaSanPham,TenSanPham,AnhURL,GiaSanPham,NgayNhap,SoLuongTon,MoTa,XuatXu,MaLoaiSanPham,MaHangSanXuat,BiXoa FROM sanpham WHERE MaSanPham = $MaSanPham ";
        $rs  = $this->ExecuteQuery($sql);
        if ($rs == null)
            return null;
        
        $row = mysqli_fetch_array($rs);
        extract($row);
        
        $sanPham                = new SanPham();
        $sanPham->MaSanPham     = $MaSanPham;
        $sanPham->AnhURL        = $AnhURL;
        $sanPham->TenSanPham    = $TenSanPham;
        $sanPham->NgayNhap      = $NgayNhap;
        $sanPham->SoLuongTon    = $SoLuongTon;
        $sanPham->GiaSanPham    = $GiaSanPham;
        $sanPham->XuatXu        = $XuatXu;
        $sanPham->BiXoa         = $BiXoa;
        $sanPham->MoTa          = $MoTa;
        $sanPham->MaLoaiSanPham = $MaLoaiSanPham;
        $sanPham->MaHangSanXuat = $MaHangSanXuat;
        return $sanPham;
    }
    public function postInput($string)
    {
        return isset($_POST[$string]) ? $_POST[$string] : '';
    }
    public function fileInput($string)
    {
        return isset($_FILES[$string]['name']) ? $_FILES[$string]['name'] : '';
    }
    public function tfileInput($string)
    {
        return isset($_FILES[$string]['tmp_name']) ? $_FILES[$string]['tmp_name'] : '';
    }
    public function getInput($string)
    {
        return isset($_GET[$string]) ? $_GET[$string] : '';
    }
    public function insert($sanpham)
    {
        $sql    = "INSERT INTO sanpham(TenSanPham,AnhURL,GiaSanPham,NgayNhap,SoLuongTon,MoTa,XuatXu,MaLoaiSanPham,MaHangSanXuat,BiXoa)
            values('$sanpham->TenSanPham','$sanpham->AnhURL','$sanpham->GiaSanPham','$sanpham->NgayNhap','$sanpham->SoLuongTon','$sanpham->MoTa','$sanpham->XuatXu','$sanpham->MaLoaiSanPham','$sanpham->MaHangSanXuat','$sanpham->BiXoa')";
        $result = $this->ExecuteQuery($sql);
    }
    public function delete($MaSanPham)
    {
        
        $sql = "DELETE FROM sanpham WHERE MaSanPham = $MaSanPham  ";
        $this->ExecuteQuery($sql);
    }
    public function update1($sanpham)
    {
        $sql = "UPDATE sanpham SET TenSanPham='$sanpham->TenSanPham',AnhURL='$sanpham->AnhURL',GiaSanPham=$sanpham->GiaSanPham,NgayNhap='$sanpham->NgayNhap',MoTa='$sanpham->MoTa',XuatXu='$sanpham->XuatXu',MaLoaiSanPham=$sanpham->MaLoaiSanPham,MaHangSanXuat=$sanpham->MaHangSanXuat,BiXoa=$sanpham->BiXoa WHERE MaSanPham=$sanpham->MaSanPham";
        $this->ExecuteQuery($sql);
    }
    public function TimKiem1($Search)
    {
        $sql                = "SELECT MaSanPham,TenSanPham,AnhURL,GiaSanPham,NgayNhap,SoLuongTon,SoLuongBan,SoLuotXem,MoTa,XuatXu,BiXoa,MaLoaiSanPham,MaHangSanXuat from SanPham where TenSanPham like '%$Search%'";
        $result             = $this->ExecuteQuery($sql);
        $lstSanPhamTheoHang = array();
        
        while ($row = mysqli_fetch_array($result)) {
            $sanPham                = new SanPham();
            $sanPham->MaSanPham     = $row['MaSanPham'];
            $sanPham->TenSanPham    = $row['TenSanPham'];
            $sanPham->AnhURL        = $row['AnhURL'];
            $sanPham->GiaSanPham    = $row['GiaSanPham'];
            $sanPham->SoLuongBan    = $row['SoLuongBan'];
            $sanPham->SoLuotXem     = $row['SoLuotXem'];
            $sanPham->MoTa          = $row['MoTa'];
            $sanPham->XuatXu        = $row['XuatXu'];
            $sanPham->MaLoaiSanPham = $row['MaLoaiSanPham'];
            $sanPham->MaHangSanXuat = $row['MaHangSanXuat'];
            $sanPham->NgayNhap      = $row['NgayNhap'];
            $sanPham->BiXoa         = $row['BiXoa'];
            $sanPham->SoLuongTon    = $row['SoLuongTon'];
            $lstSanPhamTheoHang[]   = $sanPham;
        }
        
        return $lstSanPhamTheoHang;
    }
    
}
?>