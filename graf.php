<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title> Pokus omyl</title>
    </head>
    <body>
        <h1> Graf <h1>
        <h3> Zadejte hodnoty <h3>
                
                
 <form action="stranka.html" method="GET">
     <input type="text" name="hodnota1">
   <input type=submit value=odeslat>
   <br>
   <div style="background:#3D8; width:50%; height: 100px"> </div>
   
</form>
                
        <?php
        $data = filter_input(INPUT_GET, "hodnota1");
        $graf = explode(",", $data);
        for($i = 0; $i < count($graf); $i++){
            $graf[$i] = intval($graf[$i]);
        }
        foreach ($graf as $val){
            echo "<p>";
        }
        ?>
    </body>
</html>
