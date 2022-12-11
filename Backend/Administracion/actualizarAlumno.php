<?php require_once "vistas/superior.php" ?>

<?php 
include_once 'bd_alumnos/conexion.php';

$idAlumno = $_GET['idAlumno'];

$consulta = "SELECT * FROM alumno a INNER JOIN grupo b on a.idGrupo = b.idGrupo WHERE idAlumno= '$idAlumno'";

$resultado = $conexion->prepare($consulta);
$resultado->execute();
$data=$resultado->fetchAll(PDO::FETCH_ASSOC);

$SexoAlumno = $data[0]['sexo'];
$GrupoAlumno = $data[0]['nombreGrupo'];

$sexos = array ("Masculino","Femenino");

?>


                <div class="col-md-4 mx-auto">
                    <form action="bd_alumnos/actualizar.php" method="POST">
                    
                                <input type="hidden" name="idAlumno" value="<?php echo $data[0]['idAlumno']  ?>">
                                
                                <input type="text" class="form-control mb-3" name="nombre" placeholder="Nombre" value="<?php echo $data[0]['nombre']?>">
                                <input type="text" class="form-control mb-3" name="apellidoP" placeholder="Apellido Paterno" value="<?php echo $data[0]['apellidoP']  ?>">
                                <input type="text" class="form-control mb-3" name="apellidoM" placeholder="Apellido Materno" value="<?php echo $data[0]['apellidoM']  ?>">
                                <input type="text" class="form-control mb-3" name="edad" placeholder="Edad" value="<?php echo $data[0]['edad']  ?>">
                                <select name="sexo" id="sexo" class="form-select mb-3">
                                    <?php
                                    foreach ($sexos as $opcion) {
                                        
                                        if($SexoAlumno == $opcion){
                                            echo '<option selected value="'.$opcion.'">'.$opcion.'</option>';
                                        }else{
                                            echo '<option value="'.$opcion.'">'.$opcion.'</option>';
                                        }
                                        
                                    }
                                    ?>
                                </select>

                                <select name="grupo" id="grupo" class="form-select mb-3">
                                    <?php
                                        include_once 'bd_alumnos/conexion.php';
                                        
                                        $consulta = "SELECT * FROM grupo";
                                        
                                        $resultado = $conexion->prepare($consulta);
                                        $resultado->execute();
                                        $grupos=$resultado->fetchAll(PDO::FETCH_ASSOC);

                                        foreach ($grupos as $opcion){

                                            if($GrupoAlumno == $opcion['nombreGrupo']){
                                                echo '<option selected value="'.$opcion["nombreGrupo"].'">'.$opcion["nombreGrupo"].'</option>';
                                            }else{
                                                echo '<option value="'.$opcion["nombreGrupo"].'">'.$opcion["nombreGrupo"].'</option>';
                                            }
                                        
                                        }
                                    ?>
                                </select>

                                <input type="text" class="form-control mb-3" name="matricula" placeholder="Matricula" value="<?php echo $data[0]['matricula']  ?>">
                                
                            <input type="submit" class="btn btn-primary btn-block" value="Actualizar">
                    </form>
                    
                </div>
