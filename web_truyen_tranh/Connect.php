<?php
	try
	{
		$conn = new PDO("mysql:host=localhost;dbname=csdl_php", 'root','');
		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$conn->query("set names utf8");
		//echo "ket noi thanh cong";
	}
	catch(PDOException $e)
	{
		echo "ket noi that bai: " . $e->getMessage();
		
	}
?>