<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
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
              <li><a href="/servicios">SERVICIOS</a></li>
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
                    <a href="/mecanica">Proyectos de mecánica</a>
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
    </header>
    <!-- End Header -->
      <!-- Banner -->
      <div class="banner banner-static">
        <div class="container">
          <div class="content row">        
            <div class="imagebg">
              <img src="img/banner.jpg" alt="">
            </div>
          </div>
        </div>
      </div>
      <br>
      <br>
		  <!-- End Banner -->
      <h1> <center>NUESTROS SERVICIOS ACTUALES</center></h1>
    <!-- Project Section -->
    <div class="section section-projects section-pad">
      <div class="container">
        <div class="content row">
          <!-- Projects - Filter Menu -->
          <div class="clear"></div>
          <div class="gallery-lists gallery-project-lists filter-menu text-center">
              <ul class="list">
                  <li class="active" data-filter="all">All</li>
                  <li data-filter="1">Energy</li>
                  <li data-filter="2">Oil and Gas</li>
                  <li data-filter="3">Mining</li>
                  <li data-filter="4">Welding</li>
              </ul>
          </div>
          <!-- Projects Filter section (!required 'gallery-filter' class name in gallery & also filter-menu section above) -->
          <div class="gallery gallery-filter gallery-project gallery-filled project-morden with-caption hover-fade">
            <ul class="photos-list col-x4">
              <li class="filtr-item" data-category="1">
                <div class="photo">
                  <img src="img/obracivilprivada.jpg" alt="" />
                  <div class="photo-link">
                    <span class="links">
                        <a class="btn more-link" href="/construccion">View Projects</a>
                    </span>
                  </div>
                </div>
                <div class="photo-caption">
                  <a href="/servicio">
                    <h4>Altria Warehouse Complex</h4>
                  </a>
                </div>
              </li>
              <li class="filtr-item" data-category="2">
                <div class="photo">
                  <img src="img/obracivilprivada.jpg" alt="" />
                  <div class="photo-link">
                    <span class="links">
                      <a class="btn more-link" href="/construccion">View Projects</a>
                    </span>
                  </div>
                </div>
                <div class="photo-caption">
                  <a href="/servicio">
                    <h4>Balko Wind Power</h4>
                  </a>
                </div>
              </li>
              <li class="filtr-item" data-category="3">
                <div class="photo">
                  <img src="img/obracivilprivada.jpg" alt="" />
                  <div class="photo-link">
                    <span class="links">
                      <a class="btn more-link" href="/construccion">View Projects</a>
                    </span>
                  </div>
                </div>
                <div class="photo-caption">
                  <a href="/servicio">
                    <h4>Apollo Hill Project</h4>
                  </a>
                </div>
              </li>
              <li class="filtr-item" data-category="3">
                <div class="photo">
                  <img src="img/obracivilprivada.jpg" alt="" />
                  <div class="photo-link">
                    <span class="links">
                      <a class="btn more-link" href="/construccion">View Projects</a>
                    </span>
                  </div>
                </div>
                <div class="photo-caption">
                  <a href="/servicio">
                    <h4>Osage Bio Energy Plants</h4>
                  </a>
                </div>
              </li>
              <li class="filtr-item" data-category="4">
                <div class="photo">
                  <img src="img/obracivilprivada.jpg" alt="" />
                  <div class="photo-link">
                    <span class="links">
                      <a class="btn more-link" href="/construccion">View Projects</a>
                    </span>
                  </div>
                </div>
                <div class="photo-caption">
                  <a href="/servicio">
                    <h4>Rocky Forge Refinary</h4>
                  </a>
                </div>
              </li>
              <li class="filtr-item" data-category="1, 3">
                <div class="photo">
                  <img src="img/obracivilprivada.jpg" alt="" />
                  <div class="photo-link">
                    <span class="links">
                      <a class="btn more-link" href="/construccion">View Projects</a>
                    </span>
                  </div>
                </div>
                <div class="photo-caption">
                  <a href="/servicio">
                    <h4>Mingo Village Mining</h4>
                  </a>
                </div>
              </li>

              <li class="filtr-item" data-category="4">
                <div class="photo">
                  <img src="img/obracivilprivada.jpg" alt="" />
                  <div class="photo-link">
                    <span class="links">
                      <a class="btn more-link" href="/construccion">View Projects</a>
                    </span>
                  </div>
                </div>
                <div class="photo-caption">
                  <a href="/servicio">
                    <h4>First Freedom Center</h4>
                  </a>
                </div>
              </li>
              <li class="filtr-item" data-category="2">
                <div class="photo">
                  <img src="img/obracivilprivada.jpg" alt="" />
                  <div class="photo-link">
                    <span class="links">
                      <a class="btn more-link" href="/construccion">View Projects</a>
                    </span>
                  </div>
                </div>
                <div class="photo-caption">
                  <a href="/servicio">
                    <h4>Branders Bridge Improvement</h4>
                  </a>
                </div>
              </li>
            </ul>
          </div>
          <!-- Project Gallery #end -->

            </div>
        </div>
    </div>
	  <!-- End Section -->

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
      <img alt="" src="img/construccion.jpg" />
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