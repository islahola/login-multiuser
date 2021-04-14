<?php 

$conn= mysqli_connect("localhost","root","","login");
if($conn)
{
	echo "koneksi db berhasil";
	
}else{
	echo "koneksi db gagal";
}




 ?>