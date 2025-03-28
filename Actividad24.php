<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actividad No.-24</title>
</head>
<body>
<fieldset>
<legend><h1>Numero par o impar</h1></legend>
<form action="" method="post">
    <label for="num">Ingresa un numero</label>
    <input type="number" name="num" id="num"> <br><br>
    <button type="submit">Continuar</button> <br><br>
    <button type="button" onclick="window.location.href='menu.php'">Regresar al menu</button> <br><br>
<?php
if ($_SERVER['REQUEST_METHOD']=="POST") {
    if (isset($_POST['num'])) {
        $num=$_POST['num'];

        if ($num % 2==0) {
            echo"El numero es Par";
        }else{
            echo"El numero es Impar";
        }
    }
}
?>
</form>
</fieldset>
</body>
</html>