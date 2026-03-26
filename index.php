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

//function checkDivisionByZero($num1, $num2)
//{
//if ($num2 == 0) throw new Exception("Деление на ноль невозможно!");
//return $num1/$num2;
//}

//try
//{
//$res = checkDivisionByZero(13, 0);
//echo $res . "<br>";
//}
//catch (Exception $ex)
//{
//echo $ex->getMessage();
//$err = $ex->getMessage();
//$errFile = fopen("errFile.txt", "a");
//fputs($errFile, $err);
//fclose($errFile);
//}

//$countries = ['Spain' => 'Madrid', 'Russia' => 'Moscow'];

//function checkCountry($arr, $key)
//{
//if(!array_key_exists($key, $arr)) throw new Exception("Элемент не существует в массиве!");
//return $arr[$key];
//}

//try
//{
//$capital = checkCountry($countries, 'Germany');
//echo "Столица Германии: " . $capital;
//}
//catch (Exception $ex)
//{
//echo $ex->getMessage();
//}

//часть 2

//echo mktime(10, 25, 0, 3, 15, 2025);

//echo time()-mktime(8, 5, 59, 10, 2, 1990);

//echo date('Y.m.d H:i:s');

$date = mktime(0, 0, 0, 9, 1, date('Y'));
echo date('Y.m.d', $date);
?>