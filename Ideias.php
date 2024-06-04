<?php
class Ideias {
    private $idPostagem;
    private $nomeIdeia;
    private $userIdeia;
    private $numCurtidas = 0;
    private $descricaoPostagem;
    private $materiaisNecessarios;
    private $instrucoesPostagem;
    private $materialPostagem;
    private $dificuldadeIdeia;
    private $avaliacaoPostagem = 0;
    private $qtdeAvaliacoes = 0;
    

    //Construtores

    public function criaIdeia($id ,$nome, $usuario, $descricao, $materiaisNec, $instrucoes, $materialPost, $dificuldade){
        $this->idPostagem = $id;
        $this->nomeIdeia = $nome;
        $this->userIdeia = $usuario;
        $this->numCurtidas = 0;
        $this->descricaoPostagem = $descricao;
        $this->materiaisNecessarios = $materiaisNec;
        $this->instrucoesPostagem = $instrucoes;
        $this->materialPostagem = $materialPost;
        $this->dificuldadeIdeia = $dificuldade;
        $this->avaliacaoPostagem = 0;
        $this->qtdeAvaliacoes = 0;
    }


    public function __construct($id, $nome, $usuario, $dificuldade, $avaliacao){
        $this->idPostagem = $id;
        $this->nomeIdeia = $nome;
        $this->userIdeia = $usuario;
        $this->dificuldadeIdeia = $dificuldade;
        $this->avaliacaoPostagem = $avaliacao;
    }

    //Métodos

    /* Cards de ideia */
    public function createCardIdeia($nome, $usuario, $dificuldade, $avaliacao, $idPost){
        return '
        <div class="card">
            <div class="row">
                <div class="col-12 col-sm-6 card-col img-card">
                    <a href="pagIdeia.php?idPostagem='.$idPost.'"><img class="img-card-ideia" src="midias/icones-materiais/img-ideia.jpg" alt="Ideia de reutilização com garrafas pet"></a>
                </div>
                <div class="col-12 col-sm-6 card-col card-content">
                    <a href="pagIdeia.php?idPostagem='.$idPost.'">
                        <div class="card-title">'.$nome.'</div>
                    </a>
                    <a href="perfil.php?type=perfil&user='.$usuario.'">
                        <div class="card-subtitle">'.$usuario.'</div>
                    </a>
                    <a href="pagIdeia.php?idPostagem='.$idPost.'">
                        <div class="card-text">
                            '.$this->carregaAvaliacao2($avaliacao, $idPost).'
                            <div class="dificuldade dificuldade-'.$dificuldade.'"></div>
                        </div>
                    </a>
                </div>
            </div>
        </div>';
    }

    public function createCardIdeia2($nome, $usuario, $dificuldade, $avaliacao, $idPost){
        return '
        <style>
            .row-av-ideia>*{
                width: min-content;
            }
        </style>
        <div class="card col-12 col-md-6 col-lg-12">
            <div class="row">
                <div class="col-12 card-col img-card">
                    <a href="pagIdeia.php?idPostagem='.$idPost.'"><img class="img-card-ideia" src="midias/icones-materiais/img-ideia.jpg" alt="Ideia de reutilização com garrafas pet"></a>
                </div>
                <div class="col-12 card-col card-content">
                    <a href="pagIdeia.php?idPostagem='.$idPost.'">
                        <div class="card-title">'.$nome.'</div>
                    </a>
                    <a href="perfil.php?type=perfil&user='.$usuario.'">
                        <div class="card-subtitle">'.$usuario.'</div>
                    </a>
                    <a href="pagIdeia.php?idPostagem='.$idPost.'">
                        <div class="card-text">
                            <div class="row row-av-ideia">
                                <div class="alinha-estrela">'.$this->carregaAvaliacao($avaliacao, $idPost).'</div>
                                <div>
                                    <div class="dificuldade dificuldade-'.$dificuldade.'"></div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>';
    }

    public function createCardIdeia3($nome, $usuario, $dificuldade, $avaliacao, $idPost){
        return '
        <div class="card">
        <img src="midias/icones-perfil/selo-ideia.png" class="d-none d-sm-block selo-melhor-ideia">
        <img src="midias/icones-perfil/selo-ideia.png" class="d-block d-sm-none selo-melhor-ideia-sm">
                <div class="row">
                    <div class="col-12 col-sm-6 card-col img-card">
                        <a href="pagIdeia.php?idPostagem='.$idPost.'"><img class="img-card-ideia" src="midias/icones-materiais/img-ideia.jpg" alt="Ideia de reutilização com garrafas pet"></a>
                    </div>
                    <div class="col-12 col-sm-6 card-col card-content">
                        <a href="pagIdeia.php?idPostagem='.$idPost.'">
                            <div class="card-title">'.$nome.'</div>
                        </a>
                        <a href="perfil.php?type=perfil&user='.$usuario.'">
                            <div class="card-subtitle">'.$usuario.'</div>
                        </a>
                        <a href="pagIdeia.php?idPostagem='.$idPost.'">
                            <div class="card-text">
                                '.$this->carregaAvaliacao($avaliacao, $idPost).'
                                <div class="dificuldade dificuldade-'.$dificuldade.'"></div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>';
    }

