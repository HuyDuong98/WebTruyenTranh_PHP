<?php
		include('Connect.php');
               
		$TenKH = $_POST['TenKH'];
		$GT = $_POST['GT'];
		$SDT = $_POST['SDT'];
		$DiaChi = $_POST['DiaChi'];
		$Email = $_POST['Email'];
                $MaKH = $_POST['MaKH'];
		

		$sql = "UPDATE khach_hang SET TenKH=?, GT=?, SDT=?, DiaChi=?, Email=? where MaKH=?";
		$q = $conn->prepare($sql);
		$q->execute(array($TenKH,$GT,$SDT,$DiaChi,$Email,$MaKH));
		header("location: index_KH.php");
	?>

