<?php
    require_once('ideias.php');

    //Ideias do momento
    include 'connection.php';

    $postagens = array();

    $sql = 'SELECT * FROM prototipo_Postagem_EcoMoment ORDER BY avaliacaoPostagem DESC LIMIT 4';
    $result = $con->query($sql);

    if ($result->num_rows > 0){
        $existe = true;
        while ($row = $result->fetch_assoc()){
            $idPub = $row['idPostagem'];
            $nomeIdeiaPub = $row['nomePostagem'];
            $userIdeiaPub = $row['nomeUsuario'];
            $dificuldadeIdeiaPub = $row['dificuldadePostagem'];
            $avaliacaoPub = $row['avaliacaoPostagem'];
            $ideiaPub = new Ideias($idPub, $nomeIdeiaPub, $userIdeiaPub, $dificuldadeIdeiaPub, $avaliacaoPub);
            $postagens[] = $ideiaPub->createCardIdeia5($nomeIdeiaPub, $userIdeiaPub, $dificuldadeIdeiaPub, $avaliacaoPub, $idPub);
        }
    }
    
    $con->close();

    function carregaPlastico(){
        //Ideias com plástico
        include 'connection.php';
        
        $postagens2 = array();
        $existe = false;
        
        $sql2 = 'SELECT * FROM prototipo_Postagem_EcoMoment WHERE materialPostagem = 1 ORDER BY avaliacaoPostagem DESC LIMIT 6';
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
                $postagens2[] = $ideiaPub->createCardIdeia5($nomeIdeiaPub, $userIdeiaPub, $dificuldadeIdeiaPub, $avaliacaoPub, $idPub);
            }
        }
        if($existe && sizeof($postagens2)>0){
            //Carregamento das ideias de reutilazação
            foreach($postagens2 as $item){
                echo $item;
            }
        }
        else{
            echo '<div class="novaIdeia">Nenhuma postagem cadastrada</div>';
        }

        $con->close();
    }
  
    function carregaMetal(){
        //Ideias com metal
        include 'connection.php';
        
        $postagens3 = array();
        $existe = false;
        
        $sql3 = 'SELECT * FROM prototipo_Postagem_EcoMoment WHERE materialPostagem = 2 ORDER BY avaliacaoPostagem DESC LIMIT 6';
        $result3 = $con->query($sql3);
        
        if ($result3->num_rows > 0){
            $existe = true;
            while ($row = $result3->fetch_assoc()){
                $idPub = $row['idPostagem'];
                $nomeIdeiaPub = $row['nomePostagem'];
                $userIdeiaPub = $row['nomeUsuario'];
                $dificuldadeIdeiaPub = $row['dificuldadePostagem'];
                $avaliacaoPub = $row['avaliacaoPostagem'];
                $ideiaPub = new Ideias($idPub, $nomeIdeiaPub, $userIdeiaPub, $dificuldadeIdeiaPub, $avaliacaoPub);
                $postagens3[] = $ideiaPub->createCardIdeia5($nomeIdeiaPub, $userIdeiaPub, $dificuldadeIdeiaPub, $avaliacaoPub, $idPub);
            }
        }
        //Carregamento das ideias de reutilazação
        if ($existe && (sizeof($postagens3)>0)){
            foreach($postagens3 as $item){
                echo $item;
            }
        }
        else{
            echo '<div class="novaIdeia">Nenhuma postagem cadastrada</div>';
        }
        
        $con->close();
    }

    //NECESSITA DE REPARO (verificação do número de rows alterada para a apresentação)
    function carregaPapel(){
        //Ideias com papel
        include 'connection.php';
        
        $postagens4 = array();
        $existe = false;
        
        $sql4 = 'SELECT * FROM prototipo_Postagem_EcoMoment WHERE materialPostagem = 3 ORDER BY avaliacaoPostagem DESC LIMIT 6';
        $result4 = $con->query($sql4);
        
        if ($result4->num_rows > 0){
            $existe = true;
            while ($row = $result4->fetch_assoc()){
                $idPub = $row['idPostagem'];
                $nomeIdeiaPub = $row['nomePostagem'];
                $userIdeiaPub = $row['nomeUsuario'];
                $dificuldadeIdeiaPub = $row['dificuldadePostagem'];
                $avaliacaoPub = $row['avaliacaoPostagem'];
                $ideiaPub = new Ideias($idPub, $nomeIdeiaPub, $userIdeiaPub, $dificuldadeIdeiaPub, $avaliacaoPub);
                $postagens4[] = $ideiaPub->createCardIdeia2($nomeIdeiaPub, $userIdeiaPub, $dificuldadeIdeiaPub, $avaliacaoPub, $idPub);
            }
        }
        //Carregamento das ideias de reutilazação
        if ($existe && sizeof($postagens4)>3){
            foreach($postagens4 as $item){
                echo $item;
            }
        }
        else{
            echo '<div class="novaIdeia">Nenhuma postagem cadastrada</div>';
        }
      
        $con->close();
    }

    //NECESSITA DE REPARO (verificação do número de rows alterada para a apresentação)
    function carregaVidro(){
        //Ideias com vidro
        include 'connection.php';
    
        $postagens5 = array();
        $existe = false;
    
        $sql5 = 'SELECT * FROM prototipo_Postagem_EcoMoment WHERE materialPostagem = 4 ORDER BY avaliacaoPostagem DESC LIMIT 6';
        $result5 = $con->query($sql5);
    
        if ($result5->num_rows > 0){
            $existe = true;
            while ($row = $result5->fetch_assoc()){
                $idPub = $row['idPostagem'];
                $nomeIdeiaPub = $row['nomePostagem'];
                $userIdeiaPub = $row['nomeUsuario'];
                $dificuldadeIdeiaPub = $row['dificuldadePostagem'];
                $avaliacaoPub = $row['avaliacaoPostagem'];
                $ideiaPub = new Ideias($idPub, $nomeIdeiaPub, $userIdeiaPub, $dificuldadeIdeiaPub, $avaliacaoPub);
                $postagens5[] = $ideiaPub->createCardIdeia2($nomeIdeiaPub, $userIdeiaPub, $dificuldadeIdeiaPub, $avaliacaoPub, $idPub);
            }
        }
        //Carregamento das ideias de reutilazação
        if ($existe && sizeof($postagens5)>3){
            foreach($postagens5 as $item){
                echo $item;
            }
        }
        else{
            echo '<div class="novaIdeia">Nenhuma postagem cadastrada</div>';
        }
        
        $con->close();
    }

    function carregaMadeira(){
        //Ideias com madeira
        include 'connection.php';
    
        $postagens6 = array();
        $existe = false;
    
        $sql6 = 'SELECT * FROM prototipo_Postagem_EcoMoment WHERE materialPostagem = 5 ORDER BY avaliacaoPostagem DESC LIMIT 6';
        $result6 = $con->query($sql6);
    
        if ($result6->num_rows > 0){
            $existe = true;
            while ($row = $result6->fetch_assoc()){
                $idPub = $row['idPostagem'];
                $nomeIdeiaPub = $row['nomePostagem'];
                $userIdeiaPub = $row['nomeUsuario'];
                $dificuldadeIdeiaPub = $row['dificuldadePostagem'];
                $avaliacaoPub = $row['avaliacaoPostagem'];
                $ideiaPub = new Ideias($idPub, $nomeIdeiaPub, $userIdeiaPub, $dificuldadeIdeiaPub, $avaliacaoPub);
                $postagens6[] = $ideiaPub->createCardIdeia2($nomeIdeiaPub, $userIdeiaPub, $dificuldadeIdeiaPub, $avaliacaoPub, $idPub);
            }
        }
        //Carregamento das ideias de reutilazação
        if ($existe && sizeof($postagens6)>0){
            foreach($postagens6 as $item){
                echo $item;
            }
        }
        else{
            echo '<div class="novaIdeia center">Nenhuma postagem cadastrada</div>';
        }
        
        $con->close();
    }

    function carregaOrganico(){
        //Ideias com orgânico
        include 'connection.php';
    
        $postagens7 = array();
        $existe = false;
    
        $sql7 = 'SELECT * FROM prototipo_Postagem_EcoMoment WHERE materialPostagem = 6 ORDER BY avaliacaoPostagem DESC LIMIT 6';
        $result7 = $con->query($sql7);
    
        if ($result7->num_rows > 0){
            $existe = true;
            while ($row = $result7->fetch_assoc()){
                $idPub = $row['idPostagem'];
                $nomeIdeiaPub = $row['nomePostagem'];
                $userIdeiaPub = $row['nomeUsuario'];
                $dificuldadeIdeiaPub = $row['dificuldadePostagem'];
                $avaliacaoPub = $row['avaliacaoPostagem'];
                $ideiaPub = new Ideias($idPub, $nomeIdeiaPub, $userIdeiaPub, $dificuldadeIdeiaPub, $avaliacaoPub);
                $postagens7[] = $ideiaPub->createCardIdeia2($nomeIdeiaPub, $userIdeiaPub, $dificuldadeIdeiaPub, $avaliacaoPub, $idPub);
            }
        }
        //Carregamento das ideias de reutilazação
        if ($existe && sizeof($postagens7)>0){
            foreach($postagens7 as $item){
                echo $item;
            }
        }
        else{
            echo '<div class="novaIdeia center">Nenhuma postagem cadastrada</div>';
        }
        $con->close();
    }