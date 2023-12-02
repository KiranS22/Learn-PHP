<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Learn PHP - String Methods</title>
</head>
<body>
<?php
//  strlen() - returnsd the length of a string (including spaces)
echo strlen("Hello world!") . "<br>"; // outputs 12

// str_word_count() - Count Words in a String

echo str_word_count("hello world")  . "<br>";//prints 2

// strrev() - Reverse a String
echo strrev("hello") . "<br>";

// strpos() function searches for a specific text within a string. If a match is found, the function returns the character position of the first match. If no match is found, it will return FALSE.

echo strpos("Hello world!", "world") . "<br>"; // outputs 6

// str_replace() - Replace Text Within a String

echo str_replace("Hello", "Goodbye", "Hello World") . "<br>"; //First Parameter is the word that you want to replace, second the word you want to replace it woth. Third the string in which you want the words to be replaced
?>
</body>
</html>
