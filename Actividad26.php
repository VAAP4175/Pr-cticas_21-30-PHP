<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actividad No.-26</title>
</head>
<body>
<fieldset>
<legend><h1>Numeros de forma acendente</h1></legend>
<form action="" method="post">
    <label for="num1">Ingresa el primer numero </label>
    <input type="number" name="num1" id="num1"> <br><br>
    <label for="num2">Ingresa el segundo numero </label>
    <input type="number" name="num2" id="num2"> <br><br>
    <label for="num3">Ingresa el tercer numero </label>
    <input type="number" name="num3" id="num3"> <br><br>
    <button type="submit">Continuar</button> <br><br>
    <button type="button" onclick="window.location.href='menu.php'">Regresar al menu</button> <br><br>
<?php
    if ($_SERVER['REQUEST_METHOD']=="POST") {
        if (isset($_POST['num1'])&&($_POST['num2'])&&($_POST['num3'])) {
            $n1=$_POST['num1'];
            $n2=$_POST['num2'];
            $n3=$_POST['num3'];

            if ($n1<$n2&&$n1<$n3) {
                $menor=$n1;
            }else if($n2<$n1&&$n2<$n3){
                $menor=$n2;
            }else{
                $menor=$n3;
            }
            if ($n1>$n2&&$n1>$n3) {
                $mayor=$n1;
            }else if($n2>$n1&&$n2>$n3){
                $mayor=$n2;
            }else{
                $mayor=$n3;
            }
            $medio=($n1+$n2+$n3)-($mayor+$menor);
            echo"El numero mayor es: $mayor<br> El numero menor es: $menor<br>El numero intermedio es $medio";
        }
    }
?>
</form>
</fieldset>
</body>
</html>