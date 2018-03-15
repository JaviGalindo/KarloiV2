<?php
mb_internal_encoding("UTF-8");
header("Content-type: text/html; charset=UTF-8");
include("includes.php");
  $categoriesModel = new ModelCategories();
  $categories = $categoriesModel->getCategories();
  $subcategories = $categoriesModel->getSubcategories();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Karloi Servicios</title>
<meta name="description" content="">
<meta name="author" content="">

<!-- Bootstrap -->
<link rel="stylesheet" type="text/css"  href="css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="fonts/font-awesome/css/font-awesome.css">

<!-- Stylesheet
    ================================================== -->
<link rel="stylesheet" type="text/css"  href="css/style.css">
<link rel="stylesheet" type="text/css" href="css/prettyPhoto.css">
<link rel="icon" href="img/icon-32x32.jpg" sizes="32x32">
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800,600,300' rel='stylesheet' type='text/css'>
<script type="text/javascript" src="js/modernizr.custom.js"></script>

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">
<div id="preloader">
  <div id="status"> <img src="img/preloader.gif" height="64" width="64" alt=""> </div>
</div>
<!-- Navigation --> 
<nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse"> <i class="fa fa-bars"></i> </button>
      <a class="navbar-brand page-scroll" href="#page-top"> <i class="fa fa-paper-plane-o"></i> </a> </div>
    
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
      <ul class="nav navbar-nav">
        <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
        <li class="hidden"> <a href="#page-top"></a> </li>
        <li> <a class="page-scroll" href="#works">Servicios</a> </li>
        <li> <a class="page-scroll" href="#about">Nosotros</a> </li>
        <li> <a class="page-scroll" href="#contact">Contacto</a> </li>
      </ul>
    </div>
    <!-- /.navbar-collapse --> 
  </div>
  <!-- /.container --> 
</nav>

<!-- Header -->
<div id="intro">
  <div class="intro-body">
    <div class="container">
      <div class="row">
        <div class="col-md-10 col-md-offset-1">
          <h1> Karloi<span class="brand-heading"> Servicios</span></h1>
          <p class="intro-text">Servicio integral de mantenimiento para su comunidad</p>
          <a href="#works" class="btn btn-default page-scroll">Más información</a> </div>
      </div>
    </div>
  </div>
</div>
<!-- Portfolio Section -->
<div id="works">
  <div class="container"> <!-- Container -->
    <div class="section-title text-center center">
      <h2>Nuestros Servicios</h2>
      <hr>
      <div class="clearfix"></div>
    </div>
    <div class="categories">
      <ul class="cat">
        <li>
          <ol class="type">
            <?php
              foreach ($categories as $value) {
                echo "<li><a href=\"#\" data-filter=\".{$value['keyword']}\" >{$value['name']}</a></li>";
              }
            ?>
          </ol>
        </li>
        <div class="clearfix"></div>
      </ul>
      <div class="clearfix"></div>
    </div>
    <div class="row">
      <div class="portfolio-items">
        <?php
            foreach ($subcategories as $value) {
              echo "<div class=\"col-xs-6 col-sm-6 col-md-3 col-lg-3 {$value['keyword']}\">
              <div class=\"portfolio-item\">
                <div class=\"hover-bg\"> <a href=\"img/portfolio/{$value['image']}\" title=\"{$value['description']}\" rel=\"prettyPhoto\">
                  <div class=\"hover-text\">
                    <h4>{$value['name']}</h4>
                  </div>
                  <img src=\"img/portfolio/{$value['image']}\" class=\"img-responsive\" alt=\"\"> </a> 
                </div>
              </div>
            </div>";
            }
        ?>

    </div>
  </div>
</div>
<!-- About Section -->
<div id="about">
  <div class="container">
    <div class="section-title text-center center">
      <h2>Nosotros</h2>
      <hr>
    </div>
    <div class="row">
      <div class="col-md-6">
        <div class="about-text">
          <h4>¿Quiénes somos?</h4>
          <p><strong>Karloi Servicios</strong> es una empresa joven, pero que atesora más de 10 años de experiencia en el sector de la Administración de Fincas.</p>
          <p>¿En qué nos diferenciamos? En nuestra calidad de servicio al cliente y servicio de diagnóstico y posterior feedback, pues hacen que nuestro cliente esté siempre informado de todo lo que acontece en referencia al servicio que nos solicita y es garantía segura de que cumpliremos todas las expectativas de nuestros clientes. </p>
          <p>Somos plenamente conscientes del importante y necesario equilibrio ADMINISTRACIÓN-EMPRESA-COMUNIDAD, por lo que no escatimamos en los recursos necesarios para dar la mejor respuesta y solución a los problemas que se presentan. ES NUESTRO DÍA A DÍA!</p>
          </div>
      </div>
      <div class="col-md-6">
        <div class="about-text">
          <p>Como empresa de confianza de nuestros clientes, nos adaptamos a su forma de trabajar como si de un guante se tratase: ¿partes de trabajo? ¿teléfono? ¿whatsapp? Forma de pago, financiación, plazos de ejecución… Lo que para nosotros es innegociable es la eficacia.</p>
          <p>En todo momento nuestro cliente está informado de cómo se encuentra su gestión: desde la primera respuesta de su petición, pasando por la coordinación total de los trabajos hasta el informe de finalización del servicio solicitado.</p>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Services Section -->
