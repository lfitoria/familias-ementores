<html>
    <head>
        <meta http-equiv="Cache-Control" content="no-cache" />
        <meta http-equiv="Pragma" content="no-cache" />
        <meta http-equiv="Expires" content="0" />
        <link rel="icon" href="favicon.ico" type="image/gif">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Menú | e-mentores</title>
        <link type="text/css" href="css/bootstrap.css" rel="stylesheet">
        <link type="text/css" href="css/bootstrap-grid.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Nunito:300,400,700" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.css">
        <link href="css/style.css" rel="stylesheet" type="text/css" />
        <link href="css/index.css" rel="stylesheet" type="text/css" />
        <link href="css/mod1.css" rel="stylesheet" type="text/css" />

    </head>
    <body>
        <div class="wrapper">
            <div id="content">
                <section class="container-full index-main">
                    <?php
                    session_start();

                    $user = $_SESSION['user'];
                    $last_id = $user["id"];

                    if (is_null($user)) {

                        echo '<script>window.location="http://ementores.org/0-04_prelogin.php"</script>';

                        die();
                    }
                    ?>
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
                                <div class="main-block-menu">
                                    <?php
                                    include 'db/connection/conexion.php';

                                    $module = 1;

                                    $query = "SELECT * FROM module where user = $last_id and module = $module and is_completed = 0";
                                    $result = $mysqli->query($query);
                                    $row_cnt1 = $result->num_rows;

                                    $query = "SELECT step, is_completed FROM module where user = $last_id and module = $module";
                                    $result = $mysqli->query($query);
                                    $values1 = array();
                                    while ($row = mysqli_fetch_array($result)) {
                                        $values1[] = $row;
                                    }
                                    ?>
                                    <h3 class="text-center menu-title" id="mod1">Me informo: oportunidades y desafíos en la web.</h3>
                                    <div class="menu-mod-cont col-12">
                                        <div class="row">
                                            <div class="intro-menu col-12">
                                                <p>A continuación usted encontrará la información para aprender sobre el uso seguro de internet. Cada vez que termine de ver los contenidos de un capítulo, podrá realizar una actividad evaluativa para desbloquear el capítulo siguiente.</p>
                                            </div>
                                            <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                                                <div class="item-module <?php if ($values1[0]["is_completed"] == 1) : ?>active<?php endif ?>">
                                                    <!-- <img src="img/mod1/modulo1-act1.png" alt=""/> -->
                                                    <a href="mod_1/1-01_vid.php" class="v-act-1">Las TIC en la actualidad</a>
                                                    <!--<p class=dots-mod>. . .</p>-->
                                                </div>
                                            </div>
                                            <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                                                <div class="item-module <?php if ($values1[1]["is_completed"] == 1) : ?>active<?php endif ?>">
                                                    <!-- <img src="img/icon.png" alt=""/> -->
                                                    <a href="mod_1/1-02_inf.php" class="v-act-2">Resumen de las aplicaciones más usadas</a>
                                                    <!--<p class=dots-mod>. . .</p>-->
                                                </div>
                                            </div>
                                            <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                                                <div class="item-module <?php if ($values1[2]["is_completed"] == 1) : ?>active<?php endif ?>">
                                                    <!-- <img src="img/icon.png" alt=""/> -->
                                                    <a href="mod_1/1-03_act.php?t=m" class="v-act-3">Oportunidades y desafíos</a>
                                                    <!--<p class=dots-mod>. . .</p>-->
                                                </div>
                                            </div>
                                            <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                                                <div class="item-module <?php if ($values1[3]["is_completed"] == 1) : ?>active<?php endif ?>">
                                                    <!-- <img src="img/icon.png" alt=""/> -->
                                                    <a href="mod_1/1-04_inf.php" class="v-act-4">¿Qué se puede hacer en Internet?</a>
                                                    <!--<p class=dots-mod>. . .</p>-->
                                                </div>
                                            </div>

                                            <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                                                <div class="item-module <?php if ($values1[4]["is_completed"] == 1) : ?>active<?php endif ?>">
                                                    <!-- <img src="img/icon.png" alt=""/> -->
                                                    <a href="mod_1/1-05_sld.php" class="v-act-5">Síntesis de los principales desafíos</a>
                                                    <!--<p class=dots-mod>. . .</p>-->
                                                </div>
                                            </div>
                                            <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                                                <div class="item-module <?php if ($values1[5]["is_completed"] == 1) : ?>active<?php endif ?>">
                                                    <!-- <img src="img/icon.png" alt=""/> -->
                                                    <a href="mod_1/1-06_vid.php" class="v-act-6">Video sobre abuso y explotación sexual</a>
                                                    <!--<p class=dots-mod>. . .</p>-->
                                                </div>
                                            </div>
                                            <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                                                <div class="item-module <?php if ($values1[6]["is_completed"] == 1) : ?>active<?php endif ?>">
                                                    <!-- <img src="img/icon.png" alt=""/> -->
                                                    <a href="mod_1/1-07_act.php" class="v-act-7">Señales del abuso</a>
                                                    <!--<p class=dots-mod>. . .</p>-->
                                                </div>
                                            </div>
                                            <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                                                <div class="item-module <?php if ($values1[7]["is_completed"] == 1) : ?>active<?php endif ?>">
                                                    <!-- <img src="img/icon.png" alt=""/> -->
                                                    <a href="mod_1/1-08_sld.php" class="v-act-8">Consecuencias del abuso</a>
                                                    <!--<p class=dots-mod>. . .</p>-->
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12 item-module-final">
                                                <?php if ($row_cnt1 == 0): ?><a href="mod_1/1-09_eva.php">ACTIVIDAD FINAL</a><?php endif; ?>
                                            </div>
                                        </div>
                                    </div>

                                    <?php
                                    $module2 = 2;

                                    $query2 = "SELECT * FROM module where user = $last_id and module = $module2 and is_completed = 0";
                                    $result2 = $mysqli->query($query2);
                                    $row_cnt2 = $result2->num_rows;

                                    $query2 = "SELECT step, is_completed FROM module where user = $last_id and module = $module2";
                                    $result2 = $mysqli->query($query2);
                                    $values2 = array();
                                    while ($row = mysqli_fetch_array($result2)) {
                                        $values2[] = $row;
                                    }

                                    $queryAct1 = "SELECT * FROM activity where user = $last_id and module = 1";
                                    $resultAct1 = $mysqli->query($queryAct1);
                                    $activity1 = mysqli_fetch_assoc($resultAct1);
                                    ?>
                                    <div class="module <?php if ($activity1["is_approved"] == 0) : ?>disabled<?php endif ?>">
                                        <h3 class="text-center menu-title" id="mod2">Prevengo: acompaño en línea.</h3>
                                        <div class="menu-mod-cont col-12">
                                            <div class="row">
                                                <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                                                    <div class="item-module <?php if ($values2[0]["is_completed"] == 1) : ?>active<?php endif ?>">
                                                        <!-- <img src="img/icon.png" alt=""/> -->
                                                        <a href="mod_2/2-01_vid.php" class="v2-act-1">El acompañamiento en las TIC</a><!--<p class=dots-mod>. . .</p>-->
                                                    </div>
                                                </div>
                                                <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                                                    <div class="item-module <?php if ($values2[1]["is_completed"] == 1) : ?>active<?php endif ?>">
                                                        <!-- <img src="img/icon.png" alt=""/> -->
                                                        <a href="mod_2/2-02a_sli.php" class="v2-act-2">Crianza Respetuosa para acompañar en el uso de las TIC: poniendo límites con amor</a><!--<p class=dots-mod>. . .</p>-->
                                                    </div>
                                                </div>
                                                <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                                                    <div class="item-module <?php if ($values2[9]["is_completed"] == 1) : ?>active<?php endif ?>">
                                                        <!-- <img src="img/icon.png" alt=""/> -->
                                                        <a href="mod_2/2-02b_sli.php" class="v2-act-2a">¿Cómo aplicar la crianza respetuosa? Algunos ejemplo</a><!--<p class=dots-mod>. . .</p>-->
                                                    </div>
                                                </div>
                                                <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                                                    <div class="item-module <?php if ($values2[2]["is_completed"] == 1) : ?>active<?php endif ?>">
                                                        <!-- <img src="img/icon.png" alt=""/> -->
                                                        <a href="mod_2/2-03_act.php" class="v2-act-3">Conductas de riesgo vs. Conductas protectoras</a><!--<p class=dots-mod>. . .</p>-->
                                                    </div>
                                                </div>
                                                <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                                                    <div class="item-module <?php if ($values2[3]["is_completed"] == 1) : ?>active<?php endif ?>">
                                                        <!-- <img src="img/icon.png" alt=""/> -->
                                                        <a href="mod_2/2-04_inf.php" class="v2-act-4">Protección de la información personal</a><!--<p class=dots-mod>. . .</p>-->
                                                    </div>
                                                </div>


                                                <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                                                    <div class="item-module <?php if ($values2[4]["is_completed"] == 1) : ?>active<?php endif ?>">
                                                        <!-- <img src="img/icon.png" alt=""/> -->
                                                        <a href="mod_2/2-05_act.php" class="v2-act-5">¿Aceptaría a esta persona como contacto?</a><!--<p class=dots-mod>. . .</p>-->
                                                    </div>
                                                </div>
                                                <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                                                    <div class="item-module <?php if ($values2[5]["is_completed"] == 1) : ?>active<?php endif ?>">
                                                        <!-- <img src="img/icon.png" alt=""/> -->
                                                        <a href="mod_2/2-06_act.php" class="v2-act-6">Atención a las emociones</a><!--<p class=dots-mod>. . .</p>-->
                                                    </div>
                                                </div>
                                                <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                                                    <div class="item-module <?php if ($values2[6]["is_completed"] == 1) : ?>active<?php endif ?>">
                                                        <!-- <img src="img/icon.png" alt=""/> -->
                                                        <a href="mod_2/2-07_inf.php" class="v2-act-7">Prevenir ≠ prohibir</a><!--<p class=dots-mod>. . .</p>-->
                                                    </div>
                                                </div>
                                                <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                                                    <div class="item-module <?php if ($values2[7]["is_completed"] == 1) : ?>active<?php endif ?>">
                                                        <!-- <img src="img/icon.png" alt=""/> -->
                                                        <a href="mod_2/2-08_vid.php" class="v2-act-8">Huella digital</a><!--<p class=dots-mod>. . .</p>-->
                                                    </div>
                                                </div>


                                                <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                                                    <div class="item-module <?php if ($values2[8]["is_completed"] == 1) : ?>active<?php endif ?>">
                                                        <!-- <img src="img/icon.png" alt=""/> -->
                                                        <a href="mod_2/2-09_sli.php" class="v2-act-9">Estrategias de prevención</a><!--<p class=dots-mod>. . .</p>-->
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-12 item-module-final">
                                                    <?php if ($row_cnt2 == 0): ?><a href="mod_2/2-10_eva.php">ACTIVIDAD FINAL</a><?php endif; ?>
                                                </div>
                                            </div>
                                        </div>


                                    </div>

                                    <?php
                                    $module3 = 3;

                                    $query3 = "SELECT * FROM module where user = $last_id and module = $module3 and is_completed = 0";
                                    $result3 = $mysqli->query($query3);
                                    $row_cnt3 = $result3->num_rows;

                                    $query3 = "SELECT step, is_completed FROM module where user = $last_id and module = $module3";
                                    $result3 = $mysqli->query($query3);
                                    $values3 = array();
                                    while ($row = mysqli_fetch_array($result3)) {
                                        $values3[] = $row;
                                    }
              
                                    $queryAct2 = "SELECT * FROM activity where user = $last_id and module = 2";
                                    $resultAct2 = $mysqli->query($queryAct2);
                                    $activity2 = mysqli_fetch_assoc($resultAct2);
                                    // var_dump($activity2);
                                    echo "<pre>";
                                    var_dump($values3);
                                    echo "</pre>";    
                                    ?>
                                    <div class="module <?php if ($activity2["is_approved"] == 0) : ?>disabled<?php endif ?>">
                                        <h3 class="text-center menu-title" id="mod3">Protejo: reacciono ante situaciones.</h3>
                                        <div class="menu-mod-cont col-12">
                                            <div class="row">
                                                <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                                                    <div class="item-module <?php if ($values3[0]["is_completed"] == 1) : ?>active<?php endif ?>">
                                                        <!-- <img src="img/icon.png" alt=""/> -->
                                                        <a href="mod_3/3-01_vid.php" class="v3-act-1">¿Qué dicen las leyes?</a><!--<p class=dots-mod>. . .</p>-->
                                                    </div>
                                                </div>
                                                <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                                                    <div class="item-module <?php if ($values3[1]["is_completed"] == 1) : ?>active<?php endif ?>">
                                                        <!-- <img src="img/icon.png" alt=""/> -->
                                                        <a href="mod_3/3-03_act.php"" class="v3-act-3">¿Están en lo correcto estas personas adultas?</a><!--<p class=dots-mod>. . .</p>-->
                                                    </div>
                                                </div>
                                                <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                                                    <div class="item-module <?php if ($values3[2]["is_completed"] == 1) : ?>active<?php endif ?>">
                                                        <a href="mod_3/3-04_inf.php"" class="v3-act-4">Señales de alarma en una persona menor de edad abusada sexualmente</a><!--<p class=dots-mod>. . .</p>-->
                                                    </div>
                                                </div>

                                                <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                                                    <div class="item-module <?php if ($values3[3]["is_completed"] == 1) : ?>active<?php endif ?>">
                                                        <!-- <img src="img/icon.png" alt=""/> -->
                                                        <a href="mod_3/3-05_vid.php" class="v3-act-5">¿Cómo actuar ante estas situaciones?</a><!--<p class=dots-mod>. . .</p>-->
                                                    </div>
                                                </div>
                                                <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                                                    <div class="item-module <?php if ($values3[4]["is_completed"] == 1) : ?>active<?php endif ?>">
                                                        <!-- <img src="img/icon.png" alt=""/> -->
                                                        <a href="mod_3/3-07_inf.php"" class="v3-act-7">¿Qué hacer en caso de sexting, grooming y sextorsión?</a><!--<p class=dots-mod>. . .</p>-->
                                                    </div>
                                                </div>
                                                <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                                                    <div class="item-module <?php if ($values3[5]["is_completed"] == 1) : ?>active<?php endif ?>">
                                                        <!-- <img src="img/icon.png" alt=""/> -->
                                                        <a href="mod_3/3-08_vid.php" class="v3-act-7">Plan de acción “en acción”</a><!--<p class=dots-mod>. . .</p>-->
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-12 item-module-final">
                                                    <?php if ($row_cnt3 == 0): ?><a href="mod_3/3-09_eva.php">ACTIVIDAD FINAL</a><?php endif; ?>
                                                   
                                                </div>
                                            </div>
                                        </div>
                                        <?php if ($activity1["is_approved"] == 1 && $activity1["is_approved"] == 1) : ?>
                                            <div class="col-12 item-cert">
                                                <a href="0-06_cert.php" class="btn-cert">Descargar certificado</a>
                                            </div>
                                        <?php endif ?>
                                    </div>
                                </div>
                            </div>  
                        </section>
                    </div>
                </section>
                <?php require './footer.php'; ?>
            </div><!--  fin  <div id="content"> -->
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
        </div> <!-- fin wrapper -->

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="js/bootstrap.bundle.js" type="text/javascript"></script>
        <script src="js/bootstrap.js" type="text/javascript"></script>
        <script>
            $(".module.disabled a").each(function () {
                $(this).attr("href", "");
                $(this).attr("disabled", true);
            });

            $(".module.disabled a").click(function (e) {
                e.preventDefault();
            });

            $(window).load(function(){
                var type = window.location.hash.substr(1);

                $("html, body").animate({ scrollTop: $('#'+ type).offset().top }, 500);
            });
        </script>
    </body>
</html>