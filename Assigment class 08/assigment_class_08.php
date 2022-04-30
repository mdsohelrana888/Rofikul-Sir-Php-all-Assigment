<?php

// 1.Create a function that will return children, teenagers, young people, old people from the age=============================================

function people_age_Group($age) {
      if($age <=0){
              return 'Not valid Age Number';
      }elseif ($age <=12) {
        return 'You are Kids';
      }elseif ($age <=20) {
        return 'You are Teenagers';
      }elseif ($age <=39) {
        return 'You are Adults';
      }elseif ($age <=69) {
        return 'Middle Age Adult ';
      }
      elseif($age<=100) {
        return 'You are old man ';
      }else{
        return "Not valid Age Number";
      }


};
echo people_age_Group(-02);

echo "<br>";
echo "<br>";

// 2.Create a function that will return the area of a rectangle, square, triangle
// Rectangle function
function rect_area($length, $width) //function has not declared
{
    $area = $length * $width;
    echo "Area Of Rectangle with length " . $length . " & width " . $width . " is " . $area ;
}
echo rect_area(23,10);
echo "<br>";
echo "<br>";
// square
function areaSquare($side)
{
	$area = $side * $side;
	return 'Area Of square'. $area;
}

echo areaSquare(10);
echo "<br>";
echo "<br>";
// triangle
function tri_area($length, $width) //function has not declared
{
    $area = ($length * $width)/2;
    echo "Area Of Rectangle with length " . $length . " & width " . $width . " is " . $area ;
}
echo tri_area(23,10);

echo "<br>";
echo "<br>";

// 3.GPA function for result publishing===============================================
function gpa_calculate($SubjectA,$SubjectB,$SubjectC,$SubjectD){
  $total = $SubjectA + $SubjectB+ $SubjectC + $SubjectD;
  $gpa = $total / 4;

  if ($gpa >=80){
      echo " You Got A+";
  }else if ($gpa >=70 && $gpa <=79){
      echo " You Got A";
  }else if($gpa >=60 && $gpa <=69){
      echo " You Got A-";
  }else if ($gpa >=50 && $gpa <=59){
      echo " You Got B";
  }else if ($gpa >=40 && $gpa <=49){
      echo " You Got C";
  }else if ($gpa >= 01 && $gpa <=39){
      echo " You Got F";
};
return $gpa ;
}
echo  gpa_calculate(20,60,100,90);
echo "<br>";
echo "<br>";

// 4.Create an age calculator function=================================================
function getAge($dob,$condate){ 
  $birthdate = new DateTime(date("Y-m-d",  strtotime(implode('-', array_reverse(explode('/', $dob))))));
  $today= new DateTime(date("Y-m-d",  strtotime(implode('-', array_reverse(explode('/', $condate))))));           
  $age = $birthdate->diff($today)->y;

  return $age;
}
echo getAge('06/06/1996','07/02/2011');
echo "<br>";
echo "<br>";

// 5.Create a BMI function for health===================================================
function BmiClaculator($wight, $height){
  $height = $height/100;

  $bmi_result = $wight / ($height * $height);
  $bmi_result = number_format($bmi_result, 2);
  return "Your BMI = {$bmi_result}" ;
};
// first argument is weight (kg) and 2nd argument is height( cm )==============================================================================================
echo BmiClaculator( 56, 57);


// Create a currency converter function from taka to USD, CAD, POUND, EURO etc=======
function currency_convarter($taka, $currency){
  $usd = $taka / 85;
  $usd = number_format($usd, 2);
  $cad = $taka / 68;
  $cad = number_format($usd, 2);
  $pound = $taka / 111;
  $pound = number_format($usd, 2);
  $euro = $taka / 93.59;
  $euro = number_format($usd, 2);

  if ( $currency == "usd" ) {
    return "USD ={ $usd} <br>";
  }elseif($currency == "cad" ) {
    return "CAD ={$cad} <br>";
  }elseif($currency =="pound" ) {
    return "POUND ={$pound} <br>";
  }elseif($currency =="euro" ) {
    return "EURO ={$euro}";
  }
  else{
    return" This is not posible to convert";
  }
}
echo currency_convarter(5962, "pound");



?>