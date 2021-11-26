<?php
include_once ("includes/body.inc.php");
global $con;
$idImovel=intval($_POST['n']);
?>
    <div class="container">
        <div class="row">

            <?php
            $sql="select * from imagens where imagemImovelId = ".$idImovel;
            $result=mysqli_query($con,$sql);
            while($dados=mysqli_fetch_array($result)){
                ?>

                <div class="caixa">
                    <img src="<?php echo "../". $dados['imagemCaminhoURL']?>" class="rounded img-fluid h-100 w-100" >
                    <!-- <input type="radio" class="align-baseline" id="prince" onclick="atualizaTipo(this.value, <?php // echo $dados['imagemImovelId']?>)" value="<? //php echo $dados['imagemId']?>" <?php // echo ($dados['imagemTipo']=='principal'?"checked":"")?>> Principal</input>-->
                    <div class="toprightcorner">
                        <a class="btn btn-sm btn-success" value="<?php echo $dados['imagemId']?>" onclick="atualizaTipo(<?php echo $dados['imagemId']?>,<?php echo $dados['imagemImovelId']?>)"  <?php echo ($dados['imagemTipo']=='principal'?"checked":"")?>><i class="bi bi-star<?php echo ($dados['imagemTipo']=='principal'?"-fill":"")?>"></i></a>
                        <a class="btn btn-sm btn-danger" value="<?php echo $dados['imagemId']?>" onclick="eliminaImagem(<?php echo $dados['imagemId']?>,<?php echo $dados['imagemImovelId']?>)"><i class="bi bi-trash"></i></a>
                    </div>
                </div>

                <?php
            }
            ?>

        </div>
    </div>

