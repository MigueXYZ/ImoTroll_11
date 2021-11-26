<?php
include_once("includes/body.inc.php");
$id=intval($_GET['id']);


drawTop(IMOVEISEDITA,$id);
global $con;
$sql="select * from imoveis where imovelId=".$id;
$result=mysqli_query($con,$sql);
$dados=mysqli_fetch_array($result);
?>
<div class="container w-100"><h1>Edita Imovel</h1>
        <div class="mb-3">
            <label for="distrito" class="form-label">Imovel</label>
            <input readonly type="text" name="nomeImovel" class="form-control" id="distrito" value="<?php echo $dados['imovelNome'];?>">

            <label for="distrito" class="form-label">Morada</label>
            <input readonly type="text" name="moradaImovel" class="form-control" id="distrito" value="<?php echo $dados['imovelMorada'];?>">

            <label for="distrito" class="form-label">Preço</label>
            <input readonly type="text" name="precoImovel" class="form-control" id="distrito" value="<?php echo $dados['imovelPreco'];?>">

            <label for="descricao" class="form-label">Descrição</label>
            <textarea name="descricaoImovel" readonly class="form-control" id="mytextarea"><?php echo $dados['imovelDescricao'];?></textarea>

        </div>
        <div class="mb-3">
            <label for="freguesia" class="form-label">Freguesia</label>
                <?php
                $sql_op="select * from freguesias where freguesiaId = ".$dados['imovelFreguesiaId'];
                $result_op=mysqli_query($con,$sql_op);
                $dados_op=mysqli_fetch_array($result_op)
                ?>

                    <input readonly type="text" name="freguesia" class="form-control" value="<?php echo $dados_op['freguesiaNome'];?>">
        </div>
        <div class="mb-3">
            <label class="form-label">Tipo Imóvel</label>
                <?php
                $sql_o="select * from imovelTipos where imovelTipoId =".$dados['imovelImovelTipoId'];
                $result_o=mysqli_query($con,$sql_o);
                $dados_o=mysqli_fetch_array($result_o);
                ?>
                    <input readonly type="text" name="imovelTipo" class="form-control" value="<?php echo $dados_o['imovelTipoNome'];?>">
        </div>
</div>

<form action="novaFoto.php" method="post" enctype="multipart/form-data">
<div class="input-group mb-3">
    <input type="hidden" name="idImovel" value ="<?php echo $id?>">
    <div class="custom-file">
        <input type="file" name="imagem" class="custom-file-input" id="customFile">
    </div>
    <div class="input-group-append">
        <input type="submit" value="Confirma" class="input-group-text btn-success">
    </div>
    <div class="container w-100 mt-3"><h3>Imagens</h3>
        <div id="imagens">
        </div>
    </div>
</div>
</form>
