<!doctype html> 
<html>

<head></head>
<body>
<?php

class Car{

var $make;
var $color;
var $regNo;

function __construct($aMake,$aColor,$aRegNo){
$this->make = $aMake;
$this->color = $aColor;
$this->regNo = $aRegNo;
}

function Drive(){
    echo 'Bilen som kör är en ' . $this->make . ' som är ' . $this->color . ' med regnr: ' . $this->regNo;
}
function Brake (){
    echo 'Bilen bromsar';
}
function Fuelup (){
    echo 'Bilen tankar';
}
}

$car1 = new Car("Volvo","blå","UNJ313");
$car2 = new Car("Ford","röd","LDF456");

echo $car1->Drive() . "<br>"; 
echo $car2->Drive() . "<br>"; 
echo $car1->Brake() . "<br>";
echo $car1->Fuelup();

?>


</body>
</html>