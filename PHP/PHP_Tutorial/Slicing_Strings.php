<?
// Slicing
// You can return a range of characters by using the substr() function.
// Specify the start index and the number of characters you want to return.
$x = "Hello World!";
echo substr($x, 6, 5);
//Slice From the End
// Use negative indexes to start the slice from the end of the string:
$x = "Hello World!";
echo substr($x, -5, 3);
//Negative Length
// Use negative length to specify how many characters to omit, starting from the end of the string:
$x = "Hi, how are you?"; 
echo substr($x, 5, -3);
