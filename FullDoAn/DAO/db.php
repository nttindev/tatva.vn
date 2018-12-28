<?php 

class DB{
  public function ExecuteQuery($sql)
  {
  	 $con =  mysqli_connect("localhost","root","","mobie") or die ("khong the ket noi");
  	 mysqli_set_charset($con,'UTF8');
  	 if($result = mysqli_query($con,$sql))
  	 {
  	 	mysqli_close($con);
  	 	return $result;
  	 }
  }
}


 ?>