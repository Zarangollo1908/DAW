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
        // Crear una tabla HTML de 10x10 con los números del 1 al 100.
            
            echo '<table border="1">';
        
            for ($i=0; $i<10; $i++) {
                echo "<tr>";
                
                for ($j=0; $j<10; $j++) {
                    $v=1+$i*10+$j;
                    echo "<td>".$v."</td>";
                }
                echo "</tr>";
            }
            
            echo "</table>";
        ?>
    </body>
</html>
