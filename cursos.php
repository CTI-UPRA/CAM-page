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
	<title>CAM &mdash; Proyectos</title>
	<link rel="shortcut icon" href="images/cam.ico">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Laboratorio de enseñanza e investigación subgraduada, para el desarrollo de aplicaciones de sistemas móviles" />
	<meta name="keywords" content="Desarrollo Móvil, Investigaciones, Entre otras..." />
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
						<!-- <li><a href="index.php">Inicio</a></li> -->
						<!--<li><a href="proyectos.php">Proyectos</a></li>-->
                        <div class="dropdown">
                            <li><a href="proyectos.php">Proyectos</a></li>
                          <div class="dropdown-content">
                            <a href="apps.php#lobo">Pregunta Lobo</a>
                            <a href="apps.php#stem">Stem Apps</a>
                            <a href="apps.php#guarida">Guarida</a>
                          </div>
                        </div>
                        <li><a href="galeria.php#wowslider-container1">Galería</a></li>
                        <li class="active"><a href="cursos.php">Cursos</a></li>
						<li><a href="about.php">Sobre Nosotros</a></li>
						<li><a href="contact.php">Contáctanos</a></li>
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
							<h1>Descripción de Cursos</h1>
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
            <td class='hed' colspan='5' class='uppercase'><strong>Electivas Departamentales Relacionadas al CAM</strong></td>
              </tr>

             <tr>
                <th><strong>Codificación</strong></th>
                <th><strong>Título</strong></th>
                <th><strong>Créditos</strong></th>
                <th><strong>Descripción</strong></th>
                <th><strong>Pre-Requisitos</strong></th>
            </tr>";


              echo "<tr>";
                  echo "<td>" . "CCOM 4401" . "</td>";
                  echo "<td>" . "Desarrollo de Aplicaciones Móviles". " "."" . "</td>";
                  echo "<td>" . "3" . "</td>";
                  echo "<td>" . "Este curso provee principios fundamentales del diseño y desarrollo de aplicaciones móviles." . "</td>";
                  echo "<td>" . "CCOM 4005, y CCOM 3027 o Programación en C# " . "</td>";
              echo "</tr>";

              //Fila 4, información persona #2
              echo "<tr>";
                  echo "<td>" . "CCOM 4420" . "</td>";
                  echo "<td>" . "Cloud Computing Applications " . "</td>";
                  echo "<td>" . "3" . "</td>";
                  echo "<td>" . "El curso provee principios de diseño de aplicaciones de software para dispositivos ubiquos conectados a sistemas de computación en la nube basados en la red.  " . "</td>";
                  echo "<td>" . "CCOM 4401 o CCOM 4019 " . "</td>";
              echo "</tr>";

              //Fila 5, información persona #3
              echo "<tr>";
                  echo "<td>" . "CCOM 4125" . "</td>";
                  echo "<td>" . "Inteligencia Artificial " . "</td>";
                  echo "<td>" . "3 " . "</td>";
                  echo "<td>" . "Introducción a los conceptos y técnicas de los sistemas de Inteligencia Artificial y sus aplicaciones basicas. " . "</td>";
                  echo "<td>" . "CCOM 4006 y MATE 3026 " . "</td>";
              echo "</tr>";

              echo "<tr>";
                  echo "<td>" . "CCOM 3985 " . "</td>";
                  echo "<td>" . "Investigación Subgraduada en Tópicos de Ciencias de Cómputos " . "</td>";
                  echo "<td>" . "2" . "</td>";
                  echo "<td>" . "Este curso introduce a los estudiantes universitarios de todas las disciplinas de STEM en el proceso de investigación de las ciencias de cómputos. " . "</td>";
                  echo "<td>" . "Autorización del Profesor " . "</td>";
              echo "</tr>";

              echo "<tr>";
                  echo "<td>" . "CCOM 4991 " . "</td>";
                  echo "<td>" . "Estudio Independiente I " . "</td>";
                  echo "<td>" . "Varían " . "</td>";
                  echo "<td>" . "Investigación y desarrollo de soluciones para un problema de las ciencias de cómputos seleccionado tanto por el estudiante como por el profesor." . "</td>";
                  echo "<td>" . "12 creditos aprobados en Ciencias de Cómputos, aprobados por el director del departamento. " . "</td>";
              echo "</tr>";

            echo "<tr>";
                  echo "<td>" . "CCOM 4992 " . "</td>";
                  echo "<td>" . "Estudio Independiente II " . "</td>";
                  echo "<td>" . "Varían " . "</td>";
                  echo "<td>" . "Continuación de CCOM 4991 " . "</td>";
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
 														<p>Centro de Aplicaciones Móviles, Departamento de Ciencias de Computadoras,
 														Universidad de Puerto Rico en Arecibo</p>
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
