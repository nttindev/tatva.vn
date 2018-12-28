<?php 

class QuanTriDAO extends DB{


	public function Count_UserName($tenDangNhap)
	{
		$sql ="SELECT MaAD, TenDangNhap from Admin where TenDangNhap = '$tenDangNhap'";
		$result = $this->ExecuteQuery($sql);
        $Dong = mysqli_num_rows($result);
        return $Dong;
	}
}

 ?>