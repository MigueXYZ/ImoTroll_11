<?php
include_once ("includes/body.inc.php");
global $con;
drawTop(IMOVEIS);
$sql="select * from imoveis";
$result=mysqli_query($con,$sql);
$dados=mysqli_fetch_array($result);

$sql2= "SHOW COLUMNS FROM imoveltipos WHERE Field = 'imovelTipoGenero'";
$res=mysqli_query($con,$sql2);
$dados2=mysqli_fetch_array($res);
preg_match("/^enum\(\'(.*)\'\)$/", $dados2['Type'], $matches);
$enum = explode("','", $matches[1]);
?>
<div class="container w-100"><h1>Imovel Imagens</h1>
    <form action ="confirmaNovaImagem.php" method="post">
        <div class="mb-3">
            <label for="formFile" class="form-label"></label>
            <input class="form-control" type="file" name="imovelImagem"id="imagem">


        </div>
        <div class="mb-3">
            <input type="submit" class="btn-sm btn-primary" value="Corfirma">
        </div>
    </form>
</div>