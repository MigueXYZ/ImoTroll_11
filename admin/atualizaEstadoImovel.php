<?php

$idImovel=intval($_POST['n']);
include_once("includes/config.inc.php");
$con = mysqli_connect(HOST, USER, PWD, DATABASE);

/*$sqlGen="update imoveis set imovelDestaque = 'destaque' where imovelId=".$idImovel;
mysqli_query($con,$sqlGen);

$sqlGen = "update imoveis set imovelDestaque = 'nao' where imovelId=".$idImovel;
mysqli_query($con,$sqlGen);*/
$sql="select * from imoveis where imovelId=".$idImovel;
$result=mysqli_query($con, $sql);
$dados=mysqli_fetch_array($result);

if($dados['imovelDestaque']=='destaque'){
$sql="update imoveis set imovelDestaque = 'nao' where imovelDestaque = 'destaque' and imovelId=".$idImovel;
mysqli_query($con,$sql);
}elseif($dados['imovelDestaque']=='nao'){
$sql="update imoveis set imovelDestaque = 'destaque' where imovelDestaque = 'nao' and imovelId=".$idImovel;
mysqli_query($con,$sql);
}


?>