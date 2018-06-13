<?php


// boolean's are very simple they only have two values (true and false)

$true = true;
$false = false;

// booleans are case insensitive so all of the following are valid

$bool  = true;
$bool1 = True;
$bool2 = TRUE;
$bool3 = TruE;
$bool4 = false;
$bool5 = False;
$bool6 = faLSE;
$bool7 = FaLsE;

// in php all other variable types can be considered to be booleans (sort of

// STRINGS
// an empty string can be considered to be false
$falseString = ""; // same as false

// a not empty string can be considered to be true
$trueString = "Hello, World!"; // same as true



// INTEGER/FLOAT
// 0 is false
$falseInt = 0; // same as false
$falseFloat = 0.0; // same as false

// anything else is true
$trueInt = 1;
$trueFloat = 3.14;

// negetive values are also considered to be true
$trueNegative = -19; // same as true




// ARRAYS
// empty arrays are the same as false
$falseArray = []; // same as false

// none empty arrays are the same as true
$trueArray = [1]; // same as true

// even if the contents of an array are falsey as long as the array has an element it will still be truthful
// all of the below arrays are the same as true
$truArray1 = [0];
$trueArray2 = [""];
$truArray3 = [
  []
];