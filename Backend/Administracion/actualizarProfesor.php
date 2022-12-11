<?php require_once "vistas/superior.php" ?>

<?php 
include_once 'bd_profesores/conexion.php';

$idProfesor = $_GET['idProfesor'];

$consulta = "SELECT * FROM profesor a INNER JOIN grupo b on a.idGrupo = b.idGrupo WHERE idProfesor= '$idProfesor'";

$resultado = $conexion->prepare($consulta);
$resultado->execute();
$data=$resultado->fetchAll(PDO::FETCH_ASSOC);

$SexoProfesor = $data[0]['sexo'];
$GrupoProfesor = $data[0]['nombreGrupo'];

$sexos = array ("Masculino","Femenino");

?>


                <div class="col-md-4 mx-auto">
                    <form action="bd_profesores/actualizar.php" method="POST" enctype = "multipart/form-data">
                    
                                <input type="hidden" name="idProfesor" value="<?php echo $data[0]['idProfesor']  ?>">
                                
                                <input type="text" required class="form-control mb-3" name="nombre" placeholder="Nombre" value="<?php echo $data[0]['nombre']?>">
                                <input type="text" required class="form-control mb-3" name="apellidoP" placeholder="Apellido Paterno" value="<?php echo $data[0]['apellidoP']  ?>">
                                <input type="text" required class="form-control mb-3" name="apellidoM" placeholder="Apellido Materno" value="<?php echo $data[0]['apellidoM']  ?>">
                                
                                <select name="sexo" id="sexo" class="form-select mb-3">
                                    <?php
                                    foreach ($sexos as $opcion) {
                                        
                                        if($SexoProfesor == $opcion){
                                            echo '<option selected value="'.$opcion.'">'.$opcion.'</option>';
                                        }else{
                                            echo '<option value="'.$opcion.'">'.$opcion.'</option>';
                                        }
                                        
                                    }
                                    ?>
                                </select>
                                
                                <input type="text" required class="form-control mb-3" name="matricula" placeholder="Matricula" value="<?php echo $data[0]['matricula']  ?>">
                                <input type="tel" required class="form-control mb-3" name="telefono" placeholder="Teléfono" value="<?php echo $data[0]['telefono']  ?>">
                                <input type="email" required class="form-control mb-3" name="correo" placeholder="Correo" value="<?php echo $data[0]['correo']  ?>">
                                

                                <select name="grupo" id="grupo" class="form-select mb-3">
                                    <?php
                                        include_once 'bd_profesores/conexion.php';
                                        
                                        $consulta = "SELECT * FROM grupo";
                                        
                                        $resultado = $conexion->prepare($consulta);
                                        $resultado->execute();
                                        $grupos=$resultado->fetchAll(PDO::FETCH_ASSOC);

                                        foreach ($grupos as $opcion){

                                            if($GrupoProfesor == $opcion['nombreGrupo']){
                                                echo '<option selected value="'.$opcion["nombreGrupo"].'">'.$opcion["nombreGrupo"].'</option>';
                                            }else{
                                                echo '<option value="'.$opcion["nombreGrupo"].'">'.$opcion["nombreGrupo"].'</option>';
                                            }
                                        
                                        }
                                    ?>
                                </select>

                                <label for="imagen">Fotografía:</label>
                                <input type="file" class="form-control mb-3" name="imagen" accept="image/*" required>

                            <input type="submit" class="btn btn-primary btn-block" value="Actualizar">
                    </form>
                    
                </div>
