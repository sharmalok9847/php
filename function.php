<?php

function alok() //function
{
	echo "vikas" ."</br>";
	echo "Akash"."</br>";
	echo "Akanksha"."</br>";
}
alok(); //calling the function
//-----------------------------------------------//

function rjit() // function with return 
{
	return 3;
}

$c=rjit();
echo $c+1 ."</br>";

//-------------------------------------------------//

function sum($a,$b,$c) //function with arguments
{
	$r=$a+$b+$c;
	return $r;
}

$x= sum (11,12,13);//parameters
echo $x ."</br>";
$y= sum (11,12,13);
echo $y ."</br>";


?>










