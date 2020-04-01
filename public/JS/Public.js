$("#mytab a").click(function(e){
//        e.preventDefault();
    $(this).tab("show");
//        window.location.href = 'http://localhost:3000' + $(this).children('a').attr('href');
});

$(function(){
//当滚动条的位置处于距顶部100像素以下时，跳转链接出现，否则消失
    $(function () {
        $(window).scroll(function(){
            if ($(window).scrollTop()>100){        /*据顶距离多长出现*/
                $("#置顶键").fadeIn(1500);
            }
            else
            {
                $("#置顶键").fadeOut(1500);
            }
        });
//当点击跳转链接后，回到页面顶部位置
        $("#置顶键").click(function(){
            $('body,html').animate({scrollTop:0},1000);   /*置顶的距离以及完成动画的时间*/
            return false;             /*可有可无*/
        });
    });
});