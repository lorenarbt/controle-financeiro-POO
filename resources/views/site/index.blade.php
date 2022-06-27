<!doctype html>
<html class="no-js" lang="pt-br">

<head>
    <meta charset="utf-8">

    <!--====== Title ======-->
    <title>Controle Financeiro</title>

    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--====== Favicon Icon ======-->
    <link rel="shortcut icon" href="{{asset('assets/images/favicon.png')}}" type="image/png">

    <!--====== Slick CSS ======-->
    <link rel="stylesheet" href="{{asset('assets/css/slick.css')}}">

    <!--====== Font Awesome CSS ======-->
    <link rel="stylesheet" href="{{asset('assets/css/font-awesome.min.css')}}">

    <!--====== Line Icons CSS ======-->
    <link rel="stylesheet" href="{{asset('assets/css/LineIcons.css')}}">

    <!--====== Animate CSS ======-->
    <link rel="stylesheet" href="{{asset('assets/css/animate.css')}}">

    <!--====== Magnific Popup CSS ======-->
    <link rel="stylesheet" href="{{asset('assets/css/magnific-popup.css')}}">

    <!--====== Bootstrap CSS ======-->
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">

    <!--====== Default CSS ======-->
    <link rel="stylesheet" href="{{asset('assets/css/default.css')}}">

    <!--====== Style CSS ======-->
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">

</head>

