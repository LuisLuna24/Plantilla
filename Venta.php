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
    <section class="Todo">
        <!--=================================================================================
            Primera parte
        ==================================================================================-->
        <section class="Ventas">
            <Section class="Vetas_Formularios">
                <form action="" method="post" class="Ventas_Busqueda">
                    <div class="input-group">
                        <input required="" type="text" name="text" autocomplete="off" class="input">
                        <label class="user-label">First Name</label>
                    </div>
                    <input type="submit" value="Buscar" class="Ventas_Boton">
                </form>
            </Section>
        </section>

        <!--=================================================================================
            Segunda parte
        ==================================================================================-->
        <Section class="Tabla">
            <div class="Tabla_Contenedor">
                <table class="Tabla_Productos">
                    <tr class="Tabla_Productos_Datos">
                        <th>Nombre</th>
                        <th>Precio</th>
                        <th>Stock</th>
                    </tr>
                    <tr class="Tabla_Productos_Datos">
                        <th>Hola</th>
                        <th>14.5</th>
                        <th>5</th>
                    </tr>

                </table>
            </div>
            
        </Section>

    </section>
</body>
</html>

<?php  } ?>