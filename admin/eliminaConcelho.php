<?php
include_once("includes/body.inc.php");
global $con;
drawTop(CONCELHOS);
$sql="select * from concelhos inner join distritos on distritoId = concelhoDistritoId where concelhoId=".$_GET['id'];
$result=mysqli_query($con,$sql);
$dados=mysqli_fetch_array($result);
?>
<div class="container w-100"><h1>Elimina Concelho</h1>
    <form action="confirmaEliminaConcelho.php" method="post">
        <div class="mb-3"><label for="concelho" class="form-label">Concelho</label>
            <input type="text" readonly name="nomeConcelho" class="form-control" id="concelho" value="<?php echo $dados['concelhoNome']; ?>">

            <label for="distrito" class="form-label">Distrito</label>
            <input type="text" readonly name="nomeConcelho" class="form-control" id="concelho" value="<?php echo $dados['distritoNome']; ?>">

            <input type="hidden" name="concelhoId" value="<?php echo $_GET['id'] ?>"></div>
        <div class="mb-3"><input type="submit" class="btn-sm btn-danger" value="Eliminar"></div>
    </form>
</div>



