<?php
// find the largest number from some given numbers like: 2,5,1,10  ; For the smalles number just replace > by <
$arr = array(2,5,1,10);
$largest;
for ($i =0; $i<(sizeof($arr)-1); $i++){
   if($arr[$i]>$arr[$i+1]){
       
       $largest = $arr[$i];
   }  
   else $largest = $arr[$i+1];
}
echo $largest;

// Get the summation of some given numbers like: 2,5,1,10
/* $arr = array(2,5,1,10);
$sum=0;
for ($i =0; $i<sizeof($arr); $i++){
   $sum = $sum + $arr[$i];
}
echo $sum; */
