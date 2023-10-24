
<!DOCTYPE html>
<html>
    <head>
        <title>LOCAL STORE</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="public/css/bootstrap/bootstrap-theme.min.css" rel="stylesheet" type="text/css"/>
        <link href="public/css/bootstrap/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="public/reset.css" rel="stylesheet" type="text/css"/>
        <link href="public/css/carousel/owl.carousel.css" rel="stylesheet" type="text/css"/>
        <link href="public/css/carousel/owl.theme.css" rel="stylesheet" type="text/css"/>
        <link href="public/css/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
        <link href="public/style.css" rel="stylesheet" type="text/css"/>
        <link href="public/responsive.css" rel="stylesheet" type="text/css"/>

        <script src="public/js/jquery-2.2.4.min.js" type="text/javascript"></script>
        <script src="public/js/elevatezoom-master/jquery.elevatezoom.js" type="text/javascript"></script>
        <script src="public/js/bootstrap/bootstrap.min.js" type="text/javascript"></script>
        <script src="public/js/carousel/owl.carousel.js" type="text/javascript"></script>
        <script src="public/js/main.js" type="text/javascript"></script>
    </head>
    <body>
        <div id="site">
            <div id="container">
                <div id="header-wp">
                    <div id="head-top" class="clearfix"  style=" background: #001553d1 !important;">
                        <div class="wp-inner">
                            <a href="" title="" id="payment-link" class="fl-left">Hình thức thanh toán</a>
                            <div id="main-menu-wp" class="fl-right">
                                <ul id="main-menu" class="clearfix">
                                    
                                    <li>
                                        <a href="?modules=blogs&action=list" title="">Blog</a>
                                    </li>
                                    <li>
                                        <a href="?modules=contacts&action=introduce" title="">Giới thiệu</a>
                                    </li>
                                    <li>
                                        <a href="?modules=contacts&action=contact" title="">Liên hệ</a>
                                    </li>

                                    <li>
                                        <a href="?modules=users&action=index" title="">Trung Nhạc</a>
                                    </li>
                                                                        <li>
                                        <a href="?modules=users&action=logout" title="">(Đăng xuất)</a>
                                    </li>
                                                                   

                                <!--     <li>
                                        <a href="?modules=users&controllers=index&action=index" title="">Đăng kí</a>
                                    </li>
                                    <li>
                                        <a href="?modules=users&controllers=index&action=index" title="">Đăng nhập</a>
                                    </li> -->
                                    <a style="display: inline;" href=""></a>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div id="head-body" class="clearfix" style="background: #142740 !important;">
                        <div class="wp-inner">
                            <a href="?modules=home" title="" id="logo" class="fl-left"><img src="public/images/logoaha.png"/></a>
                            <div id="search-wp" class="fl-left">
                                <form method="post" action="?modules=search&controllers=index&action=search">
                                    <input type="text" name="key_word" id="s" placeholder="Nhập từ khóa tìm kiếm tại đây!">
                                    <input type="submit" id="sm-s" name="btn_submit" value="Tìm kiếm">

                                </form>
                            </div>
                            <div id="action-wp" class="fl-right">
                                <div id="advisory-wp" class="fl-left">
                                    <span class="title">Tư vấn</span>
                                    <span class="phone">0822.225.286</span>
                                </div>
                                <div id="btn-respon" class="fl-right"><i class="fa fa-bars" aria-hidden="true"></i></div>
                                <a href="?page=cart" title="giỏ hàng" id="cart-respon-wp" class="fl-right">
                                    <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                    <span id="num">2</span>
                                </a>
                                <div id="cart-wp" class="fl-right">
                                    <div id="btn-cart">
                                        <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                        <span id="num">1</span>
                                    </div>
                                    <div id="dropdown">
                                        <!-- giỏ hangd -->
                                        <p class="desc">Có <span>1 sản phẩm</span> trong giỏ hàng</p>
                                        
                                        <dic class="action-cart clearfix">
                                            <a href="?modules=carts&action=show" title="Giỏ hàng" class="view-cart fl-left">Giỏ hàng</a>
                                            <a href="?modules=checkouts&action=index" title="Thanh toán" class="checkout fl-right">Thanh toán</a>
                                        </dic>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

