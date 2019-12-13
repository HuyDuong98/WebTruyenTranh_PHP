function main() {
    var w = 0;
    var h = 0;
    var i, j, width_Item;
    var dem = 0;
    var soCol, winDownWidth;
    winDownWidth = $(".container").width();
    // console.log(winDownWidth);
    if (winDownWidth > 1200) {
        soCol = 5;
    }
    else if (winDownWidth <= 1200 && winDownWidth > 960) {
        soCol = 4;
    }
    else if (winDownWidth <= 960 && winDownWidth > 720) {
        soCol = 3;
    }
    else {
        soCol = 2;
    }
    width_Item = $(".content").width() / soCol;
    $(".item").css("width", width_Item + "px");
    for (i = 0; i < $(".item").length; i++) {
        if (i % soCol == 0) {
            dem++;
            w = 0;
        }
        $(".item").eq(i).css("left", w + "px");
        w += width_Item;
        if (i >= soCol) {
            h = 0;
            for (j = 1; j < dem; j++) {
                h += $(".item").eq(i - soCol * j).outerHeight();
            }
        }
        $(".item").eq(i).css("top", h + "px");
    }
}
$(document).ready(function () {
    $(window).scroll(function () {
        if ($(this).scrollTop() < 500) {
            $(".backtop").fadeOut();
        } else {
            $(".backtop").fadeIn();
        }
    });
    $(".backtop").click(function () {
        $("html,body").animate({ scrollTop: 0 }, 600);
    });

    main();
    $(window).resize(function () {
        main();
    })

})