<!doctype html>
<html class="no-js" lang="zxx">
    <head>
        @include('Users.layout.header')
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
            <div class="slider-active">
                <!-- Single Slider -->
                <div class="single-slider slider-height d-flex align-items-center" data-background="assets/img/hero/h1_hero.jpg">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-9 col-lg-9 col-md-9">
                                <div class="hero__caption">
                                    <p data-animation="fadeInUp" data-delay=".6s">Address</p>
                                    <h4 data-animation="fadeInUp" data-delay=".4s" >Greek Campus<br>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="slider-bottom"  >
                        <div class="slider-bottom-cap" data-animation="fadeInLeft" data-delay=".6s">
                            <p>Company </p>
                            <span> 027306568</span>
                        </div>
                        <div class="slider-video d-flex align-items-center" data-animation="fadeInRight" data-delay=".8s">
                            <a class="popup-video ani-btn" href="https://www.youtube.com/watch?v=1aP-TXUpNoU">
                            <img src="assets/img/icon/video_btn.png" alt="">
                            </a>
                        </div>
                    </div>
                </div>
                <!-- Single Slider -->
                <div class="single-slider slider-height d-flex align-items-center" data-background="assets/img/hero/h1_hero.jpg">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-9 col-lg-9 col-md-9">
                                <div class="hero__caption">
                                    <p data-animation="fadeInUp" data-delay=".6s">Address</p>
                                    <h1 data-animation="fadeInUp" data-delay=".4s" >Greek Campus<br>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="slider-bottom"  >
                        <div class="slider-bottom-cap" data-animation="fadeInLeft" data-delay=".4s">
                            <p> Company </p>
                            <span> 027305466</span>
                        </div>
                        <div class="slider-video d-flex align-items-center" data-animation="fadeInRight" data-delay=".8s">
                            <a class="popup-video" href="https://www.youtube.com/watch?v=1aP-TXUpNoU">
                            <img src="assets/img/icon/video_btn.png" alt="">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div> 
        
        <!-- About Law Start-->
        <div class="about-low-area about-bg about-padding">
            <div class="container">
                <h1 id="office" style="text-align: center;margin-bottom:70px;font-size:80px" >Jewellery </h1>
                <div class="row">
                    <div class="col-xl-5 col-lg-5">
                        <!-- section tittle -->
                        <div class="section-tittle section-tittle-l mb-70">
                            <h2 style="font-size: 40px"> Bar Company</h2>
                        </div>
                        <div class="about-caption mb-100">
                           <!-- Counter Up -->
                            <div class="count-clients">
                                <div class="single-counter text-center">
                                    <p style="color: red;font-size:35px"> </p>
                                </div>
                                {{-- <div class="single-counter text-center">
                                    <span class="counter">920</span>
                                    <p>Wining Case</p>
                                </div> --}}
                           </div>
                        </div>
                    </div>
                    <div class="col-xl-7 col-lg-7">
                        <!-- about-img -->
                        <div class="about-img ">
                            <div class="about-font-img f-left">
                                <img src="assets/img/about/about-low-front.jpg" alt="">
                            </div>
                            <div class="about-back-img f-right d-none d-md-block">
                                <img src="assets/img/about/about-low-back.jpg" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- About Law End-->

        <!-- Want To Work Start -->
        {{-- <div class="wantToWork-area w-padding">
            <div class="container">
                <div class="row d-flex align-items-center">
                    <div class="col-xl-7 col-lg-9 col-md-8">
                        <div class="wantToWork-caption">
                            <h2>المحامون بالأستئناف العالى ومجلس الدولة</h2>
                            <p>لدى جميع المحاكم المدنية والجنائية , المنازعات الأسرية - تأسيس شركه- ضرائب- تأمينات</p>
                            <p>  العنوان/ شارع المشتل - امام مدرسة الشيخة جواهر - بولاق الدكرور المكتب رقم 1 بالدور الأول بالعقار رقم 1</p>
                        </div>
                    </div>
                    <div class="col-xl-5 col-lg-3 col-md-4">
                       <div class="wantToWork-btn f-right">
                            <p  class="btn btn-ans">محافظة الجيزة - جمهورية مصر العربية  <i class="ti-angle-double-right"> </i> 0ت/ 273061212</p>
                       </div>
                    </div>
                </div>
            </div>
        </div> --}}
        <!-- Want To Work End -->

    </main>
   <footer>
    @include('Users.layout.footer')
   </footer>
   
	@include('Users.layout.js')
        
    </body>
</html>