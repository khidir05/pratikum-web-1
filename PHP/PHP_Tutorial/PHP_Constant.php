PHP Constants
A constant is an identifier (name) for a simple value. The value cannot be changed during the script.

A valid constant name starts with a letter or underscore (no $ sign before the constant name).

Note: Unlike variables, constants are automatically global across the entire script.

Create a PHP Constant
To create a constant, use the define() function.

Syntax
define(name, value, case-insensitive);
<?
define("GREETING", "Welcome to W3Schools.com!");
echo GREETING;
//You can also create a constant by using the const keyword.
const MYCAR = "Volvo";
echo MYCAR;
//From PHP7, you can create an Array constant using the define() function.
define("cars", [
    "Alfa Romeo",
    "BMW",
    "Toyota"
  ]);
  echo cars[0];
// Constants are automatically global and can be used across the entire script.
define("GREETINGs", "Welcome to W3Schools.com!");

function myTest() {
  echo GREETINGs;
}

myTest();

//MORE IN MAGIC CONSTANT
/*PHP Predefined Constants
PHP has nine predefined constants that change value depending on where they are used, and therefor they are called "magic constants".

These magic constants are written with a double underscore at the start and the end, except for the ClassName::class constant.

Magic Constants
Here are the magic constants, with descriptions and examples:

Constant	Description	
__CLASS__	If used inside a class, the class name is returned.	
__DIR__	The directory of the file.	
__FILE__	The file name including the full path.	
__FUNCTION__	If inside a function, the function name is returned.	
__LINE__	The current line number.	
__METHOD__	If used inside a function that belongs to a class, both class and function name is returned.	
__NAMESPACE__	If used inside a namespace, the name of the namespace is returned.	
__TRAIT__	If used inside a trait, the trait name is returned.	
ClassName::class	Returns the name of the specified class and the name of the namespace, if any.*/
