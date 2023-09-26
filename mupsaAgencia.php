<?php
include_once "header.php";

?>
<!-- body -->

<body class="main-layout">
    <!-- loader  -->
    <div class="loader_bg">
        <div class="loader"><img src="images/loading.gif" alt="#" /></div>
    </div>
    <!-- end loader -->
    <!-- header -->
    <?php
   include_once "navbar.php";
   ?>

    <div class="containerSer1">
        <img src="images/6.png" alt="">
        <div class="containerSer11 col-md-6">
            <img src="images/mupsa-agencia.png" alt="">
            <h2>Somos una empresa que sostiene el compromiso de trabajar con el mejor talento creativo, comprometidosy
                motivado
                para brindar asesoría y consultoría en gestión de marca, desarrollando ideas originales en marketing y
                branding, proporcionando
                técnicas y diseños innovadores.
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
                                <div class="about_img">
                                    <figure><img style="border-radius: 20px;" src="images/gestion de marca.png" alt="#" /></figure>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="titlepage">
                                    <h2>Gestión de Marca o branding</h2>
                                    <span></span>
                                    <br>
                                    <ul class="lead">
                                        <li>Representaciones gráficas de la marca.</li>
                                        <li>Diseño de packing.</li>
                                        <li>Registro de marca.</li>
                                        <li>Historia de la empresa.</li>
                                        <li>Misión, Visión y Valores.</li>
                                        <li>Nombre colores y estilo de fuente</li>

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
                                    <figure><img style="border-radius: 20px;" src="images/rebranding.png" alt="#" />
                                    </figure>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="titlepage">
                                    <h2>Rebranding</h2>
                                    <span></span>
                                    <br>
                                    <ul class="lead">
                                        <li>Redifinir la visión, misión y valores.</li>
                                        <li>Cambiar las representaciones gráficas de la marca.</li>
                                        <li>Registro de marca.</li>
                                        <li>Mejorar el diseño del packaging.</li>
                                        <li>Modificar de forma parcial o total el nombre de la marca.</li>
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
                                    <figure><img src="images/web.png" alt="#" /></figure>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="titlepage">
                                    <h2>Diseño publicitario y creación web</h2>
                                    <span></span>
                                    <br>
                                    <ul class="lead">
                                        <li>Piezas Gráficas</li>
                                        <li>Creación de páginas web</li>
                                        <li>Banner o flayers digitales.</li>
                                        <li>Broucher digital e impreso.</li>
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
                                    <figure><img src="images/produccion-audiovisual.png" alt="#" /></figure>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="titlepage">
                                    <div class="titlepage">
                                        <h2>Producción audiovisual</h2>
                                        <span></span>
                                        <br>
                                        <ul class="lead">
                                            <li>Video corporativo.</li>
                                            <li>Spots publicitarios.</li>
                                            <li>Videos de capacitación.</li>
                                            <li>Videos Institucionales.</li>
                                            <li>Producción de video.</li>
                                            <li>Grabación de eventos.</li>
                                        </ul>
                                    </div>
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
                        <p>Para obtener mayor información visita nuestras redes sociales y consulta por nuestros
                            servicios.
                        </p>
                        <div class="logoimg">
                            <div class="iconimg">
                                <img src="images/face.png" alt="">
                            </div>
                            <div class="icontext">
                                <a href="">@GrupoMupsaPerú</a>
                            </div>

                        </div>
                        <div class="logoimg">
                            <div class="iconimg">
                                <img src="images/instagram.png" alt="">
                            </div>
                            <div class="icontext">
                                <a href="">@GrupoMupsaPerú</a>
                            </div>
                        </div>
                        <div class="logoimg">
                            <div class="iconimg">
                                <img src="images/whatsapp.png" alt="">
                            </div>
                            <div class="icontext">
                                <a href="">+51 972443334</a>
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
</body>

</html>
