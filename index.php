<?php

// массив зарегистрированных пользователей
$users = [

    ['login' => 'Vasisualiy', 'password' => '12345', 'lang' => 'ru'],

    ['login' => 'Afanasiy', 'password' => '54321', 'lang' => 'en'],

    ['login' => 'Petro', 'password' => 'EkUC42nzmu', 'lang' => 'ua'],

    ['login' => 'Pedrolus', 'password' => 'Cogito_ergo_sum', 'lang' => 'it'],

    ['login' => 'Sasha', 'password' => 'Ignorantia_non_excusat ' ], // добавить сюда!!!!!!!!!!

];

//выводим на экран  всех зарегистрированых пользователей ( для удобства ввода )
foreach($users as $base_key => $base_value){
    echo '<br/>';
    foreach($base_value as $key => $value){
        echo $value.' ';
    }
}

?>

//Форма ввода
<div style=" margin: auto; border: 1px solid red; width:250px; height:150px; display: flex;align-items: center;justify-content: center; margin-top: 250px; ">

    <form action="page2.php" method="post">
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
                <td colspan="2" style="text-align: center"><input type="submit" name="send" value="Войти"></td>
            </tr>
        </table>
    </form>
</div>