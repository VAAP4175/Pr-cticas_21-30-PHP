<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DActividad No.-21</title>
</head>
<body>
<main>
<fieldset>
    <legend><h2>Numero mayor</h2></legend>
    <form action="" method="post">
        <label for="num1">Primer Numero</label>
        <input type="number" name="num1" id="num1"> <br><br>
        <label for="num2">Primer Numero</label>
        <input type="number" name="num2" id="num2"> <br><br>
        <label for="num3">Primer Numero</label>
        <input type="number" name="num3" id="num3"> <br><br>
        <button type="submit">Calcular</button> <br><br>
        <button type="button" onclick="window.location.href='menu.php'">Regresar al menu</button> <br><br>
        <?php
        if ($_SERVER['REQUEST_METHOD']=="POST") {
            if (isset($_POST['num1'])&&($_POST['num2'])&&($_POST['num3'])) {
            $num1=$_POST['num1'];
            $num2=$_POST['num2'];
            $num3=$_POST['num3'];

            if ($num1>$num2&&$num1>$num3) {
                echo"El numero $num1 es mayor";
            }else if($num2>$num1&&$num2>$num3){
                echo"EL numero $num2 Es mayor";
            }else{
                echo"El numero $num3 es mayor";
            }
            }
        }
        ?>
    </form>
</fieldset>
</main>
</body>
</html>