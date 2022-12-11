<?php require_once "vistas/superior.php" ?>

    <!-- Inicio del contenido -->
    <?php
include_once 'bd_profesores/conexion.php';

$consulta = "SELECT * FROM profesor a INNER JOIN grupo b on a.idGrupo = b.idGrupo";

$resultado = $conexion->prepare($consulta);
$resultado->execute();
$data=$resultado->fetchAll(PDO::FETCH_ASSOC);

?>

<div class="container">

<div class="column ">

    <div>
        <h2>Registro de profesores</h2>
        <br>
        <br>
    </div>

    <div class="col-md-4 mx-auto">
                <form action="bd_profesores/insertar.php" method="POST" enctype = "multipart/form-data">

                    <input type="text" required class="form-control mb-3" name="nombre" placeholder="Nombre">
                    <input type="text" required class="form-control mb-3" name="apellidoP" placeholder="Apellido Paterno">
                    <input type="text" required class="form-control mb-3" name="apellidoM" placeholder="Apellido Materno">
                    <label for="sexo">Sexo:</label>
                    <select name="sexo" id="sexo" class="form-select mb-3">
                        <option value="Seleccionar">Seleccionar</option>
                        <option value="Masculino">Masculino</option>
                        <option value="Femenino">Femenino</option>
                    </select>

                    <input type="text" required class="form-control mb-3" name="matricula" placeholder="Matricula">

                    <input type="tel" required class="form-control mb-3" name="telefono" placeholder="Teléfono">

                    <input type="email" required class="form-control mb-3" name="correo" placeholder="Correo">

                    <label for="grupo">Grupo:</label>
                    <select name="grupo" id="grupo" class="form-select mb-3">
                        <option value="Seleccionar" selected>Seleccionar</option>
                        <?php
                            include_once 'bd_profesores/conexion.php';
                            
                            $consulta = "SELECT * FROM grupo";
                            
                            $resultado = $conexion->prepare($consulta);
                            $resultado->execute();
                            $grupos=$resultado->fetchAll(PDO::FETCH_ASSOC);
                        ?>

                        <?php foreach ($grupos as $opciones):?>
                            <option value="<?php echo $opciones['nombreGrupo']?>"><?php echo $opciones['nombreGrupo']?></option>
                        <?php endforeach?>
                    </select>

                    <label for="imagen">Fotografía:</label>
                    <input type="file" class="form-control mb-3" name="imagen" accept="image/*" required>
                    

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
                            <th>Sexo</th>
                            <th>Matricula</th>                            
                            <th>Correo</th>
                            <th>Teléfono</th>
                            <th>Grupo</th>
                            <th>Foto</th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php                            
                            foreach($data as $dat) {                                                        
                            ?>
                            <tr>
                                <td><?php echo $dat['idProfesor'] ?></td>
                                <td><?php echo $dat['nombre'] ?></td>
                                <td><?php echo $dat['apellidoP'] ?></td>
                                <td><?php echo $dat['apellidoM'] ?></td>
                                <td><?php echo $dat['sexo'] ?></td>
                                <td><?php echo $dat['matricula'] ?></td>  
                                <td><?php echo $dat['telefono'] ?></td>  
                                <td><?php echo $dat['correo'] ?></td> 
                                <td><?php echo $dat['nombreGrupo'] ?></td>
                                <td><?php echo "<img height=\"30\" src=\"data:image/jpeg;base64,".base64_encode($dat['imagen'])."\" alt=\"Imagen_Evento\">"?></td>
                                <th><a href="actualizarProfesor.php?idProfesor=<?php echo $dat['idProfesor'] ?>" class="btn btn-info">Editar</a></th>
                                <th><a href="bd_profesores/borrar.php?idProfesor=<?php echo $dat['idProfesor'] ?>" class="btn btn-danger">Eliminar</a></th>   
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