<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Learn PHP - Echo and print</title>
</head>
<body>
  <?php
/* Print and echo are 2 ways of displaying outrput from PHP code

The differences are small: echo has no return value while print has a return value of 1 so it can be used in expressions. echo can take multiple parameters (although such usage is rare) while print can take one argument. echo is marginally faster than print.

The echo statement can be used with or without parentheses: echo or echo()

*/
 echo "<h2> Using Echo </h2>";

echo "<h2>PHP is Fun!</h2>";
echo "Hello world!<br>";
echo "I'm about to learn PHP!<br>";
echo "This ", "string ", "was ", "made ", "with multiple parameters.";

/* Display Variables

The following example shows how to output text and variables with the echo statement */

$txt1 = "Learn PHP";
$txt2 = "W3Schools.com";
$x = 5;
$y = 4;

echo "<h2>" . $txt1 . "</h2>";
echo "Study PHP at " . $txt2 . "<br>";
echo $x + $y . "<br> <br>";


echo "<hr>" . "<br><br>";
//----------------------------------------------------------------------------------------- 
print "<h2> Using Print </h2>";

print "<h2>PHP is Fun!</h2>";
print "Hello world!<br>";
print "I'm about to learn PHP!";


  ?>
</body>
</html>
