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
                        document.getElementById('avaliacao').innerHTML = "Já avaliado"; //Carregar a avaliação dada (criar função)
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

function curtirJS(user, idPost){
    if(user != 0){
        let ajax = new XMLHttpRequest();
        alert('entrou em curtirJS');
        if (curtido == true){
            alert('Já está curtida');
            ajax.open('GET', 'script-ideias.php?user='+user+'&idPostagem='+idPost+'&funcao=curtir', true);
            alert('Entrando na função ajax2');
            ajax.onreadystatechange = function(){
                alert('Entrei na função ajax2');
                if(ajax.readyState == 4){
                    if(ajax.status == 200){
                        let descurtiu = ajax.responseText;
                        alert(`descurtiu: ${descurtiu}`);
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
                else{
                    alert('3 - Erro ao descurtir. Tente novamente ou, se o problema persistir, atualize a página.');
                }
            }

        } else{
            alert('Ainda não está curtida');
            ajax.open('GET', 'script-ideias.php?user='+user+'&idPostagem='+idPost+'&funcao=curtir', true);
            ajax.onreadystatechange = function(){
                if(ajax.readyState == 4){
                    if(ajax.status == 200){
                        let curtiu = ajax.responseText;
                        alert(`curtiu: ${curtiu}`);
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
                else{
                    alert('3 - Erro ao curtir. Tente novamente ou, se o problema persistir, atualize a página.');
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

function avaliar(user, idPost, n){
    if(user != 0){
        alert(`${n} estrela(s)`)
        document.getElementById('x-star5').disabled = 'true';
        document.getElementById('x-star4').disabled = 'true';
        document.getElementById('x-star3').disabled = 'true';
        document.getElementById('x-star2').disabled = 'true';
        document.getElementById('x-star1').disabled = 'true';
    }
    else{
        alert('Para ter acesso a essa funcionalidade você precisa estar logado.');
    }
}

function compartilhar(){
    alert('Compartilhou')
}