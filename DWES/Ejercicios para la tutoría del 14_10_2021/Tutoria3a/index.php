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
            function es_primo($n) {
                for ($i=2;$i<$n;$i++) { // Para no ser un número primo, $n debe ser divisible por un número 
                                        // comprendido entre 2 y $n-1
                    if ($n%$i==0) {
                        return 0;
                    }
                }                
                return 1;       // Si no hemos encontrado ningún divisor es porque $n es primo
            }
            
            echo '<table border="1">';
            
            for ($i=0;$i<10;$i++) {     // $i nos indicará la fila
                echo '<tr>';
                
                for ($j=0;$j<10;$j++) {     // $j nos indicará la columna
                    $n=$i*10+$j+1;  // Sumamos 1 para que $n esté entre 1 y 100, y no entre 0 y 99
                    
                    echo '<td>';
                    if (es_primo($n)) {
                        echo $n;            
                    } else {                
                        echo "-";           
                    }
                    echo '</td>';
                }
                
                echo '</tr>';
            }
                                    
            echo '</table>';
        ?>
    </body>
</html>
