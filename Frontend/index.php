<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PJAT</title>
    <link rel="shortcut icon" href="media/favicon.png">

    <script src="https://kit.fontawesome.com/41bcea2ae3.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="css/estilos.css">
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
        <div class="wrapper">
            <div class="slider" id="slider">
              <ul class="slides">
                <li class="slide" id="slide1">
                  <a href="#">
                    <p class="caption"></p>
                    <img src="media/photo1.jpg" alt="photo 1">
                  </a>
                </li>
                <li class="slide" id="slide2">
                  <a href="#">
                    <p class="caption"></p>
                    <img src="media/photo2.jpg" alt="photo 2">
                  </a>
                </li>
                <li class="slide" id="slide3">
                  <a href="#">
                    <p class="caption"></p>
                    <img src="media/photo3.jpg" alt="photo 3">
                  </a>
                </li>
                <li class="slide" id="slide4">
                  <a href="#">
                    <p class="caption"></p>
                    <img src="media/photo4.jpg" alt="photo 4">
                  </a>
                </li>
                <li class="slide" id="slide5">
                  <a href="#">
                     <p class="caption"></p>
                     <img src="media/photo5.jpg" alt="photo 5">
                  </a>
                </li>
                <li class="slide">
                  <a href="#">
                    <p class="caption"></p>
                    <img src="media/photo1.jpg" alt="photo 1">
                  </a>
                </li>
              </ul>
              <ul class="slider-controler">
                <li><a href="#slide1">&bullet;</a></li>
                <li><a href="#slide2">&bullet;</a></li>
                <li><a href="#slide3">&bullet;</a></li>
                <li><a href="#slide4">&bullet;</a></li>
                <li><a href="#slide5">&bullet;</a></li>
              </ul>
            </div>
          </div>

        <div class="cover">
            
            <div class="text__information-cover">
                <h1>Misión.</h1>

                <p>Desarrollar en los alumnos las capacidades, habilidades,
                    actitudes y valores para su formación integral: competencias fundamentales 
                    para su incorporación a la sociedad y para todo el aprendizaje a lo largo 
                    de la vida. Todo por lograr los propósitos educativos.
                </p>

                    <p>.</p>

                <h1>Visión.</h1>

                <p>Ser una institución educativa básica donde se imparta una educación laica, inclusiva
                    y sobre todo de calidad, que cumpla y sirva de base para el interés de los alumnos, 
                    logrando una formación integral como seres humanos para un desarrollo pleno y armónico;
                    siendo críticos, analíticos y reflexivos, con valores sólidos que le sirvan para 
                    enfrentar.</p>
            </div>

            <div class="media__cover">
                <video src="media/Estudiantes.mp4" autoplay playinline loop muted preload="auto"></video>
            </div>
          
              <script src="js/script.js"></script>
    </main>
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
</body>
</html>
