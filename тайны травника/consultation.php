<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $phone = htmlspecialchars($_POST['phone']);
    $message = htmlspecialchars($_POST['message']);
    
    $to = "goopluck2756@gmail.com";
    $subject = "Новая заявка на консультацию";
    $body = "Имя: $name\nТелефон: $phone\nСообщение: $message";
    
    if (mail($to, $subject, $body)) {
        echo "<script>alert('Заявка отправлена!');</script>";
    } else {
        echo "<script>alert('Ошибка отправки. Попробуйте позже');</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Запись на консультацию</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <header>
        <!-- Тот же header что и на главной -->
    </header>

    <section class="consultation-form">
        <div class="container">
            <h2>Оставьте заявку</h2>
            <form method="POST" action="">
                <input type="text" name="name" placeholder="Ваше имя" required>
                <input type="tel" name="phone" placeholder="Телефон" required>
                <textarea name="message" placeholder="Опишите ваш запрос"></textarea>
                <button type="submit" class="btn">Отправить</button>
            </form>
        </div>
    </section>

    <footer>
        <!-- Тот же footer что и на главной -->
    </footer>
</body>
</html>