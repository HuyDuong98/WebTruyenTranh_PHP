<?php
	include('Connect.php');
	error_reporting(E_ALL & ~E_NOTICE &~E_DEPRECATED);
	$search_name = $_POST['txt_Search']; 
	$querry = "select * from tieu_thuyet, tac_gia, nha_xuat_ban where tieu_thuyet.MaTacGia=tac_gia.MaTG and tieu_thuyet.MaNXB = nha_xuat_ban.MaNXB and TenTT like '%$search_name%'";
	$sql = 	$conn->query($querry);
	$rowCount = $sql->rowCount();
	if($rowCount > 0 && $search_name !="")
	{
		echo '<table border="1" cellspacing="0" cellpadding="10" align="center">';
		echo "<strong>Tìm Kiếm Với Từ Khóa: ".$search_name."<tr colspan='7'></tr></strong>";
		foreach($sql as $tt) 
		{
		 	$image = htmlspecialchars($tt['HinhAnh'], ENT_QUOTES);
	    	echo '<tr colspan="2">';
	    	echo '<td>';
	    	echo $image ? "<img src='img/{$image}' width ='100px'/> " :"Không Tìm thấy Hình Ảnh";
	    	echo '</td>';	
	    	echo "</tr>";
	    	echo '<tr>';
		    echo "<td>{$tt['TenTT']}</td>";
		    echo "<td>{$tt['TrangThai']}</td>";
		    echo "<td>{$tt['SoChuong']}</td>";
		   
		    echo "<td>{$tt['TenTG']}</td>";
		    
		    echo '</tr>';
		      
		}
		echo '</table>';
		  
		 
	}
?>