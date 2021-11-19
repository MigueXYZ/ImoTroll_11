<?php
include_once ("includes/body.inc.php");
var_dump($_POST);

$sql="insert into imoveis(imovelNome,imovelMorada,imovelPreco,imovelFreguesiaId,imovelImovelTipoId)
values('".$_POST['nomeImovel']."','".$_POST['moradaImovel']."','".$_POST['precoImovel']."','".$_POST['idFreguesia']."','".$_POST['idTipo']."')";
mysqli_query($con,$sql);
header("location:listaImoveis.php");



?>
