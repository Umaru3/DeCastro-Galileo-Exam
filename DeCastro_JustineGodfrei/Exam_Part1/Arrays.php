<!DOCTYPE html>
<html>
<body>


<?php
echo "A. Display number of occurences: <br>";  
$sortArray = array('Marvin','Marco','Marvin','Marco','Marco','Marvin','Christian');

$array = array_count_values($sortArray); 
arsort($array);
print_r($array);



echo "</br> B. Sort in Ascending order: <br>";
$sortNArray = array(9863, 7127, 2020, 80, 131, 55, 100);
sort($sortNArray);
print_r($sortNArray);


echo "</br> C. Display item that is not repetitive: <br>";
$unArray = array('red','blue','black','red','blue','blue','red','gold');
$arrayT = array_keys(array_flip($unArray));
print_r($arrayT);



?>



</body>
</html>
