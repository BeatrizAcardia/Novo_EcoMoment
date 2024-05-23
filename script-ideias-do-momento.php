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
            $postagens[] = $ideiaPub->createCardIdeia6($nomeIdeiaPub, $userIdeiaPub, $dificuldadeIdeiaPub, $avaliacaoPub, $idPub);
        }
    }
    
    $con->close();

    function carregaPlastico(){
        //Ideias com plástico
        include 'connection.php';
        
        $postagens2 = array();
        $carrossel = array();
        $cont = 0;
        $cont2 = 0;
        $existe = false;
        
        $sql2 = 'SELECT * FROM prototipo_Postagem_EcoMoment WHERE materialPostagem = 1 ORDER BY avaliacaoPostagem DESC LIMIT 3';
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
                $postagens2[] = $ideiaPub->createCardIdeia2($nomeIdeiaPub, $userIdeiaPub, $dificuldadeIdeiaPub, $avaliacaoPub, $idPub);
                $cont++;
                if($cont%3 == 0){
                    if($cont2 == 0){
                        $carrossel[$cont2] = '<div class="carousel-item active"><div class="cards-wrapper"><div class="row ideias">';
                    }
                    else{
                        $carrossel[$cont2] = '<div class="carousel-item"><div class="cards-wrapper"><div class="row ideias">';
                    }
                    for($i = $cont-3; $i < $cont; $i++){
                        // echo '<script>alert("i: '.$i.'")</script>';
                        $carrossel[$cont2] .= ''.$postagens2[$i];
                        if($i == $cont-1){
                            $carrossel[$cont2] .= '</div></div></div>';
                        }
                    }
                    $cont2++;
                }
            }
            //   if($cont<3){
            //     $carrossel[0] = '<div class="carousel-item active"><div class="cards-wrapper">';
            //   }
            //   else{
            //     $carrossel[-1] = '<div class="carousel-item active"><div class="cards-wrapper">';
            //     for($i = $cont-1; $i <= $cont-4; $i--){
            //         $carrossel[$cont2] .= $postagens2[$i];
            //         if($i == $cont-4){
            //             $carrossel[$cont2] .= '</div></div>';
            //         }
            //     }
            //     $cont2++;
            //   }
        }
        if($existe && sizeof($carrossel)>0){
            //Carregamento das ideias de reutilazação
            foreach($carrossel as $item){
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
        $carrossel2 = array();
        $cont = 0;
        $cont2 = 0;
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
                $postagens3[] = $ideiaPub->createCardIdeia2($nomeIdeiaPub, $userIdeiaPub, $dificuldadeIdeiaPub, $avaliacaoPub, $idPub);
                $cont++;
                if($cont%3 == 0){
                    if($cont2 == 0){
                        $carrossel2[$cont2] = '<div class="carousel-item active"><div class="cards-wrapper"><div class="row ideias">';
                    }
                    else{
                        $carrossel2[$cont2] = '<div class="carousel-item"><div class="cards-wrapper"><div class="row ideias">';
                    }
                    for($i = $cont-3; $i < $cont; $i++){
                        // echo '<script>alert("i: '.$i.'")</script>';
                        $carrossel2[$cont2] .= ''.$postagens3[$i];
                        if($i == $cont-1){
                            $carrossel2[$cont2] .= '</div></div></div>';
                        }
                    }
                    $cont2++;
                }
            }
        }
        //Carregamento das ideias de reutilazação
        if ($existe && (sizeof($carrossel2)>0)){
            foreach($carrossel2 as $item){
                echo $item;
            }
        }
        else{
            echo '<div class="novaIdeia">Nenhuma postagem cadastrada</div>';
        }
        
        $con->close();
    }

    function carregaPapel(){
        //Ideias com papel
        include 'connection.php';
        
        $postagens4 = array();
        $carrossel3 = array();
        $cont = 0;
        $cont2 = 0;
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
                $cont++;
                if($cont%3 == 0){
                    if($cont2 == 0){
                        $carrossel3[$cont2] = '<div class="carousel-item active"><div class="cards-wrapper"><div class="row ideias">';
                    }
                    else{
                        $carrossel3[$cont2] = '<div class="carousel-item"><div class="cards-wrapper"><div class="row ideias">';
                    }
                    for($i = $cont-3; $i < $cont; $i++){
                        // echo '<script>alert("i: '.$i.'")</script>';
                        $carrossel3[$cont2] .= ''.$postagens4[$i];
                        if($i == $cont-1){
                            $carrossel3[$cont2] .= '</div></div></div>';
                        }
                    }
                    $cont2++;
                }
            }
        }
        //Carregamento das ideias de reutilazação
        if ($existe && sizeof($carrossel3)>0){
            foreach($carrossel3 as $item){
                echo $item;
            }
        }
        else{
            echo '<div class="novaIdeia">Nenhuma postagem cadastrada</div>';
        }
      
        $con->close();
    }

    function carregaVidro(){
        //Ideias com vidro
        include 'connection.php';
    
        $postagens5 = array();
        $carrossel4 = array();
        $cont = 0;
        $cont2 = 0;
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
                $cont++;
                if($cont%3 == 0){
                    if($cont2 == 0){
                        $carrossel4[$cont2] = '<div class="carousel-item active"><div class="cards-wrapper"><div class="row ideias">';
                    }
                    else{
                        $carrossel4[$cont2] = '<div class="carousel-item"><div class="cards-wrapper"><div class="row ideias">';
                    }
                    for($i = $cont-3; $i < $cont; $i++){
                        // echo '<script>alert("i: '.$i.'")</script>';
                        $carrossel4[$cont2] .= ''.$postagens5[$i];
                        if($i == $cont-1){
                            $carrossel4[$cont2] .= '</div></div></div>';
                        }
                    }
                    $cont2++;
                }
            }
        }
        //Carregamento das ideias de reutilazação
        if ($existe && sizeof($carrossel4)>0){
            foreach($carrossel4 as $item){
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
        $carrossel5 = array();
        $cont = 0;
        $cont2 = 0;
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
                $cont++;
                if($cont%3 == 0){
                    if($cont2 == 0){
                        $carrossel5[$cont2] = '<div class="carousel-item active"><div class="cards-wrapper"><div class="row ideias">';
                    }
                    else{
                        $carrossel5[$cont2] = '<div class="carousel-item"><div class="cards-wrapper"><div class="row ideias">';
                    }
                    for($i = $cont-3; $i < $cont; $i++){
                        // echo '<script>alert("i: '.$i.'")</script>';
                        $carrossel5[$cont2] .= ''.$postagens6[$i];
                        if($i == $cont-1){
                            $carrossel5[$cont2] .= '</div></div></div>';
                        }
                    }
                    $cont2++;
                }
            }
        }
        //Carregamento das ideias de reutilazação
        if ($existe && sizeof($carrossel5)>0){
            foreach($carrossel5 as $item){
                echo $item;
            }
        }
        else{
            echo '<div class="novaIdeia">Nenhuma postagem cadastrada</div>';
        }
        
        $con->close();
    }

    function carregaOrganico(){
        //Ideias com orgânico
        include 'connection.php';
    
        $postagens7 = array();
        $carrossel6 = array();
        $cont = 0;
        $cont2 = 0;
        $existe = false;
    
        $sql7 = 'SELECT * FROM prototipo_Postagem_EcoMoment WHERE materialPostagem = 5 ORDER BY avaliacaoPostagem DESC LIMIT 6';
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
                $cont++;
                if($cont%3 == 0){
                    if($cont2 == 0){
                        $carrossel6[$cont2] = '<div class="carousel-item active"><div class="cards-wrapper"><div class="row ideias">';
                    }
                    else{
                        $carrossel6[$cont2] = '<div class="carousel-item"><div class="cards-wrapper"><div class="row ideias">';
                    }
                    for($i = $cont-3; $i < $cont; $i++){
                        // echo '<script>alert("i: '.$i.'")</script>';
                        $carrossel6[$cont2] .= ''.$postagens7[$i];
                        if($i == $cont-1){
                            $carrossel6[$cont2] .= '</div></div></div>';
                        }
                    }
                    $cont2++;
                }
            }
        }
        //Carregamento das ideias de reutilazação
        if ($existe && sizeof($carrossel6)>0){
            foreach($carrossel6 as $item){
                echo $item;
            }
        }
        else{
            echo '<div class="novaIdeia">Nenhuma postagem cadastrada</div>';
        }
        $con->close();
    }