<?
// PHP pi() Function
// The pi() function returns the value of PI:
echo(pi());
// PHP min() and max() Functions
// The min() and max() functions can be used to find the lowest or highest value in a list of arguments:
echo(min(0, 150, 30, 20, -8, -200));
echo(max(0, 150, 30, 20, -8, -200));
// PHP abs() Function
// The abs() function returns the absolute (positive) value of a number:
echo(abs(-6.7));
// PHP sqrt() Function
// The sqrt() function returns the square root of a number:
echo(sqrt(64));
// PHP round() Function
// The round() function rounds a floating-point number to its nearest integer:
echo(round(0.60));
echo(round(4.49));
// Random Numbers
// The rand() function generates a random number:
// To get more control over the random number, you can add the optional min and max parameters to specify the lowest integer and the highest integer to be returned.
// For example, if you want a random integer between 10 and 100 (inclusive), use rand(10, 100):
echo(rand(10, 100));