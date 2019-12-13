<?php
		
	
try {
   include('Connect.php');
               
		$MaKH = $_GET['id'];	
		$sql = "DELETE from khach_hang where MaKH=$MaKH";
                $conn->exec($sql);
		header("location: index_KH.php");
    }
catch(Exception $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }
    ?>