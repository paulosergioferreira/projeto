<?php

require_once "usuario.php"; 

$e = new usuario();

?>



<div class="container">
    <div class="row form-cadastro">
        <div class="col-md-12">
            <?php include __DIR__ . "/../../errors.php"; ?>
            <table class="table table-hover">
                <thead>
                <tr>
                    <th>Id</th>
                    <th>Nome</th>
                    <th>Login</th>
                    <th>Ações</th>
                </tr>
                </thead>

               
            </table>
        </div>
        <div class="col-md-12">
            <a href="/usuario/cad_usuario.php" class="btn btn-primary btn-block">Cadastrar</a>
        </div>
        <div class="col-md-12 mt-2">
            <a href="/usuario/perfil.php" class="btn btn-danger btn-block">Voltar</a>
        </div>

    </div>
</div>
</table>?>