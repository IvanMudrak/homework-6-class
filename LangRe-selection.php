<?php

class LanguageReSelection{

    public function ReSelection()
    {
        if ($_SESSION['language'] == 'Язык пользователя не выбран <br/><br/>') {
            echo 'Язык пользователя не выбран, сделайте свой выбор';

            if ($_POST['ru'] == 'ru') {
                $_SESSION['language'] = 'Здравствуйте! ';

            } elseif ($_POST['en'] == 'en') {
                $_SESSION['language'] = 'Hello! ';

            } elseif ($_POST['ua'] == 'ua') {
                $_SESSION['language'] = 'Добридень! ';

            } elseif ($_POST['it'] == 'it') {
                $_SESSION['language'] = 'Ciao! ';
            }
        } else {
            echo $_SESSION['language'] . ' ' . $_SESSION['logged_user'];
            exit;
        }

    }

}


