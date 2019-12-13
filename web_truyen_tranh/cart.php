<?php
    session_start  ();
    include("Connect.php");
    // Lấy id truyện
    $id = isset($_GET['MaTT']) ? $_GET['MaTT'] : '';
    $sql="select * from tieu_thuyet where MaTT= '".$id."'";
    //var_dump($sql);
    $linkdomain = $_SERVER['SERVER_NAME'];
    //$con=mysqli_connect("localhost","root","","csdl_php");

    //$product = mysqli_query($con,$sql);
    foreach($conn->query($sql) as $product){
         // Ktra tồn tại sesion['cart']
        //var_dump($product['TenTT']);
        if(isset($_SESSION['cart']))
        {
            if(isset($_SESSION['cart'][$id]))
            {
                $_SESSION['cart'] [$id]['qty'] += 1;
            }
            else{
                $_SESSION['cart'] [$id]['qty'] = 1;
                
            }
            $_SESSION['cart'] [$id]['TenTT'] = $product['TenTT'];
            $_SESSION['cart'] [$id]['GiaBan'] = $product['GiaBan'];

            header("Location:http://".$linkdomain.":8080/web_truyen_tranh/index.php");exit();
        }
        else
        {
            $_SESSION['cart'] [$id]['qty'] = 1;
            $_SESSION['cart'] [$id]['TenTT'] = $product["TenTT"];
            $_SESSION['cart'] [$id]['GiaBan'] = $product["GiaBan"];
            header("Location:http://".$linkdomain.":8080/web_truyen_tranh/index.php");exit();
        }
    }

    

   
?>