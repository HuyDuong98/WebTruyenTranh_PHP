<?php 
    @ob_start();
    session_start();
    $linkdomain = $_SERVER['SERVER_NAME'];
    if(!isset($_SESSION['cart']))
    {
        header("Location:http://localhost:8080/web_truyen_tranh/index.php");exit();
    }
    $key = isset($_GET['key']) ? (int)$_GET['key']: '';
    if($key)
    {
        if(array_key_exists($key,$_SESSION['cart']))
        {
            unset($_SESSION['cart'][$key]);
            $_SESSION['success']= 'Xoá thành công';
        }
    }
    //$actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
    header("Location:http://".$linkdomain.":8080/web_truyen_tranh/list_cart.php");exit();
?>