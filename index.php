<?php
/* !While Loops! */

$currentYear = date('Y');
$year = $currentYear - 100; 

/*------> 
<------*/
//Loop while year is <= current year
//Shows 1919 to 2019
while($year <= $currentYear){
    echo $year . "<br /> \n";
    $year++;
}



//Use incremented value within while loop
//Shows 2020 - 2020 
while($year++ <= $currentYear){
    echo $year . "<br /> \n"; 
}
//Do While loop 
//Shows 1919 - 2019
do{
    echo $year . "<br />\n";
}while(++$year <=$currentYear);


//Add array code from other chapter  
$learn = array('Conditionals', 'Arrays', 'Loops',); //Basic Array
$learn [] = "Build something awesome";//Add value to the end of the array
array_push($learn, 'Functions', 'Forms', 'Objects');//Add values to the end of the array
array_unshift($learn, 'HTML', 'CSS');//Add elements to the beginning of array
asort($learn);//Sort array by value without changing the key

/*
//Use a while loop to create a list from an array
while(list($key, $val) = each($learn)){
    echo "$key => $val<br />\n";
}

Creates a list
    3 => Arrays 
    5 => Build something awesome 
    1 => CSS 
    2 => Conditionals 
    7 => Forms 6 => Functions 
    0 => HTML 
    4 => Loops 
    8 => Objects
*/

//Add $count to return limited number of elements
$count = 0;
while((list($key, $val) = each($learn)) && $count++ < 2){
    echo "$key = $val<br />\n";
}


?>