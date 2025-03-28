<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actividad No.-22</title>
</head>
<body>
<fieldset>
<legend><h2>Vocal o no</h2></legend>
<form action="" method="post">
    <label for="letra">Escribe una letra</label>
    <input type="text" name="letra" id="letra" maxlength="1"> <br><br>
   <button type="submit">Continuar</button> <br><br>
   <button type="button" onclick="window.location.href='menu.php'">Regresar al menu</button> <br><br>
    <?php
    if ($_SERVER['REQUEST_METHOD']=="POST") {
        if (isset($_POST['letra'])) {
            $letra=$_POST['letra'];

            if ($letra=="a"||$letra=="A") {
                echo"$letra Es una vocal";
            }else if($letra=="e"||$letra=="E") {
                echo"$letra Es una vocal";
            }else if($letra=="i"||$letra=="I") {
                echo"$letra Es una vocal";
            }else if($letra=="o"||$letra=="O") {
                echo"$letra Es una vocal";
            }else if($letra=="u"||$letra=="U") {
                echo"$letra Es una vocal";
            }else{
                echo"$letra, No es una vocal";
            }
        }
    }
    ?>
</form>
</fieldset>
</body>
</html>