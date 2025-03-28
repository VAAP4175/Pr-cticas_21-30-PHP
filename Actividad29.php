<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actividad No.-25</title>
</head>
<body>
<fieldset>
<legend><h1>Doble de un numero positivo y Triple de un negativo</h1></legend>
<form action="" method="post">
    <label for="num">Ingresa un numero </label>
    <input type="number" name="num" id="num"> <br><br>
    <button type="submit">Continuar</button> <br><br>
    <button type="button" onclick="window.location.href='menu.php'">Regresar al menu</button> <br><br>
    <?php
    if ($_SERVER['REQUEST_METHOD']=="POST") {
        if (isset($_POST['num'])) {
            $num=$_POST['num'];

            if ($num<0) {
                $resultado=$num*3;
                echo"El numero $num es negativo, su triple es $resultado";
            }else if ($num>0) {
            $resultado=$num*2;
            echo"El numero $num es positivo, su doble es $resultado";
            }else{
                echo"EL numero es 0";
            }
        }
    }
    ?>
</form>
</fieldset>
</body>
</html>