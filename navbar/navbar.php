<?php
if((isset($_COOKIE['user'])) and (isset($_COOKIE['senha']))){
    $campoLogin = '<div class="d-none d-md-flex">
                        <div class="center">
                            <img class="img-conta" src="midias/icones-perfil/perfil.png" alt="Silhueta de busto" data-bs-toggle="offcanvas" href="#offcanvasConta" role="button" aria-controls="offcanvasConta">
                        </div>
                    </div>
                    <li class="nav-item d-flex d-md-none">
                        <a class="nav-item navbar-link padding-navbar" href="perfil.php?type=conta&user='.$_COOKIE['user'].'">
                            <button type="button" class="cta" onclick="cliquei()">
                                <span class="contato">Minha conta</span>
                                <path
                                    id="Path_10"
                                    data-name="Path 10"
                                    d="M8,0,6.545,1.455l5.506,5.506H-30V9.039H12.052L6.545,14.545,8,16l8-8Z"
                                    transform="translate(30)"></path>
                            </button>
                        </a>
                    </li>
                    <li class="nav-item d-flex d-md-none">
                        <a class="nav-item navbar-link padding-navbar" href="logout.php">
                            <button type="button" class="cta" onclick="cliquei()">
                                <span class="contato">Sair</span>
                                <path
                                    id="Path_10"
                                    data-name="Path 10"
                                    d="M8,0,6.545,1.455l5.506,5.506H-30V9.039H12.052L6.545,14.545,8,16l8-8Z"
                                    transform="translate(30)"></path>
                            </button>
                        </a>
                    </li>';
    $offcanvas = '    
    <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasConta" aria-labelledby="offcanvasContaLabel">
        <div class="offcanvas-header">
            <div class="center">
                <h1 class="offcanvas-title" id="offcanvasContaLabel">CONTA</h1>
            </div>
            <div class="end"><button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button></div>
        </div>
        <div class="offcanvas-body">
            <div class="center nunito canvasBody">
                <img src="midias/icones-perfil/perfil.png" alt="Silhueta de busto">
                <p class="my-3 fw-bold">'.$_COOKIE['user'].'</p>
                <div class="row row-btn-canva">
                    <div class="col-6 btn btn-success"><i class="bi bi-person-fill"></i> Minha conta</div>
                    <div class="col-6 btn btn-danger"><i class="bi bi-box-arrow-left"></i> Sair</div>
                </div>
        </div>
    </div>';
}
else{
    $campoLogin = '<li class="nav-item" id="li-login">
                        <a class="nav-item navbar-link padding-navbar" href="loginPage.php">
                            <button type="button" class="cta" onclick="cliquei()">
                                <span class="login">Login</span>
                                <path
                                    id="Path_10"
                                    data-name="Path 10"
                                    d="M8,0,6.545,1.455l5.506,5.506H-30V9.039H12.052L6.545,14.545,8,16l8-8Z"
                                    transform="translate(30)"></path>
                            </button>
                        </a>
                    </li>
                    <li class="nav-item" id="li-cadastro">
                        <a class="nav-item navbar-link padding-navbar" href="cadastroPage.php">
                            <button type="button" class="cta" onclick="cliquei()">
                                <span class="cadastro">Cadastro</span>
                                <path
                                    id="Path_10"
                                    data-name="Path 10"
                                    d="M8,0,6.545,1.455l5.506,5.506H-30V9.039H12.052L6.545,14.545,8,16l8-8Z"
                                    transform="translate(30)"></path>
                            </button>
                        </a>
                    </li>';
    $offcanvas = '';
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="navbar/navbar.css">
    <title>Navbar</title>
</head>
<body>
    <nav class="navbar navbar-expand-md fixed-top navbar-light">
        <div class="container-fluid navBar">
            <a href="index.html"><span class="navbar-brand"><img src="navbar/logo.ico" alt="Logo EcoMoment" class="navbarIcon"></span></a>
            <button class="navbar-toggler d-md-none rounded" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation" >
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav" id="ul-navbar">
                    <li class="nav-item">
                        <a class="nav-item navbar-link padding-navbar" href="index.html">
                            <button class="cta" onclick="cliquei()">
                                <span class="ideias">Início</span>
                                <path
                                    id="Path_10"
                                    data-name="Path 10"
                                    d="M8,0,6.545,1.455l5.506,5.506H-30V9.039H12.052L6.545,14.545,8,16l8-8Z"
                                    transform="translate(30)"></path>
                            </button>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-item navbar-link padding-navbar" href="ideias-momento.php">
                            <button type="button" class="cta" onclick="cliquei()">
                                <span class="ideias">Ideias</span>
                                <path
                                    id="Path_10"
                                    data-name="Path 10"
                                    d="M8,0,6.545,1.455l5.506,5.506H-30V9.039H12.052L6.545,14.545,8,16l8-8Z"
                                    transform="translate(30)"></path>
                            </button>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-item navbar-link padding-navbar" href="sobre-nos.php">
                            <button type="button" class="cta" onclick="cliquei()">
                                <span class="sobreNos">Sobre nós</span>
                                <path
                                    id="Path_10"
                                    data-name="Path 10"
                                    d="M8,0,6.545,1.455l5.506,5.506H-30V9.039H12.052L6.545,14.545,8,16l8-8Z"
                                    transform="translate(30)"></path>
                            </button>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-item navbar-link padding-navbar" href="index.html#footer">
                            <button type="button" class="cta" onclick="cliquei()">
                                <span class="contato">Contato</span>
                                <path
                                    id="Path_10"
                                    data-name="Path 10"
                                    d="M8,0,6.545,1.455l5.506,5.506H-30V9.039H12.052L6.545,14.545,8,16l8-8Z"
                                    transform="translate(30)"></path>
                            </button>
                        </a>
                    </li>
                    <?=$campoLogin?>
                </ul>
            </div>
        </div>
    </nav>
    <?=$offcanvas?>
</body>
</html>