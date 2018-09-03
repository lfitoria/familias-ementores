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
        <link href="https://fonts.googleapis.com/css?family=Nunito:300,400,700, 800" rel="stylesheet">
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

                    <div class="bck-intro padding-top-bottom">
                        <section class="container">
                            <div class="row justify-content-md-center">
                                <div class="col-sm-10 main-block">
                                    <h2 class="text-center"><img src="img/icon-question.png"></h2>
                                    <form action="db/user/update_user.php" method="POST">
                                        <div class="form-group">
                                            <p class="text-center label">Escoja su personaje</p>
                                            <div class="row">
                                                <div class="form-check d-inline-block col-6 chk-female">
                                                    <input class="form-check-input d-none" type="radio" name="data" id="exampleRadios1" value="1">
                                                    <label class="form-check-label float-right" for="exampleRadios1">
                                                        <img src="img/icon-female.png" alt=""/>
                                                    </label>
                                                </div>
                                                <div class="form-check d-inline-block col-6 chk-male">
                                                    <input class="form-check-input d-none" type="radio" name="data" id="exampleRadios2" value="2">
                                                    <label class="form-check-label" for="exampleRadios2">
                                                        <img src="img/icon-male.png" alt=""/>
                                                    </label>
                                                </div>
                                            </div>
                                            <input type="hidden" name="step" value="3">
                                        </div>

                                    </form>
                                </div>
                            </div>

                        </section>

                    </div>
                    <div class="barra-progress">
                            <div class="barra-progress-img-3"></div>
                        </div>
                </section>
                <?php require './footer.php'; ?>
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
                        <a href="#" class="nav-recursos">Recursos relacionados</a>
                    </li>
                    <li>
                        <a href="0-04_intro.php" class="nav-iniciar">Iniciar sesión</a>
                    </li>
                </ul>

            </nav>
        </div>


        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="js/bootstrap.bundle.js" type="text/javascript"></script>
        <script src="js/bootstrap.js" type="text/javascript"></script>
        <script>
            $("input[name=data]").change(function () {
                $("form").submit();
            });
        </script>
    </body>
</html>