<?php
    var_dump($_POST);
    include_once ("includes/body.inc.php");
    $sql="Insert into concelhos values(0,'".$_POST['imovelImagem']."',".$_POST['idDistrito'].")";
    mysqli_query($con,$sql);
    header("location:listaConcelhos.php");
?>