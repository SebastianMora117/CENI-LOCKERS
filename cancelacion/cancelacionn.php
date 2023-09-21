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
                <a href="../mapa/index.php">Reserva</a>
                <a href="../cancelacion/cancelacionn.php">Cancelación</a>
                <a href="../reportes/index.php">Reportes</a>
                <a href="../Soporte/index.php">Soporte</a>
                <a href="?cerrar_sesion=1">Cerrar Sesión</a>
            </nav>
        </div>
    </header>
    <section id="hero">
       <h1>¿CUANTO TIEMPO ME QUEDA?</h1>
       <form action="tiempo.php" method="POST">
       <label for="casillero">Casillero que se desea revisar el tiempo:</label><br><br>
       <input type="number" name="casillero" placeholder="Casillero que se desea revisar el tiempo" ><br>
        <button id="tiempo"type="submit">MOSTRAR TIEMPO</button>
    </form>
    </section>
    <br><br><br>   <br>
    <section id="hero1" >
        <form action="cancelacion.php" method="post" class="contenedor" >
            <h2>CANCELACIÓN</h2>
            <label for="casillero">Casillero que se desea cancelar la reserva:</label><br><br>
            <input type="number" name="casillero" placeholder="Casillero que se desea cancelar la reserva" ><br>
            
            <button  id="cancelar" type="submit">Cancelar</button>
        </form>
    </section>
    <br><br><br><br>
    footer p{
    margin: 0;
    padding: 12px;
    color: black(148, 148, 148);
    background-color:white rgb(30,30,30);
}

footer .container{
    text-align: center;
    justify-content: center;
    background-color:white rgb(30,30,30);
}
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

