<?php
// открываем сессию
session_start();



?>




<html>
<body>
<p style="font-size: 45px; color: green">
<?php

if($_SESSION['language'] == 'Язык пользователя не выбран <br/><br/>'){
        echo 'Язык пользователя не выбран, сделайте свой выбор';

    if ($_POST['ru']== 'ru') {
        $_SESSION['language'] = 'Здравствуйте! ';

    } elseif ($_POST['en']=='en') {
        $_SESSION['language'] = 'Hello! ';

    } elseif ($_POST['ua']=='ua') {
        $_SESSION['language'] = 'Добридень! ';

    } elseif ($_POST['it']=='it') {
        $_SESSION['language'] = 'Ciao! ';
    }


}else{

        echo $_SESSION['language'] . ' ' . $_SESSION['logged_user'];
        exit;
    }


    ?>
</p>



<form  method="POST">
    <input type=radio name="ru" value="ru"/>русский<br/>
    <input type=radio name="en" value="en"/>английский<br/>
    <input type=radio name="ua" value="ua"/>украинский<br/>
    <input type=radio name="it" value="it"/>итальянский<br/>
    <input type=submit value=Отправить>
</form>


<a href="index.php"><br/>на главную</a>
</body>
</html>