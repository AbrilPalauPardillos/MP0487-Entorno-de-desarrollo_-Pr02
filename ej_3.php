<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        var_dump(value:$_POST);
        $numero1 = htmlspecialchars(string: $_POST['numero1']);
        $numero2 =htmlspecialchars(string:$_POST['numero2']);

        echo "numero 1: " . $numero1 . "<br> numero 2: " . $numero2;
    }
?>
   
   <h2>Introduce numeros entre 0 a 20:</h2>
    <form method = "post" action="ej_3.php">
        <lebel for="numero1">Numero 1:</lebel>
        <input type="text" id="numero1" name="numero1" required><br><br>

        <lebel for="numero2">Numero 2:</lebel>
        <input type="text" id="numero2" name="numero2" required><br><br>

        <input type="submit" value="Enviar">
    </form>
    
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        var_dump(value:$_POST);
        for ($i=$numero1; $i <= $numero2; $i++) { 
            echo $i . ', ';
        }
    }
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        var_dump(value:$_POST);
        while ($number2 >= $numero1) {
            echo $number2 . ', '; 
        $number2--;
        } '<br>';
    }
    ?>
</body>
</html>