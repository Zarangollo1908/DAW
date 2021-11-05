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
        /*
         * Ejercicio resuelto con MySQLi
         * 
          function conecta_bd() {
          $link = mysqli_connect('localhost', 'super', '123456', "baloncesto");

          if (!$link) {
          echo "Error: No se pudo conectar a MySQL.<br/>";
          exit;
          }

          return $link;
          }


          $link=conecta_bd();
          $consulta="SELECT * FROM EQUIPOS";
          $resultado = mysqli_query($link, $consulta);

          echo '<table border="1">';
          echo '<tr><td>Código</td><td>Nombre</td></tr>';


          while ($fila = mysqli_fetch_row($resultado)) {
          echo '<tr><td>'.$fila[0].'</td><td>'.$fila[1].'</td></tr>';
          }
          echo '</table>';
         */

        //
        // Ejercicio resuelto con PDO
        //
        
        function conecta_bd() {
            $opciones = array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8");
            $link = new PDO('mysql:host=localhost;dbname=baloncesto', 'super', '123456', $opciones);

            return $link;
        }

        $link = conecta_bd();
        $consulta = "SELECT * FROM EQUIPOS";

        $resultado = $link->query($consulta);

        echo '<table border="1">';
        echo '<tr><td>Código</td><td>Nombre</td></tr>';

        while ($fila = $resultado->fetch()) {   // En $fila obtendremos un array en el que tendremos el registro actual
            echo '<tr><td>' . $fila[0] . '</td><td>' . $fila[1] . '</td></tr>';
        }
        echo '</table>';
        ?> 
    </body>
</html>
