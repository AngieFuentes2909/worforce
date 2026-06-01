<!DOCTYPE HTML>
<html lang="zxx">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Workforce</title>
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" media="all" />
        <!-- Slick nav CSS -->
        <link rel="stylesheet" type="text/css" href="css/slicknav.min.css" media="all" />
        <!-- Iconfont CSS -->
        <link rel="stylesheet" type="text/css" href="css/icofont.css" media="all" />
        <!-- Slick CSS -->
        <link rel="stylesheet" type="text/css" href="css/slick.css">

        <link rel="stylesheet" href="css/font-awesome.min.css">
        <!-- Owl carousel CSS -->
        <link rel="stylesheet" type="text/css" href="css/owl.carousel.css">
        <!-- Popup CSS -->
        <link rel="stylesheet" type="text/css" href="css/magnific-popup.css">
        <!-- Switcher CSS -->
        <link rel="stylesheet" type="text/css" href="css/switcher-style.css">
        <!-- Animate CSS -->
        <link rel="stylesheet" type="text/css" href="css/animate.min.css">
        <!-- Main style CSS -->
        <link rel="stylesheet" type="text/css" href="css/style.css" media="all" />
        <!-- Responsive CSS -->
        <link rel="stylesheet" type="text/css" href="css/responsive.css" media="all" />
        <!-- Favicon Icon -->
        <link rel="icon" type="image/png"  href="img/favcion.png" />
        <!-- Google Fonts - Outfit & Inter -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700&family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body data-spy="scroll" data-target=".header" data-offset="50">
        <!-- Page loader -->
        <div id="preloader"></div>
        <!-- header section start -->
        <header class="header">
            <div class="container">
                <div class="row flexbox-center">
                    <div class="col-lg-2 col-md-3 col-6">
                        <div class="logo">
                            <a style="font-size: 15pt; color:#ffffff " href="#home">Grupo Workforce</a>
                        </div>
                    </div>
                    <div class="col-lg-10 col-md-9 col-6">
                        <div class="responsive-menu"></div>
                        <div class="mainmenu">
                            <ul id="primary-menu">
                                <li><a class="nav-link active" href="index.php">Inicio</a></li>
                                <li><a class="nav-link" href="#feature">Areas</a></li>

                                <li><a class="appao-btn" href="produccion1/index.php">Login Usuario</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </header><!-- header section end -->
        <!-- hero area start -->
        <style>
            /* Modern typography & Global overrides */
            body {
                font-family: 'Inter', sans-serif !important;
                background-color: #0b0f17 !important;
                color: #e6edf3 !important;
            }
            h1, h2, h3, h4, h5, h6 {
                font-family: 'Outfit', sans-serif !important;
                color: #ffffff !important;
            }

            /* Sleek Glassmorphic Header */
            .header {
                background: rgba(11, 15, 23, 0.7) !important;
                backdrop-filter: blur(16px) saturate(180%);
                -webkit-backdrop-filter: blur(16px) saturate(180%);
                border-bottom: 1px solid rgba(255, 255, 255, 0.08) !important;
                box-shadow: 0 4px 30px rgba(0, 0, 0, 0.2) !important;
                transition: all 0.3s ease;
            }
            .mainmenu ul li a {
                color: rgba(255, 255, 255, 0.8) !important;
                font-size: 15px !important;
                font-weight: 500 !important;
                transition: color 0.3s ease !important;
            }
            .mainmenu ul li a:hover, .mainmenu ul li a.active {
                color: #00f2fe !important;
            }

            /* Sleek Hero Area */
            .hero-area {
                background: linear-gradient(135deg, #0b0f17 0%, #1a2333 100%) !important;
                position: relative;
                overflow: hidden;
                padding: 180px 0 120px 0 !important;
            }
            .hero-area::before {
                content: '';
                position: absolute;
                top: -10%;
                right: -10%;
                width: 400px;
                height: 400px;
                background: radial-gradient(circle, rgba(0, 242, 254, 0.15) 0%, rgba(0, 242, 254, 0) 70%);
                filter: blur(50px);
                pointer-events: none;
            }
            .hero-area-content h1 {
                font-size: 56px !important;
                font-weight: 700 !important;
                line-height: 1.2 !important;
                background: linear-gradient(to right, #ffffff, #00f2fe) !important;
                -webkit-background-clip: text !important;
                -webkit-text-fill-color: transparent !important;
                margin-bottom: 20px !important;
            }
            .hero-area-content p {
                font-size: 18px !important;
                color: #8b9bb4 !important;
                line-height: 1.6 !important;
                margin-bottom: 35px !important;
            }

            /* Premium Buttons */
            .appao-btn {
                background: linear-gradient(135deg, #0072ff 0%, #00f2fe 100%) !important;
                border: none !important;
                color: #ffffff !important;
                font-weight: 600 !important;
                letter-spacing: 0.5px !important;
                border-radius: 30px !important;
                padding: 12px 30px !important;
                box-shadow: 0 4px 15px rgba(0, 242, 254, 0.3) !important;
                transition: all 0.3s cubic-bezier(0.25, 0.8, 0.25, 1) !important;
                margin-right: 15px !important;
                display: inline-block;
            }
            .appao-btn:hover {
                transform: translateY(-3px) scale(1.02) !important;
                box-shadow: 0 6px 20px rgba(0, 242, 254, 0.5) !important;
                color: #ffffff !important;
            }

            /* About/Card Area */
            .about-area {
                background: #0b0f17 !important;
                padding: 100px 0 !important;
            }
            .sec-title h2 {
                font-size: 38px !important;
                font-weight: 700 !important;
                color: #ffffff !important;
            }
            .sec-title-border span {
                background: #00f2fe !important;
            }
            .sec-title p {
                color: #8b9bb4 !important;
                font-size: 16px !important;
            }
            .single-about-box {
                background: rgba(255, 255, 255, 0.02) !important;
                border: 1px solid rgba(255, 255, 255, 0.06) !important;
                border-radius: 16px !important;
                padding: 40px 30px !important;
                transition: all 0.3s cubic-bezier(0.25, 0.8, 0.25, 1) !important;
                box-shadow: 0 8px 32px 0 rgba(0, 0, 0, 0.2) !important;
            }
            .single-about-box:hover {
                transform: translateY(-5px) !important;
                background: rgba(255, 255, 255, 0.04) !important;
                border-color: rgba(0, 242, 254, 0.3) !important;
                box-shadow: 0 12px 40px 0 rgba(0, 242, 254, 0.15) !important;
            }
            .single-about-box.active {
                background: rgba(0, 114, 255, 0.08) !important;
                border-color: rgba(0, 242, 254, 0.4) !important;
                box-shadow: 0 12px 40px 0 rgba(0, 242, 254, 0.2) !important;
            }
            .single-about-box i {
                background: linear-gradient(135deg, #0072ff 0%, #00f2fe 100%) !important;
                -webkit-background-clip: text !important;
                -webkit-text-fill-color: transparent !important;
                font-size: 48px !important;
                margin-bottom: 20px;
                display: inline-block;
            }
            .single-about-box h4 {
                font-size: 22px !important;
                font-weight: 600 !important;
                margin-bottom: 15px !important;
            }
            .single-about-box p {
                color: #8b9bb4 !important;
                font-size: 15px !important;
            }

            /* Features Area */
            .feature-area {
                background: #0d121c !important;
                padding: 100px 0 !important;
            }
            .feature-box-info h4 {
                font-size: 20px !important;
                font-weight: 600 !important;
                color: #ffffff !important;
            }
            .feature-box-info p {
                color: #8b9bb4 !important;
            }
            .feature-box-icon i {
                color: #00f2fe !important;
                font-size: 28px !important;
                transition: transform 0.3s ease;
            }
            .single-feature-box ul li:hover .feature-box-icon i {
                transform: scale(1.2);
            }
            .single-feature-box img {
                filter: drop-shadow(0 10px 20px rgba(0, 242, 254, 0.2));
            }

            /* Footer area */
            .footer {
                background: #070a10 !important;
                border-top: 1px solid rgba(255, 255, 255, 0.05) !important;
                padding: 40px 0 !important;
            }
            .copyright-area {
                border: none !important;
                margin: 0 !important;
                padding: 0 !important;
            }
            .copyright-area ul li a {
                border-color: rgba(255, 255, 255, 0.1) !important;
                color: #8b9bb4 !important;
            }
            .copyright-area ul li a:hover {
                background: #00f2fe !important;
                color: #0b0f17 !important;
                border-color: #00f2fe !important;
            }
        </style>
        <section class="hero-area" id="home">

            <div class="player" data-property="{videoURL:'https://youtu.be/J9wcec1DJNQ',containment:'#home',autoPlay:true, mute:true, startAt:0, showControls:false, loop:true, opacity:1}"></div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-7">
                        <div class="hero-area-content">
                            <h1>Grupo Workforce</h1>
                            <p>Àrea workforce soluciones innovadoras en indicadores operativos, gestión de procesos, gestión Data, integración de procesos financieros.. </p>
                            <a href="#" class="appao-btn">KPI</a>
                            <a href="#" class="appao-btn">Power BI</a>
                        </div>
                    </div>

                </div>
            </div>
        </section><!-- hero area end -->
        <!-- about section start -->
        <section class="about-area ptb-90">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="sec-title">
                            <h2>Workforce<span class="sec-title-border"><span></span><span></span><span></span></span></h2>
                            <p>KPI</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4">
                        <div class="single-about-box">
                            <i class="icofont icofont-ruler-pencil"></i>
                            <h4>Planeación</h4>
                            <p>Indicadores</p>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="single-about-box active">
                            <i class="icofont icofont-computer"></i>
                            <h4>Reporting</h4>
                            <p>Indicadores Estadisticos</p>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="single-about-box">
                            <i class="icofont icofont-headphone-alt"></i>
                            <h4>Operación</h4>
                            <p>Interacción Operativa</p>
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- about section end -->
        <!-- feature section start -->
        <section class="feature-area ptb-90" id="feature">
            <div class="container">
                <div class="row flexbox-center">
                    <div class="col-lg-4">
                        <div class="single-feature-box text-lg-right text-center">
                            <ul>
                                <li>
                                    <div class="feature-box-info">
                                        <h4>Reportes</h4>
                                        <p>En Tiempo Real</p>
                                    </div>
                                    <div class="feature-box-icon">
                                        <i class="icofont icofont-brush"></i>
                                    </div>
                                </li>
                                <li>
                                    <div class="feature-box-info">
                                        <h4>Operatividad</h4>
                                        <p>Gestión Operativa </p>
                                    </div>
                                    <div class="feature-box-icon">
                                        <i class="icofont icofont-computer"></i>
                                    </div>
                                </li>

                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="single-feature-box text-center">
                            <img src="img/feature.png" alt="feature">
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="single-feature-box text-lg-left text-center">
                            <ul>
                                <li>
                                    <div class="feature-box-icon">
                                        <i class="icofont icofont-eye"></i>
                                    </div>
                                    <div class="feature-box-info">
                                        <h4>Indicadores Financieros</h4>
                                        <p>Provisión</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="feature-box-icon">
                                        <i class="icofont icofont-sun-alt"></i>
                                    </div>
                                    <div class="feature-box-info">
                                        <h4>Indicadores</h4>
                                        <p>Estadistica</p>
                                    </div>
                                </li>

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- feature section end -->





        <section class="about-area ptb-90">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="sec-title">
                            <h2>Grupo Workforce<span class="sec-title-border"><span></span><span></span><span></span></span></h2>
                            <p>Compromiso cada dia.</p>
                        </div>
                    </div>
                </div>

            </div>
        </section><!-- about section end -->



        <footer class="footer" id="contact">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">

                    </div>
                    <div class="col-lg-6">

                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">

                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="copyright-area">
                            <ul>
                                <li><a href="#"><i class="icofont icofont-social-facebook"></i></a></li>

                            </ul>

                        </div>
                    </div>
                </div>
            </div>
        </footer><!-- footer section end -->
        <a href="#" class="scrollToTop">
            <i class="icofont icofont-arrow-up"></i>
        </a>
        <div class="switcher-area" id="switch-style">
            <div class="display-table">
                <div class="display-tablecell">
                    <a class="switch-button" id="toggle-switcher"><i class="icofont icofont-wheel"></i></a>
                    <div class="switched-options">
                        <div class="config-title">Inicio:</div>
                        <ul>
                            <li><a href="index.php">Inicio</a></li>
                            <li><a href="index.php">Area</a></li>
                            <li class="active"><a href="index.php">Area1</a></li>
                        </ul>
                        <div class="config-title">Otras Paginas</div>
                        <ul>
                            <li><a href="index.php">KPI</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- jquery main JS -->
        <script src="js/jquery.min.js"></script>
        <!-- Bootstrap JS -->
        <script src="js/bootstrap.min.js"></script>
        <!-- Slick nav JS -->
        <script src="js/jquery.slicknav.min.js"></script>
        <!-- Slick JS -->
        <script src="js/slick.min.js"></script>
        <!-- owl carousel JS -->
        <script src="js/owl.carousel.min.js"></script>
        <!-- Popup JS -->
        <script src="js/jquery.magnific-popup.min.js"></script>
        <!-- Counter JS -->
        <script src="js/jquery.counterup.min.js"></script>
        <!-- Counterup waypoints JS -->
        <script src="js/waypoints.min.js"></script>
        <!-- YTPlayer JS -->
        <script src="js/jquery.mb.YTPlayer.min.js"></script>
        <!-- jQuery Easing JS -->
        <script src="js/jquery.easing.1.3.js"></script>
        <!-- Gmap JS -->
        <script src="js/gmap3.min.js"></script>
        <!-- Google map api -->
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBnKyOpsNq-vWYtrwayN3BkF3b4k3O9A_A"></script>
        <!-- Custom map JS -->
        <script src="js/custom-map.js"></script>
        <!-- WOW JS -->
        <script src="js/wow-1.3.0.min.js"></script>
        <!-- Switcher JS -->
        <script src="js/switcher.js"></script>
        <!-- main JS -->
        <script src="js/main.js"></script>
    </body>
</html>