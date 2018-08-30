<html>
    <head>
<meta http-equiv="Cache-Control" content="no-cache" />
<meta http-equiv="Pragma" content="no-cache" />
<meta http-equiv="Expires" content="0" />
        <link rel="icon" href="favicon.ico" type="image/gif">
        <title>Me informo: oportunidades y desafíos en la web | e-mentores</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
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
                                            <img src="../../img/mod1/1-03_act_personaje1rec.png" class="ico-personaje">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="slider">
                                                        <div>Yo veo como mi hermano mayor usa la computadora para estudiar. ¡No creo que podría hacer sus tareas si no la tuviera!</div>
                                                        <div>Y bueno, cuando a mí me dejan usarla, me gusta buscar música que algunas veces cambio con un app de DJ.</div>
                                                        <div>Pero cuando sea grande, voy a trabajar usando una computadora.</div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <img src="../../img/mod1/1-03_act_img1.png" alt="" class="img-fluid"/>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="oportunidades" role="tabpanel" aria-labelledby="profile-tab">
                                            <img src="../../img/mod1/1-03_act_personaje1rec.png" class="ico-personaje">
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <div class="slider2">
                                                        <div>Yo veo que mis papás no saben usar bien la compu y no tienen muchos apps en sus teléfonos.</div>
                                                        <div>Los usan más que nada para llamar, aunque yo les he dicho que con Internet se pueden hacer muchas cosas.</div>
                                                        <div>Siento que están perdiendo muchas chances porque no se ponen las pilas.</div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <img src="../../img/mod1/1-03_act_img1.png" alt="" class="img-fluid"/>
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
                        <a href="#" class="nav-recursos">Recursos relacionados</a>
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



            $.ajax({
                url: "/db/user/update_module.php",
                method: "POST",
                data: {
                    step: 3,
                    module: 1
                },
                dataType: "html"
            });


            $('a[href="#oportunidades"]').on('shown.bs.tab', function (e) {
                if (!slider2) {
                    slider2 = $('.slider2').bxSlider({
                        pager: false,
                        infiniteLoop: true,
                        auto: false,
                        pause: 10000
                    });
                }

            });
        </script>
    </body>
</html>