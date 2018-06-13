<?php

// strings are 'strings' of characters (basically text)
// strings are devined by being wrapped in quotation marks
$string1 = "this is a string";
$string2 = 'this is also a string';

// both the opening and closing quote must match so the following line would not be valid
// $string3 = "this would break';


// concatenation
$helloWorld = "Hello,";
$helloWorld .= " World!"; // Hello, World!

$hello = "Hello,";
$helloWorld = $hello . " World!";

// string formatting
$hello = "Hello,";
$helloWorld = "{$hello} World!";
// Note: this will only work with double quotes " with single quotes ' the whole string would be treated as plain text

