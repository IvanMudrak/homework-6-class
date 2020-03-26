<?php

class UsersVerification{

    public $users = [

        ['login' => 'Vasisualiy', 'password' => '12345', 'lang' => 'ru'],

        ['login' => 'Afanasiy', 'password' => '54321', 'lang' => 'en'],

        ['login' => 'Petro', 'password' => 'EkUC42nzmu', 'lang' => 'ua'],

        ['login' => 'Pedrolus', 'password' => 'Cogito_ergo_sum', 'lang' => 'it'],

        ['login' => 'Sasha', 'password' => 'Ignorantia_non_excusat ' ], // добавить сюда!!!!!!!!!!

    ];

    public function Verification(){

    // фильтрует незарегистрированных пользователей
        foreach ($this -> users as $value) {
            if ($value['login'] == $_POST['login'] && $value['password'] == $_POST['password']) {
                $_SESSION['logged_user'] = $_POST['login'];
                header("Location: page3.php");
                exit;
            }
        }

    }





}