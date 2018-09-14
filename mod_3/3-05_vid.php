
<html id="page-2-01">
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
                <p class="intro-header blue">El acompañamiento en las TIC</p>
                <section class="container">
                    <div class="main">
                        <div id="act_01" class="">
                            <div class="cont row">
                                <div class="col-12">
                                    <video width="100%" height="auto" id="video" controls>
                                        <source src="/familias-ementores/videos/2-01_vid.mp4" type="video/mp4">
                                    </video>
                                    <a href="../0-03_menu.php" class="back_to_menu">Volver al menú</a>
                                </div>
                                <div class="modal" id="modal_3-05_vid" tabindex="-1" role="dialog" data-backdrop="static" data-keyboard="false">
                                    <div class="modal-dialog modal-lg" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header"></div>
                                            <div class="modal-body">
                                                <div class="row" >
                                                    <div class="col-12">
                                                        <p>Sofía no le ha enviado nada pero su mamá, preocupada, le pide ver los mensajes. Ella no quiere porque le da vergüenza.</p>
                                                        <p>¿Qué debería hacer su mamá?</p>
                                                        <div class="row" >
                                                            <div class="col-6">
                                                                <button class="btn btn-info" onclick="playVideo()">Llamar a la persona y enfrentarla</button>
                                                            </div>
                                                            <div class="col-6">
                                                                <button class="btn btn-info" onclick="playVideo()">Sacar pantallazos de los mensajes para que sirvan de prueba en una denuncia.</button>
                                                            </div>
                                                        </div>
                                                        
                                                        
                                                    </div>
                                                </div>
                                            </div>
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
                    step: 5,
                    module: 3
                },
                dataType: "html"
            });


            let video = document.getElementById("video");

            function playVideo(){
                $("#modal_3-05_vid").modal("hide");
                video.currentTime = 6;
                video.play();
            }

            $("#video").on("timeupdate", function(){
                console.log(parseInt(this.currentTime));
                if(parseInt(this.currentTime) == 5){
                    this.pause();
                    $("#modal_3-05_vid").modal("show");
                }
            });
        </script>
    </body>
</html>