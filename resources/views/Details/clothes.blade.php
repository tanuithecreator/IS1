<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>FoodShare</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
 

    <!-- CSS here -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css',true) }}">
    <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min.css',true) }}">
    <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.css',true) }}">
    <link rel="stylesheet" href="{{ asset('assets/css/font-awesome.min.css',true) }}">
    <link rel="stylesheet" href="{{ asset('assets/css/themify-icons.css',true) }}">
    <link rel="stylesheet" href="{{ asset('assets/css/nice-select.css',true) }}">
    <link rel="stylesheet" href="{{ asset('assets/css/flaticon.css',true) }}">
    <link rel="stylesheet" href="{{ asset('assets/css/gijgo.css',true) }}">
    <link rel="stylesheet" href="{{ asset('assets/css/animate.css',true) }}">
    <link rel="stylesheet" href="{{ asset('assets/css/slicknav.css',true) }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css',true) }}">
    <link rel="stylesheet" href="{{ asset('assets/css/responsive.css',true) }}">

</head>

<body>
    <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->


    <!-- header-start -->
    <header>
        <div class="header-area ">
            <div class="header-top_area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-xl-6 col-md-12 col-lg-8">
                            <div class="short_contact_list">
                                <ul>
                                    <li><a href="{{route('contact')}}"> <i class="fa fa-phone"></i> +254 717302004</a></li>
                                    <li><a href=""> <i class="fa fa-envelope"></i>FoodShare@gmail.com</a></li>
                                </ul>
                            </div>
                        </div>
                     
            </div>
            <div id="sticky-header" class="main-header-area">
                <div class="container-fluid">
                    <div class="row align-items-center">
                        <div class="col-xl-3 col-lg-3">
                            <div class="logo">
                                <a href="{{ route('home') }}" >
                                    <img src="img/logo.png" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="col-xl-9 col-lg-9">
                            <div class="main-menu">
                                <nav>
                                    <ul id="navigation">
                                        <li><a href="{{ route('home') }}" > home</a></li>
                                        <li><a href="{{ route('about') }}"> About</a></li>
                                        
                                        <li><a href="{{ route('blog') }}"> Blog</a></li>
                                                
                                           
                                        
                                        
                                            
                                                
                                         <li><a href="{{ route('cause') }}" >Cause</a></li>
                                            
                                        
                                        <li><a href="{{ route('contact') }}">Contact</a></li>
                                    
                                   
                
                                   
                                     
                        @if (Route::has('login'))
                             
                                @auth
                                 <li>   <a
                                        href="{{ url('/dashboard') }}"
                                        class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20]"
                                    >
                                        Dashboard
                                    </a></li>
                                @else
                                  <li> <a
                                        href="{{ route('login') }}"
                                        
                                    >
                                        Log in
                                    </a></li>

                                    @if (Route::has('register'))
                                       <li><a
                                            href="{{ route('register') }}"
                                            class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20]"
                                        >
                                            Register
                                        </a></li> 
                                    @endif
                                @endauth
                            
                        @endif</ul>
                        </div>
                                </nav>
                                <div class="Appointment">
                                    <div class="book_btn d-none d-lg-block">
                                        <a data-scroll-nav='1' href="#giveMoney">Make a Donation</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="mobile_menu d-block d-lg-none"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- header-end -->

    <!-- bradcam_area_start  -->
    <div class="bradcam_area breadcam_bg overlay d-flex align-items-center justify-content-center">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="bradcam_text text-center">
                        <h3>Clothes Donations</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- bradcam_area_end  -->

    <!-- popular_causes_area_start  -->
    <div class="popular_causes_area pt-120 cause_details ">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="single_cause">
                        <div class="thumb">
                            <img src="img/causes/large_img.png" alt="">
                        </div>
                        <div class="causes_content">
                            <div class="custom_progress_bar">
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" style="width: 10%;" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">
                                        <span class="progres_count">
                                            30%
                                        </span>
                                    </div>
                                  </div>
                            </div>
                            <div class="balance d-flex justify-content-between align-items-center">
                                <span>Raised: Ksh 1700.00 </span>
                                <span>Goal: Ksh 22000.00 </span>
                            </div>
                            <h4>Let's cloth Everyone</h4>
                            <p>In a world where access to adequate clothing remains a challenge for many, donating clothes stands as a powerful act of compassion and support. This write-up explores the significant impact of clothing donations, highlighting their role in providing essential clothing items, fostering community support, and promoting sustainable practices.</p>
                         <h4> Why Donate Clothes</h4>
                            <p>Addressing Basic Needs: Clothing donations directly address the fundamental need for clothing among individuals and families facing economic hardship, natural disasters, or social inequalities.</p>

                            <p>Environmental Sustainability: Clothing donations play a crucial role in promoting environmental sustainability by extending the lifecycle of garments. Reusing and recycling clothes reduce waste and lessen the environmental impact of textile production and disposal. </p>

                            <p>Building Community and Empathy: Engaging in clothing donation initiatives fosters a sense of community and empathy among donors and recipients alike. It encourages individuals and businesses to recognize their shared responsibility in supporting each other and promoting social equity.</p>

