<?php
// открываем сессию
session_start();

include 'UsersVerification.php';
include 'Greetings.php';

// данные были отправлены формой?
if($_POST['send']){

    //Создание объекта для проверки пользователей
    $UserVerification = new UsersVerification();

    //Создание объекта для выбора языка приветствия
    $GreetingsChoice = new GreetingsChoice();

    //выбирает язык приветствия
    $GreetingsChoice ->greetings();

    //проверка логина и пароля пользователя
    $UserVerification ->Verification();
}
?>

<html><body>
<p style="font-size: 50px; color: red;">Вы ввели неверный пароль или логин!</p>
<a href="index.php"><br/>на главную</a>
</body></html>