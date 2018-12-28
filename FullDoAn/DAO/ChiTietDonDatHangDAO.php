<?php 

class ChiTietDonDatHangDAO extends DB{
	
		public function GetAllAvailable()
		{
			 $sql ="SELECT MaChiTietDonDatHang,MaSanPham,SoLuong,GiaBan,MaDonDatHang from ChiTietDonDatHang";
			 $result = $this->ExecuteQuery($sql);
			 $lst = array();
			 while($row = mysqli_fetch_array($result))
			 {
			 	  $chiTiet = new ChiTietDonDatHang();
			 	  $chiTiet->MaChiTietDonDatHang = $row['MaChiTietDonDatHang'];
			 	  $chiTiet->MaSanPham = $row['MaSanPham'];
			 	  $chiTiet->SoLuong = $row['SoLuong'];
			 	  $chiTiet->GiaBan = $row['GiaBan'];
			 	  $chiTiet->MaDonDatHang = $row['MaDonDatHang'];
			 	  $lst[] = $chiTiet;
			 }
			 return $lst;
		}
		public  function GetByID($maDonDatHang)
		{
			$sql = "SELECT MaChiTietDonDatHang,MaSanPham,SoLuong,GiaBan,MaDonDatHang from ChiTietDonDatHang where MaDonDatHang = $maDonDatHang";
			$result = $this->ExecuteQuery($sql);
			$lst = array();
			while($row = mysqli_fetch_array($result))
			{
				$chiTiet = new ChiTietDonDatHang();
			 	  $chiTiet->MaChiTietDonDatHang = $row['MaChiTietDonDatHang'];
			 	  $chiTiet->MaSanPham = $row['MaSanPham'];
			 	  $chiTiet->SoLuong = $row['SoLuong'];
			 	  $chiTiet->GiaBan = $row['GiaBan'];
			 	  $chiTiet->MaDonDatHang = $row['MaDonDatHang'];
			 	  $lst[] = $chiTiet;
			}
			return $lst;
		}
		public function Insert($chiTietDonDatHang)
		{
			$sql = "INSERT into ChiTietDonDatHang(MaSanPham,SoLuong,GiaBan,MaDonDatHang) values('$chiTietDonDatHang->MaSanPham','$chiTietDonDatHang->SoLuong','$chiTietDonDatHang->GiaBan','$chiTietDonDatHang->MaDonDatHang')";
			$result = $this->ExecuteQuery($sql);
		}

}

 ?>