    public function createCardIdeia4($nome, $usuario, $dificuldade, $avaliacao, $idPost){
        return '
        <style>
            .row-av-ideia>*{
                width: min-content;
            }
        </style>
        <div class="swiper-slide">
            <div class="card">
                <div class="row">
                    <div class="col-12 card-col img-card">
                        <a href="pagIdeia.php?idPostagem='.$idPost.'"><img class="img-card-ideia" src="midias/icones-materiais/img-ideia.jpg" alt="Ideia de reutilização com garrafas pet"></a>
                    </div>
                    <div class="col-12 card-col card-content">
                        <a href="pagIdeia.php?idPostagem='.$idPost.'">
                            <div class="card-title">'.$nome.'</div>
                        </a>
                        <a href="perfil.php?type=perfil&user='.$usuario.'">
                            <div class="card-subtitle">'.$usuario.'</div>
                        </a>
                        <a href="pagIdeia.php?idPostagem='.$idPost.'">
                            <div class="card-text">
                                <div class="row row-av-ideia">
                                    <div class="alinha-estrela">'.$this->carregaAvaliacao($avaliacao, $idPost).'</div>
                                    <div>
                                        <div class="dificuldade dificuldade-'.$dificuldade.'"></div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>';
    }

    public function createCardIdeia5($nome, $usuario, $dificuldade, $avaliacao, $idPost){
        return '
        <style>
            .row-av-ideia>*{
                width: min-content;
            }
        </style>
        <div class="swiper-slide">
            <div class="card">
                <div class="row">
                    <div class="col-12 card-col img-card">
                        <a href="pagIdeia.php?idPostagem='.$idPost.'"><img class="img-card-ideia" src="midias/icones-materiais/img-ideia.jpg" alt="Ideia de reutilização com garrafas pet"></a>
                    </div>
                    <div class="col-12 card-col card-content">
                        <a href="pagIdeia.php?idPostagem='.$idPost.'">
                            <div class="card-title">'.$nome.'</div>
                        </a>
                        <a href="perfil.php?type=perfil&user='.$usuario.'">
                            <div class="card-subtitle">'.$usuario.'</div>
                        </a>
                        <a href="pagIdeia.php?idPostagem='.$idPost.'">
                            <div class="card-text">
                                <div class="row row-av-ideia">
                                    <div class="alinha-estrela">'.$this->carregaAvaliacao2($avaliacao, $idPost).'</div>
                                    <div>
                                        <div class="dificuldade dificuldade-'.$dificuldade.'"></div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>';
    }

    public function createCardIdeia6($nome, $usuario, $dificuldade, $avaliacao, $idPost){
        return '
        <style>
            .row-av-ideia>*{
                width: min-content;
            }
        </style>
        <div class="swiper-slide">
            <div class="card">
                <div class="row">
                    <div class="col-12 card-col img-card">
                        <a href="pagIdeia.php?idPostagem='.$idPost.'"><img class="img-card-ideia" src="midias/icones-materiais/img-ideia.jpg" alt="Ideia de reutilização com garrafas pet"></a>
                    </div>
                    <div class="col-12 card-col card-content">
                        <a href="pagIdeia.php?idPostagem='.$idPost.'">
                            <div class="card-title">'.$nome.'</div>
                        </a>
                        <a href="perfil.php?type=perfil&user='.$usuario.'">
                            <div class="card-subtitle">'.$usuario.'</div>
                        </a>
                        <a href="pagIdeia.php?idPostagem='.$idPost.'">
                            <div class="card-text">
                                <div class="row row-av-ideia">
                                    <div class="alinha-estrela">'.$this->carregaAvaliacao3($avaliacao, $idPost).'</div>
                                    <div>
                                        <div class="dificuldade dificuldade-'.$dificuldade.'"></div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>';
    }

