<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php if(isset($_COOKIE["actividad"])){echo $_COOKIE["actividad"];
        ?><a href="pagina3.php" ><br>Borrar cookie</a><?php
        }
        else{ ?> 
                
        <form action="pagina2.php" method="POST">
            <fieldset>
                <legend>Elija la opción</legend><br>
                Aerobic<input type="radio" name="opc" value="Aerobic"><br><br>
                Aerodance<input type="radio" name="opc" value="AeroDance"><br><br>
                Aikido<input type="radio" name="opc" value="Aikido"><br><br>
             <input type="submit" name="submit" value="Confirmar">
            </fieldset>
        </form>
        <?php
        }
        ?>
    </body>
</html>
