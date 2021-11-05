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
            function palindromo ($s) {
                
              for ($i=0,$j= strlen($s)-1;$i<$j;$i++,$j--) { // empezamos comparando los extremos de la cadena
                                                            // $i por la izquierda y $j por la derecha
                  if (substr($s, $i,1)!=substr($s,$j,1)) {  // si son diferentes ya no es un palíndromo
                                                            // si son iguales avanzamos $i hacia la derecha y $j hacia la izquierda
                      return 0;
                  }
              }
              
              // Si hemos salido del bucle sin un return es porque la cadena es simétrica, es decir un palíndromo
              
              return 1;
            }
            
            
            echo palindromo("dabalearrozalazorraelabad");

        ?>
    </body>
</html>
