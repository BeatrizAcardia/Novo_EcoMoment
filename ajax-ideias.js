var curtido = false;

function estaCurtido(user, idPost){
    if(user != 0){
        let ajax = new XMLHttpRequest();
    
        ajax.open('GET', 'script-ideias.php?user='+user+'&idPostagem='+idPost+'&funcao=curtida', true);
        ajax.onreadystatechange = function(){
            if(ajax.readyState == 4){
                if(ajax.status == 200){
                    let curtida = ajax.responseText;
                    if(curtida == true){
                        curtido = curtida;
                        document.querySelector('.curtida').innerHTML = '<img class="btnInteraction" src="midias/icones-pagIdeia/curtida-1.png" alt="Ícone de coração sem preenchimento">';
                    }
                    else{
                        curtido = curtida;
                    }
                }
                else{
                    alertaErro('Houve um ao carregar a curtida. Tente atualizar a página.');
                }
            }
        }
    
        ajax.send(null);
    }
}

function estaAvaliado(user, idPost){
    if(user != 0){
        let ajax = new XMLHttpRequest();
    
        ajax.open('GET', 'script-ideias.php?user='+user+'&idPostagem='+idPost+'&funcao=avaliado', true);
        ajax.onreadystatechange = function(){
            if(ajax.readyState == 4){
                if(ajax.status == 200){
                    let avaliado = ajax.responseText;
                    if(avaliado == true){
                        carregarAvaliacao(user, idPost);
                    }
                }
                else{
                    alertaErro('Houve um ao carregar a avaliação. Tente atualizar a página.');
                }
            }
        }
    
        ajax.send(null);
    }
}

function curtir(user, idPost){
    if(user != 0){
        let ajax = new XMLHttpRequest();
        if (curtido == true){
            ajax.open('GET', 'script-ideias.php?user='+user+'&idPostagem='+idPost+'&funcao=curtir', true);
            ajax.onreadystatechange = function(){
                if(ajax.readyState == 4){
                    if(ajax.status == 200){
                        let descurtiu = ajax.responseText;
                        if(descurtiu == 'descurtiu'){
                            document.querySelector('.curtida').innerHTML = '<img class="btnInteraction" src="midias/icones-pagIdeia/curtida-2.png" alt="Ícone de coração sem preenchimento">';
                            numeroCurtidas(user, idPost);
                            curtido = false;
                        }
                        else{
                            alertaErro('1 - Erro ao descurtir. Tente novamente ou, se o problema persistir, atualize a página.');
                        }
                    }
                    else{
                        alertaErro('2 - Erro ao descurtir. Tente novamente ou, se o problema persistir, atualize a página.');
                    }
                }
            }

        } else{
            ajax.open('GET', 'script-ideias.php?user='+user+'&idPostagem='+idPost+'&funcao=curtir', true);
            ajax.onreadystatechange = function(){
                if(ajax.readyState == 4){
                    if(ajax.status == 200){
                        let curtiu = ajax.responseText;
                        if(curtiu == 'curtiu'){
                            document.querySelector('.curtida').innerHTML = '<img class="btnInteraction" src="midias/icones-pagIdeia/curtida-1.png" alt="Ícone de coração com preenchimento">';
                            numeroCurtidas(user, idPost);
                            curtido = true;
                        }
                        else{
                            alertaErro('1 - Erro ao curtir. Tente novamente ou, se o problema persistir, atualize a página.');
                        }
                    }
                    else{
                        alertaErro('2 - Erro ao curtir. Tente novamente ou, se o problema persistir, atualize a página.');
                    }
                }
            }
        }
    
        ajax.send(null);
    }
    else{
        alertaAviso('Para ter acesso a essa funcionalidade você precisa estar logado.');
    }
}

function numeroCurtidas(user, idPost){
    if(user != 0){
        let ajax = new XMLHttpRequest();
    
        ajax.open('GET', 'script-ideias.php?user='+user+'&idPostagem='+idPost+'&funcao=numeroCurtidas', true);
        ajax.onreadystatechange = function(){
            if(ajax.readyState == 4){
                if(ajax.status == 200){
                    let numero = ajax.responseText;
                    document.getElementById('numCurtidas').innerHTML = numero;
                }
                else{
                    alertaErro('Houve um ao carregar o número de curtidas. Tente atualizar a página.');
                }
            }
        }
    
        ajax.send(null);
    }
}

function avaliar(user, idPost, valor){
    if(user != 0){
        let ajax = new XMLHttpRequest();
    
        ajax.open('GET', `script-ideias.php?user=${user}&idPostagem=${idPost}&funcao=avaliar&valor=${valor}`, true);
        ajax.onreadystatechange = function(){
            if(ajax.readyState == 4){
                if(ajax.status == 200){
                    let avaliou = ajax.responseText;
                    if(avaliou != true){
                        alertaErro('false - Houve um ao processar a avaliação. Tente atualizar a página.\navaliou: '+avaliou);
                        document.getElementById('x-star5').checked = false;
                        document.getElementById('x-star4').checked = false;
                        document.getElementById('x-star3').checked = false;
                        document.getElementById('x-star2').checked = false;
                        document.getElementById('x-star1').checked = false;
                    }
                }
                else{
                    alertaErro('200 - Houve um ao processar a avaliação. Tente atualizar a página.');
                }
            }
        }
    
        ajax.send(null);
    }
    else{
        alertaAviso('Para ter acesso a essa funcionalidade você precisa estar logado.');
    }
}

function carregarAvaliacao(user, idPost){
    if(user != 0){
        let ajax = new XMLHttpRequest();
    
        ajax.open('GET', 'script-ideias.php?user='+user+'&idPostagem='+idPost+'&funcao=carregarAvaliacao', true);
        ajax.onreadystatechange = function(){
            if(ajax.readyState == 4){
                if(ajax.status == 200){
                    let av = ajax.responseText;
                    if(av == false){
                        document.getElementById('avaliacao').innerHTML = 'Já avaliada. Erro ao carregar';
                    }
                    else{
                        document.getElementById('avaliacao').innerHTML = av;
                    }
                }
                else{
                    alertaErro('Não foi possível carregar o número de curtidas. Tente atualizar a página.');
                }
            }
        }
    
        ajax.send(null);
    }
}

function compartilhar(link){
    const linkToCopy = link;
    navigator.clipboard.writeText(linkToCopy)
    .then(() => {
    alertaSucesso('Link copiado para a área de transferência!');
    })
    .catch((error) => {
    console.error('Erro ao copiar o link:', error);
    alertaErro('Não foi possível copiar o link para a área de transferência. Tente novamente.');
    });
}