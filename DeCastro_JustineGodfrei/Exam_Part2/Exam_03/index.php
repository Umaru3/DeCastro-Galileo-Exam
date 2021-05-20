<!DOCTYPE html>
<html>
<body>

<?php
function Square($x)
{
    $y = (int)(sqrt($x)); //function for returning true if number with perfect square
    return ($y * $y == $x);
}
 
function fCompute($z)
{
     return Square(5 * $z * $z + 4) ||//function returns the number if number is a fibonacci number
           Square(5 * $z * $z - 4);// it is Fibinacci if one of these or both computations are a perfect squares
}
 
for ($i = 1; $i <= 10; $i++)
	if(fCompute($i))//checks if number is a Fibonacci Number
	{

		echo $i, " is a Fibonacci Number </br>";
	}
	else{//checks if number is not a Fibonacci Number

		echo $i, " is a not Fibonacci Number </br>" ;
	}
 
?>



</body>
</html>
