<!DOCTYPE html>
<html lang="en">
<head>
    <!-- required meta -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- #favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon">
    <!-- #title -->
    <title>{{env('APP_NAME')}} - Financial Loans</title>
    <!-- #keywords -->
    <meta name="keywords" content="FINVIEW, Financial Loan, Financial Loan Review and Comparison">
    <!-- #description -->
    <meta name="description" content="FINVIEW HTML5 Template">

    <!--  css dependencies start  -->
    <!-- bootstrap five css -->
    <link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.min.css">
    <!-- bootstrap-icons css -->
    <link rel="stylesheet" href="cdn.jsdelivr.net/npm/bootstrap-icons%401.10.5/font/bootstrap-icons.css">
    <!-- nice select css -->
    <link rel="stylesheet" href="assets/vendor/nice-select/css/nice-select.css">
    <!-- magnific popup css -->
    <link rel="stylesheet" href="assets/vendor/magnific-popup/css/magnific-popup.css">
    <!-- slick css -->
    <link rel="stylesheet" href="assets/vendor/slick/css/slick.css">
    <!-- odometer css -->
    <link rel="stylesheet" href="assets/vendor/odometer/css/odometer.css">
    <!-- animate css -->
    <link rel="stylesheet" href="assets/vendor/animate/animate.css">
    <!-- css dependencies end  -->

    <!-- main css -->
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
    <!--  Preloader  -->
    <div class="preloader">
        <span class="loader"></span>
    </div>

    <!--header-section start-->
    <header class="header-section index ">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="navbar navbar-expand-xl nav-shadow" id="#navbar">
                        <a class="navbar-brand" href="index.html"><img src="assets/images/logo2.png" class="logo" alt="logo"></a>
                        <a class="navbar-toggler" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">
                            <i class="bi bi-list"></i>
                        </a>

                        <div class="collapse navbar-collapse ms-auto " id="navbar-content">
                            <div class="main-menu index-page">
                                <ul class="navbar-nav mb-lg-0 mx-auto">
                                    <li class="nav-item dropdown">
                                        <a class="nav-link " href="/" role="button" data-bs-toggle="dropdown" aria-expanded="false"> Home </a>
                                        
                                    </li> 
                                    <li class="nav-item dropdown">
                                        <a class="nav-link " href="#about" role="button" data-bs-toggle="dropdown" aria-expanded="false"> About us </a>
                                       
                                    </li> 
                                    <li class="nav-item">
                                        <a class="nav-link" href="/#faqs">Faqs</a>
                                    </li>
                                    
                                    <li class="nav-item">
                                        <a class="nav-link" href="/contact">Contact us</a>
                                    </li>
                                </ul>
                                <div class="nav-right d-none d-xl-block">
                                    <div class="nav-right__search">
                                        <a href="javascript:void(0)" class="nav-right__search-icon btn_theme icon_box btn_bg_white"> <i class="bi bi-search"></i> <span></span> </a>    
                                        <a href="/register" class="btn_theme btn_theme_active">Pata Loan <i class="bi bi-arrow-up-right"></i><span></span></a>
                                    </div>
                                    <div class="nav-right__search-inner">
                                        <div class="nav-search-inner__form">
                                            <form method="POST" id="search" class="inner__form">
                                                <div class="input-group">
                                                    <input type="text" class="form-control" placeholder="Search" required>
                                                    <button type="submit" class="search_icon"><i class="bi bi-search"></i></button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>

    <!-- Offcanvas More info-->
    <div class="offcanvas offcanvas-end " tabindex="-1" id="offcanvasRight">
        <div class="offcanvas-body custom-nevbar">
            <div class="row">
                <div class="col-md-7 col-xl-8">
                    <div class="custom-nevbar__left">
                        <button type="button" class="close-icon d-md-none ms-auto" data-bs-dismiss="offcanvas" aria-label="Close"><i class="bi bi-x"></i></button>
                        <ul class="custom-nevbar__nav mb-lg-0">
                            <li class="menu_item dropdown">
                                <a class="menu_link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"> Home </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="index.html">Home One</a></li>
                                    <li><a class="dropdown-item" href="index-2.html">Home Two</a></li>
                                </ul>
                            </li>
                            <li class="menu_item dropdown">
                                <a class="menu_link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"> Loan Reviews </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="loan-reviews.html">Loan Reviews</a></li>
                                    <li><a class="dropdown-item" href="loan-reviews-details.html">Loan Reviews Details</a></li>
                                </ul>
                            </li>
                            <li class="menu_item">
                                <a class="menu_link" href="loan-comparison.html">Loan Comparison</a>
                            </li>
                            <li class="menu_item dropdown">
                                <a class="menu_link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"> Pages </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="about.html">about us</a></li>
                                    <li><a class="dropdown-item" href="service.html">service</a></li>
                                    <li><a class="dropdown-item" href="service-details.html">service details</a></li>
                                    <li><a class="dropdown-item" href="blog.html">blog</a></li>
                                    <li><a class="dropdown-item" href="blog-details.html">blog Details</a></li>
                                    <li><a class="dropdown-item" href="faq.html">FAQs</a></li>
                                    <li><a class="dropdown-item" href="sign-up.html">sign up</a></li>
                                    <li><a class="dropdown-item" href="error.html">404 Error Page</a></li>
                                </ul>
                            </li>
                            <li class="menu_item">
                                <a class="menu_link" href="/contact">contact us</a>
                            </li>
                            <li class="menu_item">
                                <a class="menu_link" href="/login">sign in</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-5 col-xl-4">
                    <div class="custom-nevbar__right">
                        <div class="custom-nevbar__top d-none d-md-block">
                            <button type="button" class="close-icon ms-auto" data-bs-dismiss="offcanvas" aria-label="Close"><i class="bi bi-x"></i></button>
                            <div class="custom-nevbar__right-thumb mb-auto">
                                <img src="assets/images/logo.png" alt="logo">
                            </div>
                        </div>
                        <ul class="custom-nevbar__right-location">
                            <li>
                                <p class="mb-2">Phone: </p>
                                <a href="tel:+123456789" class="fs-4 contact">+123 456 789</a>
                            </li>
                            <li class="location">
                                <p class="mb-2">Email: </p>
                                <a href="https://pixner.net/cdn-cgi/l/email-protection#7a33141c153a1d171b131654191517" class="fs-4 contact"><span class="__cf_email__" data-cfemail="753c1b131a351218141c195b161a18">[email&#160;protected]</span></a>
                            </li>
                            <li class="location">
                                <p class="mb-2">Location: </p>
                                <p class="fs-4 contact">6391 Celina, Delaware 10299</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- header-section end -->

    @yield('content')
    <!-- faq end -->

    <!-- Footer Area Start -->
    <footer class="footer footer-secondary">
        <div class="container">
            <div class="row section">
                <div class="col-12">
                    <div class="footer-secondary__content">
                        <div class="footer__logo">
                            <a href="index.html">
                                <img src="assets/images/logo.png" alt="Logo">
                            </a>
                        </div>
                        <div class="quick-link order-1 order-lg-0">
                            <ul class="quick-link__list">
                                <li><a href="contact.html">Help & Support</a></li>
                                <li><a href="loan-reviews.html">Privacy policy</a></li>
                                <li><a href="loan-comparison.html">Terms & Conditions</a></li>
                                <li><a href="contact.html">Contact us</a></li>
                            </ul>
                        </div>
                        <div class="social">
                            <a href="#" class="btn_theme social_box"><i class="bi bi-facebook"></i><span></span></a>
                            <a href="#" class="btn_theme social_box"><i class="bi bi-twitter"></i><span></span></a>
                            <a href="#" class="btn_theme social_box"><i class="bi bi-pinterest"></i><span></span></a>
                            <a href="#" class="btn_theme social_box"><i class="bi bi-twitch"></i><span></span></a>
                            <a href="#" class="btn_theme social_box"><i class="bi bi-skype"></i><span></span></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="footer__copyright">
                        <p class="copyright text-center">Copyright © <span id="copyYear"></span> <a href="#" class="secondary_color">{{env('APP_NAME')}}</a>. Designed By <a href="#" class="secondary_color">Inuahustler</a></p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Area End -->

    <!-- scroll to top -->
    <a href="#" class="scrollToTop"><i class="bi bi-chevron-double-up"></i></a>

    <!--  js dependencies start  -->
    <!-- jquery -->
    <script data-cfasync="false" src="cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="assets/vendor/jquery/jquery-3.6.3.min.js"></script>
    <!-- bootstrap five js -->
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- nice select js -->
    <script src="assets/vendor/nice-select/js/jquery.nice-select.min.js"></script>
    <!-- magnific popup js -->
    <script src="assets/vendor/magnific-popup/js/jquery.magnific-popup.min.js"></script>
    <!-- circular-progress-bar -->
    <script
        src="../../../cdn.jsdelivr.net/gh/tomik23/circular-progress-bar%40latest/docs/circularProgressBar.min.js"></script>
    <!-- slick js -->
    <script src="assets/vendor/slick/js/slick.min.js"></script>
    <!-- odometer js -->
    <script src="assets/vendor/odometer/js/odometer.min.js"></script>
    <!-- viewport js -->
    <script src="assets/vendor/viewport/viewport.jquery.js"></script>
    <!-- jquery ui js -->
    <script src="assets/vendor/jquery-ui/jquery-ui.min.js"></script>
    <!-- wow js -->
    <script src="assets/vendor/wow/wow.min.js"></script>

    <script src="assets/vendor/jquery-validate/jquery.validate.min.js"></script>

    <!--  / js dependencies end  -->

    <!-- plugins js -->
    <script src="assets/js/plugins.js"></script>
    <!-- main js -->
    <script src="assets/js/main.js"></script>


</body>
</html>