<?php

class DonDatHangDAO extends DB
{
    public function GetAllAvailable()
    {
        $sql           = "SELECT MaDonDatHang, MaNguoiDung, NgayLap,TongThanhTien,TinhTrang,BiXoa from DonDatHang";
        $result        = $this->ExecuteQuery($sql);
        $lstDonDatHang = array();
        while ($row = mysqli_fetch_array($result)) {
            $donDatHang                = new DonDatHang();
            $donDatHang->MaDonDatHang  = $row['MaDonDatHang'];
            $donDatHang->MaNguoiDung   = $row['MaNguoiDung'];
            $donDatHang->NgayLap       = $row['NgayLap'];
            $donDatHang->TongThanhTien = $row['TongThanhTien'];
            $donDatHang->TinhTrang     = $row['TinhTrang'];
            $donDatHang->BiXoa         = $row['BiXoa'];
            $lstDonDatHang[]           = $donDatHang;
        }
        return $lstDonDatHang;
        
    }
    public function GetByID($maNguoiDung)
    {
        $sql    = "SELECT MaDonDatHang , MaNguoiDung , NgayLap,TongThanhTien,TinhTrang,BiXoa from DonDatHang where MaNguoiDung = $maNguoiDung";
        $result = $this->ExecuteQuery($sql);
        if ($result == null)
            return null;
        $row                       = mysqli_fetch_array($result);
        $donDatHang                = new DonDatHang();
        $donDatHang->MaDatHang     = $row['MaDatHang'];
        $donDatHang->MaNguoiDung   = $row['MaNguoiDung'];
        $donDatHang->NgayLap       = $row['NgayLap'];
        $donDatHang->TongThanhTien = $row['TongThanhTien'];
        $donDatHang->TinhTrang     = $row['TinhTrang'];
        $donDatHang->BiXoa         = $row['BiXoa'];
        return $donDatHang;
    }
    public function GetDonHang($maNguoiDung)
    {
        $sql           = "SELECT MaDonDatHang , MaNguoiDung , NgayLap,TongThanhTien,TinhTrang,BiXoa from DonDatHang where MaNguoiDung = '$maNguoiDung'";
        $result        = $this->ExecuteQuery($sql);
        $lstDonDatHang = array();
        while ($row = mysqli_fetch_array($result)) {
            $donDatHang                = new DonDatHang();
            $donDatHang->MaDonDatHang  = $row['MaDonDatHang'];
            $donDatHang->MaNguoiDung   = $row['MaNguoiDung'];
            $donDatHang->NgayLap       = $row['NgayLap'];
            $donDatHang->TongThanhTien = $row['TongThanhTien'];
            $donDatHang->TinhTrang     = $row['TinhTrang'];
            $donDatHang->BiXoa         = $row['BiXoa'];
            $lstDonDatHang[]           = $donDatHang;
        }
        return $lstDonDatHang;
    }
    public function Insert($donDatHang)
    {
        $sql = "INSERT into DonDatHang(MaDonDatHang,MaNguoiDung,NgayLap,TongThanhTien,TinhTrang,BiXoa) values('$donDatHang->MaDonDatHang','$donDatHang->MaNguoiDung','$donDatHang->NgayLap','$donDatHang->TongThanhTien','$donDatHang->TinhTrang','$donDatHang->BiXoa')";
        $this->ExecuteQuery($sql);
    }
    public function DemSoDong()
    {
        $sql    = "SELECT MaDonDatHang, MaNguoiDung,NgayLap,TongThanhTien,TinhTrang,BiXoa from DonDatHang";
        $result = $this->ExecuteQuery($sql);
        $SoDong = mysqli_num_rows($result);
        return $SoDong;
    }
    public function Update($donDatHang)
    {
        
        $sql = "UPDATE DonDatHang set BiXoa = 1 where  MaDonDatHang = $donDatHang->MaDonDatHang";
        $this->ExecuteQuery($sql);
    }
    public function Update_ma($donDatHang)
    {
        
        $sql = "UPDATE DonDatHang set MaDonDatHang = $donDatHang->MaDonDatHang where  MaDonDatHang = $donDatHang->MaDonDatHang";
        $this->ExecuteQuery($sql);
    }
    
    
    /////admin
    public function fetchAll()
    {
        $sql           = "SELECT MaDonDatHang, MaNguoiDung, NgayLap,TongThanhTien,TinhTrang,BiXoa from DonDatHang";
        $result        = $this->ExecuteQuery($sql);
        $lstDonDatHang = array();
        while ($row = mysqli_fetch_array($result)) {
            $donDatHang                = new DonDatHang();
            $donDatHang->MaDonDatHang  = $row['MaDonDatHang'];
            $donDatHang->MaNguoiDung   = $row['MaNguoiDung'];
            $donDatHang->NgayLap       = $row['NgayLap'];
            $donDatHang->TongThanhTien = $row['TongThanhTien'];
            $donDatHang->TinhTrang     = $row['TinhTrang'];
            $donDatHang->BiXoa         = $row['BiXoa'];
            $lstDonDatHang[]           = $donDatHang;
        }
        return $lstDonDatHang;
        
    }
    public function fetchAll1($ma)
    {
        $sql           = "SELECT MaChiTietDonDatHang, MaSanPham, SoLuong, GiaBan, MaDonDatHang FROM chitietdondathang WHERE MaDonDatHang=$ma";
        $result        = $this->ExecuteQuery($sql);
        $lstDonDatHang = array();
        while ($row = mysqli_fetch_array($result)) {
            $donDatHang                      = new ChiTietDonDatHang();
            $donDatHang->MaChiTietDonDatHang = $row['MaChiTietDonDatHang'];
            $donDatHang->MaSanPham           = $row['MaSanPham'];
            $donDatHang->SoLuong             = $row['SoLuong'];
            $donDatHang->GiaBan              = $row['GiaBan'];
            $donDatHang->MaDonDatHang        = $row['MaDonDatHang'];
            $lstDonDatHang[]                 = $donDatHang;
        }
        return $lstDonDatHang;
        
    }
    public function fetchID($MaDatHang)
    {
        $sql = "SELECT MaDonDatHang,MaNguoiDung, NgayLap,TongThanhTien,TinhTrang,BiXoa from DonDatHang where MaDonDatHang='$MaDatHang'";
        $rs  = $this->ExecuteQuery($sql);
        if ($rs == null)
            return null;
        
        $row = mysqli_fetch_array($rs);
        @extract($row);
        $donDatHang                = new DonDatHang();
        $donDatHang->MaDatHang     = $MaDatHang;
        $donDatHang->MaNguoiDung   = $MaNguoiDung;
        $donDatHang->NgayLap       = $NgayLap;
        $donDatHang->TongThanhTien = $TongThanhTien;
        $donDatHang->TinhTrang     = $TinhTrang;
        $donDatHang->BiXoa         = $BiXoa;
        $lstDonDatHang[]           = $donDatHang;
        return $donDatHang;
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
    public function delete($MaDonDatHang)
    {
        $sql = "DELETE chitietdondathang, dondathang FROM chitietdondathang, dondathang WHERE chitietdondathang.MaDonDatHang = dondathang.MaDonDatHang AND chitietdondathang.MaDonDatHang=$MaDonDatHang";
        $this->ExecuteQuery($sql);
    }
    public function delete1($MaDonDatHang)
    {
        $sql = "DELETE dondathang from dondathang  WHERE dondathang.MaDonDatHang='$MaDonDatHang'";
        $this->ExecuteQuery($sql);
    }
    public function duyet($MaDonDatHang)
    {
        $sql = "UPDATE dondathang set tinhtrang=1 where MaDonDatHang='$MaDonDatHang'";
        $this->ExecuteQuery($sql);
    }
    public function thongkedoanhthu()
    {
        $sql    = "SELECT sum(TongThanhTien) FROM dondathang WHERE dondathang.Ngaylap >= CURDATE() AND dondathang.Ngaylap < CURDATE() + INTERVAL 1 DAY";
        $result = $this->ExecuteQuery($sql);
        return $result;
    }
    public function timkiem($seach)
    {
        $sql           = "SELECT MaDonDatHang, MaNguoiDung, NgayLap,TongThanhTien,TinhTrang,BiXoa from DonDatHang where MaNguoiDung like '%$seach%'";
        $result        = $this->ExecuteQuery($sql);
        $lstDonDatHang = array();
        while ($row = mysqli_fetch_array($result)) {
            $donDatHang                = new DonDatHang();
            $donDatHang->MaDonDatHang  = $row['MaDonDatHang'];
            $donDatHang->MaNguoiDung   = $row['MaNguoiDung'];
            $donDatHang->NgayLap       = $row['NgayLap'];
            $donDatHang->TongThanhTien = $row['TongThanhTien'];
            $donDatHang->TinhTrang     = $row['TinhTrang'];
            $donDatHang->BiXoa         = $row['BiXoa'];
            $lstDonDatHang[]           = $donDatHang;
        }
        return $lstDonDatHang;
        
    }
    public function update1($dondathang)
    {
        
        $sql = "UPDATE dondathang SET MaNguoiDung=$dondathang->MaNguoiDung,NgayLap='$dondathang->NgayLap',TongThanhTien=$dondathang->TongThanhTien,TinhTrang=$dondathang->TinhTrang,BiXoa=$dondathang->BiXoa WHERE MaDonDatHang='$dondathang->MaDonDatHang'";
        $this->ExecuteQuery($sql);
    }
    public function insert1($dondathang)
    {
        $sql    = "INSERT INTO dondathang(MaDonDatHang, MaNguoiDung, NgayLap, TongThanhTien, TinhTrang, BiXoa)
            VALUES ('$dondathang->MaDonDatHang','$dondathang->MaNguoiDung','$dondathang->NgayLap','$dondathang->TongThanhTien','$dondathang->TinhTrang','$dondathang->BiXoa')";
        $result = $this->ExecuteQuery($sql);
    }
    
}

?>