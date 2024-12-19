<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>File Upload Form</title>
</head>
<body>

<form action="ej_6.php" method="post" enctype="multipart/form-data">
    <label for="archivo">Archivo:</label>
    <input type="file" name="file" id="file" required>
    <br><br>

    <label for="extension">Extensión:</label>
    <select name="extension" id="extension" required>
        <option value="jpg">jpg</option>
        <option value="png">png</option>
        <option value="pdf">pdf</option>
    </select>
    <br><br>

    <label for="tamañoMaximo">Tamaño MAX (bytes):</label>
    <input type="number" name="tamañoMaximo" id="tamañoMaximo" required>
    <br><br>

    <input type="submit" value="UPLOAD">
</form>

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $errores = [];

    $tamañoMaximo = isset($_POST['tamañoMaximo']) ? (int)$_POST['tamañoMaximo'] : 0;
    $extensionSeleccionada = $_POST['extension'];

    $archivo = $_FILES['file'];
    $nombreArchivo = $archivo['name'];
    $tamañoArchivo = $archivo['size'];
    $extensionArchivo = strtolower(pathinfo($nombreArchivo, PATHINFO_EXTENSION));
    $rutaTemporal = $archivo['tmp_name'];

    if ($tamañoArchivo > $tamañoMaximo) {
        $errores[] = "El tamaño del archivo supera el máximo permitido de $tamañoMaximo bytes.";
    }

    $extensionesPermitidas = ['jpg', 'png', 'pdf'];
    if (!in_array($extensionArchivo, $extensionesPermitidas)) {
        $errores[] = "Extensión no permitida. Solo se aceptan: jpg, png, pdf.";
    } elseif ($extensionArchivo !== $extensionSeleccionada) {
        $errores[] = "La extensión del archivo no coincide con la extensión seleccionada.";
    }

    if (empty($errores)) {
        $directorioSubida = 'upload/';
        if (!is_dir($directorioSubida)) {
            mkdir($directorioSubida, 0777, true);
        }

        $rutaDestino = $directorioSubida . basename($nombreArchivo);
        if (move_uploaded_file($rutaTemporal, $rutaDestino)) {
            echo "<p>¡Archivo subido exitosamente!</p>";
        } else {
            echo "<p>Error al subir el archivo.</p>";
        }
    } else {
        foreach ($errores as $error) {
            echo "<p style='color: red;'>$error</p>";
        }
    }
}
?>

</body>
</html>
