<?php
/* Use of count() Function and
    Sorting Arrays
*/

// sort() function
<?php
$freecodecamp = array("free", "code", "camp");
sort($freecodecamp);
print_r($freecodecamp);
?>

// rsort()
<?php
$freecodecamp = array("free", "code", "camp");
rsort($freecodecamp);
print_r($freecodecamp);
?>

// asort()
<?php
$freecodecamp = array("zero"=>"free", "one"=>"code", "two"=>"camp");
asort($freecodecamp);
print_r($freecodecamp);
?>

// arsort()

<?php
$freecodecamp = array("zero"=>"free", "one"=>"code", "two"=>"camp");
arsort($freecodecamp);
print_r($freecodecamp);
?>

