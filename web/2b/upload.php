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
    }
        else {
        $fileNameNew = uniqid('', true). ".". $fileActualExt;
        $fileDestination = 'uploads/'.$fileNameNew;
        move_uploaded_file($fileTmpName, $fileDestination);
        echo 'Uppladdningen lyckades';
        echo "<a href=\"".$fileDestination."\"> Länk till bilden</a>";
        
    }

}

?>
