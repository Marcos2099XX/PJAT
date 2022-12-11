<?php require_once "vistas/superior.php" ?>

    <!-- Inicio del contenido -->
    <?php
include_once 'bd_alumnos/conexion.php';

$consulta = "SELECT * FROM calificacion a INNER JOIN materia b on a.idMateria = b.idMateria INNER JOIN alumno c on a.idAlumno = c.idAlumno";

$resultado = $conexion->prepare($consulta);
$resultado->execute();
$data=$resultado->fetchAll(PDO::FETCH_ASSOC);


?>



<div class="container">

<div class="column ">
<div>
                <h2>Registro de calificaciones</h2>
                <br>
                <br>
            </div>

    <div class="col-md-4 mx-auto">
                <form action="bd_calificaciones/insertar.php" method="POST">

                    <input type="text" class="form-control mb-3" name="matricula" placeholder="Matricula">

                    <label for="nombreMateria">Materia:</label>
                    <select name="nombreMateria" id="nombreMateria" class="form-select mb-3">
                        <option value="Seleccionar" selected>Seleccionar</option>
                        <?php
                            include_once 'bd_calificaciones/conexion.php';
                            
                            $consulta = "SELECT * FROM materia";
                            
                            $resultado = $conexion->prepare($consulta);
                            $resultado->execute();
                            $materias=$resultado->fetchAll(PDO::FETCH_ASSOC);
                        ?>

                        <?php foreach ($materias as $opciones):?>
                            <option value="<?php echo $opciones['nombreMateria']?>"><?php echo $opciones['nombreMateria']?></option>
                        <?php endforeach?>
                    </select>


                    <input type="text" class="form-control mb-3" name="primerBimestre" placeholder="Primer bimestre">
                    <input type="text" class="form-control mb-3" name="segundoBimestre" placeholder="Segundo bimestre">
                    <input type="text" class="form-control mb-3" name="tercerBimestre" placeholder="Tercer bimestre">
                    <input type="text" class="form-control mb-3" name="promedio" placeholder="Promedi">

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
                            <th>Nombre</th>
                            <th>Apellido P</th>
                            <th>Apellido M</th>
                            <th>Matricula</th>
                            <th>Materia</th>
                            <th>1er bimestre</th>
                            <th>2do bimestre</th>
                            <th>3er bimestre</th>
                            <th>Promedio</th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php                            
                            foreach($data as $dat) {                                                        
                            ?>
                            <tr>
                                <td><?php echo $dat['idCalificacion'] ?></td>
                                <td><?php echo $dat['nombre'] ?></td>
                                <td><?php echo $dat['apellidoP'] ?></td>
                                <td><?php echo $dat['apellidoM'] ?></td>
                                <td><?php echo $dat['matricula'] ?></td> 
                                <td><?php echo $dat['nombreMateria'] ?></td>
                                <td><?php echo $dat['primerBimestre'] ?></td>
                                <td><?php echo $dat['segundoBimestre'] ?></td>
                                <td><?php echo $dat['tercerBimestre'] ?></td>
                                <td><?php echo $dat['promedio'] ?></td>      
                                <th><a href="actualizarCalificacion.php?idCalificacion=<?php echo $dat['idCalificacion'] ?>" class="btn btn-info">Editar</a></th>
                                <th><a href="bd_calificaciones/borrar.php?idCalificacion=<?php echo $dat['idCalificacion'] ?>" class="btn btn-danger">Eliminar</a></th>   
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