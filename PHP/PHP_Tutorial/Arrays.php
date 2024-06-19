<?
//Indexed Array
$cars = array("Volvo", "BMW", "Toyota");
var_dump($cars);
echo $cars[0];
$cars[1] = "Ford";//chsnge array
var_dump($cars);
foreach ($cars as $x) {
    echo "$x <br>";
  }//Loop Array
//Assosiative Array
$car = array("brand"=>"Ford", "model"=>"Mustang", "year"=>1964);
var_dump($car);
echo $car["model"];
$car = array("brand"=>"Ford", "model"=>"Mustang", "year"=>1964);

foreach ($car as $x => $y) {
  echo "$x: $y <br>";
}//Loop Array