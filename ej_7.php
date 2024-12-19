<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Enfrentamiento entre Doraemon y Novita</title>
</head>

<body>
    <h2>Enfrentamiento entre Doraemon y Novita</h2>
    <form method="post">
        <label for="Personaje1">Personaje 1:</label>
        <select name="Personaje1" id="Personaje1" required>
            <option value="Doraemon">Doraemon</option>
            <option value="Novita">Novita</option>
        </select>
        <br><br>
    
        <form method="post">
        <label for="Personaje2">Personaje 2:</label>
        <select name="Personaje2" id="Personaje2" required>
            <option value="Doraemon">Doraemon</option>
            <option value="Novita">Novita</option>
        </select>
        <br><br>    
    
        <form method="post">
        <label for="Objeto1">Objeto 1:</label>
        <select name="Objeto1" id="Objeto1" required>
            <option value="Doraemon">Sartén (1d8)</option>
            <option value="Novita">Dorayaki (2d4)</option>
        </select>
        <br><br>      
    
        <form method="post">
        <label for="Objeto2">Objeto 2:</label>
        <select name="Objeto2" id="Objeto2" required>
            <option value="Doraemon">Sartén (1d8)</option>
            <option value="Novita">Dorayaki (2d4)</option>
        </select>
        <br><br>      

        <input type="submit" name="enfrentar" value="Enfrentar">
    </form>

    <?php
    if (isset($_POST['enfrentar'])) {
        $numero_rondas = (int)$_POST['rondas'];
        $victorias_doraemon = 0;
        $victorias_novita = 0;

        echo "<h3>Resultados de las rondas:</h3>";
        for ($ronda = 1; $ronda <= $numero_rondas; $ronda++) {
            $sarten_doraemon = rand(1, 8); 
            $dorayaki_novita = rand(1, 4) + rand(1, 4); 
            
            echo "<p>Ronda $ronda:<br>";
            echo "Doraemon (Sartén) sacó: $sarten_doraemon<br>";
            echo "Novita (Dorayaki) sacó: $dorayaki_novita<br>";

            if ($sarten_doraemon > $dorayaki_novita) {
                echo "Ganador de la ronda: Doraemon<br></p>";
                $victorias_doraemon++;
            } elseif ($dorayaki_novita > $sarten_doraemon) {
                echo "Ganador de la ronda: Novita<br></p>";
                $victorias_novita++;
            } else {
                echo "Empate en esta ronda<br></p>";
            }
        }

        echo "<h3>Resultado Final:</h3>";
        echo "Doraemon ganó $victorias_doraemon rondas.<br>";
        echo "Novita ganó $victorias_novita rondas.<br>";

        if ($victorias_doraemon > $victorias_novita) {
            echo "<h4>El ganador final es: Doraemon</h4>";
        } elseif ($victorias_novita > $victorias_doraemon) {
            echo "<h4>El ganador final es: Novita</h4>";
        } else {
            echo "<h4>El resultado final es un empate</h4>";
        }
    }
    ?>
</body>
</html>