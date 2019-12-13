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