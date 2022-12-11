<?php require_once "vistas/superior.php" ?>

    <!-- Inicio del contenido -->

<?php include_once 'bd_eventos/conexion.php';

$consulta = "SELECT * FROM evento";

$resultado = $conexion->prepare($consulta);
$resultado->execute();
$data=$resultado->fetchAll(PDO::FETCH_ASSOC);

?>
    <div class="container">

<div class="column ">

<div>
                <h2>Registro de eventos</h2>
                <br>
                <br>
            </div>
    <div class="col-md-4 mx-auto">
        <form action="bd_eventos/insertar.php" method="POST" enctype = "multipart/form-data">

            <input type="text" required class="form-control mb-3" name="tituloEvento" placeholder="Título del evento">
            <textarea rows="10" required class="form-control mb-3" name="descripcion" placeholder="Descripción"></textarea>
            <input type="text" required pattern="[0-9]{4}-(0[1-9]|1[012])-(0[1-9]|1[0-9]|2[0-9]|3[01])" class="form-control mb-3" name="fechaEvento" placeholder="Fecha (Formato: Año-Mes-Día)">
            <label for="imagen">Imagen del evento:</label>
            <input type="file" class="form-contrequired rol mb-3" name="imagen" accept="image/*" required>
            
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
                    <th>Título</th>
                    <th>Descripción</th>
                    <th>Fecha del evento</th>
                    <th>Imagen</th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>

            <tbody>
                <?php                            
                    foreach($data as $dat) {                                                        
                    ?>
                    <tr>
                        <td><?php echo $dat['idEvento'] ?></td>
                        <td><?php echo $dat['tituloEvento'] ?></td>
                        <td><?php echo $dat['descripcion'] ?></td>
                        <td><?php echo $dat['fechaEvento'] ?></td>
                        <td><?php echo "<img height=\"30\" src=\"data:image/jpeg;base64,".base64_encode($dat['imagen'])."\" alt=\"Imagen_Evento\">"?></td>
                        <th><a href="actualizarEvento.php?idEvento=<?php echo $dat['idEvento'] ?>" class="btn btn-info">Editar</a></th>
                        <th><a href="bd_eventos/borrar.php?idEvento=<?php echo $dat['idEvento'] ?>" class="btn btn-danger">Eliminar</a></th>   
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