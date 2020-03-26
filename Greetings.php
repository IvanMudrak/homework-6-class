<?php

class GreetingsChoice{
    public $users = [

        ['login' => 'Vasisualiy', 'password' => '12345', 'lang' => 'ru'],

        ['login' => 'Afanasiy', 'password' => '54321', 'lang' => 'en'],

        ['login' => 'Petro', 'password' => 'EkUC42nzmu', 'lang' => 'ua'],

        ['login' => 'Pedrolus', 'password' => 'Cogito_ergo_sum', 'lang' => 'it'],

        ['login' => 'Sasha', 'password' => 'Ignorantia_non_excusat ' ], // добавить сюда!!!!!!!!!!

    ];




public function greetings(){
//выбирает язык приветствия
    foreach ($this->users as $base_key => $base_value) {

        if ($_POST['login'] == $base_value['login']) {

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
            } else {
                $_SESSION['language'] = 'Язык пользователя не выбран <br/><br/>';
            }
        }

    }

}




}