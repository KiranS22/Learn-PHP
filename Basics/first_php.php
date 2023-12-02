<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Learn PHP - basic syntax</title>
</head>
<body>
  <h1>My first PHP Application </h1>
  <?php
  echo "Hello World!";
  // All of the bellow echo statments are all vaid syntax because keywords and user defined functions are not case-sensitive
  ECHO "Hello World!<br>";
  echo "Hello World!<br>";
  EcHo "Hello World!<br>";

  /*Names of variables, however, are case sensitive. In the example bellow, on;y the first line will print the value of $color, Tghis is because it is wriytten using the correct case  */

  $color = "red";
echo "My car is " . $color . "<br>";
echo "My house is " . $COLOR . "<br>"; // will through an  error
echo "My boat is " . $coLOR . "<br>"; // will through an error

// At the end of eacxh like of code, a semi-colon mudt be sdded st the end. This is so that the compiler knows that, it is reading new syntax

// Comments
/* Comments are used to indecate lines that are not executed within the program:

Comments can be used to:

Let others understand your code
Remind yourself of what you did - Most programmers have experienced coming back to their own work a year or two later and having to re-figure out what they did. Comments can remind you of what you were thinking when you wrote the code
*/

// Variables
/*  varibles are used to store referances to informstion/lines of code

To declaire a bariable in php, the doller sign ($) is used. It is then followed by the desired variabl;e name.

A variable can have a short name (like x and y) or a more descriptive name (age, carname, total_volume).

Rules for PHP variables:

A variable starts with the $ sign, followed by the name of the variable
A variable name must start with a letter or the underscore character
A variable name cannot start with a number
A variable name can only contain alpha-numeric characters and underscores (A-z, 0-9, and _ )
Variable names are case-sensitive ($age and $AGE are two different variables)

Echo can be used to display the value of a varible in the browser
*/

/* Typing in PHP
PHP is a loosely typed language, in that PHP assumes the data-type of variables based on their value
PHP automatically associates a data type to the variable, depending on its value. Since the data types are not set in a strict sense, you can do things like adding a string to an integer without causing an error.

In PHP 7, type declarations were added. This gives an option to specify the data type expected when declaring a function, and by enabling the strict requirement, it will throw a "Fatal Error" on a type mismatch.
*/
  ?>
</body>
</html>

>
