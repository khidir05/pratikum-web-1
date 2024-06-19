<?
//UPPERCASE
$x = "Hello World!";
echo strtoupper($x);
//LOWERCASE
$x = "Hello World!";
echo strtolower($x);
//REPLACE STRING
//The PHP str_replace() function replaces some characters with some other characters in a string.
$x = "Hello World!";
echo str_replace("World", "Dolly", $x);
//REVERSE STRING
$x = "Hello World!";
echo strrev($x);
//REMOVE WHITESPACE
$x = "Hello World!";
echo strrev($x);
// Convert String into Array
// The PHP explode() function splits a string into an array.
// The first parameter of the explode() function represents the "separator". The "separator" specifies where to split the string.
$x = "Hello World!";
$y = explode(" ", $x);
//Use the print_r() function to display the result:
print_r($y);
/*
Result:
Array ( [0] => Hello [1] => World! )
*/