<?php 

if(isset($_COOKIE['user']) and isset($_COOKIE['senha'])){
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
                <a href="perfil.php?type=conta&user='.$_COOKIE['user'].'" class="col-6 btn btn-success"><i class="bi bi-person-fill"></i> Minha conta</a>
                <a href="logout.php" class="col-6 btn btn-danger"><i class="bi bi-box-arrow-left"></i> Sair</a>
                </div>
        </div>
    </div>';
}
else{
    $offcanvas = '';
}

if($_GET['type'] == 'conta' and ($_GET['user'] != $_COOKIE['user'])){
    header('location: acesso-negado.php?id=acesso-negado');
}
else{
    require_once('../Controller/script-conta.php');

    if($_SERVER['REQUEST_METHOD'] === 'POST'){
        if((! isset($_FILES['ft-perfil']) and $_POST['nome'] == '' and $_POST['bio'] == '') or (! isset($_FILES['ft-perfil']) and $_POST['nome'] == $user and $_POST['bio'] == $biog)){
            // echo '<script>alert("Nenhum campo alterado")</script>';
        }
        else{
            $nome = $_POST['nome'];
            $bio = $_POST['bio'];
            $foto = '';
            if($nome == ''){
                $nome = $user;
            }
            if($bio == ''){
                $bio = $biog;
            }
            if(! isset($_FILES['ft-perfil'])){
                $foto = ''; //Adicionar a verificação certinha de nulo ou igual de acordo com a atual para a imagem
                /*
                $nomeArq = $_FILES['arquivo']['name'];
                $tipo = $_FILES['arquivo']['type'];
                $nomeTemp = $_FILES['arquivo']['tmp_name'];
                $tamanho = $_FILES['arquivo']['size'];
                $erros = array();

                $tamanhoMaximo = 1024 * 1024 * 5;
                if($tamanho > $tamanhoMaximo){
                    $erros[] = 'Seu arquivo excede o tamanho máximo<br>';
                }

                $arquivosPermitidos = ['png','jpg','jpeg'];
                $extensao = pathinfo($nomeArq, PATHINFO_EXTENSION);
                if(! in_array($extensao, $arquivosPermitidos)){
                    $erros[] = 'Arquivo não permitido';
                }

                $typesPermitidos = ['image/png','image/jpg','image/jpeg'];
                if(! in_array($extensao, $arquivosPermitidos)){
                    $erros[] = 'Tipo de arquivo não permitido';
                }

                // list($larguraOriginal, $alturaOriginal) = getimagesize($nomeArq);
                // if(($larguraOriginal != 64 and $alturaOriginal != 64) or $larguraOriginal/$alturaOriginal != 1){
                //     $erros[] = 'Imagem fora das dimensões permitidas';
                // }

                if(! empty($erros)){
                    foreach($erros as $erro){
                        $msgFoto .= $erro.'<br>';
                    }
                } else{
                    $caminho = 'midias/imagens-ideias/';
                    $novo_nome = md5(time().rand(0,999)).'.'.$extensao;
                    if(move_uploaded_file($nomeTemp, $caminho.$novo_nome)){
                        echo 'Sucesso';
                    }
                */
            }
            include '../database/connection.php';

            $sql = 'UPDATE EcoMomentBD_UsuarioWeb SET NomeWeb = "'.$nome.'", Biografia = "'.$bio.'" WHERE idUsuarioWeb = '.$id;

            $stmt = $con->prepare($sql);
            if($stmt->execute()){
                // echo '<script>alert("Sua conta foi atualizada com sucesso!");</script>';

                $sql2 = 'SELECT * FROM EcoMomentBD_UsuarioWeb WHERE idUsuarioWeb = '.$id;
                $result2 = $con->query($sql2);

                if ($result2->num_rows > 0){
                    $existe = true;
                    while ($row = $result2->fetch_assoc()){
                        $user = $row['NomeWeb'];
                        $biog = $row['Biografia'];
                    }
    }
            }else{
                // echo '<script>alert("ERRO \n Não foi possível atualizar sua conta. Verifique se há algum erro ou tente novamente.");</script>';
            }
            $con->close();

        }
    }
}

