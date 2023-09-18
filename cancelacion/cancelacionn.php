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
    <link rel="stylesheet" href="../cancelacion/cancelacion.css">
    <link rel="stylesheet" href="../cancelacion/notificacion.css">
    <title>Cancelación de Reserva</title>
</head>
<body>
    <header>
        <div class="container">
            <p class="logo">CeniLockers!</p>
            <nav>
                <a href="../paginainicio/index.php">Inicio</a>
                <a href="#caracteristicas">Contáctenos</a>
                <a href="../Soporte/index.php">Soporte</a>
                <a href="?cerrar_sesion=1">Cerrar Sesión</a>
            </nav>
        </div>
    </header>
    <section id="hero">
       <h1>CUANTO TIEMPO ME QUEDA</h1>
       <form action="cancelacion.php" method="get">
       <label for="casillero">Casillero que se desea cancelar la reserva:</label>
       <input type="number" name="casillero" placeholder="Casillero que se desea revisar el tiempo" ><br>
        <button id="tiempo"type="submit">MOSTRAR TIEMPO</button>
    </form>
    </section>
    <br><br><br>   <br>
    <section id="hero1" >
        <form action="cancelacion.php" method="post" class="contenedor" >
            <h2>CANCELACIÓN</h2>
            <label for="casillero">Casillero que se desea cancelar la reserva:</label>
            <input type="number" name="casillero" placeholder="Casillero que se desea cancelar la reserva" ><br>
            
            <button  id="cancelar" type="submit">Enviar</button>
        </form>
    </section>
    <br><br><br><br>
    <footer>
        <div class="container">
            <p>
                Línea gratuita 018000000-0000<br><br>
                Correo: LockersCenigraf@soy.sena.edu.co <br><br>
                Dirección: Cl. 15 #31-42, Bogotá<br><br>
                Servicio al cliente: 311 295 77 08<br><br>
                &copy; CeniLockers!
            </p>
        </div>
    </footer>
    
    
</body>
</html>

