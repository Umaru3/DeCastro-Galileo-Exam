<!DOCTYPE html>
<html>
<body>

<?php
echo "A. While Loop Sum of Even Numbers(0-10): <br>";  
$sum=0;
$i=1;
while($i <= 10)
{
     if($i % 2 == 0)
     {
         $sum += $i;
     }
      $i++;
}
 echo $sum,"</br>";


echo "B. Do While Loop Odd Numbers(0-10): <br>";  
$x=0;

 while($x <= 10){
    if($x%2 == 1){
        echo "<br/>",$x,"<br/>";
    }
    $x++;
}




$fOutput = 0;  
$a = 0;  
$b = 1;  
echo "C. For Loop Fibonacci Sequence(0-10): <br>";  
echo $a.' '.$b.' ';  
for($fOutput=0;$fOutput<=14;$fOutput++)    
{  
    $c = $b + $a;  
    echo $c.' ';  
    $a = $b;  
    $b = $c;  
    $fOutput = $fOutput + 1;  
}

?>

</body>
</html>
