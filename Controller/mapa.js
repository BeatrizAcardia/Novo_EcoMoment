let mapOptions = {
    center: [-22.8171119, -47.0682500],
    zoom: 15
}

var map = new L.map('mapa-coleta', mapOptions);
var marker = null;

L.tileLayer('http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
    attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
}).addTo(map);

let locations = [
    {
        'id': 1,
        'lat': -22.8157114,
        'long': -47.0697118,
        'title': 'Ponto 1',
        'type': 'Centro de reciclagem',
        'address': 'Rua das bolinhas, ali mesmo, SP',
        'time': '08:00 - 18:00'
    },
    {
        'id': 2,
        'lat': -22.8161490,
        'long': -47.0686510,
        'title': 'Ponto 2',
        'type': 'Lixeira',
        'address': 'Rua das coisas, ali mesmo, MG',
        'time': '00:00 - 00:00'
    },
    {
        'id': 3,
        'lat': -22.8183641,
        'long': -47.0691923,
        'title': 'Ponto 3',
        'type': 'Cooperativa',
        'address': 'Rua das caixas, ali pertinho, SC',
        'time': '08:00 - 16:00'
    },
    {
        'id': 4,
        'lat': -22.8173654,
        'long': -47.0712031,
        'title': 'Ponto 4',
        'type': 'Lixeira',
        'address': 'Rua do feijão, lá longe, BA',
        'time': '00:00 - 00:00'
    },
]

let iconRec = {
    iconUrl: '../View/midias/imagens-tela-inicial/map-pin.png',
    iconSize: [45,45]
}

let myIcon = L.icon(iconRec);

let popupOption = {
    // 'closeButton': false,
    'closeButton': true
}

locations.forEach(element => {
    let icone;
    if(element.type == 'Lixeira'){
        icone = '../View/midias/imagens-tela-inicial/lixeira.png';
    } else if(element.type == 'Centro de reciclagem'){
        icone = '../View/midias/imagens-tela-inicial/centro-de-reciclagem.png';
    } else if(element.type == 'Cooperativa'){
        icone = '../View/midias/imagens-tela-inicial/cooperativa.png';
    }
    new L.Marker([element.lat,element.long], {icon: myIcon}).addTo(map)
    .bindPopup(`
        <div>
            <div class="row">
                <div class="col-4">
                    <img src="${icone}" alt="${element.type}">
                </div>
                <div class="col-8">
                    <h1 class="titulo-card-mapa">${element.title}</h1>
                </div>
            </div>
            <div class="content-card-mapa">
                <div class="tipo"><span class="topico-card-mapa">Tipo:</span> <br> ${element.type}</div>
                <div class="tipo"><span class="topico-card-mapa">Endereço:</span> <br> ${element.address}</div>
                <div class="tipo"><span class="topico-card-mapa">Funcionamento:</span> <br> ${element.time}</div>
            </div>
        </div>`, popupOption);
    // .on('mouseover', event => {
    //     event.target.bindPopup('<div class="card"><h3>'+element.title+'</h3></div>', popupOption).openPopup();
    // })
    // .on('mouseout', event => {
    //     event.target.closePopup();
    // })
});

function buscar(){
    let endereco = document.querySelector('#endereco').value;
    if(endereco == ''){
        map.setView([-22.8161490, -47.0686510], 15)
    }
    else
    {
        fetch('https://api.distancematrix.ai/maps/api/geocode/json?address='+endereco+'&key=BWxx9qPxW8xHiGX9ZWx6iVYAAOCcJpbvXeKc8Zt9ryPoZgnuvKTcNODv8O17V5oM').then((response) => {
        response.json().then((resultado) => {
                console.log(`Coordenadas: (${resultado['result'][0]['geometry']['location']['lat']}, ${resultado['result'][0]['geometry']['location']['lng']})`);

                let iconMe = {
                    iconUrl: '../View/midias/imagens-tela-inicial/map-pin-me.png',
                    iconSize: [45,45]
                }
            
                let myIcon = L.icon(iconMe);
            
                if(marker !== null){
                    map.removeLayer(marker);
                }

                marker = L.marker([resultado['result'][0]['geometry']['location']['lat'], resultado['result'][0]['geometry']['location']['lng']], {icon: myIcon}).addTo(map).bindPopup('Eu estou aqui!').openPopup();
                
                map.setView([resultado['result'][0]['geometry']['location']['lat'], resultado['result'][0]['geometry']['location']['lng']], 15);
            })
        })
    }
}

function success(pos){
    // document.querySelector('#dados').innerHTML = `Coordenadas: (${pos.coords.latitude}, ${pos.coords.longitude})`;
    console.log(pos.coords.latitude, pos.coords.longitude);

    let iconMe = {
        iconUrl: '../View/midias/imagens-tela-inicial/map-pin-me.png',
        iconSize: [45,45]
    }

    let myIcon = L.icon(iconMe);
            
    if(marker !== null){
        map.removeLayer(marker);
    }

    marker = L.marker([pos.coords.latitude, pos.coords.longitude], {icon: myIcon}).addTo(map).bindPopup('Eu estou aqui!').openPopup();

    map.setView([pos.coords.latitude, pos.coords.longitude], 16);
}

function erro(erro){
    alert('Não foi possível encontrar sua localização.\nERRO: '+erro);
}

function localizar(){
    var watchId = navigator.geolocation.watchPosition(success, erro);
}
