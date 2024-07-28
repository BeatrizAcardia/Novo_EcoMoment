var result = document.getElementById('row-ideias');

function selecionaFiltro(n, mat){
    switch (n){
        case 1:
            document.getElementById('selectedFiltro').innerHTML = '<strong>Dificuldade</strong>';
            document.getElementById('filtro1').innerHTML = '<strong> Dificuldade</strong>';
            document.getElementById('filtro2').innerHTML = ' Avaliação';
            document.getElementById('filtro3').innerHTML = ' Curtidas';
            document.getElementById('filtro-1').innerHTML = 'Limpar seleção';
            document.getElementById('drop-dif').style.display = 'block';
            break;
        case 2:
            document.getElementById('selectedFiltro').innerHTML = '<strong>Avaliação</strong>';
            document.getElementById('filtro2').innerHTML = '<strong> Avaliação</strong>';
            document.getElementById('filtro1').innerHTML = ' Dificuldade';
            document.getElementById('filtro3').innerHTML = ' Curtidas';
            document.getElementById('filtro-1').innerHTML = 'Limpar seleção';
            document.getElementById('drop-dif').style.display = 'none';

            var ajax = new XMLHttpRequest();
            
            result.innerHTML = '<img class="loading" src="midias/loading/loading.gif" width="80">';

            ajax.open('GET', 'script-materiais.php?material='+mat+'&tipo=1&filtro='+n, true);
            ajax.onreadystatechange = function(){
                if(ajax.readyState == 4){
                    if(ajax.status == 200){
                        result.innerHTML = ajax.responseText;
                    }
                    else{
                        result.innerHTML = 'Houve um erro na conexão AJAX: '+ajax.statusText;
                    }
                }
            }
        
            ajax.send(null);

            break;
        case 3:
            document.getElementById('selectedFiltro').innerHTML = '<strong>Curtidas</strong>';
            document.getElementById('filtro3').innerHTML = '<strong> Curtidas</strong>';
            document.getElementById('filtro2').innerHTML = ' Avaliação';
            document.getElementById('filtro1').innerHTML = ' Dificuldade';
            document.getElementById('filtro-1').innerHTML = 'Limpar seleção';
            document.getElementById('drop-dif').style.display = 'none';
            
            var ajax = new XMLHttpRequest();

            result.innerHTML = '<img class="loading" src="midias/loading/loading.gif" width="80">';

            ajax.open('GET', 'script-materiais.php?material='+mat+'&tipo=1&filtro='+n, true);
            ajax.onreadystatechange = function(){
                if(ajax.readyState == 4){
                    if(ajax.status == 200){
                        result.innerHTML = ajax.responseText;
                    }
                    else{
                        result.innerHTML = 'Houve um erro na conexão AJAX: '+ajax.statusText;
                    }
                }
            }
        
            ajax.send(null);

            break;
        case -1:
            document.getElementById('selectedFiltro').innerHTML = 'Ordenar';
            document.getElementById('filtro3').innerHTML = ' Curtidas';
            document.getElementById('filtro2').innerHTML = ' Avaliação';
            document.getElementById('filtro1').innerHTML = ' Dificuldade';
            document.getElementById('filtro-1').innerHTML = '';
            document.getElementById('drop-dif').style.display = 'none';

            var ajax = new XMLHttpRequest();
            
            result.innerHTML = '<img class="loading" src="midias/loading/loading.gif" width="80">';

            ajax.open('GET', 'script-materiais.php?material='+mat+'&tipo=1&filtro='+n, true);
            ajax.onreadystatechange = function(){
                if(ajax.readyState == 4){
                    if(ajax.status == 200){
                        result.innerHTML = ajax.responseText;
                    }
                    else{
                        result.innerHTML = 'Houve um erro na conexão AJAX: '+ajax.statusText;
                    }
                }
            }
        
            ajax.send(null);
            
            break;
        default:
            alertaErro('ERRO! Houve um problema ao selecionar o filtro. Tente novamente ou recarregue a página.');
            break;
    }
    
}
        
