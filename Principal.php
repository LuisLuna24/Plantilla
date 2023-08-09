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
    <title>Document</title>
    <link rel="stylesheet" href="css/principal.css">
</head>
<body>
    <!--=================================================================================
        Cabezera
    ==================================================================================-->
    <header class="header">
        <a href="#" class="logo">AN</a>
        <input type="checkbox" id="side_menu" class="side_menu">
        <label for="side_menu" class="hamb"><span class="hamb_line"></span></label>
        <nav class="nav">
            <ul class="menu">
                <li><a href="#">Inventario</a></li>
                <li><a href="#">Empeleados</a></li>
                <li><a href="#">Venta</a></li>
                <li><a href="php/salir.php">Salir</a></li>
            </ul>
        </nav>
    </header>
    <!--=================================================================================
        Primera parte
    ==================================================================================-->
    <section class="Opciones">
        <div class="Opciones_Cont">
            <a class="Opciones_Cont_Card " href="Venta.php">
                <div clasS="Ventas">
                    <h2 class="Ventas_Titulo">Ventas</h2>
                </div>
            </a>
            <a class="Opciones_Cont_Card" href="Inventario.php">
                <div clasS="Inventario">
                    <h2 class="Ventas_Titulo">Inventario</h2>
                </div>
            </a>
            <a class="Opciones_Cont_Card" href="Empleados.php">
                <div clasS="Empleados">
                    <h2 class="Ventas_Titulo">Empleados</h2>
                </div>
            </a>
        </div>
    </section>
</body>
</html>

<?php  } ?>