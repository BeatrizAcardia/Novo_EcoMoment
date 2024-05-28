// var curtida = <=$curtido?>;
var curtida = false;
console.log('Número de curtidas: <?=$numCurtidas?>')
if(curtida){
    document.querySelector('.curtida').innerHTML = '<img class="btnInteraction" src="midias/icones-pagIdeia/curtida-1.png" alt="Ícone de coração sem preenchimento">';
}
else{
    document.querySelector('.curtida').innerHTML = '<img class="btnInteraction" src="midias/icones-pagIdeia/curtida-2.png" alt="Ícone de coração sem preenchimento">';
}

function curtirJS(){
    alert('curti');
    if (curtida == false){
        alert('passei por aqui 1');
        // <?php
        //     $numCurtidas++;
        //     $curtiu = curtirPHP($numCurtidas, $idUserWeb, $idPostagem);
        // //     echo'alert("Curti -> numero: '.$numCurtidas.'");';
        // ?>
        curtida = true;
        document.querySelector('.curtida').innerHTML = '<img class="btnInteraction" src="midias/icones-pagIdeia/curtida-1.png" alt="Ícone de coração sem preenchimento">';
        // document.getElementById('numCurtidas').innerHTML = <?=$numCurtidas?>;
        
    } else{
        alert('passei por aqui 2');
        // <?php
        //     $numCurtidas = $numCurtidas-1;
        //     $curtiu = curtirPHP($numCurtidas, $idUserWeb, $idPostagem);
        // //     echo'alert("Nn curti -> numero: '.$numCurtidas.'");';
        // ?>
        console.log('Num agr: <?=$numCurtidas?>');
        curtida = false;
        document.querySelector('.curtida').innerHTML = '<img class="btnInteraction" src="midias/icones-pagIdeia/curtida-2.png" alt="Ícone de coração sem preenchimento">';
        // document.getElementById('numCurtidas').innerHTML = <?=$numCurtidas?>;
    }
}

function compartilhar(){
    alert('Compartilhou')
}

function avaliar(n){
    alert(`${n} estrela(s)`)
    document.getElementById('x-star5').disabled = 'true';
    document.getElementById('x-star4').disabled = 'true';
    document.getElementById('x-star3').disabled = 'true';
    document.getElementById('x-star2').disabled = 'true';
    document.getElementById('x-star1').disabled = 'true';
}