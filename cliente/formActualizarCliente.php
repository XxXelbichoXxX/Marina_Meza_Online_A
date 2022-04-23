<?php 
    include("../conexion.php");
    $con=conectar();

$id=$_GET['id'];

$sql="SELECT * FROM CLIENTE WHERE ID_CLIENTE='$id'";
$query=mysqli_query($con,$sql);

$row=mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel ="stylesheet" type="text/css" href="../libs/css/estilos.css">
        <title>CLIENTES</title>
        
    </head>
    <body>
    <?php
    include "../layouts/Header.php";
    ?>
        <main>
        <h1>Modificando al cliente: <?php echo $row['NOMBRES'];?> <?php echo $row['APELLIDO'];?></h1>
        <form action="updateCliente.php" method="POST" class="formulario" id="formulario">
            <!-- Grupo: Nombre -->
            <div class="formulario__grupo" id="grupo__nombre">
                <label for="nombre" class="formulario__label">Nombre(S)</label>
            <div class="formulario__grupo-input">
                <input type="text" class="formulario__input" name="nombreC" id="nombreC" placeholder="Ingresa tu nombre(s):" value="<?php echo $row['NOMBRES']  ?>">
                <i class="formulario__validacion-estado fas fa-times-circle"></i>
            </div>
                <p class="formulario__input-error">El nombre unicamente permite letras con un maximo de 50 caracteres.</p>
            </div>
            <!-- Grupo: Apellido -->
            <div class="formulario__grupo" id="grupo__apellido">
                <label for="apellido" class="formulario__label">Apellidos</label>
            <div class="formulario__grupo-input">
                <input type="text" class="formulario__input" name="apellidoC" id="apellidoC" placeholder="Ingresa tus apellidos:" value="<?php echo $row['APELLIDO']  ?>">
                <i class="formulario__validacion-estado fas fa-times-circle"></i>
            </div>
                <p class="formulario__input-error">Los apellidos unicamente permiten letras con un maximo de 80 caracteres.</p>
            </div>    
            <!-- Grupo: Telefono -->
            <div class="formulario__grupo" id="grupo__telefono">
                <label for="telefono" class="formulario__label">Numero de Celular</label>
            <div class="formulario__grupo-input">
                <input type="text" class="formulario__input" name="telefonoC" id="telefonoC" placeholder="Ingresa tu numero de celular:" value="<?php echo $row['TELEFONO']  ?>">
                <i class="formulario__validacion-estado fas fa-times-circle"></i>
            </div>
                <p class="formulario__input-error">Los numeros de celular permiten unicamente digitos con un maximo de 10 digitos.</p>
            </div>      
            <!-- Grupo: Correo -->
            <div class="formulario__grupo" id="grupo__correo">
                <label for="correo" class="formulario__label">Correo Electronico</label>
            <div class="formulario__grupo-input">
                <input type="text" class="formulario__input" name="correoC" id="correoC" placeholder="Ingresa tu correo electronico:" value="<?php echo $row['CORREO']  ?>">
                <i class="formulario__validacion-estado fas fa-times-circle"></i>
            </div>
                <p class="formulario__input-error">Verifica que tu correo sea una dirección valida.</p>
            </div>       
            <div class="formulario__grupo formulario__grupo-btn-enviar">
                <button type="submit" class="formulario__btn">Actualizar datos</button>
                <p class="formulario__mensaje-exito" id="formulario__mensaje-exito">Formulario enviado exitosamente!</p>
            </div>
                <input type="hidden" name="id_cliente" value="<?php echo $row['ID_CLIENTE']  ?>">
        </form>
    </main>
    <script src = "../libs/js/validar.js"></script>
    </body>
</html>