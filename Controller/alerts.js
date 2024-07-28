function alertaAviso(texto){
    Swal.fire({
        icon: "warning",
        title: "<div class='circeAlert'>Acesso negado!</div>",
        html: '<div class="nunito">'+texto+'</div>',
        position: "top",
        confirmButtonText: '<div class="circeAlert">OK</div>',
        background: '#f4f4f4',
        confirmButtonColor: '#409d4e',
      });
}

function alertaSucesso(texto){
    Swal.fire({
        icon: "success",
        title: "<div class='circeAlert'>Sucesso!</div>",
        html: '<div class="nunito">'+texto+'</div>',
        position: "top",
        confirmButtonText: '<div class="circeAlert">OK</div>',
        background: '#f4f4f4',
        confirmButtonColor: '#409d4e',
      });
}

function alertaErro(texto){
    Swal.fire({
        icon: "error",
        title: "<div class='circeAlert'>Erro!</div>",
        html: '<div class="nunito">'+texto+'</div>',
        position: "top",
        confirmButtonText: '<div class="circeAlert">OK</div>',
        background: '#f4f4f4',
        confirmButtonColor: '#409d4e',
      });
}