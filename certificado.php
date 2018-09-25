<!DOCTYPE HTML>
<html lang="es">
    <head>
        <meta charset="UTF-8"/>
        <title>CERTIFICADO</title>
        <link type="text/css" href="css/bootstrap.css" rel="stylesheet">
        <link type="text/css" href="css/bootstrap-grid.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet" type="text/css" />
        <link href="css/index.css" rel="stylesheet" type="text/css" />
        <link href="css/mod1.css" rel="stylesheet" type="text/css" />
        <style type="text/css">
        
        #header{
            padding-bottom: 20px;
        }
        #header img{
            width: 350px;
        }
        #header p{
            text-align: center;
        }
        .text-center{text-align: center;}
        .col-6-left{
            float: left;
            width: 40%;
            padding: 10px; 
        }

        .col-6-right{
            float: right;
            width: 40%;
            padding: 10px; 
        }

        .body p{font-size: 20px; font-family: "Nunito"; line-height: 22px; text-align: center;}
        p.name {font-family: "Nunito"; color: #55C7DC; font-size: 20px;  text-align: center; }
        p.name span{font-family: "Nunito"; line-height: 22px; font-size: 35px; text-align: center; color: #D5643D; padding-bottom: 20px;}
        
        h2, h3{
            text-align: center;
            color: #136C73;
            font-family: "Nunito"; 
            border: 1px solid #136C73;
        }

        h2 span{

            font-weight: bold;
            text-transform: uppercase; 
        }

        table img{margin: 10px 27px;}
        table p{font-size: 13px; font-family: "Nunito"; line-height: 20px; margin: 10px 5px;}
        </style>
    </head>
    <body>
        <div id="header">
           <p> <img src="img/logo-ementores.png" alt="" class="img-fluid"/></p>
        </div>
        <div id="body" style="width: 100%">
            <br>
            <br>
            <br>
            <h2>La Fundación Paniamor otorga el siguiente <br><span>CERTIFICADO DE APROVECHAMIENTO</span> a:</h2>
            <p class="name"><span><?php echo $_POST['name'] ?></span></p>
            <br>
            <div class="body">
                <p>por la conclusión del programa de aprendizaje en línea E-mentores Familias.</p>
                <p>¡Felicidades! Ahora cuenta con herramientas para promover el uso seguro de internet por parte de niños, niñas y adolescentes.</p>
                <br>
                <p>Otorgado el <?php echo date('d/m/Y'); ?></p>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <table  cellpadding="1" cellspacing="1">
                     <tr>
                        <td><p>Con el apoyo de:</p></td>
                        <td><p>Respaldo institucional de:</p></td>
                        <td><p>Una iniciativa de:</p></td>
                    </tr>
                    <tr>
                        <td>
                            <p class="text-center"><img src="img/footer/logo-End-Violence-fondo-transparente.png" alt="End Violence Against Children" class="img-fluid prefooter-logos"></p>
                        </td>
                        <td >
                            <p class="text-center"><img src="img/logo-imas.png" alt="End Violence Against Children" class="img-fluid prefooter-logos logo-imas"></p>
                        </td>
                        <td>
                            <p class="text-center"><img src="img/footer/footer-logo-paniamor.png" alt="Paniamor" class="img-fluid prefooter-logos"></p>
                        </td>
                    </tr>
            </table>

            </div>     
            
        </div>
     
        
    </body>
</html>