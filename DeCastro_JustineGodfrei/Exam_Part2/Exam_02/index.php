<!DOCTYPE html>
<html>
<body>

<?php
$myfile = fopen("hello_there.php", "w");
$txt = "<?php 
//This is a comment

echo This is a test Page! 
echo Exam number two! 

//This is the end of a comment\n";
fwrite($myfile, $txt);
fclose($myfile);
?>



</body>
</html>
