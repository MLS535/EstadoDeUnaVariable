<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Project/PHP/PHPProject.php to edit this template
-->
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Tabla de Estados de una variable</title>
        <style>
            *{
                font-family: Arial;
            }
            table{
                background-color: deepskyblue;

            }
            th{
                color: white;
            }
        </style>
    </head>
    <body>
        <h1>Estado de una variable</h1>
        <?php


        
        function functionisset(){
            $contenido_en_array = array(null, 0, true, false, "0", "", "foo", array("a"));
           global $var;
           unset($var)?>


        <table border="1">
            <tr>
               <tr> <th>Contenido de $var</th>
                <th>$var =null</th>
                <th>$var =0</th>
                <th>var = true</th>
                <th>var = false</th>
                <th>$var = "0"</th>
             <th>var = ""</th>
                <th>$var = "foo"</th>
        <th>$var = array()</><th>unset ($var)</th></tr>
           <tr> <th>isset($var)</th>
            <?php
            foreach ($contenido_en_array as $variable) {

                echo "<td>" . (isset($variable) ? 'true' : 'false') . "</td>";

            }
            echo "<td>" . (isset($var) ? 'true' : 'false') . "</td>";
            ?></tr>
            <tr><th>empty($var)</th>
            <?php
            foreach ($contenido_en_array as $variable) {
               echo "<td>" . (empty($variable) ? 'true' : 'false') . "</td>";
            }
            echo "<td>" . (empty($var) ? 'true' : 'false') . "</td>";
            ?></tr>
            <tr><th>(bool) $var</th>
                <?php
                foreach ($contenido_en_array as $variable) {
                     echo "<td>" . ((bool)$variable ? 'true' : 'false') . "</td>";
                }
                echo "<td>" . ((bool)$var ? 'true' : 'false') . "</td>";
                ?></tr>

          </table>
       <?php }

        functionisset();
        ?>
    </body>
</html>
