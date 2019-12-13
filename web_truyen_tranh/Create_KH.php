<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Tạo Thông Tin Khách Hàng Mới</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"/>
</head>

<body>
	<?php

	

if($_POST){
       
	// include file kết nối CSDL
	include("Connect.php");
	try{
		 $query = "INSERT INTO khach_hang ( `TenKH`, `GT`, `SDT`, `DiaChi`, `Email`) VALUES (:TenKH, :GT, :SDT, :DiaChi, :Email)";

		$stmt = $conn->prepare($query);
		
		
		//$ID=htmlspecialchars(strip_tags($_POST['ID']));
                //Lấy giá trị POST từ form vừa submi
                $TenKH=htmlspecialchars(strip_tags($_POST['TenKH']));
		$GT=htmlspecialchars(strip_tags($_POST['GT']));
		$SDT=htmlspecialchars(strip_tags($_POST['SDT']));
		$DiaChi=htmlspecialchars(strip_tags($_POST['DiaChi']));
		$Email=htmlspecialchars(strip_tags($_POST['Email']));
                
                
		//$stmt->bindParam(':ID', $ID);
		$stmt->bindParam(':TenKH', $TenKH,PDO::PARAM_STR,50);
		$stmt->bindParam(':GT', $GT,PDO::PARAM_STR,3);
		$stmt->bindParam(':SDT', $SDT,PDO::PARAM_STR,10);
		$stmt->bindParam(':DiaChi', $DiaChi,PDO::PARAM_STR,255);
		$stmt->bindParam(':Email', $Email,PDO::PARAM_STR,30);
//		$created=date('Y-m-d H:i:s');
		//$stmt->bindParam(':ID', $ID);
                
//                 echo "hello". $TenKH;
		if($stmt->execute())
                {
			echo "<div class='alert alert-success'>Tạo sản phẩm mới thành công.</div>";
                        $conn=null;
                }
                
		else
                {
               
			echo "<div class='alert alert-danger'>Tạo sản phẩm mới thất bại.</div>";
                        $conn=null;
                }
                       
                
                
	}
	
	catch(PDOException $exception){
		die('ERROR: ' . $exception->getMessage());
	}
	}
	?>
	
	<div class="Container">
		<h1>Tạo Khách Hàng Mới</h1>
	</div>
		
	<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
		
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		
        <form action="QLKH.php" method="post">
		<table class='table table-hover table-responsive table-bordered'>
			<tr>
				<td>Tên Khách Hàng</td>
				<td><input type='text' name='TenKH' required class='form-control' /></td>
				</tr>
				<tr>
				<td>Giới Tính</td>
				<td><input type='text' name='GT' required class='form-control' /></td>
				</tr>
				<tr>
				<td>Số Điện Thoại</td>
				<td><input type='text' name='SDT' required class='form-control' /></td>
				</tr>
				<tr>
				<td>Địa chỉ</td>
				<td><input type='text' name='DiaChi' required class='form-control' /></td>
				</tr>
				<tr>
				<td>Email</td>
				<td><input type='text' name='Email' required class='form-control' /></td>
				</tr>
				
				<tr>
				<td></td>
				<td>
				<input  type='submit' value='Lưu' class='btn btn-primary' />
                                <a href='QLKH.php' class='btn btn-danger'>Reload</a>
                                <a href='index_KH.php' class='btn btn-danger'>Come Back</a>
				</td>
				</tr>
		</table>
	</form>
</body>
</html>