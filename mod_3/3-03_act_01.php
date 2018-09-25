<html id="page-3-03">
    <head>
        <meta http-equiv="Cache-Control" content="no-cache" />
        <meta http-equiv="Pragma" content="no-cache" />
        <meta http-equiv="Expires" content="0" />
        <link rel="icon" href="../favicon.ico" type="image/gif">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Protejo: reacciono ante situaciones. | e-mentores</title>
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
                        <div class="nav justify-content-start"></div>
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
                        <div id="act_01" class="btn-j-center">
                            <div class="mod">
                                <div class="row">
                                    <div class="col-12 col-md-5">
                                        <img src="../img/mod3/3-03_act-personaje1.png" alt="" class="img-fluid"/>
                                    </div>
                                    <div class="col-12 col-md-7">
                                        <div class="audio_3-03 per1">
                                            <p class="text-center intro-label">Pienso que hay que tener cuidado al hacer una denuncia de abuso sexual en línea. Cuando el abuso se da en Internet, es imposible aportar pruebas. Si yo denuncio un delito de este tipo, ¡no tengo cómo probarlo!</p>
                                            <audio height="auto" id="video" controls>
                                                <source src="../audios/mod3/3-03_act-situacion1.mp3" type="audio/mp3">
                                            </audio>
                                        </div>
                                        <button class="btn-modal btn-modal-3-03">Respuesta</button>
                                    </div>
                                </div>
                                <div class="d-block d-sm-none">
                                    <div class="row ">
                                        <a class="gotoModulePage conti" href="3-03_act_02.php">Continuar</a>
                                    </div>
                                </div>
                                <a class="gotoModulePage conti" href="3-03_act_02.php">Continuar</a>
                                
                                <a href="3-03_act.php" class="back_to_menu">Volver</a>
                                
                            </div>
                        </div>

                    </div>
                    
                    <div class="modal" id="modal_3-03_act" tabindex="-1" role="dialog">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                </div>
                                <div class="modal-body">
                                    <div class="row 3-03-act-mdl" >
                                        <div class="col-12">
                                            <p>Falso. Aunque un delito sexual tenga lugar en línea, es posible obtener pruebas, ya sean fotos, audios, vídeos o capturas de los mensajes intercambiados.  Además la ley nos dice que estamos obligados a denunciar este tipo de delitos, sean físicos o a través de las TIC.</p>
                                        </div>
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
                        <a href="/familias.php" class="nav-sobre">Sobre el proyecto</a>
                    </li>
                    <li>
                        <a href="http://www.crianzatecnologica.org" target="_blank" class="nav-sobre">Recursos relacionados</a>
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
            $(".btn-modal").click(function(){
                $("#modal_3-03_act").modal("show");
            });
        </script>
    </body>
</html>