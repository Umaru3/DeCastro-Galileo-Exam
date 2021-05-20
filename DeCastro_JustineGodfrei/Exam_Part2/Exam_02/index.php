<!DOCTYPE html>
<html>
<body>

<?php
$myfile = fopen("hello_there.php", "w");//opens up a file and write, name of the file
//text to be inputted inside the file
$txt = "<?php 
//This is a comment

echo This is a test Page! 
echo Exam number two! 

//This is the end of a comment\n";
fwrite($myfile, $txt);//sends to the text file
fclose($myfile);//closes the open file
?>



</body>
</html>
