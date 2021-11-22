function preenche(ordena=-1){
        $.ajax({
            type: "POST",
            url: "listar.php",
            data:{
                "ordem":ordena
            }
        }).done(function(result) {
            //alert(result);
            $( '#preenche' ).html( result );

        });
}