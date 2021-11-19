<?php
include_once ("includes/body.inc.php");
drawTop(TIPOS);
$sql="select * from imoveltipos where imovelTipoId=".$_GET['id'];
$result=mysqli_query($con,$sql);
$dados=mysqli_fetch_array($result);

$sql2= "SHOW COLUMNS FROM imoveltipos WHERE Field = 'imovelTipoGenero'";
$res=mysqli_query($con,$sql2);
$dados2=mysqli_fetch_array($res);
preg_match("/^enum\(\'(.*)\'\)$/", $dados2['Type'], $matches);
$enum = explode("','", $matches[1]);
?>

<div class="container">
    <h1>Edita Tipo</h1>
   <form action ="confirmaEditaTipo.php" method="post">
       <div class="mb-3">
           <label for="tipo" class="form-label">Tipo</label>
           <input type="text" name="nomeTipo" class="form-control" id="tipo" value="<?php echo $dados['imovelTipoNome'] ?>">
           <label for="género" class="form-label">Género</label>
           <select class="mt-1 form-select" name="generoTipo">
               <?php
               foreach ($enum as $dados2){
                   ?>
                    <option <?php echo $dados['imovelTipoGenero']==$dados2?"selected":""?> value="<?php echo $dados2;?>"><?php echo $dados2;?></option>
               <?php
                    }
                    ?>
           </select>
           <input type="hidden" name="tipoId" value ="<?php echo $_GET['id']?>">
       </div>
       <div class="mb-3">
           <input type="submit" class="btn-sm btn-primary" value="Corfirma">
       </div>
   </form>

<?php drawBottom(); ?>
