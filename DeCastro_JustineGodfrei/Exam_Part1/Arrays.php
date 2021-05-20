<!DOCTYPE html>
<html>
<body>


<?php
//Exam Part 1.A
echo "A. Display number of occurences: <br>";  
$sortArray = array('Marvin','Marco','Marvin','Marco','Marco','Marvin','Christian'); 

$array = array_count_values($sortArray); //count array frequencies
arsort($array);//sort according to their values
print_r($array);//ouput array



echo "</br> B. Sort in Ascending order: <br>";
$sortNArray = array(9863, 7127, 2020, 80, 131, 55, 100);
sort($sortNArray);//sort array in ascending order
print_r($sortNArray);//output array
	

echo "</br> C. Display item that is not repetitive: <br>";
$unArray = array('red','blue','black','red','blue','blue','red','gold');
$arrayT = array_keys(array_flip($unArray));//Returns their keys and Changed keys with their values
print_r($arrayT);//output array



?>



</body>
</html>
