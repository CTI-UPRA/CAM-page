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
	<title>CAM &mdash; Projects</title>
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

    <style>
        .dropbtn {
    background-color: transparent;
    color: #999A9B;
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
                            <li class="active"><a href="projects.php">Projects</a></li>
                          <div class="dropdown-content">
                            <a href="apps.php#lobo">Pregunta Lobo</a>
                            <a href="apps.php#stem">Stem Apps</a>
                            <a href="apps.php#guarida">Guarida</a>
                          </div>
                        </div>
                        <li><a href="gallery.php#wowslider-container1">Gallery</a></li>
                        <li><a href="courses.php">Courses</a></li>
						<li><a href="about2.php">About Us</a></li>
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
							<h1>Our Projects</h1>
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
							<h1 id="activo">Active Projects</h1>
						</div>
					</div>
				</div>
			</div>
		</div>
                <br>
				<div class="col-md-4 animate-box">
					<a href="apps.php#lobo"><div class="project-grid" style="background-image:url(images/preguntalobo3.png); width: 350px; height: 300px; ">
						<div class="desc">
							<span>Application</span>
                            <h4>Pregunta Lobo</h4>
						</div>
					</div></a>
				</div>
                <div class="col-md-4 animate-box">
					<a href="apps.php#stem"><div class="project-grid" href="stemapp.php" style="background-image:url(images/stem2.png); width: 350px; height: 300px;">
						<div class="desc">
							<span>Application</span>
							<h4>STEM Apps</h4>
						</div>
					</div></a>
				</div>
                <div class="col-md-4 animate-box">
					<a href="apps.php#calendar"><div class="project-grid" style="background-image:url(images/uCalendar.png); width: 350px; height: 300px;">
						<div class="desc">
							<span>Application</span>
							<h4>A Mobile Calendar App for UPRA</h4>
						</div>
                    </div></a>
				</div>
                <div class="row">
                <div class="col-md-4 top_box1">
                  <a href="apps.php#guarida"><div class="col-md-4 animate-box">
					<div class="project-grid" style="background-image:url(images/guarida1.jpg); width: 350px; height: 300px;">
						<div class="desc">
							<span>Application</span>
							<h4>La Guarida</h4>
						</div>
					</div>
				</div>
                      </a>
                    </div>
                      </div>
                </div>

		<div class="overlay"></div>
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center">
					<div class="display-t">
						<div class="display-tc animate-box" data-animate-effect="fadeIn">
							<h1>Past Project</h1>
						</div>
					</div>
				</div>
			</div>
		</div>
            <br>
            <div class="row">
            <div class="col-md-4 animate-box">
                <div class="col-md-4 animate-box">
					<div class="project-grid" style="background-image:url(images/Music_System.jpg); width: 350px; height: 300px;">
						<div class="desc">
							<span>Application</span>
							<h4>Mobile Social Music System</h4>
						</div>
					</div>
				</div>
					<div class="project-grid" style="background-image:url(images/mi-SIS.jpg); width: 350px; height: 300px;">
						<div class="desc">
							<span>Application</span>
							<h4>mi-SIS: Facilitando la Matrícula</h4>
						</div>
					</div>
				</div>
				<div class="col-md-4 animate-box">
					<div class="project-grid" style="background-image:url(images/ProfeScore.jpg); width: 350px; height: 300px;">
						<div class="desc">
							<span>Application</span>
							<h4>Profe Score</h4>
						</div>
					</div>
				</div>
                <div class="col-md-4 animate-box">
					<div class="project-grid" style="background-image:url(images/nlp.jpg); width: 350px; height: 300px;">
						<div class="desc">
							<span>Application</span>
							<h4>Natural Language Processing</h4>
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
	</div>

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
