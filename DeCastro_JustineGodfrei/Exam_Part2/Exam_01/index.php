<!DOCTYPE html>
<html>
<body>

<?php
$usedString = "nurses";
$reversedString = strrev($usedString);//reveresed the String
if($usedString == $reversedString) {//checks if they still have the same values
echo '<br> '.$usedString.'  - palindrome';
}
else {//checks if they dont have the same values
echo '<br>'.$usedString.' - not a palindrome';
}
?>



</body>
</html>
