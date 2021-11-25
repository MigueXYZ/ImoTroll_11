<?php
include_once("includes/body.inc.php");
$ordem=$_POST['ordem'];
$tipo=$_POST['tipo'];
switch ($ordem){
    case -1:$ordem=""; break;
    case 1:$ordem=" order by imovelPreco ASC";break;
    case 2:$ordem=" order by imovelPreco DESC";break;
    case 3:$ordem=" order by imovelId DESC";break;
};

switch($tipo){
    case '-1':$tipo="";break;
    case 'apartamento':$tipo=" where imovelTipoGenero='apartamento'";break;
    case 'moradia':$tipo=" where imovelTipoGenero='moradia'";break;
    case 'terreno':$tipo=" where imovelTipoGenero='terreno'";break;
};

$sql="select * from imoveis inner join imoveltipos on imovelImovelTipoId=imovelTipoId".$tipo.$ordem;
$result=mysqli_query($con,$sql);

while($dados=mysqli_fetch_array($result)){
    $sqlIMG="select * from imagens where imagemImovelId= ".$dados['imovelId']." and imagemTipo='principal'";
    $resultIMG=mysqli_query($con,$sqlIMG);
    $img=mysqli_fetch_array($resultIMG);


?>


<div class="col-md-4 mb-5">
    <div class="card h-100">
        <img class="card-img-top" style="height:177px;" src="<?php echo $img['imagemCaminhoURL'] ?>">
        <div class="card-body">
            <h2 class="card-title"><?php echo $dados['imovelNome']?></h2>
        </div>
        <div class="card-footer  my-auto">
            <a class="btn btn-primary btn-sm" href="#!">More Info</a><span class="mt-2" style="float:right;">Preço: <?php echo $dados['imovelPreco']?> €</span>
        </div>
    </div>
</div>
<?php
    }
    ?>