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
                        <input required="" type="text" name="campo" id="campo" autocomplete="off" class="input">
                        <label for="campo" class="user-label">First Name</label>
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
                    <thead class="Tabla_Productos_Datos">
                        <th>Nombre</th>
                        <th>Precio</th>
                        <th>Stock</th>
                    </thead>
                    <tbody id="content" >

                    </tbody>
                </table>
                
            </div>
            
        </Section>

    </section>

    <script>

        getData()

        function getData(){
            let input = document.getElementById("campo").value
            let content = document.getElementById("content")
            let url="./php/load.php"
            let formaData = new FormData()
            formaData.append('campo',input)
            fetch(url,{
                method: "POST",
                body: formaData
            }).then(response => response.json())
            .then(data => {
                content.innerHTML = data
            }).catch(err => console.log(err))
        }

    </script>
    <script src="js/Formulario.js"></script>
</body>
</html>

<?php  } ?>