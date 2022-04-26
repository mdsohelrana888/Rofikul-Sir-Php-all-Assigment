<?php

// GPA function for result publishing===============================================
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

// // <!-- risitas markes -->
// $SubjectA = 75;
// $SubjectB = 80;
// $SubjectC = 65;
// $SubjectD = 90;
// // <!-- total markes -->

// // <!-- gpa markes -->
// $gpa = $total / 4;
//  echo $gpa ;
// if ($gpa >=80){
//     echo " You Got A+";
// }else if ($gpa >=70 && $gpa <=79){
//     echo " You Got A";
// }else if($gpa >=60 && $gpa <=69){
//     echo " You Got A-";
// }else if ($gpa >=50 && $gpa <=59){
//     echo " You Got B";
// }else if ($gpa >=40 && $gpa <=49){
//     echo " You Got C";
// }else if ($gpa >= 01 && $gpa <=39){
//     echo " You Got F";
// };




?>