<?php
    include_once("includes/body.inc.php");
    drawTop();
    $id=intval($_GET['id']);
    $sql="select * from imoveis where imovelId=".$id;
    $result=mysqli_query($con,$sql);
    $dados=mysqli_fetch_array($result);
    ?>
    <div class="container mt-3">
        <div class="row mt-3 mb-3">
            <div class="col input-group">
                <span class="input-group-text fw-bold">Nome:</span>
                <input class="form-control bg-light" type="text" readonly value="<?php echo $dados['imovelNome']?>">
            </div>
            <div class="col input-group">
                <span class="input-group-text fw-bold"">Morada:</span>
                <input class="form-control bg-light" type="text" readonly value="<?php echo $dados['imovelMorada']?>">
            </div>
            <div class="col input-group">
                <span class="input-group-text fw-bold"">Preço:</span>
                <input class="form-control bg-light" type="text" readonly value="<?php echo $dados['imovelPreco']."€"?>">
            </div>
        </div>
        <div class="row mt-3 mb-3">
            <?php
                $sqlFreguesia="select freguesiaNome from freguesias where freguesiaId=".$dados['imovelFreguesiaId'];
                $resFreguesia=mysqli_query($con,$sqlFreguesia);
                $freguesia=mysqli_fetch_array($resFreguesia);
                $freguesia=$freguesia['freguesiaNome'];
            ?>
            <div class="col input-group">
                <span class="input-group-text fw-bold">Freguesia:</span>
                <input class="form-control bg-light" type="text" readonly value="<?php echo $freguesia?>">
            </div>
            <?php
            $sqlTipo="select imovelTipoNome from imoveltipos where imovelTipoId=".$dados['imovelImovelTipoId'];
            $resTipo=mysqli_query($con,$sqlTipo);
            $tipo=mysqli_fetch_array($resTipo);
            $tipo=$tipo['imovelTipoNome'];
            ?>
            <div class="col input-group">
                <span class="input-group-text fw-bold">Tipo:</span>
                <input class="form-control bg-light" type="text" readonly value="<?php echo $tipo?>">
            </div>
        </div>
        <div class="row mt-3 mb-3">
            <div class="form-floating">
                <span class="input-group-text f-bold">Descrição:</span>
                <textarea class="form-control bg-light" readonly style="height: 100px">
                    <?php echo $dados['imovelDescricao']?>
                </textarea>
            </div>
        </div>
        <div class="portfolio-item row">
        <?php
            $sqlIMG="select * from imagens where imagemImovelId=".$id;
            $resIMG=mysqli_query($con,$sqlIMG);
            while($imagem=mysqli_fetch_array($resIMG)){
        ?>

            <div class="item selfie col-lg-3 col-md-4 col-6 col-sm">
                <a href="<?php echo $imagem['imagemCaminhoURL'] ?>" class="fancylight popup-btn" data-fancybox-group="light">
                    <img class="img-fluid" style="height:300px; width:300px;" src="<?php echo $imagem['imagemCaminhoURL'] ?>" alt="">
                </a>
            </div>
            <?php
            }
            ?>
        </div>

    </div>








<?php
    drawBottom();
?>
