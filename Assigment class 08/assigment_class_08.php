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



?>