<body>
    <!--[if IE]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
  <![endif]-->


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
                            <a class="navbar-brand" href="/">
                                <img src="{{asset('assets/images/logo.png')}}" alt="Logo">
                            </a>
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="toggler-icon"></span>
                                <span class="toggler-icon"></span>
                                <span class="toggler-icon"></span>
                            </button>

                            <div class="collapse navbar-collapse sub-menu-bar" id="navbarSupportedContent">
                                <ul id="nav" class="navbar-nav m-auto">
                                    <li class="nav-item active">
                                        <a href="#home">Home</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#services">Visão geral</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#portfolio">Despesas e rendas</a>
                                    </li>

                                    <li class="nav-item">
                                        <a href="#contact">Criadores</a>
                                    </li>
                                </ul>
                            </div> <!-- navbar collapse -->

                            <div class="navbar-btn d-none d-sm-inline-block">
                                <a class="main-btn main-btn-2"  href="/login">Login</a>
                            </div>

                            <div class="col-lg-1">
                            <div class="navbar-btn d-none d-sm-inline-block">
                                <a class="main-btn"  href="/register">Cadastro</a>
                            </div>
                            </div>


                        </nav> <!-- navbar -->
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
        </div> <!-- navbar area -->

        <div id="home" class="header-hero bg_cover d-lg-flex align-items-center" style="background-image: url({{asset('assets/images/header-hero.jpg')}})">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7">
                        <div class="header-hero-content">
                            <h1 class="hero-title wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s"><b>O</b> <span>Controle Financeiro</span> <br>da forma que você precisa, <b>Simples e Completo!</b></h1>
                            <p class="text wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.5s">O Controle Financeiro te auxilia na gestão das suas rendas e despesas de forma simples e descomplicada. Aqui você visualiza todos os seus lançamentos de formo rápida e eficiente.</p>

                        </div> <!-- header hero content -->
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
            <div class="header-hero-image d-flex align-items-center wow fadeInRightBig" data-wow-duration="1s" data-wow-delay="1.1s">
                <div class="image">
                    <img src="{{asset('assets/images/hero-image.png')}}" alt="Hero Image">
                </div>
            </div> <!-- header hero image -->
        </div> <!-- header hero -->
    </header>

    <!--====== HEADER PART ENDS ======-->


    <!--====== OUR SERVICE PART START ======-->

    <section id="services" class="our-services-area pt-115">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-5 col-lg-6 col-md-8 col-sm-9">
                    <div class="section-title text-center wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s">
                        <h6 class="sub-title">Visão Geral</h6>
                        <h4 class="title"><span>Todos os seus lançamentos</span> sintetizados e descomplicados</h4>
                    </div> <!-- section title -->
                </div>
            </div> <!-- row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="our-services-tab pt-30">
                        <ul class="nav justify-content-center wow fadeIn" data-wow-duration="1s" data-wow-delay="0.5s" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="active" id="business-tab" data-toggle="tab" href="#business" role="tab" aria-controls="business" aria-selected="true">
                                    <i class="lni-briefcase"></i> <span>Consultas <br> rápidas</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a id="digital-tab" data-toggle="tab" href="#digital" role="tab" aria-controls="digital" aria-selected="false">
                                    <i class="lni-bullhorn"></i> <span>Resumo <br> Específico</span>
                                </a>
                            </li>

                            <li class="nav-item">
                                <a id="market-tab" data-toggle="tab" href="#market" role="tab" aria-controls="market" aria-selected="false">
                                    <i class="lni-stats-up"></i> <span>Gráficos <br> categóricos</span>
                                </a>
                            </li>
                        </ul>
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="business" role="tabpanel" aria-labelledby="business-tab">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="our-services-image mt-50">
                                            <img src="{{asset('assets/images/our-service-1.jpg')}}" alt="service">
                                        </div> <!-- our services image -->
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="our-services-content mt-45">
                                            <h3 class="services-title">Consultas rápidas <span>aos seus lançamentos.</span></h3>
                                            <p class="text">Você poderá acessar os seus lançamentos e visualizá-los de uma forma resumida e bem intuitiva. <br>  <br> Tudo muito coeso e compacto, para que as suas consultas sejam as mais simples e legíveis possiveis. </p>

                                        </div> <!-- our services content -->
                                    </div>
                                </div> <!-- row -->
                            </div>

                            <div class="tab-pane fade" id="digital" role="tabpanel" aria-labelledby="digital-tab">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="our-services-image mt-50">
                                            <img src="{{asset('assets/images/visao.jpg')}}" alt="service">
                                        </div> <!-- our services image -->
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="our-services-content mt-45">
                                            <h3 class="services-title">Resumo Específico  <span>das suas rendas mensais</span></h3>
                                            <p class="text">A sintese dos seus lançamentos diários de forma mensal. Despesas e rendas resumidas num só lugar, para que você possua um controle específico de suas finanças e despesas mensais.  <br>  <br> Você poderá ter um uma visão geral dos seus gastos e poder controlá-los mensalmente, sem muita dificuldade. Com um clique você terá eles na tela do seu computador.</p>

                                        </div> <!-- our services content -->
                                    </div>
                                </div> <!-- row -->
                            </div>

                            <div class="tab-pane fade" id="market" role="tabpanel" aria-labelledby="market-tab">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="our-services-image mt-50">
                                            <img src="{{asset('assets/images/grafico.jpg')}}" alt="service">
                                        </div> <!-- our services image -->
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="our-services-content mt-45">
                                            <h3 class="services-title">Gráficos categóricos  <span>para voce analisar as suas despesas.</span></h3>
                                            <p class="text">Gráficos simples e organizados por categoria para que haja um controle das suas despesas conforme os cálculos mensais.  <br>  <br> Gráfico de barras horizontais para calcular as suas economias mensalmente e gráfico de rosca para dividir as suas despesas de acordo com a categoria registrada em cada lançamento. </p>

                                        </div> <!-- our services content -->
                                    </div>
                                </div> <!-- row -->
                            </div>
                        </div> <!-- tab content -->
                    </div> <!-- our services tab -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>

