<?php
        		$color  = ['red','blue','green'];

$newarry = array_rand($color,2);

print_r ($newarry);
echo "<br>";
echo $color[$newarry[0]];
echo "<br>";
echo $color[$newarry[1]];

?>