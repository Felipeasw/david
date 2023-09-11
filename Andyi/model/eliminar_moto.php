<?php
// Verificar si se recibió el ID de la moto a eliminar
if(isset($_POST['id'])) {
    $idMoto = $_POST['id'];

    // Conectar a la base de datos
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "andy";

    $conn = new mysqli($servername, $username, $password, $dbname);

    // Verificar la conexión
    if ($conn->connect_error) {
        die("Error de conexión: " . $conn->connect_error);
    }

    // Ejecutar consulta para eliminar la moto
    $sql = "DELETE FROM moto WHERE id = $idMoto";

    if ($conn->query($sql) === TRUE) {
        echo " eliminada correctamente";
    } else {
        echo "Error al eliminar la moto: " . $conn->error;
    }

    // Cerrar la conexión
    $conn->close();

} else {
    echo "ID de moto no proporcionado";
}

// Redirigir de vuelta a la página de la lista de motos
header("Location: ../view/index.php");
exit();
?>
