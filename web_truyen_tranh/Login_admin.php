<?php
		session_start();
		if(isset($_POST['dangnhap']))
		{
			include("Connect.php");
			$tk = $_POST["account"];
			$_SESSION['tk'] = $_POST['account'];
			$mk = $_POST["pass"];
			if($tk !="" && $mk != "")
			{
				//Login của người quản trị
				$querry = "select * from nhan_vien WHERE TaiKhoan='$tk' and MatKhau='$mk' ";
				$sql = $conn->query($querry);
				$rowCount = $sql->rowCount();

				if($rowCount > 0 && $rowCount < 2)
					echo '';
				else
					echo '';

			}
		}
		?>