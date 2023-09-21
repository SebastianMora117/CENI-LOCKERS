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
    <meta charset="UTF-8">
    <title>Soporte</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="css/index.css">
</head>
<body>
    
    <!-- 0 Parte - Cabecera -->

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

    <!-- 1 Parte - Inicio -->

    <section id="hero">
        <h1>¿Tienes dudas en tu proceso?</h1>
        <div class="button-container">
            <a href="#somos-proya"><button>Preguntas Frecuentes</button></a>
            <a href="#nuestros-programas"><button>Paso a Paso</button></a>
        </div>
    </section>

    <!-- 2 Parte - Preguntas Frecuentes -->

    <section id="somos-proya">
        <div class="container">
            <div class="img-container"></div>
            <div class="texto">

                <h2><span class="color-acento">Preguntas Frecuentes</span></h2>
                <p><strong>¿Qué sucede si necesito cancelar mi reserva?</strong><br>
                    Si necesitas cancelar tu reserva, puedes hacerlo a través de nuestra plataforma en la seccion de Cancelación.
                </p>
                <p><strong>¿Cuál es la duración máxima de una reserva de locker?</strong><br>
                    La duración máxima es de 8 horas, sin embargo, si necesitas dejar el centro formativo antes, puedes cancelar tu reserva en cualquier momento
                </p>
            </div>
        </div>
    </section>

    <!-- 3 Parte - Paso a Paso -->

    <section id="nuestros-programas">
        <div class="container">
            <h2>Paso a Paso</h2>
            <div class="programas">
            <div class="carta">
    <h3>1.IniciarSesión:</h3>
    <p>Después de crear tu cuenta, inicia sesión utilizando tu número de identificación y contraseña.</p>
</div>
<div class="carta">
    <h3>2.Seleccionar:</h3>
    <p>Estando en la página de reserva revisa las secciones de lockers y elige la que mejor se adapte a tus necesidades.</p>
</div>  
<div class="carta">
    <h3>3.Reservar:</h3>
    <p>Una vez que hayas elegido una sección, abre la lista de lockers y selecciona el de tu preferencia.</p>
</div>
<div class="carta">
        <h3>4.Confirmación:</h3>
        <p>Después de completar el proceso de reserva, recibirás una alerta en pantalla confirmando tu reserva.</p>
    </div>
</div>
<div class="programas"> 
    
    <div class="carta2">
        <h3>5.Cancelación:</h3>
        <p>Cuando ya no requieras del servicio de lockers dirígete a la página de cancelación para finalizar tu reserva.</p>
    </div>
    <div class="carta2">
        <h3>6.Reporte:</h3>
        <p>Si encuentras alguna novedad con el locker reservado, puedes dejar tu observación en la página de reportes.</p>
    </div>
    <div class="carta2">
        <h3>7.Soporte:</h3>
        <p>Si tienes alguna duda o inquietud, puedes realizarla en la página de soporte.</p>
    </div>
    <div class="carta2">
        <h3>MasInformación:</h3>
        <p>Da click acá para ver nuestro paso a paso en youtube.<br> <br> <button><a href="https://www.youtube.com/watch?v=cre9wZzWA_o" style="text-decoration: none; color: white;    ">Ver</a></button></p>
    </div>
</div>

            </div>
        </div>
    </section>

    <!-- 4 Parte - Formulario Final-->

    <section id="final">
        <h2>¿Tienes alguna otra pregunta en mente?</h2>

        <button type="button" data-toggle="modal" data-target="#myModal">Pregúntanos</button>
        <div class="modal" id="myModal">
            <div class="modal-dialog modal-dialog-centered">
              <div class="modal-content">
              
                <!-- Modal Header -->
                <div class="modal-header">
                  <h4 class="modal-title">Consulta con nosotros</h4>
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                
                <form action="../PHP/Preguntas.php" method="post">
                    <div class="form-group">
                      <label for="Nombre" id="LabName" >Nombre del Aprendiz:</label>
                      <input type="text" name="nombre" class="form-control" placeholder="Nombre..." id="Nombre" value="<?php echo $_SESSION['username']; ?>" readonly>
                    </div>
                    
                    <div class="form-group">
                      <label for="Inquietud">Escriba su Inquietud:</label>
                      <textarea class="form-control" name="inquietud" placeholder="Inquietud..." id="Inquietud" rows="3"></textarea>
                    </div>
                    

                    <button  type="submit">Enviar</button>
                  </form>
              </div>
            </div>
          </div>
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

