<?php


// but what if we want to have more than 2 branches of logic
// this is where elseif comes in


// assign a random value between 0 and 100 to the input variable
$input = mt_rand(0, 100);

if ($input === 3) {

    // called if input is 3

} elseif ($input < 3) {

    // called if input is less than 3

} else if ($input < 50) { // else if is the same as elseif

    // called if input is greater than 3
    // but less than 50

} else if ($input >= 90) {

    // called if input is greater than or equal to 90

} else {

    // called if none of the other conditions are met
    // in this case:
    // if input is greater than 49
    // and less than 90

}