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
        $name = htmlspecialchars(string: $_POST['name']);
        $surname =htmlspecialchars(string:$_POST['surname']);

        echo "name: " . $name . "<br>surname: " . $surname;
    }
    ?>
    <h2>Introduce tu nombre y apellido</h2>
    <form method = "post" action="ej_1.php">
        <lebel for="nombre">Nombre:</lebel>
        <input type="text" id="nombre" name="name" required><br><br>

        <lebel for="apellido">Apellido:</lebel>
        <input type="text" id="apellido" name="surname" required><br><br>

        <input type="submit" value="Enviar">
    </form>
</body>
</html>