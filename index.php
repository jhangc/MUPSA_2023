<?php
include_once "header.php";

?>
<!-- body -->

<body class="main-layout">
   <!-- loader 
   <div class="loader_bg">
      <div class="loader"><img src="images/loading.gif" alt="#" /></div>
   </div> -->
   <header inner -->
      <div class="header">
         <div class="container-fluid">
            <div class="row">
               <div class="col-xl-5 col-lg-5 col-md-5 col-sm-5 col logo_section">
                  <div class="full">
                     <div class="center-desk">
                        <div class="logo">
                           <a href="index.php"><img src="images/logo-blanco.png" alt="#" /></a>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-xl-7 col-lg-7 col-md-7 col-sm-7">
                  <div class="header_information">
                     <nav class="navigation navbar navbar-expand-md navbar-dark ">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
                           <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarsExample04">
                           <ul class="navbar-nav mr-auto">
                              <li class="nav-item active">
                                 <a class="nav-link" href="index.php"><b>Inicio </b></a>
                              </li>
                              <li class="nav-item dropdown">
                                 <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <b>Marcas</b>
                                 </a>
                                 <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="mupsaServicio.php">Mupsa Servicios</a>
                                    <a class="dropdown-item" href="mupsaAgencia.php">Mupsa Agencia Creativa</a>
                                    <a class="dropdown-item" href="mupsanatura.php">D’Mupsa Natural</a>
                                 </div>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" href="#quienessomos"><b>Quiénes Somos</b></a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" href="#mobile"><b>Contáctanos</b></a>
                              </li>
                           </ul>
                           <!-- <div class="sign_btn"><a href="#">Contáctanos</a></div> -->

                        </div>
                     </nav>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </header>

   <!-- banner -->
   <div id="myCarousel" class="carousel slide banner_main" data-ride="carousel">
      <ol class="carousel-indicators">
         <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
         <li data-target="#myCarousel" data-slide-to="1"></li>
         <li data-target="#myCarousel" data-slide-to="2"></li>
         <li data-target="#myCarousel" data-slide-to="3"></li>
      </ol>
      <div class="carousel-inner">
         <div class="carousel-item active">
            <img class="first-slide" src="images/portada-grupo-mupsa.png" alt="First slide">
            <!-- <div class="container ">
               <div class="carousel-caption relative">
                  <h1> Estamos listos para hacer crecer tu negocio</h1>
                  <span></span>
                  <h5>Estamos aqui para convertirnos en el socio estratégico que tu empresa necesita. En Grupo Mupsa
                     encontrarás los mejores productos y servicios corportativos para hacer crecer tu negocio.
                  </h5>
                  <div class="btnContacto">
                     <a href="#contact">Contáctanos</a>
                  </div>
               </div>
            </div> -->
         </div>
         <div class="carousel-item">
            <img class="second-slide" src="images/2.png" alt="Second slide">
            <div class="container">
               <div class="carousel-caption relative">
                  <h1> Ofrecemos los mejores servicios corporativos</h1>
                  <span></span>
                  <h5>Estamos aqui para convertirnos en el socio estratégico que tu empresa necesita. En Grupo Mupsa
                     encontrarás los mejores productos y servicios corportativos para hacer crecer tu negocio.
                  </h5>
                  <div class="btnContacto">
                     <a href="#contact">Contáctanos</a>
                  </div>
               </div>
            </div>
         </div>
         <div class="carousel-item">
            <img class="third-slide" src="images/3.png" alt="Third slide">
            <div class="container">
               <div class="carousel-caption relative">
                  <h1> Deja que tu marca resalte sobre las demás</h1>
                  <span></span>
                  <h5>Estamos aqui para convertirnos en el socio estratégico que tu empresa necesita. En Grupo Mupsa
                     encontrarás los mejores productos y servicios corportativos para hacer crecer tu negocio.
                  </h5>
                  <div class="btnContacto">
                     <a href="#contact">Contáctanos</a>
                  </div>
               </div>
            </div>
         </div>
         <div class="carousel-item">
            <img class="fourth-slide" src="images/4.png" alt="Third slide">
            <div class="container">
               <div class="carousel-caption relative">
                  <h1> Productos 100% orgánicos, con la mejor calidad.</h1>
                  <span></span>
                  <h5>Estamos aqui para convertirnos en el socio estratégico que tu empresa necesita. En Grupo Mupsa
                     encontrarás los mejores productos y servicios corportativos para hacer crecer tu negocio.
                  </h5>
                  <div class="btnContacto">
                     <a href="#contact">Contáctanos</a>
                  </div>
               </div>
            </div>
         </div>


      </div>

      </a>
   </div>
   <!-- end banner -->

   <!-- Título "Quiénes Somos" -->
   <div class="custom-container" id="quienessomos">
      <div class="custom-border-top"></div>
      <div class="p-2 text-center custom-bg-blue">
         <h2>Quiénes Somos</h2>
      </div>
   </div>


   <!-- about -->
   <div id="about" class="about">
      <div class="container">
         <div class="row ">
            <div class="col-md-6">
               <div class="about_img">
                  <figure><img src="images/SOMOS.png" alt="#" /></figure>
               </div>
            </div>
            <div class="col-md-6">
               <div class="titlepage">
                  <!-- <h2>Nuestra Historia</h2> -->
                  <!-- <span></span> -->
                  <p style="text-align: justify;">Somos Grupo Mupsa Perú
               una empresa que brinda productos y servicios a nivel corporativo, cuya 
               finalidad es ofrecer calidad, confianza y compromiso en cada acción ejecutada, llegando
               hacer un socio estratégico para cada uno de nuestros clientes a corto y largo plazo.</p>

               </div>
            </div>

         </div>
      </div>
   </div>
   <!-- end about -->

   <!-- secion mision, vision -->
   <div class="container-fluidTwo">
      <div class="col-12">
         <div class="row">
            <div class="col-lg-6 col-lg-0 col-md-0  col-sm-0 imageMision">
               <img class="rounded mx-auto d-block" src="images/ilustracion.png" alt="Imagen">
            </div>
            <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 row" style="margin: 0 !important;">
               <div class="col-md-4 fila">
                  <div class="iconfluidTwo">
                     <img class="rounded" src="images/icono11.png" alt="Imagen">
                  </div>
                  <div class="mt-4">
                     <h5>Misión</h5>
                     <p class="lead"> Estamos comprometidos a brindar los mejores productos, asesorías servicios,
                        con la finalidad de mejorar la eficacia y eficiencia de nuestros cliente, a través de nuestros
                        rubros especializados
                     </p>
                  </div>
               </div>
               <div class="col-md-4 fila">
                  <div class="iconfluidTwo">
                     <img class="rounded" src="images/icono12.png" alt="Imagen2">
                  </div>
                  <div class="mt-4">
                     <h5>Visión</h5>
                     <p class="lead"> Al 2030 Ser una empresa reconocida a nivel corporativo, apoyándose en la
                        tecnologia para brindar el mejor servicio a nivel nacional e internacional
                     </p>
                  </div>
               </div>
               <div class="col-md-4 fila">
                  <div class="iconfluidTwo">
                     <img class="rounded" src="images/icono13.png" alt="Imagen">
                  </div>
                  <div class="mt-4 custom-list">
                     <h5>Valores</h5>
                     <ul class="lead">
                        <li>Honestidad</li>
                        <li>Honradez</li>
                        <li>Responsabilidad</li>
                        <li>Respeto</li>
                        <li>Trabajo en equipo</li>
                     </ul>
                  </div>
               </div>
            </div>


         </div>
      </div>

   </div>

   <style>
      @media (max-width: 991px) {
         .carousel-item img {
            height: auto;
         }

         .text-secondslide {
            display: none;
         }
      }
   </style>
   <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner">
         <div class="carousel-item active">
            <img src="images/marca1.webp" class="d-block w-100" alt="...">
            <div class="text-secondslide">
               <h5>En Mupsa servicios podrás encontrar una gran variedad de servicios de primera calidad a disposición de tu empresa, tales como:
                  Alquiler de vehiculos, remodelaciones de inmuebles, venta de productos industriales, bordados corporativos, entre otros.
               </h5>
            </div>

         </div>
         <div class="carousel-item">
            <img src="images/marca2.webp" class="d-block w-100 " alt="...">
            <div class="text-secondslide">
               <h5>En Mupsa creativa te brindamos asesoria y consultoria en gestión de marca, desarrollando ideas originales en marketing y
                  branding, proponiendo técnicas y diseños innovadores.
               </h5>
            </div>
         </div>
         <div class="carousel-item">
            <img src="images/marca3.webp" class="d-block w-100 " alt="...">
            <div class="text-secondslide">
               <h5>En D´Mupsa natural te ofrecemos productos de calidad 100% orgánicos convencidos de que la alimentación es importante para nuestra salud y organismo.
               </h5>
            </div>
         </div>
      </div>
      <!-- Botones de retroceso y avance personalizados con tus imágenes -->
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
         <img src="images/atras.png" alt="Retroceso" />
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
         <img src="images/proximo.png" alt="Avance" />
      </button>
   </div>

   <!-- About Start -->
   <div class="container-fluid py-5" style="background: rgb(19,47,86); background: linear-gradient(90deg, rgba(19,47,86,1) 29%, rgba(15,26,207,1) 81%);">
      <div class="container py-5">
         <div class="row">
            <div class="col-lg-5 mb-5 mb-lg-0" style="min-height: 500px;">
               <div class="position-relative h-100">
                  <img class="position-absolute w-100 h-100" src="images/crecer.png" style="object-fit: cover;">
               </div>
            </div>
            <div class="col-lg-7">
               <div class="section-title position-relative mb-4">
                  <!-- <h6 class="d-inline-block position-relative text-secondary text-uppercase pb-2">About Us</h6> -->
                  <h1 class="display-4" style="color:white;font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;">Somos la mejor opción para hacer crecer tu negocio</h1>
               </div>
               <!-- <p>Tempor erat elitr at rebum at at clita aliquyam consetetur. Diam dolor diam ipsum et, tempor voluptua sit consetetur sit. Aliquyam diam amet diam et eos sadipscing labore. Clita erat ipsum et lorem et sit, sed stet no labore lorem sit. Sanctus clita duo justo et tempor consetetur takimata eirmod, dolores takimata consetetur invidunt magna dolores aliquyam dolores dolore. Amet erat amet et magna</p> -->
               <div class="row pt-3 mx-0">
                  <div class="col-4 px-0">
                     <div class="bg-success text-center p-4">
                        <h1 class="text-white" data-toggle="counter-up">66</h1>
                        <h6 class="text-uppercase text-white">Proyectos <span class="d-block">Realizados </span></h6>
                     </div>
                  </div>
                  <div class="col-4 px-0">
                     <div class="bg-primary text-center p-4">
                        <h1 class="text-white" data-toggle="counter-up">10</h1>
                        <h6 class="text-uppercase text-white">Clientes<span class="d-block"> atendidos</span></h6>
                     </div>
                  </div>
                  <div class="col-4 px-0">
                     <div class="bg-warning text-center p-4">
                        <h1 class="text-white" data-toggle="counter-up">488</h1>
                        <h6 class="text-uppercase text-white">Horas <span class="d-block">trabajadas</span></h6>
                     </div>
                  </div>

               </div>
            </div>
         </div>
      </div>
   </div>

   <!-- Título "Quiénes Somos" -->
   <div class="custom-container" id="quienessomos">
      <div class="custom-border-top"></div>
      <div class="p-2 text-center custom-bg-blue">
         <h2>Nuestros clientes</h2>
      </div>
   </div>
   <!-- ======= Clients Section ======= -->
   <section id="clients" class="clients">
      <div class="container" data-aos="fade-up">
         <div class="clients-slider swiper">
            <div class="swiper-wrapper align-items-center">
               <div class="swiper-slide"><img src="images/disol_logo.png" class="img-fluid" alt=""></div>
               <div class="swiper-slide"><img src="images/wiñay.png" class="img-fluid" alt=""></div>
               <div class="swiper-slide"><img src="images/logo-mobil.png" class="img-fluid" alt=""></div>
               <div class="swiper-slide"><img src="images/wayu.png" class="img-fluid" alt=""></div>
               <div class="swiper-slide"><img src="images/logo-alternativa2.png" class="img-fluid" alt=""></div>
               <div class="swiper-slide"><img src="images/vulkon.png" class="img-fluid" alt=""></div>
            </div>
            <div class="swiper-pagination"></div>
         </div>
      </div>

   </section><!-- End Clients Section -->



   <!-- Mayor Información -->
   <div id="mobile" class="mobile">
      <div class="container">
         <div class="row d_flex">
            <div class="col-md-8">
               <!-- <div class="mobile_img">
                  <figure><img src="images/informacion-removebg-preview.png" alt="#" /></figure>
               </div>  -->
            </div>
            <div class="col-md-4">
               <div class="titlepage">
                  <h2>Mayor Información</h2>
                  <p>Para obtener mayor información visita nuestras redes sociales y consulta por nuestros servicios.
                  </p>
                  <div class="logoimg">
                     <div class="iconimg">
                        <img src="images/face.png" alt="">
                     </div>
                     <div class="icontext">
                        <a href="https://www.facebook.com/profile.php?id=100093969678870&mibextid=LQQJ4d">@GrupoMupsaPerú</a>
                     </div>

                  </div>
                  <div class="logoimg">
                     <div class="iconimg">
                        <img src="images/instagram.png" alt="">
                     </div>
                     <div class="icontext">
                        <a href="https://instagram.com/mupsa.servicios?igshid=YzAwZjE1ZTI0Zg==">@GrupoMupsaPerú</a>
                     </div>
                  </div>
                  <div class="logoimg">
                     <div class="iconimg">
                        <img src="images/whatsapp.png" alt="">
                     </div>
                     <div class="icontext">
                        <a href="https://w.app/MUPSA">+51 972443334</a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- end mobile -->
   <!--  footer -->


   <!--  footer  -->
   <div class="sticky-container">
      <ul class="sticky">
         <li>
            <a href="https://www.facebook.com/profile.php?id=100093969678870&mibextid=LQQJ4d" target="_blank">
               <img src="images/facebook.png" width="32" height="32">
            </a>
         </li>
         <li>
            <a href="https://w.app/MUPSA" target="_blank">
               <img src="images/whatsapp1.png" width="32" height="32">
            </a>
         </li>
         <li>
            <a href="https://instagram.com/mupsa.servicios?igshid=YzAwZjE1ZTI0Zg==" target="_blank">
               <img src="images/logotipo-de-instagram.png" width="32" height="32">
            </a>
         </li>
         <li>
            <a href="https://www.linkedin.com/company/grupo-mupsa-per%C3%BA/" target="_blank">
               <img src="images/linkedin2.png" width="32" height="32">
            </a>
         </li>

      </ul>
   </div>

   <?php
   include_once "footer.php";
   ?>
</body>

</html>