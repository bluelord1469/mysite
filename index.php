<?php
//function checkOpenFile($filename, $rights)
//{
//if (!file_exists($filename)) throw new Exception("Файл не существует");
//$file = fopen($filename, $rights);
//return $file;
//}

//try
//{
//$file = checkOpenFile("file.txt", "r");
//echo "Файл открыт";
//fclose($file);
//}
//catch (Exception $ex)
//{
//echo $ex->getMessage();
//}

function checkDivisionByZero($num1, $num2)
{
if ($num2 == 0) throw new Exception("Деление на ноль невозможно!");
return $num1/$num2;
}

try
{
$res = checkDivisionByZero(13, 0);
echo $res . "<br>";
}
catch (Exception $ex)
{
echo $ex->getMessage();
$err = $ex->getMessage();
$errFile = fopen("errFile.txt", "a");
fputs($errFile, $err);
fclose($errFile);
}

?>