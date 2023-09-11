<!DOCTYPE html>
<html>
<head>
    <title>Editar Moto con Modal</title>
</head>
<body>
    <h1>Editar Moto</h1>
    
    <!-- Button to Open the Modal -->
    <button type="button" data-toggle="modal" data-target="#editModal">Editar</button>

    <!-- The Modal -->
    <div class="modal fade" id="editModal">
        <div class="modal-dialog">
            <div class="modal-content">
            
                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Editar Moto</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                
                <!-- Modal Body -->
                <div class="modal-body">
                    <form method="post" action="">
                        <label>Marca:</label>
                        <input type="text" name="marca" value="<?php echo $moto['marca']; ?>"><br>
                        <label>Modelo:</label>
                        <input type="text" name="modelo" value="<?php echo $moto['modelo']; ?>"><br>
                        <label>Color:</label>
                        <input type="text" name="color" value="<?php echo $moto['color']; ?>"><br>
                        <label>Categoría:</label>
                        <input type="text" name="categoria" value="<?php echo $moto['categoria']; ?>"><br>
                        <button type="submit">Guardar Cambios</button>
                    </form>
                </div>
                
                <!-- Modal Footer -->
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