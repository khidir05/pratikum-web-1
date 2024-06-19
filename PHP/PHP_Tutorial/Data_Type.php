<?
//string
$x = "Hello world!";
var_dump($x);
//integer
$x = 5985;
var_dump($x);
//Float
$x = 10.365;
var_dump($x);
//Boolran
$x = true;
var_dump($x);
//Array
$cars = array("Volvo","BMW","Toyota");
var_dump($cars);
//PHP Object
class Car {
    public $color;
    public $model;
    public function __construct($color, $model) {
      $this->color = $color;
      $this->model = $model;
    }
    public function message() {
      return "My car is a " . $this->color . " " . $this->model . "!";
    }
  }
  
  $myCar = new Car("red", "Volvo");
  var_dump($myCar);
  //NULL Value
  $x = "Hello world!";
$x = null;
var_dump($x);
//Change data type
$x = 5;
var_dump($x);

$x = "Hello";
var_dump($x);