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
            function es_letra($l) {
                if (($l>="A" && $l<="Z") || ($l>="a" && $l<="z")) {     // Verificamos si el carácter que recibimos es
                 // una letra mayúscula   o   una letra minúscula 
                    return 1;
                } else {
                    return 0;
                }                    
            }
        
            function contador($s) {
                $a=0;   // en $a vamos a contar el número de palabras
                $p=0;   // $p nos dirá si estamos dentro de una palabra o no
                
                
                for ($i=0;$i<strlen($s);$i++) { // recorremos carácter a carácter la cadena que recibe la función
                    $l= es_letra(substr($s, $i,1));
                    
                    if ($p==0 && $l==1) {   // Si estábamos fuera de una palabra y nos encontramos con una letra
                        $p=1;       // significa que entramos en una palabra nueva
                        $a++;       // y por lo tanto aumenta el número de palabras
                    } else if ($p==1 && $l==0) {    // Si estábamos dentro de una palabra
                                                    // y nos encontramos con un carácter que no es una letra
                        $p=0;       // significa que la palabra ha acabado 
                    }                    
                }
                
                return $a;                
            }
            
            
            echo contador("¡Hola, mundo!");
                    
        ?>
    </body>
</html>
