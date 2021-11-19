<?php
include_once ("includes/body.inc.php");
global $con;
drawTop(CONCELHOS);
$sql="select * from distritos";
$result=mysqli_query($con,$sql);

?>
    <div class="container"><h1>Novo Concelho</h1>
        <form action ="confirmaNovoConcelho.php" method="post">
            <div class="mb-3">
                <label for="concelhos" class="form-label">Concelho</label>
                <input type="text" name="nomeConcelho" class="form-control" id="concelho">
                <label for="distrinoNome" class="form-label">Distrito</label>
                <div class="mb-3">
                    <select name="idDistrito" class="form-select">
                        <?php
                        while($dados=mysqli_fetch_array($result)){
                            ?>
                            <option value="<?php echo $dados['distritoId'];?>"><?php echo $dados['distritoNome'];?></option>
                            <?php
                        }
                        ?>
                    </select>
                </div>
            </div>
            <div class="mb-3">
                <input type="submit" class="btn-sm btn-primary" value="Cofirma"></div>
        </form>
<?php
drawBottom();
?>