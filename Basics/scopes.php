<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=s, initial-scale=1.0">
  <title>Learn PHP - scopes</title>
</head>
<body>
  <?php
  /* In PHP, variables can be declared anywhere in the script.

The scope of a variable is the part of the script where the variable can be referenced/used.

PHP has three different variable scopes:

local - variables declaired within a function's body (can only be accessed within that function)
global - variables that are declaired outside of a function (can only be accessed outside a function)
static -  variable is defined within a specific block of code */

// Global Scope Example

$x = 5; // global scope

function myTest() {
  // using x inside this function will generate an error
  // echo "<p>Variable x inside function is: $x</p>";
}
myTest();

// echo "<p>Variable x outside function is: $x</p>";


// Local Scope example

function myTest2() {
  $x = 5; // local scope
  echo "<p>Variable x inside function is: $x</p>";
}
myTest2();

// using x outside the function will generate an error
// echo "<p>Variable x outside function is: $x</p>";


// Global Keyword
/* The global keyword is used to access a global variable from within a function
Example
*/

$x = 5;
$y = 10;

function myTest3() {
  global $x, $y;
  $y = $x + $y;
}

myTest3();
// echo $y; // outputs 15

/* PHP also stores all global variables in an array called $GLOBALS[index]. The index holds the name of the variable. This array is also accessible from within functions and can be used to update global variables directly. */

$x = 5;
$y = 10;

function myTest4() {
  $GLOBALS['y'] = $GLOBALS['x'] + $GLOBALS['y'];
}

myTest4();
// echo $y; // outputs 15
// Static Keyword

/* Normally, when a function is completed/executed, all of its variables are deleted. However, sometimes we want a local variable NOT to be deleted. We need it for a further job.

To do this, use the static keyword when you first declare the variable: */

function myTest5() {
  static $x = 0;
  echo"x = ". $x . "<br>";
  $x++;
}
myTest5(); //print 0
 myTest5();// prints 1
  myTest5(); // prints 2

  // This is made possible because the static keyword ensures that the value of X is not reset each time  the function is envoked 



  ?>
</body>
</html>
