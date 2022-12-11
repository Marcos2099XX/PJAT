<?php require_once "vistas/superior.php" ?>

    <!-- Inicio del contenido -->
    <?php
include_once 'bd_alumnos/conexion.php';

$consulta = "SELECT * FROM alumno a INNER JOIN grupo b on a.idGrupo = b.idGrupo";

$resultado = $conexion->prepare($consulta);
$resultado->execute();
$data=$resultado->fetchAll(PDO::FETCH_ASSOC);

?>



    <div class="container">

        <div class="column ">

            <div>
                <h2>Registro de alumnos</h2>
                <br>
                <br>
            </div>

            <div class="col-md-4 mx-auto">
                <form action="bd_alumnos/insertar.php" method="POST">

                    <input type="text" class="form-control mb-3" name="nombre" placeholder="Nombre">
                    <input type="text" class="form-control mb-3" name="apellidoP" placeholder="Apellido Paterno">
                    <input type="text" class="form-control mb-3" name="apellidoM" placeholder="Apellido Materno">
                    <input type="text" class="form-control mb-3" name="edad" placeholder="Edad">
                    <label for="sexo">Sexo:</label>
                    <select name="sexo" id="sexo" class="form-select mb-3">
                        <option value="Seleccionar">Seleccionar</option>
                        <option value="Masculino">Masculino</option>
                        <option value="Femenino">Femenino</option>
                    </select>

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

                    <input type="text" class="form-control mb-3" name="matricula" placeholder="Matricula">

                    <input type="submit" class="btn btn-success" value="Guardar">
                </form>
            </div>



            <div class="table-responsive ">
                <br>
                <br>
                <table class="table table-bordered table-striped" id="tabla">
                    <thead class="">
                        <tr>
                            <th>Id</th>
                            <th>Nombre</th>
                            <th>Apellido P</th>
                            <th>Apellido M</th>
                            <th>Edad</th>
                            <th>Sexo</th>
                            <th>Grupo</th>
                            <th>Matricula</th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php                            
                            foreach($data as $dat) {                                                        
                            ?>
                            <tr>
                                <td><?php echo $dat['idAlumno'] ?></td>
                                <td><?php echo $dat['nombre'] ?></td>
                                <td><?php echo $dat['apellidoP'] ?></td>
                                <td><?php echo $dat['apellidoM'] ?></td>
                                <td><?php echo $dat['edad'] ?></td> 
                                <td><?php echo $dat['sexo'] ?></td>
                                <td><?php echo $dat['nombreGrupo'] ?></td>
                                <td><?php echo $dat['matricula'] ?></td>     
                                <th><a href="actualizarAlumno.php?idAlumno=<?php echo $dat['idAlumno'] ?>" class="btn btn-info">Editar</a></th>
                                <th><a href="bd_alumnos/borrar.php?idAlumno=<?php echo $dat['idAlumno'] ?>" class="btn btn-danger">Eliminar</a></th>   
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