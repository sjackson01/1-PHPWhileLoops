<?php
/* !While Loops! */

$currentYear = date('Y');
$year = $currentYear - 100; 

/*------> 

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
  

//Do While loop 
//Shows 1919 - 2019
do{
    echo $year . "<br />\n";
}while(++$year <=$currentYear);

<------*/  

?>