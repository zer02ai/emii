<!doctype html>
<html class="no-js" lang="zxx">

<!-- Mirrored from htmldemo.zcubethemes.com/qeducato/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 05 Jun 2023 15:00:41 GMT -->

<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>{{($page_name)?$page_name:'ENGINEERING AND MANAGEMENT INSTITUTE OF INDIA'}} - EMII</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" type="image/x-icon" href="{{url('')}}/assets/img/favicon.ico">
  <!-- Place favicon.ico in the root directory -->

  <!-- CSS here -->
  <link rel="stylesheet" href="{{url('')}}/assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="{{url('')}}/assets/css/animate.min.css">
  <link rel="stylesheet" href="{{url('')}}/assets/css/magnific-popup.css">
  <link rel="stylesheet" href="{{url('')}}/assets/fontawesome/css/all.min.css">
  <link rel="stylesheet" href="{{url('')}}/assets/css/dripicons.css">
  <link rel="stylesheet" href="{{url('')}}/assets/css/slick.css">
  <link rel="stylesheet" href="{{url('')}}/assets/css/meanmenu.css">
  <link rel="stylesheet" href="{{url('')}}/assets/css/default.css">
  <link rel="stylesheet" href="{{url('')}}/assets/css/style.css">
  <link rel="stylesheet" href="{{url('')}}/assets/css/responsive.css">
  <link rel="stylesheet" href="{{url('')}}/assets/css/custom.css">
</head>

