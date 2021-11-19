
function mostra(pagina,valor=''){
    let url;

    switch(pagina){
        case 2: url = "pesquisaTipos.php"; break;
        case 3: url = "pesquisaDistritos.php"; break;
        case 4: url = "pesquisaConcelhos.php"; break;
        case 5: url = "pesquisaFreguesias.php"; break;
        case 6: url = "pesquisaImoveis.php"; break;
    }






    $.ajax({
        type: "POST",
        url: url,
        data:{
            "txt":valor
        }
    }).done(function(result) {
        //alert(result);
        $( '#destino' ).html( result );
    });
}


function imagens(valor){
    $.ajax({
        type: "POST",
        url: "imagem.php",
        data:{
            "n":valor
        }
    }).done(function(result) {
        //alert(result);
        $( '#imagens' ).html( result );
    });
}


function elimina(id, tabela, campo){
    let url;

    switch(tabela){
        case "imoveis": url = "listaImoveis.php"; break;
        case "imoveltipos": url = "listaTipos.php"; break;
        case "distritos": url = "listaDistritos.php"; break;
        case "concelhos": url = "listaConcelhos.php"; break;
        case "freguesias": url = "listaFreguesias.php"; break;
    }

    $.ajax({
        type: "POST",
        url: "confirmaElimina.php",
        data:{
            "id": id,
            "table": tabela,
            "field": campo
        }
    }).done(function(result) {
        alert(result);
        window.location.href = url;
    });
}


function getMessage(header, txt, id, tabela, campo,  type=1){// por defeito elimina


    $.ajax({
        type: "POST",
        url: "AJAXGetName.php",
        data:{
            id: id,
            table: tabela,
            field: campo
        }
    }).done(function(result) {
        //alert(result);
        txt+=result;
        $('#mensagem').modal('toggle');
        $('#mensagemTitulo').html(header);
        $('#mensagemTexto').html(txt);
    });


    if(type==1){// elimina
        var el = document.getElementById("btnPrin");
        el.addEventListener("click", function(){elimina(id,tabela,campo)}, false);
        $("#btnPrin").html('Elimina');
        $("#btnPrin").toggleClass('btn-primary btn-danger');
    }

}