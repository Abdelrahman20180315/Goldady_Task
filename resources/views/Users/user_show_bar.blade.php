<!doctype html>
<html class="no-js" lang="zxx">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Lawyer HTML-5 Template</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="manifest" href="site.webmanifest">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">

    <!-- CSS here -->
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
        <link rel="stylesheet" href="assets/css/slicknav.css">
        <link rel="stylesheet" href="assets/css/animate.min.css">
        <link rel="stylesheet" href="assets/css/magnific-popup.css">
        <link rel="stylesheet" href="assets/css/fontawesome-all.min.css">
        <link rel="stylesheet" href="assets/css/themify-icons.css">
        <link rel="stylesheet" href="assets/css/flaticon.css">
        <link rel="stylesheet" href="assets/css/slick.css">
        <link rel="stylesheet" href="assets/css/nice-select.css">
        <link rel="stylesheet" href="assets/css/style.css">
        <link rel="stylesheet" href="assets/css/responsive.css">
        <style>
            #customers {
              font-family: Arial, Helvetica, sans-serif;
              border-collapse: collapse;
              width: 100%;
             
            }
            
            #customers td, #customers th {
              border: 1px solid #ddd;
              padding: 8px;
              border-radius: 70px 30px ;
            }
            
            #customers tr:nth-child(even){background-color: #f2f2f2;}
            
            #customers tr:hover {background-color: #ddd;}
            
            #customers th {
              padding-top: 12px;
              padding-bottom: 12px;
              text-align: left;
              
              background-color: rgb(19, 18, 18);
              color: white;
            }
            </style>
</head>
<body>
    
    <!-- Preloader Start -->
    <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    <img src="assets/img/logo/loder.png" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- Preloader Start -->

    <header>
        @include('Users.layout.navbar')

    </header>
    
    <main>

        <!-- slider Area Start-->
        <div class="slider-area ">
            <!-- Mobile Menu -->
            <div class="single-slider slider-height2 d-flex align-items-center" data-background="assets/img/hero/law_hero2.jpg">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="hero-cap text-center">
                                <h2>Services</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- slider Area End-->

        <!-- Legal Practice Area start -->
        <div class="legal-practice-area section-padding30">
            <div class="container">
                <!--Section Tittle  -->
                <div class="row ">
                    <div class="col-xl-12">
                        <div class="section-tittle text-center mb-70">
                            <h2></h2>
                        </div>
                    </div>
                </div>
                <!-- single items -->
                {{-- <table style="margin-top: 0px;" id="customers">
                    <tr>
                        <th style="text-align: center" >المحكمة-الدائرة-رقم الدعوة</th>
                        <th style="text-align: center" >كود الموكل</th>
                        <th style="text-align: center" >اسم الموكل</th>
                        <th style="text-align: center" >صفة الموكل</th>
                        <th style="text-align: center" >الخصم وصفتة</th>
                        <th style="text-align: center" >الجلسة السابقة</th>
                        <th style="text-align: center" >القرار</th>
                    </tr>
                    @if ($data)
                        @foreach ($data as $item)
                            <tr>
                                <td>{{$item->court}}</td>
                                <td>{{$item->user_code}}</td>
                                <td>{{$item->user_name}}</td>
                                <td>{{$item->user_details}}</td>
                                <td>{{$item->enemy_details}}</td>
                                <td>{{$item->last_session}}</td>
                                <td>{{$item->decision}}</td>
                                
                            </tr>
                        @endforeach
                    @endif
                
                    
                </table> --}}
    </main>
