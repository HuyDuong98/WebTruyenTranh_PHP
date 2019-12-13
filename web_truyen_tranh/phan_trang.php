<?php
	$page_url = "http://localhost:81/web_truyen_tranh/index.php";
	$display = 8; // số item hiển thị trong 1 trang
	$num_links = 5; // số trang
	$sql = "select * from tieu_thuyet";
	$records = $conn->query($sql); 
	$total_rows = $records->rowCount();// đếm số hàng trong bảng sql
	if(isset($_GET['page']) && is_numeric($_GET['page']))
		$currpage = $_GET['page'];
	else
		$currpage = 1;

	$position=(($currpage-1)*$display);

	$total_pages = ceil($total_rows/$display);
		
	if($currpage > $num_links)
		$start = $currpage-($num_links-1);
	else
		$start = 1;
	if(($currpage + $num_links) < $total_pages)
		$end = $currpage + $num_links;
	else
		$end = $total_pages;
?>
