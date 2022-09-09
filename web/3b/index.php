
<html>
<head>
<style>
body {
 <?php
if (isset($_GET['color'])){

    $bgColor = $_GET['color'];
    if (preg_match('/^[a-f0-9]{6}$/i', $bgColor)){

      echo "background-color: #$bgColor";  
    }
    
}

?>   
}

</style>
</head>

<body>

<?php
foreach($_GET as $key => $value){
    echo $key . " : " . $value . "<br />\r\n";
  }

?>
</body>
</html>