<!DOCTYPE html>
<html>
<body>

<?php
$date1 = "2019-05-31";//start date
$date2 = "2018-04-05";//end date
$diff = abs(strtotime($date2) - strtotime($date1));//using strotime to change textual dates to unix timestamps, then calculating number of seconds in between from these dates
$years = floor($diff / (365*60*60*24));//getting the number of years
$months = floor(($diff - $years * 365*60*60*24) / (30*60*60*24));//getting the number of months
$days = floor(($diff - $years * 365*60*60*24 - $months*30*60*60*24)/ (60*60*24));//getting the number of days
echo "Date1: ", $date1,"</br>";
echo "Date2: ", $date2,"</br>";
echo $years," years, ", $months," months, ", $days, " days\n";//outputs
 
?>



</body>
</html>
