<?php
include_once "header.php";

?>
<!-- body -->

<body class="main-layout">
    <!-- loader 
    <div class="loader_bg">
        <div class="loader"><img src="images/loading.gif" alt="#" /></div>
    </div>
    end loader -->
    <!-- header -->
    <?php
   include_once "navbar.php";
   ?>

    <div class="containerSer1" >
        <img src="images/5.png" alt="">
        <div class="containerSer11 col-md-6" >
            <img src="images/logo-servicios-blanco.png" alt="">
            <h2>Mupsa servicios es una empresa que brinda productos y servicios a nivel corporativo,
                desarrollando alianzas estratégicas con nuestros socios comerciales, cuya finalidad es consolidar
                la confianza, compromiso en cada negociación a realizar, con el objetivo y capacidad de trabajar
                a nivel empresarial.
            </h2>
            <div class="btn-group" role="group" aria-label="Basic outlined example">
                <button type="button"><a href="#"><i class="fa-brands fa-facebook-f"></i></a></button>
                <button type="button"><a href="#"><i class="fa-brands fa-whatsapp"></i></a></button>
                <button type="button"><a href="#"><i class="fa-brands fa-instagram"></i></a></button>
            </div>

        </div>

    </div>

    <!-- Título "Quiénes Somos" -->
    <div class="custom-container" id="nuestrosServicios">
        <div class="custom-border-top"></div>
        <div class="p-2 text-center custom-bg-blue1">
            <h2>Nuestros Servicios</h2>
        </div>
    </div>


    <div id="carouselExampleIndicators" class="carousel slide">

        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3"
                aria-label="Slide 4"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div id="about" class="about">
                    <div class="container">
                        <div class="row ">
                            <div class="col-md-6">
                                <div class="about_img" >
                                    <figure><img style="border-radius: 20px;" src="images/alquiler.png" alt="#" /></figure>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="titlepage">
                                    <h2>Alquiler de Vehículos</h2>
                                    <span></span>
                                    <p style="text-align: justify;">Servicio de alquiler de vehiculos corporativos,
                                        autos, camionetas, camionetas rurales, livianos entre otros, con la comodidad y
                                        seguridad que necesitan, ofreciendo confort en cada una de las Unidades según la
                                        necesidad del cliente.
                                    </p>
                                    <h2 style="color: #0666f7">Características</h2>
                                    <div class="col imgdetalles">
                                        <div class="row">
                                            <div class="col">
                                                <img src="images/Asiento.png" alt="">
                                                <p>4 asientos</p>
                                            </div>
                                            <div class="col">
                                                <img src="images/Mecanico.png" alt="">
                                                <p>Mecánico</p>
                                            </div>
                                            <div class="col">
                                                <img src="images/Turbo.png" alt="">
                                                <p>Turbo intercooler</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col">
                                                <img src="images/4puertas.png" alt="">
                                                <p>4 puertas</p>
                                            </div>
                                            <div class="col">
                                                <img src="images/Aire.png" alt="">
                                                <p>Aire acondicionado</p>
                                            </div>
                                            <div class="col">
                                                <img src="images/Airbag.png" alt="">
                                                <p>Airbag</p>
                                            </div>
                                        </div>
                                    </div>
                                    <ul class="lead reemplazoImg">
                                        <li>4 asientos.</li>
                                        <li>Mecánico.</li>
                                        <li>Turbo intercooler.</li>
                                        <li>4 puertas.</li>
                                        <li>Aire acondicionado.</li>
                                        <li>Airbag.</li>
                                     </ul>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div id="about" class="about">
                    <div class="container">
                        <div class="row ">
                            <div class="col-md-6">
                                <div class="about_img">
                                    <figure><img style="border-radius: 20px;" src="images/construcciones-y-remodelaciones.png" alt="#" /></figure>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="titlepage">
                                    <h2>Construcciones y Remodelaciones</h2>
                                    <span></span>
                                    <p style="text-align: justify;">Especialistas en construcción y remodelaciones con Drywal, y otros servicios:
                                    </p>
                                    <ul class="lead">
                                        <li>Instalaciones de aire acondicionados y mantenimiento.</li>
                                        <li>Tabiques.</li>
                                        <li>Cielo Raso.</li>
                                        <li>Cenefas decorativos.</li>
                                        <li>Servicios de electricidad.</li>
                                        <li>Acabados de pintura A1.</li>
                                        <li>Acabados en gafistería.</li>
                                        <li>Barras.</li>
                                        <li>Techos decorativos.</li>
                                        <li>Acabados en general.</li>
                                        <li>Diseño e instalación de letreros publicitarios.</li>
                                     </ul>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div id="about" class="about">
                    <div class="container">
                        <div class="row ">
                            <div class="col-md-6">
                                <div class="about_img">
                                    <figure><img src="images/bordados.png" alt="#" /></figure>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="titlepage">
                                    <h2>Bordados corporativos</h2>
                                    <span></span>
                                    <p style="text-align: justify;">Brindamos el servicio de bordado computarizado de todo tipo de 
                                        uniformes corporativos, con el compromiso de hacer un trabajo A1, acompañado de la tecnología 
                                        que nos hace una empresa diferente.
                                    </p>
                                    <h3>En ese sentido se detalla los siguientes bordados:</h3>
                                    <ul class="lead">
                                        <li>Logos empresariales</li>
                                        <li>Logos personalizados</li>
                                        <li>Nombres</li>
                                        <li>Insignias</li>
                                        <li>Parches</li>
                                        <li>Entre otros de diversas formas y tamaños</li>
                                       
                                     </ul>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div id="about" class="about">
                    <div class="container">
                        <div class="row ">
                            <div class="col-md-6">
                                <div class="about_img">
                                    <figure><img src="images/venta-de-herramientas.png" alt="#" /></figure>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="titlepage">
                                    <h2>Venta de productos industriales</h2>
                                    <span></span>
                                    <p style="text-align: justify;">Venta de herramientas para los trabajos en la agricultura y empresas 
                                        agroindustriales, con garantía y respaldo.
                                    </p>
                                    <h3>Detallamos las herramientas:</h3>
                                    <ul class="lead">
                                        <li>Tijeras para cosecha de todo tipo de frutas</li>
                                        <li>Sierras</li>
                                        <li>Hachas</li>
                                        <li>Palas</li>
                                        <li>Machetes</li>
                                        <li>Picos</li>
                                        <li>Limas</li>
                                        <li>Entre otras de diversas formas y tamaños.</li>  
                                     </ul>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div id="about" class="about">
                    <div class="container">
                        <div class="row ">
                            <div class="col-md-6">
                                <div class="about_img">
                                    <figure><img src="images/servicios-nuevo (1).png" alt="#" /></figure>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="titlepage">
                                    <h2>Venta de productos comerciales</h2>
                                    <span></span>
                                    <p style="text-align: justify;">Venta de productos para publicidad de tu empresa, con garantía y respaldo.
                                    </p>
                                    <h3>Detallamos los productos:</h3>
                                    <ul class="lead">
                                        <li>Banners con estructura metalica.</li>
                                        <li>Viniles enmarcados.</li>
                                        <li>Ploteo de Viniles.</li>
                                        <li>Stickers para marcas.</li>
                                        <li>Pintado de local.</li>
                                        <li>Pintado de logos y letras.</li>
                                        <li>Todo tipo de letreros.</li>
                                        <li>Entre otras de diversas formas y tamaños.</li>  
                                     </ul>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Botón de retroceso personalizado  -->
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide="prev">
            <img src="images/atras.png" alt="Retroceso" />
        </button>

        <!-- Botón de avanzar personalizado  -->
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide="next">
            <img src="images/proximo.png" alt="Avance" />
        </button>
    </div>

    <!-- mobile -->
    <div id="mobile" class="mobile" >
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
                        <p>Para obtener mayor información visita nuestras redes sociales y consulta por nuestros
                            servicios.
                        </p>
                        <div class="logoimg">
                            <div class="iconimg">
                                <img src="images/face.png" alt="">
                            </div>
                            <div class="icontext">
                                <a href="https://www.facebook.com/profile.php?id=100093969678870&mibextid=LQQJ4d">@MupsaServicio</a>
                            </div>

                        </div>
                        <div class="logoimg">
                            <div class="iconimg">
                                <img src="images/instagram.png" alt="">
                            </div>
                            <div class="icontext">
                                <a href="https://instagram.com/mupsa.servicios?igshid=YzAwZjE1ZTI0Zg==">@MupsaServicio</a>
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
    <?php
   include_once "footer.php";
   ?>

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

         </ul>
      </div>
</body>

</html>