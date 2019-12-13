<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <link rel="shortcut icon" type="image/png" href="img/icon_Re.png" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">

    <!-- Title Page-->
    <title>Đăng Ký Thành Viên</title>
    

    <!-- Icons font CSS-->
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="vendor/select2/select2_Re.min.css" rel="stylesheet" media="all">
    <link href="vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/main_Re.css" rel="stylesheet" media="all">

    <?php error_reporting(E_ALL & ~E_NOTICE &~E_DEPRECATED);?>
    <?php include('Create_User.php');?>
    
</head>

<body>
    
    <div class="page-wrapper bg-gra-03 p-t-45 p-b-50">
        <div class="echo"></div>
        <div class="wrapper wrapper--w790">
            <div class="card card-5">
                <div class="card-heading">
                    <h2 class="title">Đăng Ký Thành Viên</h2>
                </div>
                <div class="card-body">
                   <form action="index_Registration.php" method="POST">
                        <div class="form-row m-b-55">
                            <div class="name">Họ Tên</div>
                            <div class="value">
                                <div class="row row-space">
                                    <div class="col-2">
                                        <div class="input-group-desc">
                                            <input class="input--style-5" type="text" name="HoTen">
                                            <label class="label--desc">Trà Xuân Sơn</label>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Số CMND</div>

                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="text" name="cmnd">
                                    <label class="label--desc">264 477 358</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Email</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="email" name="email">
                                    <label class="label--desc">trason123@mail.com</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Địa Chỉ</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="text" name="diachi">
                                    <label class="label--desc">7/6 Đường Linh Đông - Quận Thủ Đức</label>
                                </div>
                            </div>
                        </div>
                        
                        <div class="form-row m-b-55">
                            <div class="name">Số ĐT</div>
                            <div class="value">
                                <div class="row row-refine">
                                    
                                    <div class="col-9">
                                        <div class="input-group-desc">
                                            <input class="input--style-5" type="text" name="phone">
                                            <label class="label--desc">0981 077 564</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="name">Tài Khoản</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="text" name="name_tk">
                                     <label class="label--desc">Có Ít Nhất 10 Ký Tự</label>
                                </div>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="name">Mật Khẩu</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="password" name="pass">
                                     <label class="label--desc">Có Ít Nhất 1 Ký Tự In Hoa Và Đặc Biệt</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Nhập Lại Mật Khẩu</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="password" name="pass_again">
                                     <label class="label--desc">Nhập lại mật khẩu</label>
                                </div>
                            </div>
                        </div>
                        
                        <div>
                            <button class="btn btn--radius-2 btn--red" type="submit">Tạo Tài Khoản</button> &emsp;&emsp;&emsp;&emsp;
                            <a href="index.php" class="btn btn--radius-2 btn--red" style="background-color: #06F;">Quay Lại Trang Chủ</a></div>
                           </br>
                        </div>
                       
                        
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Jquery JS-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="vendor/select2/select2_Re.min.js"></script>
    <script src="vendor/datepicker/moment.min.js"></script>
    <script src="vendor/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="js/global.js"></script>

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
<!-- end document-->