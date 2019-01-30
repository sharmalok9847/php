<?php

$username="admin";
$password="12345";

if ($username == 'admin' && $password =='1234')//and operator
 {
	echo "Welcome</br>";
}
else
{
	echo "please check username and password</br>";
}

if ($username == 'admin' or $password =='1234')//or operator
 {
	echo "Welcome</br>";
}
else
{
	echo "please check username and password</br>";
}


if ($username == 'admi' or $password !='1234')//not operator
 {
	echo "Welcome in not operator</br>";
}
else
{
	echo "please check username and password</br>";
}

?>