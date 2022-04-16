<?php
	Question 01:
    You have purchased some items from a supershop. Purchase product array is given below-
$purchased_products = array(
            array('name' => 'banana',  'qty' => 10, 'total_price' => 550),
            array('name' => 'apple',     'qty' => 50,  'total_price' => 1500),
            array('name' => 'orange',  'qty' => 7,    'total_price' => 600),
    );
How much product quantity you have purchased (total purchased qty = 67)
Calculate the total amount of all purchased items (total amount = 2650 tk).

	$purchased_products = array(
        array('name' => 'banana',  'qty' => 10, 'total_price' => 550),
        array('name' => 'apple',     'qty' => 50,  'total_price' => 1500),
        array('name' => 'orange',  'qty' => 7,    'total_price' => 600),

);
$results = array_sum(array_column($purchased_products, 'qty'));
$total_price = array_sum(array_column($purchased_products, 'total_price'));
echo "Total purchased qty=$results";
echo "<br>";
echo "total amount =$Total_price";

?>