if($_GET['type'] == 'conta' && $_GET['user'] == $_COOKIE['user']){
    $titulo = 'Minha conta';
}
else{
    $titulo = $_GET['user'];
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=$titulo?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200..1000;1,200..1000&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="styles/style-padrao.css">
    <link rel="stylesheet" href="styles/style-publicar-ideia.css">
    <link rel="stylesheet" href="styles/style-conta.css">
    <link rel="shortcut icon" href="midias/favicon.png" type="image/x-icon">
    <style>
        #btn-modal{
            display: flex;
            justify-content: center;
            text-align: center;
        }
    </style>
</head>
<body>
    <header>
        <?php
            require_once('navbar/navbar.php');
        ?>
    </header>

    <main id="navbarMargin">
        <?php
            $btn = $btn2 = '';
            if($type == 'conta'){
                echo'<section class="container mb-4"><h1 class="display-5 fw-bold text-center mb-2">MINHA CONTA</h1></section>';
                $btn1 = '<button class="button btn-follow my-2 d-none d-md-block" data-bs-toggle="modal" data-bs-target="#modal-editar">Editar</button>';
                $btn2 = '<button class="button btn-follow my-2 d-block d-md-none" data-bs-toggle="modal" data-bs-target="#modal-editar">Editar</button>';
            }
            else{
                $btn1 = '<button class="button btn-follow my-2 d-none d-md-block">Seguir</button>';
                $btn2 = '<button class="button btn-follow my-2 d-block d-md-none">Seguir</button>';
            }
        ?>
        <!-- Container com os dados -->
        <section class="mb-4 px-2 nunito">
            <div class="container container-conta p-4">
                <div class="row">
                    <div class="col-12 col-lg-6 col-xl-5">
                        <div class="row">
                            <!-- Coluna foto perfil -->
                            <div class="col-12 col-md-6 center col-perfil">
                                <img class="img-perfil" src="midias/icones-perfil/perfil.png" alt="Círculo com silhueta de pessoa">
                                <!-- <button class="btn-perfil btn-follow my-2 d-none d-md-block">
                                    Editar
                                </button> -->
                                <?=$btn1?>
                                <button class="button btn-share my-2 d-none d-md-block">Compartilhar</button>
                            </div>
                            <!-- Dados -->
                            <div class="col-12 col-md-6 col-dados">
                                <h2 class="mb-1 nome-user"><?=$user?></h2>
                                <div class="row row-topico my-1">
                                    <div class="col-6 txt-c"><span class="topico">Seguidores:</span> <?=$qtdeS1?></div>
                                    <div class="col-6 txt-c"><span class="topico">Seguindo:</span> <?=$qtdeS2?></div>
                                </div>
                                <div class="row row-topico my-1">
                                    <div class="col-12">
                                        <span class="topico">Sobre mim: </span>
                                        <span class="bio" id="bio"><?=$biog?></span>
                                    </div>
                                </div>
                                <div class="row row-topico my-1">
                                    <div class="col-6 txt-c"><span class="topico">Postagens:</span> <?=$qtdeP?></div>
                                    <div class="col-6 txt-c"><span class="topico">Curtidas:</span> <?=$qtdeC?></div>
                                </div>
                                <div class="mt-1">
                                    <div class="col-12 reputacao">
                                        <span class="topico">Reputação:</span> 
                                        <?php
                                            echo $usuario->carregaReputacaoUser($id, $rep);
                                        ?>
                                    </div>
                                </div>
                                <div class="row">
                                    <?=$btn2?>
                                    <button class="button btn-perfil btn-share my-1 d-block d-md-none">
                                        Compartilhar
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xl-7 center col-bg">
                        <div class="back"></div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Postagens -->
        <section class="container my-4 px-2 nunito">
            <div class="row center mb-3">
                <div class="d-none d-sm-inline-block col-sm-3 col-lg-4"><div class="row linha"></div><div class="row"><br></div></div>
                <div class="col-12  col-sm-6 col-lg-4"><h1 class="display-5 fw-bold text-center mb-2">PUBLICAÇÕES</h1></div>
                <div class="d-none d-sm-inline-block col-sm-3 col-lg-4"><div class="row linha"></div><div class="row"><br></div></div>
            </div>
            <div class="center2">
                <div class="container-fluid row center ideias mb-3">
                    <?=$melhorPost?>
                </div>
                <div class="container-fluid row center ideias">
                    <?php
                        //Carregamento das ideias de reutilazação
                        if ($existe){
                            foreach($postagens2 as $post){
                                echo $post;
                            }
                        }
                        else{
                            echo '<div class="novaIdeia">Nenhuma postagem cadastrada</div>';
                        }
                    ?>
                </div>
            </div>
        </section>
        <?php
        if($type == 'conta'){
            include_once('botao.html');
        }
        ?>
    </main>

    <footer>
        <?php
            require_once('rodape/rodape.html');
        ?>
    </footer>

    <!-- Modal -->
    <div class="modal fade" id="modal-editar" tabindex="-1" aria-labelledby="modal-editarLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header center4">
                <div class="center" style="width: 100%;">
                    <h1 class="modal-title fs-3 text-center center" id="modal-editarLabel">EDITAR MINHA CONTA</h1>
                </div>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form method="post" action="" enctype="multipart/form-data">
                    <div class="form-body center2">
                        <div class="mb-4 center2 w-100">
                            <span class="form-label">Foto de perfil:</span>
                            <input class="form-control d-none" type="file" name="ft-perfil" id="foto">
                            <label for="foto" class="" id="lbl-ft">
                                <div id="area-ft"><img id="ft" src="midias/icones-perfil/perfil.png" alt="Círculo com silhueta de pessoa"></div>
                                <div id="nome-ft">Nenhum arquivo selecionado</div>
                                <div type="button" class="button" id="btn-ft">ESCOLHER</div>
                            </label>
                        </div>
                        <div class="mb-2">
                            <label for="nome" class="form-label">Nome de usuário:</label>
                            <input class="form-control" type="text" name="nome" id="nome" placeholder="Até 30 caracteres" maxlength="30" value="<?=$user?>">
                        </div>
                        <div class="my-3">
                            <label for="biog" class="form-label">Sobre mim:</label>
                            <textarea class="form-control" name="bio" id="biog" cols="23" rows="4" placeholder="Até 150 caracteres" maxlength="150"><?=$biog?></textarea>
                        </div>
                    </div>
                    <div class="center footer nunito mt-3">
                        <button id="btn-modal" type="submit" class="button btn-follow"><div class="center">Salvar</div></button>
                        <button id="btn-modal" type="button" class="button btn-share" data-bs-dismiss="modal"><div class="center">Cancelar</div></button>
                    </div>
                </form>
            </div>
            </div>
        </div>
    </div>

    <?php
        echo $offcanvas;
    ?>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script>
        const popoverTriggerList = document.querySelectorAll('[data-bs-toggle="popover"]')
        const popoverList = [...popoverTriggerList].map(popoverTriggerEl => new bootstrap.Popover(popoverTriggerEl))
    </script>

    <!-- Ver mais -->
    <script>
        var bio = document.getElementById('bio');
        var biog = bio.innerText;
        var biog2 = '';
        if(biog.length > 50){
            for (let index = 0; index < 50; index++) {
                biog2 += `${biog.charAt(index)}`;
            }
            biog2 = `${biog2}... <span id="ver-mais" onclick="ver()">Ver mais</span>`;
            bio.innerHTML = biog2;
        }

        function ver(){
            if (bio.innerHTML.toString() == biog2.toString()){
                bio.innerHTML = `${biog}... <span id="ver-mais" onclick="ver()">Ver menos</span>`;
            }
            else {
                bio.innerHTML = biog2;
            }
        }
    </script>

    <!-- Foto -->
    <script>
        document.getElementById('foto').addEventListener('change', function(){
            document.querySelector('#nome-ft').textContent = this.files[0].name;
            document.getElementById('area-ft').innerHTML = '<img id="ft" src="midias/icones-form-publicar/certo.png" alt="Ícone de verificação correta">';
        });
    </script>

    <!-- Ajax modal -->
    <script src="../Controller/alerts.js"></script>
    <!-- <script src="../Controller/ajax-perfil.js"></script> -->

</body>
</html>