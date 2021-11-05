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
            if (isset($_POST['juego']))
            $j=$_POST['juego'];     // en $j ponemos lo que ha jugado el usuario
            $m= random_int(0,2);    // $m será lo que juegue la máquina, se calcula aleatoriamente
            
            if ($m==$j) {
                echo "Empate a ";
                if ($m==0) {
                    echo "piedra";
                } else if($m==1) {
                    echo "papel";                   
                } else {
                    echo "tijera";
                }
            }
        
            if ($j==0 && $m==2) {
                echo "Ganaste. Piedra sobre tijera";
            } else if ($j==1 && $m==0) {
                echo "Ganaste. Papel sobre piedra";
            } else if ($j==2 && $m==1) {
                echo "Ganaste. Tijera sobre papel";
            } else if ($j==2 && $m==0) {
                echo "Perdiste. Piedra sobre tijera";
            } else if ($j==0 && $m==1) {
                echo "Perdiste. Papel sobre piedra";
            } else if ($j==1 && $m==2) {
                echo "Perdiste. Tijera sobre papel";
            }

        
        ?>

        
<!--
En lugar de tener un solo formulario, vamos a tener tres formularios
Los tres envían un dato bajo la caja de texto oculta "juego"
Al igual que en el juego de la máquina piedra=0, papel=1, tijera=2
-->        
        
        <br>
        <form action="index.php" method="post">             
            <input type="text" name="juego" value="0" hidden="hidden"/>
            <input type="submit" name="piedra" value="piedra">
        </form> 
        <form action="index.php" method="post">             
            <input type="text" name="juego" value="1" hidden="hidden"/>
            <input type="submit" name="papel" value="papel">
        </form> 
        <form action="index.php" method="post">             
            <input type="text" name="juego" value="2" hidden="hidden"/>
            <input type="submit" name="tijera" value="tijera"><br>
        </form> 
    </body>
</html>
