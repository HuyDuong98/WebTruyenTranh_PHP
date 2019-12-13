<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>ql khách hàng C1</title>
<title>PDO - Đọc các bản ghi - PHP CRUD Beginner</title>
<!-- Sử dụng thư viện Bootstrap CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
<!--tùy biến css -->
<style>
	.m-r-1em{ margin-right:1em; }
	.m-b-1em{ margin-bottom:1em; }
	.m-l-1em{ margin-left:1em; }
	.mt0{ margin-top:0; }
</style>
	
<?php
	include("connect.php");
	$sql = "select * from khach_hang";
	$KH_Hang = $conn->query($sql);
	?>

</head>
<style>
table {
  border-collapse: collapse;
  width: 70%;
}

th, td {
  padding: 8px;
  
  border-bottom: 1px solid #ddd;
}

tr:hover {background-color:#f5f5f5;}
</style>
<body>
  <table width="60%" border="0" align="center" cellpadding="5" style="border-collapse: collapse">
	  <tbody>
	    <tr>
	      <td colspan="7" align="center"><h1>Thông Tin Khách Hàng</h1></td>
        </tr>
	    <tr>
	      <td bgcolor="#87D3FD" width="104" height="25">Mã Khách Hàng</td>
	      <td bgcolor="#87D3FD" width="121">Tên Khách Hàng</td>
	      <td bgcolor="#87D3FD" width="152">Giới Tính</td>
	      <td bgcolor="#87D3FD" width="133">Điện thoại</td>
	      <td bgcolor="#87D3FD" width="138">Địa Chỉ</td>
	      <td bgcolor="#87D3FD" width="38">Email</td>
        </tr>
		<?php foreach($KH_Hang as $KH) 
			{
		  ?>
	    <tr>
	      <td><?php echo $KH["MaKH"] ?></td>
	      <td><?php echo $KH["TenKH"]?></td>
	      <td><?php echo $KH["GT"] ?></td>
	      <td><?php echo $KH["SDT"] ?></td>
              <td><?php echo $KH["DiaChi"] ?></td>
	      <td><?php echo $KH["Email"] ?></td>
			
                      
                        
                       
                        
                      
        </tr>
        
         <tr>
                        <?php }
                        include 'Create_KH.php';
		  		
		  ?>
            </tr>
         
        <tr>
                        <?php 
		  		$conn = null;
              
		  ?>
            
            </tr>
    </tbody>
  </table>
	<!-- jQuery (Thư viện Jquery, sự cần thiết cho Bootstrap's JavaScript) -->
	<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
	<!-- Thư viện Bootstrap JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>