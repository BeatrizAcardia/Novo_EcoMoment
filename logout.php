<?php
if(isset($_COOKIE['user']) and isset($_COOKIE['senha'])){
    setcookie('user', 0, time()-604800, '/');
    setcookie('senha', 0, time()-604800, '/');
    header('Location: loginPage.php');
}
else{
    header('Location: index.php');
}