<?php
class Page {
    private string $name;
    private string $template;
    
    public function __construct() {
        $this->name = "page";
        $this->template = "<div style='font-family: Arial; text-align: center; padding: 20px;'>
            <h1>SOUTH PARK</h1>
            <p>Добро пожаловать в городок Южный Парк!</p>
            <p>Здесь живут Картман, Кенни, Стэн и Кайл.</p>
            <p><strong>Скоро:</strong> Новая серия о Ктулху, Еноте и его друзей!</p>
        </div>";
    }
    
    public function render(){
        echo $this->template;
    }
}

class BlogPage extends Page {
    public function __construct() {
        $this->name = "blog";
        $this->template = '<div style="font-family: Arial; padding: 20px;">
            <h1 style="text-align: center;">Блог о персонажах Южного Парка</h1>
            <div style="display: flex; flex-wrap: wrap; gap: 20px; justify-content: center;">
                
                <div style="border: 2px solid #ccc; border-radius: 10px; padding: 15px; width: 250px; text-align: center; box-shadow: 0 4px 8px rgba(0,0,0,0.1);">
                    <h3>Эрик Картман</h3>
                    <p style="font-size: 14px; color: #555;">«Уважайте мой авторитет!» — главный манипулятор и любитель чипсов Cheesy Poofs.</p>
                </div>
                
                <div style="border: 2px solid #ccc; border-radius: 10px; padding: 15px; width: 250px; text-align: center; box-shadow: 0 4px 8px rgba(0,0,0,0.1);">
                    <h3>Кенни Маккормик</h3>
                    <p style="font-size: 14px; color: #555;">Бедный мальчик в оранжевом парке, который постоянно умирает. Mmmph mmmph!</p>
                </div>
                
                <div style="border: 2px solid #ccc; border-radius: 10px; padding: 15px; width: 250px; text-align: center; box-shadow: 0 4px 8px rgba(0,0,0,0.1);">
                    <h3>Стэн Марш</h3>
                    <p style="font-size: 14px; color: #555;">Голос разума в компании. Любит свою девушку Венди и ненавидит несправедливость.</p>
                </div>
                
                <div style="border: 2px solid #ccc; border-radius: 10px; padding: 15px; width: 250px; text-align: center; box-shadow: 0 4px 8px rgba(0,0,0,0.1);">
                    <h3>Кайл Брофловски</h3>
                    <p style="font-size: 14px; color: #555;">Самый умный и принципиальный. Постоянно спорит с Картманом. «Что за *****, Картман?!»</p>
                </div>
                
            </div>
        </div>';
    }
    
    public function render(): void {
        echo $this->template;
    }
}

class FilmPage extends Page {
    public function __construct() {
        $this->name = "film";
        $this->template = '<div style="font-family: Arial; padding: 20px;">
            <h1 style="text-align: center;">Короткометражки Южного Парка</h1>
            <div style="display: flex; flex-wrap: wrap; gap: 20px; justify-content: center;">
                
                <div style="border: 2px solid #ccc; border-radius: 10px; padding: 15px; width: 250px; text-align: center; box-shadow: 0 4px 8px rgba(0,0,0,0.1); background: #f9f9f9;">
                    <h3>Дух Рождества</h3>
                    <p style="font-size: 14px; color: #555;"><strong>Год:</strong> 1992</p>
                    <p style="font-size: 14px; color: #555;">Первая короткометражка, где Картман, Кенни, Стэн и Кайл впервые появились на экране.</p>
                </div>
                
                <div style="border: 2px solid #ccc; border-radius: 10px; padding: 15px; width: 250px; text-align: center; box-shadow: 0 4px 8px rgba(0,0,0,0.1); background: #f9f9f9;">
                    <h3>Дух Рождества 2</h3>
                    <p style="font-size: 14px; color: #555;"><strong>Год:</strong> 1995</p>
                    <p style="font-size: 14px; color: #555;">Иисус против Санты. Классическая битва добра и коммерции в Южном Парке.</p>
                </div>
                
                <div style="border: 2px solid #ccc; border-radius: 10px; padding: 15px; width: 250px; text-align: center; box-shadow: 0 4px 8px rgba(0,0,0,0.1); background: #f9f9f9;">
                    <h3>Ваше новое тело</h3>
                    <p style="font-size: 14px; color: #555;"><strong>Год:</strong> 2019</p>
                    <p style="font-size: 14px; color: #555;">Короткометражка для взрослых о кризисе идентичности и современных технологиях.</p>
                </div>
                
                <div style="border: 2px solid #ccc; border-radius: 10px; padding: 15px; width: 250px; text-align: center; box-shadow: 0 4px 8px rgba(0,0,0,0.1); background: #f9f9f9;">
                    <h3>Пандемия особенная</h3>
                    <p style="font-size: 14px; color: #555;"><strong>Год:</strong> 2020</p>
                    <p style="font-size: 14px; color: #555;">Специальный эпизод о коронавирусе. Картман пытается нажиться на пандемии.</p>
                </div>
                
                <div style="border: 2px solid #ccc; border-radius: 10px; padding: 15px; width: 250px; text-align: center; box-shadow: 0 4px 8px rgba(0,0,0,0.1); background: #f9f9f9;">
                    <h3>Южный Парк: Пост-ковид</h3>
                    <p style="font-size: 14px; color: #555;"><strong>Год:</strong> 2021</p>
                    <p style="font-size: 14px; color: #555;">Взрослые версии персонажей пытаются вернуться в прошлое и спасти будущее.</p>
                </div>
                
                <div style="border: 2px solid #ccc; border-radius: 10px; padding: 15px; width: 250px; text-align: center; box-shadow: 0 4px 8px rgba(0,0,0,0.1); background: #f9f9f9;">
                    <h3>25-й юбилейный концерт</h3>
                    <p style="font-size: 14px; color: #555;"><strong>Год:</strong> 2022</p>
                    <p style="font-size: 14px; color: #555;">Концерт-спешл с лучшими музыкальными номерами за всю историю сериала.</p>
                </div>
                
            </div>
        </div>';
    }
    
    public function render(): void {
        echo $this->template;
    }
}

$page = $_GET['page'] ?? 'page';

if ($page === 'blog') {
    $pageObj = new BlogPage();
} elseif ($page === 'film') {
    $pageObj = new FilmPage();
} else {
    $pageObj = new Page();
}
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Южный Парк - Фан-сайт</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            font-family: 'Arial', sans-serif;
        }
        .nav {
            background: rgba(0,0,0,0.8);
            padding: 15px;
            text-align: center;
            margin-bottom: 20px;
        }
        .nav a {
            color: white;
            text-decoration: none;
            margin: 0 20px;
            padding: 10px 20px;
            background: #ff6b6b;
            border-radius: 5px;
            transition: all 0.3s;
            display: inline-block;
        }
        .nav a:hover {
            background: #ff4757;
            transform: scale(1.05);
        }
        .container {
            max-width: 1200px;
            margin: 0 auto;
            background: white;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.2);
            overflow: hidden;
        }
    </style>
</head>
<body>
    <div class="nav">
        <a href="?page=page">Главная страница</a>
        <a href="?page=blog">Блог о персонажах</a>
        <a href="?page=film">Короткометражки</a>
    </div>
    
    <div class="container">
        <?php
        if ($pageObj !== null) {
            $pageObj->render();
        }
        ?>
    </div>
</body>
</html>