    /* Avaliações */
    public function carregaAvaliacao($avaliacao, $idPost){
        if ($avaliacao == 5){
            return '
            <div class="rating">
                <input value="5" name="rating-'.$idPost.'-5" id="star-'.$idPost.'-5" type="radio" disabled checked>
                <label for="star-'.$idPost.'-5"></label>
                <input value="4" name="rating-'.$idPost.'-4" id="star-'.$idPost.'-4" type="radio" disabled>
                <label for="star-'.$idPost.'-4"></label>
                <input value="3" name="rating-'.$idPost.'-3" id="star-'.$idPost.'-3" type="radio" disabled>
                <label for="star-'.$idPost.'-3"></label>
                <input value="2" name="rating-'.$idPost.'-2" id="star-'.$idPost.'-2" type="radio" disabled>
                <label for="star-'.$idPost.'-2"></label>
                <input value="1" name="rating-'.$idPost.'-1" id="star-'.$idPost.'-1" type="radio" disabled>
                <label for="star-'.$idPost.'-1"></label>
            </div>';
        }
        else if ($avaliacao >= 4){
            return '
            <div class="rating">
                <input value="5" name="rating-'.$idPost.'-5" id="star-'.$idPost.'-5" type="radio" disabled>
                <label for="star-'.$idPost.'-5"></label>
                <input value="4" name="rating-'.$idPost.'-4" id="star-'.$idPost.'-4" type="radio" disabled checked>
                <label for="star-'.$idPost.'-4"></label>
                <input value="3" name="rating-'.$idPost.'-3" id="star-'.$idPost.'-3" type="radio" disabled>
                <label for="star-'.$idPost.'-3"></label>
                <input value="2" name="rating-'.$idPost.'-2" id="star-'.$idPost.'-2" type="radio" disabled>
                <label for="star-'.$idPost.'-2"></label>
                <input value="1" name="rating-'.$idPost.'-1" id="star-'.$idPost.'-1" type="radio" disabled>
                <label for="star-'.$idPost.'-1"></label>
            </div>';
        }
        else if ($avaliacao >= 3){
            return '
            <div class="rating">
                <input value="5" name="rating-'.$idPost.'-5" id="star-'.$idPost.'-5" type="radio" disabled>
                <label for="star-'.$idPost.'-5"></label>
                <input value="4" name="rating-'.$idPost.'-4" id="star-'.$idPost.'-4" type="radio" disabled>
                <label for="star-'.$idPost.'-4"></label>
                <input value="3" name="rating-'.$idPost.'-3" id="star-'.$idPost.'-3" type="radio" disabled checked>
                <label for="star-'.$idPost.'-3"></label>
                <input value="2" name="rating-'.$idPost.'-2" id="star-'.$idPost.'-2" type="radio" disabled>
                <label for="star-'.$idPost.'-2"></label>
                <input value="1" name="rating-'.$idPost.'-1" id="star-'.$idPost.'-1" type="radio" disabled>
                <label for="star-'.$idPost.'-1"></label>
            </div>';
        }
        else if ($avaliacao >= 2){
            return '
            <div class="rating">
                <input value="5" name="rating-'.$idPost.'-5" id="star-'.$idPost.'-5" type="radio" disabled>
                <label for="star-'.$idPost.'-5"></label>
                <input value="4" name="rating-'.$idPost.'-4" id="star-'.$idPost.'-4" type="radio" disabled>
                <label for="star-'.$idPost.'-4"></label>
                <input value="3" name="rating-'.$idPost.'-3" id="star-'.$idPost.'-3" type="radio" disabled>
                <label for="star-'.$idPost.'-3"></label>
                <input value="2" name="rating-'.$idPost.'-2" id="star-'.$idPost.'-2" type="radio" disabled checked>
                <label for="star-'.$idPost.'-2"></label>
                <input value="1" name="rating-'.$idPost.'-1" id="star-'.$idPost.'-1" type="radio" disabled>
                <label for="star-'.$idPost.'-1"></label>
            </div>';
        }
        else if ($avaliacao >= 1){
            return '
            <div class="rating">
                <input value="5" name="rating-'.$idPost.'-5" id="star-'.$idPost.'-5" type="radio" disabled>
                <label for="star-'.$idPost.'-5"></label>
                <input value="4" name="rating-'.$idPost.'-4" id="star-'.$idPost.'-4" type="radio" disabled>
                <label for="star-'.$idPost.'-4"></label>
                <input value="3" name="rating-'.$idPost.'-3" id="star-'.$idPost.'-3" type="radio" disabled>
                <label for="star-'.$idPost.'-3"></label>
                <input value="2" name="rating-'.$idPost.'-2" id="star-'.$idPost.'-2" type="radio" disabled>
                <label for="star-'.$idPost.'-2"></label>
                <input value="1" name="rating-'.$idPost.'-1" id="star-'.$idPost.'-1" type="radio" disabled checked>
                <label for="star-'.$idPost.'-1"></label>
            </div>';
        }
        else{
            return '
            <div class="rating">
                <input value="5" name="rating-'.$idPost.'-5" id="star-'.$idPost.'-5" type="radio" disabled>
                <label for="star-'.$idPost.'-5"></label>
                <input value="4" name="rating-'.$idPost.'-4" id="star-'.$idPost.'-4" type="radio" disabled>
                <label for="star-'.$idPost.'-4"></label>
                <input value="3" name="rating-'.$idPost.'-3" id="star-'.$idPost.'-3" type="radio" disabled>
                <label for="star-'.$idPost.'-3"></label>
                <input value="2" name="rating-'.$idPost.'-2" id="star-'.$idPost.'-2" type="radio" disabled>
                <label for="star-'.$idPost.'-2"></label>
                <input value="1" name="rating-'.$idPost.'-1" id="star-'.$idPost.'-1" type="radio" disabled>
                <label for="star-'.$idPost.'-1"></label>
            </div>';
        }
    }

