<?php
include_once ("includes/body.inc.php");
global $con;
drawTop(FREGUESIAS);
$sql="select * from concelhos";
$result=mysqli_query($con,$sql);

?>
    <div class="container"><h1>Novo Concelho</h1>
    <form action ="confirmaNovoFreguesia.php" method="post">
        <div class="mb-3">
            <label for="freguesia" class="form-label">Fregusia</label>
            <input type="text" name="nomeFreguesia" class="form-control" id="freguesia">
            <label for="concelhoNome" class="form-label">Concelho</label>
            <select name="idConcelho" class="form-select">
                <?php
                while($dados=mysqli_fetch_array($result)){
                    ?>
                    <option value="<?php echo $dados['concelhoId'];?>"><?php echo $dados['concelhoNome'];?></option>
                    <?php
                }
                ?>
            </select>
        </div>
        <div class="mb-3">
            <input type="submit" class="btn-sm btn-primary" value="Cofirma"></div>
    </form>
<?php
drawBottom();
?>