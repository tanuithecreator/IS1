<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>FoodShare</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- <link rel="manifest" href="site.webmanifest"> -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
    <!-- Place favicon.ico in the root directory -->

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
    <!-- <link rel="stylesheet" href="css/responsive.css"> -->
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
                                <li><a href="#"> <i class="fa fa-phone"></i> +254 717302004</a></li>
                                <li><a href="#"> <i class="fa fa-envelope"></i>FoodShare@gmail.com</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xl-6 col-md-6 col-lg-4">
                            <div class="social_media_links d-none d-lg-block">
                                <a href="#">
                                    <i class="fa fa-facebook"></i>
                                </a>
                                <a href="#">
                                    <i class="fa fa-pinterest-p"></i>
                                </a>
                                <a href="#">
                                    <i class="fa fa-linkedin"></i>
                                </a>
                                <a href="#">
                                    <i class="fa fa-twitter"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="sticky-header" class="main-header-area">
                <div class="container-fluid">
                    <div class="row align-items-center">
                        <div class="col-xl-3 col-lg-3">
                            <div class="logo">
                                <a href="index.html">
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
                                        <a data-scroll-nav='1' href="#">Make a Donation</a>
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
                        <h3>Causes</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- bradcam_area_end  -->

    <!-- popular_causes_area_start  -->
    <div class="popular_causes_area pt-120">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="single_cause">
                        <div class="thumb">
                            <img src="{{asset('assets/images/causes/1.png')}}" alt="">
                        </div>
                        <div class="causes_content">
                            <div class="custom_progress_bar">
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" style="width: 30%;" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100">
                                        <span class="progres_count">
                                            30%
                                        </span>
                                    </div>
                                  </div>
                            </div>
                            <div class="balance d-flex justify-content-between align-items-center">
                                <span>Raised: $5000.00 </span>
                                <span>Goal: $9000.00 </span>
                            </div>
                            <a href="{{route('food')}}"><h4>Help us to Send Food</h4></a>
                            <p></p>
                            <a class="read_more" href="{{route('food')}}">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single_cause">
                        <div class="thumb">
                            <img src="{{asset('assets/images/causes/2.png')}}" alt="">
                        </div>
                        <div class="causes_content">
                            <div class="custom_progress_bar">
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" style="width: 30%;" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100">
                                        <span class="progres_count">
                                            30%
                                        </span>
                                    </div>
                                  </div>
                            </div>
                            <div class="balance d-flex justify-content-between align-items-center">
                                <span>Raised: Ksh5000.00 </span>
                                <span>Goal: Ksh9000.00 </span>
                            </div>
                            <a href="{{route('clothes')}}"> <h4>Clothes For Everyone</h4></a>
                            <p></p>
                            <a class="read_more" href="{{route('clothes')}}">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single_cause">
                        <div class="thumb">
                            <img src="{{asset('assets/images/causes/3.png')}}"alt="">
                        </div>
                        <div class="causes_content">
                            <div class="custom_progress_bar">
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" style="width: 30%;" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100">
                                        <span class="progres_count">
                                            20%
                                        </span>
                                    </div>
                                  </div>
                            </div>
                            <div class="balance d-flex justify-content-between align-items-center">
                                <span>Raised: Ksh5000.00 </span>
                                <span>Goal: Ksh9000.00 </span>
                            </div>
                            <a href="{{route('edu')}}"> <h4>Educational Support</h4></a>
                           
                            <p></p>
                            <a class="read_more" href="{{route('edu')}}">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single_cause">
                        <div class="thumb">
                            <img src="{{asset('assets/images/causes/4.png')}}"alt="">
                        </div>
                        <div class="causes_content">
                            <div class="custom_progress_bar">
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" style="width: 30%;" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100">
                                        <span class="progres_count">
                                            50%
                                        </span>
                                    </div>
                                  </div>
                            </div>
                            <div class="balance d-flex justify-content-between align-items-center">
                                <span>Raised: Ksh 17000.00 </span>
                                <span>Goal: Ksh 90000.00 </span>
                            </div>
                            <a href="{{route('relief')}}"><h4>Disaster Relief</h4></a>
                            
                            <p></p>
                            <a class="read_more" href="{{route('relief')}}">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single_cause">
                        <div class="thumb">
                            <img src="{{asset('assets/images/causes/5.png')}}" alt="">
                        </div>
                        <div class="causes_content">
                            <div class="custom_progress_bar">
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" style="width: 30%;" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100">
                                        <span class="progres_count">
                                            72%
                                        </span>
                                    </div>
                                  </div>
                            </div>
                            <div class="balance d-flex justify-content-between align-items-center">
                                <span>Raised: Ksh 30000.00 </span>
                                <span>Goal: Ksh 52000.00 </span>
                            </div>
                            <a href="{{route('volunteer')}}"><h4>Volunteer with Us</h4></a>
                            
                            <p></p>
                            <a class="read_more" href="{{route('volunteer')}}">Read More</a>
                        </div>
                    </div>
                </div>
               
                            <p>                                       </p>
                            <a class="read_more" href="cause_details.html"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- popular_causes_area_end  -->


    <div data-scroll-index='1' class="make_donation_area section_padding">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="section_title text-center mb-55">
                        <h3><span>Make a Donation</span></h3>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <form action="#" class="donation_form">
                        <div class="row align-items-center">
                            <div class="col-md-4">
                                <div class="single_amount">
                                    <div class="input_field">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                              <span class="input-group-text" id="basic-addon1">Ksh</span>
                                            </div>
                                            <input type="text" class="form-control" placeholder="40,200" aria-label="Username" aria-describedby="basic-addon1">
                                          </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="single_amount">
                                   <div class="fixed_donat d-flex align-items-center justify-content-between">
                                       <div class="select_prise">
                                           <h4>Select Amount:</h4>
                                       </div>
                                        <div class="single_doonate"> 
                                            <input type="radio" id="blns_1" name="radio-group" checked>
                                            <label for="blns_1">10</label>
                                        </div>
                                        <div class="single_doonate"> 
                                            <input type="radio" id="blns_2" name="radio-group" checked>
                                            <label for="blns_2">30</label>
                                        </div>
                                        <div class="single_doonate"> 
                                            <input type="radio" id="Other" name="radio-group" checked>
                                            <label for="Other">Other</label>
                                        </div>
                                   </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="donate_now_btn text-center">
                        <a href="#" class="boxed-btn4">Donate Now</a>
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
                            <p>
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved 
</p>
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