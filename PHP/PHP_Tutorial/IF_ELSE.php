
Here are the PHP comparison operators to use in if statements:

Operator	Name	Result	Try it
==	Equal	Returns true if the values are equal	
===	Identical	Returns true if the values and data types are identical	
!=	Not equal	Returns true if the values are not equal	
<>	Not equal	Returns true if the values are not equal	
!==	Not identical	Returns true if the values or data types are not identical	
>	Greater than	Returns true if the first value is greater than the second value	
<	Less than	Returns true if the first value is less than the second value	
>=	Greater than or equal to	Returns true if the first value is greater than, or equal to, the second value	
<=	Less than or equal to	Returns true if the first value is less than, or equal to, the second value	
and	And	True if both conditions are true	
&&	And	True if both conditions are true	
or	Or	True if either condition is true	
||	Or	True if either condition is true	
xor	Xor	True if either condition is true, but not both	
!	Not	True if condition is not true
<?
$t = 14;

if ($t < 20) {
  echo "Have a good day!";
}
//COmparison Operator
$t = 14;

if ($t == 14) {
  echo "Have a good day!";
}
//Logical Opreator
$a = 200;
$b = 33;
$c = 500;

if ($a > $b && $a < $c ) {
  echo "Both conditions are true";
}
//IF ELSE Statement
$t = date("H");

if ($t < "10") {
  echo "Have a good morning!";
} elseif ($t < "20") {
  echo "Have a good day!";
} else {
  echo "Have a good night!";
}
//Shorthand if
$a = 13;

$b = $a < 10 ? "Hello" : "Good Bye";

echo $b;
//Nested If
$a = 13;

if ($a > 10) {
  echo "Above 10";
  if ($a > 20) {
    echo " and also above 20";
  } else {
    echo " but not above 20";
  }
}