<footer>
    <!-- Footer Start-->
    <div class="footer-area footer-bg footer-padding">
        <div class="container">
            <div class="row d-flex justify-content-between">
                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-7">
                    <div class="single-footer-caption mb-50">
                        <!-- logo -->
                        <div class="footer-logo">
                        <a href="index.html"><img src="assets/img/logo/logo.png" alt=""></a>
                        </div>
                        <div class="single-footer-caption mb-30">
                            <div class="footer-tittle">
                                <div class="footer-pera">
                                    <p>Seddo eiusmod tempor incididunt ut labore et dolore magna aliqua. consectetur pisicin elit, sed do eiusmod tempor.</p>
                            </div>
                            </div>
                        </div>
                        <!-- footer social -->
                        <div class="footer-social">
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fas fa-globe"></i></a>
                            <a href="#"><i class="fab fa-behance"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-2 col-md-2 col-sm-5">
                    <div class="single-footer-caption mb-50">
                        <div class="footer-tittle">
                            <h4>Company</h4>
                            <ul>
                                <li><a href="index.html">Home</a></li>
                                <li><a href="about.html"> About Us</a></li>
                                <li><a href="#">Browse Pets</a></li>
                                <li><a href="blog.html">Blog</a></li>
                                <li><a href="contact.html">Contact Us</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-2 col-md-3 col-sm-5">
                    <div class="single-footer-caption mb-50">
                        <div class="footer-tittle">
                            <h4>Services</h4>
                            <ul>
                                <li><a href="#">O’Connor Group</a></li>
                                <li><a href="#">Our Business Model</a></li>
                                <li><a href="#">Our Lawyers Team</a></li>
                                <li><a href="#"> Most Recent Cases</a></li>
                                <li><a href="#"> Hot Lawyers News</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-5 col-sm-5">
                    <div class="single-footer-caption mb-50">
                        <div class="footer-tittle">
                            <h4>Newsletter</h4>
                            <div class="footer-pera footer-pera2">
                                <p>For Lastest update Sign up here</p>
                            </div>
                            <!-- Form -->
                            <div class="footer-form" >
                                <div id="mc_embed_signup">
                                    <form target="_blank" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01"
                                    method="get" class="subscribe_form relative mail_part">
                                        <input type="email" name="email" id="newsletter-form-email" placeholder="Email Address"
                                        class="placeholder hide-on-focus" onfocus="this.placeholder = ''"
                                        onblur="this.placeholder = ' Email Address '">
                                        <div class="submit-btn">
                                            <button type="submit" name="submit" id="newsletter-submit"
                                            class="email_icon newsletter-submit button-contactForm">
                                        
                                            Subscribe <i class="ti-angle-double-right"></i></button>
                                        </div>
                                        <div class="mt-10 info"></div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- footer-bottom aera -->
    <div class="footer-bottom-area footer-bg">
        <div class="container">
            <div class="footer-border">
                    <div class="row d-flex align-items-center">
                        <div class="col-xl-12">
                            <div class="footer-copy-right text-center">
                                <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="ti-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
    </div>
    <!-- Footer End-->
</footer>

    <!-- JS here -->
    
        <!-- All JS Custom Plugins Link Here here -->
        <script src="./assets/js/vendor/modernizr-3.5.0.min.js"></script>
        
        <!-- Jquery, Popper, Bootstrap -->
        <script src="./assets/js/vendor/jquery-1.12.4.min.js"></script>
        <script src="./assets/js/popper.min.js"></script>
        <script src="./assets/js/bootstrap.min.js"></script>
        <!-- Jquery Mobile Menu -->
        <script src="./assets/js/jquery.slicknav.min.js"></script>

        <!-- Jquery Slick , Owl-Carousel Plugins -->
        <script src="./assets/js/owl.carousel.min.js"></script>
        <script src="./assets/js/slick.min.js"></script>
        
        <!-- One Page, Animated-HeadLin -->
        <script src="./assets/js/wow.min.js"></script>
        <script src="./assets/js/animated.headline.js"></script>
        <script src="./assets/js/jquery.magnific-popup.js"></script>

        <!-- Scrollup, nice-select, sticky -->
        <script src="./assets/js/jquery.scrollUp.min.js"></script>
        <script src="./assets/js/jquery.nice-select.min.js"></script>
        <script src="./assets/js/jquery.sticky.js"></script>
        
        <!-- counter , waypoint -->
        <script src="http://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>
        <script src="./assets/js/jquery.counterup.min.js"></script>

        <!-- counter -->
        <script src="./assets/js/contact.js"></script>
        <script src="./assets/js/jquery.form.js"></script>
        <script src="./assets/js/jquery.validate.min.js"></script>
        <script src="./assets/js/mail-script.js"></script>
        <script src="./assets/js/jquery.ajaxchimp.min.js"></script>

        
        <!-- Jquery Plugins, main Jquery -->	
        <script src="./assets/js/plugins.js"></script>
        <script src="./assets/js/main.js"></script>
        
    </body>
</html>