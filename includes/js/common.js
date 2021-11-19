preenche(){
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