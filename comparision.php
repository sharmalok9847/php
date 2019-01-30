<?php
echo "<h2>Operator's</h2>";
$a=5;
$b=2;
$c=2;


if ($b==$c) 
{
	echo "b is equal to c</br>";
}
else
{
	echo "b is not equal to c</br>";
}

if ($b==$a) 
{
	echo "b is equal to a</br>";
}
else
{
	echo "b is not equal to c</br>";
}

if ($a!=$c) 
{
	echo "a is not equal to c</br>";
}
else
{
	echo "a is equal to c</br>";
}

if ($a>$b) 
{
	echo "a is greater than c</br>";
}
else
{
	echo "b is greater than a</br>";
}

if ($a>=$c) 
{
	echo "a is greater or equal to c</br>";
}
else
{
	echo "a is greater or equal to c</br>";
}

$alok=24;
$prachi=17;

if ($alok>=18)
 {
	echo "alok can vote </br>";
}
else
{
	echo "alok can't </br>";
}


if ($prachi>=18)
 {
	echo "prachi can vote </br>";
}
else
{
	echo "prachi can't </br>";
}


$a="red";
$b="blue";
//$a === $b     (Identical)      
//TRUE if $a is equal to $b, and they are of the same type.
//=== check data type
if ($a==$b) {
	echo "$a";
}
else
{
	echo "blue";
}

?>