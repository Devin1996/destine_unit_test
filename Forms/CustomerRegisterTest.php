<?php

		$first_name = $_POST['first_name'];
		$last_name = $_POST['last_name'];
		$pass = $_POST['u_pass'];
		$email =$_POST['u_email'];
		$dis = $_POST['u_district'];
		$gender =$_POST['u_gender'];
		$birthday = $_POST['u_birthday'];	


if($first_name=='Devin')
{
	echo "Expected First name was passed correctly : )</br>";

}
else{
	echo "Expected First name was passed Incorrectly : (</br>";
}


if($last_name=='Chandula')
{
	echo "Expected Last name was passed correctly : )</br>";

}
else{
	echo "Expected Last name was passed Incorrectly : (</br>";
}

if($email=='l@b.com')
{
	echo "Expected Email name was passed correctly : )</br>";

}
else{
	echo "Expected Email name was passed incorrectly : (</br>";
}

if($gender=='Male')
{
	echo "Expected Gender was passed correctly : )</br>";

}
else{
	echo "Expected Gender was passed incorrectly : (</br>";
}

if($dis=='Galle')
{
	echo "Expected District was passed correctly : )</br>";

}
else{
	echo "Expected District was passed incorrectly : (</br>";
}

if($gender=='Male')
{
	echo "Expected Gender was passed correctly : )</br>";

}
else{
	echo "Expected Gender name was passed incorrectly : (</br>";
}

if($birthday=='12/01/1996')
{
	echo "Expected birthday was passed correctly : )</br>";

}
else{
	echo "Expected birthday was passed incorrectly : (</br>";
}

// if($area=='Southern Province')
// {
// 	echo "Expected Area name was passed correctly : )</br>";

// }
// else{
// 	echo "Expected Area name was passed incorrectly : (</br>";
// }

if($pass=='1234567890')
{
	echo "Expected Password was passed correctly : )</br>";

}
else{
	echo "Expected Password was passed incorrectly : (</br>";
}

?>