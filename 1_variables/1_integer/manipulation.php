<?php


// there are many ways that integers can be manipulated without having to assign values to a new variable



// add
$add = 10;
$add = $add + 10; // 20
$add += 10; // 30

// minus
$minus = 10;
$minus = $minus - 2; // 8
$minus -= 2; // 6

// multiply
$multiply = 10;
$multiply = $multiply * 2; // 20
$multiply *= 10; // 200

// divide
$divide = 10;
$divide = $divide / 2; // 5
$divide /= 2; // 2.5

// power
$power = 10;
$power = $power ** 2; // 100
$power **= 2; // 1000

// remainder
$remainder = 10;
$remainder = $remainder % 6; // 4
$remainder %= 3; // 1


// increment a value (add 1 to it)
$inc = 10;
$inc = $inc + 1; // 11
$inc += 1; // 12
$inc++; // 13