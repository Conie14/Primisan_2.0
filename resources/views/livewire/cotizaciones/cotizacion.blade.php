<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="icon" href="image/favicon.png" type="image/png" sizes="16x16" />
  <link rel="stylesheet" href="css/vendor.bundle.css" />
  <link id="style-css" rel="stylesheet" href="css/style.css" />
  <script src="https://kit.fontawesome.com/7c0f08b5a4.js" crossorigin="anonymous"></script>
</head>
<body>
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
                <li><a href="/clientes">Clientes</a></li>
                <li><a href="/cotizacion">Contactanos</a></li>
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
                    <a href="/construccion">Proyectos de construcci??n</a>
                  </li>
                  <li>
                    <a href="/electricidad">Proyectos de electricidad</a>
                  </li>
                  <li>
                    <a href="/mecanico">Proyectos de mec??nica</a>
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

    <!-- Content -->
    <div class="section section-contents section-freequote section-pad">
		<div class="container">
			<div class="row">

				<div class="freequote-content row">

					<div class="quote-list col-md-8 res-m-bttm">
						<div class="quote-group">
							<h4 class="text-center">CONT??CTANOS AHORA</h4>
							<form id="quote-request" class="form-quote" action="form/quote-request.php" method="post">
								<div class="form-group row">
									<div class="form-field col-md-6 form-m-bttm">
										<input name="quote-request-name" type="text" placeholder="Nombre*" class="form-control required">
									</div>
									<div class="form-field col-md-6">
										<input name="quote-request-company" type="text" placeholder="Compa????a" class="form-control">
									</div>
								</div>
								<div class="form-group row">
									<div class="form-field col-md-6 form-m-bttm">
										<input name="quote-request-email" type="email" placeholder="Correo*" class="form-control required email">
									</div>
									<div class="form-field col-md-6">
										<input name="quote-request-phone" type="text" placeholder="Telefono*" class="form-control required">
									</div>
								</div>
								<div class="form-group row">
									<div class="form-field col-md-6">
										<p>Selecciona servicio u Proyecto</p>
										<select name="quote-request-reach">
											<option value="">Servicio</option>
											<option value="Construcci??n">Construcci??n</option>
											<option value="Electricidad">Electricidad</option>
											<option value="Mec??nica">Mec??nica</option>
										</select>
									</div>
									<div class="form-field col-md-6">
										<p>Servicios</p>
										<select name="quote-request-hear">
											<option value="">Seleccione una opci??n</option>
											<option value="S1">Proyectos Mecatr??nicos y de Automatizaci??n.</option>
											<option value="S2">Cumplimientos y Tramites para CFE / UVIE: CODIGO RED</option>
											<option value="S3">Programas de Mantenimiento Preventivo y Correctivo.</option>
											<option value="S4">Montaje El??ctrico y Mec??nico de Maquinaria</option>
                      <option value="S5">Reparaciones Electr??nicas: Tarjetas, Inversores, Controles.</option>
                      <option value="S6">Retrofits de Tableros de Control.</option>
                      <option value="S7">Programaci??n de PLC??s y Pantallas</option>
                      <option value="S8">Retrofits y Aplicaciones de Sistemas Servo Motion</option>
                      <option value="S9">Programaci??n e Instalaci??n de Controles e Inversores Vectoriales LC y Control de Proceso e Instrumentaci??n</option>
                      <option value="S10">Dise??o, Armado e Instalaci??n de Tableros de Control, Distribuci??n, CCM??S</option>
                      <option value="S11">Instalaci??n y Mantenimiento de Transformadores</option>
                      <option value="S12">Instalaci??n de L??neas de Baja, Mediana y Alta Tensi??n</option>
                      <option value="S13">Instalaci??n y Mantenimiento de Alumbrado P??blico</option>
                      <option value="S14">Estudio de Calidad de la Energ??a</option>
                      <option value="S15">Dise??o, Especificaci??n e Instalaci??n de Barreras Cortafuego</option>
                      <option value="S16">Dise??o / Venta de Maquinaria y Equipo para la Industria Manufacturera</option>
                      <option value="S17">Dise??o e Instalaci??n de Sistema de Tierras y Pararrayos</option>
                      <option value="S18">Pintura, Soldadura - Pailer??a, Tablaroca, Aluminio, Conservaci??n a Edificios</option>
                      <option value="S19">Impermeabilizaci??n de Loza, Techo, Muros</option>
                      <option value="S20">Fabricaci??n de Tuber??a, Tolvas, Tanques, Tina, etc. en Acero Inoxidable</option>
                      <option value="S21">nstalaciones El??ctricas, Hidr??ulicas</option>
                      <option value="S22">Techumbres, Estructuras</option>
                      <option value="S23">Construcci??n en general</option>
											<option value="Others">Otros</option>
										</select>
									</div>
								</div>
								<div class="form-group row">
									<div class="form-field col-md-12">
                      <p>Mensaje</p>
                      <textarea name="quote-request-message" placeholder="" class="txtarea form-control required"></textarea>
                  </div>
                </div>
                <input type="text" class="hidden" name="form-anti-honeypot" value="">
                <div class="col text-center">
                  <button type="submit" class="btn center">Enviar</button>
                </div>
                <div class="form-results"></div>
							</form>
						</div>
					</div>

					<div class="contact-details col-md-3">
						<p class="text-center">Oficina principal y Taller</p>
						<ul class="contact-list">
							<li><em class="fa fa-map" aria-hidden="true"></em>
								<span>16 de Septiembre N??23, <br>San Miguel Contla Tlaxcala, <br>C.P.90460</span>
							</li>
							<li><em class="fa fa-phone" aria-hidden="true"></em>
								<span>241 131 6391</span>
							</li>
							<li><em class="fa fa-envelope" aria-hidden="true"></em>
								<span><a href="#">priminsa@gmail.com</a></span>
							</li>
							<li>
								<em class="fa fa-clock-o" aria-hidden="true"></em><span></span>
							</li>
						</ul>
					</div>

				</div>
			</div>
		</div>
	</div>
	<!-- End Content -->

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
                    <strong>16 de Septiembre N??23, </strong><br />
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