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
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/nice-select.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/gijgo.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/slicknav.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}">

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
                                    <li><a href=""> <i class="fa fa-phone"></i> +254 717302004</a></li>
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
                                       
                                                
                                         <li><a href="{{ route('cause') }}" >Cause</a></li>
                                   
                
                                   
                                     
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
                        <h3>Disaster Relief: Uniting Humanity in Times of Crisis</h3>
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
                                            13%
                                        </span>
                                    </div>
                                  </div>
                            </div>
                            <div class="balance d-flex justify-content-between align-items-center">
                                <span>Raised: Ksh 10000.00 </span>
                                <span>Goal: Ksh 70000.00 </span>
                            </div>
                            <h4>Let's help Out</h4>
                            <p>In the face of natural disasters and humanitarian crises, disaster relief efforts stand as a beacon of hope and solidarity. </p>
                         <h4> Why Help out</h4>
                            <p> Fostering Global Cooperation: Disaster relief donations foster international solidarity and cooperation among governments, NGOs, businesses, and individuals worldwide. These contributions demonstrate a shared commitment to humanitarian values, collective responsibility for global challenges, and the importance of standing together in times of adversity.</p>

                            <p>Supporting Vulnerable Communities:
                            Donations for disaster relief support frontline responders, humanitarian organizations, and local communities in affected areas. These contributions enable rapid deployment of resources and expertise to address critical needs, protect vulnerable populations such as children, elderly, and individuals with disabilities, and ensure access to lifesaving services during times of crisis.</p>

                            <p></p>

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
                        <a href="{{ route('donations.create')}}"  class="boxed-btn4">Donate Now</a>
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
                    
                    <div class="col-xl-2 col-md-6 col-lg-2">
                        <div class="footer_widget">
                            <h3 class="footer_title">
                                Services
                            </h3>
                            <ul class="links">
                                <li><a href="{{ route('cause')}}">Donate</a></li>
                                
                                <li><a href="{{ route('cause')}}">Fundraise</a></li>
                                <li><a href="{{ route('cause')}}">Volunteer</a></li>
                            
                            
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 col-lg-3">
                        <div class="footer_widget">
                            <h3 class="footer_title">
                                Contacts
                            </h3>
                            <div class="contacts">
                            <p>+254717302004<br>
                                    foodshare@gmail.com<br>
                                    
                                </p>
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
<script src="{{ asset('assets/js/popper.min.js') }}"></script>
<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('assets/js/isotope.pkgd.min.js') }}"></script>
<script src="{{ asset('assets/js/ajax-form.js') }}"></script>
<script src="{{ asset('assets/js/waypoints.min.js') }}"></script>
<script src="{{ asset('assets/js/jquery.counterup.min.js') }}"></script>
<script src="{{ asset('assets/js/imagesloaded.pkgd.min.js') }}"></script>
<script src="{{ asset('assets/js/scrollIt.js') }}"></script>
<script src="{{ asset('assets/js/jquery.scrollUp.min.js') }}"></script>
<script src="{{ asset('assets/js/wow.min.js') }}"></script>
<script src="{{ asset('assets/js/nice-select.min.js') }}"></script>
<script src="{{ asset('assets/js/jquery.slicknav.min.js') }}"></script>
<script src="{{ asset('assets/js/jquery.magnific-popup.min.js') }}"></script>
<script src="{{ asset('assets/js/plugins.js') }}"></script>
<script src="{{ asset('assets/js/gijgo.min.js') }}"></script>
<script src="{{ asset('assets/js/contact.js') }}"></script>
<script src="{{ asset('assets/js/jquery.ajaxchimp.min.js') }}"></script>
<script src="{{ asset('assets/js/jquery.form.js') }}"></script>
<script src="{{ asset('assets/js/jquery.validate.min.js') }}"></script>
<script src="{{ asset('assets/js/mail-script.js') }}"></script>
<script src="{{ asset('assets/js/main.js') }}"></script>
</body>
</html>

</body>

</html>