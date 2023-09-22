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

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>
<body>

    <?php
    include 'includePHP\giratorio.php';
    include 'includePHP\barrasuperior.php';
    include 'includePHP\navbar.php';
    ?>


     <!-- Inicio Carrusel -->
     <div class="container-fluid px-0 mb-5">
        <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100 sistemaDeVueloNoTripuladoImagen" src="img\controldeacceso.png" alt="Image">
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row d-flex align-items-start flex-column">
                                <div  class=" col-lg-8 text-start textoControlDeAcceso">
                                    <h1 class="display-1 text-white mb-5 animated slideInRight col-lg-6 prueba">Control de acceso</h1>
                                    <p class="text-center">El control de acceso consiste en la verificación de si una entidad solicitando acceso a un recurso tiene los derechos necesarios para hacerlo.​Un control de acceso ofrece la posibilidad de acceder a recursos físicos o lógicos.</p>
                                   
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
          
            </div>
            
            <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#header-carousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <!-- Fin Carrusel -->     


    









    <?php


include 'includePHP\libreriajavascript.php';
include 'includePHP\footer.php';
include 'includePHP\copyright.php';

?>
    

    
</body>

</html>




   

    
    

    