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
    <title>Ventas</title>
    <link rel="stylesheet" href="css/Venta.css">
</head>
<body>
    <header class="header">
        <?php require('Global/cabesera.php'); ?> 
    </header>
    <!--=================================================================================
        Primera parte
    ==================================================================================-->
    <section class="Ventas_Contenedor">
        <Section class="Vetas_Formularios">
            <form action="" method="post" class="Ventas_Busqueda">
                <div class="Venta_Campo">
                    <input class="Venta_Doc" type="text" required name="contraseña" id="contraseña">
                    <label for="text">Contraseña</label>
                </div>
                
                <input type="submit" value="">
            </form>
        </Section>
    </section>


</body>
</html>

<?php  } ?>