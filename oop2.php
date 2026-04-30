<?php

class car{
    public $brand;
    public $model;
    public $speed;


    function cars($brand,$model,$speed){
        echo "Brand : " . $this->brand = $brand . "<br>";
        echo "Model : " . $this->model = $model  . "<br>";
        echo "Speed : " . ($this->speed = $speed ) . "<br> <br>";
    }

    function startEngine(){
        echo "Engine Started <br> <br>";
    }

    function increaseSpeed($increase){
       echo "Speed increased to " . ($this->speed += $increase) . "<br> <br>";
    }

    function brake($decrease){
       echo "Speed reduced to " . ($this->speed -= $decrease) . "<br> <br>";
    } 

    function currentSpeed(){
        echo "Current Speed " . ($this->speed);
    }
}

$car1 = new car();
$car1->  cars("Toyota","Corolla", 00);
$car1-> startEngine();
$car1-> increaseSpeed(40);
$car1-> increaseSpeed(20);
$car1-> brake(25);
$car1-> currentSpeed();



?>