<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actividad No.-28</title>
</head>
<body>
<fieldset>
<legend><h1>Mayor de edad o no</h1></legend>
<form action="" method="post">
    <label for="edad">Ingresa tu edad</label>
    <input type="number" name="edad" id="edad"> <br><br>
    <button type="submit">Continuar</button> <br><br>
    <button type="button" onclick="window.location.href='menu.php'">Regresar al menu</button> <br><br>
    <?php
    if ($_SERVER['REQUEST_METHOD']=="POST") {
        if (isset($_POST['edad'])) {
            $edad=$_POST['edad'];

            if ($edad<18) {
                echo"Eres menor de edad";
            }else if ($edad>=18) {
                echo"Eres mayor de edad";
            }else{
                echo"Error";
            }
        }
    }
    ?>
</form>
</fieldset>
</body>
</html>