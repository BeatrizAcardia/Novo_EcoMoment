<?php

    include '../database/connection.php';
    include_once '../Model/Ideias.php';

    $idPostagem = $_REQUEST['idPostagem'];
    $ideia;
    $existe = false;

    
    $sql = 'SELECT * FROM prototipo_Postagem_EcoMoment WHERE idPostagem = '.$idPostagem;
    $result = $con->query($sql);

    if ($result->num_rows > 0){
        $existe = true;
        while ($row = $result->fetch_assoc()){
            $nomeIdeia = $row['nomePostagem'];
            $userIdeia = $row['nomeUsuario'];
            $numCurtidas = $row['numeroCurtidas'];
            $descricaoPostagem = $row['descricaoPostagem'];
            $materiaisNecessarios = $row['materiaisNecessariosPostagem'];
            $instrucoesPostagem = $row['instrucoesPostagem'];
            $materialPostagem = $row['materialPostagem'];
            $dificuldadeIdeia = $row['dificuldadePostagem'];
            $avaliacaoPostagem = $row['avaliacaoPostagem'];
            $qtdeAvaliacoes = $row['qtdeAvaliacoesPostagem'];
            $ideia = new Ideias($idPostagem, $nomeIdeia, $userIdeia, $dificuldadeIdeia, $avaliacaoPostagem);
        }
    }
    
    $con->close();

    //---------------------------------------------------------------------------------------------------------------------

    //Ideias semelhantes
    include '../database/connection.php';

    $postagens = array();

    $sql2 = 'SELECT * FROM prototipo_Postagem_EcoMoment GROUP BY idPostagem HAVING NOT idPostagem = '.$idPostagem.' ORDER BY RAND() LIMIT 3';
    $result2 = $con->query($sql2);

    if ($result2->num_rows > 0){
        $existe = true;
        while ($row = $result2->fetch_assoc()){
            $idPub = $row['idPostagem'];
            $nomeIdeiaPub = $row['nomePostagem'];
            $userIdeiaPub = $row['nomeUsuario'];
            $dificuldadeIdeiaPub = $row['dificuldadePostagem'];
            $avaliacaoPub = $row['avaliacaoPostagem'];
            $ideiaPub = new Ideias($idPub, $nomeIdeiaPub, $userIdeiaPub, $dificuldadeIdeiaPub, $avaliacaoPub);
            $postagens[] = $ideiaPub->createCardIdeia2($nomeIdeiaPub, $userIdeiaPub, $dificuldadeIdeiaPub, $avaliacaoPub, $idPub);
        }
    }
    
    $con->close();

    if(isset($_GET['user']) and isset($_GET['idPostagem']) and isset($_GET['funcao'])){
        $userFuncao = $_GET['user'];
        $idPostFuncao = $_GET['idPostagem'];
        $funcao = $_GET['funcao'];

        //Verifica se a publicação já foi curtida
        if($funcao == 'curtida'){
            $res = false;
            include '../database/connection.php';
            // echo'<script>alert("Usuário: '.$userFuncao.'\nId postagem: '.$idPostFuncao.'")</script>';
            $sqlx = 'SELECT * FROM prototipo_Curtidas_EcoMoment WHERE idUsuarioWeb = '.$userFuncao.' AND idPostagem = '.$idPostFuncao;
            $resultx = $con->query($sqlx);

            if ($resultx->num_rows > 0){
                $con->close();
                // echo'<script>alert("True")</script>';
                $res = true;
                echo $res;
            }
            else{
                $con->close();
                // echo'<script>alert("Falso")</script>';
                echo $res;
            }
        }
        else if($funcao == 'avaliado'){
            $res = false;
            include '../database/connection.php';
            // echo'<script>alert("Usuário: '.$userFuncao.'\nId postagem: '.$idPostFuncao.'")</script>';
            $sql = 'SELECT * FROM prototipo_Avaliacao_EcoMoment WHERE idUsuarioWeb = '.$userFuncao.' and idPostagem = '.$idPostFuncao;
            $result = $con->query($sql);

            if ($result->num_rows > 0){
                $con->close();
                // echo'<script>alert("True")</script>';
                $res = true;
                echo $res;
            }
            else{
                $con->close();
                // echo'<script>alert("Falso")</script>';
                echo $res;
            }
        }
        else if($funcao == 'curtir'){
            include '../database/connection.php';

            $res = false;

            //Verifica se a publicação já foi curtida
            $sql2 = 'SELECT * FROM prototipo_Curtidas_EcoMoment WHERE idUsuarioWeb = '.$userFuncao.' and idPostagem = '.$idPostFuncao;
            $result2 = $con->query($sql2);
            if ($result2->num_rows > 0){
                $foiCurtida = true;
            }
            else{
                $foiCurtida = false;
            }

            //Desurtindo
            if($foiCurtida){
                $sql3 = 'UPDATE prototipo_Postagem_EcoMoment SET numeroCurtidas = numeroCurtidas - 1 WHERE idPostagem = '.$idPostFuncao;
                $stmt = $con->prepare($sql3);
                if($stmt->execute()){
                    $sql4 = 'DELETE FROM prototipo_Curtidas_EcoMoment WHERE idUsuarioWeb = '.$userFuncao;
                    $stmt2 = $con->prepare($sql4);
                    if($stmt2->execute()){
                        $sql5 = 'UPDATE EcoMomentBD_UsuarioWeb SET qtdeCurtidas = qtdeCurtidas - 1 WHERE idUsuarioWeb = '.$userFuncao;
                        $stmt3 = $con->prepare($sql5);
                        if($stmt3->execute()){
                            $con->close();
                            $res = 'descurtiu';
                            echo $res;
                        }
                    }
                    else{
                        $con->close();
                        echo $res;  
                    }
                }
                else{
                    $con->close();
                    echo $res;  
                }
            }
            //Caso a publicação não tenha sido curtida -> curtindo
            else{
                $sql3 = 'INSERT INTO prototipo_Curtidas_EcoMoment (idPostagem, idUsuarioWeb) VALUES ('.$idPostFuncao.', '.$userFuncao.')';
                $stmt = $con->prepare($sql3);
                if($stmt->execute()){
                    $sql4 = 'UPDATE prototipo_Postagem_EcoMoment SET numeroCurtidas = numeroCurtidas + 1 WHERE idPostagem = '.$idPostFuncao;
                    $stmt2 = $con->prepare($sql4);
                    if($stmt2->execute()){
                        $sql5 = 'UPDATE EcoMomentBD_UsuarioWeb SET qtdeCurtidas = qtdeCurtidas + 1 WHERE idUsuarioWeb = '.$userFuncao;
                        $stmt3 = $con->prepare($sql5);
                        if($stmt3->execute()){
                            $con->close();
                            $res = 'curtiu';
                            echo $res;
                        }
                        else{
                            $con->close();
                            echo $res; 
                        }
                    }
                    else{
                        $con->close();
                        echo $res; 
                    }
                }
                else{
                    $con->close();
                    echo $res;  
                }
            }

        }
        else if($funcao == 'numeroCurtidas'){
            include '../database/connection.php';
            //Obtem o número atual de curtidas
            $sql = 'SELECT numeroCurtidas FROM prototipo_Postagem_EcoMoment WHERE idPostagem = '.$idPostFuncao;
            $result = $con->query($sql);
            if ($result->num_rows > 0){
                if($row = $result->fetch_assoc()){
                    $numCurtidas = $row['numeroCurtidas'];
                }
                echo $numCurtidas;
            }
            $con->close();            
        }
        else if($funcao == 'avaliar'){
            include '../database/connection.php';

            $res = false;

            if(isset($_GET['valor'])){
                $valor = $_GET['valor'];
                $queryNome = "SELECT nomeUsuario FROM prototipo_Postagem_EcoMoment WHERE idPostagem = $idPostFuncao";
                $resultNome = $con->query($queryNome);
                if($resultNome->num_rows > 0){
                    while ($row = $resultNome->fetch_assoc()){
                        $userPost = $row['nomeUsuario'];
                    }
                }

                //Verifica se a publicação já foi avaliada
                $sqlX = 'SELECT * FROM prototipo_Avaliacao_EcoMoment WHERE idUsuarioWeb = '.$userFuncao.' and idPostagem = '.$idPostFuncao;
                $resultX = $con->query($sqlX);
                if ($resultX->num_rows > 0){
                    $foiAvaliado = true;
                }
                else{
                    $foiAvaliado = false;
                }
    
                //Iniciando as avaliações
                if($foiAvaliado){
            
                    $sql = 'UPDATE prototipo_Avaliacao_EcoMoment SET valor = '.$valor.' WHERE idPostagem = '.$idPostFuncao.' and idUsuarioWeb = '.$userFuncao;
            
                    $stmt = $con->prepare($sql);
                    if($stmt->execute()){
                        $sql2 = 'SELECT count(idUsuarioWeb) AS numero FROM prototipo_Avaliacao_EcoMoment WHERE idPostagem = '.$idPostFuncao;
                        $result2 = $con->query($sql2);
                        if ($result2->num_rows > 0){
                            while ($row = $result2->fetch_assoc()){
                                $qtdeAv = $row['numero'];
                            }
                            $sql3 = 'SELECT sum(valor) AS soma FROM prototipo_Avaliacao_EcoMoment WHERE idPostagem = '.$idPostFuncao;
                            $result3 = $con->query($sql3);
                            if ($result3->num_rows > 0){
                                while ($row = $result3->fetch_assoc()){
                                    $somaValor = $row['soma'];
                                }
                                $sql4 = 'UPDATE prototipo_Postagem_EcoMoment SET avaliacaoPostagem = '.($somaValor/$qtdeAv).' WHERE idPostagem = '.$idPostFuncao;
                                $stmt4 = $con->prepare($sql4);
                                if($stmt4->execute()){
                                    $sql5 = 'SELECT count(idPostagem) AS numero FROM prototipo_Postagem_EcoMoment WHERE nomeUsuario = "'.$userPost.'" and avaliacaoPostagem != 0';
                                    $result5 = $con->query($sql5);
                                    if ($result5->num_rows > 0){
                                        while ($row = $result5->fetch_assoc()){
                                            $qtdeAv2 = $row['numero'];
                                        }
                                        $sql6 = 'SELECT sum(avaliacaoPostagem) AS soma FROM prototipo_Postagem_EcoMoment WHERE nomeUsuario = "'.$userPost.'"';
                                        $result6 = $con->query($sql6);
                                        if ($result6->num_rows > 0){
                                            while ($row = $result6->fetch_assoc()){
                                                $somaValor2 = $row['soma'];
                                            }
                                            $sql7 = 'UPDATE EcoMomentBD_UsuarioWeb SET Reputacao = '.($somaValor2/$qtdeAv2).' WHERE NomeWeb = "'.$userPost.'"';
                                            $stmt7 = $con->prepare($sql7);
                                            if($stmt7->execute()){
                                                $con->close();
                                                $res = true;
                                                echo $res;
                                            }
                                            else{
                                                $con->close();
                                                echo $res; 
                                            }
                                        }
                                        else{
                                            $con->close();
                                            echo $res; 
                                        }
                                    }
                                    else{
                                        $con->close();
                                        echo $res; 
                                    }
                                }
                                else{
                                    $con->close();
                                    echo $res;  
                                }
                            }
                            else{
                                $con->close();
                                echo $res;  
                            }
                        }
                        else{
                            $con->close();
                            echo $res;  
                        }
                    }
                    else{
                        $con->close();
                        echo $res;  
                    }
                }
                else{
            
                    $sql = 'INSERT INTO prototipo_Avaliacao_EcoMoment (idPostagem, idUsuarioWeb, valor) VALUES ('.$idPostFuncao.', '.$userFuncao.', '.$valor.')';
            
                    $stmt = $con->prepare($sql);
                    if($stmt->execute()){
                        $sql2 = 'UPDATE prototipo_Postagem_EcoMoment SET qtdeAvaliacoesPostagem = qtdeAvaliacoesPostagem + 1 WHERE idPostagem = '.$idPostFuncao;
                        $stmt2 = $con->prepare($sql2);
                        if($stmt2->execute()){
                            $sql3 = 'SELECT count(idUsuarioWeb) AS numero FROM prototipo_Avaliacao_EcoMoment WHERE idPostagem = '.$idPostFuncao;
                            $result3 = $con->query($sql3);
                            if ($result3->num_rows > 0){
                                while ($row = $result3->fetch_assoc()){
                                    $qtdeAv = $row['numero'];
                                }
                                $sql4 = 'SELECT sum(valor) AS soma FROM prototipo_Avaliacao_EcoMoment WHERE idPostagem = '.$idPostFuncao;
                                $result4 = $con->query($sql4);
                                if ($result4->num_rows > 0){
                                    while ($row = $result4->fetch_assoc()){
                                        $somaValor = $row['soma'];
                                    }
                                    $sql5 = 'UPDATE prototipo_Postagem_EcoMoment SET avaliacaoPostagem = '.($somaValor/$qtdeAv).' WHERE idPostagem = '.$idPostFuncao;
                                    $stmt5 = $con->prepare($sql5);
                                    if($stmt5->execute()){
                                        $sql6 = 'SELECT count(idPostagem) AS numero FROM prototipo_Postagem_EcoMoment WHERE nomeUsuario = "'.$userPost.'" AND avaliacaoPostagem != 0';
                                        $result6 = $con->query($sql6);
                                        if ($result6->num_rows > 0){
                                            while ($row = $result6->fetch_assoc()){
                                                $qtdeAv2 = $row['numero'];
                                            }
                                            $sql7 = 'SELECT sum(avaliacaoPostagem) AS soma FROM prototipo_Postagem_EcoMoment WHERE nomeUsuario = "'.$userPost.'"';
                                            $result7 = $con->query($sql7);
                                            if ($result7->num_rows > 0){
                                                while ($row = $result7->fetch_assoc()){
                                                    $somaValor2 = $row['soma'];
                                                }
                                                $sql8 = 'UPDATE EcoMomentBD_UsuarioWeb SET Reputacao = '.($somaValor2/$qtdeAv2).' WHERE NomeWeb = "'.$userPost.'"';
                                                $stmt8 = $con->prepare($sql8);
                                                if($stmt8->execute()){
                                                    $con->close();
                                                    $res = true;
                                                    echo $res;
                                                }
                                                else{
                                                    $con->close();
                                                    echo $res; 
                                                }
                                            }
                                            else{
                                                $con->close();
                                                echo $res; 
                                            }
                                        }
                                        else{
                                            $con->close();
                                            echo $res; 
                                        }
                                    }
                                }
                            }
                        }
                        else{
                            $con->close();
                            echo $res; 
                        }
                    }
                    else{
                        $con->close();
                        echo $res;  
                    }
                }
            }
            else{
                echo $res;
            }
        }
        else if($funcao == 'carregarAvaliacao'){
            include '../database/connection.php';
            $resultado;
            //Verifica se a publicação já foi avaliada
            $sqlX = 'SELECT valor FROM prototipo_Avaliacao_EcoMoment WHERE idUsuarioWeb = '.$userFuncao.' and idPostagem = '.$idPostFuncao;
            $resultX = $con->query($sqlX);
            if ($resultX->num_rows > 0){
                while ($row = $resultX->fetch_assoc()){
                    $valor = $row['valor'];
                }
                $resultado = $ideia->carregaAvaliacao4($valor, $idPostFuncao, $userFuncao);
            }
            else{
                $resultado = false;
            }
            echo $resultado;
        }

    }
    