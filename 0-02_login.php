<html>
    <head>
        <link rel="icon" href="favicon.ico" type="image/gif">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Registro | e-mentores</title>
        <link  type="text/css"  href="css/bootstrap.css" rel="stylesheet">
        <link  type="text/css"  href="css/bootstrap-grid.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Nunito:300,400,700, 800" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.css">
        <link href="css/style.css" rel="stylesheet" type="text/css" />
        <link href="css/botones.css" rel="stylesheet" type="text/css" />
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
                                    <?php
                                    session_start();
                                    
                                    $incorrect_user = isset($_SESSION['incorrect_user'])? $_SESSION['incorrect_user'] : null;
                                   
                                    if ($incorrect_user) {?>
                                    <div class="alert alert-warning" role="alert">
                                        ¡Huummm! Al parecer este correo no ha sido registrado aún. Corrobórelo y vuelva a intentarlo.
                                    </div>
                                    <?php } ?>
                                    
                                    <?php
                                    $duplicated_user = isset($_SESSION['duplicated_user'])? $_SESSION['duplicated_user'] : null;
                                    
                                    if ($duplicated_user) {?>
                                    <div class="alert alert-warning" role="alert">
                                        Oh oh, parece que este correo ya está registrado
                                    </div>
                                    <?php } ?>
                                    
                                    <div class="email-input">
                                        <h2 class="text-center"><img src="img/icon-form.png" alt=""/></h2>

                                    </div> 
                                    <div class="id-input">
                                        <h2 class="text-center"><img src="img/icon-login.png" alt=""/></h2>
                                    </div> 
                                    <p class="text-center label">¡Perfecto! empecemos.</p>

                                    <form action="db/user/login_user.php" method="POST" >
                                        <div class="form-group email-input">
                                            <p class="text-center label-small quest-email">¿Cúal es su correo electrónico?</p>
                                            <input type="email" name="data" class="form-control mr-auto" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="ejemplo@correo.com" required>
                                            <small id="emailHelp" class="form-text text-muted">Coloque el correo electrónico que usó para su registro inicial.</small>
                                        </div> 
                                        

                                        <div class="form-group id-input">
                                            <div class="form-group cr-id">
                                                <p class="text-center label-small">Escriba su número de cédula</p>
                                                <input type="text" name="data" class="form-control text-number mr-auto" id="cr-id-input" aria-describedby="idHelp" minlength="9" maxlength="9" placeholder="X0XXX0XXX" required>
                                                <small id="emailHelp" class="form-text text-muted">Escriba solamente números, sin espacios. <br>Por ejemplo: 101110111</small>
                                            </div> 

                                    <!-- residente -->

                                            <div class="form-group resi-id d-none">
                                                <p class="text-center label-small">Escriba su número de residencia</p>
                                                <input type="text" name="" class="form-control text-number mr-auto" id="cr-id-input2" aria-describedby="idHelp" minlength="12" maxlength="12" placeholder="1NNN-CC...C-EE...Escriba ">
                                                <small id="emailHelp" class="form-text text-muted">Escriba solamente números, sin espacios. <br>Por ejemplo: 117000112002</small>
                                            </div> 

                                            <div class="radio radio-ced">

                                                <input type="radio" name="id-type" id="ced-1" value="1" checked>Número de cédula
                                                <br>
                                                <input type="radio" name="id-type" id="ced-2" value="2">Número de residencia
                                            </div>
                                        </div>
                                        <input type="hidden" name="type" value="1">
                                        <input type="hidden" name="step" value="1">
                                        <button type="submit" class="d-block m-auto btn-continue">Siguiente</button>
                                    </form>
                                </div>
                            </div>

                        </section>

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
            var urlParams = new URLSearchParams(window.location.search);
            $("input[name=type]").val(urlParams.get("t"));
            if (urlParams.get("t") === "1") {
                $(".email-input").remove();
            } else {
                $(".id-input").remove();
            }

            $(".text-number").keypress(function (evt) {
                var charCode = (evt.which) ? evt.which : evt.keyCode;
                if (charCode > 31 && (charCode < 48 || charCode > 57)) {
                    return false;
                }
                return true;
            });
        

            $("input[name=id-type]").change(function () {
                if ($("div.resi-id").hasClass("d-none")) {
                    $("div.resi-id").removeClass("d-none");
                    $("div.cr-id").addClass("d-none");
                    $("input#cr-id-input2").attr("required", true);
                    $("input#cr-id-input").attr("required", false);

                    $("input#cr-id-input").attr("name", '');
                    $("input#cr-id-input2").attr("name", 'data');
                } else {
                    $("div.resi-id").addClass("d-none");
                    $("div.cr-id").removeClass("d-none");
                    $("input#cr-id-input").attr("required", true);
                    $("input#cr-id-input2").attr("required", false);

                    $("input#cr-id-input2").attr("name", '');
                    $("input#cr-id-input").attr("name", 'data');
                }
            });
        </script>
    </body>
</html>