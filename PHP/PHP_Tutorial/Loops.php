<?
//Brake Statement
$i = 1;
while ($i < 6) {
  echo $i;
  $i++;
}
//COntinue Statement
$i = 0;
while ($i < 6) {
  $i++;
  if ($i == 3) continue;
  echo $i;
}
//Alternative Syntax
$i = 1;
while ($i < 6):
  echo $i;
  $i++;
endwhile;
//Do While Loop
$i = 1;

do {
  echo $i;
  $i++;
} while ($i < 6);
//Break Statement
$i = 1;

do {
  if ($i == 3) break;
  echo $i;
  $i++;
} while ($i < 6);
//Continue Statement
$i = 0;

do {
  $i++;
  if ($i == 3) continue;
  echo $i;
} while ($i < 6);
//for each loops
$colors = array("red", "green", "blue", "yellow");

foreach ($colors as $x) {
  echo "$x <br>";
}
//for each loop on object
class Car {
    public $color;
    public $model;
    public function __construct($color, $model) {
      $this->color = $color;
      $this->model = $model;
    }
  }
  
  $myCar = new Car("red", "Volvo");
  
  foreach ($myCar as $x => $y) {
    echo "$x: $y <br>";
  }
//Break in foreach loop
// Break in For Each Loop
// The break statement can be used to jump out of a foreach loop.
$colors = array("red", "green", "blue", "yellow");

foreach ($colors as $x) {
  if ($x == "blue") continue;
  echo "$x <br>";
}