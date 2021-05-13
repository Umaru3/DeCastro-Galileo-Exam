<!DOCTYPE html>
<html>
<body>

<?php
$usedString = "nurses";
$reversedString = strrev($usedString);
if($usedString == $reversedString) {
echo '<br> '.$usedString.'  - palindrome';
}
else {
echo '<br>'.$usedString.' - not a palindrome';
}
?>



</body>
</html>
