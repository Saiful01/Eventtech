<!doctype html>
<html lang="en">

<head>
    @include('includes.head')

</head>

<body data-spy="scroll" data-target=".navbar" data-offset="90">

<!--Loader Start-->
<div class="loader">
    <div class="loader-inner">
        <div class="loader-blocks">
            <span class="block-1"></span>
            <span class="block-2"></span>
            <span class="block-3"></span>
            <span class="block-4"></span>
            <span class="block-5"></span>
            <span class="block-6"></span>
            <span class="block-7"></span>
            <span class="block-8"></span>
            <span class="block-9"></span>
            <span class="block-10"></span>
            <span class="block-11"></span>
            <span class="block-12"></span>
            <span class="block-13"></span>
            <span class="block-14"></span>
            <span class="block-15"></span>
            <span class="block-16"></span>
        </div>
    </div>
</div>
<!--Loader End-->

<!--Header start-->
<header>
    <!--header top-->
    <div class="top-header-area bg-transparent ">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="header-top-text text-danger">Sheikh Hasina Software Technology Park
                        MTB, Level-5, Jashore.
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="header-top-text text-right">
                        <a href="#." class=" mr-3 text-danger"><i class="fa fa-mobile mr-2"></i>01880-060906</a>
                        <a href="#." class="text-danger"><i class="fa fa-comment-o mr-2"></i>eventtechint@gmail.com</a>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!--Navigation-->
    <nav class="navbar navbar-top-default navbar-expand-lg navbar-gradient gradient-bg1 nav-box-round">
        <div class="container">
            <a href="#home" title="Logo" class="logo scroll">
                <img src="images/logo.png" alt="logo" class="logo-dark default">
            </a>

            <!--Nav Links-->
            <div class="collapse navbar-collapse" id="wexim">
                <div class="navbar-nav ml-auto">
                    <a class="nav-link scroll" href="#home">Home</a>
                    <a class="nav-link scroll" href="#about">About</a>
                    <a class="nav-link scroll" href="#team">Hardware</a>
                    <a class="nav-link scroll" href="#portfolio">Protfolio</a>
                    <a class="nav-link scroll" href="#price">Pricing</a>
                    <a class="nav-link scroll" href="#blog">Gallery</a>
                    <a class="nav-link scroll" href="#contact">Contact</a>
                </div>
            </div>

            <!--Side Menu Button-->
            <a href="javascript:void(0)" class="d-inline-block sidemenu_btn" id="sidemenu_toggle">
                <span></span>
                <span></span>
                <span></span>
            </a>

        </div>
    </nav>

    <!--Side Nav-->
    <div class="side-menu">
        <div class="inner-wrapper">
            <span class="btn-close" id="btn_sideNavClose"><i></i><i></i></span>
            <nav class="side-nav w-100">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link scroll" href="#home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link scroll" href="#about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link scroll" href="#team">Hardware</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link scroll" href="#portfolio">Protfolio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link scroll" href="#price">Pricing</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link scroll" href="#blog">Gallery</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link scroll" href="#contact">Contact</a>
                    </li>
                </ul>
            </nav>

            <div class="side-footer text-white w-100">
                <ul class="social-icons-simple">
                    <li><a class="facebook-text-hvr" href="javascript:void(0)"><i class="fa fa-facebook"></i> </a></li>
                    <li><a class="instagram-text-hvr" href="javascript:void(0)"><i class="fa fa-instagram"></i> </a>
                    </li>
                    <li><a class="twitter-text-hvr" href="javascript:void(0)"><i class="fa fa-twitter"></i> </a></li>
                </ul>
                <p class="text-white">&copy; 2019 Eventtech. Made With Love by PixonLab</p>
            </div>
        </div>
    </div>
    <a id="close_side_menu" href="javascript:void(0);"></a>
    <!-- End side menu -->


</header>
<!--Header end-->

@yield('content')

<!--Footer Start-->
<section class="bg-light text-center">
    <h2 class="d-none">hidden</h2>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="footer-social">
                    <ul class="list-unstyled">
                        <li><a class="wow fadeInUp" href="javascript:void(0);"><i class="fa fa-facebook"
                                                                                  aria-hidden="true"></i></a></li>
                        <li><a class="wow fadeInDown" href="javascript:void(0);"><i class="fa fa-twitter"
                                                                                    aria-hidden="true"></i></a></li>
                        <li><a class="wow fadeInUp" href="javascript:void(0);"><i class="fa fa-google-plus"
                                                                                  aria-hidden="true"></i></a></li>
                        <li><a class="wow fadeInDown" href="javascript:void(0);"><i class="fa fa-linkedin"
                                                                                    aria-hidden="true"></i></a></li>
                        <li><a class="wow fadeInUp" href="javascript:void(0);"><i class="fa fa-instagram"
                                                                                  aria-hidden="true"></i></a></li>
                        <li><a class="wow fadeInDown" href="javascript:void(0);"><i class="fa fa-envelope-o"
                                                                                    aria-hidden="true"></i></a></li>
                    </ul>
                </div>
                <p class="company-about fadeIn">© 2019 Eventtech Made With Love By <a href="javascript:void(0);">PixonLab</a>
                </p>
            </div>
        </div>
    </div>
</section>
<!--Footer End-->

<!--Scroll Top-->
<a class="scroll-top-arrow" href="javascript:void(0);"><i class="fa fa-angle-up"></i></a>
<!--Scroll Top End-->


<!-- Optional JavaScript -->
<script src="/js/jquery-3.3.1.min.js"></script>
<script src="/js/popper.min.js"></script>
<script src="/js/bootstrap.min.js"></script>
<script src="/js/jquery.appear.js"></script>
<!-- isotop gallery -->
<script src="/js/isotope.pkgd.min.js"></script>
<!-- cube portfolio gallery -->
<script src="/js/jquery.cubeportfolio.min.js"></script>
<!-- owl carousel slider -->
<script src="/js/owl.carousel.min.js"></script>
<!-- text rotate -->
<script src="/js/morphext.min.js"></script>
<!-- particles -->
<script src="/js/particles.min.js"></script>
<!-- parallax Background -->
<script src="/js/parallaxie.min.js"></script>
<!-- fancybox popup -->
<script src="/js/jquery.fancybox.min.js"></script>
<!-- fancybox popup -->
<script src="/js/wow.js"></script>
<!-- REVOLUTION JS FILES -->
<script src="/js/jquery.themepunch.tools.min.js"></script>
<script src="/js/jquery.themepunch.revolution.min.js"></script>
<!-- SLIDER REVOLUTION EXTENSIONS -->
<script src="/js/extension/revolution.extension.actions.min.js"></script>
<script src="/js/extension/revolution.extension.carousel.min.js"></script>
<script src="/js/extension/revolution.extension.kenburn.min.js"></script>
<script src="/js/extension/revolution.extension.layeranimation.min.js"></script>
<script src="/js/extension/revolution.extension.migration.min.js"></script>
<script src="/js/extension/revolution.extension.navigation.min.js"></script>
<script src="/js/extension/revolution.extension.parallax.min.js"></script>
<script src="/js/extension/revolution.extension.slideanims.min.js"></script>
<script src="/js/extension/revolution.extension.video.min.js"></script>
<!-- map -->
<!--    <script src=""></script>-->
<!--    <script src="js/map.js"></script>-->
<!-- custom script -->
<script src="/js/script.js"></script>


</section>
</body>
</html>
