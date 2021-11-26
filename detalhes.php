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
    </div>







<?php
    drawBottom();
?>
