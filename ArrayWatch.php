<?php

class UsersWatch{

    public $users = [

        ['login' => 'Vasisualiy', 'password' => '12345', 'lang' => 'ru'],

        ['login' => 'Afanasiy', 'password' => '54321', 'lang' => 'en'],

        ['login' => 'Petro', 'password' => 'EkUC42nzmu', 'lang' => 'ua'],

        ['login' => 'Pedrolus', 'password' => 'Cogito_ergo_sum', 'lang' => 'it'],

        ['login' => 'Sasha', 'password' => 'Ignorantia_non_excusat ' ], // добавить сюда!!!!!!!!!!

    ];

    public function watch(){

        foreach($this -> users as $base_key => $base_value){
            echo '<br/>';
            foreach($base_value as $key => $value){
                echo $value.' ';
            }
        }
    }

}