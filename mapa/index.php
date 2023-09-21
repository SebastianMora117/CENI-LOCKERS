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
    <title>CeniLockers</title>
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="estilo.css">
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="estilo.css">
    <meta charset="UTF-8">
</head>
<header >
        <div class="container">
            <p class="logo">Cenilockers!</p>
            <nav>
                <a href="../paginainicio/index.php" style="text-decoration:none;">Inicio</a>
                <a href="../mapa/index.php" style="text-decoration:none;">Reserva</a>
                <a href="../cancelacion/cancelacionn.php" style="text-decoration:none;">Cancelación</a>
                <a href="../reportes/index.php" style="text-decoration:none;">Reporte</a>
                <a href="../Soporte/index.php" style="text-decoration:none;">Soporte</a>
                <a href="?cerrar_sesion=1" style="text-decoration:none;">Cerrar Sesión</a>


 


                

            </nav>
        </div>
  </header>




<!-- MODALES BOTONES -->
<section id="hero" >
    
    
  
  <!-- Modal -->
 
    
    <button type="button" id="s5" class="btn btn-custom casillero-btn" data-toggle="modal" data-target="#myModal5" >
            Sección 5
        </button>

    <button type="button" id="s4" class="btn btn-custom casillero-btn" data-toggle="modal" data-target="#myModal4">
            Sección 4
        </button>
   
    <button type="button" id="s3" class="btn btn-custom casillero-btn" data-toggle="modal" data-target="#myModal3">
            Sección 3
        </button>
    
    <button type="button" id="s2" class="btn btn-custom casillero-btn"data-toggle="modal" data-target="#myModal2">
            Sección 2
        </button>
    
    <button type="button" id="s1" class="btn btn-custom casillero-btn" data-toggle="modal" data-target="#myModal1">
            Sección 1
        </button>
   
    <button type="button" id="s6" class="btn btn-custom casillero-btn" data-toggle="modal" data-target="#myModal6">
            Sección 6 y Sección 7
        </button>
      
    
   
</section>
        




<div class="modal fade" id="myModal5">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Sección 5</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
        <form method="post" action="../mapa/reserva.php">
                    <label for="numberSelect">Selecciona tu casillero</label>
                    <select id="numberSelect" name="locker" class="form-control">
                        <?php
                            for ($i = 76; $i <= 120; $i++) {
                                echo "<option value='$i'>$i</option>";
                            }
                        ?>
                    </select>
                    <br>
                    <button type="submit" class="btn btn-primary">Aceptar</button>
                </form>
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
        </div>
        
      </div>
    </div>
  </div>
  

  <div class="modal fade" id="myModal4">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Sección 4</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
        <form method="post" action="../mapa/reserva.php">
                    <label for="numberSelect">Selecciona tu casillero</label>
                    <select id="numberSelect" name="locker" class="form-control">
                        <?php
                            for ($i = 121; $i <= 480; $i++) {
                                echo "<option value='$i'>$i</option>";
                            }
                        ?>
                    </select>
                    <br>
                    <button type="submit" class="btn btn-primary">Aceptar</button>
                </form>
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
        </div>
        
      </div>
    </div>
  </div>


  <div class="modal fade" id="myModal3">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Sección 3</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
        <form method="post" action="../mapa/reserva.php">
                    <label for="numberSelect">Selecciona tu casillero</label>
                    <select id="numberSelect" name="locker" class="form-control">
                        <?php
                            for ($i = 1; $i <= 75; $i++) {
                                echo "<option value='$i'>$i</option>";
                            }
                        ?>
                    </select>
                    <br>
                    <button type="submit" class="btn btn-primary">Aceptar</button>
                </form>
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
        </div>
        
      </div>
    </div>
  </div>


  <div class="modal fade" id="myModal2">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Sección 2</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
        <form method="post" action="../mapa/reserva.php">
                    <label for="numberSelect">Selecciona tu casillero</label>
                    <select id="numberSelect" name="locker" class="form-control">
                        <?php
                            for ($i = 166; $i <= 315; $i++) {
                                echo "<option value='$i'>$i</option>";
                            }
                        ?>
                    </select>
                    <br>
                    <button type="submit" class="btn btn-primary">Aceptar</button>
                </form>
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
        </div>
        
      </div>
    </div>
  </div>


  <div class="modal fade" id="myModal1">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Sección 1</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
        <form method="post" action="../mapa/reserva.php">
                    <label for="numberSelect">Selecciona tu casillero</label>
                    <select id="numberSelect" name="locker" class="form-control">
                        <?php
                            for ($i = 316; $i <= 435; $i++) {
                                echo "<option value='$i'>$i</option>";
                            }
                        ?>
                    </select>
                    <br>
                    <button type="submit" class="btn btn-primary">Aceptar</button>
                </form>
            </div>

            <!-- Modal footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrrar</button>
            </div>

        </div>
    </div>
