<?php
include_once ("includes/body.inc.php");
global $con;
drawTop(DISTRITOS);
$sql="select * from distritos where distritoId=".$_GET['id'];
$result=mysqli_query($con,$sql);
$dados=mysqli_fetch_array($result);
?>
<div class="container w-100"><h1>Edita Distrito</h1>
    <form action ="confirmaEditarDistrito.php" method="post">
        <div class="mb-3"><label for="distrito" class="form-label">Distrito</label>
            <input type="text" name="nomeDistrito" class="form-control" id="distrito" value="<?php echo $dados['distritoNome'];?>">
            <input type="hidden" name="distritoId" value ="<?php echo $_GET['id']?>"></div>
        <div class="mb-3"><input type="submit" class="btn-sm btn-primary" value="Corfirma"></div>
    </form>
</div>