<body>
  <!-- header -->
  <header class="header-area header-three">
    <div class="header-top second-header d-none d-md-block">
      <div class="container">
        <div class="row align-items-center">

          <div class="col-lg-4 col-md-4 d-none d-lg-block ">
            <div class="header-social">
              <span>
                Follow us:-
                <a href="#" title="Facebook"><i class="fab fa-facebook-f"></i></a>
                <a href="#" title="LinkedIn"><i class="fab fa-instagram"></i></a>
                <a href="#" title="Twitter"><i class="fab fa-twitter"></i></a>
                <a href="#" title="Twitter"><i class="fab fa-youtube"></i></a>
              </span>
              <!--  /social media icon redux -->
            </div>
          </div>
          <div class="col-lg-8 col-md-8 d-none d-lg-block text-right">
            <div class="header-cta">
              <ul>
                <li>
                  <div class="call-box">
                    <div class="icon">
                      <img src="{{url('')}}/assets/img/icon/phone-call.png" alt="img">
                    </div>
                    <div class="text">
                      <span>Call Now !</span>
                      <strong><a href="tel:+917052101786">+91 7052 101 786</a></strong>
                    </div>
                  </div>
                </li>
                <li>
                  <div class="call-box">
                    <div class="icon">
                      <img src="{{url('')}}/assets/img/icon/mailing.png" alt="img">
                    </div>
                    <div class="text">
                      <span>Email Now</span>
                      <strong><a href="mailto:info@example.com"> info@example.com </a></strong>
                    </div>
                  </div>
                </li>
              </ul>
            </div>
          </div>

        </div>
      </div>
    </div>
    <div id="header-sticky" class="menu-area">
      <div class="container">
        <div class="second-menu">
          <div class="row align-items-center">
            <div class="col-xl-3 col-lg-3">
              <div class="logo">
                <a href="index-2.html"><img src="{{url('')}}/assets/img/logo/logo.png" alt="logo"></a>
              </div>
            </div>
            <div class="col-xl-6 col-lg-6">

              <div class="main-menu text-right text-xl-right">
                <nav id="mobile-menu">
                  <ul>
                    <li><a href="{{route('home')}}">Home</a></li>
                      {{-- <ul>
                        <li><a href="index-2.html">University</a></li>
                        <li><a href="index-3.html">Kindergarten</a></li>
                        <li><a href="index-4.html">High School</a></li>
                      </ul> --}}
                    {{-- </li> --}}
                    <li><a href="{{route('about_us')}}">About Us</a></li>

                    <li class="has-sub">
                      <a href="courses.html">Courses</a>
                      <ul>
                        <li><a href="courses.html">Courses</a></li>
                        <li> <a href="courses-2.html">Courses 02</a></li>
                        <li> <a href="single-courses.html">Course Details</a></li>
                        <li> <a href="single-courses-2.html">Course Details 02</a></li>
                      </ul>
                    </li>
                    <li class="has-sub"><a href="#">Pages</a>
                      <ul>
                        <li><a href="event.html">Event</a></li>
                        <li><a href="single-event.html">Event Details</a></li>
                        <li><a href="projects.html">Gallery</a></li>
                        <li><a href="pricing.html">Pricing</a></li>
                        <li><a href="faq.html">Faq</a></li>
                        <li><a href="team.html">Teacher</a></li>
                        <li><a href="team-single.html">Teacher Details</a></li>
                        <li><a href="404-error.html">404 Error</a></li>
                      </ul>
                    </li>
                    <li class="has-sub">
                      <a href="blog.html">Blog</a>
                      <ul>
                        <li><a href="blog.html">Blog</a></li>
                        <li><a href="blog-details.html">Blog Details</a></li>
                      </ul>
                    </li>


                    <li><a href="{{route('contact_us')}}">Contact</a></li>
                  </ul>
                </nav>
              </div>
            </div>
            <div class="col-xl-3 col-lg-3 text-right d-none d-lg-block text-right text-xl-right">
              <div class="login">
                <ul>
                  <li><a href="#" class="menu-tigger"><i class="fal fa-search"></i></a></li>
                  <li>
                    <div class="second-header-btn">
                      <a href="contact.html" class="btn">admission open</a>
                    </div>
                  </li>
                </ul>
              </div>
            </div>

            <div class="col-12">
              <div class="mobile-menu"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>
  <!-- header-end -->
  <!-- offcanvas-area -->
  <div class="offcanvas-menu">
    <span class="menu-close"><i class="fas fa-times"></i></span>
    <form role="search" method="get" id="searchform" class="searchform" action="http://wordpress.zcube.in/xconsulta/">
      <input type="text" name="s" id="search" placeholder="Search" />
      <button><i class="fa fa-search"></i></button>
    </form>
    <div id="cssmenu3" class="menu-one-page-menu-container">
      <ul class="menu">
        <li class="menu-item menu-item-type-custom menu-item-object-custom"><a href="index-2.html">Home</a></li>
        <li class="menu-item menu-item-type-custom menu-item-object-custom"><a href="about.html">About Us</a></li>
        <li class="menu-item menu-item-type-custom menu-item-object-custom"><a href="courses.html">Courses</a></li>
        <li class="menu-item menu-item-type-custom menu-item-object-custom"><a href="pricing.html">Pricing </a></li>
        <li class="menu-item menu-item-type-custom menu-item-object-custom"><a href="team.html">Teacher</a></li>
        <li class="menu-item menu-item-type-custom menu-item-object-custom"><a href="projects.html">Gallery</a></li>
        <li class="menu-item menu-item-type-custom menu-item-object-custom"><a href="blog.html">Blog</a></li>
        <li class="menu-item menu-item-type-custom menu-item-object-custom"><a href="contact.html">Contact</a></li>
      </ul>
    </div>
    <div id="cssmenu2" class="menu-one-page-menu-container">
      <ul id="menu-one-page-menu-12" class="menu">
        <li class="menu-item menu-item-type-custom menu-item-object-custom"><a href="#home"><span>+8 12 3456897</span></a></li>
        <li class="menu-item menu-item-type-custom menu-item-object-custom"><a href="#howitwork"><span>info@example.com</span></a></li>
      </ul>
    </div>
  </div>
  <div class="offcanvas-overly"></div>
  <!-- offcanvas-end -->
  <!-- main-area -->
<main>