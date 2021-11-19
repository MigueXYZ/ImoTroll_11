<?php
    var_dump($_POST);
    include_once ("includes/body.inc.php");
    $sql="Insert into freguesias values(0,'".$_POST['nomeFreguesia']."',".$_POST['idConcelho'].")";
    mysqli_query($con,$sql);
    header("location:listaFreguesias.php");
?>