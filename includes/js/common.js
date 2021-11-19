function preenche(ordena){

        $.ajax({
            type: "POST",
            url: "listar.php",
            data:{
                "ordem":ordena
            }
        }).done(function(result) {
            //alert(result);
            $( '#imagens' ).html( result );

        });
}