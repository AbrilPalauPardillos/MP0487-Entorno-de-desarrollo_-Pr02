<!DOCTYPE html>
<html lang="en">
<head>
</head>
<body>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {  
        echo __LINE__;
    $target_dir = "upload/";
    $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    


    
    // subir fichero
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
      } else {
        echo "Sorry, there was an error uploading your file.";
      }    
    }
    ?>

    <form action="ej_4.php" method="post" enctype="multipart/form-data">
    Select image to upload:<br>
    <input type="file" name="fileToUpload" id="fileToUpload"> <br><br>
    <input type="submit" value="Upload Image" name="submit"><br>
    </form>


</body>
</html>