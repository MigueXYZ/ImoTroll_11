<?php
include_once ("includes/body.inc.php");
global $con;
$n=$_POST['n'];
?>

    <?php
    $sql="select * from imagens where imagemImovelId = ".$n;
    $result=mysqli_query($con,$sql);
    while($dados=mysqli_fetch_array($result)){
        ?>
            <div class="mb-3">
                <p>
                    <img src="<?php echo "../". $dados['imagemCaminhoURL']?>" class="rounded img-fluid position-static" width="350px" height="350px">
                    <div class="align-baseline" size="100px"   onclick="atualizaTipo(this.value,<?php echo $dados['imagemImovelId']?>)"></div>
                    <input type="radio" class="align-baseline" id="prince" onclick="atualizaTipo(this.value,<?php echo $dados['imagemImovelId']?>)" value="<?php echo $dados['imagemId']?>" <?php echo ($dados['imagemTipo']=='principal'?"checked":"")?>> Principal</input>
                    <a class="btn btn-sm btn-success" onchange="atualizaTipo(this.value,<?php echo $dados['imagemImovelId']?>)" value="<?php echo $dados['imagemId']?>" <?php echo ($dados['imagemTipo']=='principal'?"checked":"")?>><i class="bi bi-star<?php echo ($dados['imagemTipo']=='principal'?"-fill":"")?>"></i></a>
                    <button ></button>
                </p>
            </div>


        <?php
    }
    ?>
