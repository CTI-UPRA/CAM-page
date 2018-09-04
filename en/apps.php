<!DOCTYPE HTML>
<html>
	<head>
        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-113788886-1"></script>
        <script>
              window.dataLayer = window.dataLayer || [];
              function gtag(){dataLayer.push(arguments);}
              gtag('js', new Date());

              gtag('config', 'UA-113788886-1');
        </script>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" href="/images/cam.png">
	<title>CAM&mdash; Projects</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Undergraduate teaching and research laboratory, for the development of mobile applications system"/>
	<meta name="keywords" content="Mobile Development, Research, Among others ..." />
	<meta name="author" content="gettemplates.co" />

	<!--
	//////////////////////////////////////////////////////

	FREE HTML5 TEMPLATE
	DESIGNED & DEVELOPED by FreeHTML5.co

	Website: 		http://freehtml5.co/
	Email: 			info@freehtml5.co
	Twitter: 		http://twitter.com/fh5co
	Facebook: 		https://www.facebook.com/fh5co

	//////////////////////////////////////////////////////
	 -->

  	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<!-- <link href='https://fonts.googleapis.com/css?family=Work+Sans:400,300,600,400italic,700' rel='stylesheet' type='text/css'> -->

	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">
	<!-- Theme style  -->
	<link rel="stylesheet" href="css/style.css">

	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->
        <meta name="viewport" content="width=device-width, initial-scale=1">
<style>
.dropbtn {
    background-color: transparent;
    color: 999A9B;
    padding: 16px;
    font-size: 16px;
    border: none;
}

.dropdown {
    position: relative;
    display: inline-block;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f1f1f1;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
}

