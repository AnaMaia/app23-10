<?php  require_once 'indexperfil.php';  ?>
    <!-- /. NAV SIDE  -->
    <div id="page-wrapper" >
        <div id="page-inner" class="container">


            <div class="ui text container form-sobre-fotos" >
                <div class="ui text container centered aligned">
                    <h1><label><font color="black">Editar Cadastro de Loja</font></label></h1>
                </div><br>

                <form class="ui form" action="?acao=alterar" method="post">

                    <div class="field">
                        <label><font color="#363636">Nome Fantasia</font></label>
                        <input type="text" name="nome_fantasia" value="<?= $cliente->getNomeFantasia(); ?>">
                    </div>
                    <div class="field">
                        <label><font color="#363636">Razão Social</font></label>
                        <input type="text" name="razao_social" value="<?= $cliente->getRazaoSocial(); ?>">
                    </div>
                    <div class="field">
                        <label><font color="#363636">CNPJ</font></label>
                        <input type="text" name="cnpj" value="<?= $cliente->getCnpj(); ?>">
                    </div>
                    <div class="field">
                        <label><font color="#363636">Telefone</font></label>
                        <input type="text" name="telefone" value="<?= $cliente->getTelefone(); ?>">
                    </div>
                    <div class="field">
                        <label><font color="#363636">Email</font></label>
                        <input type="text" name="email" value="<?= $cliente->getEmail(); ?>">
                    </div>
                    <div class="field">
                        <label><font color="#363636">Endereço</font></label>
                        <input type="text" name="endereco" value="<?= $cliente->endereco; ?>">
                    </div>
                    <input type="hidden" value="<?= $cliente->id_cliente ?>" name="idcli"><br><br>
                    <button class="ui button" type="submit" name="gravar" onclick="return confirm('Loja editada com sucesso!');">Editar</button>
                </form>

            </div>

            <!-- /. PAGE INNER  -->
        </div>
        <!-- /. PAGE WRAPPER  -->
    </div>

<?php require_once "rodape.php"; ?>