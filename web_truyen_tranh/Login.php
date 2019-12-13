<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title> TRUYỆN TRANH HAY</title>
    <link rel="shortcut icon" type="image/png" href="img/truyentranh.png" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="css/styleTC.css" />
    <link rel="stylesheet" type="text/css" href="css/fontawesome-all.min.css" />
    <link rel="stylesheet" type="text/css" href="css/owl.carousel.min.css" />
    <link rel="stylesheet" type="text/css" href="css/owl.theme.default.min.css" />

    <?php
       
        include("Connect.php");
        error_reporting(E_ALL & ~E_NOTICE &~E_DEPRECATED);
        $tk_nv=$_GET['id'];
        if($tk_nv!="")
        {
           
            $querry = "select * from phan_quyen, nhan_vien WHERE nhan_vien.MaQuyen = phan_quyen.MaQuyen and MaNV = '$tk_nv' ";
            foreach ($conn->query($querry) as $nv) {
                $quyen = $nv['TenQuyen'];
         
    ?>

</head>

<body>
    <div class="head">
        <div class="container">
            <nav class="navbar navbar-expand-lg">
                <a class="navbar-brand" href="index.php">
                    <img src="img/truyentranh.png" />
                    <b>Truyện Tranh Hay</b>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon">
                        <i class="fas fa-th-list"></i>
                    </span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="#">
                                <i class="fas fa-home"></i>
                                <span class="sr-only">(current)</span>
                            </a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">
                                THỂ LOẠI
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="#">Tất cả</a>
                                <a class="dropdown-item" href="#">Tiểu thuyết</a>
                                <a class="dropdown-item" href="#">Hành động</a>
                                <a class="dropdown-item" href="#">Ngôn tình</a>
                                <a class="dropdown-item" href="#">Trinh thám</a>
                            </div>
                        </li>
                      
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">
                                XẾP HẠNG
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="#">Top all</a>
                                <a class="dropdown-item" href="#">Top truyện Đọc truyện nhiều nhất tháng</a>
                                <a class="dropdown-item" href="#">Top truyện Đọc truyện nhiều nhất tuần</a>
                                <a class="dropdown-item" href="#">Top truyện Đọc truyện nhiều nhất ngày</a>
                                <a class="dropdown-item" href="#">Truyện full</a>
                                <a class="dropdown-item" href="#">Truyện được yêu thích</a>
                                <a class="dropdown-item" href="#">Truyện mới cập nhật</a>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <i class="far fa-comments"></i>
                                THẢO LUẬN</a>
                        </li>
                        
                        <li class="nav-item">
                            <a class="nav-link" href="#"><i class="fas fa-shopping-cart"></i> GIỎ HÀNG</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"><i class="fas fa-phone"></i> Liên Hệ</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">
                                <?php echo $nv['TaiKhoan'];?>
                                </a>
                             <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="#">Thông Tin Người Dùng</a>
                                 <a class="dropdown-item" href="index_Login_admin.php">Đăng Xuất</a>
                            </div>
                        </li>
                        <li class="nav-item">
                            <form id="demo-2" method="post" action="Search.php" >
                                <input type="search" placeholder="Search" name="txt_Search" value="<?php echo $search_name?>">
                            </form>
                        </li>
                    </ul>
                </div>
            </nav>

        </div>
    </div>
    <div style="background-color: black; color: #fff"><marquee>Website đọc truyện online miễn phí!!! Đồ án môn học PHP do sinh viên trường Hufi thực hiện.</marquee></div>
   
   <?php
        if($quyen == 'Admin')
        {
   ?>
   <div>
       <div><a href="" title="nhanVien" style="background-color: red">Nhân Viên</a></div>
        <div><a href="index_KH.php" title="khách hàng" style="background-color: red">Khách Hàng</a></div>
        <div><a href="" title="nhanVien" style="background-color: red">Chức Năng Nào Đó</a></div>
    </div>
        <?php } ?>

    <?php 
        if($quyen=='Nhân Viên')
        {
    ?>
       
        <div><a href="QLKH.php" title="khách hàng" style="background-color: red">Khách Hàng</a></div>
        

    <?php }?>

    
        <?php } }
        ?>

</body>