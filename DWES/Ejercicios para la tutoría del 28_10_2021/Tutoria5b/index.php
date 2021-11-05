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

        function conecta_bd() {
            $link = mysqli_connect('localhost', 'super', '123456', "baloncesto");

            if (!$link) {
                echo "Error: No se pudo conectar a MySQL.<br/>";
                exit;
            }

            return $link;
        }

        if (isset($_POST['codigo'])) {

            $link = conecta_bd();
            $consulta = "select NOMBRE_JUGADOR from JUGADORES where cod_jugador =".$_POST['codigo'];
                        // Componemos la consulta con el dato recibido por el formulario
            $resultado = mysqli_query($link, $consulta);
            
            if ($fila= mysqli_fetch_row($resultado)) {  // En este caso recibiremos una sola fila y una sola columna
                echo "El jugador de código ".$_POST['codigo']." se llama ".$fila[0];
            } else {
                echo "El jugador no existe";
            }
                
        }
        
        mysqli_free_result($resultado);
        mysqli_close($link);        
        ?>

        <form action="" method="post">
            Escribe el código<input type="text" name="codigo">
            <input type="submit" name="enviar"><br> 
        </form>
    </body>
</html>