    public function carregaAvaliacao2($avaliacao, $idPost){
        if ($avaliacao == 5){
            return '
            <div class="rating">
                <input value="5" name="rating-best-'.$idPost.'-5" id="star-best-'.$idPost.'-5" type="radio" disabled checked>
                <label for="star-best-'.$idPost.'-5"></label>
                <input value="4" name="rating-best-'.$idPost.'-4" id="star-best-'.$idPost.'-4" type="radio" disabled>
                <label for="star-best-'.$idPost.'-4"></label>
                <input value="3" name="rating-best-'.$idPost.'-3" id="star-best-'.$idPost.'-3" type="radio" disabled>
                <label for="star-best-'.$idPost.'-3"></label>
                <input value="2" name="rating-best-'.$idPost.'-2" id="star-best-'.$idPost.'-2" type="radio" disabled>
                <label for="star-best-'.$idPost.'-2"></label>
                <input value="1" name="rating-best-'.$idPost.'-1" id="star-best-'.$idPost.'-1" type="radio" disabled>
                <label for="star-best-'.$idPost.'-1"></label>
            </div>';
        }
        else if ($avaliacao >= 4){
            return '
            <div class="rating">
                <input value="5" name="rating-best-'.$idPost.'-5" id="star-best-'.$idPost.'-5" type="radio" disabled>
                <label for="star-best-'.$idPost.'-5"></label>
                <input value="4" name="rating-best-'.$idPost.'-4" id="star-best-'.$idPost.'-4" type="radio" disabled checked>
                <label for="star-best-'.$idPost.'-4"></label>
                <input value="3" name="rating-best-'.$idPost.'-3" id="star-best-'.$idPost.'-3" type="radio" disabled>
                <label for="star-best-'.$idPost.'-3"></label>
                <input value="2" name="rating-best-'.$idPost.'-2" id="star-best-'.$idPost.'-2" type="radio" disabled>
                <label for="star-best-'.$idPost.'-2"></label>
                <input value="1" name="rating-best-'.$idPost.'-1" id="star-best-'.$idPost.'-1" type="radio" disabled>
                <label for="star-best-'.$idPost.'-1"></label>
            </div>';
        }
        else if ($avaliacao >= 3){
            return '
            <div class="rating">
                <input value="5" name="rating-best-'.$idPost.'-5" id="star-best-'.$idPost.'-5" type="radio" disabled>
                <label for="star-best-'.$idPost.'-5"></label>
                <input value="4" name="rating-best-'.$idPost.'-4" id="star-best-'.$idPost.'-4" type="radio" disabled>
                <label for="star-best-'.$idPost.'-4"></label>
                <input value="3" name="rating-best-'.$idPost.'-3" id="star-best-'.$idPost.'-3" type="radio" disabled checked>
                <label for="star-best-'.$idPost.'-3"></label>
                <input value="2" name="rating-best-'.$idPost.'-2" id="star-best-'.$idPost.'-2" type="radio" disabled>
                <label for="star-best-'.$idPost.'-2"></label>
                <input value="1" name="rating-best-'.$idPost.'-1" id="star-best-'.$idPost.'-1" type="radio" disabled>
                <label for="star-best-'.$idPost.'-1"></label>
            </div>';
        }
        else if ($avaliacao >= 2){
            return '
            <div class="rating">
                <input value="5" name="rating-best-'.$idPost.'-5" id="star-best-'.$idPost.'-5" type="radio" disabled>
                <label for="star-best-'.$idPost.'-5"></label>
                <input value="4" name="rating-best-'.$idPost.'-4" id="star-best-'.$idPost.'-4" type="radio" disabled>
                <label for="star-best-'.$idPost.'-4"></label>
                <input value="3" name="rating-best-'.$idPost.'-3" id="star-best-'.$idPost.'-3" type="radio" disabled>
                <label for="star-best-'.$idPost.'-3"></label>
                <input value="2" name="rating-best-'.$idPost.'-2" id="star-best-'.$idPost.'-2" type="radio" disabled checked>
                <label for="star-best-'.$idPost.'-2"></label>
                <input value="1" name="rating-best-'.$idPost.'-1" id="star-best-'.$idPost.'-1" type="radio" disabled>
                <label for="star-best-'.$idPost.'-1"></label>
            </div>';
        }
        else if ($avaliacao >= 1){
            return '
            <div class="rating">
                <input value="5" name="rating-best-'.$idPost.'-5" id="star-best-'.$idPost.'-5" type="radio" disabled>
                <label for="star-best-'.$idPost.'-5"></label>
                <input value="4" name="rating-best-'.$idPost.'-4" id="star-best-'.$idPost.'-4" type="radio" disabled>
                <label for="star-best-'.$idPost.'-4"></label>
                <input value="3" name="rating-best-'.$idPost.'-3" id="star-best-'.$idPost.'-3" type="radio" disabled>
                <label for="star-best-'.$idPost.'-3"></label>
                <input value="2" name="rating-best-'.$idPost.'-2" id="star-best-'.$idPost.'-2" type="radio" disabled>
                <label for="star-best-'.$idPost.'-2"></label>
                <input value="1" name="rating-best-'.$idPost.'-1" id="star-best-'.$idPost.'-1" type="radio" disabled checked>
                <label for="star-best-'.$idPost.'-1"></label>
            </div>';
        }
        else{
            return '
            <div class="rating">
                <input value="5" name="rating-best-'.$idPost.'-5" id="star-best-'.$idPost.'-5" type="radio" disabled>
                <label for="star-best-'.$idPost.'-5"></label>
                <input value="4" name="rating-best-'.$idPost.'-4" id="star-best-'.$idPost.'-4" type="radio" disabled>
                <label for="star-best-'.$idPost.'-4"></label>
                <input value="3" name="rating-best-'.$idPost.'-3" id="star-best-'.$idPost.'-3" type="radio" disabled>
                <label for="star-best-'.$idPost.'-3"></label>
                <input value="2" name="rating-best-'.$idPost.'-2" id="star-best-'.$idPost.'-2" type="radio" disabled>
                <label for="star-best-'.$idPost.'-2"></label>
                <input value="1" name="rating-best-'.$idPost.'-1" id="star-best-'.$idPost.'-1" type="radio" disabled>
                <label for="star-best-'.$idPost.'-1"></label>
            </div>';
        }
    }
    
