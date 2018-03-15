<?php
mb_internal_encoding("UTF-8");
header("Content-type: text/html; charset=UTF-8");
include("common/includes.php");
  $categoriesModel = new ModelCategories();
  $categories = $categoriesModel->getCategories();
  $subcategories = $categoriesModel->getSubcategories();
?>
<!DOCTYPE html>
<html lang="en">
<?php include("common/headerIndex.php");?>
<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">
<div id="preloader">
  <div id="status"> <img src="img/preloader.gif" height="64" width="64" alt=""> </div>
</div>
<!-- Navigation --> 
<?php include("common/navbarIndex.php");?>

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
<?php include("common/footer.php");?>
</body>
</html>