function selecionaFiltro2(n, mat){
    switch (n){
        case 1:
            document.getElementById('selectedFiltro2').innerHTML = '<strong>Fácil</strong>';
            document.getElementById('filtro4').innerHTML = '<strong> Fácil</strong>';
            document.getElementById('filtro5').innerHTML = ' Média';
            document.getElementById('filtro6').innerHTML = ' Difícil';
            document.getElementById('filtro-2').innerHTML = 'Limpar seleção';

            var ajax = new XMLHttpRequest();

            result.innerHTML = '<img class="loading" src="midias/loading/loading.gif" width="80">';

            ajax.open('GET', 'script-materiais.php?material='+mat+'&tipo=2&filtro='+n, true);
            ajax.onreadystatechange = function(){
                if(ajax.readyState == 4){
                    if(ajax.status == 200){
                        result.innerHTML = ajax.responseText;
                    }
                    else{
                        result.innerHTML = 'Houve um erro na conexão AJAX: '+ajax.statusText;
                    }
                }
            }
        
            ajax.send(null);
            
            break;
        case 2:
            document.getElementById('selectedFiltro2').innerHTML = '<strong>Média</strong>';
            document.getElementById('filtro5').innerHTML = '<strong> Média</strong>';
            document.getElementById('filtro4').innerHTML = ' Fácil';
            document.getElementById('filtro6').innerHTML = ' Difícil';
            document.getElementById('filtro-2').innerHTML = 'Limpar seleção';
            content = '';

            var ajax = new XMLHttpRequest();

            result.innerHTML = '<img class="loading" src="midias/loading/loading.gif" width="80">';
            
            ajax.open('GET', 'script-materiais.php?material='+mat+'&tipo=2&filtro='+n, true);
            ajax.onreadystatechange = function(){
                if(ajax.readyState == 4){
                    if(ajax.status == 200){
                        result.innerHTML = ajax.responseText;
                    }
                    else{
                        result.innerHTML = 'Houve um erro na conexão AJAX: '+ajax.statusText;
                    }
                }
            }
        
            ajax.send(null);
            
            break;
        case 3:
            document.getElementById('selectedFiltro2').innerHTML = '<strong>Difícil</strong>';
            document.getElementById('filtro6').innerHTML = '<strong> Difícil</strong>';
            document.getElementById('filtro5').innerHTML = ' Média';
            document.getElementById('filtro4').innerHTML = ' Fácil';
            document.getElementById('filtro-2').innerHTML = 'Limpar seleção';

            var ajax = new XMLHttpRequest();

            result.innerHTML = '<img class="loading" src="midias/loading/loading.gif" width="80">';

            ajax.open('GET', 'script-materiais.php?material='+mat+'&tipo=2&filtro='+n, true);
            ajax.onreadystatechange = function(){
                if(ajax.readyState == 4){
                    if(ajax.status == 200){
                        result.innerHTML = ajax.responseText;
                    }
                    else{
                        result.innerHTML = 'Houve um erro na conexão AJAX: '+ajax.statusText;
                    }
                }
            }
        
            ajax.send(null);
            
            break;
        case -1:
            document.getElementById('selectedFiltro').innerHTML = 'Ordenar';
            document.getElementById('selectedFiltro2').innerHTML = 'Dificuldades';
            document.getElementById('filtro1').innerHTML = 'Dificuldade';
            document.getElementById('filtro6').innerHTML = ' Difícil';
            document.getElementById('filtro5').innerHTML = ' Média';
            document.getElementById('filtro4').innerHTML = ' Fácil';
            document.getElementById('filtro-1').innerHTML = '';
            document.getElementById('filtro-2').innerHTML = '';
            document.getElementById('drop-dif').style.display = 'none';

            var ajax = new XMLHttpRequest();

            result.innerHTML = '<img class="loading" src="midias/loading/loading.gif" width="80">';

            ajax.open('GET', 'script-materiais.php?material='+mat+'&tipo=2&filtro='+n, true);
            ajax.onreadystatechange = function(){
                if(ajax.readyState == 4){
                    if(ajax.status == 200){
                        result.innerHTML = ajax.responseText;
                    }
                    else{
                        result.innerHTML = 'Houve um erro na conexão AJAX: '+ajax.statusText;
                    }
                }
            }
        
            ajax.send(null);

            break;
        default:
            alertaErro('ERRO! Houve um problema ao selecionar o filtro. Tente novamente ou recarregue a página.');
            break;
    }
    
}

function pesquisar(mat){
    var texto = document.getElementById('search2').value;

    var ajax = new XMLHttpRequest();

    result.innerHTML = '<img class="loading" src="midias/loading/loading.gif" width="80">';

    ajax.open('GET', 'script-materiais.php?material='+mat+'&pesquisa='+texto, true);
    ajax.onreadystatechange = function(){
        if(ajax.readyState == 4){
            if(ajax.status == 200){
                result.innerHTML = ajax.responseText;
                document.getElementById('selectedFiltro').innerHTML = 'Ordenar';
                document.getElementById('selectedFiltro2').innerHTML = 'Dificuldades';
                document.getElementById('filtro1').innerHTML = 'Dificuldade';
                document.getElementById('filtro6').innerHTML = ' Difícil';
                document.getElementById('filtro5').innerHTML = ' Média';
                document.getElementById('filtro4').innerHTML = ' Fácil';
                document.getElementById('filtro-1').innerHTML = '';
                document.getElementById('filtro-2').innerHTML = '';
                document.getElementById('drop-dif').style.display = 'none';
            }
            else{
                result.innerHTML = 'Houve um erro na conexão AJAX: '+ajax.statusText;
            }
        }
    }

    ajax.send(null);
}