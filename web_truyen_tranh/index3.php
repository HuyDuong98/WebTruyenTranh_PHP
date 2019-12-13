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
        include("phan_trang.php");
        include("Login_admin.php");
        error_reporting(E_ALL & ~E_NOTICE &~E_DEPRECATED);
        $sql = "select * from tieu_thuyet order by MaTT ASC LIMIT $position, $display";
        if($_SESSION['tk']!="")
        {
            $tk_nv=$_SESSION['tk'];
            $querry = "select * from nhan_vien WHERE TaiKhoan = '$tk_nv' ";
            foreach ($conn->query($querry) as $nv) {
               

        
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
                            <a class="nav-link" href="list_cart.php"><i class="fas fa-shopping-cart"></i> GIỎ HÀNG</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"><i class="fas fa-phone"></i> Liên Hệ</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">
                                <?php echo $nv['TenNV'];?>
                                </a>
                             <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="#">Thông Tin Người Dùng</a>
                                <a class="dropdown-item" href="Login.php?id=<?php echo $nv['MaNV']?>">Chức Năng Quản Lý</a>
                                 <a class="dropdown-item" href="index_Login_admin.php">Đăng Xuất</a>
                            </div>
                        </li>
                        <?php 
                             } 
                         }
                        ?>
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
    <div class="content">
        <div class="container">
            <div class="owl-carousel owl-theme position-relative">
                <div class="item">
                    <img class="img" src="img/h1.jpg" title="" />
                </div>
                <div class="item">
                    <img class="img" src="img/h2.jpg" title="" />
                </div>
                <div class="item">
                    <img class="img" src="img/h3.jpg" title="" />
                </div>
                <div class="item">
                    <img class="img" src="img/h4.jpg" title="" />
                </div>
                <div class="item">
                    <img class="img" src="img/h5.jpg" title="" />
                </div>
                <div class="item">
                    <img class="img" src="img/h6.jpg" title="" />
                </div>
                <div class="item">
                    <img class="img" src="img/h7.jpg" title="" />
                </div>
                <div class="item">
                    <img class="img" src="img/h8.jpg" title="" />
                </div>
                <div class="item">
                    <img class="img" src="img/h9.jpg" title="" />
                </div>
                <div class="item">
                    <img class="img" src="img/h10.jpg" title="" />
                </div>
            </div>
            <div class="tieu-de">
                <div class="name">
                    <h4>Truyện tranh hot >></h4>
                </div>

                <div class="list-icon d-flex justify-content-end">
                    <p>Chia sẻ:</p>
                    <a href="#" title="facebook">
                        <div class="icon icon-1">
                            <i class="fab fa-facebook-f"></i>
                        </div>
                    </a>
                    <a href="#" title="google+">
                        <div class="icon icon-2">
                            <i class="fab fa-google-plus-g"></i>
                        </div>
                    </a>
                    <a href="#" title="twitter">
                        <div class="icon icon-4">
                            <i class="fab fa-twitter"></i>
                        </div>
                    </a>
                    <a href="#" title="google+">
                        <div class="icon icon-5">
                            <i class="fab fa-pinterest"></i>
                        </div>
                    </a>
                </div>
            </div>
            <div class="row">
                <?php

                    foreach($conn->query($sql) as $tt)
                    { 
                       /* $tt["HinhAnh"] = imagecreatetruecolor(120, 20);
                       
                        header('Content-Type: image/jpeg');
                        header('Content-Transfer-Encoding: Binary'); 

                        // Output the image
                        imagejpeg($tt["HinhAnh"]);

                        // Free up memory
                        imagedestroy($tt["HinhAnh"]);
                        */  
                        $image = htmlspecialchars($tt['HinhAnh'], ENT_QUOTES);
                ?>
                <div class="col-lg-3">
                    <div class="card">
                        <div class="nd position-relative">
                            <div style="height: 350px; overflow: hidden;">
                                <img class="card-img-top img " <?php echo $image ? "<img src='img/{$image}'/> " :"Không Tìm thấy Hình Ảnh";?> alt="Card image cap">
                            </div>
                            <div class="noi-dung">
                                <a href="#">Bạn đang đọc truyện Sam Sam đến đây ăn nè! của tác giả Cố Mạn trên website truyện tranh hay.
                                    Ngày xưa có một con heo, bị một con sói bắt về nuôi, sói nói với heo rằng, nuôi nàng
                                    để tương lai muốn ăn thịt, heo nhỏ vừa không tình nguyện, lại sợ hãi, nhưng nàng đánh
                                    không lại sói, đành phải ngồi yên để cho sói vỗ béo. Cứ như vậy trong suốt một khoảng
                                    thời gian, càng ngày heo càng béo, lúc này sói lại thả nó ra, bắt một con heo khác để
                                    ăn, con heo kia thấy rất khó chịu, ngươi bảo, con heo kia nên làm gì bây giờ? “Ách……
                                    Vậy làm một con heo tự do đi !” Sam Sam vẻ mặt sa sầm: “Ngươi căn bản vẫn không hiểu
                                    rõ trọng tâm! Không bị ăn chẳng phải là rất tốt sao? Tại sao con heo kia lại cảm thấy
                                    khó chịu chứ?” “Oa! Ta biết! Vậy chắc chắn là con heo kia đã yêu con sói! Tình yêu vượt
                                    qua cả ranh giới chủng tộc nha, thật là lãng mạn!” “…… Lục Song Nghi! Ngươi thật ngu
                                    ngốc!”
                                </a>
                            </div>
                        </div>
                        <div class="card-body text-center">
                            <h5 class="card-title"><?php echo $tt["TenTT"];?></h5>
                            <p style="color:#fff"><?php echo $tt["SoChuong"];?></p>
                            <div>
                                <a href="#" class="btn btn-primary ">
                                    <i class="fas fa-cart-plus"></i> Đặt</a>
                                <a href="#" class="btn btn-primary">
                                    <i class="fas fa-search-plus"></i> Đọc </a>
                            </div>
                        </div>
                    </div>
                </div>
                <?php }
                $conn = null;
          ?>
          <?php include("PhanTang_HienThi.php");?>
                
    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="left">
                        <a href="#" title="Trang chủ">
                            <h3>WEB TRUYỆN TRUYỆN TRANH</h3>
                        </a>
                        <p>
                            <b>Địa chỉ</b>: 140 Lê Trọng Tấn, Phường 15, Tân Phú, Hồ Chí Minh
                            <br/>
                            <b>Hotline</b>:
                            <a href="tel:0353033933">0353033933</a> - Fax:
                            <a href="Fax:0808080808">0808080808</a>
                            <br/>
                            <b>Email</b>:
                            <a href="gmail:huyduong020998@gmail.com">huyduong020998@gmail.com</a>
                        </p>
                        <img class="img" src="http://websitequangngai.com/wp-content/uploads/2016/07/logo-da-thong-bao-voi-bo-cong-thuong.png" />
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="right">
                        <h3 class="text-lg-right">CHÍNH SÁCH VÀ QUY ĐỊNH</h3>
                        <P class="text-lg-right">
                            <a href="#" title="Chính sách và quy định chung">Chính sách và quy định chung</a>
                            <br/>
                            <a href="#" title="Quy định thành viên">Quy định thành viên</a>
                            <br/>
                            <a href="#" title="Yêu cầu thảo luận trong group">Yêu cầu thảo luận trong group</a>
                            <br/>
                            <a href="#" title="Chính sách bảo mật thông tin">Chính sách bảo mật thông tin</a>
                            <br/>
                            <a href="#" title="Liên hệ hỗ trợ">Liên hệ hỗ trợ</a>
                        </P>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="left text-center text-lg-left">
                        <a href="#" title="trang chủ">Copyright &#169; Web truyện tranh design by DNHuy. All rights reserved</a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="right text-center text-lg-right">
                        <div class="icons">
                            <a class="icon" href="#" title="facebook">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                            <a class="icon" href="#" title="google+">
                                <i class="fab fa-google-plus-g"></i>
                            </a>
                            <a class="icon" href="#" title="twitter">
                                <i class="fab fa-twitter"></i>
                            </a>
                            <a class="icon" href="#" title="in">
                                <i class="fab fa-linkedin-in"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="backtop">
        <i class="fas fa-chevron-up"></i>
    </div>

    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script>
        $(document).ready(function () {
            $(window).scroll(function () {
                if ($(this).scrollTop() < 500) {
                    $(".backtop").fadeOut();
                } else {
                    $(".backtop").fadeIn();
                }
            })
            $(".backtop").click(function () {
                $("html,body").animate({ scrollTop: 0 }, 600);
            })
            $('.owl-carousel').owlCarousel({
                loop: true,
                margin: 10,
                nav: true,
                responsive: {
                    0: {
                        items: 2
                    },
                    1000: {
                        items: 4
                    }
                }
            })
            $(function () {
                setInterval(slideshow, 3000);
            });

            function slideshow() {
                $('.owl-next').click();
            }
        })
    </script>
</body>

</html>