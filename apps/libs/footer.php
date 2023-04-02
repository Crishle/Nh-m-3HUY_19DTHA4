<footer>
    <div class="splitter"></div>
    <ul>
        <li>
            <div class="icon" data-icon="E"><a href="<?php echo $base; ?>"><img src="<?php echo $base; ?>/images/logo-f.png" style="width: 350px;" alt="logo footer" /></a></div>
            <p>Túi xách - Phụ kiện không thể thiếu của phái đẹp</p>
        </li>
        <li>
            <div class="text">
                <h4>LIÊN HỆ</h4>
                <div>Kênh mua sắm trực tuyến giá tốt hàng đầu Việt Nam</div>
                <br>
                <img alt="61/2 Quang Trung, P.10 Q. Gò Vấp, TP. HCM" src="<?php echo $base; ?>/images/icon/pre_footer_icon_address.png">
                <span>Đức Thắng Từ Liêm TP. HN</span><br>
                <img alt="61/2 Quang Trung, P.10 Q. Gò Vấp, TP. HCM" src="<?php echo $base; ?>/images/icon/pre_footer_icon_phone.png">
                <span>(+84) 9648 76096</span><br>
                <img alt="61/2 Quang Trung, P.10 Q. Gò Vấp, TP. HCM" src="<?php echo $base; ?>/images/icon/pre_footer_icon_email.png">
                <span>linkerpt.com@gmail.com</span>
            </div>
        </li>
        <li>
            <div class="icon" data-icon="s"></div>
            <div class="text">
                <h4>HỖ TRỢ KHÁCH HÀNG</h4>
                <a href="">Quy định hình thức thanh toán</a><br>
                <a href="">Chính sách vận chuyển, giao nhận</a><br>
                <a href="">Chính sách đổi/trả hàng và hoàn tiền</a><br>
                <a href="">Chính sách bảo mật</a>
            </div>
        </li>
    </ul>

</footer>
<a class="on_top" href="#top" style="display: block;"><i class="fa-arrow-circle-up fa"></i></a>
<script src="<?php echo $base ?>/js/jquery-3.2.1.min.js" type="text/javascript"></script>
<script src="<?php echo $base ?>/js/owl.carousel.min.js" type="text/javascript"></script>
<script src="<?php echo $base ?>/js/jquery.scrollUp.min.js" type="text/javascript"></script>
<script>
    $('.owl-carousel').owlCarousel({
        loop:true,
        autoplay:true,
        autoplayTimeout:3000,
        dots:true,
        navText: ["<img src='<?php echo $base?>/images/icon/prev.png'>","<img src='<?php echo $base?>/images/icon/next.png'>"],
        margin:10,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:3
            },
            1000:{
                items:1
            }
        }
    })
    $(document).ready(function(){
        $(window).scroll(function(){
            if ($(this).scrollTop() > 600) {
                $('.on_top').fadeIn();
            } else {
                $('.on_top').fadeOut();
            }
        });
        $('.on_top').click(function(){
            $("html, body").animate({scrollTop: 0}, 700);
            return false;
        });
    });
</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
