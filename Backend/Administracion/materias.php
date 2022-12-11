<?php require_once "vistas/superior.php" ?>

    <!-- Inicio del contenido -->

<?php include_once 'bd_materias/conexion.php';

$consulta = "SELECT * FROM materia";

$resultado = $conexion->prepare($consulta);
$resultado->execute();
$data=$resultado->fetchAll(PDO::FETCH_ASSOC);

?>
    <div class="container">

<div class="column ">

    <div>
        <h2>Registro de materias</h2>
        <br>
        <br>
    </div>

    <div class="col-md-4 mx-auto">
        <form action="bd_materias/insertar.php" method="POST">

            <input type="text" class="form-control mb-3" name="nombreMateria" placeholder="Materia">
            
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
                    <th>Materia</th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>

            <tbody>
                <?php                            
                    foreach($data as $dat) {                                                        
                    ?>
                    <tr>
                        <td><?php echo $dat['idMateria'] ?></td>
                        <td><?php echo $dat['nombreMateria'] ?></td>
                        <th><a href="actualizarMateria.php?idMateria=<?php echo $dat['idMateria'] ?>" class="btn btn-info">Editar</a></th>
                        <th><a href="bd_materias/borrar.php?idMateria=<?php echo $dat['idMateria'] ?>" class="btn btn-danger">Eliminar</a></th>   
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