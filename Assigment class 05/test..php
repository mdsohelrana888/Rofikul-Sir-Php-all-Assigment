<?php




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