<p></p>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- popular_causes_area_end  -->


 
            <div class="row">
                <div class="col-12">
                    <div class="donate_now_btn text-center">
                        <a href="{{ route('category.create')}}"  class="boxed-btn4">Donate Now</a>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- footer_start  -->
    <footer class="footer">
        <div class="footer_top">
            <div class="container">
                <div class="row">
                    <div class="col-xl-4 col-md-6 col-lg-4 ">
                        <div class="footer_widget">
                            <div class="footer_logo">
                                <a href="#">
                                    <img src="img/footer_logo.png" alt="">
                                </a>
                            </div>
                            <p class="address_text">Lorem ipsum dolor sit amet, <br> consectetur adipiscing elit, sed do <br> eiusmod tempor incididunt ut labore.
                            </p>
                            <div class="socail_links">
                                <ul>
                                    <li>
                                        <a href="#">
                                            <i class="ti-facebook"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="ti-twitter-alt"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-dribbble"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-instagram"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>

                        </div>
                    </div>
                    <div class="col-xl-2 col-md-6 col-lg-2">
                        <div class="footer_widget">
                            <h3 class="footer_title">
                                Services
                            </h3>
                            <ul class="links">
                            <li><a href="{{ route('cause')}}">Donate</a></li>
                                
                                <li><a href="{{ route('cause')}}">Fundraise</a></li>
                                <li><a href="{{ route('cause')}}">Volunteer</a></li>
                            
                                <li><a href="{{ route('contact')}}">Jobs</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 col-lg-3">
                        <div class="footer_widget">
                            <h3 class="footer_title">
                                Contacts
                            </h3>
                            <div class="contacts">
                                <p>+2(305) 587-3407 <br>
                                    info@loveuscharity.com <br>
                                    Flat 20, Reynolds Neck, North
                                    Helenaville, FV77 8WS
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 col-lg-3">
                        <div class="footer_widget">
                            <h3 class="footer_title">
                                Top News
                            </h3>
                            <ul class="news_links">
                                <li>
                                    <div class="thumb">
                                        <a href="#">
                                            <img src="img/news/news_1.png" alt="">
                                        </a>
                                    </div>
                                    <div class="info">
                                        <a href="#">
                                            <h4>School for African 
                                                Childrens</h4>
                                        </a>
                                        <span>Jun 12, 2019</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="thumb">
                                        <a href="#">
                                            <img src="img/news/news_2.png" alt="">
                                        </a>
                                    </div>
                                    <div class="info">
                                        <a href="#">
                                            <h4>School for African 
                                                Childrens</h4>
                                        </a>
                                        <span>Jun 12, 2019</span>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copy-right_text">
            <div class="container">
                <div class="row">
                    <div class="bordered_1px "></div>
                    <div class="col-xl-12">
                        <p class="copy_right text-center">
                        Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved
  
  
  </p>
</div>
</div>
</div>
</div>
</footer>
<!-- footer_end  -->

<!-- link that opens popup -->

<!-- JS here -->

<script src="{{ asset('assets/vendor/js/vendor/modernizr-3.5.0.min.js') }}"></script>
<script src="{{ asset('assets/vendor/js/vendor/jquery-1.12.4.min.js') }}"></script>
<script src="{{ asset('assets/js/popper.min.js',true) }}"></script>
<script src="{{ asset('assets/js/bootstrap.min.js',true) }}"></script>
<script src="{{ asset('assets/js/owl.carousel.min.js',true) }}"></script>
<script src="{{ asset('assets/js/isotope.pkgd.min.js',true) }}"></script>
<script src="{{ asset('assets/js/ajax-form.js',true) }}"></script>
<script src="{{ asset('assets/js/waypoints.min.js',true) }}"></script>
<script src="{{ asset('assets/js/jquery.counterup.min.js',true) }}"></script>
<script src="{{ asset('assets/js/imagesloaded.pkgd.min.js',true) }}"></script>
<script src="{{ asset('assets/js/scrollIt.js',true) }}"></script>
<script src="{{ asset('assets/js/jquery.scrollUp.min.js',true) }}"></script>
<script src="{{ asset('assets/js/wow.min.js',true) }}"></script>
<script src="{{ asset('assets/js/nice-select.min.js',true) }}"></script>
<script src="{{ asset('assets/js/jquery.slicknav.min.js',true) }}"></script>
<script src="{{ asset('assets/js/jquery.magnific-popup.min.js',true) }}"></script>
<script src="{{ asset('assets/js/plugins.js',true) }}"></script>
<script src="{{ asset('assets/js/gijgo.min.js',true) }}"></script>
<script src="{{ asset('assets/js/contact.js',true) }}"></script>
<script src="{{ asset('assets/js/jquery.ajaxchimp.min.js',true) }}"></script>
<script src="{{ asset('assets/js/jquery.form.js',true) }}"></script>
<script src="{{ asset('assets/js/jquery.validate.min.js',true) }}"></script>
<script src="{{ asset('assets/js/mail-script.js',true) }}"></script>
<script src="{{ asset('assets/js/main.js',true) }}"></script>
</body>
</html>

</body>

</html>