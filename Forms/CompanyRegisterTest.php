<?php

$c_name = $_POST['company_name'];
$email = $_POST['c_email'];
$tel = $_POST['c_tel'];
$add = $_POST['c_add'];
$cat = $_POST['c_category'];
$reg = $_POST['c_regno'];
$area = $_POST['c_area'];
$pass = $_POST['c_pass'];
		

if($c_name=='Lanka')
{
	echo "Expected Company name was passed correctly : )</br>";

}
else{
	echo "Expected Company name was passed Incorrectly : (</br>";
}


if($email=='l@b.com')
{
	echo "Expected Email name was passed correctly : )</br>";

}
else{
	echo "Expected Email name was passed incorrectly : (</br>";
}

if($tel=='+94412222698')
{
	echo "Expected Telephone was passed correctly : )</br>";

}
else{
	echo "Expected Telephone was passed incorrectly : (</br>";
}

if($add=='33/13 HAKMANA ROAD,MATARA')
{
	echo "Expected Address was passed correctly : )</br>";

}
else{
	echo "Expected Address was passed incorrectly : (</br>";
}

if($cat=='Paint')
{
	echo "Expected Category was passed correctly : )</br>";

}
else{
	echo "Expected Category name was passed incorrectly : (</br>";
}

if($reg=='2345')
{
	echo "Expected Register Number was passed correctly : )</br>";

}
else{
	echo "Expected Register Number was passed incorrectly : (</br>";
}

if($area=='Southern Province')
{
	echo "Expected Area name was passed correctly : )</br>";

}
else{
	echo "Expected Area name was passed incorrectly : (</br>";
}

if($pass=='1234567890')
{
	echo "Expected Password was passed correctly : )</br>";

}
else{
	echo "Expected Password was passed incorrectly : (</br>";
}


?>