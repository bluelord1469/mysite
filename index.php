<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Регистрация</title>
</head>
<body>
    <div class="registr">
        <p>Регистрация</p>
    </div>
    <section class="area">
        <form action="/action.php" method="POST">
            <input name="username" type="text" placeholder="Имя">
            <input name="email" type="email" placeholder="Почта">
            <select name="gender" id="pol">
                <option>Мужской</option>
                <option>Женский</option>
            </select>
            <input name="password" type="password" placeholder="Пароль">
            <input name="password_confirm" type="password" placeholder="Повторите пароль">
            <div class="label">
                <input type="checkbox" name="terms">
                <label for="terms">Я принимаю условия о <a href="">соглашении на обработку персональных данных</a></label>
            </div>
            <button name="btnReg" class="reg" type="submit">Зарегистрироваться</button>
        </form>
    </section>
</body>
</html>
