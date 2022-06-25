<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Controle Financeiro - Dashboard</title>

    <!-- Custom fonts for this template-->
    <link href="{{asset('vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{asset('css/sb-admin-2.min.css')}}" rel="stylesheet">

    <!-- NOVOS 25/06 -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--====== Favicon Icon ======-->
    {{-- <link rel="shortcut icon" href="assets/images/favicon.png" type="image/png"> --}}


    <!--====== Slick CSS ======-->
    <link href="{{asset('css/landing-page/slick.css')}}" rel="stylesheet"/>

    <!--====== Font Awesome CSS ======-->
    <link href="{{asset('css/landing-page/font-awesome.min.css')}}" rel="stylesheet"/>

    <!--====== Line Icons CSS ======-->
    <link href="{{asset('css/landing-page/LineIcons.css')}}" rel="stylesheet"/>

    <!--====== Animate CSS ======-->
    <link href="{{asset('css/landing-page/animate.css')}}" rel="stylesheet"/>

    <!--====== Bootstrap CSS ======-->
    <link href="{{asset('css/landing-page/bootstrap.min.css')}}" rel="stylesheet"/>

    <!--====== Default CSS ======-->
    <link href="{{asset('css/landing-page/default.css')}}" rel="stylesheet"/>

    <!--====== Style CSS ======-->
    <link href="{{asset('css/landing-page/style.css')}}" rel="stylesheet"/>

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/user/visao-geral">
                <div class="sidebar-brand-icon rotate-n-15">
                    {{-- <img src="{{asset('img/wallet .png')}}" alt=""> --}}
                </div>
                <div class="sidebar-brand-text mx-3">Controle Financeiro </div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="{{route('user.visao-geral')}}">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Visão geral</span></a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="{{route('user.despesas-rendas')}}">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Despesas e rendas</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Interface
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Components</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Custom Components:</h6>
                        <a class="collapse-item" href="buttons.html">Buttons</a>
                        <a class="collapse-item" href="cards.html">Cards</a>
                    </div>
                </div>
            </li>

            <!-- Nav Item - Utilities Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
                    aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="fas fa-fw fa-wrench"></i>
                    <span>Utilities</span>
                </a>
                <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Custom Utilities:</h6>
                        <a class="collapse-item" href="utilities-color.html">Colors</a>
                        <a class="collapse-item" href="utilities-border.html">Borders</a>
                        <a class="collapse-item" href="utilities-animation.html">Animations</a>
                        <a class="collapse-item" href="utilities-other.html">Other</a>
                    </div>
                </div>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Addons
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
                    aria-expanded="true" aria-controls="collapsePages">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Pages</span>
                </a>
                <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Login Screens:</h6>
                        <a class="collapse-item" href="/login">Login</a>
                        <a class="collapse-item" href="/cadastro">Register</a>
                        <a class="collapse-item" href="forgot-password.html">Forgot Password</a>
                        <div class="collapse-divider"></div>
                        <h6 class="collapse-header">Other Pages:</h6>
                        <a class="collapse-item" href="404.html">404 Page</a>
                        <a class="collapse-item" href="blank.html">Blank Page</a>
                    </div>
                </div>
            </li>

            <!-- Nav Item - Charts -->
            <li class="nav-item">
                <a class="nav-link" href="charts.html">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Charts</span></a>
            </li>

            <!-- Nav Item - Tables -->
            <li class="nav-item">
                <a class="nav-link" href="tables.html">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Tables</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Search -->
                    <form
                        class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group">
                            <input type="text" class="form-control bg-light border-0 small" placeholder="Pesquise por..."
                                aria-label="Search" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="button">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                        </div>
                    </form>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small"
                                            placeholder="Search for..." aria-label="Search"
                                            aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>

                        <!-- Nav Item - Alerts -->
                        <!-- <li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-bell fa-fw"></i> -->
                                <!-- Counter - Alerts -->
                                <!-- <span class="badge badge-danger badge-counter">3+</span>
                            </a> -->
                            <!-- Dropdown - Alerts -->
                            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="alertsDropdown">
                                <h6 class="dropdown-header">
                                    Alerts Center
                                </h6>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-primary">
                                            <i class="fas fa-file-alt text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">December 12, 2019</div>
                                        <span class="font-weight-bold">A new monthly report is ready to download!</span>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-success">
                                            <i class="fas fa-donate text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">December 7, 2019</div>
                                        $290.29 has been deposited into your account!
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-warning">
                                            <i class="fas fa-exclamation-triangle text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">December 2, 2019</div>
                                        Spending Alert: We've noticed unusually high spending for your account.
                                    </div>
                                </a>
                                <a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a>
                            </div>
                        </li>

                        <!-- Nav Item - Messages -->
                        <!-- <li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-envelope fa-fw"></i> -->
                                <!-- Counter - Messages -->
                                <!-- <span class="badge badge-danger badge-counter">7</span>
                            </a> -->
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="messagesDropdown">
                                <h6 class="dropdown-header">
                                    Message Center
                                </h6>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        {{-- <img class="rounded-circle" src="img/undraw_profile_1.svg" --}}
                                            {{-- alt="..."> --}}
                                        <div class="status-indicator bg-success"></div>
                                    </div>
                                    <div class="font-weight-bold">
                                        <div class="text-truncate">Hi there! I am wondering if you can help me with a
                                            problem I've been having.</div>
                                        <div class="small text-gray-500">Emily Fowler · 58m</div>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        {{-- <img class="rounded-circle" src="img/undraw_profile_2.svg" --}}
                                            {{-- alt="..."> --}}
                                        <div class="status-indicator"></div>
                                    </div>
                                    <div>
                                        <div class="text-truncate">I have the photos that you ordered last month, how
                                            would you like them sent to you?</div>
                                        <div class="small text-gray-500">Jae Chun · 1d</div>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        {{-- <img class="rounded-circle" src="img/undraw_profile_3.svg" --}}
                                            {{-- alt="..."> --}}
                                        <div class="status-indicator bg-warning"></div>
                                    </div>
                                    <div>
                                        <div class="text-truncate">Last month's report looks great, I am very happy with
                                            the progress so far, keep up the good work!</div>
                                        <div class="small text-gray-500">Morgan Alvarez · 2d</div>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="https://source.unsplash.com/Mv9hjnEUHR4/60x60"
                                            {{-- alt="..."> --}}
                                        <div class="status-indicator bg-success"></div>
                                    </div>
                                    <div>
                                        <div class="text-truncate">Am I a good boy? The reason I ask is because someone
                                            told me that people say this to all dogs, even if they aren't good...</div>
                                        <div class="small text-gray-500">Chicken the Dog · 2w</div>
                                    </div>
                                </a>
                                <a class="dropdown-item text-center small text-gray-500" href="#">Read More Messages</a>
                            </div>
                        </li>

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Douglas McGee</span>
                                <img class="img-profile rounded-circle"
                                    {{-- src="img/undraw_profile.svg"> --}}
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Settings
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Activity Log
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    {{-- LANDING PAGE --}}
                    <!--====== PRELOADER PART START ======-->

    <div class="preloader">
        <div class="loader">
            <div class="ytp-spinner">
                <div class="ytp-spinner-container">
                    <div class="ytp-spinner-rotator">
                        <div class="ytp-spinner-left">
                            <div class="ytp-spinner-circle"></div>
                        </div>
                        <div class="ytp-spinner-right">
                            <div class="ytp-spinner-circle"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--====== PRELOADER PART ENDS ======-->

    <!--====== HEADER PART START ======-->

    <header class="header-area">
        <div class="navbar-area headroom">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <nav class="navbar navbar-expand-lg">
                            <a class="navbar-brand" href="index.html">
                                {{-- <img src="assets/images/logo.png" alt="Logo"> --}}
                            </a>
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="toggler-icon"></span>
                                <span class="toggler-icon"></span>
                                <span class="toggler-icon"></span>
                            </button>

                            <div class="collapse navbar-collapse sub-menu-bar" id="navbarSupportedContent">
                                <ul id="nav" class="navbar-nav m-auto">
                                    <li class="nav-item active">
                                        <a href="index.html/#home">Home</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="index.html/#about">About </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="index.html/#services">Services</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="index.html/#portfolio">Portfolio</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="index.html/#blog">Blog</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="index.html/#contact">Contact</a>
                                    </li>
                                </ul>
                            </div> <!-- navbar collapse -->

                            <div class="navbar-btn d-none d-sm-inline-block">
                                <a class="main-btn" data-scroll-nav="0" href="#pricing">Download</a>
                            </div>
                        </nav> <!-- navbar -->
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
        </div> <!-- navbar area -->

        <div id="home" class="header-hero bg_cover d-lg-flex align-items-center" style="background-image: url(assets/images/header-hero.jpg)">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7">
                        <div class="header-hero-content">
                            <h1 class="hero-title wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s"><b>Your</b> <span>Consultancy</span> Partner for <b>Growth.</b></h1>
                            <p class="text wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.5s">Phasellus vel elit efficitur, gravida libero sit amet, scelerisque  tortor arcu, commodo sit amet nulla sed.</p>
                            <div class="header-singup wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.8s">
                                <input type="text" placeholder="username@yourdomain.com">
                                <button class="main-btn">Sign Up</button>
                            </div>
                        </div> <!-- header hero content -->
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
            <div class="header-hero-image d-flex align-items-center wow fadeInRightBig" data-wow-duration="1s" data-wow-delay="1.1s">
                <div class="image">
                    {{-- <img src="assets/images/hero-image.png" alt="Hero Image"> --}}
                </div>
            </div> <!-- header hero image -->
        </div> <!-- header hero -->
    </header>

    <!--====== HEADER PART ENDS ======-->

    <!--====== ABOUT PART START ======-->

    <section id="about" class="about-area pt-115">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-9">
                    <div class="about-title text-center wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s">
                        <h6 class="welcome">WELCOME</h6>
                        <h3 class="title"><span>Our 10 years working experience to </span> take care of your business goal.</h3>
                    </div>
                </div>
            </div> <!-- row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="about-image mt-60 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.5s">
                        {{-- <img src="assets/images/about.png" alt="about"> --}}
                    </div> <!-- about image -->
                </div>
            </div> <!-- row -->
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="about-content pt-45">
                        <p class="text wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.4s">Duis et metus et massa tempus lacinia. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Maecenas ultricies, orci molestie blandit interdum. ipsum ante pellentesque nisl, eget mollis turpis quam nec eros. ultricies, orci molestie blandit interdum.</p>

                        <div class="about-counter pt-60">
                            <div class="row">
                                <div class="col-sm-4">
                                    <div class="single-counter counter-color-1 mt-30 d-flex wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s">
                                        <div class="counter-shape">
                                            <span class="shape-1"></span>
                                            <span class="shape-2"></span>
                                        </div>
                                        <div class="counter-content media-body">
                                            <span class="counter-count"><span class="counter">350</span></span>
                                            <p class="text">Clients</p>
                                        </div>
                                    </div> <!-- single counter -->
                                </div>
                                <div class="col-sm-4">
                                    <div class="single-counter counter-color-2 mt-30 d-flex wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.6s">
                                        <div class="counter-shape">
                                            <span class="shape-1"></span>
                                            <span class="shape-2"></span>
                                        </div>
                                        <div class="counter-content media-body">
                                            <span class="counter-count"><span class="counter">99</span>%</span>
                                            <p class="text">Satisfaction</p>
                                        </div>
                                    </div> <!-- single counter -->
                                </div>
                                <div class="col-sm-4">
                                    <div class="single-counter counter-color-3 mt-30 d-flex wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.9s">
                                        <div class="counter-shape">
                                            <span class="shape-1"></span>
                                            <span class="shape-2"></span>
                                        </div>
                                        <div class="counter-content media-body">
                                            <span class="counter-count"><span class="counter">870</span></span>
                                            <p class="text">Projects</p>
                                        </div>
                                    </div> <!-- single counter -->
                                </div>
                            </div> <!-- row -->
                        </div> <!-- about counter -->
                    </div> <!-- about content -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>

    <!--====== ABOUT PART ENDS ======-->

    <!--====== OUR SERVICE PART START ======-->

    <section id="services" class="our-services-area pt-115">
        <div class="container">
                        <div class="header-hero-content text-center">
                            <h1 class="hero-title wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s"><b>You are using</b> <span>Free</span> Lite Version</b></h1>
                            <p style="font-size: 20px;">Please, purchase full version to get all sections, pages and features</p></br>
                            <a href="http://rebrand.ly/consult-ud" rel="nofollow" class="main-btn">Purchase Now</a>
                        </div> <!-- header hero content -->
        </div>
    </section>


    <!--====== PRICING PART START ======-->

    <section data-scroll-index="0" id="pricing" class="pricing-area pt-115">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-5 col-md-8 col-sm-9">
                    <div class="section-title text-center pb-20 wow fadeInUpBig" data-wow-duration="1s" data-wow-delay="0.2s">
                        <h6 class="sub-title">Pricing Plans</h6>
                        <h4 class="title">Providing Best Pricing <span>For Your Business.</span></h4>
                    </div> <!-- section title -->
                </div>
            </div> <!-- row -->
            <div class="row no-gutters justify-content-center">
                <div class="col-lg-4 col-md-7 col-sm-9">
                    <div class="single-pricing text-center pricing-color-1 mt-30 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.3s">
                        <div class="pricing-price">
                            <span class="price"><b>50</b>/m.<span class="symbol">$</span></span>
                        </div>
                        <div class="pricing-title mt-20">
                            <span class="btn">20% Off</span>
                            <h4 class="title">Basic</h4>
                        </div>
                        <div class="pricing-list pt-20">
                            <ul>
                                <li>Full Access</li>
                                <li>Unlimited Bandwidth</li>
                                <li>50 gb Space</li>
                                <li>1 Month Support</li>
                            </ul>
                        </div>
                        <div class="pricing-btn pt-70">
                            <a class="main-btn main-btn-2" href="#">Sign Up Now !</a>
                        </div>
                    </div> <!-- single pricing -->
                </div>
                <div class="col-lg-4 col-md-7 col-sm-9">
                    <div class="single-pricing text-center pricing-active pricing-color-2 mt-30 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.6s">
                        <div class="pricing-price">
                            <span class="price"><b>69</b>/m.<span class="symbol">$</span></span>
                        </div>
                        <div class="pricing-title mt-20">
                            <span class="btn">Special</span>
                            <h4 class="title">Standard</h4>
                        </div>
                        <div class="pricing-list pt-20">
                            <ul>
                                <li>Full Access</li>
                                <li>Unlimited Bandwidth</li>
                                <li>50 gb Space</li>
                                <li>1 Month Support</li>
                            </ul>
                        </div>
                        <div class="pricing-btn pt-70">
                            <a class="main-btn" href="#">Sign Up Now !</a>
                        </div>
                    </div> <!-- single pricing -->
                </div>
                <div class="col-lg-4 col-md-7 col-sm-9">
                    <div class="single-pricing text-center pricing-color-3 mt-30 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.9s">
                        <div class="pricing-price">
                            <span class="price"><b>99</b>/m.<span class="symbol">$</span></span>
                        </div>
                        <div class="pricing-title mt-20">
                            <span class="btn">New</span>
                            <h4 class="title">Premium</h4>
                        </div>
                        <div class="pricing-list pt-20">
                            <ul>
                                <li>Full Access</li>
                                <li>Unlimited Bandwidth</li>
                                <li>50 gb Space</li>
                                <li>1 Month Support</li>
                            </ul>
                        </div>
                        <div class="pricing-btn pt-70">
                            <a class="main-btn main-btn-2" href="#">Sign Up Now !</a>
                        </div>
                    </div> <!-- single pricing -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>

    <!--====== PRICING PART ENDS ======-->


    <!--====== BRAND PART START ======-->

    <div id="brand" class="brand-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="brand-wrapper pt-70 clearfix">
                        <div class="single-brand mt-50 text-md-left wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s">
                            {{-- <img src="assets/images/brand-1.png" alt="brand"> --}}
                        </div> <!-- single brand -->
                        <div class="single-brand mt-50 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.3s">
                            {{-- <img src="assets/images/brand-2.png" alt="brand"> --}}
                        </div> <!-- single brand -->
                        <div class="single-brand mt-50 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.4s">
                            {{-- <img src="assets/images/brand-3.png" alt="brand"> --}}
                        </div> <!-- single brand -->
                        <div class="single-brand mt-50 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.5s">
                            {{-- <img src="assets/images/brand-4.png" alt="brand"> --}}
                        </div> <!-- single brand -->
                        <div class="single-brand mt-50 text-md-right wow fadeIn" data-wow-duration="1s" data-wow-delay="0.6s">
                            {{-- <img src="assets/images/brand-5.png" alt="brand"> --}}
                        </div> <!-- single brand -->
                    </div> <!-- brand wrapper -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </div>

    <!--====== BRAND PART ENDS ======-->

    <!--====== BLOG PART START ======-->

    <section id="blog" class="blog-area pt-115">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-4">
                    <div class="section-title text-center pb-20 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s">
                        <h6 class="sub-title">Our Blog</h6>
                        <h4 class="title">Letest <span>News.</span></h4>
                    </div> <!-- section title -->
                </div>
            </div> <!-- row -->
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-6 col-sm-8">
                    <div class="single-blog mt-30 wow fadeInUpBig" data-wow-duration="1s" data-wow-delay="0.4s">
                        <div class="blog-image">
                            <a href="blog-details.html"><img src="assets/images/news-1.jpg" alt="news"></a>
                        </div>
                        <div class="blog-content">
                            <h4 class="blog-title"><a href="blog-details.html">Nulla eget urna at tortor  turpi feugiat tristique in sit.</a></h4>
                            <div class="blog-author d-flex align-items-center">
                                <div class="author-image">
                                    <img src="assets/images/author-1.jpg" alt="author">
                                </div>
                                <div class="author-content media-body">
                                    <h6 class="sub-title">Posted by</h6>
                                    <p class="text">Isabela Moreira</p>
                                </div>
                            </div>
                        </div>
                    </div> <!-- single blog -->
                </div>
                <div class="col-lg-4 col-md-6 col-sm-8">
                    <div class="single-blog mt-30 wow fadeInUpBig" data-wow-duration="1s" data-wow-delay="0.7s">
                        <div class="blog-image">
                            <a href="blog-details.html"><img src="assets/images/news-2.jpg" alt="news"></a>
                        </div>
                        <div class="blog-content">
                            <h4 class="blog-title"><a href="blog-details.html">Nulla eget urna at tortor  turpi feugiat tristique in sit.</a></h4>
                            <div class="blog-author d-flex align-items-center">
                                <div class="author-image">
                                    <img src="assets/images/author-2.jpg" alt="author">
                                </div>
                                <div class="author-content media-body">
                                    <h6 class="sub-title">Posted by</h6>
                                    <p class="text">Elon Musk</p>
                                </div>
                            </div>
                        </div>
                    </div> <!-- single blog -->
                </div>
                <div class="col-lg-4 col-md-6 col-sm-8">
                    <div class="single-blog mt-30 wow fadeInUpBig" data-wow-duration="1s" data-wow-delay="1s">
                        <div class="blog-image">
                            <a href="blog-details.html"><img src="assets/images/news-3.jpg" alt="news"></a>
                        </div>
                        <div class="blog-content">
                            <h4 class="blog-title"><a href="blog-details.html">Nulla eget urna at tortor  turpi feugiat tristique in sit.</a></h4>
                            <div class="blog-author d-flex align-items-center">
                                <div class="author-image">
                                    <img src="assets/images/author-3.jpg" alt="author">
                                </div>
                                <div class="author-content media-body">
                                    <h6 class="sub-title">Posted by</h6>
                                    <p class="text">Fiona</p>
                                </div>
                            </div>
                        </div>
                    </div> <!-- single blog -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>

    <!--====== BLOG PART ENDS ======-->

    <!--====== CONTACT PART START ======-->

    <section id="contact" class="contact-area pt-120 pb-120">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-4">
                    <div class="section-title text-center pb-20 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s">
                        <h6 class="sub-title">Our Contact</h6>
                        <h4 class="title">Get In <span>Touch.</span></h4>
                    </div> <!-- section title -->
                </div>
            </div> <!-- row -->
            <div class="contact-info pt-30">
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="single-contact-info contact-color-1 mt-30 d-flex  wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s">
                            <div class="contact-info-icon">
                                <i class="lni-map-marker"></i>
                            </div>
                            <div class="contact-info-content media-body">
                                <p class="text">21 King Street, Melbourne <br> Victoria, 1202 Australia.</p>
                            </div>
                        </div> <!-- single contact info -->
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="single-contact-info contact-color-2 mt-30 d-flex  wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.6s">
                            <div class="contact-info-icon">
                                <i class="lni-envelope"></i>
                            </div>
                            <div class="contact-info-content media-body">
                                <p class="text">hello@uideck.com</p>
                                <p class="text">support@uideck.com</p>
                            </div>
                        </div> <!-- single contact info -->
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="single-contact-info contact-color-3 mt-30 d-flex  wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.9s">
                            <div class="contact-info-icon">
                                <i class="lni-phone"></i>
                            </div>
                            <div class="contact-info-content media-body">
                                <p class="text">+99 000 1111 555</p>
                                <p class="text">+88 999 5555 444</p>
                            </div>
                        </div> <!-- single contact info -->
                    </div>
                </div> <!-- row -->
            </div> <!-- contact info -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="contact-wrapper-form pt-115  wow fadeInUpBig" data-wow-duration="1s" data-wow-delay="0.5s">
                        <h4 class="contact-title pb-10"><i class="lni-envelope"></i> Leave <span>A Message.</span></h4>

                        <form id="contact-form" action="assets/contact.php" method="post">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="contact-form mt-45">
                                        <label>Enter Your Name</label>
                                        <input type="text" name="name" placeholder="Full Name">
                                    </div> <!-- contact-form -->
                                </div>
                                <div class="col-md-6">
                                    <div class="contact-form mt-45">
                                        <label>Enter Your Email</label>
                                        <input type="email" name="email" placeholder="Email">
                                    </div> <!-- contact-form -->
                                </div>
                                <div class="col-md-12">
                                    <div class="contact-form mt-45">
                                        <label>Your Message</label>
                                        <textarea name="message" placeholder="Enter your message..."></textarea>
                                    </div> <!-- contact-form -->
                                </div>
                                <p class="form-message"></p>
                                <div class="col-md-12">
                                    <div class="contact-form mt-45">
                                        <button type="submit" class="main-btn">Send Now</button>
                                    </div> <!-- contact-form -->
                                </div>
                            </div> <!-- row -->
                        </form>
                    </div> <!-- contact wrapper form -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>

    <!--====== CONTACT PART ENDS ======-->


                    <!-- Content Row -->
                    <div class="row">

                        <div class="col-lg-6 mb-4">

                            <!-- Illustrations -->
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Illustrations</h6>
                                </div>
                                <div class="card-body">
                                    <div class="text-center">
                                        {{-- <img class="img-fluid px-3 px-sm-4 mt-3 mb-4" style="width: 25rem;" --}}
                                            {{-- src="img/undraw_posting_photo.svg" alt="..."> --}}
                                    </div>
                                    <p>Add some quality, svg illustrations to your project courtesy of <a
                                            target="_blank" rel="nofollow" href="https://undraw.co/">unDraw</a>, a
                                        constantly updated collection of beautiful svg images that you can use
                                        completely free and without attribution!</p>
                                    <a target="_blank" rel="nofollow" href="https://undraw.co/">Browse Illustrations on
                                        unDraw &rarr;</a>
                                </div>
                            </div>

                            <!-- Approach -->
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Development Approach</h6>
                                </div>
                                <div class="card-body">
                                    <p>SB Admin 2 makes extensive use of Bootstrap 4 utility classes in order to reduce
                                        CSS bloat and poor page performance. Custom CSS classes are used to create
                                        custom components and custom utility classes.</p>
                                    <p class="mb-0">Before working with this theme, you should become familiar with the
                                        Bootstrap framework, especially the utility classes.</p>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2021</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>



    <!-- Bootstrap core JavaScript-->
    <script src="{{asset('vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{asset('vendor/jquery-easing/jquery.easing.min.js')}}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{asset('js/sb-admin-2.min.js')}}"></script>

    <!-- Page level plugins -->
    <script src="{{asset('vendor/chart.js/Chart.min.js')}}"></script>

    <!-- Page level custom scripts -->

    <script src="{{asset('js/demo/chart-area-demo.js')}}"></script>
    <script src="{{asset('js/demo/chart-pie-demo.js')}}"></script>

</body>

</html>
