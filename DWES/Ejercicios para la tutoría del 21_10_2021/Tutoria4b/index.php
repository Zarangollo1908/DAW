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
        echo '<table border="1">';

        if (isset($_POST['disparo'])) {
            $c = $_POST['disparo'];
            $l = substr($c, 0, 1);  // Para calcular la fila tomamos el primer carácter de la cadena
            $fila = ord($l) - 65;   // El valor de las filas en la tabla A=0, B=1... J=9
            $col = substr($c, 1, 2) - 1;    // Para la columna tomamos los caracteres segundo y tercero
        } else {
            $col=-1;
            $fila=-1;
        }

        for ($i = 0; $i < 10; $i++) {     // $i nos indicará la fila
            echo '<tr>';

            for ($j = 0; $j < 10; $j++) {     // $j nos indicará la columna
                echo "<td>";
                if ($i == $fila && $j == $col) {
                    echo "X";
                } else {    // Escribiremos siempre un guión excepto cuando estemos en la fila y columna indicadas por el disparo
                    echo "-";
                }
                echo '</td>';
            }

            echo '</tr>';
        }

        echo '</table>';
        ?>

        <form action="index.php" method="post">             
            Introduzca el disparo<input type="text" name="disparo" /><br>
            <input type="submit" name="enviar"><br>
        </form> 
    </body>
</html>
