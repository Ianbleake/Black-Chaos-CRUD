<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    include('Conexion.php');
    
    $usuario = $_POST['usuario'];
    $pass = $_POST['pass'];
    $verifica_usuario = "select username, pass from users where username='$usuario' and pass='$pass'";
    $resultado_verifica=odbc_exec($link2,$verifica_usuario);
    
    echo "<br>
        Página de procesar datos
        <br>El usuario ingresó:<br> 
        usuario: $usuario 
        <br> 
        contraseña: $pass";

    while($row = odbc_fetch_array($resultado_verifica))
    {
        $user_verificado=$row['username'];
        $pass_verificado=$row['pass'];
    }
    /*echo "<br><br>Datos que arroja la base:<br>
    Usuario verificado: $user_verificado <br>
    Contraseña verificado: $pass_verificado<br>";*/ //prueba para ver si regresa algo la DB


    if($user_verificado == 'IanBleake' && $pass_verificado == 'Arviluki')
    {
        header("Location: ../../PHP/Ownpage.php");
        exit();
    }

    elseif($user_verificado != '' )
    {
        echo"<br><br>Bienvenido chulo ".$user_verificado;
        header("Location: ../../html/productos.html");
        exit();
    }
    
    else
    {
        echo"<br><br>Usuario y/o contraseña incorrectas, mamaste";
        header("Location: ../../error.html");
        exit();
        
    }


    ?>
</body>
</html>