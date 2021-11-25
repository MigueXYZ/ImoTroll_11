function preenche(ordena=-1,tipo='-1',freguesia=-1){
        $.ajax({
            type: "POST",
            url: "listar.php",
            data:{
                "ordem":ordena,
                "tipo":tipo,
                "local":freguesia
            }
        }).done(function(result) {
            //alert(result);
            $( '#preenche' ).html( result );

        });
}

function preencheDistritos(){
    $.ajax({
        type:"POST",
        url:"AJAXgetDistritos.php"
    }).done(function(result) {
        $( '#distritos' ).html( result );
    });
}

function preencheConcelhos(id){

    $.ajax({
        type:"POST",
        url:"AJAXgetConcelhos.php",
        data:{
            "idDistrito":id
        }
    }).done(function(result) {
        $( '#concelhos' ).html( result );
    });
}

function preencheFreguesias(id){
    $.ajax({
        type:"POST",
        url:"AJAXgetFreguesias.php",
        data:{
            "idConcelho":id
        }
    }).done(function(result) {
        $( '#freguesias' ).html( result );
    });
}