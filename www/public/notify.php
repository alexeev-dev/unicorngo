<?php

session_start();

$config = require_once('notify.config.php');

if(empty($config) || !is_array($config) || empty($config['email']) || empty($config['name']) || empty($config['subject']) || empty($config['message'])) {
    die('Empty config');
}

if(!empty($_POST['password']) && empty($_SESSION['auth'])) {
    if($_POST['password'] == $config['password']) {
        $_SESSION['auth'] = TRUE;
    }
}

if(empty($_SESSION['auth'])) {
    echo '<p>Введите ваш пароль чтобы получать уведомления:</p><form action="notify.php" method="POST"><input type="password" name="password"><input type="submit" value="Отправить"></form>';
    die();
}

if(!isset($_GET['activate'])) {
    echo '<h2>Вы действительно хотите получать оповещания и добавиться в наш список?</h2>';
    echo '<h3><a href="notify.php?password=' . $password . '&activate" style="margin-right: 50px">Отправить</a><a href="index.html">Не оправлять</a></h3>';
    die();
}

$headers = 'Content-type: text/html; charset="utf-8"\r\n';
$headers .= 'From: ' . $config['name'] . ' <' . $config['email'] . '>\r\n';
$headers .= 'Subject: ' . $config['subject'] . '\r\n';
$headers .= 'Content-type: text/html; charset="utf-8"';

$file = @fopen("subscription_list.txt", "r");

if($file) {
    $notifications_sent = 0;

    while($line = fgets($file)) {
        $email = trim($line);

        if(!$email) {
            continue;
        }

        $email = htmlspecialchars($email);
        $message = $config['message'];

        $send_result = mail($email, $config['subject'], $message, $headers);

        if($send_result) {
            $notifications_sent++;
            echo '<strong>' . $email . "</strong> был добавлен в базу.<br>";
        }
        else {
            echo 'Ваш запрос на <strong>' . $email . "</strong> был отвергнут.<br>";
        }
    }

    fclose($file);
}

echo "<br>-----------------------------<br>Notifications sent: " . $notifications_sent;
?>