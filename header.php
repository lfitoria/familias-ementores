<?php
session_start();

$user = $_SESSION['user'];
$last_id = $user["id"];

if (is_null($user)) {
    header("Location: /");
    die();
}
?>
<header>
    <!-- <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#"><?php print $user["fullname"] ?></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="0-03_menu.php">Menúss de modulos <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/db/user/logout_user.php">Cerrar sesión</a>
                </li>
            </ul>

        </div>
    </nav> -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light d-block">
        <a class="navbar-brand" href="#"><?php print $user["fullname"] ?></a>
                    <div class="container-fluid">
                      
                      <div class="nav justify-content-start">
                            
                       </div>
                       
                       <div class="nav justify-content-center">
                            <a class="mx-auto" href="#"><img src="/img/logo-ementores.png" alt="E-mentores"></a>
                       </div>
                    
                        <div class="nav justify-content-end">
                            <button type="button" id="sidebarCollapse" class="btn" >
                                <span class="navbar-toggler-icon"></span>
                            </button>
                        </div>
                    </div>
                </nav>
</header>