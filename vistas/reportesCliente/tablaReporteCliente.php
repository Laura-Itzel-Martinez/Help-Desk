<?php
    session_start();
    include "../../clases/Conexion.php";
    $con = new Conexion();
    $conexion= $con->conectar();
    $contador=1;
    $idUsuario= $_SESSION['usuario']['id'];

    $sql="SELECT 
    reportes.id_reporte as idReporte,
    reportes.id_usuario as idUsuario,
    CONCAT (persona.paterno, ' ' ,
            persona.materno, ' ' ,
            persona.nombre) as nombrePersona,
            equipo.id_equipo as idEquipo,
            equipo.nombre as nombreEquipo,
            reportes.descripcion_problema as problema,
            reportes.estatus as estatus,
            reportes.solucion_problema as solucion,
            reportes.fecha as fecha
            
    FROM
    t_reportes as reportes 
    INNER JOIN 
    t_usuarios as usuario on reportes.id_usuario = usuario.id_usuario
    INNER JOIN
    t_persona as persona on usuario.id_persona = persona.id_persona
    INNER JOIN 
    t_cat_equipo as equipo on reportes.id_equipo = equipo.id_equipo
    AND reportes.id_usuario = '$idUsuario'";

    $respuesta= mysqli_query($conexion,$sql);
?>


<table  class="table table-sm dt-responsive nowrap table-bordered"  style="width:100%" id="tablaReporteClienteDataTable">
    <thead>
        <th>#</th>
        <th>Persona</th>
        <th>Dispositivo</th>
        <th>Fecha</th>
        <th>Descripcion</th>
        <th>Estatus</th>
        <th>Solucion</th>
        <th>Eliminar</th>
    </thead>
    <tbody>

    <?php while($mostar = mysqli_fetch_array($respuesta)) {?>
        <tr>
 
            <td><?php echo $contador++;?></td>
            <td><?php echo $mostar['nombrePersona'];?></td>
            <td><?php echo $mostar['nombreEquipo'];?></td>
            <td><?php echo $mostar['fecha'];?></td>
            <td><?php echo $mostar['problema'];?></td>

            <td>
                <?php 
                    $estatus = $mostar['estatus'];
                    $cadenaEstatus =    '<span class="badge badge-success">Abierto</span>';

                    if ($estatus==0) {
                        $cadenaEstatus ='<span class="badge badge-danger">Cerrado</span>';
                        
                    } 
                    echo $cadenaEstatus;
                ?>
            </td>
            <td><?php echo $mostar ['solucion'];?></td>
            <td>
                <?php 
                   if ($mostar['solucion'] == "") {
                ?>
                    <button class="btn btn-danger btn-sm" onclick="eliminarReporteCliente(<?php echo $mostar['idReporte'];?>)">
                         Eliminar
                    </button>
                <?php 
                } 
                ?>
            </td>
        </tr>
    <?php } ?>
    </tbody>
</table>

<script>
    $(document).ready(function(){
        $('#tablaReporteClienteDataTable').DataTable();
    })
</script>