</div>






        </div>
        
        
        
      </div>
    </div>
  </div>



  <div class="modal fade" id="myModal6">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Sección 6</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
        <form method="post" action="../mapa/reserva.php">
                    <label for="numberSelect">Selecciona tu casillero</label>
                    <select id="numberSelect" name="locker" class="form-control">
                        <?php
                            for ($i = 436; $i <= 465; $i++) {
                                echo "<option value='$i'>$i</option>";
                            }
                        ?>
                    </select>
                    <br>
                    <button type="submit" class="btn btn-primary">Aceptar</button>
                </form>
                <h4 class="modal-title">Sección 7</h4>
                 <form method="post" action="../mapa/reserva.php">
                    <label for="numberSelect">Selecciona tu casillero</label>
                    <select id="numberSelect" name="locker" class="form-control">
                        <?php
                            for ($i = 466; $i <= 480; $i++) {
                                echo "<option value='$i'>$i</option>";
                            }
                        ?>
                    </select>
                    <br>
                    <button type="submit" class="btn btn-primary">Aceptar</button>
                </form>
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
        </div>
        
      </div>
    </div>
    <div class="modal fade" id="myModal7">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header" id="s7" >
          <h4 class="modal-title" >Sección 7</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
        <form method="post" action="../mapa/reserva.php">
                    <label for="numberSelect">Selecciona tu casillero</label>
                    <select id="numberSelect" name="locker" class="form-control">
                        <?php
                            for ($i = 466; $i <= 480; $i++) {
                                echo "<option value='$i'>$i</option>";
                            }
                        ?>
                    </select>
                    <br>
                    <button type="submit" class="btn btn-primary">Aceptar</button>
                </form>
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
        </div>
        
      </div>
    </div>
  </div>

  </div>


 







</div>






















    <section id="somos-proya">
        <div class="container">
            <div class="img-container"></div>
            <div class="texto">

                <h2>Somos <span class="color-acento">CeniLockers!</span></h2>
                <p>Cenilockers es el resultado de la mente creativa de cinco estudiantes apasionados por 
                    la programación de software.Nuestro proyecto fue creado para dar solución a un problema rutinario que afecta 
                    a todos los aprendices en nuestra sede, que dia dia lidian con esta problematica la cual causa retrasos e inconformidad, es por esto que estamos
                    comprometidos con el bienestar de todos los estudiantes y hacer de su sede un lugar mucho mas agradable.
                  

                </p>
            </div>
        </div>
    </section>

    <section id="nuestros-programas">
        <div class="container">
            <h2>Nuestros servicios</h2>
            <div class="programas">
                <div class="carta">
                    <h3>Reserva</h3><br>
                    <br>
                    
                    <br><p>La principal razón de nuestro proyecto es brindar a los aprendices la facilidad de reservar un locker, para que asi se reduzca el tiempo que gasta en buscar un casillero disponible que en muchos casos esta busqueda es en vano.</p>
                    <button><a href="#hero" class="reserva-link" style="text-decoration:none;">Reserva ya</button></a>
                </div>
                <div class="carta">
                    <h3>Administración</h3><br>
                    <br>
                    
                    <br><p>Hemos creado cenilockers no solo para hacer la vida de los aprendices un poco mas sencilla,si no para que los administradores de nuestra sede tengan a la mano el estado de los casilleros, asi mismo se tenga en cuenta información de la persona que tiene guardas sus pertenencias y asi tener una correcta administración de quien ocupa un casillero para poder solucionar problemas.</p>
                    <button><a href="../Soporte/index.php" class="reserva-link" style="text-decoration:none;">Soporte</button></a>
                </div>
                <div class="carta">
                    <h3>Reporte</h3><br>
                    
                    <br>
                    
                    <br><p>Estamos comprometidos con el binestar y el sentido de pertenencia por nuestra institución es por esto que tanto aprendices y administradores pueden hacer el reporte de los casilleros averiados, permitiendonos saber el estado de nuestros lockers .</p>
                    <button><a href="../reportes/index.php" class="reserva-link" style="text-decoration:none;">Reportes</button></a>
                </div>  
            </div>
        </div>
    </section>

    <section id="caracteristicas">
        <div class="container">
            <ul>
                <li>✔️ Todas las jornadas</li>
                <li>✔️ Facil de usar  </li>
                <li>✔️ Soporte continuo</li>
              
                
            </ul>
        </div>
    </section>

    <section id="final">
        <h2>¿Listo para reservar?</h2>
        <br>
        <button><a href="#hero" class="reserva-link" style="text-decoration:none;">RESERVA YA!</a></button>
    </section>
    <footer >
        <div class="container" id="container" >
            <p >
                    Linea gratuita 018000000-0000<br><br>
                    Correo:LockersCenigraf@soy.sena.edu.co <br><br>
                    Direccion:Cl. 15 #31-42, Bogotá<br><br>
                    Servicio al cliente: 311 295 77 08<br><br>
                    &copy; CeniLockers!
            </p>
        </div>
    </footer>
    <br>

   



    <script src="javas.js">
        
    </script>
</body>
</html>
