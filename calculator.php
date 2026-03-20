<?php
$result = '';
$error = '';

$num1 = isset($_POST['num1']) ? $_POST['num1'] : '';
$num2 = isset($_POST['num2']) ? $_POST['num2'] : '';
$operation = isset($_POST['operation']) ? $_POST['operation'] : '';

if (!empty($operation)) {
    if (is_numeric($num1) && is_numeric($num2)) {
        switch ($operation) {
            case 'add':
                $result = $num1 + $num2;
                break;
            case 'subtract':
                $result = $num1 - $num2;
                break;
            case 'multiply':
                $result = $num1 * $num2;
                break;
            case 'divide':
                if ($num2 == 0) {
                    $error = "Ошибка: деление на ноль невозможно!";
                } else {
                    $result = $num1 / $num2;
                }
                break;
            default:
                $error = "Выберите операцию";
        }
    } else {
        $error = "Введите корректные числовые значения";
    }
}
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Калькулятор</title>
    <style>
        .calculator {
            padding: 30px;
            border-radius: 15px;
            width: 400px;
        }
        input {
            width: 100%;
            padding: 12px;
            margin: 8px 0;
            border: 2px solid #ddd;
            border-radius: 8px;
            font-size: 16px;
        }
        
        .buttons {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 10px;
            margin: 20px 0;
        }
        button {
            padding: 10px;
            font-size: 18px;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            background: #f0f0f0;
        }
        .result {
            padding: 15px;
            border-radius: 8px;
            text-align: center;
            font-size: 24px;
            font-weight: bold;
            color: #333;
            margin-top: 20px;
        }
        .error {
            color: #c62828;
            padding: 15px;
            text-align: center;
            font-size: 16px;
            margin-top: 10px;
        }
    </style>
</head>
<body>
    <div class="area calculator">
        <h2>Калькулятор</h2>
        <form method="POST" action="calculator.php">
            <input type="number" name="num1" placeholder="Первое число" required>
            <input type="number" name="num2" placeholder="Второе число" required>
            
            <div class="buttons">
                <button type="submit" name="operation" value="add">+</button>
                <button type="submit" name="operation" value="subtract">-</button>
                <button type="submit" name="operation" value="multiply">×</button>
                <button type="submit" name="operation" value="divide">÷</button>
            </div>
        </form>
        
        <?php if ($error): ?>
            <div class="error"><?php echo $error; ?></div>
        <?php elseif ($result !== ''): ?>
            <div class="result">Результат: <?php echo $result; ?></div>
        <?php endif; ?>
    </div>
</body>
</html>