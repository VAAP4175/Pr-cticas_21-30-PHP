<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actividad No.-25</title>
</head>
<body>
<fieldset>
<legend><h1>3 notas mas altas y promedio</h1></legend>
<form action="" method="post">
    <label for="n1">Ingresa la primera nota </label>
    <input type="number" name="n1" id="n1"> <br><br>
    <label for="n2">Ingresa la segunda nota </label>
    <input type="number" name="n2" id="n2"> <br><br>
    <label for="n3">Ingresa la tercera nota </label>
    <input type="number" name="n3" id="n3"> <br><br>
    <label for="n4">Ingresa la cuarta nota </label>
    <input type="number" name="n4" id="n4"> <br><br>
    <button type="submit">Continuar</button> <br><br>
    <button type="button" onclick="window.location.href='menu.php'">Regresar al menu</button> <br><br>
    <?php
    if ($_SERVER['REQUEST_METHOD']=="POST") {
        if (isset($_POST['n1'])&&($_POST['n2'])&&($_POST['n3'])&&($_POST['n4'])) {

            // Array con los 4 números 
            $num = [$_POST['n1'],$_POST['n2'],$_POST['n3'],$_POST['n4']];
            //"rsort" Ordena los numeros de mayor a menor
            rsort($num);

            // "array_slice" Obtiene las tres notas más altas
            $tres = array_slice($num, 0, 3);
            
             echo "Las notas mas altas son: " . implode(", ", $tres);

             //"array_sum" suma los datos dentro del array
             $suma=array_sum($tres);
             $resultado=$suma/3;

             if($resultado>=11){
                echo"<br><br>El promedio es $resultado, Estas aprobado";
             }else if ($resultado<=11) {
                echo"<br><br>El promedio es $resultado, Estas reprobado";
             }

        }
}
    ?>
</form>
</fieldset>
</body>
</html>