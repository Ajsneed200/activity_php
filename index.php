<h1>Exploring WordPress Customization</h1>
<p>Andrew Sneed</p>
<p>11/5/2025</p>

<?php


$string_valiable = "string" ;
$float_number = 10.09 ;
$integer_number = 21 ;

echo "<br/>" ;

function add_number($integer_number,$float_number) {
 
    return $integer_number + $float_number ;
} 

$total = add_number($integer_number,$float_number) ;

echo "<h2>$integer_number + $float_number = ($total)</h2>" ;


echo "<br/>" ;

echo "<p>JavaScript and PHP are both popular and simple scripting languages that are easy for beginners to learn.
The main difference between the two is that PHP is server-based and runs on a server, while JavaScript is client-based and runs on a browser.</p>" ;

?>