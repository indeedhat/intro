<?php


// booleans are when you really get down to it how decisions are made, they are the cornerstone of logic
// boolean operators are used to manipulate variables

// NOT operator (this will reverse the boolean) !
$not = !true; // false
$not1 = !false; // true



// COMPARISON operator (two values are the same) ==
10 == 10; // true
10 == 3; // false

"hello" == "hello"; // true
"hello" == "world"; // false

// the comparison operator does not care about the type of variable
"10" == 10; // true
10 == true; // true
"" == true; // false
9 == "8"; // false

// there is also an equivalent for checking if values are not the same !=
3 != 5; // true
4 != 4; // false

"hello" != "hello"; // false
"hello" != 3; // true

true != ""; // true



// EQUALITY operator this is basically the same as the comparison operator except it cares about type ===
10 === 10; // true
10 === "10"; // false
10 === true; // false

// there is also the reverse !==
10 !== 9; // true
"10" !== 10; // true



// AND operator if both values are truthful then the resulting value will also be true &&
true && true; // true
true && false; // false
false && false; // false
1 && true; // true
"" && true; // false


// OR operator if value is truthful the resulting value will also be true ||
true || true; // true
true || false; // true;
false || false; // false
false || 10; // true
"" || 0; // false


// XOR operator (if only one but not both values are truthful the resulting value will be true) XOR
true XOR true; // false
true XOR false; // true
"" XOR false; // false
"string" XOR false; // true


// LESS THAN (mostly only used for integer comparison, if the value on the left is less than the value on the right then
// the resulting value will be true)
5 < 10; // true
5 < 3; // false
5 < 5; // true

// LESS THAN EQUEAL TO (this is the same as the less than operator but will also be true if the values are the same)
5 <= 10; // true
5 <= 3; // false
5 <= 5; // true

// GREATER THAN (this works in the same way as less than but with the sides reversed)
5 > 10; // false
5 > 3; // true
5 > 5; // false

// LESS THAN EQUAL TO
5 >= 10; // false
5 >= 3; // true
5 >= 5; // true