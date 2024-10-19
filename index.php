
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <title>Subscriber</title>
</head>
<body>
    <div class="wrapper">
        <div class="icon"><i class="far fa-envelope"></i></div>
        <div class="content">
            <header>Subscriber</header>
            <p>Подписка на мой ГитХаб и получение последних новостей</p>
        </div>
        <form action="index.php" method="POST">
            <?php
                include ("email.php");
            ?>
            <div class="field">
                <input type="text" name="email" placeholder="Введите ваш email" required>
            </div>
            <div class="field btn">
                <input type="submit" name="subscribe" value="Подписаться">
            </div>
        </form>
        <div class="info">Ваша информация остается конфиденциальной</div>
    </div>
</body>
</html>
