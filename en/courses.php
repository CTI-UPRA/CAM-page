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
	<title>CAM &mdash; Courses</title>
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
           table {
            font-family: Tahoma, Geneva, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        td, th {
            border: 1px solid #dddddd;
            text-align: center;
            padding: 8px;
        }

        tr:nth-child(even) {
            background-color: #A0D6F8;
        }

        tr:nth-child(odd) {
          background-color: #e3e3e3;
        }

      th.uppercase {
          text-transform: uppercase;
      }

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
                            <a href="apps.php#guarida">Guarida</a>
                          </div>
                        </div>
                        <li><a href="gallery.php#wowslider-container1">Gallery</a></li>
                        <li class="active"><a href="courses.php">Courses</a></li>
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
							<h1>Course Description</h1>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>

	<div id="fh5co-project">
		<div class="container">
			<div class="row">
                <?php
                  echo "<table border='3' class='stats' cellspacing='0'>

            <tr>
            <td class='hed' colspan='5' class='uppercase'><strong>Free Courses</strong></td>
              </tr>

             <tr>
                <th><strong>Code</strong></th>
                <th><strong>Title</strong></th>
                <th><strong>Credits</strong></th>
                <th><strong>Description</strong></th>
                <th><strong>Prerequisites </strong></th>
            </tr>";


              echo "<tr>";
                  echo "<td>" . "CCOM 4401" . "</td>";
                  echo "<td>" . "Mobile Applications Development". " "."" . "</td>";
                  echo "<td>" . "3" . "</td>";
                  echo "<td>" . "This course provides fundamental principles of the design and development of mobile applications. " . "</td>";
                  echo "<td>" . "CCOM 4005 and CCOM 3027 or C# Programming " . "</td>";
              echo "</tr>";

              //Fila 4, información persona #2
              echo "<tr>";
                  echo "<td>" . "CCOM 4420" . "</td>";
                  echo "<td>" . "Cloud Computing Applications " . "</td>";
                  echo "<td>" . "3" . "</td>";
                  echo "<td>" . "This course provides principles of design of software applications for ubiquos devices  connected to Web-based cloud computing systems.   " . "</td>";
                  echo "<td>" . "CCOM 4401 or CCOM 4019 " . "</td>";
              echo "</tr>";

              //Fila 5, información persona #3
              echo "<tr>";
                  echo "<td>" . "CCOM 4125" . "</td>";
                  echo "<td>" . "Artificial intelligence  " . "</td>";
                  echo "<td>" . "3 " . "</td>";
                  echo "<td>" . "Introduction to the concepts and techniques of Artificial Intelligence systems and their basic applications.  " . "</td>";
                  echo "<td>" . "CCOM 4006 and MATE 3026 " . "</td>";
              echo "</tr>";

              echo "<tr>";
                  echo "<td>" . "CCOM 3985 " . "</td>";
                  echo "<td>" . "Research undergraduate in computer science topics  " . "</td>";
                  echo "<td>" . "2" . "</td>";
                  echo "<td>" . "This course introduces all STEM disciplines students of computer science research process.  " . "</td>";
                  echo "<td>" . "Approval of the teacher " . "</td>";
              echo "</tr>";

              echo "<tr>";
                  echo "<td>" . "CCOM 4991 " . "</td>";
                  echo "<td>" . "Independent Study I " . "</td>";
                  echo "<td>" . "They vary  " . "</td>";
                  echo "<td>" . "Research and development of solutions to a problem of computer sciences, selected by the student and teacher alike. " . "</td>";
                  echo "<td>" . "12 approved credits in computer science, approved by the director of the Department.  " . "</td>";
              echo "</tr>";

            echo "<tr>";
                  echo "<td>" . "CCOM 4992 " . "</td>";
                  echo "<td>" . "Independent Study II " . "</td>";
                  echo "<td>" . "They vary " . "</td>";
                  echo "<td>" . "Continuation of CCOM 4991 " . "</td>";
                  echo "<td>" . "CCOM 4991 " . "</td>";
              echo "</tr>";

    echo "</table>";

    ?>





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
