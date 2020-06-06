<?php
ini_set('display_errors', '1');

$path = "./chat.json";
$messages = json_decode(file_get_contents($path));

$user = ["name" => "Tom","color" => "blue", "message" => "Hello PHP!"];

$userName = $user["name"];
$userColor = $user["color"];
$userMessage = $user["message"];


?>

<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta http-equiv="X-UA-Compatible" content="ie=edge" />
        <title>Chat</title>
        <link rel="stylesheet" href="./css/style.css">

    </head>

    <body>
        <div class="box">
        <?php $number = 20 + 22; ?>
        <div class="head">
            <h1 class="chat-ttl" style="color: <?= $userColor ?>">ChatPage</h1>
            <a href="#" class="logout-btn">Log Out</a>
            <?= "ログイン" ?>
            <?= $number ?>
            <?php echo $number ?>

        </div>
        <div class="chat-box">
            <div class="chat-info">
                <p>Name</p>
                <p><?= $userName ?></p>
                <p>Color</p>
                <p><?= $userColor ?></p>
            </div>
            <ul class="chat-list">
                <?php foreach ($messages as $msg): ?>
                <li style="color:<?= $msg->color ?>">
                    <p><?= $msg->name ?></p>
                    <p><?= $msg->message ?></p>
                </li>
                <?php endforeach; ?>
            </ul>
    
        </div>
        <div class="foot">
            <form class="chat-form" action="input.php" method="post" class="chat-form">
                <input type="hidden" name="message[name]" value="<?= $userName ?>">
                <input type="hidden" name="message[color]" value="<?= $userColor ?>">
                <input class="chat-input" type="text" name="message[message]" />
                <button class="chat-button" type="submit">Entering a room</button>
            </form>
        </div>


    </body>
</html>