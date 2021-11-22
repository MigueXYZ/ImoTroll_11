<?php
include_once("admin/includes/body.inc.php");
$ordem=$_POST['ordem'];
switch ($ordem){
    case -1:$ordem=""; break;
    case 1:$ordem="order by imovelPreco ASC";break;
    case 2:$ordem="order by imovelPreco DESC";break;
    case 3:$ordem="order by imovelId DESC";break;
};
$sql="select * from Imoveis ".$ordem;
$result=mysqli_query($con,$sql);
?>
    <div>
        <label for="Ordem">Ordenação</label>
        <select onchange="preenche(this.value);" name="Ordem" id="Ordem">
            <option value="1">Mais Barato</option>
            <option value="2">Mais Caro</option>
            <option value="3">Mais Recente</option>
        </select>
    </div>
<?php


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