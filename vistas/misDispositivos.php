<?php 
    
    include "header.php"; 
    if (isset($_SESSION['usuario']) && $_SESSION ['usuario']['rol'] ==1) {
        include "../clases/Asignacion.php";

        $con = new Conexion();
        $conexion=$con->conectar();
        $idUsuario=  $_SESSION['usuario']['id'];

        $sql ="SELECT 
                    persona.id_persona as idPersona
                FROM 
                    t_usuarios as usuario
                        INNER JOIN 
                    t_persona as persona on usuario.id_persona  = persona.id_persona
                    AND usuario.id_usuario = '$idUsuario'";
        
        $respuesta= mysqli_query($conexion,$sql);
        $idPersona = mysqli_fetch_array($respuesta)[0];


        $sql="SELECT persona.id_persona as idPersona,
        CONCAT (persona.paterno, ' ' ,
        persona.materno, ' ' ,
        persona.nombre) as nombrePersona,
        equipo.id_equipo as idEquipo,
        equipo.nombre as nombreEquipo,
        asignacion.id_asignacion as idAsignacion,
        asignacion.marca as marca,
        asignacion.modelo as modelo,
        asignacion.color as color,
        asignacion.descripcion as descripcion,
        asignacion.memoria as memoria,
        asignacion.disco_duro as discoDuro,
        asignacion.procesador as procesador,
        equipo.descripcion as imagen
        FROM 
        t_asignacion as asignacion
            INNER JOIN 
        t_persona as persona ON asignacion.id_persona = persona.id_persona
            INNER JOIN 
        t_cat_equipo as equipo ON asignacion.id_equipo = equipo.id_equipo
        AND asignacion.id_persona= '$idPersona' ";

    $respuesta = mysqli_query($conexion,$sql);

?>

    <div class="container">
        <div class="card border-0 shadow my-5">
            <div class="card-body p-5">
                <h1 class="fw-light">Mis dispositivos</h1>
                <p class="lead">
                    <div class="row">
                    <?php while($mostrar = mysqli_fetch_array($respuesta)){ ?>
                        <div class="col-sm-4">
                            <div class="card">
                                <div class="card-body">
                                    <h4> <span class="<?php echo $mostrar['imagen']?>"> </span><?php echo $mostrar['nombreEquipo']?></h4>
                                    <p> <?php echo $mostrar['descripcion']?> </p>
                                    <ul>
                                        <li>Marca: <?php echo $mostrar['marca']?></li>
                                        <li>Modelo: <?php echo $mostrar['modelo']?></li>
                                        <li>Color: <?php echo $mostrar['color']?></li>
                                        <li>Memoria: <?php echo $mostrar['memoria']?></li>
                                        <li>Disco Duro: <?php echo $mostrar['discoDuro']?></li>
                                        <li>Procesador: <?php echo $mostrar['procesador']?></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    <?php }?>
                    </div>
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