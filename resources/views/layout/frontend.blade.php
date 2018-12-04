<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> @yield('title') </title>
    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
    <link href="http://fonts.googleapis.com/css?family=lato:Open+Sans:400,300,600,700,800%7CMontserrat:200,300,400,500,500i,600,700,800%7CRoboto:400,500" rel="stylesheet" type="text/css">
    <link href=" {{ asset('html/assets/css/bootstrap.min.css ')}}" rel="stylesheet" type="text/css">
    <link href=" {{ asset('html/assets/css/font-awesome.css ')}}" rel="stylesheet" type="text/css">
    <link href=" {{ asset('html/assets/css/ionicons.css ')}}" rel="stylesheet" type="text/css">
    <link href=" {{ asset('html/assets/css/jquery.fancybox.css ')}}" rel="stylesheet" type="text/css">
    <link href=" {{ asset('html/assets/css/settings.css ')}}" type="text/css" rel="stylesheet" media="screen">
    <link href=" {{ asset('html/assets/css/layers.css ')}}" type="text/css" rel="stylesheet" media="screen">
    <link href=" {{ asset('html/assets/css/layers.css ')}}" type="text/css" rel="stylesheet" media="screen">
    <link href=" {{ asset('html/assets/css/owl.carousel.css ')}}" type="text/css" rel="stylesheet" media="screen">
    <link href=" {{ asset('html/assets/css/style.css ')}}" rel="stylesheet">
    <link href=" {{ asset('html/assets/css/header.css ')}}" rel="stylesheet" type="text/css">
    <link href=" {{ asset('html/assets/css/footer.css ')}}" rel="stylesheet" type="text/css" />
    <link href=" {{ asset('html/assets/css/index.css ')}}" rel="stylesheet" type="text/css" />
    <link href=" {{ asset('html/assets/css/theme-color/default.css ')}}" rel="stylesheet" type="text/css" id="theme-color" />
    <style>

        .slotholder:before{
            background-color: rgba(0,0,0,0.05);
        }
        .font_chu{
            font-family: Aguafina Script-Regular;
            text-transform:capitalize;
            font-size: 25px;
            padding-left: 25%;
            color: #efd102;
        }
        .lien-he{
            font-family: Aguafina Script-Regular;
            font-size: 24px;
        }
        .datphong_di_den{
            font-family: Aguafina Script-Regular;
            width: 50%;
            float: left;
            margin-top: -20px;
            font-size: 20px;
            color: #0e253a;
        }
    </style>

