function preenche(ordena=-1,tipo='-1'){
        $.ajax({
            type: "POST",
            url: "listar.php",
            data:{
                "ordem":ordena,
                "tipo":tipo
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
        url:"AJAXgetConselhos.php",
        data:{
            "idDistrito":id
        }
    }).done(function(result) {
        $( '#distritos' ).html( result );
    });
}
