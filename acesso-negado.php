<?php
if($_SERVER['REQUEST_METHOD'] === 'GET'){
    if($_GET['id'] == 'erro-login'){
        $imgBanner = '<img src="midias/icones-banners/negado.png" alt="Garoto segurando uma lata de lixo apontando para um sinal de exclamação">';
        $msg = '<h2>Opa! Parece que você não está logado em nosso site!</h2>Para ter acesso a essa e outras funcionalidades da página, realize seu login ou cadastre-se!';
        $btn1 = '<button class="button" id="btnVoltar">VOLTAR</button>';
        $btn2 = '<a href="loginPage.php"><button class="button">ENTRAR</button></a>';
    }
    else if($_GET['id'] == 'acesso-negado'){
        $imgBanner = '<img src="midias/icones-banners/aviso.png" alt="Garoto segurando uma lata e um megafone">';
        $msg = '<h2>Parado aí! Parece que você não tem acesso a essa página.</h2>Clique em voltar e continue navegando em nosso site!';
        $btn1 = '<button class="button" id="btnVoltar">VOLTAR</button>';
        $btn2 = '';
    }
}

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Acesso negado</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200..1000;1,200..1000&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="styles/style-padrao.css">
    <style>
        .banner{
            height: 100vh;
            width: 50vw;
            flex-direction: column;
            text-align: center;
        }
        .img-banner img{
            width: 260px;
        }
        .msg-banner{
            font-size: 18px;
            font-weight: bold;
        }
        .btns-banner{
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 8vw;
        }
        .button{
            font-size: 14px;
        }
        #logo{
            position: fixed;
            top: 8px;
            left: 15px;
            width: 90px;
        }

        @media screen and (max-width: 510px) {
            .banner{
                margin-top: 50px;
            }
        }

        @media screen and (min-width: 800px) {
            .img-banner img{
                width: 60%;
            }
        }
    </style>
</head>
<body>
    <a href="index.html"><img id="logo" src="imagens/icon.ico" alt="Logo EcoMoment"></a>
    <div class="center nunito">
        <div class="center banner">
            <div class="img-banner mb-3"><?=$imgBanner?></div>
            <div class="msg-banner my-3"><?=$msg?></div>
            <div class="btns-banner mt-3">
                <?=$btn1?>
                <?=$btn2?>
            </div>
        </div>
    </div>  

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script>
        document.getElementById("btnVoltar").addEventListener("click", function(){
            history.back();
        });
    </script>
</body>
</html>