Goopluck, [08.03.2025 17:18]
<?php
// Обработка формы
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['consultation'])) {
    $name = htmlspecialchars($_POST['name'] ?? '');
    $phone = htmlspecialchars($_POST['phone'] ?? '');
    $message = htmlspecialchars($_POST['message'] ?? '');

    $to = "ваш-email@example.com"; // Укажите свой email
    $subject = "Заявка на консультацию";
    $body = "Имя: $name\nТелефон: $phone\nСообщение: $message";
    
    if (!empty($name) && !empty($phone)) {
        if (mail($to, $subject, $body)) {
            $success_msg = "Заявка отправлена!";
        } else {
            $error_msg = "Ошибка отправки";
        }
    } else {
        $error_msg = "Заполните обязательные поля";
    }
}
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Тайны Травника</title>
    
    <style>
        /* Критические CSS стили */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', sans-serif;
            line-height: 1.6;
            color: #333;
        }

        .container {
            width: 90%;
            max-width: 1200px;
            margin: 0 auto;
        }

        /* Шапка */
        header {
            background: #4CAF50;
            color: white;
            padding: 1rem 0;
        }

        header a {
            color: white;
            text-decoration: none;
            margin: 0 15px;
        }

        /* Главный баннер */
        .hero {
            background: #4CAF50;
            color: white;
            padding: 100px 20px;
            text-align: center;
        }

        .hero h1 {
            font-size: 2.5rem;
            margin-bottom: 1rem;
        }

        .btn {
            background: #FFEB3B;
            color: #333;
            padding: 12px 30px;
            border-radius: 25px;
            text-decoration: none;
            display: inline-block;
            margin-top: 1rem;
        }

        /* Блок услуги */
        .services {
            padding: 4rem 0;
            background: #f5f5f5;
        }

        .service-card {
            background: white;
            border-radius: 8px;
            padding: 2rem;
            margin: 1rem 0;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }

        /* Форма */
        .consultation-form {
            padding: 4rem 0;
        }

        .consultation-form input,
        .consultation-form textarea {
            width: 100%;
            padding: 12px;
            margin: 10px 0;
            border: 1px solid #ddd;
            border-radius: 4px;
        }

        /* Футер */
        footer {
            background: #689F38;
            color: white;
            text-align: center;
            padding: 2rem 0;
        }

        /* Адаптив */
        @media (max-width: 768px) {
            .hero h1 {
                font-size: 2rem;
            }
        }
    </style>
</head>
<body>
    <header>
        <div class="container">
            <a href="#"><strong>Тайны Травника</strong></a>
            <nav>
                <a href="#services">Услуги</a>
                <a href="#facts">Факты</a>
                <a href="#myths">Мифы</a>
                <a href="#blog">Блог</a>
            </nav>
        </div>
    </header>

    <section class="hero">
        <div class="container">
            <h1>Разоблачаем мифы о травах</h1>
            <p class="subtitle">Научные факты и индивидуальные фитоконсультации</p>
            <a href="#consultation" class="btn">Записаться</a>
        </div>
    </section>

    <section id="services" class="services">
        <div class="container">
            <div class="service-card">
                <h3>Индивидуальный подбор</h3>
                <p>С учетом вашего здоровья и образа жизни</p>
            </div>
        </div>
    </section>

Goopluck, [08.03.2025 17:18]
<section id="consultation" class="consultation-form">
        <div class="container">
            <?php if(isset($success_msg)) echo "<p style='color:green'>$success_msg</p>"; ?>
            <?php if(isset($error_msg)) echo "<p style='color:red'>$error_msg</p>"; ?>
            
            <form method="POST">
                <input type="text" name="name" placeholder="Ваше имя" required>
                <input type="tel" name="phone" placeholder="Телефон" required>
                <textarea name="message" placeholder="Ваш запрос"></textarea>
                <button type="submit" name="consultation" class="btn">Отправить</button>
            </form>
        </div>
    </section>

    <footer>
        <div class="container">
            <p>© 2024 Тайны Травника</p>
            <p>Перед применением проконсультируйтесь с врачом</p>
        </div>
    </footer>
</body>
</html>