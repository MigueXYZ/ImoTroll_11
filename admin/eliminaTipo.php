<?php
include_once ("includes/body.inc.php");
drawTop(TIPOS);
$sql="select * from imoveltipos where imovelTipoId=".$_GET['id'];
$result=mysqli_query($con,$sql);
$dados=mysqli_fetch_array($result);
?>

<div class="container">
    <h1>Elimina Tipo</h1>
   <form action ="confirmaEliminaTipo.php" method="post">
       <div class="mb-3">
           <label for="tipo" class="form-label">Tipo</label>
           <input type="text" readonly name="nomeTipo" class="form-control mb-3" id="tipo" value="<?php echo $dados['imovelTipoNome'] ?>">

           <label for="generoImovel" class="form-label">Género</label>
           <input type="text" readonly name="generoImovel" class="form-control mb-3" id="tipo" value="<?php echo $dados['imovelTipoGenero'] ?>">

           <input type="hidden" name="tipoId" value ="<?php echo $_GET['id']?>">
       </div>
       <div class="mb-3">
           <input type="submit" class="btn-sm btn-primary" value="Corfirma">
       </div>
   </form>

<?php drawBottom(); ?>