    public function carregaAvaliacao3($avaliacao, $idPost){
        if ($avaliacao == 5){
            return '
            <div class="rating">
                <input value="5" name="2nd-rating-best-'.$idPost.'-5" id="2nd-star-best-'.$idPost.'-5" type="radio" disabled checked>
                <label for="2nd-star-best-'.$idPost.'-5"></label>
                <input value="4" name="2nd-rating-best-'.$idPost.'-4" id="2nd-star-best-'.$idPost.'-4" type="radio" disabled>
                <label for="2nd-star-best-'.$idPost.'-4"></label>
                <input value="3" name="2nd-rating-best-'.$idPost.'-3" id="2nd-star-best-'.$idPost.'-3" type="radio" disabled>
                <label for="2nd-star-best-'.$idPost.'-3"></label>
                <input value="2" name="2nd-rating-best-'.$idPost.'-2" id="2nd-star-best-'.$idPost.'-2" type="radio" disabled>
                <label for="2nd-star-best-'.$idPost.'-2"></label>
                <input value="1" name="2nd-rating-best-'.$idPost.'-1" id="2nd-star-best-'.$idPost.'-1" type="radio" disabled>
                <label for="2nd-star-best-'.$idPost.'-1"></label>
            </div>';
        }
        else if ($avaliacao >= 4){
            return '
            <div class="rating">
                <input value="5" name="2nd-rating-best-'.$idPost.'-5" id="2nd-star-best-'.$idPost.'-5" type="radio" disabled>
                <label for="2nd-star-best-'.$idPost.'-5"></label>
                <input value="4" name="2nd-rating-best-'.$idPost.'-4" id="2nd-star-best-'.$idPost.'-4" type="radio" disabled checked>
                <label for="2nd-star-best-'.$idPost.'-4"></label>
                <input value="3" name="2nd-rating-best-'.$idPost.'-3" id="2nd-star-best-'.$idPost.'-3" type="radio" disabled>
                <label for="2nd-star-best-'.$idPost.'-3"></label>
                <input value="2" name="2nd-rating-best-'.$idPost.'-2" id="2nd-star-best-'.$idPost.'-2" type="radio" disabled>
                <label for="2nd-star-best-'.$idPost.'-2"></label>
                <input value="1" name="2nd-rating-best-'.$idPost.'-1" id="2nd-star-best-'.$idPost.'-1" type="radio" disabled>
                <label for="2nd-star-best-'.$idPost.'-1"></label>
            </div>';
        }
        else if ($avaliacao >= 3){
            return '
            <div class="rating">
                <input value="5" name="2nd-rating-best-'.$idPost.'-5" id="2nd-star-best-'.$idPost.'-5" type="radio" disabled>
                <label for="2nd-star-best-'.$idPost.'-5"></label>
                <input value="4" name="2nd-rating-best-'.$idPost.'-4" id="2nd-star-best-'.$idPost.'-4" type="radio" disabled>
                <label for="2nd-star-best-'.$idPost.'-4"></label>
                <input value="3" name="2nd-rating-best-'.$idPost.'-3" id="2nd-star-best-'.$idPost.'-3" type="radio" disabled checked>
                <label for="2nd-star-best-'.$idPost.'-3"></label>
                <input value="2" name="2nd-rating-best-'.$idPost.'-2" id="2nd-star-best-'.$idPost.'-2" type="radio" disabled>
                <label for="2nd-star-best-'.$idPost.'-2"></label>
                <input value="1" name="2nd-rating-best-'.$idPost.'-1" id="2nd-star-best-'.$idPost.'-1" type="radio" disabled>
                <label for="2nd-star-best-'.$idPost.'-1"></label>
            </div>';
        }
        else if ($avaliacao >= 2){
            return '
            <div class="rating">
                <input value="5" name="2nd-rating-best-'.$idPost.'-5" id="2nd-star-best-'.$idPost.'-5" type="radio" disabled>
                <label for="2nd-star-best-'.$idPost.'-5"></label>
                <input value="4" name="2nd-rating-best-'.$idPost.'-4" id="2nd-star-best-'.$idPost.'-4" type="radio" disabled>
                <label for="2nd-star-best-'.$idPost.'-4"></label>
                <input value="3" name="2nd-rating-best-'.$idPost.'-3" id="2nd-star-best-'.$idPost.'-3" type="radio" disabled>
                <label for="2nd-star-best-'.$idPost.'-3"></label>
                <input value="2" name="2nd-rating-best-'.$idPost.'-2" id="2nd-star-best-'.$idPost.'-2" type="radio" disabled checked>
                <label for="2nd-star-best-'.$idPost.'-2"></label>
                <input value="1" name="2nd-rating-best-'.$idPost.'-1" id="2nd-star-best-'.$idPost.'-1" type="radio" disabled>
                <label for="2nd-star-best-'.$idPost.'-1"></label>
            </div>';
        }
        else if ($avaliacao >= 1){
            return '
            <div class="rating">
                <input value="5" name="2nd-rating-best-'.$idPost.'-5" id="2nd-star-best-'.$idPost.'-5" type="radio" disabled>
                <label for="2nd-star-best-'.$idPost.'-5"></label>
                <input value="4" name="2nd-rating-best-'.$idPost.'-4" id="2nd-star-best-'.$idPost.'-4" type="radio" disabled>
                <label for="2nd-star-best-'.$idPost.'-4"></label>
                <input value="3" name="2nd-rating-best-'.$idPost.'-3" id="2nd-star-best-'.$idPost.'-3" type="radio" disabled>
                <label for="2nd-star-best-'.$idPost.'-3"></label>
                <input value="2" name="2nd-rating-best-'.$idPost.'-2" id="2nd-star-best-'.$idPost.'-2" type="radio" disabled>
                <label for="2nd-star-best-'.$idPost.'-2"></label>
                <input value="1" name="2nd-rating-best-'.$idPost.'-1" id="2nd-star-best-'.$idPost.'-1" type="radio" disabled checked>
                <label for="2nd-star-best-'.$idPost.'-1"></label>
            </div>';
        }
        else{
            return '
            <div class="rating">
                <input value="5" name="2nd-rating-best-'.$idPost.'-5" id="2nd-star-best-'.$idPost.'-5" type="radio" disabled>
                <label for="2nd-star-best-'.$idPost.'-5"></label>
                <input value="4" name="2nd-rating-best-'.$idPost.'-4" id="2nd-star-best-'.$idPost.'-4" type="radio" disabled>
                <label for="2nd-star-best-'.$idPost.'-4"></label>
                <input value="3" name="2nd-rating-best-'.$idPost.'-3" id="2nd-star-best-'.$idPost.'-3" type="radio" disabled>
                <label for="2nd-star-best-'.$idPost.'-3"></label>
                <input value="2" name="2nd-rating-best-'.$idPost.'-2" id="2nd-star-best-'.$idPost.'-2" type="radio" disabled>
                <label for="2nd-star-best-'.$idPost.'-2"></label>
                <input value="1" name="2nd-rating-best-'.$idPost.'-1" id="2nd-star-best-'.$idPost.'-1" type="radio" disabled>
                <label for="2nd-star-best-'.$idPost.'-1"></label>
            </div>';
        }
    }

