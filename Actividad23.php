<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actividad No.-23</title>
</head>
<body>
<fieldset>
<legend><h1>Numero multiplo de 3 y 5</h1></legend>
<form action="" method="post">
    <label for="num">Ingresa un numero</label>
    <input type="number" name="num" id="num"> <br><br>
    <button type="submit">Continuar</button> <br><br>
    <button type="button" onclick="window.location.href='menu.php'">Regresar al menu</button> <br><br>
<?php
if ($_SERVER['REQUEST_METHOD']=="POST") {
    if (isset($_POST['num'])) {
        $num=$_POST['num'];

        if ($num % 5 == 0 && $num % 3 == 0) {
            echo "El numero $num es multiplo de 3 y 5";
        } else if ($num % 3 == 0) {
            echo "El numero $num es multiplo de 3";
        } else if ($num % 5 == 0) {
            echo "El numero $num es multiplo de 5";
        } else {
            echo "El numero $num no es multiplo de 3 ni de 5";
        }
        
    }
}
?>
</form>
</fieldset>
</body>
</html>