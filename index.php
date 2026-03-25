<?php
$file = fopen("test.txt", 'w') or die("Не удалось открыть файл");
$str = "Привет, мир!";
fputs($file, $str);

$text = htmlentities(file_get_contents("test.txt"));
echo $text . "<br>";

rename("test.txt", "mir.txt") or die("Ошибка переименования файла");

mkdir("/var/www/mysite.ru/folder", 0700);
rename("mir.txt", "folder/mir.txt") or die("Ошибка перемещения файла в папку");

if(copy("/var/www/mysite.ru/folder/mir.txt", "/var/www/mysite.ru/folder/world.txt"))
echo "Копия файла создана";
else echo "Ошибка копирования файла";

fclose($file);

?>