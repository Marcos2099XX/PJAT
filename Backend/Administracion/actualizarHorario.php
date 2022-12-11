<?php require_once "vistas/superior.php" ?>

<?php 
include_once 'bd_horarios/conexion.php';

$idHorario = $_GET['idHorario'];

$consulta = "SELECT * FROM horario a INNER JOIN grupo b on a.idGrupo = b.idGrupo WHERE idHorario= '$idHorario'";

$resultado = $conexion->prepare($consulta);
$resultado->execute();
$data=$resultado->fetchAll(PDO::FETCH_ASSOC);


$grupoHorario = $data[0]['nombreGrupo'];

$materiaLunes = $data[0]['materiaLunes'];
$materiaMartes = $data[0]['materiaMartes'];
$materiaMiercoles = $data[0]['materiaMiercoles'];
$materiaJueves = $data[0]['materiaJueves'];
$materiaViernes = $data[0]['materiaViernes'];

$horaI = $data[0]['horaI'];
$horaF = $data[0]['horaF'];

$horas = array ("08:00","08:30","09:00","09:30","10:30","11:00","11:30","12:00");

?>


                <div class="col-md-4 mx-auto">
                    <form action="bd_horarios/actualizar.php" method="POST">
                    
                                <input type="hidden" name="idHorario" value="<?php echo $data[0]['idHorario']  ?>">

                                <label for="grupo">Grupo:</label>
                                <select name="grupo" id="grupo" class="form-select mb-3">
                                    <?php
                                        include_once 'bd_horarios/conexion.php';
                                        
                                        $consulta = "SELECT * FROM grupo";
                                        
                                        $resultado = $conexion->prepare($consulta);
                                        $resultado->execute();
                                        $grupos=$resultado->fetchAll(PDO::FETCH_ASSOC);

                                        foreach ($grupos as $opcion){

                                            if($opcion['nombreGrupo'] == $grupoHorario){
                                                echo '<option selected value="'.$opcion['nombreGrupo'].'">'.$opcion['nombreGrupo'].'</option>';
                                            }else{
                                                echo '<option value="'.$opcion['nombreGrupo'].'">'.$opcion['nombreGrupo'].'</option>';
                                            }
                                        
                                        }
                                    ?>
                                </select>

                                <label for="materiaLunes">Materia del Lunes:</label>
                                <select name="materiaLunes" id="materiaLunes" class="form-select mb-3">
                                    <?php
                                        include_once 'bd_horarios/conexion.php';
                                        
                                        $consulta = "SELECT * FROM materia";
                                        
                                        $resultado = $conexion->prepare($consulta);
                                        $resultado->execute();
                                        $materias=$resultado->fetchAll(PDO::FETCH_ASSOC);

                                        foreach ($materias as $opcion){

                                            if($materiaLunes == $opcion['nombreMateria']){
                                                echo '<option selected value="'.$opcion["nombreMateria"].'">'.$opcion["nombreMateria"].'</option>';
                                            }else{
                                                echo '<option value="'.$opcion["nombreMateria"].'">'.$opcion["nombreMateria"].'</option>';
                                            }
                                        
                                        }
                                    ?>
                                </select>

                                <label for="materiaMartes">Materia del Martes:</label>
                                <select name="materiaMartes" id="materiaMartes" class="form-select mb-3">
                                    <?php
                                        include_once 'bd_horarios/conexion.php';
                                        
                                        $consulta = "SELECT * FROM materia";
                                        
                                        $resultado = $conexion->prepare($consulta);
                                        $resultado->execute();
                                        $materias=$resultado->fetchAll(PDO::FETCH_ASSOC);

                                        foreach ($materias as $opcion){

                                            if($materiaMartes == $opcion['nombreMateria']){
                                                echo '<option selected value="'.$opcion["nombreMateria"].'">'.$opcion["nombreMateria"].'</option>';
                                            }else{
                                                echo '<option value="'.$opcion["nombreMateria"].'">'.$opcion["nombreMateria"].'</option>';
                                            }
                                        
                                        }
                                    ?>
                                </select>

                                <label for="materiaMiercoles">Materia del Miercoles:</label>
                                <select name="materiaMiercoles" id="materiaMiercoles" class="form-select mb-3">
                                    <?php
                                        include_once 'bd_horarios/conexion.php';
                                        
                                        $consulta = "SELECT * FROM materia";
                                        
                                        $resultado = $conexion->prepare($consulta);
                                        $resultado->execute();
                                        $materias=$resultado->fetchAll(PDO::FETCH_ASSOC);

                                        foreach ($materias as $opcion){

                                            if($materiaMiercoles == $opcion['nombreMateria']){
                                                echo '<option selected value="'.$opcion["nombreMateria"].'">'.$opcion["nombreMateria"].'</option>';
                                            }else{
                                                echo '<option value="'.$opcion["nombreMateria"].'">'.$opcion["nombreMateria"].'</option>';
                                            }
                                        
                                        }
                                    ?>
                                </select>

                                <label for="materiaJueves">Materia del Jueves:</label>
                                <select name="materiaJueves" id="materiaJueves" class="form-select mb-3">
                                    <?php
                                        include_once 'bd_horarios/conexion.php';
                                        
                                        $consulta = "SELECT * FROM materia";
                                        
                                        $resultado = $conexion->prepare($consulta);
                                        $resultado->execute();
                                        $materias=$resultado->fetchAll(PDO::FETCH_ASSOC);

                                        foreach ($materias as $opcion){

                                            if($materiaJueves == $opcion['nombreMateria']){
                                                echo '<option selected value="'.$opcion["nombreMateria"].'">'.$opcion["nombreMateria"].'</option>';
                                            }else{
                                                echo '<option value="'.$opcion["nombreMateria"].'">'.$opcion["nombreMateria"].'</option>';
                                            }
                                        
                                        }
                                    ?>
                                </select>

                                <label for="materiaViernes">Materia del Viernes:</label>
                                <select name="materiaViernes" id="materiaViernes" class="form-select mb-3">
                                    <?php
                                        include_once 'bd_horarios/conexion.php';
                                        
                                        $consulta = "SELECT * FROM materia";
                                        
                                        $resultado = $conexion->prepare($consulta);
                                        $resultado->execute();
                                        $materias=$resultado->fetchAll(PDO::FETCH_ASSOC);

                                        foreach ($materias as $opcion){

                                            if($materiaViernes == $opcion['nombreMateria']){
                                                echo '<option selected value="'.$opcion["nombreMateria"].'">'.$opcion["nombreMateria"].'</option>';
                                            }else{
                                                echo '<option value="'.$opcion["nombreMateria"].'">'.$opcion["nombreMateria"].'</option>';
                                            }
                                        
                                        }
                                    ?>
                                </select>

                                <label for="horaI">Hora de inicio:</label>
                                <select name="horaI" id="horaI" class="form-select mb-3">
                                    <?php
                                    foreach ($horas as $opcion) {
                                        
                                        if($horaI == $opcion){
                                            echo '<option selected value="'.$opcion.'">'.$opcion.'</option>';
                                        }else{
                                            echo '<option value="'.$opcion.'">'.$opcion.'</option>';
                                        }
                                        
                                    }
                                    ?>
                                </select>

                                <label for="horaF">Hora de finalización:</label>
                                <select name="horaF" id="horaF" class="form-select mb-3">
                                    <?php
                                    foreach ($horas as $opcion) {
                                        
                                        if($horaF == $opcion){
                                            echo '<option selected value="'.$opcion.'">'.$opcion.'</option>';
                                        }else{
                                            echo '<option value="'.$opcion.'">'.$opcion.'</option>';
                                        }
                                        
                                    }
                                    ?>
                                </select>

                                

                                 
                            <input type="submit" class="btn btn-primary btn-block" value="Actualizar">
                    </form>
                    
                </div>
