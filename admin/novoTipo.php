<?php
include_once ("includes/body.inc.php");
drawTop(TIPOS);

$sql="select * from imovelTipos group by imovelTipoGenero";
$result=mysqli_query($con,$sql);

$sql2= "SHOW COLUMNS FROM imoveltipos WHERE Field = 'imovelTipoGenero'";
$res=mysqli_query($con,$sql2);
$dados=mysqli_fetch_array($res);
preg_match("/^enum\(\'(.*)\'\)$/", $dados['Type'], $matches);
$enum = explode("','", $matches[1]);
?>

<div class="container">
    <h1>Novo Tipo</h1>
   <form action ="confirmaNovoTipo.php" method="post">
       <div class="mb-3">
           <label for="tipo" class="form-label">Tipo</label>
           <input type="text" name="nomeTipo" class="form-control" id="tipo">

           <label for="genero" class="form-label">Género</label>
           <select class="mt-1 form-select" name="generoTipo">
               <?php
               foreach ($enum as $dados){
                   ?>
                    <option value="<?php echo $dados;?>"><?php echo $dados;?></option>
                   <?php
                        }
                        ?>
           </select>
       </div>
       <div class="mb-3">
           <input type="submit" class="btn-sm btn-primary" value="Corfirma">
       </div>
   </form>

<?php drawBottom(); ?>
