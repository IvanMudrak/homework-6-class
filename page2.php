<?php
// открываем сессию
session_start();
include 'Array.php';
// данные были отправлены формой?
if($_POST['send']){

    $arraypage2 = new Users();
    echo $arraypage2 ->users;

    /*$users = [

        ['login' => 'Vasisualiy', 'password' => '12345', 'lang' => 'ru'],

        ['login' => 'Afanasiy', 'password' => '54321', 'lang' => 'en'],

        ['login' => 'Petro', 'password' => 'EkUC42nzmu', 'lang' => 'ua'],

        ['login' => 'Pedrolus', 'password' => 'Cogito_ergo_sum', 'lang' => 'it'],

        ['login' => 'Sasha', 'password' => 'Ignorantia_non_excusat ' ], // добавить сюда!!!!!!!!!!

    ];*/



//переменная для выбора языка приветствия
    $_SESSION['language'] = '';

//выбирает язык приветствия
    foreach($arraypage2 as $base_key => $base_value){

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



    // фильтрует незарегистрированных пользователей
    foreach($arraypage2 as $base_key => $base_value){
        foreach($base_value as $key => $value){

            //если логин совпадает
            if($value == $_POST['login']){
                foreach($base_value as $key => $value){

                    //проверяю совпадает ли пароль
                    if($value == $_POST['password']){
                        $_SESSION['logged_user'] = $_POST['login'];
                        header("Location: page3.php");
                        exit;
                    }
                }
            }
        }
    }



}






?>

<html><body>
<p style="font-size: 50px; color: red;">Вы ввели неверный пароль или логин!</p>
<a href="index.php"><br/>на главную</a>
</body></html>