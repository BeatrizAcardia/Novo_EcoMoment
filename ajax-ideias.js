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
                    alert('Houve um ao carregar a curtida. Tente atualizar a página.');
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
                    alert('Houve um ao carregar a avaliação. Tente atualizar a página.');
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
                            alert('1 - Erro ao descurtir. Tente novamente ou, se o problema persistir, atualize a página.');
                        }
                    }
                    else{
                        alert('2 - Erro ao descurtir. Tente novamente ou, se o problema persistir, atualize a página.');
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
                            alert('1 - Erro ao curtir. Tente novamente ou, se o problema persistir, atualize a página.');
                        }
                    }
                    else{
                        alert('2 - Erro ao curtir. Tente novamente ou, se o problema persistir, atualize a página.');
                    }
                }
            }
        }
    
        ajax.send(null);
    }
    else{
        alert('Para ter acesso a essa funcionalidade você precisa estar logado.');
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
                    alert('Houve um ao carregar o número de curtidas. Tente atualizar a página.');
                }
            }
        }
    
        ajax.send(null);
    }
}

function avaliar(user, idPost, valor){
    if(user != 0){
        alert(`${valor} estrela(s)`);
        let ajax = new XMLHttpRequest();
    
        ajax.open('GET', 'script-ideias.php?user='+user+'&idPostagem='+idPost+'&funcao=avaliar&valor='+valor, true);
        ajax.onreadystatechange = function(){
            if(ajax.readyState == 4){
                if(ajax.status == 200){
                    let avaliou = ajax.responseText;
                    if(avaliou == true){
                        document.getElementById('x-star5').disabled = 'true';
                        document.getElementById('x-star4').disabled = 'true';
                        document.getElementById('x-star3').disabled = 'true';
                        document.getElementById('x-star2').disabled = 'true';
                        document.getElementById('x-star1').disabled = 'true';
                    }
                    else{
                        alert('false - Houve um ao processar a avaliação. Tente atualizar a página.\navaliou: '+avaliou);
                        document.getElementById('x-star5').checked = false;
                        document.getElementById('x-star4').checked = false;
                        document.getElementById('x-star3').checked = false;
                        document.getElementById('x-star2').checked = false;
                        document.getElementById('x-star1').checked = false;
                    }
                }
                else{
                    alert('200 - Houve um ao processar a avaliação. Tente atualizar a página.');
                }
            }
        }
    
        ajax.send(null);
    }
    else{
        alert('Para ter acesso a essa funcionalidade você precisa estar logado.');
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
                    alert('Houve um ao carregar o número de curtidas. Tente atualizar a página.');
                }
            }
        }
    
        ajax.send(null);
    }
}

//select no bd de av e chama a func de carregar ideia -> a func js retorna o resultado do carregamento

function compartilhar(){
    alert('Compartilhou')
}