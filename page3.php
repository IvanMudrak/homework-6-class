<?php

// открываем сессию
session_start();

//Подключаю файл
include 'LangRe-selection.php';

?>

<html>
<body>
<p style="font-size: 45px; color: green">
<?php

//создаю объект класса для повторного выбора языка приветствия ( если оно не выбран )
$langRe = new LanguageReSelection();

//Вызываю метод
$langRe -> ReSelection();

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