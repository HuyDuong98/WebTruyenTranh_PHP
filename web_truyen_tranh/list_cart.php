<?php
    session_start();
    //session_destroy();
    ?>
<?php  if(isset($_SESSION['cart'])) :?>

<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title> TRUYỆN TRANH HAY</title>
    <link rel="shortcut icon" type="image/png" href="img/truyentranh.png" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="css/bootstrap.min.css" /> 
    <link rel="stylesheet" type="text/css" media="screen" href="css/style_cart.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="css/animate.min.css" />
    <link rel="stylesheet" type="text/css" href="css/fontawesome-all.min.css" />
    <link rel="stylesheet" type="text/css" href="css/owl.carousel.min.css" />
    <link rel="stylesheet" type="text/css" href="css/owl.theme.default.min.css" />

    <?php
        include("Connect.php");
        error_reporting(E_ALL & ~E_NOTICE &~E_DEPRECATED);
        $sql = "select * from tieu_thuyet order by MaTT ASC LIMIT $position, $display";
        
    ?>
</head>

<body>

<div class="head  ">
    <nav class="navbar navbar-expand-lg">
        <a class="navbar-brand" href="index.php">
            <img src="img/truyentranh.png" />
            <b>Truyện Tranh Hay</b>
        </a>
    </nav>
</div>
<div class="container">
<div class="contentt">
    <h1 class="animated bounceInDown"><i class="fas fa-shopping-cart"></i>GIỎ HÀNG</h1>
    <table class="table">
        <thead>
            <tr>
                <th>Mã tiểu thuyết</th>
                <th>Tên</th>
                <th>Đơn giá</th>
                <th>Số lượng</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($_SESSION['cart'] as $key => $val) :?>
            <tr>
                <!-- <?php var_dump($val); ?> -->
                <td><?= $key ?></td>
                <td><?= $val['TenTT']?></td>
                <td><?=  $val['GiaBan']?></td>
                <td>
                    <input type="number" name="qty" value="<?php echo $val['qty']?>"  class="form-control qty" min="0" style="width:100px;">
                </td>
                <td>
                    <a href="remove.php?key=<?=$key?>" class="btn"> Xoá </a>
                    <a href="#" class="btn updatecart" data-key=<?php echo $key?>>update</a> 
                </td>
            </tr> 
<?php endforeach; ?>
        </tbody>
    </table>
    </div>
<?php else:?>
    <p>Không tồn tại giỏ hàng</p>
<?php endif; ?>
</div>
<script>
    $(function(){
    $updatecart =$(".updatecart");
    $updatecart.click(function(e){
        e.prevenDefault();
        $qty= $(this).parents("tr").find(".qty").val();

        $key=$(this).attr("data-key");
        console.log($qty);
        $.ajax({
            url:'capnhatgiohang.php',
            type:'GET',
            data: {'qty': $qty, 'key': $key},
            success: function(data)
            {
                if(data==1)
                {
                    alert("cập nhật giỏ hàng thành công");
                    location.href='list_cart.php';
                }else{
                    alert("cap nhat that bai");
                }
            }

        })
    })
})
</script>
</body>
</html>