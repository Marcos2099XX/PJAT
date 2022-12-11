<?php require_once "vistas/superior.php" ?>

<?php 
include_once 'bd_grupos/conexion.php';

$idGrupo = $_GET['idGrupo'];

$consulta = "SELECT * FROM grupo WHERE idGrupo= '$idGrupo'";

$resultado = $conexion->prepare($consulta);
$resultado->execute();
$data=$resultado->fetchAll(PDO::FETCH_ASSOC);


?>


                <div class="col-md-4 mx-auto">
                    <form action="bd_grupos/actualizar.php" method="POST">
                    
                                <input type="hidden" name="idGrupo" value="<?php echo $data[0]['idGrupo']  ?>">
                                
                                <input type="text" class="form-control mb-3" name="nombreGrupo" placeholder="Grupo" value="<?php echo $data[0]['nombreGrupo']?>">

                            <input type="submit" class="btn btn-primary btn-block" value="Actualizar">
                    </form>
                    
                </div>
