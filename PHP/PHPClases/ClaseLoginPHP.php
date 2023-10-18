<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenido</title>
</head>
<body>
    <?php
    
       echo "
       <div>
          <table text-aling='center' border='1' width='100%' >

            <tr>
              <td width='33%'>
              </td>
              <td width='33%'>
              <img src='Media\github.png' alt='Logo' width='100px' heigth='100'>
              </td>
              <td width='33%'>
              </td>
            </tr>

            <tr>

              <td width='33%'>
              </td>

              <td width='33%'>

                 <form name='login' action='PHP\procesa_datos.php' method='post'>
                    usuario:
                    <input type='text' maxlength='8' name='usuario'>
                    <br><br>

                    contraseña:
                    <input type='password' maxlength='8' name='pass'>
                    <br><br>

                    <input type='submit' value='entrar'>
            
                    </form>

              </td>

              <td width='33%'>
              </td>

            </tr>

          </table>
       
       </div>
       ";
    ?>

  
</body>
</html>