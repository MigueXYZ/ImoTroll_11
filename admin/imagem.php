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
        <p><img src="<?php echo "../". $dados['imagemCaminhoURL']?>" class="rounded img-fluid" width="350px" height="350px"> <input type="radio" onclick="atualizaTipo(this.value)" value="<?php echo $dados['imagemTipo']?>"> Principal</input></p>


        <?php
    }
    ?>
