<?php


// in many cases you might want to do different things based on the outcome of the if
// to allow this we have an else statement
// else statements cannot be used without a proceeding if

// the following line will randomly assign either true or false to the input variable
$input = !!mt_rand(0, 1);


if ($input) {
    print "the input was true";
} else {
    print "the input was false";
}