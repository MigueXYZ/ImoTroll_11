<?php
include_once("includes/body.inc.php");
global $con;
drawTop(FREGUESIAS);
$sql="select * from freguesias inner join concelhos on concelhoId = freguesiaConcelhoId where freguesiaId=".$_GET['id'];
$result=mysqli_query($con,$sql);
$dados=mysqli_fetch_array($result);
?>
<div class="container w-100"><h1>Elimina Freguesias</h1>
    <form action="confirmaEliminaFreguesia.php" method="post">
        <div class="mb-3"><label for="freguesia" class="form-label">Freguesia</label>
            <input type="text" readonly name="nomeFreguesia" class="form-control" id="freguesia" value="<?php echo $dados['freguesiaNome']; ?>">

            <label for="distrito" class="form-label">Concelho</label>
            <input type="text" readonly name="nomeFreguesia" class="form-control" id="freguesia" value="<?php echo $dados['concelhoNome']; ?>">

            <input type="hidden" name="freguesiaId" value="<?php echo $_GET['id'] ?>"></div>
        <div class="mb-3"><input type="submit" class="btn-sm btn-danger" value="Eliminar"></div>
    </form>
</div>



