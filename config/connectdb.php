<?php 
	// เชื่อมฐานข้อมูล
	$host 		= "localhost";
	$username_db 	= "root";
	$password_db 	= "1234";
	$dbname 	= "phpajaxdb";

	// คำสั่ง connect  ฐานข้อมูล mysql
	$connect = mysqli_connect($host,$username_db,$password_db,$dbname);

	if($connect)
	{
		// echo "Connect db Successful";
	}else{
		echo "Connect db fail!!!";
	}

?>