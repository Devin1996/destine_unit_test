<?php

$id=$_POST['id'];
$name=$_POST['name'];

echo $id;
echo $name;

if($id=='25871')
{
	echo "Passed data is correct</br>";

}
else{
	echo "Passed data is Incorrcet</br>";
}

if($name=='Devin')
{
	echo "Passed name is correct</br>";

}
else{
	echo "Passed name is Incorrcet</br>";
}

?>