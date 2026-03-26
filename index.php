<?php
function checkOpenFile($filename, $rights)
{
if (!file_exists($filename)) throw new Exception("Файл не существует");
$file = fopen($filename, $rights);
return $file;
}

try
{
$file = checkOpenFile("file.txt", "r");
echo "Файл открыт";
fclose($file);
}
catch (Exception $ex)
{
echo $ex->getMessage();
}

?>