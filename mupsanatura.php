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
        <img src="images/7.png" alt="">
        <div class="containerSer11 col-md-6">
            <img src="images/mupsa-blanco-natural.png" alt="">
            <h2>D'Mupsa es una marca convencida que la alimentación es importante para nuestra salud y organismo, en ese
                sentido ofrecemos productos
                naturales de calidad procedentes de los lugares mas majestuosos del Perú.
            </h2>
            <div class="btn-group" role="group" aria-label="Basic outlined example">
                <button type="button"><a href="#"><i class="fa-brands fa-facebook-f"></i></a></button>
                <button type="button"><a href="#"><i class="fa-brands fa-whatsapp"></i></a></button>
                <button type="button"><a href="#"><i class="fa-brands fa-instagram"></i></a></button>
            </div>

        </div>

    </div>

    <!-- parte cafe -->

    <div class="containerCafe ">
        <img src="images/cafe.png" class="img-fluid" alt="">
        <div class="textoEncima  rounded">
            <p>Nuestro café es 100% natural,
                seleccionado y elaborado con
                los mejores granos, lo que nos
                permite brindar un excelente
                café con aroma y sabor de
                calidad.Asi que disfruta!</p>
        </div>
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