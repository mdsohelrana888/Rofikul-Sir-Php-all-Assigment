<?php
$Number =[2,11,5,6,7,10];

foreach ($Number as $key => $value) {
   $Number =$value ;
   $n = 0;

for($i = 2; $i < $Number; $i++) {
 if($Number % $i == 0){
   $n++;
   break;
 }
}
if ($n == 0){
   echo $Number." is a prime number.";
   echo "<br>";
 } else {
     continue;
     echo "<br>";
   // echo $Number." is not a prime number.";
 }
}


echo "<br>";
echo "<br>";
echo "<br>";
$MyNum =[2,11,5,6,7,10];
foreach($MyNum  as $key => $value){
   
   $MyNum = $value;
   $n = 0;

for($i = 2; $i < $MyNum; $i++) {
   if($MyNum % $i == 0){
       $n++;
       break;
   }
}

if ($n == 0){
echo $MyNum." is a prime number. <br/>";
} else {
   continue;
//   echo $MyNum." is not a prime number. <br/>";
echo "<br/>";
}
}




// Question 03: 
// This is an array array(0,10,80,67,60,89,91,56,45,30,95,83,99) 
// Find the maximum value from this array.
// Must use a foreach loop
$a = [0,10,80,67,60,89,91,56,45,30,95,83,99];
$b = 0;
foreach ($a as $key=>$value) {
    if ($value > $b) {
        $b = $value;
    }
}
echo $b;
echo "<br>";
echo "<br>";


    
// We have an array [12,34,2,6,78]. What kind of array is this? Find all prime numbers from this array.
//   $array = [12,34,2,6,78];
//   $b = [0];
// for($i=1; $i<= count ($array); $i++){
//   for($j = 1; $j<=$i; $j++){
//    $temp = $i%$j;
//    if($temp == 1){
//    echo "is a prime number   ".$j."<br>";
//    }
//   }
//   }
// $num = [12,34,2,6,78];  
// $counte=0; 
// foreach ($num as $key => $value) {
//   if ( $num%$value ==0 )  
// {  
// if($value > $counte) { 
//   $count = $value;
// } 
// } 
// }

// echo $num;

// $num = 13;  
// $count=0;  
// for ( $i=1; $i<=$num; $i++)  
// {  
// if ($num%$i)==0)  
// {  
// $count++;  
// }  
// }  
// if ($count<30)  
// {  
// echo "$num is a prime number.";  
// }
// else
// {
// echo "$num is not a prime number."; 
// }
?>