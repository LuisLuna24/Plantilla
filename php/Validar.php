<?php
$conexion= mysqli_connect("localhost","root","","plantilla");

session_start();

$correo=$_POST['correo'];
$Contraseña = $_POST['contraseña'];
function limpiar_cadena($correo){
    $correo=trim($correo);
    $correo=stripslashes($correo);
    $correo=str_ireplace("<script>", "", $correo);
    $correo=str_ireplace("</script>", "", $correo);
    $correo=str_ireplace("<script src", "", $correo);
    $correo=str_ireplace("<script type=", "", $correo);
    $correo=str_ireplace("SELECT * FROM", "", $correo);
    $correo=str_ireplace("DELETE FROM", "", $correo);
    $correo=str_ireplace("INSERT INTO", "", $correo);
    $correo=str_ireplace("DROP TABLE", "", $correo);
    $correo=str_ireplace("DROP DATABASE", "", $correo);
    $correo=str_ireplace("TRUNCATE TABLE", "", $correo);
    $correo=str_ireplace("SHOW TABLES;", "", $correo);
    $correo=str_ireplace("SHOW DATABASES;", "", $correo);
    $correo=str_ireplace("<?php", "", $correo);
    $correo=str_ireplace("?>", "", $correo);
    $correo=str_ireplace("--", "", $correo);
    $correo=str_ireplace("^", "", $correo);
    $correo=str_ireplace("<", "", $correo);
    $correo=str_ireplace("[", "", $correo);
    $correo=str_ireplace("]", "", $correo);
    $correo=str_ireplace("==", "", $correo);
    $correo=str_ireplace(";", "", $correo);
    $correo=str_ireplace("::", "", $correo);
    $correo=trim($correo);
    $correo=stripslashes($correo);
    return $correo;
}

function limpiar_contraseña($Contraseña){
    $Contraseña=trim($Contraseña);
    $Contraseña=stripslashes($Contraseña);
    $Contraseña=str_ireplace("<script>", "", $Contraseña);
    $Contraseña=str_ireplace("</script>", "", $Contraseña);
    $Contraseña=str_ireplace("<script src", "", $Contraseña);
    $Contraseña=str_ireplace("<script type=", "", $Contraseña);
    $Contraseña=str_ireplace("SELECT * FROM", "", $Contraseña);
    $Contraseña=str_ireplace("DELETE FROM", "", $Contraseña);
    $Contraseña=str_ireplace("INSERT INTO", "", $Contraseña);
    $Contraseña=str_ireplace("DROP TABLE", "", $Contraseña);
    $Contraseña=str_ireplace("DROP DATABASE", "", $Contraseña);
    $Contraseña=str_ireplace("TRUNCATE TABLE", "", $Contraseña);
    $Contraseña=str_ireplace("SHOW TABLES;", "", $Contraseña);
    $Contraseña=str_ireplace("SHOW DATABASES;", "", $Contraseña);
    $Contraseña=str_ireplace("<?php", "", $Contraseña);
    $Contraseña=str_ireplace("?>", "", $Contraseña);
    $Contraseña=str_ireplace("--", "", $Contraseña);
    $Contraseña=str_ireplace("^", "", $Contraseña);
    $Contraseña=str_ireplace("<", "", $Contraseña);
    $Contraseña=str_ireplace("[", "", $Contraseña);
    $Contraseña=str_ireplace("]", "", $Contraseña);
    $Contraseña=str_ireplace("==", "", $Contraseña);
    $Contraseña=str_ireplace(";", "", $Contraseña);
    $Contraseña=str_ireplace("::", "", $Contraseña);
    $Contraseña=trim($Contraseña);
    $Contraseña=stripslashes($Contraseña);
    return $Contraseña;
}

$query = "SELECT COUNT(*) as contar FROM empleados WHERE Correo= '$correo' and Contrasña ='$Contraseña'";
$resultado=mysqli_query($conexion,$query);
$array = mysqli_fetch_array($resultado);

if($array['contar']>0){
    $_SESSION['username']=$correo;
    header("location: ../Principal.php");
}else{
    echo "Datos Invalidos";
}
?>