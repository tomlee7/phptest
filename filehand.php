<?php
$File = "YourFile.txt";
$Handle = fopen($File, 'w');
$Data = $_POST['name']."<br/>";
fwrite($Handle, $Data); 
$Data = $_POST['email']."<br/>";
fwrite($Handle, $Data); 
$Data=$_POST['comments']."<br/>";
fwrite($Handle,$Data);
fclose($Handle); 
?>
