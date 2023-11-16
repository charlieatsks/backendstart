<?php

//there are 3 different types of comment in PHP

/*
This is a multi-line comment
that can contain several sentences
or paragraphs
*/
// This is a single-line comment
# This is also a single-line comment


// if statement practice
$t = date("H");

if ($t < "20") {
  echo "Have a good day!";
}
?>

<?php
// switch statement ; practice
$favcolor = "red";

switch ($favcolor) {
  case "red":
    echo "Your favorite color is red!";
    break;
  case "blue":
    echo "Your favorite color is blue!";
    break;
  case "green":
    echo "Your favorite color is green!";
    break;
  default:
    echo "Your favorite color is neither red, blue, nor green!";
}
?>
 
<?php
//function with two argument; pratice

function familyName($fname, $year) {
  echo "$fname Refsnes. Born in $year <br>";
}

familyName("Hege","1975");
familyName("Stale","1978");
familyName("Kai Jim","1983");
?>