    public function carregaAvaliacao4($avaliacao, $idPost, $idUser){
        if ($avaliacao == 5){
            return '<div class="rating rating-x" id="avaliacao"><input value="5" name="rating-avaliado-'.$idPost.'-5" id="star-avaliado-'.$idPost.'-5" type="radio" onclick="avaliar('.$idUser.', '.$idPost.', 5)" checked><label for="star-avaliado-'.$idPost.'-5"></label><input value="4" name="rating-avaliado-'.$idPost.'-4" id="star-avaliado-'.$idPost.'-4" type="radio" onclick="avaliar('.$idUser.', '.$idPost.', )"><label for="star-avaliado-'.$idPost.'-4"></label><input value="3" name="rating-avaliado-'.$idPost.'-3" id="star-avaliado-'.$idPost.'-3" type="radio" onclick="avaliar('.$idUser.', '.$idPost.', )"><label for="star-avaliado-'.$idPost.'-3"></label><input value="2" name="rating-avaliado-'.$idPost.'-2" id="star-avaliado-'.$idPost.'-2" type="radio" onclick="avaliar('.$idUser.', '.$idPost.', )"><label for="star-avaliado-'.$idPost.'-2"></label><input value="1" name="rating-avaliado-'.$idPost.'-1" id="star-avaliado-'.$idPost.'-1" type="radio" onclick="avaliar('.$idUser.', '.$idPost.', 1)"><label for="star-avaliado-'.$idPost.'-1"></label></div>';
        }
        else if ($avaliacao >= 4){
            return '<div class="rating rating-x" id="avaliacao"><input value="5" name="rating-avaliado-'.$idPost.'-5" id="star-avaliado-'.$idPost.'-5" type="radio" onclick="avaliar('.$idUser.', '.$idPost.', 5)"><label for="star-avaliado-'.$idPost.'-5"></label><input value="4" name="rating-avaliado-'.$idPost.'-4" id="star-avaliado-'.$idPost.'-4" type="radio" onclick="avaliar('.$idUser.', '.$idPost.', 4)" checked><label for="star-avaliado-'.$idPost.'-4"></label><input value="3" name="rating-avaliado-'.$idPost.'-3" id="star-avaliado-'.$idPost.'-3" type="radio" onclick="avaliar('.$idUser.', '.$idPost.', 3)"><label for="star-avaliado-'.$idPost.'-3"></label><input value="2" name="rating-avaliado-'.$idPost.'-2" id="star-avaliado-'.$idPost.'-2" type="radio" onclick="avaliar('.$idUser.', '.$idPost.', 2)"><label for="star-avaliado-'.$idPost.'-2"></label><input value="1" name="rating-avaliado-'.$idPost.'-1" id="star-avaliado-'.$idPost.'-1" type="radio" onclick="avaliar('.$idUser.', '.$idPost.', 1)"><label for="star-avaliado-'.$idPost.'-1"></label></div>';
        }
        else if ($avaliacao >= 3){
            return '<div class="rating rating-x" id="avaliacao"><input value="5" name="rating-avaliado-'.$idPost.'-5" id="star-avaliado-'.$idPost.'-5" type="radio" onclick="avaliar('.$idUser.', '.$idPost.', 5)"><label for="star-avaliado-'.$idPost.'-5"></label><input value="4" name="rating-avaliado-'.$idPost.'-4" id="star-avaliado-'.$idPost.'-4" type="radio" onclick="avaliar('.$idUser.', '.$idPost.', 4)"><label for="star-avaliado-'.$idPost.'-4"></label><input value="3" name="rating-avaliado-'.$idPost.'-3" id="star-avaliado-'.$idPost.'-3" type="radio" onclick="avaliar('.$idUser.', '.$idPost.', 3)" checked><label for="star-avaliado-'.$idPost.'-3"></label><input value="2" name="rating-avaliado-'.$idPost.'-2" id="star-avaliado-'.$idPost.'-2" type="radio" onclick="avaliar('.$idUser.', '.$idPost.', 2)"><label for="star-avaliado-'.$idPost.'-2"></label><input value="1" name="rating-avaliado-'.$idPost.'-1" id="star-avaliado-'.$idPost.'-1" type="radio" onclick="avaliar('.$idUser.', '.$idPost.', 1)"><label for="star-avaliado-'.$idPost.'-1"></label></div>';
        }
        else if ($avaliacao >= 2){
            return '<div class="rating rating-x" id="avaliacao"><input value="5" name="rating-avaliado-'.$idPost.'-5" id="star-avaliado-'.$idPost.'-5" type="radio" onclick="avaliar('.$idUser.', '.$idPost.', 5)"><label for="star-avaliado-'.$idPost.'-5"></label><input value="4" name="rating-avaliado-'.$idPost.'-4" id="star-avaliado-'.$idPost.'-4" type="radio" onclick="avaliar('.$idUser.', '.$idPost.', 4)"><label for="star-avaliado-'.$idPost.'-4"></label><input value="3" name="rating-avaliado-'.$idPost.'-3" id="star-avaliado-'.$idPost.'-3" type="radio" onclick="avaliar('.$idUser.', '.$idPost.', 3)"><label for="star-avaliado-'.$idPost.'-3"></label><input value="2" name="rating-avaliado-'.$idPost.'-2" id="star-avaliado-'.$idPost.'-2" type="radio" onclick="avaliar('.$idUser.', '.$idPost.', 2)" checked><label for="star-avaliado-'.$idPost.'-2"></label><input value="1" name="rating-avaliado-'.$idPost.'-1" id="star-avaliado-'.$idPost.'-1" type="radio" onclick="avaliar('.$idUser.', '.$idPost.', 1)"><label for="star-avaliado-'.$idPost.'-1"></label></div>';
        }
        else if ($avaliacao >= 1){
            return '<div class="rating rating-x" id="avaliacao"><input value="5" name="rating-avaliado-'.$idPost.'-5" id="star-avaliado-'.$idPost.'-5" type="radio" onclick="avaliar('.$idUser.', '.$idPost.', 5)"><label for="star-avaliado-'.$idPost.'-5"></label><input value="4" name="rating-avaliado-'.$idPost.'-4" id="star-avaliado-'.$idPost.'-4" type="radio" onclick="avaliar('.$idUser.', '.$idPost.', 4)"><label for="star-avaliado-'.$idPost.'-4"></label><input value="3" name="rating-avaliado-'.$idPost.'-3" id="star-avaliado-'.$idPost.'-3" type="radio" onclick="avaliar('.$idUser.', '.$idPost.', 3)"><label for="star-avaliado-'.$idPost.'-3"></label><input value="2" name="rating-avaliado-'.$idPost.'-2" id="star-avaliado-'.$idPost.'-2" type="radio" onclick="avaliar('.$idUser.', '.$idPost.', 2)"><label for="star-avaliado-'.$idPost.'-2"></label><input value="1" name="rating-avaliado-'.$idPost.'-1" id="star-avaliado-'.$idPost.'-1" type="radio" onclick="avaliar('.$idUser.', '.$idPost.', 1)" checked><label for="star-avaliado-'.$idPost.'-1"></label></div>';
        }
        else{
            return '<div class="rating rating-x" id="avaliacao"><input value="5" name="rating-avaliado-'.$idPost.'-5" id="star-avaliado-'.$idPost.'-5" type="radio" onclick="avaliar('.$idUser.', '.$idPost.', 5)"><label for="star-avaliado-'.$idPost.'-5"></label><input value="4" name="rating-avaliado-'.$idPost.'-4" id="star-avaliado-'.$idPost.'-4" type="radio" onclick="avaliar('.$idUser.', '.$idPost.', 4)"><label for="star-avaliado-'.$idPost.'-4"></label><input value="3" name="rating-avaliado-'.$idPost.'-3" id="star-avaliado-'.$idPost.'-3" type="radio" onclick="avaliar('.$idUser.', '.$idPost.', 3)"><label for="star-avaliado-'.$idPost.'-3"></label><input value="2" name="rating-avaliado-'.$idPost.'-2" id="star-avaliado-'.$idPost.'-2" type="radio" onclick="avaliar('.$idUser.', '.$idPost.', 2)"><label for="star-avaliado-'.$idPost.'-2"></label><input value="1" name="rating-avaliado-'.$idPost.'-1" id="star-avaliado-'.$idPost.'-1" type="radio" onclick="avaliar('.$idUser.', '.$idPost.', 1)"><label for="star-avaliado-'.$idPost.'-1"></label></div>';
        }
    }

