

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



<?php
    # Check if name and email fileds are empty
    if(empty($_POST['name']) && empty($_POST['email'])){
        # If the fields are empty, display a message to the user
        echo "Fyll i formuläret";
    # Process the form data if the input fields are not empty
    }else{
        $name= $_POST['name'];
        $email= $_POST['email'];
        $phonenumber= $_POST['phonenumber'];
        echo ('Välkommen:     '. $name. '<br/>');
        echo ('Din angivna mailadress:  '   . $email. '<br/>');
        echo ('Ditt angivna telefonnummer:  '   . $phonenumber. '<br/>');
    }
?>

</body>

</html>



