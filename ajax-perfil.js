function salvar(user){
    let foto = document.getElementById('foto');
    let nome =document.getElementById('nome');
    let bio = document.getElementById('biog');

    let ajax = new XMLHttpRequest();

    ajax.open('GET', 'script-conta.php?user='+user+'&funcao=salvar', true);
    ajax.onreadystatechange = function(){
        if(ajax.readyState == 4){
            if(ajax.status == 200){
                let avaliado = ajax.responseText;
                if(avaliado == true){
                    carregarAvaliacao(user, idPost);
                }
            }
            else{
                alertaErro('Houve um erro ao salvar as alterações. Tente atualizar a página.');
            }
        }
    }

    ajax.send(null);
}

function estaSeguindo(){
    
}

function seguir(){

}