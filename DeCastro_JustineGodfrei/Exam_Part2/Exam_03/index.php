<!DOCTYPE html>
<html>
<body>

<?php
function Square($x)
{
    $y = (int)(sqrt($x));
    return ($y * $y == $x);
}
 
function fCompute($z)
{
     return Square(5 * $z * $z + 4) ||
           Square(5 * $z * $z - 4);
}
 
for ($i = 1; $i <= 10; $i++)
	if(fCompute($i))
	{

		echo $i, " is a Fibonacci Number </br>";
	}
	else{

		echo $i, " is a not Fibonacci Number </br>" ;
	}
 
?>



</body>
</html>
