<?php

unset($_COOKIE['capa']);
setcookie("capa", $_POST['ApplyCapa'], time()+60*60*24*30, '/');

header('location:../user_home.php');

?>