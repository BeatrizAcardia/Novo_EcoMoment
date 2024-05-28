<?php
if(isset($_COOKIE['user']) and isset($_COOKIE['senha'])){
    require 'form-publicar-ideia.php';
}
else{
    echo '<h1>Você não está logado</h1><hr><p>Clique <a href="loginPage.php">aqui</a> para realizar seu login e acessar esse e outros recursos.</p>';
}