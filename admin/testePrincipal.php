<?php
include_once ("includes/body.inc.php");

?>  <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script>
    function mostra(){
        $.ajax({
            method: "POST",
            url: "teste.php",
            data:{
                "n":10
            }

        }).done(function(result) {
            $( '#destino' ).html( result );
        });
    }
</script>
<a href="#" onclick="mostra();">CARREGA</a>
<div id="destino">

</div>


