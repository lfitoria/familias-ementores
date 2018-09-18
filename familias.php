<html>
    <head>
<meta http-equiv="Cache-Control" content="no-cache" />
<meta http-equiv="Pragma" content="no-cache" />
<meta http-equiv="Expires" content="0" />
        <link rel="icon" href="favicon.ico" type="image/gif">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Registro | e-mentores</title>
        <link  type="text/css"  href="css/bootstrap.css" rel="stylesheet">
        <link  type="text/css"  href="css/bootstrap-grid.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Nunito:300,400,700,800" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.css">
        <link href="css/style.css" rel="stylesheet" type="text/css" />
        <link href="css/index.css" rel="stylesheet" type="text/css" />
    </head>

    <body>
        <div class="wrapper">
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

                    <div class="back-stars">
                        <section class="container">
                            <div class="header-familias row justify-content-md-center">
                                <div class="col-sm-10 main-block back-girl">
                                    <img src="img/internas/img-header1.png" alt="" class="img-fluid"/>
                                    <h2 class="text-center"></h2>
                                </div>
                            </div>
                        </section>
                    </div>
                    <div class="bck-internas">
                        <section class="container">
                            <div class="content-familias row justify-content-md-center">
                                <div class="col-sm-10 main-block back-girl">
                                    <h3 class="">Acerca del proyecto</h3>
                                    <p>El reto e-mentores forma parte de las iniciativas del proyecto Costa Rica dice No a la Explotación y Abuso Sexual en Línea de Niñas, Niños y Adolescentes, conocida como CR NESXT, financiada por “The Global Parthership”, a través de su fondo asociado “The End of Violence Against Children Fund”. CR Nesxt surge como una alternativa para garantizar la protección de la niñez y la adolescencia frente a la explotación y abuso sexual en línea. Ante la disposición y apertura por parte de entidades estatales, el proyecto busca desarrollar capacidades para que actores clave se conviertan en facilitadores activos en la prevención y respuesta de los peligros en línea a los que están expuestas las personas menores de edad.</p>
                   
                                    <p>CR-NEXST se fundamenta en tres estrategias. La primera propone el fortalecimiento del Programa Hogares Conectados (PHC), en alianza estratégica con el IMAS. Como segundo pilar, se encuentra el fortalecimiento del Sistema Nacional 9-1-1, en alianza con UNICEF Costa Rica, y el PANI. La tercera propone el desarrollo de un modelo nacional para la prevención y respuesta de la explotación y abuso sexual en línea de NNA; con el apoyo del Viceministerio de Telecomunicaciones, contrapartes nacionales y otros actores clave hacia el diseño, aprobación y puesta en marcha de una estrategia de articulación intersectorial, a partir del conocimiento del estado actual del país y teniendo como insumo buenas prácticas internacional.</p>
                                </div>
                            </div>
                        </section>
                    </div>
                    <section class="container-full index-decoracion mx-auto">
                        <img src="img/footer/footer-familia.png" class="familia-imagen-decoracion mx-auto" alt="Familia">
                    </section>
                </section>
               
                <?php require './footer.php'; ?>
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
                        <a href="/familias.php" class="nav-sobre">Sobre el proyecto</a>
                    </li>
                    <li>
                        <a href="http://www.crianzatecnologica.org" target="_blank" class="nav-sobre">Recursos relacionados</a>
                    </li>
                    <li>
                        <a href="0-04_intro.php" class="nav-iniciar">Iniciar sesión</a>
                    </li>
                </ul>

            </nav>
        </div>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="js/bootstrap.bundle.js" type="text/javascript"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
        <script src="js/bootstrap.js" type="text/javascript"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.concat.min.js"></script>
        <script>
            $(".module.disabled a").each(function () {
                $(this).attr("href", "");
                $(this).attr("disabled", true);
            });

            $(".module.disabled a").click(function (e) {
                e.preventDefault();
            });

            $(document).ready(function () {

                $('#sidebarCollapse').on('click', function () {
                    $('#sidebar').toggleClass('active');
                });

            });

        </script>
        <script src="js/bootstrap.js" type="text/javascript"></script>
    </body>

</html>
