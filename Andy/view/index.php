<?php
include '../controller/traerMotosController.php';
?>

<!DOCTYPE html>
<html>
<head>
    <title>Formulario de Motocicletas</title>
    <link rel="stylesheet" href="../index.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <h1>Formulario de Motocicletas</h1>

    <table class="table caption-top">
        <caption>LISTADO DE MOTOCICLETAS</caption>
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">MARCA</th>
                <th scope="col">MODELO</th>
                <th scope="col">COLOR</th>
                <th scope="col">CATEGORIA</th>
                <th scope="col">ACCIONES</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($datosMoto as $moto) { ?>
            <tr>
                <th scope="row"><?php echo $moto['id']; ?></th>
                <td><?php echo $moto['marca']; ?></td>
                <td><?php echo $moto['modelo']; ?></td>
                <td><?php echo $moto['color']; ?></td>
                <td><?php echo $moto['categoria']; ?></td>
                <td>



                <!-- Rest of your HTML code -->

<?php foreach($datosMoto as $moto) { ?>
    <!-- Edit Modal for <?php echo $moto['id']; ?> -->
    <div class="modal fade" id="editModal<?php echo $moto['id']; ?>">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Editar Motocicleta</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <form method="post" action="../controller/editar_moto.php">
                        <input type="hidden" name="id" value="<?php echo $moto['id']; ?>">
                        <div class="form-group">
                            <label>Marca:</label>
                            <input type="text" name="marca" value="<?php echo $moto['marca']; ?>" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Modelo:</label>
                            <input type="text" name="modelo" value="<?php echo $moto['modelo']; ?>" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Color:</label>
                            <input type="text" name="color" value="<?php echo $moto['color']; ?>" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Categoría:</label>
                            <input type="text" name="categoria" value="<?php echo $moto['categoria']; ?>" class="form-control" required>
                        </div>
                        <button type="submit" class="btn btn-success" name="actualizar">Actualizar</button>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>
<?php } ?>

<!-- Rest of your HTML code -->

                    <!-- Delete Modal -->
                    <div class="modal fade" id="deleteModal<?php echo $moto['id']; ?>">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title">Confirmar Eliminación</h4>
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                </div>
                                <div class="modal-body">
                                    <p>¿Estás seguro de que deseas eliminar esta moto?</p>
                                </div>
                                <div class="modal-footer">
                                    <form action="../model/eliminar_moto.php" method="post">
                                        <input type="hidden" name="id" value="<?php echo $moto['id']; ?>">
                                        <button type="submit" class="btn btn-danger">Eliminar</button>
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>


                    
                    <button type="button" class="btn btn-outline-danger" data-toggle="modal" data-target="#deleteModal<?php echo $moto['id']; ?>">ELIMINAR</button>
                </td>
                <td>
                    <!-- Button to Open the Edit Modal -->
                    <button type="button" class="btn btn-outline-success" data-toggle="modal" data-target="#editModal<?php echo $moto['id']; ?>">EDITAR</button>
                </td>
            </tr>
            <?php } ?>
        </tbody>
    </table>

    <!-- Button to Open the Add Modal -->
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addModal">Agregar Motocicleta</button>

    <!-- Add Modal -->
    <div class="modal fade" id="addModal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Agregar Nueva Motocicleta</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <form method="post" action="../controller/appController.php">
                        <label>ID:</label>
                        <input type="text" name="id" required><br>
                        <label>Marca:</label>
                        <input type="text" name="marca" required><br>
                        <label>Modelo:</label>
                        <input type="text" name="modelo" required><br>
                        <label>Color:</label>
                        <input type="text" name="color" required><br>
                        <label>Categoria:</label>
                        <input type="text" name="categoria" required><br>
                        <button type="submit" name="guardar">Guardar</button>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
