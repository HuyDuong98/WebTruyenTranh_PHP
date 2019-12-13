<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Cập Nhật Thông Tin Khách Hàng</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"/>
</head>

<body>

	<?php
		include('Connect.php');
                if($_GET){
                    if(isset($_GET['id']))
                    $MaKH = $_GET['id'];
                    else
                    {
                        echo 'loi';
                    }
                    $result = $conn->prepare("select * From khach_hang where MaKH = '$MaKH'"); 
                    $result->bindParam(":MaKH", $MaKH);
                    $result->execute();
                }
                
		for ($i=0; $row = $result->fetch() ; $i++) { 
		
		
	?>
	
	<div class="Container">
		<h1>Tạo Khach Hàng Mới</h1>
	</div>
		
	<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
		
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		
	<form action="update4.php" method="POST">
		<table class='table table-hover table-responsive table-bordered'>
			<input type="hidden" name="MaKH" value = "<?php echo $MaKH;?>">
			<tr>
				<td>Tên Khách Hàng</td>
				<td><input type='text' name='TenKH' class='form-control' value="<?php echo $row['TenKH'];?>" /></td>
				</tr>
				<tr>
				<td>Giới Tính</td>
				<td><input type='text' name='GT' class='form-control' value="<?php echo $row['GT'];?>"/></td>
				</tr>
				<tr>
				<td>Điện Thoại</td>
				<td><input type='text' name='SDT' class='form-control' value="<?php echo $row['SDT'];?>"/></td>
				</tr>
				<tr>
				<td>Địa Chỉ</td>
				<td><input type='text' name='DiaChi' class='form-control' value="<?php echo $row['DiaChi'];?>"/></td>
				</tr>
				<tr>
				<td>Email</td>
				<td><input type='text' name='Email' class='form-control' value="<?php echo $row['Email'];?>"/></td>
				</tr>
				
				<tr>
				<td></td>
				<td>
				<input type='submit' value='Cập Nhật' class='btn btn-primary' />
				<a href='index.php' class='btn btn-danger'>Quay lại danh sách Khách Hàng</a>
				</td>
				</tr>
		</table>
	</form>
                <?php }?>


</body>
</html>