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
    <?php $conexion= mysqli_connect("localhost","root","","plantilla");?>
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
                    <?php
                        $resultado=mysqli_query($conexion,"SELECT * FROM Producto");
                    ?>
                </table>
                <table class="Tabla_Productos">
                    <?php while($datos=mysqli_fetch_array($resultado)){?>
                        <tr class="Tabla_Productos_Datos">
                            <th class="Productos_Datos"><?php echo $datos['Nombre'] ?></th>
                            <th class="Productos_Datos"><?php echo $datos['Precio'] ?></th>
                            <th class="Productos_Datos"><?php echo $datos['Existencia'] ?></th>
                        </tr>
                    <?php } ?>

                </table>
            </div>
            
        </Section>

    </section>
</body>
</html>

<?php  } ?>