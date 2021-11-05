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
            // Dados tres valores asignados a sendas variables ($a, $b, $c) mostrar la solución o soluciones de la resolución de la ecuación de segundo grado.

            $a=1;
            $b=-7;
            $c=12;
            
            $r=$b*$b-4*$a*$c;
            
            if ($r<0) {
                echo "No tiene solución en los números reales";
            } else if ($r==0) {
                $s=-$b/(2*$a);
                echo "La ecuación tiene una única que es ".$s;
            } else {
                $s1=(-$b+sqrt($r)) / (2*$a);
                $s2=(-$b-sqrt($r)) / (2*$a);                
                
                echo "La ecuación tiene dos soluciones que son $s1 y $s2";
            }
            
        ?>
    </body>
</html>
