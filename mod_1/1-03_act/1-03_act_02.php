<html>
    <head>
        <meta http-equiv="Cache-Control" content="no-cache" />
        <meta http-equiv="Pragma" content="no-cache" />
        <meta http-equiv="Expires" content="0" />
        <link rel="icon" href="../../favicon.ico" type="image/gif">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Me informo: oportunidades y desafíos en la web | e-mentores</title>
        <link  type="text/css"  href="../../css/bootstrap.css" rel="stylesheet">
        <link  type="text/css"  href="../../css/bootstrap-grid.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.css">
        <link href="../../css/style.css" rel="stylesheet" type="text/css"/>
        <link href="../../css/mod1.css" rel="stylesheet" type="text/css"/>
        <link href="../../css/index.css" rel="stylesheet" type="text/css" />

    </head>
    <body>
        <div class="wrapper">


            <!-- Page Content -->

            <div id="content"> 
                <nav class="navbar navbar-expand-lg navbar-light bg-light d-block">
                    <div class="container-fluid">

                        <div class="nav justify-content-start">

                        </div>

                        <div class="nav justify-content-center">
                            <h1><a class="mx-auto" href="../../index.php"><img src="../../img/logo-ementores.png" alt="E-mentores"></a></h1>
                        </div>

                        <div class="nav justify-content-end">
                            <button type="button" id="sidebarCollapse" class="btn" >
                                <span class="navbar-toggler-icon"></span>
                            </button>
                        </div>
                    </div>
                </nav>
                <p class="intro-header blue">Oportunidades y desafíos</p>
                <section class="container">
                    <div class="row justify-content-md-center">
                        <div class="col-sm-10">
                            <div class="main">
                                <div id="act_01" class="">
                                    <ul class="nav nav-tabs " id="myTab" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#desafios" role="tab" aria-controls="home" aria-selected="true">Desafíos</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="contact-tab" data-toggle="tab" href="#oportunidades" role="tab" aria-controls="contact" aria-selected="false">Oportunidades</a>
                                        </li>
                                    </ul>
                                    <div class="tab-content" id="myTabContent">
                                        <div class="tab-pane fade show active" id="desafios" role="tabpanel" aria-labelledby="home-tab">
                                            <img src="../../img/mod1/1-03_act_personaje2rec.png" class="ico-personaje">
                                            <div class="row">
                                                <div class="col-sm-7">
                                                    <div class="slider">
                                                        <div>A veces me doy cuenta que la información que encuentro no siempre es cierta o muchas veces tengo que abrir muchas páginas que no me sirven para encontrar lo que ando buscando. ¡Es muy frustrante!</div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-5">
                                                    <img src="../../img/mod1/1-03_act_img2.png" alt="" class="img-fluid"/>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="oportunidades" role="tabpanel" aria-labelledby="profile-tab">
                                            <img src="../../img/mod1/1-03_act_personaje2rec.png" class="ico-personaje">
                                            <div class="row">
                                                <div class="col-sm-7">
                                                    <div class="slider2">
                                                        <div>Cuando yo no sé algo que me dicen mis amigas o cuando en el cole no entendí algo que explicaron, lo primero que hago al llegar a la casa es usar la Tablet para buscarlo.</div>
                                                        <div>Me gusta poder encontrar respuestas a todo lo que quiero saber. ¡Internet lo sabe todo!</div>

                                                    </div>
                                                </div>
                                                <div class="col-sm-5">
                                                    <img src="../../img/mod1/1-03_act_img2.png" alt="" class="img-fluid"/>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <a href="../1-03_act.php" class="back_to_menu">Volver</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <?php require '../../footer.php'; ?>
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
                        <a href="../../0-04_intro.php" class="nav-iniciar">Iniciar sesión</a>
                    </li>
                </ul>

            </nav>
        </div>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="../../js/bootstrap.bundle.js" type="text/javascript"></script>
        <script src="../../js/bootstrap.js" type="text/javascript"></script>
        <script src="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.min.js"></script>


        <script>
            var slider2 = null;
            var slider = $('.slider').bxSlider({
                pager: false,
                infiniteLoop: true,
                auto: true,
                pause: 10000
            });

            $('a[href="#oportunidades"]').on('shown.bs.tab', function (e) {
                if (!slider2) {
                    slider2 = $('.slider2').bxSlider({
                        pager: false,
                        infiniteLoop: true,
                        auto: true,
                        pause: 10000
                    });
                }

            });
        </script>
    </body>
</html>