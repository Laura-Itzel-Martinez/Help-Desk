$(document).ready(function(){
    $('#tablaAsignacionLoad').load('asignacion/tablaAsignacion.php');
});

function asignarEquipo(){
    $.ajax({
        type:"POST",
        data: $('#frmAsignaEquipo').serialize(),
        url:"../procesos/asignacion/asignar.php",
        success:function(respuesta){
            respuesta=respuesta.trim();
            if (respuesta==1) {
                Swal.fire(":)","Asignado con exito","success");
                $('#tablaAsignacionLoad').load('asignacion/tablaAsignacion.php');
            } else {
                Swal.fire(":(","Fallo al asignar" + respuesta,"error");
            }
        }
    });
    return false;
}
function eliminarAsignacion(idAsignacion){
    Swal.fire({
        title: 'Estas seguro de eliminar este registro?',
        text: "Una vez eliminado no podra ser recuperado!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, delete it!'
      }).then((result) => {
        if (result.isConfirmed) {
            $.ajax({
                type:"POST",
                data: "idAsignacion=" + idAsignacion,
                url: "../procesos/asignacion/eliminarAsignacion.php",
                success:function(respuesta){
                    respuesta=respuesta.trim();
                    if (respuesta==1) {
                        $('#tablaAsignacionLoad').load('asignacion/tablaAsignacion.php');
                        Swal.fire(":)","Eliminado con exito","success");
                    } else {
                        Swal.fire(":(","Fallo al eliminar" + respuesta,"error");
                    }
                }
            });
        }
      });
    return false;
}