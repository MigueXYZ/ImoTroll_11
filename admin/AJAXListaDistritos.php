<?php
    $txt=addslashes($_POST['txt']);
    $con=mysqli_connect("localhost","root","","2021imobiliaria");
    $sql="select * from distritos where distritoNome like '%$txt%'";
    $result=mysqli_query($con,$sql);
    while($dados=mysqli_fetch_array($result)){
        echo '<li>'.$dados['distritoNome'].'</li>';
    }
?>