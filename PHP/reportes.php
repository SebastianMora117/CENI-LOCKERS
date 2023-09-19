<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include('Conexion.php');

    $id_locker = $_POST['id_locker'];
    $reporte = $_POST['reporte'];
    $correo = $_SESSION['email']; 

   

    $consulta = "INSERT INTO reportes (id_locker, reporte, correo ) VALUES ('$id_locker', '$reporte','$correo')";

    if (mysqli_query($conexion, $consulta)) {
        echo "<script>alert('reporte registrado correctamente');
        window.location.href = '../reportes/index.php';</script>";
        exit();
    } else {
        echo "<script>alert('Error al registrar el reporte: " . mysqli_error($conexion) . "');
        window.location.href = '../reportes/index.php';</script>";
        exit();
    }

    mysqli_close($conexion);
}
?>