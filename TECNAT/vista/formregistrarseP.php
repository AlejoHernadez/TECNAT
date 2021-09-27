<?php 

$connection = mysqli_connect('localhost', 'root', '', 'tecnat') 
or die(mysql_error($mysqli));

insertar($connection);

function insertar($conexion){
    $codigo = $_POST['codigo_cli'];
    $nombre = $_POST['nombre_cli'];
    $correo = $_POST['correo_cli'];

    
    $consulta = "INSERT INTO clientes(codigo_cli, nombre_cli, correo_cli)
     VALUES ($codigo, '$nombre', '$correo')";
    mysqli_query($conexion, $consulta);
    mysqli_close($conexion);
    header("location: indexClien.php");
}

?>