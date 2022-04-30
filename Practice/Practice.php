<?php
function getAge($dob,$condate){ 
    $birthdate = new DateTime(date("Y-m-d",  strtotime(implode('-', array_reverse(explode('/', $dob))))));
    $today= new DateTime(date("Y-m-d",  strtotime(implode('-', array_reverse(explode('/', $condate))))));           
    $age = $birthdate->diff($today)->y;

    return $age;
}

$dob='06/06/1996'; //date of Birth
$condate='07/02/16'; //Certain fix Date of Age 
echo getAge($dob,$condate);99

?>


