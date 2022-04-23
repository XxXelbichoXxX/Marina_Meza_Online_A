<?php
    include("../conexion.php");
    $con=conectar();

    $sql="SELECT *  FROM cliente";
    $query=mysqli_query($con,$sql); 
    ini_set('display_errors', 0);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://necolas.github.io/normalize.css/8.0.1/normalize.css">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel ="stylesheet" type="text/css" href="../libs/css/estilos.css">
    <title>Clientes</title>
</head>
<body>
    <?php
    include "../layouts/Header.php";
    ?>
    
    <main>
        <h1>Formulario para insertar clientes</h1>
        <form action="insertarCliente.php" method="POST" class="formulario" id="formulario">
            <!-- Grupo: Nombre -->
            <div class="formulario__grupo" id="grupo__nombre">
                <label for="nombre" class="formulario__label">Nombre(S)</label>
            <div class="formulario__grupo-input">
                <input type="text" class="formulario__input" name="nombreC" id="nombreC" placeholder="Ingresa tu nombre(s):">
                <i class="formulario__validacion-estado fas fa-times-circle"></i>
            </div>
                <p class="formulario__input-error">El nombre unicamente permite letras con un maximo de 50 caracteres.</p>
            </div>
            <!-- Grupo: Apellido -->
            <div class="formulario__grupo" id="grupo__apellido">
                <label for="apellido" class="formulario__label">Apellidos</label>
            <div class="formulario__grupo-input">
                <input type="text" class="formulario__input" name="apellidoC" id="apellidoC" placeholder="Ingresa tus apellidos:">
                <i class="formulario__validacion-estado fas fa-times-circle"></i>
            </div>
                <p class="formulario__input-error">Los apellidos unicamente permiten letras con un maximo de 80 caracteres.</p>
            </div>    
            <!-- Grupo: Telefono -->
            <div class="formulario__grupo" id="grupo__telefono">
                <label for="telefono" class="formulario__label">Numero de Celular</label>
            <div class="formulario__grupo-input">
                <input type="text" class="formulario__input" name="telefonoC" id="telefonoC" placeholder="Ingresa tu numero de celular:">
                <i class="formulario__validacion-estado fas fa-times-circle"></i>
            </div>
                <p class="formulario__input-error">Los numeros de celular permiten unicamente digitos con un maximo de 10 digitos.</p>
            </div>      
            <!-- Grupo: Correo -->
            <div class="formulario__grupo" id="grupo__correo">
                <label for="correo" class="formulario__label">Correo Electronico</label>
            <div class="formulario__grupo-input">
                <input type="text" class="formulario__input" name="correoC" id="correoC" placeholder="Ingresa tu correo electronico:">
                <i class="formulario__validacion-estado fas fa-times-circle"></i>
            </div>
                <p class="formulario__input-error">Verifica que tu correo sea una dirección valida.</p>
            </div>     
            <div class="formulario__mensaje" id="formulario__mensaje">
                <p><i class="fas fa-exclamation-triangle"></i> <b>Error:</b> Por favor rellena el formulario correctamente. </p>
            </div>       
            <div class="formulario__grupo formulario__grupo-btn-enviar">
                <button type="submit" class="formulario__btn">Enviar</button>
                <p class="formulario__mensaje-exito" id="formulario__mensaje-exito">Formulario enviado exitosamente!</p>
            </div>
        </form>
    </main>

            </div>
            </div>
        <div class="datatable-container">
        <h1>Lista de clientes en plataforma</h1>
            <div class="header-tools">
                <div class="search">
                    <input type="text" name="" id=""class="search-input">
                </div>
                
            </div>   
            <table class="datatable">
                <thead>
                    
                        <tr> 
                            <th>Id del cliente</th>
                            <th>Nombre(S) del cliente</th>
                            <th>Apellidos del cliente</th>
                            <th>Telefono del cliente</th>
                            <th>Correo del cliente</th>
                        </tr>
                    </div>
                </thead>
                <tbody>
                <?php
                    while($row=mysqli_fetch_array($query)){
                        ?>
                            <tr>
                                <th><?php echo $row['ID_CLIENTE']?></th>
                                <th><?php echo $row['NOMBRES']?></th>
                                <th><?php echo $row['APELLIDO']?></th>
                                <th><?php echo $row['TELEFONO']?></th>
                                <th><?php echo $row['CORREO']?></th>  
                                <th> 
                                <a href="formActualizarCliente.php?id=<?php echo $row['ID_CLIENTE'] ?>">
                                    <input type="button" class="button_css" value="Editar">
                                </a>
                                </th>
                                <th> 
                                <a href="eliminarCliente.php?id=<?php echo $row['ID_CLIENTE'] ?>">
                                    <input type="button" class="button_css" value="Eliminar">
                                </a>
                                </th>                                
                            </tr>
                <?php 
                                            }
                       ?>
                </tbody>   
            </table>   
    <script src = "../libs/js/validar.js"></script>
    <script src="https://kit.fontawesome.com/2c36e9b7b1.js" crossorigin="anonymous"></script>
</body>
</html>