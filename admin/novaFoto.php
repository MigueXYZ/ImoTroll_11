<?php
include_once("includes/body.inc.php");
global $con;
$name=time();
switch ($_FILES['imagem']['type']){
    case 'image/jpeg':$name.='.jpg'; break;
    case 'image/apng':$name.='.apng';break;
    case 'image/avif':$name.='.avif';break;
    case 'image/gif':$name.='.gif';break;
    case 'image/png':$name.='.png';break;
    case 'image/svg+xml':$name.='.svg';break;
    case 'image/webp':$name.='.webp';break;
}

copy($_FILES['imagem']['tmp_name'],"../uploads/".$name);

$sql="insert into imagens(imagemCaminhoURL,imagemImovelId) values('../uploads/".$name."',".$_POST['idImovel'].")";
mysqli_query($con,$sql);
header("location:form.php?id=".$_POST['idImovel']);
?>

