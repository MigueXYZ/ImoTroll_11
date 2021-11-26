
<?php
include_once ("includes/body.inc.php");
global $con;
drawTop(IMOVEIS);
$sql="select * from imoveis inner join freguesias on imoveis.imovelFreguesiaId=freguesias.FreguesiaId inner join imoveltipos on imoveis.imovelImovelTipoId = imoveltipos.imovelTipoId where imovelId=".$_GET['id'];
$result=mysqli_query($con,$sql);
$dados=mysqli_fetch_array($result);
?>
<div class="container w-100"><h1>Elimina Imovel</h1>
    <form action ="confirmaEliminaImovel.php" method="post">
        <div class="mb-3">
            <label for="distrito" class="form-label">Imovel</label>
            <input type="text" readonly name="nomeImovel" class="form-control" id="distrito" value="<?php echo $dados['imovelNome'];?>">

            <label for="morada" class="form-label">Morada</label>
            <input type="text" readonly name="moradaImovel" class="form-control" id="distrito" value="<?php echo $dados['imovelMorada'];?>">

            <label for="preco" class="form-label">Preço</label>
            <input type="text" readonly name="precoImovel" class="form-control" id="distrito" value="<?php echo $dados['imovelPreco'];?>">

            <label for="descricao" class="form-label">Descrição</label>
            <textarea name="descricaoImovel" readonly class="form-control" id="myTextarea"></textarea>

            <label for="freguesia" class="form-label">Freguesia</label>
            <input type="text" readonly name="precoImovel" class="form-control" id="distrito" value="<?php echo $dados['freguesiaNome'];?>">

            <label for="tipoImovel" class="form-label">Tipo Imovel</label>
            <input type="text" readonly name="precoImovel" class="form-control" id="distrito" value="<?php echo $dados['imovelTipoNome'];?>">

            <input type="hidden" name="idImovel" value ="<?php echo $_GET['id']?>">
        </div>

        <div class="mb-3"><input type="submit" class="btn-sm btn-danger" value="Eliminar"></div>
    </form>
</div>