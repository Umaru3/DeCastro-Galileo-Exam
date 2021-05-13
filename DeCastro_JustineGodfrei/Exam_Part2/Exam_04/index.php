<!DOCTYPE html>
<html>
<body>

<?php
$date1 = "2019-05-31";
$date2 = "2018-04-05";
$diff = abs(strtotime($date2) - strtotime($date1));
$years = floor($diff / (365*60*60*24));
$months = floor(($diff - $years * 365*60*60*24) / (30*60*60*24));
$days = floor(($diff - $years * 365*60*60*24 - $months*30*60*60*24)/ (60*60*24));
echo "Date1: ", $date1,"</br>";
echo "Date2: ", $date2,"</br>";
echo $years," years, ", $months," months, ", $days, " days\n";
 
?>



</body>
</html>
