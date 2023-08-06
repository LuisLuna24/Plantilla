<?php
$conexion= mysqli_connect("localhost","root","","plantilla");

session_start();

$correo=$_POST['correo'];
$Contraseña = $_POST['contraseña'];

$query = "SELECT COUNT(*) as contar FROM empleados WHERE Correo= '$correo' and Contraseña ='$Contraseña'";
$resultado=mysqli_query($conexion,$query);
$array = mysqli_fetch_array($resultado);

if($array['contar']>0){
    $_SESSION['username']=$correo;
    header("location: ../Principal.php");
}else{
    header("location: ./index.html");
}
?>