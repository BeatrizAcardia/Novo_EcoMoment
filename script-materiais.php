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

    include 'connection.php';

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
    else{
        echo 'Material não identificado.';
    }

    $con->close();

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
    include 'connection.php';
    include 'ideias.php';

    $postagens = array();
    $existe = false;

    $sql2 = 'SELECT * FROM prototipo_Postagem_EcoMoment WHERE materialPostagem = '.$idMaterial.' ORDER BY idPostagem DESC';
    $result2 = $con->query($sql2);

    if ($result2->num_rows > 0){
        $existe = true;
        while ($row = $result2->fetch_assoc()){
            $idIdeia = $row['idPostagem'];
            $nomeIdeia = $row['nomePostagem'];
            $userIdeia = $row['nomeUsuario'];
            $dificuldadeIdeia = $row['dificuldadePostagem'];
            $avaliacao = $row['avaliacaoPostagem'];
            $ideia = new Ideias($idIdeia, $nomeIdeia, $userIdeia, $dificuldadeIdeia, $avaliacao);
            $postagens[] = $ideia->createCardIdeia($nomeIdeia, $userIdeia, $dificuldadeIdeia, $avaliacao, $idIdeia);
        }
    }
    
    $con->close();


    //Filtros

    if(isset($_GET['tipo']) and isset($_GET['filtro'])){
        $tipo = $_GET['tipo'];
        $filtro = $_GET['filtro'];
        if($tipo == 1){
            if($filtro == 2){
                //Filtro 2 - avaliação
                include 'connection.php';

                $postagens4 = array();
                $existe = false;

                $sql6 = 'SELECT * FROM prototipo_Postagem_EcoMoment WHERE materialPostagem = '.$idMaterial.' ORDER BY avaliacaoPostagem DESC';
                $result6 = $con->query($sql6);

                if ($result6->num_rows > 0){
                    $existe = true;
                    while ($row = $result6->fetch_assoc()){
                        $idIdeia = $row['idPostagem'];
                        $nomeIdeia = $row['nomePostagem'];
                        $userIdeia = $row['nomeUsuario'];
                        $dificuldadeIdeia = $row['dificuldadePostagem'];
                        $avaliacao = $row['avaliacaoPostagem'];
                        $ideia = new Ideias($idIdeia, $nomeIdeia, $userIdeia, $dificuldadeIdeia, $avaliacao);
                        $postagens4[] = $ideia->createCardIdeia($nomeIdeia, $userIdeia, $dificuldadeIdeia, $avaliacao, $idIdeia);
                    }
                }

                $con->close();

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
                include 'connection.php';

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
                include 'connection.php';

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
                include 'connection.php';

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
                include 'connection.php';

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
                include 'connection.php';

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
                include 'connection.php';

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

        include 'connection.php';
    
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


