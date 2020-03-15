<?php
$users = [

    ['login' => 'Vasisualiy', 'password' => '12345', 'lang' => 'ru'],

    ['login' => 'Afanasiy', 'password' => '54321', 'lang' => 'en'],

    ['login' => 'Petro', 'password' => 'EkUC42nzmu', 'lang' => 'ua'],

    ['login' => 'Pedrolus', 'password' => 'Cogito_ergo_sum', 'lang' => 'it'],

    ['login' => 'Sasha', 'password' => 'Ignorantia_non_excusat ' ], // здесь пробел в конце пароля!!!!!!!!!!

];


/*//дополнительный выбор языка ( если его нет)
$language_input = $_POST['language'];
var_dump($language_input);*/




//логин вводимый пользователем
$login_input = $_POST['login'];

//пароль вводимый пользователем
$password_input = $_POST['password'];

//переменная оповещает о незарегистрированом пользователе
$error = 0;

//переменная для выбора языка приветствия
$lang = '';

//выбирает язык приветствия
foreach($users as $base_key => $base_value){

if($login_input == $base_value['login']) {

    if ($base_value['lang'] == 'ru') {
        $lang = 'Здравствуйте! ';
        break;
    } elseif ($base_value['lang'] == 'en') {
        $lang = 'Hello! ';
        break;
    } elseif ($base_value['lang'] == 'ua') {
        $lang = 'Добридень! ';
        break;
    } elseif ($base_value['lang'] == 'it') {
        $lang = 'Ciao! ';
        break;
    }else{
        $lang = 'Язык пользователя не выбран, выберите: <br/><br/>';
    }
}

}

echo'<br/>';


//Смотрим всех зарегистрированых пользователей
foreach($users as $base_key => $base_value){
    echo '<br/>';
    foreach($base_value as $key => $value){
        echo $value.' ';
    }
}

echo'<br/>';

//Условие приветствия , фильтрует незарегистрированных пользователей
foreach($users as $base_key => $base_value){
    echo '<br/>';
    foreach($base_value as $key => $value){

        //если логин совпадает
        if($value == $login_input){
            foreach($base_value as $key => $value){

                //проверяю совпадает ли пароль
                if($value == $password_input ){
                    echo '<strong style="color:#1a1fdc">' .$lang.$login_input.'</strong><br/>';
                    $error = 1;
                }
            }
        }
    }
}
if($error == 0)
    echo '<strong style="color:red">Внимание! Такого пользователя нет в базе!<br/></strong>';


?>


<form method="POST">
    <p>Введите логин </p><input type="" name="login"/>
    <p>Введите пароль </p><input type="" name="password"/>
    <p>Выбрать язык ( если нужно ) 1 - ru, 2 - en, 3- ua, 4-it </p><input type="" name="language"/>
    <button type="submit">click here</button>
</form>


