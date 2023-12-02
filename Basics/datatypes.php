<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Learn PHP - data types overview </title>
</head>
<body>
<?php
/* Variables can store data of different types, and different data types can do different things.

PHP supports the following data types:

String =  any text inside quotes. You can use single or double quotes:

Integer - An integer data type is a non-decimal number between -2,147,483,648 and 2,147,483,647.

Rules for integers:

An integer must have at least one digit
An integer must not have a decimal point
An integer can be either positive or negative
Integers can be specified in: decimal (base 10), hexadecimal (base 16), octal (base 8), or binary (base 2) notation


Float (floating point numbers - also called double) - A float (floating point number) is a number with a decimal point or a number in exponential form.


Boolean - TRUE or FALSE.
Array - a data structure that allows for multipul values to be stored in one place
Object - an instance of a class  that stores information in key value pairs

NULL - Null is a special data type which can have only one value: NULL.

A variable of data type NULL is a variable that has no value assigned to it.

If a variable is created without a value, it is automatically assigned a value of NULL
Resource
 */

// String Example
$x = "Hello world!";
$y = 'Hello world!';

echo $x;
echo "<br>";
echo $y;



?>
</body>
</html>
