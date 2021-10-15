<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="icon" href="image/favicon.png" type="image/png" sizes="16x16" />
	<link rel="stylesheet" href="css/vendor.bundle.css" />
  <link id="style-css" rel="stylesheet" href="css/style.css" />
	<script src="https://kit.fontawesome.com/7c0f08b5a4.js" crossorigin="anonymous"></script>
</head>
<body class="site-body style-v1">
<!-- Header -->
    <header class="site-header header-s1 is-sticky">
      <!-- Topbar -->
      <div class="topbar">
        <div class="container">
          <div class="row">
            <div class="top-aside top-left">
              <ul class="top-nav">
                <li><a href="/">Inicio</a></li>
                <li><a href="/servicios">Servicios</a></li>
                <li><a href="/clientes" >Clientes</a></li>
                <li><a href="/cotizacion" >Contactanos</a></li>
              </ul>
            </div>
            <div class="top-aside top-right clearfix">
              <ul class="top-contact clearfix">
                <li class="t-email t-email1">
                  <em class="fa fa-envelope-o" aria-hidden="true"></em>
                  </svg>
                  <span><a href="#"> priminsa@gmail.com</a></span>
                </li>
                <li class="t-phone t-phone1">
                  <em class="fa fa-phone" aria-hidden="true"></em>
                  <span> 241 131 6391</span>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <!-- #end Topbar -->
      <!-- Navbar -->
      <div class="navbar navbar-primary">
        <div class="container">
          <!-- Logo -->
          <a class="navbar-brand" href="./">
            <img
              class="logo logo-dark"
              alt=""
              src="img/logo.jpg"
              srcset="image/logo2x.png 2x"
            />
            <img
              class="logo logo-light"
              alt=""
              src="image/logo-light.png"
              srcset="image/logo-light2x.png 2x"
            />
          </a>
          <!-- #end Logo -->
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#mainnav" aria-expanded="false">
              <span class="sr-only">Menu</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <!-- Q-Button for Mobile -->
            <div class="quote-btn">
              <a class="btn" href="/cotizacion">COTIZA AHORA</a>
            </div>
          </div>
          <!-- MainNav -->
          <nav class="navbar-collapse collapse" id="mainnav">
            <ul class="nav navbar-nav">
              <li><a href="/">INICIO</a></li>
              <li><a href="/nosotros">NOSOTROS</a></li>
              <li><a href="/servicios"">SERVICIOS</a></li>
              <li class="dropdown">
                <a>PROYECTOS</a>
                  <ul class="dropdown-menu">
                  <li>
                    <a href="/construccion">Proyectos de construcción</a>
                  </li>
                  <li>
                    <a href="/electricidad">Proyectos de electricidad</a>
                  </li>
                  <li>
                    <a href="/mecanico">Proyectos de mecánica</a>
                  </li>
                </ul>
              </li>
              <li><a href="/clientes">CLIENTES</a></li>
              <li class="quote-btn">
                <a class="btn" href="/cotizacion">COTIZA AHORA</a>
              </li>
            </ul>
          </nav>
          <!-- #end MainNav -->
        </div>
      </div>
      <!-- #end Navbar -->
      <!-- Banner/Slider -->
      <div id="slider" class="banner banner-slider carousel slide carousel-fade">
        <!-- Wrapper for Slides -->
        <div class="carousel-inner">
          <div class="item active">
            <!-- Set the first background image using inline CSS below. -->
            <div
              class="fill"
              style="background-image: url('img/construccion.jpg');">
              <div class="banner-content">
                <div class="container">
                  <div class="row">
                    <div class="banner-text al-left pos-left dark">
                      <div class="animated fadeInRight">
                        <h2 class="ucap">
                          PROVEEDOR LÍDER DE SOLUCIONES INDUSTRIALES
                        </h2>
                        <p></p>
                        <div class="banner-cta">
                          <a class="btn"  href="/construccion">Leer Más</a>
                          <a class="btn btn-alt btn-outline"  href="/cotizacion">Contactanos</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="item">
            <!-- Set the second background image using inline CSS below. -->
            <div
              class="fill"
              style="background-image: url('img/mecanico.jpg')">
              <div class="banner-content">
                <div class="container">
                  <div class="row">
                    <div class="banner-text al-left pos-left light">
                      <div class="animated fadeInRight">
                        <h2 class="ucap">
                          SOMOS EQUIPO <br/>DE PROFESIONALES
                        </h2>
                        <div class="banner-cta">
                          <a class="btn" routerLink="/construccion">Leer Más</a>
                          <a class="btn btn-light btn-outline" routerLink="/cotizacion" routerLinkActive="router-link-active">Contactanos</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="item">
            <!-- Set the third background image using inline CSS below. -->
            <div
              class="fill"
              style="background-image: url('img/construccion2.jpg');">
              <div class="banner-content">
                <div class="container">
                  <div class="row">
                    <div class="banner-text al-left pos-left dark">
                      <div class="animated fadeInRight">
                        <h2 class="ucap">
                            We are team of the professionals
                        </h2>
                        <div class="banner-cta">
                          <a class="btn" routerLink="/construccion">Leer Más</a>
                          <a class="btn btn-alt btn-outline" routerLink="/cotizacion" routerLinkActive="router-link-active">Contactanos</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Left and right controls -->
        <a
          class="left carousel-control"
          href="#slider"
          role="button"
          data-slide="prev"
        >
          <span
            class="glyphicon glyphicon-chevron-left"
            aria-hidden="true"
          ></span>
          <span class="sr-only">Previous</span>
        </a>
        <a
          class="right carousel-control"
          href="#slider"
          role="button"
          data-slide="next"
        >
          <span
            class="glyphicon glyphicon-chevron-right"
            aria-hidden="true"
          ></span>
          <span class="sr-only">Next</span>
        </a>
      </div>         
      <!-- #end Banner/Slider -->
    </header>
    <!-- End Header -->

    <!--Content -->
    <!-- Service Section -->
    <div class="gaps size-md"></div> 
    <div class="section section-services section-pad">
        <div class="container">
            <div class="content row">
              <!-- Feature Row  -->
              <div class="feature-row feature-service-row row">
                <div class="col-md-4 col-sm-6 even first">
                  <!-- feature box -->
                  <div class="feature boxed">
                    <a href="/construccion">
                      <div class="fbox-photo">
                        <img src="img/obracivilprivada.jpg" alt="">
                      </div>
                    </a>
                    <div class="fbox-content">
                      <h3 class="center">Proyectos de construcción</h3>
                      <p>xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx</p>
                      <p><a href="/construccion" class="btn-link">Leer más</a></p>
                    </div>
                  </div>
                  <!-- End Feature box -->
                </div>
                <div class="col-md-4 col-sm-6 odd">
                  <!-- feature box -->
                  <div class="feature boxed">
                    <a href="/electricidad">
                      <div class="fbox-photo">
                        <img src="img/obracivilprivada.jpg" alt="">
                      </div>
                    </a>
                    <div class="fbox-content">
                      <h3 class="center">Proyectos de electricidad</h3>
                      <p>xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx</p>
                      <p><a href="/electricidad" class="btn-link">Leer más</a></p>
                    </div>
                  </div>
                  <!-- End Feature box -->
                </div>  
                <div class="col-md-4 col-sm-6 odd">
                  <!-- featured box -->
                  <div class="feature boxed">
                    <a href="/mecanico">
                      <div class="fbox-photo">
                        <img src="img/obracivilprivada.jpg" alt="">
                      </div>
                    </a>
                    <div class="fbox-content">
                      <h3 class="center">Proyectos de mecánica</h3>
                      <p>xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx</p>
                      <p><a href="/mecanico" class="btn-link">Leer más</a></p>
                    </div>
                  </div>
                  <!-- End Feature box -->
                </div>
              </div>
          <!-- Feture Row  #end -->
            </div>
        </div>
    </div>
    <div class="gaps size-md"></div> 
    <!-- End Section -->

    <!--End Content -->

    <!-- Footer Widget-->
    <div class="footer-widget section-pad">
      <div class="container">
        <div class="row">
          <div class="widget-row row">
            <div class="footer-col col-md-6 col-sm-6 res-m-bttm">
              <!-- Each Widget -->
              <div class="wgs wgs-footer wgs-menu">
                <h5 class="wgs-title">Solutions</h5>
                <div class="wgs-content">
                  <ul class="menu col-md-5 npl">
                    <li><a href="#">Mechanical Engineering</a></li>
                    <li><a href="#">Civil Engineering</a></li>
                    <li><a href="#">Chemical Research</a></li>
                  </ul>
                  <ul class="menu col-md-5">
                    <li><a href="#">Material Science</a></li>
                    <li><a href="#">Power and Energy</a></li>
                    <li><a href="#">Oil and Gas</a></li>
                  </ul>
                </div>
              </div>
              <!-- End Widget -->
            </div>
            <div class="footer-col col-md-3 col-sm-6 res-m-bttm">
              <!-- Each Widget -->
              <div class="wgs wgs-footer wgs-menu">
                <h5 class="wgs-title">Links</h5>
                <div class="wgs-content">
                  <ul class="menu">
                    <li><a href="/">Inicio</a></li>
                    <li><a href="/nosotros">Nosotros</a></li>
                    <li><a href="/cotizacion" >Contactanos</a></li>
                  </ul>
                </div>
              </div>
              <!-- End Widget -->
            </div>
            <div class="footer-col col-md-3 col-sm-6">
              <!-- Each Widget -->
              <div class="wgs wgs-footer">
                <h5 class="wgs-title">Contact us</h5>
                <div class="wgs-content">
                  <p>
                    <strong>16 de Septiembre N°23, </strong><br />
                    San Miguel Contla Tlaxcala, <br />
                    C.P.90460
                  </p>
                  <p>
                    241 131 6391
                  </p>
                  <ul class="social">
                    <li><a href="#"><em class="fa fa-facebook" aria-hidden="true"></em></a></li>
                    <li><a href="#"><em class="fa fa-twitter" aria-hidden="true"></em></a></li>
                    <li><a href="#"><em class="fa fa-linkedin" aria-hidden="true"></em></a></li>
                  </ul>
                </div>
              </div>
              <!-- End Widget -->
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- End Footer Widget -->

    <!-- Copyright -->
    <div class="copyright">
      <div class="container">
        <div class="row">
          <div class="site-copy col-sm-7">
            <p>
              &copy; 2017 Industrial Company
              <span class="sep"> . </span> Licensed NI099999<span class="sep">
                .
              </span>
              <a href="#">Terms and Condition</a>
            </p>
          </div>
          <div class="site-by col-sm-5 al-right">
            <p>
              <a href="/login">Priminsa login&nbsp;&nbsp;</a>
               .&nbsp;&nbsp;&nbsp;Por
              <a href="https://www.facebook.com/AZKIT-106156194919597" target="_blank">Azkit.</a>
            </p>
          </div>
        </div>
      </div>
    </div>
    <!-- End Copyright -->

  <!-- Rreload Image for Slider -->
  	<div class="preload hide">
      <img alt="" src="img/construccion.jpg" />
      <img alt="" src="img/mecanico.jpg" />
      <img alt="" src="img/construccion2.jpg" />
    </div>
    <!-- End --> 

    <!-- Preloader !active please if you want -->
    <!-- <div id="preloader"><div id="status">&nbsp;</div></div> -->
    <!-- Preloader End -->

	<!-- JavaScript Bundle -->
    <script src="js/jquery.bundle.js"></script>
    <!-- Theme Script init() -->
    <script src="js/script.js"></script>
    <!-- End script -->
</body>
</html>

