<html lang="en">
<head>
    <title>Anmälan</title>
</head>

<body>

    <h1>Anmälan</h1>
    <form method="POST" action="index.php">
        Namn: <input type="text" name="name"><br><br/>
        Mail: <input type="text" name="email"><br/><br/>
        Telefon: <input type="text" name="phonenumber"><br><br/>
        <input type="submit" value="Klar" >

</form>

</body>

</html>


<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
$nameErr = $emailErr = $phoneErr = "";
$name = $email = $phonenumber = "";
$name = $_POST["name"];
$email = $_POST["email"];
$phonenumber = $_POST["phonenumber"];
  if (empty($name)) {
    echo 'Ange ditt namn' . '<br/>';
  }
  else echo 'Välkommen:     '. $name. '<br/>';
  
  if (!($email = test_inputEmail($email))) {
    echo ('Ange en korrekt mailadress'.'<br/>');
  }
  else echo ('Din angivna mailadress:  '   . $email. '<br/>');
  if (empty($phonenumber)) {
    echo 'Ange ditt telefonnummer';
  }
  else echo ('Ditt angivna telefonnummer:  '   . $phonenumber. '<br/>');
 
}


function test_inputEmail($email)
{
 
  if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    return false;
  }

  return $email;

}


?>





