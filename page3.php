<?php
// открываем сессию
session_start();
?>




<html>
<body>
<p style="font-size: 45px; color: green"><?php echo $_SESSION['language'].' '.$_SESSION['logged_user']; ?></p>
<a href="index.php"><br/>на главную</a>
</body>
</html>