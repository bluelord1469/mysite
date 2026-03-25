<?php
$file = fopen("test.txt", 'r') or die("Не удалось открыть файл");
$str = "Привет, мир!";
fputs($file, $str);

//while (!feof($file))
//{
//$text = fgets($file, strlen($file));
//echo $text . "<br>"
//}
//fclose($file);

?>