<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        .par { color: orange; }
        .impar { color: green; }
    </style>
</head>
<body>
    
<h2>Datos Personales</h2>
    <form method="post" action="ej_5.php">
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" required><br><br>

        <label for="numero1">Numero 1:</label>
        <input type="text" id="numero1" name="numero1" required><br><br>

        <label for="numero2">Numero 2:</label>
        <input type="text" id="numero2" name="numero2" required><br><br>

        <input type="submit" name="enviar" value="Enviar">
    </form>

    <?php
        if (isset($_POST['enviar'])) {

            // datos formulario
            $nombre = htmlspecialchars($_POST['nombre']);
            $numero1 = (int)$_POST['numero1'];
            $numero2 = (int)$_POST['numero2'];

            // a
            echo "Welcome" . $nombre . "!</h3>";

            // b
            echo "<p>$numero1 is " . ($numero1 % 2 === 0 ? "par" : "impar") . ".</p>";

            // c
            $inicio = min($numero1, $numero2);
            $fin = max($numero1, $numero2);

            echo "<div>";
            for ($i = $inicio; $i <= $fin; $i++) { 
                // d
                $classe = ($i % 2 === 0) ? "par" : "impar";
                echo "<div class='$classe'>$i</div>";
            }
            echo "</div>";
        }
    ?>
</body>
</html>
