<?php require_once "vistas/superior.php" ?>

<?php 
include_once 'bd_calificaciones/conexion.php';

$idCalificacion = $_GET['idCalificacion'];

$consulta = "SELECT * FROM calificacion a INNER JOIN materia b on a.idMateria = b.idMateria INNER JOIN alumno c on a.idAlumno = c.idAlumno WHERE idCalificacion = '$idCalificacion'";

$resultado = $conexion->prepare($consulta);
$resultado->execute();
$data=$resultado->fetchAll(PDO::FETCH_ASSOC);


$materiaSeleccionada = $data[0]['nombreMateria'];

?>


                <div class="col-md-4 mx-auto">
                    <form action="bd_calificaciones/actualizar.php" method="POST">
                    
                                <input type="hidden" name="idCalificacion" value="<?php echo $data[0]['idCalificacion']  ?>">
                                
                                <input type="text" class="form-control mb-3" name="matricula" placeholder="Matricula" value="<?php echo $data[0]['matricula']?>">
                                <label for="nombreMateria">Materia:</label>
                                <select name="nombreMateria" id="nombreMateria" class="form-select mb-3">
                                    <?php
                                        include_once 'bd_horarios/conexion.php';
                                        
                                        $consulta = "SELECT * FROM materia";
                                        
                                        $resultado = $conexion->prepare($consulta);
                                        $resultado->execute();
                                        $materias=$resultado->fetchAll(PDO::FETCH_ASSOC);

                                        foreach ($materias as $opcion){

                                            if($materiaSeleccionada == $opcion['nombreMateria']){
                                                echo '<option selected value="'.$opcion["nombreMateria"].'">'.$opcion["nombreMateria"].'</option>';
                                            }else{
                                                echo '<option value="'.$opcion["nombreMateria"].'">'.$opcion["nombreMateria"].'</option>';
                                            }
                                        
                                        }
                                    ?>
                                </select>
                                
                                <input type="text" class="form-control mb-3" name="primerBimestre" placeholder="Primer bimestre" value="<?php echo $data[0]['primerBimestre']  ?>">
                                <input type="text" class="form-control mb-3" name="segundoBimestre" placeholder="Segundo bimestre" value="<?php echo $data[0]['segundoBimestre']  ?>">
                                <input type="text" class="form-control mb-3" name="tercerBimestre" placeholder="Tercer bimestre" value="<?php echo $data[0]['tercerBimestre']  ?>">
                                <input type="text" class="form-control mb-3" name="promedio" placeholder="Promedio" value="<?php echo $data[0]['promedio']  ?>">
                                
                            <input type="submit" class="btn btn-primary btn-block" value="Actualizar">
                    </form>
                    
                </div>
