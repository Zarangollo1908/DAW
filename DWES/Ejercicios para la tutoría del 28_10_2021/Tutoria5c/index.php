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

        if (isset($_POST['equipo'])) {

            $link = conecta_bd();
            $consulta = "select * from JUGADORES where EQUIPO =".$_POST['equipo'];
            $resultado = mysqli_query($link, $consulta);
            
            if ($fila= mysqli_fetch_row($resultado)) {
                echo "El equipo ".$_POST['equipo']." tiene ".$fila[0]." jugadores";
            } else {
                echo "El equipo no existe";
            }
                
        }
        
        mysqli_free_result($resultado);
        mysqli_close($link);        
        ?>

        <form action="" method="post">
            Escribe el equipo<input type="text" name="equipo">
            <input type="submit" name="enviar"><br> 
        </form>
    </body>
</html>
