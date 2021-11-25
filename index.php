<?php
    include_once("includes/body.inc.php");
    drawTop();
?>

        <!-- Page Content-->
        <div class="container px-4 px-lg-5">
            <!-- Heading Row-->
            <div class="row gx-4 gx-lg-5 align-items-center my-5">
                <div class="col-lg-7 "><img class="img-fluid rounded mb-4 mb-lg-0" src="imagens/thumbnail.jpg" /></div>
                <div class="col-lg-5">
                    <h1 class="font-weight-light">ImovTrolls</h1>
                    <p> A pequena empresa com a caverna ideal para si!</p>
                </div>
            </div>
            <div class="row gx-4 gx-lg-5 mt-3">
                <div>
                    <label for="ordem">Ordenação</label>
                    <select onchange="preenche(this.value,$('#tipo').val());" name="ordem" id="ordem">
                        <option value="3">Mais Recente</option>
                        <option value="1">Mais Barato</option>
                        <option value="2">Mais Caro</option>
                    </select>
                </div>
                <div>
                    <label for="tipo">Tipo</label>
                    <select onchange="preenche($('#ordem').val(),this.value)" id="tipo" name="tipo">
                        <option value="-1">Todos</option>
                        <?php
                        $sql2= "SHOW COLUMNS FROM imoveltipos WHERE Field = 'imovelTipoGenero'";
                        $res=mysqli_query($con,$sql2);
                        $dados2=mysqli_fetch_array($res);
                        preg_match("/^enum\(\'(.*)\'\)$/", $dados2['Type'], $matches);
                        $enum = explode("','", $matches[1]);
                        foreach ($enum as $dados2){
                            ?>
                            <option value="<?php echo $dados2 ?>"><?php echo $dados2 ?></option>
                            <?php
                        }
                        ?>
                    </select>
                </div>
                <div id="distritos">

                </div>
                <div id="concelhos">

                </div>
                <div id="freguesia">

                </div>
            </div>
            <!-- Content Row-->
            <div class="row gx-4 gx-lg-5 mt-3" id="preenche">

            </div>
        </div>
<?php
drawBottom();
?>
