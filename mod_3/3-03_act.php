<html id="page-3-03">
    <head>
        <meta http-equiv="Cache-Control" content="no-cache" />
        <meta http-equiv="Pragma" content="no-cache" />
        <meta http-equiv="Expires" content="0" />
        <link rel="icon" href="../favicon.ico" type="image/gif">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Prevengo: acompaño en línea | e-mentores</title>
        <link  type="text/css"  href="../css/bootstrap.css" rel="stylesheet">
        <link  type="text/css"  href="../css/bootstrap-grid.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Nunito:300,400,700" rel="stylesheet">
        <link href="../css/style.css" rel="stylesheet" type="text/css"/>
        <link href="../css/index.css" rel="stylesheet" type="text/css" />
        <link href="../css/mod2.css" rel="stylesheet" type="text/css" />
        <link href="../css/mod3.css" rel="stylesheet" type="text/css" />
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
                            <h1><a class="mx-auto" href="../index.php"><img src="../img/logo-ementores.png" alt="E-mentores"></a></h1>
                        </div>

                        <div class="nav justify-content-end">
                            <button type="button" id="sidebarCollapse" class="btn" >
                                <span class="navbar-toggler-icon"></span>
                            </button>
                        </div>
                    </div>
                </nav>
                <p class="intro-header blue">¿Están en lo correcto estas personas adultas?</p>
                <section class="container">
                    <div class="main">
                        <div id="act_01" class="">

                            <div class="cont row">
                                <div class="col-12">
                                    <p>Escuche a cada una de estas personas describir una conducta. Piense brevemente si esta conducta es adecuada o no. Luego, presione el icono para descubrirlo.</p>
                                </div>
                                <div class="col-6 col-md-4">
                                    <div class="item item-thumb" data-slider="1" data-title="Abuso sexual en línea">
                                        <a href="3-03_act_01.php"><img src="../img/mod3/3-01_act-thumb1.png" alt="" class="img-fluid"/></a>
                                    </div>
                                </div>
                                <div class="col-6 col-md-4">
                                    <div class="item item-thumb" data-slider="2" data-title="Explotación sexual en línea" >
                                        <a href="3-03_act_02.php"><img src="../img/mod3/3-01_act-thumb2.png" alt="" class="img-fluid"/></a>
                                    </div>
                                </div>
                                <div class="col-6 col-md-4">
                                    <div class="item item-thumb" data-slider="2" data-title="Explotación sexual en línea" >
                                        <a href="3-03_act_03.php"><img src="../img/mod3/3-01_act-thumb3.png" alt="" class="img-fluid"/></a>
                                        
                                    </div>
                                </div>
                                <div class="col-6 col-md-4">
                                    <div class="item item-thumb" data-slider="2" data-title="Explotación sexual en línea" >
                                        <a href="3-03_act_04.php"><img src="../img/mod3/3-01_act-thumb4.png" alt="" class="img-fluid"/></a>
                                        
                                    </div>
                                </div>
                                <div class="col-6 col-md-4">
                                    <div class="item item-thumb" data-slider="2" data-title="Explotación sexual en línea" >
                                        <a href="3-03_act_05.php"><img src="../img/mod3/3-01_act-thumb5.png" alt="" class="img-fluid"/></a>
                                        
                                    </div>
                                </div>
                                <div class="col-6 col-md-4">
                                    <div class="item item-thumb" data-slider="2" data-title="Explotación sexual en línea" >
                                        <a href="3-03_act_06.php"><img src="../img/mod3/3-01_act-thumb6.png" alt="" class="img-fluid"/></a>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <?php require '../footer.php'; ?>
            </div>
            <nav id="sidebar" class="">
                <div class="sidebar-header">
                    <h3>Menu</h3>
                </div>

                <ul class="list-unstyled components">
                    <li>
                        <a href="#" class="nav-sobre">Sobre el proyecto</a>
                    </li>
                    <li>
                        <a href="http://crianzatecnologica.org/" target="_blank" class="nav-recursos">Recursos relacionados</a>
                    </li>
                    <li>
                        <a href="../0-04_intro.php" class="nav-iniciar">Iniciar sesión</a>
                    </li>
                </ul>

            </nav>
        </div>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="../js/bootstrap.bundle.js" type="text/javascript"></script>
        <script src="../js/bootstrap.js" type="text/javascript"></script>
        <script src="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.min.js"></script>

        <script>
            $.ajax({
                url: "../db/user/update_module.php",
                method: "POST",
                data: {
                    step: 3,
                    module: 3
                },
                dataType: "html"
            });
        </script>
    </body>
</html>