</head>
<body>
<header class="header__block">
    <div class="top-part__block ptb-15">
        <div class="container">
            <div class="row">
                <div class="col-sm-7">
                    <p class="font_chu">
                        chào mừng bạn đến khách sạn ABC
                    </p>
                </div>
                <div class="col-sm-5">
                    <div class="social-link__block text-right">
                        <a href="https://www.facebook.com/Kh%C3%A1ch-S%E1%BA%A1n-M%C6%B0%E1%BB%9Dng-Thanh-382120911861286/"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-google-plus"></i></a>
                        <a href="#"><i class="fa fa-linkedin"></i></a>
                        <a href="#"><i class="fa fa-search"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="middel-part__block ptb-20">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="logo">
                        <a href="{{asset('khachsan')}}"> <img src="{{asset('html/assets/images/logo_muongthanh.jpg ')}}" style="max-width: 150px;margin-left: 40%;" alt="Logo"> </a>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="top-info__block text-right">
                        <ul>
                            <p style="font-family:Courier New ,Courier, monospace; font-size: 24px;  padding-left: 265px;"> liên hệ</p>
                            <li>
                                <i class="fa fa-phone"></i>
                                <p>
                                    số điện thoại <span><a href="tel:0981143700"> 0981143700</a></span>
                                </p>
                            </li>
                            <li>
                                <i class="fa fa-envelope"></i>
                                <p>
                                    Email <span><a href="mailto:toantran26106@gmail.com">toantran26106@gmail.com</a></span>
                                </p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="navgation__block stricky-header__top">
        <div class="container">
            <div class="row">
                <div class="col-md-8.5">
                    <div class="main-menu__block navbar-toggleable-sm">
                        <div class="navbar-header hidden-md-up">
                            <button style="background-color:#bbb4b4 " class="navbar-toggler navbar-toggler-right collapsed" type="button" data-toggle="collapse" data-target="#navbar-menu" aria-controls="navbar-menu" aria-expanded="false" aria-label="Toggle navigation">
                                <i class="fa fa-bars"></i>
                            </button>
                        </div>

                        <div class="collapse navbar-collapse" id="navbar-menu">
                            <ul class="nav navbar-nav mobile-menu">
                                <li>
                                    <a href="{{asset('khachsan')}}"> Trang chủ</a><span class="submenu-button"></span>
                                </li>
                                <li>
                                    <a href="javascript:avoid(0);">nhà hàng</a><span class="submenu-button"></span>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <a href="{{asset('khachsan/nhahang/trungquoc')}}"> nhà hàng trung hoa</a>
                                        </li>
                                        <li>
                                            <a href="#"> nhà hàng nhật bản</a>
                                        </li>
                                        <li>
                                            <a href="#"> nhà hàng Italia</a>
                                        </li>
                                        <li>
                                            <a href="#"> nhà hàng Pháp</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="{{asset('khachsan/datphong')}}"> đặt phòng</a><span class="submenu-button"></span>
                                </li>
                                <li>
                                    <a href="javascript:avoid(0);"> khuyến mại</a><span class="submenu-button"></span>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <a href="blog.html"> Khuyến mại ẩm thực</a>
                                        </li>
                                        <li>
                                            <a href="blog-detail.html">khuyến mại phòng nghỉ </a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="javascript:avoid(0);">sự kiện</a><span class="submenu-button"></span>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <a href="#">Phòn họp</a>
                                        </li>
                                        <li>
                                            <a href="#">Tiệc cưới</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="javascript:avoid(0);">dịch vụ</a><span class="submenu-button"></span>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <a href="#">mua sắm</a>
                                        </li>
                                        <li>
                                            <a href="#">trung tâm thể thao</a>
                                        </li>
                                        <li>
                                            <a href="#">dịch vụ massage và xông hơi</a>
                                        </li>
                                        <li>
                                            <a href="#">dịch vụ vận chuyển</a>
                                        </li>
                                    </ul>
                                </li>

                            </ul>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

@yield('content')

<footer id="footer">
    <div id="footer-widgets" class="container style-1">
        <div class="row">
            <div class="col-md-4">
                <div class="widget widget_text">
                    <h2 class="widget-title"><span> Khách sạn Mường Thanh </span></h2>
                    <div class="textwidget">
                        <a href="{{asset('khachsan')}}" class="footer-logo"> <img src="{{asset('html/assets/images/logo_muongthanh.jpg')}}" alt="Awesome Logo" style="max-width: 100px"> </a>
                        <p>
                            Mường thanh nơi tận hưởng cuộc sống. Giá trị đích thực của cuộc sống . Khu nghĩ dưỡng  cao cấp với những chuyến du lịch dài ngày .<a href="{{asset('khachsan/datphong')}}"> <i style="color: #e8e5ba;">Hãy đến với mường thanh</i> </a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="widget widget_links">
                    <h3 class="widget-title"><span> Mường Thanh đã có mặt tại các khu vự</span></h3>
                    <ul class="wprt-links clearfix col2" style="text-transform:capitalize;">
                        <li >
                            <a href="#">Hà nội</a>
                        </li>
                        <li >
                            <a href="#">hải phòng</a>
                        </li>
                        <li >
                            <a href="#">Thanh hóa</a>
                        </li>
                        <li >
                            <a href="#">hà tĩnh</a>
                        </li>
                        <li >
                            <a href="#">nha Trang</a>
                        </li>
                        <li >
                            <a href="#"> Tp. Hồ Chí minh</a>
                        </li>
                        <li >
                            <a href="#">phú quốc</a>
                        </li>
                        <li >
                            <a href="#">cà mau</a>
                        </li>
                        <li >
                            <a href="#">Nghệ an </a>
                        </li>
                        <li >
                            <a href="#"> huế</a>
                        </li>

                    </ul>
                </div>
            </div>
            <div class="col-md-4">
                <div class="widget widget_information">
                    <h2 class="widget-title"><span> địa chỉ liên hệ </span></h2>
                    <ul >
                        <li class="phone clearfix">
                            <span class="hl">Phone:</span><span class="text"> 0981143700</span>
                        </li>
                        <li class="email clearfix">
                            <span class="hl">E-mail:</span><span class="text">troantran26106@gmail.com</span>
                        </li>
                        <li class="address clearfix">
                            <span class="hl"> địa chỉ :</span><span class="text"> số 1 tp.Hà Tĩnh </span>
                        </li>
                    </ul>
                </div>
                <div class="widget widget_socials">
                    <div class="socials">
                        <a target="_blank" href="#"><i class="fa fa-twitter"></i></a><a target="_blank" href="#"><i class="fa fa-facebook"></i></a><a target="_blank" href="#"><i class="fa fa-google-plus"></i></a><a target="_blank" href="#"><i class="fa fa-pinterest"></i></a><a target="_blank" href="#"><i class="fa fa-dribbble"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="bottom" class="clearfix style-1">
        <div id="bottom-bar-inner" class="wprt-container">
            <div class="bottom-bar-inner-wrap">
                <div class="bottom-bar-content">
                    <div id="copyright">
                        Construction TEMPLATE © DESIGN BY Construction.
                    </div>
                </div>
                <div class="bottom-bar-menu">
                    <ul class="bottom-nav">
                        <li>
                            <a href="#/">HISTORY</a>
                        </li>
                        <li>
                            <a href="#/">FAQ</a>
                        </li>
                        <li>
                            <a href="#/">EVENTS</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>
