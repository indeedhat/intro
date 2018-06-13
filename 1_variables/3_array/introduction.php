<?php


// Arrays are variables that hold multiple values

// arrays are assigned with square brackets []
$array = [];

// you can define an empty array like shown above or you can define an array with values like below
$array2 = [
  "this array",
  "has some",
  "values",
];

// once an array has been defined you can access its 'elements' as follows
$array2[0]; // this array
$array2[2]; // value

// NOTE: array elements start form 0 so to get the first element you call element

// new elements can be added to the end of the array
$array2[] = "here are";
$array2[] = "more values";

// elements can also be replaced as follows
$array2[0] = "This updated array";



// elements can be manipulated like any other variable
$array3 = [
  "Hello",
  "Goodbye",
];

$array3[0] .= ", World!"; // Hello, World!




// array elements are not limited to a single type of variable they can be of any type
$array4 = [
  "string element",
  103,
  23.3,
  "another string",
];

$array4[0]; // string element
$array4[3]; // 23.3
