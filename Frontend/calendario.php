<?php
include_once '../Backend/bd_general/conexion.php';

$consulta = "SELECT * FROM evento";

$resultado = $conexion->prepare($consulta);
$resultado->execute();
$data=$resultado->fetchAll(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">

    <title>Celendario PJAT</title>
        <link rel="shortcut icon" href="media/favicon.png">

    <script src="https://kit.fontawesome.com/41bcea2ae3.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="css/estilos.css">
    <link rel="stylesheet" href="/css/eventos.css">
</head>
<body>
    
    <header>

        <div class="container__header">	

            <div class="logo">
                <img src="media/logo-ujat.png" alt="">
            </div>

            <div class="menu">
                <nav>
                    <ul>
                        <li><a href="index.php">Inicio</a></li>
                        <li><a href="calendario.php">Calendario</a></li>
                        <li><a href="ubicacion.php">Ubicación</a></li>
                        <li><a href="conocenos.php">Conócenos</a></li>
                    </ul>
                </nav>
               
            </div>
            <ul class="fa-solid fa-bars" id="icon_menu"></ul>
                <div class="header__acceso">
                    <a class="btn__header-acceso" onClick=" window.location.href='MenuOp.php' ">Acceso</a> 
                </div>
            </ul>
        </div>

    </header>

    <main>

    <div class="container">
        <div>
            <h2>Eventos próximos</h2>
        </div>

        <div class="row justify-content-md-center">
            <?php                            
                    foreach($data as $dat) {                                                        
                    ?>
                    <div class="card-group col-sm-3"  style="width: 18rem">
                        <div class="card">
                        <?php
                            echo "<img class=\"card-img-top\" src=\"data:image/jpeg;base64,".base64_encode($dat['imagen'])."\" alt=\"Imagen_Evento\">";   
                        ?>
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $dat['tituloEvento'] ?></h5> 

                                <?php
                                    $orgDate = $dat['fechaEvento'];  
                                    $newDate = date("d/m/Y", strtotime($orgDate));  
                                ?>
                                <p class="card-text"><?php echo $newDate ?></p>
                                
                            </div>
                        </div>
                    </div>
                    <?php
                        }
                ?>
        </div>
        <br>
        <br>
        <br>
        <div>
            <h2>Calendario escolar 2021-2022</h2>
        </div>
        <div>
        <embed src="media/CalendarioEscolar .pdf#toolbar=0&navpanes=0&scrollbar=0" type="application/pdf" width="100%" height="600px" />

        </div>
    </div>

            

        <footer>
            <div class="container__banner">
                <div class="banner">
                    <div class="banner__icon-heart">
                        <img src="media/heart_notify.png" id="icon_heart" alt="">
                    </div>
                    <div class="banner__icon-fire">
                        <img src="media/fire-dynamic-color.png" id="icon_fire" alt="">
                    </div>
                    <div class="banner__text">
                        <h2>Niños con un mejor Futuro.</h2>
                        <a href="conocenos.html">Contactanos</a>
                    </div>
                </div>

            </div>
        </footer>

    </main>

    


    <script src="js/script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
            integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3"
            crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"
        integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V"
        crossorigin="anonymous"></script>
</body>
</html>