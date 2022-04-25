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







?>