<!-- --------------------------------------- -->

<div id="footer-wp">
    <div id="foot-body">
        <div class="wp-inner clearfix">
            <div class="block" id="info-company">
                <h3 class="title">LOCALSTORE</h3>
                <p class="desc">LOCALSTORE luôn cung cấp luôn là sản phẩm chính hãng có thông tin rõ ràng, chính sách ưu đãi cực lớn cho khách hàng có thẻ thành viên.</p>
                <div id="payment">
                    <div class="thumb">
                        <img src="public/images/img-foot.png" alt="">
                    </div>
                </div>
            </div>
            <div class="block menu-ft" id="info-shop">
                <h3 class="title">Thông tin cửa hàng</h3>
                <ul class="list-item">
                    <li>
                        <p>68 - Phú Diễn - Bắc Từ Liêm - Hà Nội</p>
                    </li>
                    <li>
                        <p>0848.454.796 - 0822.225.286</p>
                    </li>
                    <li>
                        <p> Nhom4@gmail.com</p>
                    </li>
                </ul>
            </div>
            <div class="block menu-ft policy" id="info-shop">
                <h3 class="title">Chính sách mua hàng</h3>
                <ul class="list-item">
                    <li>
                        <a href="" title="">Quy định - chính sách</a>
                    </li>
                    <li>
                        <a href="" title="">Chính sách bảo hành - đổi trả</a>
                    </li>
                    <li>
                        <a href="" title="">Chính sách hội viện</a>
                    </li>
                    <li>
                        <a href="" title="">Giao hàng - lắp đặt</a>
                    </li>
                </ul>
            </div>
            <div class="block" id="newfeed">
                <h3 class="title">Bảng tin</h3>
                <p class="desc">Đăng ký với chung tôi để nhận được thông tin ưu đãi sớm nhất</p>
                <div id="form-reg">
                    <form method="POST" action="">
                        <input type="email" name="email" id="email" placeholder="Nhập email tại đây">
                        <button type="submit" id="sm-reg">Đăng ký</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div id="foot-bot">
        <div class="wp-inner">
            <p id="copyright">© Bản quyền thuộc về NHOM4 | LOCALSTORE</p>
        </div>
    </div>
</div>
</div>
<div id="menu-respon">
    <a href="?page=home" title="" class="logo">LOCALSTORE</a>
    <div id="menu-respon-wp">
        <ul class="" id="main-menu-respon">
            <li>
                <a href="?page=home" title>Trang chủ</a>
            </li>
            <li>
                <a href="?page=category_product" title>Điện thoại</a>
                <ul class="sub-menu">
                    <li>
                        <a href="?page=category_product" title="">Iphone</a>
                    </li>
                    <li>
                        <a href="?page=category_product" title="">Samsung</a>
                        <ul class="sub-menu">
                            <li>
                                <a href="?page=category_product" title="">Iphone X</a>
                            </li>
                            <li>
                                <a href="?page=category_product" title="">Iphone 8</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="?page=category_product" title="">Nokia</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="?page=category_product" title>Máy tính bảng</a>
            </li>
            <li>
                <a href="?page=category_product" title>Laptop</a>
            </li>
            <li>
                <a href="?page=category_product" title>Đồ dùng sinh hoạt</a>
            </li>
            <li>
                <a href="?page=blog" title>Blog</a>
            </li>
            <li>
                <a href="#" title>Liên hệ</a>
            </li>
        </ul>
    </div>
</div>
<div id="btn-top"><img src="public/images/icon-to-top.png" alt=""/></div>
<div id="fb-root"></div>
<script>(function (d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id))
            return;
        js = d.createElement(s);
        js.id = id;
        js.src = "//connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.8&appId=849340975164592";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
</script>
</body>
</html>