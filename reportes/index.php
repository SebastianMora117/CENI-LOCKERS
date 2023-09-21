<?php
include('../PHP/Funciones.php');

InicioSesion();
Inactividad(1800);
if (isset($_GET['cerrar_sesion'])) {
    cerrarSesion();
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <title>Reportes de locker</title>
    <link rel="stylesheet" href="index.css">
    <meta charset="UTF-8">
</head>
<body>
<header>
        <div class="container">
            <p class="logo">CeniLockers!</p>
            <nav>
                <a href="../paginainicio/index.php">Inicio</a>
                <a href="../mapa/index.php">Reserva</a>
                <a href="../cancelacion/cancelacionn.php">Cancelación</a>
                <a href="../reportes/index.php">Reportes</a>
                <a href="../Soporte/index.php">Soporte</a>
                <a href="?cerrar_sesion=1">Cerrar Sesión</a>
            </nav>
        </div>
    </header>


    <section id="hero">
        <h1>Reporta el problema <br>de tu locker aquí<br></h1>
        
    </section>

    <section id="somos-proya">
        <div class="container">
            <div class="img-container"></div>
            <div class="texto">
                
                <form action="../PHP/reportes.php" method="post"class="report-form">
                    <label for="lockerNumber">Número de Locker:</label>
                    <input type="text" name="id_locker" id="lockerNumber" required>
                <br><br>
                    <label for="reportDetails">Detalles del Reporte:</label>
                    <textarea id="reportDetails" name="reporte" required></textarea>
                    <br><br>
                    <button class="submit-btn">Enviar Reporte</button>
                  </form>
            </div>
        </div>
    </section>

    <section id="nuestros-programas">
        <div class="container">
            
            
            <div class="programas">
                <div class="carta">
                    <h2>Reportes Recientes:</h2>
                    <ul class="reports-list" id="reportsList"></ul>
                   
                </div>
                </div>  
            </div>
        </div>
        <script src="reporte.js"></script>
    </section>
    

    <section id="caracteristicas">
        <div class="container">
            <ul>
                <li>✔️ Gracias por realizar el reporte.
            </ul>
        </div>
    </section>

    <section id="final">
        <h2>Realizar otro reporte</h2>
        <a href="#"><button>Reportes</button></a>
    </section>

    <footer>
        <div class="container" id="container">
            <p>
                    Linea gratuita 018000000-0000<br><br>
                    Correo:LockersCenigraf@soy.sena.edu.co <br><br>
                    Direccion:Cl. 15 #31-42, Bogotá<br><br>
                    Servicio al cliente: 311 295 77 08<br><br>
                    &copy; CeniLockers!
            </p>
        </div>
    </footer>
</body>
</html>
