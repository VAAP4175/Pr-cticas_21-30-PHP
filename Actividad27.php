<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actividad No.-27</title>
</head>
<body>
<fieldset>
<legend><h1>Ecuacion Simple</h1></legend>
<form action="" method="post">
    <label for="a">Ingresa un numero </label>
    <input type="number" name="a" id="a"> <br><br>
    <label for="b">Ingresa otro numero </label>
    <input type="number" name="b" id="b"> <br><br>
    <button type="submit">Continuar</button> <br><br>
    <button type="button" onclick="window.location.href='menu.php'">Regresar al menu</button> <br><br>
    <?php
    if ($_SERVER['REQUEST_METHOD']=="POST") {
        if (isset($_POST['a'])&&($_POST['a'])) {

         $a = $_POST['a']; 
         $b = $_POST['b']; 

         // Verificar que 'a' no sea igual a 0
         if ($a == 0) {
              echo "La ecuación no es de primer grado ya que el coeficiente 'a' es 0.";
         } else {
         // Calcular el valor de X
         $x = -$b / $a;
         // Mostrar el resultado
               echo "La solución de la ecuación {$a}X + ({$b}) = 0 es: X = $x";
            }


        }
    }
    ?>
</form>
</fieldset>
</body>
</html>