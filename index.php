<html class="front-page">
    <head>
        <meta http-equiv="Cache-Control" content="no-cache" />
        <meta http-equiv="Pragma" content="no-cache" />
        <meta http-equiv="Expires" content="0" />
        <link rel="icon" href="favicon.ico" type="image/gif">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Inicio | e-mentores</title>
        <link type="text/css" href="css/bootstrap.css" rel="stylesheet">
        <link type="text/css" href="css/bootstrap-grid.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Nunito:300,400,700" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.css">
        <link href="css/style.css" rel="stylesheet" type="text/css" />
        <link href="css/index.css" rel="stylesheet" type="text/css" />
    </head>

    <body>
        <div class="wrapper">
        <?php include 'db/connection/conexion.php'; ?>

            <!-- Page Content -->

            <div id="content">

                <section class="container-full index-main">

                    <nav class="navbar navbar-expand-lg navbar-light bg-light d-block">
                        <div class="container-fluid">

                            <div class="nav justify-content-start">

                            </div>

                            <div class="nav justify-content-center">
                                <h1><a class="mx-auto" href="/index.php"><img src="img/logo-ementores.png" alt="E-mentores"></a></h1>
                            </div>

                            <div class="nav justify-content-end">
                                <button type="button" id="sidebarCollapse" class="btn" >
                                    <span class="navbar-toggler-icon"></span>
                                </button>
                            </div>
                        </div>
                    </nav>

                    <section class="container-full index-video padding-top-bottom">
                        <div class="container">
                            <div class="row">
                                <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 d-block d-sm-none">
                                    <p class="main-div-intro-text">Aprendé sobre el uso seguro de internet para familias.</p>

                                </div>
                                <div class="col-12 col-sm-12 col-md-8 col-lg-8 col-xl-8">
                                    <div class="embed-responsive embed-responsive-16by9 main-div-iframe">
                                        <!-- <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/LLsdaT4NWu0?showinfo=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe> -->
                                        <video width="100%" height="auto" id="video" controls>
                                            <source src="/videos/0-introduccion_vid.mp4" type="video/mp4">
                                        </video>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 ">
                                    <p class="main-div-intro-text d-none d-sm-block d-md-block d-lg-block">Aprendé sobre el uso seguro de internet para familias.</p>
                                    <a class="btn-entrar" href="0-04_intro.php">Entrar</a>
                                </div>
                            </div>
                        </div>
                    </section>
                    <section class="container-full index-ingreso padding-top-bottom">
                        <div class="container">
                            <div class="row">
                                <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                                    <a class="btn-gestores mx-auto" href="https://e-mentores.moodle.school/login/index.php" target="_blank">e-mentores para gestores</a>
                                </div>
                                <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                                    <a class="btn-apps mx-auto" href="/juego" id="btn-chxs">apps para chicxs</a>

                                </div>
                            </div>
                        </div>
                    </section>
                    <section class="container-full index-decoracion mx-auto">
                        <img src="img/footer/footer-familia.png" class="familia-imagen-decoracion mx-auto" alt="Familia">
                    </section>
                </section>
                <!-- <section id="prefooter" class="container-full padding-top-bottom">
                    <div class="container-fluid d-none d-sm-block d-md-block d-lg-block">
                        <div class="row">
                            <div class="col-8 col-sm-8 col-md-7 col-lg-7 col-xl-7 mx-auto">
                                <div class="row">
                                    <div class="col">
                                        <p class="support-label">Con el apoyo de:</p>
                                        <img src="img/footer/footer-logo-endViolence.jpg" alt="End Violence Against Children" class="img-fluid prefooter-logos">
                                    </div>
                                    <div class="col">
                                        <p class="support-label">Respaldo institucional de:</p>
                                        <img src="img/logo-imas.png" alt="End Violence Against Children" class="img-fluid prefooter-logos">
                                    </div>
                                    <div class="col">
                                        <p class="support-label">Una iniciativa de:</p>
                                        <img src="img/footer/footer-logo-paniamor.png" alt="Paniamor" class="img-fluid prefooter-logos">
                                    </div>
                                    <div class="col"></div>
                                </div>


                            </div>
                            <div class="col-8 col-sm-8 col-md-5  col-lg-5 col-xl-5 text-opensans mx-auto">
                                <p id="prefooter-place">Barrio La California, de la Universidad UAM 75 M. Este. Ave. Central, Calles 29 y 33, San José, Costa Rica</p>
                                <p id="prefooter-phone">(506) 2234-2993</p>
                                <p id="prefooter-mail">info@paniamor.org</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="container-fluid d-block d-sm-none d-md-none d-lg-none">
                        <div class="container">
                            <div class="row small-f">
                                <div class="col">
                                    <p>Con el apyo de:</p>
                                    <img src="img/footer/footer-logo-endViolence.jpg" alt="End Violence Against Children" class="img-fluid prefooter-logos">
                                </div>
                                <div class="col">
                                    <p>Respaldo institucional de:</p>
                                    <img src="img/logo-imas.png" alt="End Violence Against Children" class="img-fluid prefooter-logos logo-imas">
                                </div>
                                <div class="col">
                                    <p>Una iniciativa de:</p>
                                    <img src="img/footer/footer-logo-paniamor.png" alt="Paniamor" class="img-fluid prefooter-logos">
                                </div>



                            </div>
                            <div class="container text-opensans">
                                <p id="prefooter-place">Barrio La California, de la Universidad UAM 75 M. Este. Ave. Central, Calles 29 y 33, San José, Costa Rica</p>
                                <p id="prefooter-phone">(506) 2234-2993</p>
                                <p id="prefooter-mail">info@paniamor.org</p>
                            </div>
                        </div>
                    </div>
                </section> -->

                <?php require 'footer.php'; ?>
            </div>
            <nav id="sidebar" class="">


                <div class="sidebar-header">



                    <h3>Menu</h3>
                </div>

                <ul class="list-unstyled components">
                    <!-- <p>Dummy Heading</p> -->
                    <!-- <li class="active">
                        <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Home</a>
                        <ul class="collapse list-unstyled" id="homeSubmenu">
                            <li>
                                <a href="#">Home 1</a>
                            </li>
                            <li>
                                <a href="#">Home 2</a>
                            </li>
                            <li>
                                <a href="#">Home 3</a>
                            </li>
                        </ul>
                    </li> -->
                    <li>
                        <a href="#" class="nav-sobre">Sobre el proyecto</a>
                    </li>
                    <li>
                        <a href="http://crianzatecnologica.org/" target="_blank" class="nav-recursos">Recursos relacionados</a>
                    </li>
                    <li>
                        <a href="0-04_intro.php" class="nav-iniciar">Iniciar sesión</a>
                    </li>
                </ul>

            </nav>
        </div>



        <div class="modal" id="modal_btn-chxs" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">

                    <div class="modal-body">


                        <p>Enlace pronto disponible.</p>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn-cerrar" data-dismiss="modal">Cerrar</button>
                    </div>
                </div>
            </div>
        </div>


        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="js/bootstrap.bundle.js" type="text/javascript"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
        <script src="js/bootstrap.js" type="text/javascript"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.concat.min.js"></script>
        <script>

            $('#btn-chxs').on('click', function () {
                $("#modal_btn-chxs").modal("show");
            });


            // $(".module.disabled a").each(function() {
            //     $(this).attr("href", "");
            //     $(this).attr("disabled", true);
            // });

            // $(".module.disabled a").click(function(e) {
            //     e.preventDefault();
            // });

            // $(document).ready(function() {

            //     $('#sidebarCollapse').on('click', function() {
            //         $('#sidebar').toggleClass('active');
            //     });

            // });

        </script>
    </body>

</html>
