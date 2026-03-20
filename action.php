<?php
$username = isset($_POST['username']) ? $_POST['username'] : '';
$email = isset($_POST['email']) ? $_POST['email'] : '';
$gender = isset($_POST['gender']) ? $_POST['gender'] : '';
$password = isset($_POST['password']) ? $_POST['password'] : '';
$password_confirm = isset($_POST['password_confirm']) ? $_POST['password_confirm'] : '';
$terms = isset($_POST['terms']) ? 'Принято' : 'Не принято';

$error_message = '';

if ($username == 'detsel' and $password == '123'){ require('calculator.php'); }

if (empty($email)) {
$error_message = "Поле Email не заполнено";
} 
elseif (empty($password)) {
$error_message = "Поле Пароль не заполнено";

?>
    <!DOCTYPE html>
    <html lang="ru">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Обработка формы</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <div class="area">
            <?php if (!empty($error_message)): ?>
            <p><?php echo $error_message; ?></p>
        <?php else: ?>
            <h2>Здравствуйте, <?php echo $username; ?>!</h2>
        <?php endif; ?>
        </div>
    </body>
    </html>