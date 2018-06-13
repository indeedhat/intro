<?php

// as said in the boolean lesson booleans (true/false) are how decisions are made in code
// if statements are the very basics of how decisions are acted upon

if (true) {
    // this will be called
}

if (false) {
    // this will not be called
}

// if statements will act on any truthful/falsey input they are given
if ("truthful string") {
    // this will be called
}

if (0) {
    // this will not be called
}

$someNumber = 10;
if (10 == $someNumber) {
    // this will be called
}

if (8 == $someNumber) {
    // this will not be called
}