<!-- <div id="services" class="text-center">
  <div class="container">
    <div class="section-title center">
      <h2>Our Services</h2>
      <hr>
    </div>
    <div class="space"></div>
    <div class="row">
      <div class="col-md-3 col-sm-6">
        <div class="service"> <i class="fa fa-desktop"></i>
          <h3>Web Design</h3>
          <p>Lorem ipsum dolor sit amet placerat facilisis felis mi in tempus eleifend pellentesque natoque etiam.</p>
        </div>
      </div>
      <div class="col-md-3 col-sm-6">
        <div class="service"> <i class="fa fa-cogs"></i>
          <h3>Web Development</h3>
          <p>Lorem ipsum dolor sit amet placerat facilisis felis mi in tempus eleifend pellentesque.</p>
        </div>
      </div>
      <div class="col-md-3 col-sm-6">
        <div class="service"> <i class="fa fa-tablet"></i>
          <h3>App Design</h3>
          <p>Lorem ipsum dolor sit amet placerat facilisis felis mi in tempus eleifend pellentesque natoque etiam.</p>
        </div>
      </div>
      <div class="col-md-3 col-sm-6">
        <div class="service"><i class="fa fa-html5"></i>
          <h3>PSD to HTML5</h3>
          <p>Lorem ipsum dolor sit amet placerat facilisis felis mi in tempus eleifend pellentesque natoque.</p>
        </div>
      </div>
    </div>
    <div class="space"></div>
    <div class="row">
      <div class="col-md-3 col-sm-6">
        <div class="service"><i class="fa fa-wordpress"></i>
          <h3>WordPress</h3>
          <p>Lorem ipsum dolor sit amet placerat facilisis felis mi in tempus eleifend pellentesque natoque etiam.</p>
        </div>
      </div>
      <div class="col-md-3 col-sm-6">
        <div class="service"><i class="fa fa-bullhorn"></i>
          <h3>Marketing</h3>
          <p>Lorem ipsum dolor sit amet placerat facilisis felis mi in tempus eleifend pellentesque.</p>
        </div>
      </div>
      <div class="col-md-3 col-sm-6">
        <div class="service"><i class="fa fa-rocket"></i>
          <h3>Branding</h3>
          <p>Lorem ipsum dolor sit amet placerat facilisis felis mi in tempus eleifend pellentesque natoque etiam.</p>
        </div>
      </div>
      <div class="col-md-3 col-sm-6">
        <div class="service"><i class="fa fa-leaf"></i>
          <h3>Print Design</h3>
          <p>Lorem ipsum dolor sit amet placerat facilisis felis mi in tempus eleifend pellentesque natoque.</p>
        </div>
      </div>
    </div>
  </div>
</div> -->
<!-- Contact Section -->
<div id="contact" class="text-center">
  <div class="container">
    <div class="section-title center">
      <h2>Contáctanos</h2>
      <hr>
      <p>¿Tienes algún problema? ¿Hay algo que te preocupa? ¿Necesitas nuestra ayuda? Ponte en contacto con nosotros y en un breve espacio de tiempo contactaremos contigo.</p>
    </div>
    <div class="col-md-8 col-md-offset-2">
      <div class="col-md-4">
        <div class="contact-item"> <i class="fa fa-map-marker fa-2x"></i>
          <p>Calle Doctor Barberi, 1 local 2<br\>
            Palma de Mallorca, 07013</p>
        </div>
      </div>
      <div class="col-md-4">
        <div class="contact-item"> <i class="fa fa-envelope-o fa-2x"></i>
          <p>gestion@karloiservicios.com</p>
        </div>
      </div>
      <div class="col-md-4">
        <div class="contact-item"> <i class="fa fa-phone fa-2x"></i>
          <p> 665 22 27 50 <br>
            Horario: Lunes a viernes: 8:00 a 17:00</p>
        </div>
      </div>
      <div class="clearfix"></div>
    </div>
    <div class="col-md-8 col-md-offset-2">
      <form name="sentMessage" id="contactForm" novalidate>
        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              <input type="text" id="name" class="form-control" placeholder="Nombre" required="required">
              <p class="help-block text-danger"></p>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <input type="email" id="email" class="form-control" placeholder="Email" required="required">
              <p class="help-block text-danger"></p>
            </div>
          </div>
        </div>
        <div class="form-group">
          <textarea name="message" id="message" class="form-control" rows="4" placeholder="Mensaje" required></textarea>
          <p class="help-block text-danger"></p>
        </div>
        <div id="success"></div>
        <button type="submit" class="btn btn-default">Enviar mensaje</button>
      </form>
      <!-- <div class="social">
        <h3>Síguenos</h3>
        <ul>
          <li><a href="#"><i class="fa fa-facebook"></i></a></li>
        </ul>
      </div> -->
    </div>
  </div>
</div>
<div id="footer">
  <div class="container">
    <p>Copyright &copy; Karloi Servicios.</p>
  </div>
</div>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
<script type="text/javascript" src="js/jquery.1.11.1.js"></script> 
<!-- Include all compiled plugins (below), or include individual files as needed --> 
<script type="text/javascript" src="js/bootstrap.js"></script> 
<script type="text/javascript" src="js/SmoothScroll.js"></script> 
<script type="text/javascript" src="js/jquery.prettyPhoto.js"></script> 
<script type="text/javascript" src="js/jquery.isotope.js"></script> 
<script type="text/javascript" src="js/jquery.parallax.js"></script> 
<script type="text/javascript" src="js/jqBootstrapValidation.js"></script> 
<script type="text/javascript" src="js/contact_me.js"></script> 

<!-- Javascripts
    ================================================== --> 
<script type="text/javascript" src="js/main.js"></script>
</body>
</html>