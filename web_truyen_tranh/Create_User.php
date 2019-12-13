<?php
	if($_POST)
	{
		include("Connect.php");
		error_reporting(E_ALL & ~E_NOTICE &~E_DEPRECATED);
		
		$ht = $_POST['HoTen'];
		$cm = $_POST['cmnd'];
		$p = $_POST['phone'];
		$dia = $_POST['diachi'];
		
		$ema = $_POST['email'];
		$tk = $_POST['name_tk'];
		$pass1 = $_POST['pass'];
		$pass2 = $_POST['pass_again'];
		
		if($ht != '' && $cm != '' && $p != '' && $dia != '' && $ema != '' && $tk != '' && $pass1 != '' && $pass2 != '')
		{
			if($pass1 == $pass2)
			{
				
				try{
					 $query = "INSERT INTO thanh_vien SET TenTV=:HoTen, SoCMND=:cmnd, SDT=:phone,DiaChi=:diachi,Email=:email,TaiKhoan=:name_tk,MatKhau=:pass, MaTV =:ID" ;

					$stmt = $conn->prepare($query);
					
					$Hoten=htmlspecialchars(strip_tags($_POST['HoTen']));
					$cmnd=htmlspecialchars(strip_tags($_POST['cmnd']));
					$phone=htmlspecialchars(strip_tags($_POST['phone']));
					$diachi=htmlspecialchars(strip_tags($_POST['diachi']));
					$mail=htmlspecialchars(strip_tags($_POST['email']));
					$taikhoan=htmlspecialchars(strip_tags($_POST['name_tk']));
					$pass=htmlspecialchars(strip_tags($_POST['pass']));

					$stmt->bindParam(':HoTen', $Hoten);
					$stmt->bindParam(':cmnd', $cmnd);
					$stmt->bindParam(':phone', $phone);
					$stmt->bindParam(':diachi', $diachi);
					$stmt->bindParam(':email', $mail);
					$stmt->bindParam(':name_tk', $taikhoan);
					$stmt->bindParam(':pass', $pass);
					
					$created=date('Y-m-d H:i:s');
					$stmt->bindParam(':ID', $ID);

					if($stmt->execute())
						echo "<div class='wrapper wrapper--w790'>Tạo Thành Công. <a href='index_Login_TV.php'>Quay Lại Trang Đăng Nhập</a></div>";
					else
						echo "<div class='wrapper wrapper--w790'>Tạo Thất Bại. <a href='index_Registration.php'>Quay Lại Trang Đăng Ký</a></div>";
					}
					
					catch(PDOException $exception){
						die('ERROR: ' . $exception->getMessage());
					}
			}
			else
				echo "<div class='wrapper wrapper--w790'>Mật Khẩu Bạn Nhập Vào Không Trùng Nhau</div>";
		}
		else echo "<div class='wrapper wrapper--w790'>Làm Ơn Điền Đầy Đủ Các Ô</div>";

}
?>