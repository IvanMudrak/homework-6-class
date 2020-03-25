<?php
// открываем сессию
session_start();
include 'UsersVerification.php';
// данные были отправлены формой?
if($_POST['send']){

    $UserVerification = new UsersVerification();

//переменная для выбора языка приветствия
    $_SESSION['language'] = '';

//выбирает язык приветствия
    foreach($UserVerification -> users as $base_key => $base_value){

        if($_POST['login'] == $base_value['login']) {

            if ($base_value['lang'] == 'ru') {
                $_SESSION['language'] = 'Здравствуйте! ';
                break;
            } elseif ($base_value['lang'] == 'en') {
                $_SESSION['language'] = 'Hello! ';
                break;
            } elseif ($base_value['lang'] == 'ua') {
                $_SESSION['language'] = 'Добридень! ';
                break;
            } elseif ($base_value['lang'] == 'it') {
                $_SESSION['language'] = 'Ciao! ';
                break;
            }else{
                $_SESSION['language'] = 'Язык пользователя не выбран <br/><br/>';
            }
        }

    }

//проверка логина и пароля пользователя
$UserVerification ->Verification();



}






?>

<html><body>
<p style="font-size: 50px; color: red;">Вы ввели неверный пароль или логин!</p>
<a href="index.php"><br/>на главную</a>
</body></html>