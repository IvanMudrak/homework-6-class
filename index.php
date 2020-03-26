<?php
include 'ArrayWatch.php';

//Создание объекта массива пользователей
$array = new UsersWatch();

//Выводит массива (для удобства ввода паролей)
echo $array ->watch();

?>

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