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

//$date = mktime(0, 0, 0, 9, 1, date('Y'));
//echo date('Y.m.d', $date);

//$date = mktime(0, 0, 0, 2, 2, 2000);
//echo date("l", $date);

//$week = [
    //1 => 'Понедельник',
    //2 => 'Вторник',
    //3 => 'Среда',
    //4 => 'Четверг',
    //5 => 'Пятница',
    //6 => 'Суббота',
    //7 => 'Воскресенье'
//];

//echo "Сегодня: " . $week[date('N')] . "<br>";

//$dayNumber = date('N', strtotime('2016-06-12'));
//echo "12.06.2016 был: " . $week[$dayNumber] . "<br>";

//$birthdayNumber = date('N', strtotime('2008-01-20'));
//echo date('d.m.Y', strtotime('2008-01-20')) . " был: " . $week[$birthdayNumber];

//<!DOCTYPE html>
//<html lang="ru">
//<head>
//<meta charset="UTF-8">
//<title>Сравнение дат</title>
//</head>
//<body>
//<form method="POST">
//Первая дата (ГГГГ-ММ-ДД): <input type="text" name="date1" required><br><br>
//Вторая дата (ГГГГ-ММ-ДД): <input type="text" name="date2" required><br><br>
//<input type="submit" value="Сравнить">
//</form>

//<?php
//if ($_SERVER['REQUEST_METHOD'] === 'POST') {
//$date1 = $_POST['date1'];
//$date2 = $_POST['date2'];

//if (!empty($date1) && !empty($date2)) 
//{
//if ($date1 > $date2) {
//echo "Большая дата: " . $date1;
//} 
//elseif ($date1 < $date2) echo "Большая дата: " . $date2;
//else echo "Даты равны";
//} 
//else echo "Введите обе даты!";
//}
//закрывающий тег php
//</body>
//</html>


$date = '2026-03-26';
echo date('d-m-Y', strtotime($date));

?>