<script type="text/javascript" src="{{ asset('html/assets/js/jquery.min.js ')}}"></script>
<script type="text/javascript" src="{{ asset('html/assets/js/tether.min.js ')}}"></script>
<script type="text/javascript" src="{{ asset('html/assets/js/bootstrap.min.js ')}}"></script>
<script src="{{ asset('html/assets/js/jquery.easing.js ')}}" type="text/javascript"></script>
<script src="{{ asset('html/assets/js/jquery.mousewheel-3.0.6.pack.js ')}}" type="text/javascript"></script>
<script src="{{ asset('html/assets/js/jquery.fancybox.pack.js ')}}" type="text/javascript"></script>
<script src="{{ asset('html/assets/js/owl.carousel.js ')}}" type="text/javascript"></script>
<script src="{{ asset('html/assets/js/imagesloaded.pkgd.min.js ')}}" type="text/javascript"></script>
<script src="{{ asset('html/assets/js/imagesloaded.pkgd.min.js ')}}" type="text/javascript"></script>
<script src="{{ asset('html/assets/js/isotope.pkgd.min.js ')}}" type="text/javascript"></script>
<script src="{{ asset('html/assets/js/masonry.pkgd.min.js ')}}" type="text/javascript"></script>
<script src="{{ asset('html/assets/js/jquery.appear.js ')}}" type="text/javascript"></script>
<script type="text/javascript" src="{{ asset('html/assets/js/jquery.themepunch.tools.min.js ')}}"></script>
<script type="text/javascript" src="{{ asset('html/assets/js/jquery.themepunch.revolution.min.js ')}}"></script>
<script type="text/javascript" src="{{ asset('html/assets/extensions/revolution.extension.slideanims.min.js ')}}"></script>
<script type="text/javascript" src="{{ asset('html/assets/extensions/revolution.extension.layeranimation.min.js ')}}"></script>
<script type="text/javascript" src="{{ asset('html/assets/extensions/revolution.extension.navigation.min.js ')}}"></script>
<script type="text/javascript" src="{{ asset('html/assets/extensions/revolution.extension.parallax.min.js ')}}"></script>
<script type="text/javascript" src="{{ asset('html/assets/js/jquery.revolution.js ')}}"></script>
<script src="{{ asset('html/assets/js/custom.js ')}}" type="text/javascript"></script>
<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false&.js"></script>
<script src="{{asset('html/assets/js/mail.js')}}" type="text/javascript"></script>
<script src="{{asset('html/assets/js/custom.js')}}" type="text/javascript"></script>
</body>
</html>

