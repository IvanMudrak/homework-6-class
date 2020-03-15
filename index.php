<?php
session_start();

//логин вводимый пользователем
$login_input = $_POST['login'];

if(!isset($_SESSION['name'])){
    $_SESSION['name'] = $login_input;
}



$users = [

    ['login' => 'Vasisualiy', 'password' => '12345', 'lang' => 'ru'],

    ['login' => 'Afanasiy', 'password' => '54321', 'lang' => 'en'],

    ['login' => 'Petro', 'password' => 'EkUC42nzmu', 'lang' => 'ua'],

    ['login' => 'Pedrolus', 'password' => 'Cogito_ergo_sum', 'lang' => 'it'],

    ['login' => 'Sasha', 'password' => 'Ignorantia_non_excusat ' ], // добавить сюда!!!!!!!!!!

];



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



echo $_SESSION['name'];


?>

<h1 style="display: flex;align-items: center;justify-content: center  ";>Главная  </h1>

<div style=" margin: auto; border: 1px solid red; width:250px; height:150px; display: flex;align-items: center;justify-content: center ">
    <form method="post">
        <table>
            <tr>
                <td><label >Логин</label></td>
                <td><input type="" name="login"></td>
            </tr>
            <tr>
                <td><label >Пароль</label></td>
                <td><input  type="" name="password"></td>
            </tr>
            <tr>
                <td colspan="2" style="text-align: center"><input type="submit" value="Войти"></td>
            </tr>
        </table>
    </form>
</div>

<a href="page2.php">переход на вторую страницу</a>