    //Getters e Setters

    public function getIdPostagem() {
        return $this->idPostagem;
    }
      
    public function setIdPostagem($name) {
    $this->idPostagem = $name;
    }

    public function getNomeIdeia() {
        return $this->nomeIdeia;
    }
      
    public function setNomeIdeia($name) {
    $this->nomeIdeia = $name;
    }

    public function getUserIdeia() {
        return $this->userIdeia;
    }
      
    public function setUserIdeia($name) {
    $this->userIdeia = $name;
    }

    public function getNumCurtidas() {
        return $this->numCurtidas;
    }
      
    public function setNumCurtidas($name) {
    $this->numCurtidas = $name;
    }

    public function getDescricaoPostagem() {
        return $this->descricaoPostagem;
    }
      
    public function setDescricaoPostagem($name) {
    $this->descricaoPostagem = $name;
    }

    public function getMateriaisNecessarios() {
        return $this->materiaisNecessarios;
    }
      
    public function setMateriaisNecessarios($name) {
    $this->materiaisNecessarios = $name;
    }

    public function getInstrucoesPostagem() {
        return $this->instrucoesPostagem;
    }
      
    public function setInstrucoesPostagem($name) {
    $this->instrucoesPostagem = $name;
    }

    public function getMaterialPostagem() {
        return $this->materialPostagem;
    }
      
    public function setMaterialPostagem($name) {
    $this->materialPostagem = $name;
    }

    public function getDificuldadeIdeia() {
        return $this->dificuldadeIdeia;
    }
      
    public function setDificuldadeIdeia($name) {
    $this->dificuldadeIdeia= $name;
    }

    public function getAvaliacaoPostagem() {
        return $this->avaliacaoPostagem;
    }
      
    public function setAvaliacaoPostagem($name) {
    $this->dificuldadeIdeia= $name;
    }

    public function getQtdeAvaliacoes() {
        return $this->qtdeAvaliacoes;
    }
      
    public function setQtdeAvaliacoes($name) {
    $this->qtdeAvaliacoes= $name;
    }

}
