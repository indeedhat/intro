<?php


// if statements can be nested
// this is a lot of the time necessary to get the desired results but should be avoided wherever possible

$var1 = 10;
$var2 = false;
$var3 = 4;

// here is an example of nesting
if ($var1 > 5) {
    print "var1 is greater than 5";

    if (4 == $var3) {
        print "and var3 equals 4";
    }
} else {
    if ($var2) {
        print "var2 is truthful";
    } else {
        print "var2 is falsey";
    }
}

// in the above example the nesting if the if portion is unavoidable as logic needs to be ran based on the amalgamation
// of the results
// however the else does not need to be nested and makes the code more cluttered
// here is a better example that will work in the exact same way

if ($var1 > 5) {
    print "var1 is greater than 5";

    if (4 == $var3) {
        print "and var3 equals 4";
    }
} else if ($var2) {
    print "var2 is truthful";
} else {
    print "var2 is falsey";
}