.dropdown-content a:hover {background-color: #ddd}

.dropdown:hover .dropdown-content {
    display: block;
}

.dropdown:hover .dropbtn {
    background-color: #2874A6;
    color: #fff;

}
</style>


	</head>
	<body>

	<div class="fh5co-loader"></div>

	<div id="page">
		<nav class="fh5co-nav" role="navigation">
		<div class="container">
			<div class="row">
				<div class="col-xs-2">
				<a href="index.php">
                    <img src="images/cam.png" style="height:50px;">
                </a></div>
				<!--Container con referencias a las diferentes páginas, especifica la página activa-->
				<div class="col-xs-10 text-right menu-1">
					<ul>
						<!--<li><a href="index.php">Home</a></li>-->
						<!--<li><a href="proyectos.php">Proyectos</a></li>-->
                        <div class="dropdown">
                            <li><a href="projects.php">Projects</a></li>
                          <div class="dropdown-content">
                            <a href="apps.php#lobo">Pregunta Lobo</a>
                            <a href="apps.php#stem">Stem Apps</a>
                            <a href="apps.php#guarida">Guarida Lobo</a>
                          </div>
                        </div>
                        <li><a href="gallery.php#wowslider-container1">Gallery</a></li>
                        <li><a href="courses.php">Courses</a></li>
						<li><a href="about.php">About Us</a></li>
							<li><a href="bio.php">Bio</a></li>
						<li><a href="contact.php">Contact Us</a></li>
					</ul>
				</div>
			</div>
		</div>
	</nav>

    <!--Container animado con el logo y nombre del Centro de Aplicaciones Móviles del UPRA -->
	<header id="fh5co-header" class="fh5co-cover fh5co-cover-sm" role="banner" style="background-image:url(images/dreamstime_xl_50247533.jpg);">
		<div class="overlay"></div>
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center">
					<div class="display-t">
						<div class="display-tc animate-box" data-animate-effect="fadeIn">
                            <!--<img src="images/proj.png" height="300" width="300">-->
							<h1>Applications</h1>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>

	<div id="fh5co-project">
		<div class="container">
			<div class="row">
                <div class="overlay"></div>
                <div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center">
					<div class="display-t">
						<div class="display-tc animate-box" data-animate-effect="fadeIn">
							<h1 id="lobo">Pregunta Lobo</h1>
						</div>
					</div>
				</div>
			</div>
		</div>
    <br>

    	<div style="text-align: center">
        <img src="images/pregunt_lobo_android.png" height="500" width="300">
        <img src="images/pregunta_lobo_ios.jpg" height="500" width="300">
      </div>
      <br>
      <div class="row">
        <div style="text-align: center">
        	<div style="text-align: center">
        		<p>Pregunta Lobo is the virtual assistant of the UPRA community <br> where users can get information related to UPRA  using  an <br>interface in natural language, in addition to an <br>interactive map with information on each location  <br>and an informative list of the student organizations. </p>
        	</div>
      </div>
      <br>
			<div class="container">
				<div class="row">
					<div class="container">
						<div class="row">
							<div class="col-md-8 col-md-offset-2 text-center">
								<div class="display-t">
									<div class="display-tc animate-box" data-animate-effect="fadeIn">
										<h2 id="calendar">UPRA Calendar</h2>
									</div>
								</div>
							</div>
						</div>
					</div>
					<br>

					<div style="text-align: center">
						<img src="images/plc.png" height="500" width="300">
						<img src="images/plc2.png" height="500" width="300">
					</div>
					<br>
					<div class="row">
						<div style="text-align: center">
							<div class="col-sm-12">
								<div style="text-align: center">
									<p>  This application will provide students a dynamic calendar of <br>
										   events of UPRA. The user can choose and filter the information<br>
										   and relevant notifications. The application also allows the user <br>
										   to find information about upcoming dates and save them on your <br>
										   Mobile calendar. </p>
								</div>
							</div>
					  </div>
				  </div>
				</div>
			</div>

			<div class="row">
					<div style="text-align: center">
							<h3>Sponsors</h3>
							<img src="images/banner.jpg" height="50px" width="200px">
							<p>This project is partially sponsored by the <br> <a href="http://upra.edu/cic/">Research and Creation Center (CIC)</a> of UPRA <br>  and the <a href="https://prlsamp.rcse.upr.edu/" >Puerto Rico Louis Stokes Alliance <br> For Minority Participation (PR-LSAMP)</a></p>
					</div>
					<div style="text-align: center">
							<p><a href="https://itunes.apple.com/us/app/pregunta-lobo/id1111304803?mt=8" target="_blank">
								<img id="icon1" src="Icons/badge.svg" ></a>

							<a href="https://play.google.com/store/apps/details?id=com.upra.preguntalobo&hl=es_41" target="_blank">
								<img id="icon2" src="Icons/en_badge_web_generic.png" style="width:155px; height:60px"></a></p>
					</div>
			</div>
			<div class="row">
					<div style="text-align: center">
							<h3>Poster</h3>
							<a href="http://cam.upra.edu/en/images/preguntaLobo.png" target="_blank">
								<img src="images/preguntaLobo.png" height="220px" width="250px" border="0" align="center" src="/">
							</a>
					</div>
			</div>
      <br>
    <div class="container">
			<div class="row">
        <div class="container">
					<div class="row">
						<div class="col-md-8 col-md-offset-2 text-center">
							<div class="display-t">
								<div class="display-tc animate-box" data-animate-effect="fadeIn">
									<h1 id="stem">STEM Apps</h1>
								</div>
							</div>
						</div>
					</div>
				</div>
      	<br>

              <div style="text-align: center">
                <img src="images/Biology%20Dogma_2017-05-18-16-30-10.png" height="300" width="400">
                <img src="images/Biology%20Dogma_2017-05-18-16-28-55.png" height="300" width="400">
              </div>
              <br>
              <div class="row">
                <div style="text-align: center">
                  <div class="col-sm-6">
                    <div style="text-align: right">
                      <p>The objective of this research is <br>
                         to create mobile applications for <br>
                         students and professors of the  </br>
                         areas of Science, Technology, <br>
                     </p>
										</div>
                  </div>
                </div>
              	<div class="col-sm-8-push">
                    <p>Engineering and Math (STEM). </br>
											This project provides students in </br>
											Computer science the oportunity to </br>
											work with students of other STEM areas.<br>
						    </div>
              </div>
              <div class="row">
                <div style="text-align: center">
                  <h3>Students Blog</h3>
                  	<a href="https://yessebellcreu.wordpress.com/">Yessebell Ríos Blog</a><br>
                  	<a href="https://bryanyomarcreu.wordpress.com/">Bryan Hernández Blog</a><br>
                  	<a href="https://elliotlopezblog.wordpress.com/category/collaborative-research-experience-for-undergraduates/">Elliot López Blog</a>
                </div><br>
                <div style="text-align: center">
                  <h3>Sponsors</h3>
                  	<img src="images/banner.jpg" height="50px" width="200px">
                  	<img src="images/cra_w.png" height="50px" width="200px">
                    <p>This project is partially sponsored by the <br> <a href="http://upra.edu/cic/">Research and Creation Center (CIC)</a> of UPRA, <br>  the <a href="https://cra.org/cra-w/" >Computing Research Association’s Committee on <br> the Status of Women in Computing Research (CRA-W) </a> <br> and the <a href="https://prlsamp.rcse.upr.edu/" >Puerto Rico Louis Stokes Alliance <br> For Minority Participation (PR-LSAMP)</a></p>
                </div>
                <div style="text-align: center">
                   <p><a href="https://itunes.apple.com/us/app/biology-dogma/id1220523791?mt=8" target="_blank">
                   <img id="icon1" src="Icons/the_App_Store_Badge.svg" ></a>

                   <a href="https://play.google.com/store/apps/details?id=org.nativescript.dnanativescript&hl=es_41" target="_blank">
                   <img id="icon2" src="Icons/en_badge_web_generic.png" style="width:155px; height:60px"></a></p>
                </div>
            </div>
          </div>
        </div>
        <br>
        <div class="container">
			<div class="row">
                <div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center">
					<div class="display-t">
						<div class="display-tc animate-box" data-animate-effect="fadeIn">
							<h1 id="guarida">Guarida Lobo</h1>
						</div>
					</div>
				</div>
			</div>
		</div>
    <br>
		<div style="text-align: center">
						<img src="images/guaridaLobo4.jpeg" height="500" width="300">
						<img src="images/guaridaLobo3.jpeg" height="500" width="300">
		</div>
        <br>
        <div class="row">
          <div style="text-align: center">
            <div class="col-sm-6">
              <div style="text-align: right">
                <p> The objective of this  research<br>
                    is to create a mobile application to <br>
                    help students find available study <br>
                    rooms in the University's library<br>
                    and reserve them.  </p>
              </div>
            </div>
          </div>
            <div class="col-sm-8-push">
              <p> By studying students behavior <br>
                  and common problems that may occur<br>
                  during the reservations process <br>
                  we can create a fast and friendly interface<br>
                  for the user, to counteract negative experiences. </p>
						</div>
         </div>
    	 </div>
    </div>
                </div>
            </div>
        </div>
    </div>
 </div>
	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
	</div>

	 <!--Container de footer que incluye la información de quien creo la página, el acerca de y contactános-->
	 <footer id="fh5co-footer" role="contentinfo">
		<div class="overlay"></div>
		<div class="container">
			<div class="row row-pb-md">
				<div class="col-md-3 fh5co-widget">
				<div id="copyright" class="container">
				        <div style="text-align: center">
							<p>&copy; Copyright 2017 CAM, <a href="contact.php">Webmaster: Leilanie Morales</a></p>
														<p>Mobile Applications Center, Computer Science Department,
														University of Puerto Rico in Arecibo</p>
															 <p><a href="http://upra.edu/computadoras/index.html"><img src="images/ccom.jpg"></a>
															 <a href="http://upra.edu/"><img src="images/upra.png"></a></p>
				        </div>
					</div>
				</div>
			</div>
		</div>
	</footer>

    <!--Librerías necesarias para correr la página-->
	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Main -->
	<script src="js/main.js"></script>
	</body>
</html>
