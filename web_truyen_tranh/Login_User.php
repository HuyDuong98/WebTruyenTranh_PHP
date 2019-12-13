<?php
		session_start();
		if(isset($_POST['dangnhap']))
		{
			include("Connect.php");
			$tk = $_POST["account"];
			$_SESSION['tk'] = $_POST['account'];
			$_SESSION['mk'] = $_POST['pass'];
			$mk = $_POST["pass"];
			if($tk !="" && $mk != "")
			{
				//Login Của Người dùng
				$querry	 = "Select * from thanh_vien where TaiKhoan	='$tk' and Matkhau = '$mk'";
				$sql = 	$conn->query($querry);
				$rowCount = $sql->rowCount();

				
				if($rowCount > 0 && $rowCount < 2)
					echo '';
				else
					echo '';

			}
			
		}
		?>