<?php require_once "vistas/superior.php" ?>

<?php 
include_once 'bd_eventos/conexion.php';

$idEvento = $_GET['idEvento'];

$consulta = "SELECT * FROM evento WHERE idEvento= '$idEvento'";

$resultado = $conexion->prepare($consulta);
$resultado->execute();
$data=$resultado->fetchAll(PDO::FETCH_ASSOC);


?>


                <div class="col-md-4 mx-auto">
                    <form action="bd_eventos/actualizar.php" method="POST" enctype = "multipart/form-data">
                    
                                <input type="hidden" name="idEvento" value="<?php echo $data[0]['idEvento']  ?>">

                                <input type="text" required class="form-control mb-3" name="tituloEvento" placeholder="Título del evento" value="<?php echo $data[0]['tituloEvento']?>">
                                <textarea rows="10" required class="form-control mb-3" name="descripcion" placeholder="Descripción"><?php echo $data[0]['descripcion']?></textarea>
                                <input type="text" required pattern="[0-9]{4}-(0[1-9]|1[012])-(0[1-9]|1[0-9]|2[0-9]|3[01])" class="form-control mb-3" name="fechaEvento" placeholder="Fecha (Formato: Año-Mes-Día)" value="<?php echo $data[0]['fechaEvento']?>">

                                <label for="imagen">Imagen del evento:</label>
                                <input type="file" class="form-control mb-3" name="imagen" accept="image/*" required>
            
                            <input type="submit" class="btn btn-primary btn-block" value="Actualizar">
                    </form>
                    
                </div>
