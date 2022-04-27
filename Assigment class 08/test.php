<?php

function BmiClaculator($wight, $height){
    $height = $height/100;

    $bmi_result = $wight / ($height * $height);
    $bmi_result = number_format($bmi_result, 2);
    return "Your BMI = {$bmi_result}" ;


};
// first argument is weight (kg) and 2nd argument is height( cm )
echo BmiClaculator( 6, 167);


?>


