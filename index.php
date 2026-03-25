<?php
$file = fopen("test.txt", 'w') or die("Не удалось открыть файл<br>");
$str = "Привет, мир!";
fputs($file, $str);

$text = htmlentities(file_get_contents("test.txt"));
echo $text . "<br>";

rename("test.txt", "mir.txt") or die("Ошибка переименования файла<br>");

mkdir("/var/www/mysite.ru/folder", 0700);
rename("mir.txt", "folder/mir.txt") or die("Ошибка перемещения файла в папку");

if(copy("/var/www/mysite.ru/folder/mir.txt", "/var/www/mysite.ru/folder/world.txt"))
echo "Копия файла создана<br>";
else echo "Ошибка копирования файла";

$fsize = filesize("folder/world.txt");

echo $fsize . " байт<br>";
echo $fsize/1024/1024 . " мегабайт<br>";
echo $fsize/1024/1024/1024 . " гигабайт<br>";

if (unlink("folder/world.txt")) echo "Файл удален<br>";
else echo "Ошибка при удалении файла<br>";

fclose($file);

?>