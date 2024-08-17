<?php

class Car {
    public $color;
    public $model;
    public function __construct($color, $model){
        $this->color = $color;
        $this->model = $model;
    }
    public function message(){
        return "My Car is a \t". $this->color." ". $this->model."!\n";
    }
    
    
}
$myCar = new Car("White", "RX 350");
// echo $myCar->message() . "\n";
// echo $myCar->model;
// $myCar = (array) $myCar;
// var_dump($myCar)
?>
