<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Rocktech</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500;600&family=Rubik:wght@500;600;700&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css\cdnjs.cloudflare.com_ajax_libs_animate.css_4.1.1_animate.min.css">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>
<body class="sistemanotripuladobody">
 

    <?php
    include 'includePHP\giratorio.php';
    include 'includePHP\barrasuperior.php';
    include 'includePHP\navbar.php';
    
    
    ?>

<div id="particles-js">

</div>
        <!-- Inicio Carrusel -->
        <div class="container-fluid px-0 mb-5">
        <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100 sistemaDeVueloNoTripuladoImagen" src="img\sistemadealarmawallpaper.jpg" alt="Image">
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row d-flex align-items-start flex-column">
                                <div  class="col-lg-8 text-start">
                                    <h1 class="display-1 mb-5 animated slideInRight sistemaDeVueloNoTripulado col-lg-8 text-center"><br><br><br> <span class="typed"></span></h1>
                                
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
          
            
            
            <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel" data-bs-slide="prev">
                
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#header-carousel" data-bs-slide="next">
                
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    </div>
    <!-- Fin Carrusel -->
   <br>
   <br>
   <br>
   <br>

    <div class="container">
        <div  class="row">
          <h1  class="text-center slideInRight">¿Por qué poner en marcha un sistema de seguridad ALARMA?</h1>
        </div>
        <br>
        <br>
        <br>
        <br>
        <div class="card mb-12" style="max-width: 1540px;">
  <div class="row g-0">
    <div class="col-md-6 ">
      <img src="img\KEYPADALARM.jpg" class="img-fluid rounded-start droneeeee" alt="...">
    </div>
    <div class="col-md-6">
      <div class="card-body">
        
        <p class="card-text"><strong style="color:#02245b;font-size:17px;">1-Protección contra robos e intrusiones:</strong> Los sistemas de alarma son una medida efectiva para disuadir a los ladrones e intrusos. Cuando se activa una alarma, suenan sirenas o se envían notificaciones a las autoridades, lo que puede evitar robos y daños a la propiedad. <br><br>
        <strong style="color:#02245b;font-size:17px;">2-Reducción de pérdidas económicas:</strong> Al detectar rápidamente robos, incendios u otras emergencias, los sistemas de alarma pueden ayudar a minimizar las pérdidas económicas asociadas con estos eventos. <br><br>
        <strong style="color:#02245b;font-size:17px;">3-Notificaciones y alertas personalizables:</strong> Los sistemas de alarma suelen permitir la personalización de notificaciones y alertas, lo que significa que los usuarios pueden recibir notificaciones específicas de eventos que les interesen. </p>
        
      </div>
    </div>
  </div>
</div>
</div>
        
    <br><br><br><br><br>
    <br><br><br><br><br>

<script src="https://unpkg.com/typed.js@2.0.16/dist/typed.umd.js"></script>
<script src="js\sistema-de-alarmas.js"></script>

<script src="js\particles.min.js"></script>
   <script>
    particlesJS(
       
{
  "particles": {
    "number": {
      "value": 30,
      "density": {
        "enable": true,
        "value_area": 800
      }
    },
    "color": {
      "value": "2a5990"
    },
    "shape": {
      "type": "circle",
      "stroke": {
        "width": 0,
        "color": "#000000"
      },
      "polygon": {
        "nb_sides": 5
      },
      "image": {
        "src": "img/github.svg",
        "width": 100,
        "height": 100
      }
    },
    "opacity": {
      "value": 0.5,
      "random": false,
      "anim": {
        "enable": false,
        "speed": 1,
        "opacity_min": 0.1,
        "sync": false
      }
    },
    "size": {
      "value": 3,
      "random": true,
      "anim": {
        "enable": false,
        "speed": 40,
        "size_min": 0.1,
        "sync": false
      }
    },
    "line_linked": {
      "enable": true,
      "distance": 150,
      "color": "#2a5990",
      "opacity": 0.4,
      "width": 1
    },
    "move": {
      "enable": true,
      "speed": 6,
      "direction": "none",
      "random": false,
      "straight": false,
      "out_mode": "out",
      "bounce": false,
      "attract": {
        "enable": false,
        "rotateX": 600,
        "rotateY": 1200
      }
    }
  },
  "interactivity": {
    "detect_on": "canvas",
    "events": {
      "onhover": {
        "enable": true,
        "mode": "repulse"
      },
      "onclick": {
        "enable": true,
        "mode": "push"
      },
      "resize": true
    },
    "modes": {
      "grab": {
        "distance": 400,
        "line_linked": {
          "opacity": 1
        }
      },
      "bubble": {
        "distance": 400,
        "size": 40,
        "duration": 2,
        "opacity": 8,
        "speed": 3
      },
      "repulse": {
        "distance": 200,
        "duration": 0.4
      },
      "push": {
        "particles_nb": 4
      },
      "remove": {
        "particles_nb": 2
      }
    }
  },
  "retina_detect": true
} 
    )
   </script>

    
    <?php


      include 'includePHP\libreriajavascript.php';
      include 'includePHP\footer.php';
      include 'includePHP\copyright.php';
    
    ?>



    
</body>

</html>




   

    
    

    