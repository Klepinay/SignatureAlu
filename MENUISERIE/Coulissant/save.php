

<?php
$client = $_POST['client'];
$ral = $_POST['ral'];
$rep = $_POST['rep'];
$qte = $_POST['qte'];
$lg = $_POST['lg'];
$ht = $_POST['ht'];


$list = ("$client $ral $rep $qte $lg $ht");
// Open the text file
$f = fopen("textfile$client.txt", "w");
// Write text line
fwrite($f, $list);
// Close the text file
fclose($f);
// Open file for reading, and read the line
header ("Location: http://localhost/prise%20de%20cote/Home.html");
echo fgets($f);
fclose($f);