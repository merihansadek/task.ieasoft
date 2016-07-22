<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta name="HandheldFriendly" content="true">
    <title>Photo Maker</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="owl-carousel/owl.carousel.css">
    <link rel="stylesheet" type="text/css" href="image-popup/source/jquery.fancybox.css?v=2.1.5" media="screen">
    <link rel="stylesheet" type="text/css" href="image-popup/source/helpers/jquery.fancybox-buttons.css?v=1.0.5">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/style-ar.css">
</head>

<body>
    <!--===============================
    NAV
===================================-->

<nav class="navbar navbar-fixed-top">
    <div class="container">
        <div class="row">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse-1" aria-expanded="false">
                    <span class="fa fa-bars"></span>
                </button>

                <a href="changes.index" class="navbar-brand hidden-sm hidden-md hidden-lg"><img src="images/logo.png" alt="LOGO"></a>
            </div>

            <div class="collapse navbar-collapse" id="navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right text-align-left">
                    <li class="active"><a href="changes.index">الرئيسية</a></li>
                    <li><a href="changes/about">من نحن</a></li>
                    <li><a href="services.html">خدماتنا</a></li>
                </ul>

                <a href="change.index" class="navbar-brand hidden-xs text-center"><img src="images/logo.png" alt="LOGO"></a>

                <ul class="nav navbar-nav navbar-left text-align-right">
                    <li><a href="gallery.html">معرض الصور</a></li>
                    <li><a href="contact.html">اتصل بنا</a></li>
                    <li><a href="#">English</a></li>
                </ul>
            </div>
        </div>
    </div>
</nav>
      <!--===============================
    content
===================================-->
      <main>
          @yield('content')
      </main>
         
    <!--===============================
    FOOTER
===================================-->
    <footer class="navbar-fixed-bottom text-center">
    <div class="container">

        <p>جميع الحقوق محفوظة لمؤسسة صانع الصورة للتجارة  &copy; 2005-2015 </p>

        <a href="#"><i class="{{$change->footer_1}}"></i></a>
        <a href="#"><i class="{{$change->footer_2}}"></i></a>
        <a href="#"><i class="{{$change->footer_3}}"></i></a>
        <a href="#"><i class="{{$change->footer_4}}"></i></a>
        <a href="#"><i class="{{$change->footer_5}}"></i></a>
        <a href="#"><i class="{{$change->footer_6}}"></i></a>
        <a href="#"><i class="{{$change->footer_7}}"></i></a>
        <a href="#"><i class="{{$change->footer_8}}"></i></a>

    </div>
</footer>
</body>
</html>

