<?php 
	class GioHangDAO extends DB
	{
		public function GetAllAvailable()
		{
			$sql ="SELECT MaSanPham, SoLuong,MaNguoiDung from GioHang";
			$result = $this->ExecuteQuery($sql);
			$lstGioHang = array();
			while($row = mysqli_fetch_array($result))
			{
				$gioHang = new GioHang();
				$gioHang->MaSanPham = $row['MaSanPham'];
				$gioHang->SoLuong = $row['SoLuong'];
				$gioHang->MaNguoiDung = $row['MaNguoiDung'];
				$lstGioHang[] = $gioHang;
			}
			return $lstGioHang;
		}
		public function GetByID($maNguoiDung)
		{
			$sql = "SELECT MaSanPham,MaNguoiDung,SoLuong from GioHang where MaNguoiDung = '$maNguoiDung'";
			$result = $this->ExecuteQuery($sql);
			 $lstSanPham = array();
			while($row = mysqli_fetch_array($result))
			{
				$gioHang = new GioHang();
				$gioHang->MaSanPham = $row['MaSanPham'];
				$gioHang->SoLuong = $row['SoLuong'];
				$gioHang->MaNguoiDung = $row['MaNguoiDung'];
				$lstSanPham[] = $gioHang;
			}
			return $lstSanPham;
		}
		// public function GetMa()
		public function DemNoDangNhap($maSanPham)//đếm sô sản phẩm có trong giỏ hàng khi chưa đăng nhập
		{
			$sql = "SELECT MaSanPham,MaNguoiDung,SoLuong from GioHang where MaNguoiDung = -1 and MaSanPham = '$maSanPham'";
			$result = $this->ExecuteQuery($sql);
			$SoDong = mysqli_num_rows($result);
			return $SoDong;

		}
		public function GetGioHangLogin($maNguoiDung, $maSanPham)
		{
  				$sql = "SELECT MaSanPham,MaNguoiDung,SoLuong from GioHang where MaNguoiDung = '$maNguoiDung' and MaSanPham = '$maSanPham'";
  				if($result == null)
  					return null;
  				 $row = mysqli_fetch_array($result);
			$gioHang = new GioHang();
			$gioHang->MaNguoiDung=$row['MaNguoiDung'];
			$gioHang->MaSanPham = $row['MaSanPham'];
			$gioHang->SoLuong = $row['SoLuong'];
			return $gioHang;

		}
		public function DemSoDong($maNguoiDung, $maSanPham)
		{
			$sql = "SELECT MaSanPham,MaNguoiDung,SoLuong from GioHang where MaNguoiDung = '$maNguoiDung' and MaSanPham = '$maSanPham'";
			$result = $this->ExecuteQuery($sql);
			$SoDong = mysqli_num_rows($result);
			return $SoDong;
		}
		public function Insert_DangNhap($gioHang)//MaSanPham Khóa Ngoại
		{
			$sql ="INSERT into GioHang(MaSanPham,MaNguoiDung ,SoLuong) values('$gioHang->MaSanPham','$gioHang->MaNguoiDung','$gioHang->SoLuong')";
			$this->ExecuteQuery($sql);
		}
			
			// public function Insert_KhongDangNhap($gioHang)
			// {
			// 	$sql="INSERT into GioHang(MaSanPham,MaNguoiDung,SoLuong) values('$gioHang->MaSanPham','$gioHang->MaNguoiDung','$gioHang->SoLuong')";
			// 	$this->ExecuteQuery($sql);
			// }
			public function Delete($gioHang) //dùng chung cho Delete Không Đăng Nhập
			{
				$sql = "DELETE from GioHang where MaSanPham = $gioHang->MaSanPham and MaNguoiDung= $gioHang->MaNguoiDung";
				$this->ExecuteQuery($sql);
			}
			public function Delete_NoDangNhap($gioHang)
			{
				$sql = "DELETE from GioHang where MaSanPham = $gioHang->MaSanPham and MaNguoiDung = -1";
				$this->ExecuteQuery($sql);
			}

			public function Update($gioHang)
			{

				$sql ="UPDATE GioHang set SoLuong = $gioHang->SoLuong where MaSanPham = $gioHang->MaSanPham and MaNguoiDung= $gioHang->MaNguoiDung";
				$this->ExecuteQuery($sql);
			}
			public function Update_SoLuong($gioHang)
			{
					$sql ="UPDATE GioHang set SoLuong = SoLuong + 1 where MaSanPham = $gioHang->MaSanPham and MaNguoiDung= $gioHang->MaNguoiDung";
				$this->ExecuteQuery($sql);
			}
			public function Update_NoDangNhap($gioHang)
			{
				$sql ="UPDATE GioHang set SoLuong = $gioHang->SoLuong where MaSanPham = $gioHang->MaSanPham and MaNguoiDung= -1";
				$this->ExecuteQuery($sql);
			}
			// public function Update_KhongDangNhap($gioHang)
			// {
			// 	$sql ="UPDATE GioHang set SoLuong = $gioHang->SoLuong where MaSanPham = $gioHang->MaSanPham and MaNguoiDung = $gioHang->MaNguoiDung";
			// 	$this->ExecuteQuery($sql);
			// }
		public function DemSoSanPham($maNguoiDung)
		{
			$sql = "SELECT MaSanPham,MaNguoiDung,SoLuong from GioHang where MaNguoiDung = '$maNguoiDung'";
			$result = $this->ExecuteQuery($sql);
			$SoDong = mysqli_num_rows($result);
			return $SoDong;
		}
		public function Delete_gioHang($gioHang)
		{
			$sql = "DELETE from GioHang where MaNguoiDung = $gioHang->MaNguoiDung";
			$result = $this->ExecuteQuery($sql);
		}
	}

 ?>