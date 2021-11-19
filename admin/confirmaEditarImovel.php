<?php
include_once ("includes/body.inc.php");
var_dump($_POST);
$sql="update imoveis set imovelNome='".$_POST['nomeImovel']."',imovelMorada='".$_POST['moradaImovel']."',imovelPreco='".$_POST['precoImovel']."', imovelFreguesiaId='".$_POST['idFreguesia']."', imovelImovelTipoId='".$_POST['idTipo']."' where imovelId='".$_POST['idImovel']."'";
mysqli_query($con,$sql);
header("location:listaImoveis.php");
?>
