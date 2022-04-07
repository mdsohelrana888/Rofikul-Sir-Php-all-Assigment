<?php
echo  "<br>";
  // Question 02 Assignment : Question 02: 
	//If we print 1-100, our output will be 100 times. But this time you have print out only the odd (বিজোড়) number within 1-100
  // You have to rotate from 1 to 100.
  // Your output message should like that, “3 is a odd number”
  // Not need to print even number
echo  "Question 02 Assignment";
echo  "<br>";
   $end=100;
   $odd="is a odd number";
    for($i=1;$i<$end;$i++)
   {
     if($i%2!=0){
           echo  "$i $odd <br>";
      }   
    }
    echo  "<br>";
    echo  "<br>";
    Question 03: 

// Factorial - I think everyone knows the word. Factorial of 4 is given below:
// 4! = 4*3*2*1 = 24
// 6! = 6*5*4*3*2*1 = 720  
// So let’s calculate the factorial of 7.

    echo  "Question 03 Assignment";
    $num = 7;  
    $factorial = 1;  
    for ($x = $factorial; $x <= $num; $x++)   
    {  
      $factorial = $factorial * $x;  
    }  
    echo  "<br>";
    echo "Factorial of $num is $factorial ";  
    echo  "<br>";
    echo  "<br>";
   
// Question 04 Assignment : 
// Question 04: 
// Print out from 100 - 1 using a while loop. 
// You must use decrement operator

    echo  "Question 04 Assignment";
    echo  "<br>";
    $x = 100;
    while ( $x>=1) {
          echo "$x <br>";
          $x--;
    } 

?>