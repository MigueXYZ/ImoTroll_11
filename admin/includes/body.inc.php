<?php
include_once ("config.inc.php");
$con=mysqli_connect(HOST,USER,PWD,DATABASE);


function drawTop($menu=HOME,$id=-1){
    ?>
    <!doctype html>
    <html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.6.1/font/bootstrap-icons.css">
        <link rel="stylesheet" href="includes/css/estilos.css">


        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>








        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        <script src="includes/js/common.js"></script>
        <title>Imo-TROLLs</title>

        <script>
            $('document').ready(function(){
                mostra(<?php echo $menu?>);
                <?php
                    if($menu==IMOVEISEDITA){
                        echo "imagens($id);";
                    }
                ?>
            })
        </script>



    </head>
    <body>
    <div class="container w-100">
        <h1>Imo - TROLLs</h1>
        <h2>Temos a caverna IDEAL para si....</h2>
        <ul class="nav nav-pills nav-justified">
            <li class="nav-item">
                <a class="nav-link <?php echo ($menu==HOME  ?" active ":"");?>" href="index.php">Página principal</a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?php echo ($menu==TIPOS?" active ":"");?>" href="listaTipos.php">Tipos de imóveis</a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?php echo ($menu==DISTRITOS?" active ":"");?>" href="listaDistritos.php">Distritos</a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?php echo ($menu==CONCELHOS?" active ":"");?>" href="listaConcelhos.php">Concelhos</a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?php echo ($menu==FREGUESIAS?" active ":"");?>" href="listaFreguesias.php">Freguesias</a>
            </li>
            <li class="nav-item ">
                <a class="nav-link <?php echo ($menu==IMOVEIS?" active ":"");?>" href="listaImoveis.php">Imóveis</a>
            </li>

        </ul>

    <?php
}
function drawBottom(){
    ?>
        </div> <!-- container principal -->
    <!-- Modais -->
    <div class="modal fade" id="mensagem" tabindex="-1"  aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="mensagemTitulo"></h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body" id="mensagemTexto">

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" id="btnPrin" class="btn btn-primary">Ok</button>
                </div>
            </div>
        </div>
    </div>



    </body>
    </html>
        <?php
}

?>