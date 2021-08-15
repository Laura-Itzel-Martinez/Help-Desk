<?php
    $idUsuario = $_POST['idUsuario'];
    include "../../../clases/Usuarios.php";
    $Usuario=new Usuarios();
    echo $Usuario->eliminarUsuario($idUsuario);