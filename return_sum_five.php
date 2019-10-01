<?php
/***
Description : Getting Numbers Whose Sum Equals To Number 5 Only
Date : 1st October,2019
Added By : Neha Khemchandani
***/
function checkSum() {
$input = array(0,1,2,3,4,5); //input Array
$length = count($input);     // getting length of Array

for ($i = 0; $i < $length; $i++) {
      for($j = $i+1; $j<$length;$j++) {
           if($input[$i]+$input[$j]==5) {  //checking if sum equals to 5
               $arr_result [] = $input[$i]; 
               $arr_result [] = $input[$j];
               echo "The Numbers whose sum 5 are:".$input[$i].",".$input[$j];
               echo PHP_EOL;

           }
     }
 }
 
}

checkSum();

?>
