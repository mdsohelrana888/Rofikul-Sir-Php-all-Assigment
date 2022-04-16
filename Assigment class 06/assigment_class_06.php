<?php

// Question 01: ================================================================================================
// We have an array [12,34,2,6,78]. What kind of array is this? Find all prime numbers from this array.
// Step 1: First let us find the factors of the given number( factors are the number that completely divides the given number)
// Step 2: Then check the total number of factors of that number
// Step 3: Hence, If the total number of factors is more than two, it is not a prime number but a composite number. Because When a number is divisible by only one and itself, then it is a prime number.
// Example Website Jahan takha Code ta bujta parci Link:https://www.alphacodingskills.com/php/pages/php-program-to-check-prime-number.php

$Number =[12,34,2,6,78,7];
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
// Question 02: ==============================================================
// Let’s think about a use case, Daraz admin’s have some products for uploads on their e-commerce site. So make an array of products which contains 5 products.
// Go to daraz website and pick any 5 products and make your array.
// Must mention Which type of array you have made.

//Multidimensional Arrays
$products_List = [

   ['Product-Name' => 'Shirt', 'Price'   => 320, 'size'  => 'M' , 'Color'         => 'Blue' ],
   ['Product-Name' => 'Pant', 'Price'    => 560, 'size'  => "36 Inch" , 'Color'   => 'Black' ],
   ['Product-Name' => 'Sari', 'Price'    => 3000, 'size' => 'Free Size' , 'Color' => 'Gray' ],
   ['Product-Name' => 'T-shirt', 'Price' => 160, 'size'  => 'M' , 'Color'         => 'Skyblue' ],
   ['Product-Name' => 'Cap', 'Price'     => 80, 'size'   => 'free Size' , 'Color' => 'White' ]
 
 ]; 
 
 foreach ( $products_List as $key => $SingleProduct) {
   echo "<hr>";  
   echo "$key:";
     foreach ( $SingleProduct as $key1 => $value) {
         echo $key1.":". $value;
         echo "<br>";
     }
     
 }
   
echo"<br>";
echo "<br>";
// ========================================================================
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
echo "Maximum value:$b";
echo "<br>";
echo "<br>";

// Question 04: ===========================================================================
//   Let’s traverse this array(0,10,80,67,60,89,91,56,45,30,95,83,99) and print 0 index then skip 1 index again print 2 skip 3….

$array = [0,10,80,67,60,89,91,56,45,30,95,83,99]; 
foreach ($array  as $key => $value) {
        if ($key % 2) {
           continue ;
}
 echo  "$value<br>";
}
?>