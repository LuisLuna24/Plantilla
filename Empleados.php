<?php
session_start();
$correo= $_SESSION['username'];
if(!isset($correo)){
    header("location:index.html");
}else{
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Empleados</title>
</head>
<body>
    <!--=================================================================================
        Cabezera
    ==================================================================================-->
    <header class="header">
        <?php require('Global/cabesera.php'); ?> 
    </header>
    <!--=================================================================================
        Primera parte
    ==================================================================================-->
</body>
</html>

<?php  } ?>