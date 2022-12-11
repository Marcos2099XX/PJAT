<!-- Define que el documento esta bajo el estandar de HTML 5 -->
<!doctype html>

<!-- Representa la raíz de un documento HTML o XHTML. Todos los demás elementos deben ser descendientes de este elemento. -->
<html lang="es">
    
    <head>
        
        <meta charset="utf-8">
        <link rel="shortcut icon" href="media/favicon.png">
        
        <title> Formulario de Acceso </title>    
        
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <meta name="author" content="Videojuegos & Desarrollo">
        <meta name="description" content="Ejemplo de formulario de acceso basado en HTML5 y CSS">
        <meta name="keywords" content="login,formulariode acceso html">
        
        <link href="https://fonts.googleapis.com/css?family=Nunito&display=swap" rel="stylesheet"> 
        
        <!-- Link hacia el archivo de estilos css -->
        <link rel="stylesheet" href="css/login.css">
        
        <style type="text/css">
            
        </style>
        
        <script type="text/javascript">
        
        </script>
        
    </head>
    
    <body>
    
        <div id="contenedor">
            
            <div id="contenedorcentrado">
                <div id="login">
                <form action="../Backend/bd_general/consultarMatricula.php" method="POST">

                    <input type="text" class="form-control mb-3" name="matricula" placeholder="Matricula del alumno">

                    <input type="submit" class="btn btn-secondary" value="Acceder">
                </form>
                    
                </div>
                <div id="derecho">
                    <div class="titulo">
                        Bienvenido
                    </div>
                    <hr>
                    <div class="pie-form">
                        <FONT COLOR="black">Ingresa tu matricula para acceder al menú de opciones</FONT>
                        

                        <hr>
                        <a href="index.php">« Volver</a>
                        <a href="loginAdmin.php">« Ingresar como administrador</a>
                    </div>
                </div>
            </div>
        </div>
        
    </body>
</html>