<?php
    $userEmail = "";
    if(isset($_POST['subscribe'])){
        $userEmail = $_POST['email'];
        if(filter_var($userEmail, FILTER_VALIDATE_EMAIL)){
            $subject = "Спасибо за подписку на мой GitHub";
            $message = "Спасибо за подписку!\nЯ рад, что вы проявили интерес к моим проектам.\nВаш интерес вдохновляет меня на новые достижения.";
            if(mail($userEmail, $subject, $message)){
                ?>
                <div class="alert success"><?php echo "Спасибо за подписку!"?></div>
                <?php
                $userEmail = "";
            }
        } else {
            ?>
            <div class="alert error"><?php echo "Неправильный Email" ?></div>
            <?php
        }
    }
?>
