<?php require_once "vistas/superior.php" ?>

    <!-- Inicio del contenido -->
<?php include_once 'bd_horarios/conexion.php';

$consulta = "SELECT * FROM horario a INNER JOIN grupo b on a.idGrupo = b.idGrupo";

$resultado = $conexion->prepare($consulta);
$resultado->execute();
$data=$resultado->fetchAll(PDO::FETCH_ASSOC);

?>

<div class="container">

<div class="column ">

            <div>
                <h2>Registro de horarios</h2>
                <br>
                <br>
            </div>

    <div class="col-md-4 mx-auto">
                <form action="bd_horarios/insertar.php" method="POST">

                    
                    <label for="grupo">Grupo:</label>
                    <select name="grupo" id="grupo" class="form-select mb-3">
                        <option value="Seleccionar" selected>Seleccionar</option>
                        <?php
                            include_once 'bd_alumnos/conexion.php';
                            
                            $consulta = "SELECT * FROM grupo";
                            
                            $resultado = $conexion->prepare($consulta);
                            $resultado->execute();
                            $grupos=$resultado->fetchAll(PDO::FETCH_ASSOC);
                        ?>

                        <?php foreach ($grupos as $opciones):?>
                            <option value="<?php echo $opciones['nombreGrupo']?>"><?php echo $opciones['nombreGrupo']?></option>
                        <?php endforeach?>
                    </select>

                    <label for="materiaLunes">Materia del Lunes:</label>
                    <select name="materiaLunes" id="materiaLunes" class="form-select mb-3">
                        <option value="Seleccionar" selected>Seleccionar</option>
                        <?php
                            include_once 'bd_horarios/conexion.php';
                            
                            $consulta = "SELECT * FROM materia";
                            
                            $resultado = $conexion->prepare($consulta);
                            $resultado->execute();
                            $grupos=$resultado->fetchAll(PDO::FETCH_ASSOC);
                        ?>

                        <?php foreach ($grupos as $opciones):?>
                            <option value="<?php echo $opciones['nombreMateria']?>"><?php echo $opciones['nombreMateria']?></option>
                        <?php endforeach?>
                    </select>

                    <label for="materiaMartes">Materia del Martes:</label>
                    <select name="materiaMartes" id="materiaMartes" class="form-select mb-3">
                        <option value="Seleccionar" selected>Seleccionar</option>
                        <?php
                            include_once 'bd_horarios/conexion.php';
                            
                            $consulta = "SELECT * FROM materia";
                            
                            $resultado = $conexion->prepare($consulta);
                            $resultado->execute();
                            $grupos=$resultado->fetchAll(PDO::FETCH_ASSOC);
                        ?>

                        <?php foreach ($grupos as $opciones):?>
                            <option value="<?php echo $opciones['nombreMateria']?>"><?php echo $opciones['nombreMateria']?></option>
                        <?php endforeach?>
                    </select>

                    <label for="materiaMiercoles">Materia del Miercoles:</label>
                    <select name="materiaMiercoles" id="materiaMiercoles" class="form-select mb-3">
                        <option value="Seleccionar" selected>Seleccionar</option>
                        <?php
                            include_once 'bd_horarios/conexion.php';
                            
                            $consulta = "SELECT * FROM materia";
                            
                            $resultado = $conexion->prepare($consulta);
                            $resultado->execute();
                            $grupos=$resultado->fetchAll(PDO::FETCH_ASSOC);
                        ?>

                        <?php foreach ($grupos as $opciones):?>
                            <option value="<?php echo $opciones['nombreMateria']?>"><?php echo $opciones['nombreMateria']?></option>
                        <?php endforeach?>
                    </select>

                    <label for="materiaJueves">Materia del Jueves:</label>
                    <select name="materiaJueves" id="materiaJueves" class="form-select mb-3">
                        <option value="Seleccionar" selected>Seleccionar</option>
                        <?php
                            include_once 'bd_horarios/conexion.php';
                            
                            $consulta = "SELECT * FROM materia";
                            
                            $resultado = $conexion->prepare($consulta);
                            $resultado->execute();
                            $grupos=$resultado->fetchAll(PDO::FETCH_ASSOC);
                        ?>

                        <?php foreach ($grupos as $opciones):?>
                            <option value="<?php echo $opciones['nombreMateria']?>"><?php echo $opciones['nombreMateria']?></option>
                        <?php endforeach?>
                    </select>

                    <label for="materiaViernes">Materia del Viernes:</label>
                    <select name="materiaViernes" id="materiaViernes" class="form-select mb-3">
                        <option value="Seleccionar" selected>Seleccionar</option>
                        <?php
                            include_once 'bd_horarios/conexion.php';
                            
                            $consulta = "SELECT * FROM materia";
                            
                            $resultado = $conexion->prepare($consulta);
                            $resultado->execute();
                            $grupos=$resultado->fetchAll(PDO::FETCH_ASSOC);
                        ?>

                        <?php foreach ($grupos as $opciones):?>
                            <option value="<?php echo $opciones['nombreMateria']?>"><?php echo $opciones['nombreMateria']?></option>
                        <?php endforeach?>
                    </select>

                    <label for="horaI">Hora de inicio:</label>
                    <select name="horaI" id="horaI" class="form-select mb-3">
                        <option value="Seleccionar">Seleccionar</option>
                        <option value="08:00">08:00</option>
                        <option value="08:30">08:30</option>
                        <option value="09:00">09:00</option>
                        <option value="09:30">09:30</option>
                        <option value="10:30">10:30</option>
                        <option value="11:00">11:00</option>
                        <option value="11:30">11:30</option>
                        <option value="12:00">12:00</option>
                    </select>

                    <label for="horaF">Hora de finalización:</label>
                    <select name="horaF" id="horaF" class="form-select mb-3">
                        <option value="Seleccionar">Seleccionar</option>
                        <option value="08:00">08:00</option>
                        <option value="08:30">08:30</option>
                        <option value="09:00">09:00</option>
                        <option value="09:30">09:30</option>
                        <option value="10:30">10:30</option>
                        <option value="11:00">11:00</option>
                        <option value="11:30">11:30</option>
                        <option value="12:00">12:00</option>
                    </select>

                    <input type="submit" class="btn btn-success" value="Guardar">
                </form>
            </div>



            <div class="table-responsive">
                <br>
                <br>
                <table class="table table-bordered table-striped" id="tabla">
                    <thead class="">
                        <tr>
                            <th>Id</th>
                            
                            <th>Inicio</th>
                            <th>Fin</th>
                            <th>Grupo</th>
                            <th>Lunes</th>
                            <th>Martes</th>
                            <th>Miercoles</th>
                            <th>Jueves</th>
                            <th>Viernes</th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php                            
                            foreach($data as $dat) {                                                        
                            ?>
                            <tr>
                                <td><?php echo $dat['idHorario'] ?></td>
                                
                                <td><?php echo $dat['horaI'] ?></td>   
                                <td><?php echo $dat['horaF'] ?></td>
                                <td><?php echo $dat['nombreGrupo'] ?></td>
                                <td><?php echo $dat['materiaLunes'] ?></td>
                                <td><?php echo $dat['materiaMartes'] ?></td>
                                <td><?php echo $dat['materiaMiercoles'] ?></td> 
                                <td><?php echo $dat['materiaJueves'] ?></td>
                                <td><?php echo $dat['materiaViernes'] ?></td>
                                <th><a href="actualizarHorario.php?idHorario=<?php echo $dat['idHorario'] ?>" class="btn btn-info">Editar</a></th>
                                <th><a href="bd_horarios/borrar.php?idHorario=<?php echo $dat['idHorario'] ?>" class="btn btn-danger">Eliminar</a></th>   
                            </tr>
                            <?php
                                }
                        ?>      
                    </tbody>
                </table>
            </div>
        </div>

    <!-- Fin del contenido -->

<?php require_once "vistas/inferior.php" ?>