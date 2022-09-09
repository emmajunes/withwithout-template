<!DOCTYPE html>
<html>
<body>

<form method="post" enctype="multipart/form-data">
  Välj fil att ladda upp:
  <input type="file" name="file">
  <input type="submit" value="Ladda upp fil" name="submit">
</form>

</body>
</html>


<?php

if (isset($_POST['submit'])){
    $file = $_FILES['file'];

    $fileName = $_FILES['file']['name'];
    $fileTmpName = $_FILES['file']['tmp_name'];
    $fileSize = $_FILES['file']['size'];
    $fileError = $_FILES['file']['error'];
    $fileType = $_FILES['file']['type'];

    $fileExt = explode('.', $fileName);
    $fileActualExt = strtolower(end($fileExt));

    $allowed = array ('jpg','jpeg','png');

    if (!in_array($fileActualExt, $allowed)){
        echo 'Endast jpg, jpeg eller png kan laddas upp';
    } else if ($fileSize >700000) {
        echo 'Filen är för stor';
    } else if ($fileError > 0){
        echo 'Uppladdningen misslyckades';
    } else {
        echo 'Uppladdningen lyckades';   
    }

}

?>