<!--====== OUR SERVICE PART END ======-->

    <!--====== DESPESAS E RENDAS PART START--}}======-->

    <section id="portfolio" class="project-masonry-area pt-115">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-5 col-lg-6 col-md-8 col-sm-9">
                    <div class="section-title text-center wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s">
                        <h6 class="sub-title">DESPESAS E RENDAS</h6>
                        <h4 class="title"><span>Todos os seus lançamentos</span> apresentados detalhadamente</h4>
                    </div> <!-- section title -->
                </div>
            </div> <!-- row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="our-services-tab pt-30">
                        <ul class="nav justify-content-center wow fadeIn" data-wow-duration="1s" data-wow-delay="0.5s" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="active" id="business-tab" data-toggle="tab" href="#business" role="tab" aria-controls="business" aria-selected="true">
                                    <i class="lni-briefcase"></i> <span>Despesas</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a id="digital-tab" data-toggle="tab" href="#digital" role="tab" aria-controls="digital" aria-selected="false">
                                    <i class="lni-bullhorn"></i> <span>Rendas</span>
                                </a>
                            </li>

                        </ul>
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="business" role="tabpanel" aria-labelledby="business-tab">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="our-services-image mt-50">
                                            <img src="{{asset('assets/images/despesas.jpg')}}" alt="service">
                                        </div> <!-- our services image -->
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="our-services-content mt-45">
                                            <h3 class="services-title">Despesas <span>lançadas uma a uma.</span></h3>
                                            <p class="text">Na área de despesas e rendas você lança cada uma das suas despesas, sempre que precisar, para que exista um maior controle de todos os seus gastos. <br>  <br> Você poderá realizar lançamentos quantas vezes forem necessários, com liberdade para classificá-los e categorizá-los. </p>

                                        </div> <!-- our services content -->
                                    </div>
                                </div> <!-- row -->
                            </div>

                            <div class="tab-pane fade fade show active" id="digital" role="tabpanel" aria-labelledby="digital-tab">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="our-services-image mt-50">
                                            <img src="{{asset('assets/images/rendas.jpg')}}" alt="service">
                                        </div> <!-- our services image -->
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="our-services-content mt-45">
                                            <h3 class="services-title">Sua renda mensal <span>lançada detalhadamente</span></h3>
                                            <p class="text">Apresentação de cada um dos lançamentos que você realizar em qualquer momento do dia.Tudo apresentado de forma especificada para que você controle os seus recebimentos.  <br>  <br> Você poderá ter um uma visão geral dos seus gastos e poder controlá-los mensalmente, sem muita dificuldade. Com um clique você terá eles na tela do seu computador.</p>

                                        </div> <!-- our services content -->
                                    </div>
                                </div> <!-- row -->
                            </div>



                        </div> <!-- tab content -->
                    </div> <!-- our services tab -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>

    <!--====== DESPESAS E RENDAS PART ENDS ======-->



    <!--====== BRAND PART START ======-->

    <div id="brand" class="brand-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="brand-wrapper pt-70 clearfix">
                        <div class="single-brand mt-50 text-md-left wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s" >
                            <img src="{{asset('assets/images/brand-1.png')}}" alt="brand" style="widht: 150px; height: 150px">
                        </div> <!-- single brand -->
                        <div class="single-brand mt-50 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.3s">
                            <img src="{{asset('assets/images/brand-2.png')}}" alt="brand" style="widht: 150px; height: 150px">
                        </div> <!-- single brand -->
                        <div class="single-brand mt-50 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.4s">
                            <img src="{{asset('assets/images/brand-3.png')}}" alt="brand" style="widht: 150px; height: 150px">
                        </div> <!-- single brand -->
                        <div class="single-brand mt-50 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.5s">
                            <img src="{{asset('assets/images/brand-4.png')}}" alt="brand" style="widht: 150px; height: 150px">
                        </div> <!-- single brand -->
                        <div class="single-brand mt-50 text-md-right wow fadeIn" data-wow-duration="1s" data-wow-delay="0.6s">
                            <img src="{{asset('assets/images/brand-6.png')}}" alt="brand" style="widht: 150px; height: 150px">
                        </div> <!-- single brand -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </div>

    <!--====== BRAND PART ENDS ======-->

    <!--====== CONTACT PART START ======-->

    <section id="contact" class="contact-area pt-120 pb-120">
        <div class="container">

            <div class="row justify-content-center">
                <div class="col-lg-4">
                    <div class="section-title text-center pb-20 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s">
                        <h6 class="sub-title">SOBRE NÓS</h6>
                        <h4 class="title">Criadores <span>do Controle Financeiro.</span></h4>
                    </div> <!-- section title -->
                </div>
            </div> <!-- row -->

            <div class="tab-pane fade show active" id="business" role="tabpanel" aria-labelledby="business-tab">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="our-services-image mt-50">
                            <img src="{{asset('assets/images/criadores.jpg')}}" alt="service">
                        </div> <!-- our services image -->
                    </div>
                    <div class="col-lg-6">
                        <div class="our-services-content mt-45">
                            <h3 class="services-title">Criado pelos alunos Alexandre Coelho e Lorena Roberta.</h3>
                            <br>
                            <p class="text">Alunos do Bacharelado em Sistemas de Informação na Universidade Federal da Bahia, desenvolveram o projeto "Controle Financeiro" como requisito parcial para obtenção de nota na disciplina Programação Orientada a Objetos, ministrada pelo Professor Rodrigo Rocha. </p>

                        </div> <!-- our services content -->
                    </div>
                </div> <!-- row -->
            </div>

            <div class="contact-info pt-30">
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="single-contact-info contact-color-1 mt-30 d-flex  wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s">
                            <div class="contact-info-icon">
                                <i class="lni-map-marker"></i>
                            </div>
                            <div class="contact-info-content media-body">
                                <p class="text">Salvador-Ba.</p>
                            </div>
                        </div> <!-- single contact info -->
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="single-contact-info contact-color-2 mt-30 d-flex  wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.6s">
                            <div class="contact-info-icon">
                                <i class="lni-envelope"></i>
                            </div>
                            <div class="contact-info-content media-body">
                                <p class="text">alexandrecbs@ufba.br</p>
                                <p class="text">lorenaroberta@ufba.br</p>
                            </div>
                        </div> <!-- single contact info -->
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="single-contact-info contact-color-3 mt-30 d-flex  wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.9s">
                            <div class="contact-info-icon">
                                <img src="{{asset('assets/images/github.png')}}" alt="brand" style="widht: 16px; height: 50px">
                            </div>
                            <div class="contact-info-content media-body">
                                <p><a href="https://github.com/Alexandre010xC">Alexandre010xC</a></p>
                                <p><a href="https://github.com/lorenarbt">lorenarbt</a></p>
                            </div>
                        </div> <!-- single contact info -->
                    </div>
                </div> <!-- row -->
            </div> <!-- contact info -->
        </div> <!-- container -->
    </section>

    <!--====== CONTACT PART ENDS ======-->

    <!--====== FOOTER PART START ======-->

    <footer id="footer" class="footer-area bg_cover" style="background-image: url({{asset('assets/images/footer-bg.jpg')}})">
        <div class="container">
            <div class="footer-copyright text-center">
                <a href="/">
                    <img src="{{asset('assets/images/logo.png')}}" alt="Logo">
                </a>
                <p class="text">© 2022 Criado por <b>Alexandre Coelho e Lorena Roberta</b>.</p>
            </div>
        </div> <!-- container -->
    </footer>

    <!--====== FOOTER PART ENDS ======-->

    <!--====== BACK TOP TOP PART START ======-->

    <a href="#" class="back-to-top"><i class="lni-chevron-up"></i></a>

    <!--====== BACK TOP TOP PART ENDS ======-->




    <!--====== Jquery js ======-->
    <script src="{{asset('assets/js/vendor/jquery-1.12.4.min.js')}}"></script>
    <script src="{{asset('assets/js/vendor/modernizr-3.7.1.min.js')}}"></script>

    <!--====== Bootstrap js ======-->
    <script src="{{asset('assets/js/popper.min.js')}}"></script>
    <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>

    <!--====== Slick js ======-->
    <script src="{{asset('assets/js/slick.min.js')}}"></script>

    <!--====== Isotope js ======-->
    <script src="{{asset('assets/js/imagesloaded.pkgd.min.js')}}"></script>
    <script src="{{asset('assets/js/isotope.pkgd.min.js')}}"></script>

    <!--====== Counter Up js ======-->
    <script src="{{asset('assets/js/waypoints.min.js')}}"></script>
    <script src="{{asset('assets/js/jquery.counterup.min.js')}}"></script>

    <!--====== Circles js ======-->
    <script src="{{asset('assets/js/circles.min.js')}}"></script>

    <!--====== Appear js ======-->
    <script src="{{asset('assets/js/jquery.appear.min.js')}}"></script>

    <!--====== WOW js ======-->
    <script src="{{asset('assets/js/wow.min.js')}}"></script>

    <!--====== Headroom js ======-->
    <script src="{{asset('assets/js/headroom.min.js')}}"></script>

    <!--====== Jquery Nav js ======-->
    <script src="{{asset('assets/js/jquery.nav.js')}}"></script>

    <!--====== Scroll It js ======-->
    <script src="{{asset('assets/js/scrollIt.min.js')}}"></script>

    <!--====== Magnific Popup js ======-->
    <script src="{{asset('assets/js/jquery.magnific-popup.min.js')}}"></script>

    <!--====== Main js ======-->
    <script src="{{asset('assets/js/main.js')}}"></script>

</body>

</html>
