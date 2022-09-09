<!doctype html> 
<html>

<head></head>
<body>
<?php

class Vehicles{

    var $vehicle;
    
    function Drive(){
        echo 'Fordonet som kör';
    }
    function Brake (){
        echo 'Fordonet som bromsar';
    }

}

class Car extends Vehicles{

var $make;
var $color;
var $regNo;

function __construct($aMake,$aColor,$aRegNo){
$this->make = $aMake;
$this->color = $aColor;
$this->regNo = $aRegNo;
}

function Drive(){
    parent::Drive();
    echo ' är en bil';
}

function Brake (){
    parent::Brake();
    echo ' är en bil';
}

function Fuelup (){
    echo 'Bilen som tankar är en ' . $this->make . ' som är ' . $this->color . 'med regnr: ' . $this->regNo;
}
}

$car1 = new Car("Volvo","blå","UNJ313");
$car2 = new Car("Ford","röd","LDF456");

echo $car1->Drive() . "<br>";  
echo $car1->Brake() . "<br>";
echo $car1->Fuelup() . "<br>";
echo $car2->Fuelup() . "<br>";

class Bicycle extends Vehicles{

    var $make;
    var $color;
    
    function __construct($aMake,$aColor){
    $this->make = $aMake;
    $this->color = $aColor;
    }
    
    function Drive(){
        parent::Drive();
        echo ' är en cykel';
    }

    function Brake (){
        parent::Brake();
        echo ' är en cykel';
    }
    
    function Bell(){
        echo 'Cykeln som plingar är en ' . $this->make . ' som är ' . $this->color;
    }

}
    
    $bicycle1 = new Bicycle("Crescent","grön");
    $bicycle2 = new Bicycle("Monark","röd");
    
    echo $bicycle1->Drive() . "<br>"; 
    echo $bicycle1->Brake() . "<br>";
    echo $bicycle1->Bell() . "<br>";
    echo $bicycle2->Bell() . "<br>"; 
    

class Tractor extends Vehicles{

var $make;
var $color;

function __construct($aMake,$aColor){
$this->make = $aMake;
$this->color = $aColor;
}

function Drive(){
    parent::Drive();
    echo ' är en traktor';
}

function Brake (){
    parent::Brake();
    echo ' är en traktor';
}


function Shovel(){
    echo 'Traktorn som skottar är en ' . $this->make . ' som är ' . $this->color;
}


}

$tractor1 = new Tractor("John Deere","gul");
$tractor2 = new Tractor("Fendt","grön");

echo $tractor1->Drive() . "<br>"; 
echo $tractor1->Brake() . "<br>";
echo $tractor1->Shovel() . "<br>";
echo $tractor2->Shovel() . "<br>";


?>

</body>
</html>