<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include('Conexion.php');

    $nombre = $_POST['nombre'];
    $inquietud = $_POST['inquietud'];
    $correo = $_SESSION['email']; 

    if ($nombre == "" || $inquietud == "") {
        echo "<script>alert('Debes completar todos los campos');
        window.location.href = '../Soporte/index.php#final';</script>";
        exit();
    }

    $consulta = "INSERT INTO preguntas (nombre, inquietud, correo) VALUES ('$nombre', '$inquietud','$correo')";

    if (mysqli_query($conexion, $consulta)) {
        echo "<script>alert('Inquietud registrada correctamente');
        window.location.href = '../Soporte/index.php';</script>";
        exit();
    } else {
        echo "<script>alert('Error al registrar la inquietud: " . mysqli_error($conexion) . "');
        window.location.href = '../Soporte/index.php';</script>";
        exit();
    }

    mysqli_close($conexion);
}
?>
