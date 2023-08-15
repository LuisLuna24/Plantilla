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
            <section class= "Vetas_Contenedor">
                <select name="num_registros" id="num_registros" class="form-select">
                    <option value="10">10</option>
                    <option value="15">15</option>
                    <option value="20">20</option>
                </select>
                <form action="" method="post" class="Ventas_Busqueda">
                    <div class="input-group">
                        <input required="" type="text" name="text" name="campo" id="campo" autocomplete="off" class="input">
                        <label class="user-label">Buscar</label>
                    </div>
                </form>
            </section>
        </Section>
    

        <!--=================================================================================
            Segunda parte
        ==================================================================================-->
        <Section class="Tabla">
            <main>
                <div class="Tabla_Contenedor">

                    <table class="Tabla_Datos">
                        <thead>
                            <th class="sort asc">id_Producto</th>
                            <th class="sort asc">Nombre</th>
                            <th class="sort asc">Precio</th>
                            <th class="sort asc">Stock</th>
                        </thead>

                        <!-- El id del cuerpo de la tabla. -->
                        <tbody id="content">

                        </tbody>
                    </table>

                    
                        <div class="col-6">
                            <label id="lbl-total"></label>
                        </div>

                        <div class="Paginacion_Nav" id="nav-paginacion"></div>

                        <input type="hidden" id="pagina" value="1">
                        <input type="hidden" id="orderCol" value="0">
                        <input type="hidden" id="orderType" value="asc">
                    
                </div>
            </main>

        </section>
    </section>

    <script src="js/Formulario.js"></script>
</body>

</html>

<?php  } ?>