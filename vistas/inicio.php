
<?php 
    
    include "header.php"; 
    if (isset($_SESSION['usuario']) && 
    $_SESSION ['usuario']['rol'] ==1 || $_SESSION ['usuario']['rol'] ==2) {

?>

    <div class="container">
        <div class="card border-0 shadow my-5">
            <div class="card-body p-5">
            <h1 class="fw-light">Inicio</h1>
            <p class="lead"><h3 class="text-center">Bienvenido a Help-Desk</h3>
                <hr>
                <p style="font-family: 'Raleway', sans-serif;"><em> Centro de Atención al Usuario es un conjunto de recursos 
                    tecnológicos y humanos, para prestar servicios con la
                     posibilidad de gestionar y solucionar todas las posibles 
                     incidencias de manera integral, junto con la atención de 
                     requerimientos relacionados con las Tecnologías de la Información 
                     y la Comunicación (TIC).</em></p>
                
                <p style="font-family: 'Raleway', sans-serif;">
                    El personal o recurso humano encargado de Mesa de Ayuda debe saber
                     proporcionar respuestas y soluciones a los usuarios finales, clientes
                      o beneficiarios (destinatarios del servicio), y también puede otorgar 
                      asesoramiento en relación con una organización o institución, productos y servicios.
                       Generalmente, el propósito de Mesa de Ayuda es solucionar problemas o para orientar 
                       acerca de computadoras, redes, equipos electrónicos o software.
                </p>
                <p><img class="rounded mx-auto d-block" src="../public/img/img.png" alt=""></p>
            </p>
           
            </div>
        </div>
    </div>
    
<?php 
    include "footer.php";
    
    }else{
        header("location:../index.html");
    }   
    ?>