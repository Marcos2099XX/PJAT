<?php require_once "vistas/superior.php" ?>

<?php 
include_once 'bd_materias/conexion.php';

$idMateria = $_GET['idMateria'];

$consulta = "SELECT * FROM materia WHERE idMateria= '$idMateria'";

$resultado = $conexion->prepare($consulta);
$resultado->execute();
$data=$resultado->fetchAll(PDO::FETCH_ASSOC);


?>


                <div class="col-md-4 mx-auto">
                    <form action="bd_materias/actualizar.php" method="POST">
                    
                                <input type="hidden" name="idMateria" value="<?php echo $data[0]['idMateria']  ?>">
                                
                                <input type="text" class="form-control mb-3" name="nombreMateria" placeholder="Materia" value="<?php echo $data[0]['nombreMateria']?>">

                                
                            <input type="submit" class="btn btn-primary btn-block" value="Actualizar">
                    </form>
                    
                </div>
