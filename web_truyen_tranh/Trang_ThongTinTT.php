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
    <link rel="stylesheet" type="text/css" href="css/Do_An.css">
    <link rel="stylesheet" type="text/css" href="TrangGT.css">

    <?php
        include("Connect.php");
        include("phan_trang.php");
        $id = $_GET['id'];
        $querry = "select * from tieu_thuyet, tac_gia, nha_xuat_ban where tieu_thuyet.MaTacGia=tac_gia.MaTG and tieu_thuyet.MaNXB = nha_xuat_ban.MaNXB and MaTT='$id'";
        $querry2 = "select * from so_chuong, tieu_thuyet WHERE so_chuong.MaTT = tieu_thuyet.MaTT and tieu_thuyet.MaTT='$id'";
        $sql = $conn->query($querry);
        $sql2 = $conn->query($querry2);
        $rowcount = $sql2->rowcount();
        $e = $rowcount;
        foreach ($sql as $tt) {
            $image = htmlspecialchars($tt['HinhAnh'], ENT_QUOTES);
           
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
                        <li class="nav-item">
                            <a class="nav-link" href="index_Login_TV.php">
                                <i class=""></i>
                                ĐĂNG NHẬP</a>
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
    <div>


    <div class="Chinh">
            <div class="Content">

                <div class="ThongTin">
                    <div class="truyen">
                        <h2>Thông tin truyện</h2>
                    </div>
                    <div class="book">
                        <div class="hinh">
                            <?php echo $image ? "<img src='img/{$image}'/> " :"Không Tìm thấy Hình Ảnh";?>
                        </div>
                        <div class="Info">
                            <div>
                                <strong>Tên Tác Phẩm:</strong> <a href="#"><?php echo $tt['TenTT'];?></a>
                            </div>
                            <div>
                                <strong>Tác Giả:</strong> <a href="#"><?php echo $tt['TenTG'];?></a>
                            </div>
                            <div>
                                <strong>Thể Loại:</strong> 
                                <?php echo $tt['MaTheLoai'];?>
                            </div>
                            <div>
                                <strong>Nguồn:</strong> 
                                <span class="source"><?php echo $tt['TenNXB'];?></span>
                            </div>
                            <div>
                                <strong>Trạng Thái:</strong> 
                                <span class="text-success"><?php echo $tt['TrangThai'];?></span>
                            </div>

                            <div>
                                <strong>Giá Bán:</strong> 
                                <span class="text-success"><?php echo $tt['GiaBan'];?> vnđ</span>
                            </div>


                        </div>
                    </div>

    </div>
    <div class="Chuong">
                        <div class="Danh-Sach"><h2>Danh Sách Chương</h2></div>
                        <div class="Danh-Sach-Chuong">
                        <ul class="Chapter">
                          <?php
                          $dem=0;
                            foreach ($sql2 as $sc) {
                                $dem++;
                               
                          ?>
                                <li>
                                    <a href="index_Doc.php?ma=<?php echo $tt['MaTT'];?>">
                                        <span>Chương <?php echo $dem;?></span>
                                      <?php echo $sc['TenChuong'];?>
                                    </a>
                                </li>
                                
                            
                           
                            </ul>
                            <?php } ?>
                        </div>

   
<?php }?>

</body>