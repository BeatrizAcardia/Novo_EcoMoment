<?php

    //Conteúdo
    $idMaterial = $_REQUEST['material'];
    if($idMaterial < 1 or $idMaterial > 6){
        $idMaterial = 1;
    }
    $material = '';
    $cor = '';
    $descricao = '';
    $origem = '';
    $descartar = '';
    $alternativas = '';

    include_once '../database/connection.php';
    $con = Connection::getConexao();

    $stmt = $con->prepare('SELECT * FROM prototipo_info_materiais WHERE idMaterial = :idMaterial');
    $stmt->bindParam(':idMaterial', $idMaterial);
    $stmt->execute();

    if ($stmt->rowCount() > 0){
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
            $material = $row['nome'];
            $cor = $row['cor'];
            $descricao = $row['descricao'];
            $origem = $row['origem'];
            $descartar = $row['descartar'];
            $alternativas = $row['alternativas'];
        }
    }
    else{
        echo 'Material não identificado.';
    }

    $con = null;

    switch ($idMaterial){
        case 1:
            {
                $imagem = '<img class="imgMaterial" src="midias/icones-materiais/residuos-plasticos.png" alt="Ícone de sacola plástica">';
                $tabDesc = 'O que é plástico?';
                $tabOrigem = 'De onde vem?';
                $tabDescarte = 'Como fazer o descarte correto?';
                $tabAlt = 'Alternativas sustentáveis';
                break;
            }

        case 2:
            {
                $imagem = '<img class="imgMaterial" src="midias/icones-materiais/metal.png" alt="Ícone de sacola plástica">';
                $tabDesc = 'O que é metal?';
                $tabOrigem = 'De onde vem?';
                $tabDescarte = 'Como fazer o descarte correto?';
                $tabAlt = 'Alternativas sustentáveis';
                break;
            }

        case 3:
            {
                $imagem = '<img class="imgMaterial" src="midias/icones-materiais/papel.png" alt="Ícone de sacola plástica">';
                $tabDesc = 'O que é papel?';
                $tabOrigem = 'De onde vem?';
                $tabDescarte = 'Como fazer o descarte correto?';
                $tabAlt = 'Alternativas sustentáveis';
                break;
            }

        case 4:
            {
                $imagem = '<img class="imgMaterial" src="midias/icones-materiais/vidro.png" alt="Ícone de sacola plástica">';
                $tabDesc = 'O que é vidro?';
                $tabOrigem = 'De onde vem?';
                $tabDescarte = 'Como fazer o descarte correto?';
                $tabAlt = 'Alternativas sustentáveis';
                break;
            }

        case 5:
            {
                $imagem = '<img class="imgMaterial" src="midias/icones-materiais/madeira.png" alt="Ícone de sacola plástica">';
                $tabDesc = 'O que é madeira?';
                $tabOrigem = 'De onde vem?';
                $tabDescarte = 'Como fazer o descarte correto?';
                $tabAlt = 'Alternativas sustentáveis';
                break;
            }

        case 6:
            {
                $imagem = '<img class="imgMaterial" src="midias/icones-materiais/desperdicio-organico.png" alt="Ícone de sacola plástica">';
                $tabDesc = 'O que é resíduo orgânico?';
                $tabOrigem = 'O que é a compostagem?';
                $tabDescarte = 'Passo a passo da compostagem';
                $tabAlt = 'Tipos de compostagem';
                break;
            }
    }

    //---------------------------------------------------------------------------------------------------------------------

    //Ideias
    include '../database/connection.php';
    include '../Model/ideias.php';
    $con = Connection::getConexao();

    $postagens = array();
    $existe = false;

    $stmt2 = $con->prepare('SELECT * FROM prototipo_Postagem_EcoMoment WHERE materialPostagem = :idMaterial ORDER BY idPostagem DESC');
    $stmt2->bindParam(':idMaterial', $idMaterial);
    $stmt2->execute();

    if ($stmt2->rowCount() > 0){
        $existe = true;
        while ($row = $stmt2->fetch(PDO::FETCH_ASSOC)){
            $idIdeia = $row['idPostagem'];
            $nomeIdeia = $row['nomePostagem'];
            $userIdeia = $row['nomeUsuario'];
            $dificuldadeIdeia = $row['dificuldadePostagem'];
            $avaliacao = $row['avaliacaoPostagem'];
            $ideia = new Ideias($idIdeia, $nomeIdeia, $userIdeia, $dificuldadeIdeia, $avaliacao);
            $postagens[] = $ideia->createCardIdeia($nomeIdeia, $userIdeia, $dificuldadeIdeia, $avaliacao, $idIdeia);
        }
    }
    
    $con = null;


    //Filtros

    if(isset($_GET['tipo']) and isset($_GET['filtro'])){
        $tipo = $_GET['tipo'];
        $filtro = $_GET['filtro'];
        if($tipo == 1){
            if($filtro == 2){
                //Filtro 2 - avaliação
                include '../database/connection.php';
                $con = Connection::getConexao();

                $postagens4 = array();
                $existe = false;

                $stmt6 = $con->prepare('SELECT * FROM prototipo_Postagem_EcoMoment WHERE materialPostagem = :idMaterial ORDER BY avaliacaoPostagem DESC');
                $stmt6->bindParam(':idMaterial', $idMaterial);
                $stmt6->execute();

                if ($stmt6->rowCount() > 0){
                    $existe = true;
                    while ($row = $stmt6->fetch(PDO::FETCH_ASSOC)){
                        $idIdeia = $row['idPostagem'];
                        $nomeIdeia = $row['nomePostagem'];
                        $userIdeia = $row['nomeUsuario'];
                        $dificuldadeIdeia = $row['dificuldadePostagem'];
                        $avaliacao = $row['avaliacaoPostagem'];
                        $ideia = new Ideias($idIdeia, $nomeIdeia, $userIdeia, $dificuldadeIdeia, $avaliacao);
                        $postagens4[] = $ideia->createCardIdeia($nomeIdeia, $userIdeia, $dificuldadeIdeia, $avaliacao, $idIdeia);
                    }
                }

                $con = null;

                //Carregamento das ideias de reutilização
                if ($existe){       
                    foreach($postagens4 as $post){
                        echo $post;
                    }
                }
                else{
                    echo '<div class="novaIdeia">Nenhuma postagem cadastrada</div>';
                }
            }
            else if($filtro == 3){
                //Filtro 3 - curtidas
                include '../database/connection.php';

                $postagens5 = array();
                $existe = false;

                $sql7 = 'SELECT * FROM prototipo_Postagem_EcoMoment WHERE materialPostagem = '.$idMaterial.' ORDER BY numeroCurtidas DESC';
                $result7 = $con->query($sql7);

                if ($result7->num_rows > 0){
                    $existe = true;
                    while ($row = $result7->fetch_assoc()){
                        $idIdeia = $row['idPostagem'];
                        $nomeIdeia = $row['nomePostagem'];
                        $userIdeia = $row['nomeUsuario'];
                        $dificuldadeIdeia = $row['dificuldadePostagem'];
                        $avaliacao = $row['avaliacaoPostagem'];
                        $ideia = new Ideias($idIdeia, $nomeIdeia, $userIdeia, $dificuldadeIdeia, $avaliacao);
                        $postagens5[] = $ideia->createCardIdeia($nomeIdeia, $userIdeia, $dificuldadeIdeia, $avaliacao, $idIdeia);
                    }
                }
                
                $con->close();

                //Carregamento das ideias de reutilização
                if ($existe){       
                    foreach($postagens5 as $post){
                        echo $post;
                    }
                }
                else{
                    echo '<div class="novaIdeia">Nenhuma postagem cadastrada</div>';
                }
            }
            else if($filtro == -1){
                //Limpando a seleção
                include '../database/connection.php';

                $sql = 'SELECT * FROM prototipo_info_materiais WHERE idMaterial = '.$idMaterial;
                $result = $con->query($sql);

                if ($result->num_rows > 0){
                    while ($row = $result->fetch_assoc()){
                        $material = $row['nome'];
                        $cor = $row['cor'];
                        $descricao = $row['descricao'];
                        $origem = $row['origem'];
                        $descartar = $row['descartar'];
                        $alternativas = $row['alternativas'];
                    }
                }

                $con->close();

                //Recarregando as ideias
                if ($existe){       
                    foreach($postagens as $post){
                        echo $post;
                    }
                }
                else{
                    echo '<div class="novaIdeia">Nenhuma postagem cadastrada</div>';
                }
            }
            else{
                echo '<script>alertaErro("ERRO! Houve um problema ao carregar o filtro.\nTente novamente, recarregue a página ou verifique sua conexão com a internet.");</script>';
            }
        }
        else if($tipo == 2){
            if($filtro == 1){
                //Dificuldade - fácil
                include '../database/connection.php';

                $postagens1 = array();
                $existe = false;

                $sql3 = 'SELECT * FROM prototipo_Postagem_EcoMoment WHERE materialPostagem = '.$idMaterial.' AND dificuldadePostagem = "facil"  ORDER BY idPostagem DESC';
                $result3 = $con->query($sql3);

                if ($result3->num_rows > 0){
                    $existe = true;
                    while ($row = $result3->fetch_assoc()){
                        $idIdeia = $row['idPostagem'];
                        $nomeIdeia = $row['nomePostagem'];
                        $userIdeia = $row['nomeUsuario'];
                        $dificuldadeIdeia = $row['dificuldadePostagem'];
                        $avaliacao = $row['avaliacaoPostagem'];
                        $ideia = new Ideias($idIdeia, $nomeIdeia, $userIdeia, $dificuldadeIdeia, $avaliacao);
                        $postagens1[] = $ideia->createCardIdeia($nomeIdeia, $userIdeia, $dificuldadeIdeia, $avaliacao, $idIdeia);
                    }
                }
                
                $con->close();

                //Carregamento das ideias de reutilazação
                if ($existe){       
                    foreach($postagens1 as $post){
                        echo $post;
                    }
                }
                else{
                    echo '<div class="novaIdeia">Nenhuma postagem cadastrada</div>';
                }
            }
            else if($filtro == 2){
                //Dificuldade - média
                include '../database/connection.php';

                $postagens2 = array();
                $existe = false;

                $sql4 = 'SELECT * FROM prototipo_Postagem_EcoMoment WHERE materialPostagem = '.$idMaterial.' AND dificuldadePostagem = "media"  ORDER BY idPostagem DESC';
                $result4 = $con->query($sql4);

                if ($result4->num_rows > 0){
                    $existe = true;
                    while ($row = $result4->fetch_assoc()){
                        $idIdeia = $row['idPostagem'];
                        $nomeIdeia = $row['nomePostagem'];
                        $userIdeia = $row['nomeUsuario'];
                        $dificuldadeIdeia = $row['dificuldadePostagem'];
                        $avaliacao = $row['avaliacaoPostagem'];
                        $ideia = new Ideias($idIdeia, $nomeIdeia, $userIdeia, $dificuldadeIdeia, $avaliacao);
                        $postagens2[] = $ideia->createCardIdeia($nomeIdeia, $userIdeia, $dificuldadeIdeia, $avaliacao, $idIdeia);
                    }
                }
                
                $con->close();

                //Carregamento das ideias de reutilazação
                if ($existe){       
                    foreach($postagens2 as $post){
                        echo $post;
                    }
                }
                else{
                    echo '<div class="novaIdeia">Nenhuma postagem cadastrada</div>';
                }
            }
            else if($filtro == 3){
                //Dificuldade - difícil
                include '../database/connection.php';

                $postagens3 = array();
                $existe = false;
            
                $sql5 = 'SELECT * FROM prototipo_Postagem_EcoMoment WHERE materialPostagem = '.$idMaterial.' AND dificuldadePostagem = "dificil" ORDER BY idPostagem DESC';
                $result5 = $con->query($sql5);
            
                if ($result5->num_rows > 0){
                    $existe = true;
                    while ($row = $result5->fetch_assoc()){
                        $idIdeia = $row['idPostagem'];
                        $nomeIdeia = $row['nomePostagem'];
                        $userIdeia = $row['nomeUsuario'];
                        $dificuldadeIdeia = $row['dificuldadePostagem'];
                        $avaliacao = $row['avaliacaoPostagem'];
                        $ideia = new Ideias($idIdeia, $nomeIdeia, $userIdeia, $dificuldadeIdeia, $avaliacao);
                        $postagens3[] = $ideia->createCardIdeia($nomeIdeia, $userIdeia, $dificuldadeIdeia, $avaliacao, $idIdeia);
                    }
                }
                
                $con->close();

                //Carregamento das ideias de reutilazação
                if ($existe){       
                    foreach($postagens3 as $post){
                        echo $post;
                    }
                }
                else{
                    echo '<div class="novaIdeia">Nenhuma postagem cadastrada</div>';
                }
            }
            else if($filtro == -1){
                //Limpando a seleção
                include '../database/connection.php';

                $sql = 'SELECT * FROM prototipo_info_materiais WHERE idMaterial = '.$idMaterial;
                $result = $con->query($sql);

                if ($result->num_rows > 0){
                    while ($row = $result->fetch_assoc()){
                        $material = $row['nome'];
                        $cor = $row['cor'];
                        $descricao = $row['descricao'];
                        $origem = $row['origem'];
                        $descartar = $row['descartar'];
                        $alternativas = $row['alternativas'];
                    }
                }

                $con->close();

                //Recarregando as ideias
                if ($existe){       
                    foreach($postagens as $post){
                        echo $post;
                    }
                }
                else{
                    echo '<div class="novaIdeia">Nenhuma postagem cadastrada</div>';
                }
            }
            else{
                echo '<script>alertaErro("ERRO! Houve um problema ao carregar o filtro.\nTente novamente, recarregue a página ou verifique sua conexão com a internet.");</script>';
            }
        }
    }
    else if(isset($_GET['pesquisa'])){
        //Pesquisa de ideias
        $txt = $_GET['pesquisa'];

        include '../database/connection.php';
    
        $postagens6 = array();
        $existe = false;

        $sql8 = 'SELECT * FROM prototipo_Postagem_EcoMoment WHERE materialPostagem = '.$idMaterial.' AND nomePostagem LIKE "%'.$txt.'%"';
        $result8 = $con->query($sql8);

        if ($result8->num_rows > 0){
            $existe = true;
            while ($row = $result8->fetch_assoc()){
                $idIdeia = $row['idPostagem'];
                $nomeIdeia = $row['nomePostagem'];
                $userIdeia = $row['nomeUsuario'];
                $dificuldadeIdeia = $row['dificuldadePostagem'];
                $avaliacao = $row['avaliacaoPostagem'];
                $ideia = new Ideias($idIdeia, $nomeIdeia, $userIdeia, $dificuldadeIdeia, $avaliacao);
                $postagens6[] = $ideia->createCardIdeia($nomeIdeia, $userIdeia, $dificuldadeIdeia, $avaliacao, $idIdeia);
            }
        }

        $con->close();

        if ($existe){       
            foreach($postagens6 as $post){
                echo $post;
            }
        }
        else{
            echo '<div class="novaIdeia">Nenhuma postagem corresponde ao termo indicados.<br>Tente buscar por outra palavra</div>';
        }
    }


