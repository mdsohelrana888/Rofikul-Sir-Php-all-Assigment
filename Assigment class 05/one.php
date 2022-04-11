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

?>