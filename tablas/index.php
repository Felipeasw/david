<?php
include('connection.php');

$con = connection();

$sql = "SELECT * FROM users";
$query =mysqli_query($con, $sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/style.css">
    <title>CRUD Registro</title>
</head>
<body>
    <div class="users-form">
        <form action="insert_user.php" method="POST">
            <h1>Crear Registro</h1>
            <input type="text" name="name" placeholder="Campo2">
            <input type="text" name="lastname" placeholder="Cmapo3">
            <input type="text" name="username" placeholder="Campo4">
            <input type="text" name="password" placeholder="Campo5">
            <input type="text" name="email" placeholder="Campo6">

            <input type="submit" value="Agregar Registro">
        </form>
    </div>

    <table>
    <thead>
        <tr>
            <th>Campo1</th>
            <th>Campo2</th>
            <th>Campo3</th>
            <th>Campo4</th>
            <th>Campo5</th>
            <th>Campo6</th>
            <th></th>
            <th></th>            
        </tr>
    </thead>
    <tbody>
        <?php while($row = mysqli_fetch_array($query)): ?>
        <tr>
            <td><?= $row['id'] ?></td>
            <td><?= $row['name'] ?></td>
            <td><?= $row['lastname'] ?></td>
            <td><?= $row['username'] ?></td>
            <td><?= $row['password'] ?></td>
            <td><?= $row['email'] ?></td>

            
            <th><a href="update.php?id=<?= $row['id'] ?>" class="users-table--edit">Editar</a></th>
            <th><a href="delete_user.php?id=<?= $row['id'] ?>" class="users-table--delete">Eliminar</a></th>
        </tr>
        <?php endwhile; ?>
    </tbody>
</table>

    </div>
</body>
</html>