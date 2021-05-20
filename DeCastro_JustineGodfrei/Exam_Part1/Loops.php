<!DOCTYPE html>
<html>
<body>

<?php
echo "A. While Loop Sum of Even Numbers(0-10): <br>";  
$sum=0;
$i=1;
while($i <= 10)//using while loop for the number of items to get
{
     if($i % 2 == 0)//checks for even number
     {
         $sum += $i;
     }
      $i++;
}
 echo $sum,"</br>";//outputs


echo "B. Do While Loop Odd Numbers(0-10): <br>";  
$x=0;

 do{//using do while loop for the number of items to get
    if($x%2 == 1){//checks for odd number
        echo "<br/>",$x,"<br/>";//outputs
    }
    $x++;
}while($x <= 10)




$fOutput = 0;  
$a = 0;  
$b = 1;  
echo "C. For Loop Fibonacci Sequence(0-10): <br>";  
echo $a.' '.$b.' ';  
for($fOutput=0;$fOutput<=14;$fOutput++) //using for loop to get 10 fibonacci sequence numbers   
{  
    $c = $b + $a; //logic used for getting the numbers
    echo $c.' ';  //outputs
    $a = $b;  
    $b = $c;  
    $fOutput = $fOutput + 1;  
}

?>

</body>
</html>
