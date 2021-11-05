<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Project/PHP/PHPProject.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
            if ($_POST['buscado']=="") {    // Si en el formulario no tenemos número a buscar, lo generamos
                $num= random_int(1, 100);
            } else
                $num=$_POST["buscado"];
            
            if (isset($_POST['numero'])) {
                $i=$_POST['numero'];        
                if ($i<$num) {  // Ahora vamos comparando el número introducido por el usuario con el número a buscar
                    echo "El número buscado es mayor.";
                } else if ($i>$num) {
                    echo "El número buscado es menor.";
                } else {
                    echo "¡Acertaste! Reiniciamos el juego.";
                    $num= random_int(1, 100);  // Una vez acertado el número se vuelve a crear un número a buscar
                }
            }
        ?>        
        
        
        <form action="index.php" method="post">             
            Introduzca el número<input type="text" name="numero" /><br>
            Buscado<input type="text" name="buscado" hidden="hidden"
                   value="<?php echo $num; // Enviamos al formulario el número a buscar ?>">
            <input type="submit" name="enviar"><br>
        </form>        
        
        

    </body>
</html>
