<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Project/PHP/PHPProject.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        $headers = [
            'Authorization: Bearer 4zsaPUYj685B6QOw3rOq4SmrCLr4cQyWgVpsBa8F',
            'Content-Type: application/json'
        ];
    </head>
    <body>
        <?php
       
        // Mostrar los 100 primeros números de la serie de Fibonacci.
        
            echo "0 - 1";
            $i = 0;
            $j = 1;
            
            for ($a=0; $a<98; $a++) {
                $k = $i + $j;
                
                echo " - ".$k;
                $i = $j;
                $j = $k;
            }
        ?>
    </body>
</html>