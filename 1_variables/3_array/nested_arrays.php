<?php


// as already stated array elements can be of any type, even other arrays
// having an array inside of an array is called nesting

// defining a nested array
$array = [
  [1, 2, 3],
];

$array[] = [4, 5, 6];

// when accesing an element of a nested array you would use the following syntax
$array[0][1]; // 2
$array[1]; // [4, 5, 6]

// just as with normal arrays you can manipulate the values in the arrays or even add more
$array[1][] = 7; // [[1, 2, 3], [4, 5, 6, 7]]

// there is no hard limit to how deep the nesting can go and
$array2 = [
  [
    [1, 2, 3],
    [4, 5, 6]
  ],
  [
    [
      7,
      8,
      9,
      [10, 11, 12]
    ]
  ]
];

// to access elements nested deeper you just chan together more square brackets
$array2[0][0][0]; // 1
$array2[0][1][0]; // 4
$array2[1][0][3][1]; // 10

// here is an example of the array above showing how each element would be accesses

$array3 = [
  [ // [0]
    [ // [0][0]
      1, // [0][0][0]
      2, // [0][0][1]
      3, // [0][0][2]
    ],
    [ // [0][1]
      4, // [0][1][0]
      5, // [0][1][1]
      6, // [0][1][2]
    ]
  ],
  [ // [1]
    [ // [1][0]
      7, // [1][0][0]
      8, // [1][0][1]
      9, // [1][0][2]
      [ // [1][0][3]
        10, // [1][0][3][0]
        11, // [1][0][3][1]
        12, // [1][0][3][2]
      ]
    ]
  ]
];