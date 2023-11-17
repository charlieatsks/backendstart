<?php

/*
for (initialization expression; test condition; update expression) {
    // code to be executed
}
*/
<?php  
  
// code to illustrate for loop 
for ($num = 1; $num <= 10; $num += 2) { 
    echo "$num \n"; 
}  
  
?> 

/*
while (if the condition is true) {
    // code is executed
}
 */
<?php 
  
// PHP code to illustrate while loops 
$num = 2; 
  
while ($num < 12) { 
    $num += 2; 
    echo $num, "\n"; 
} 
  
?> 

/*
do {
    //code is executed
} while (if condition is true);
*/
<?php 

// PHP code to illustrate do...while loops 
$num = 2; 
do { 
	$num += 2; 
	echo $num, "\n"; 
} while ($num < 12); 

?> 

<?php 

// PHP code to illustrate the difference of two loops 
$num = 2; 

// In case of while 
while ($num != 2) { 
	
	echo "In case of while the code is skipped"; 
	echo $num, "\n"; 

} 
// In case of do...while 
do { 
	
	$num++; 
	echo "The do...while code is executed atleast once "; 
	
} while($num == 2); 

?> 

