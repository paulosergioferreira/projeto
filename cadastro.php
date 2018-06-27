<?php 

require_once "usuario.php";
   
$u = new Usuario();

$u->setNome(isset($_POST['nome']) ? $_POST['nome'] : null);
$u->setEmail(isset($_POST['email']) ? $_POST['email'] : null);
$u->setNome(isset($_POST['nome']) ? $_POST['nome'] : null);
$u->setSenha(isset($_POST['senha']) ? $_POST['senha'] : null);
$u->setIdade(isset($_POST['idade']) ? $_POST['idade'] : null);
$u->setNome(isset($_POST['foto']) ? $_POST['foto'] : null);

if(isset($_POST['confirmar'])){
        $u->insert();
        unset($_POST['confirmar']);
        
    }


?>


<!DOCTYPE html>
<html>
 <head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
	
	<title>Cadastro</title>
</head>
<body>
 <div class="container">
        <form class="form-perfil mt-5 mb-5"  method="post">
            <div class="form-row">
            
                <div class="form-group col-7">
                    <label for="nome">Nome: </label>
                    <input type="text" id="nome" name="nome" class="form-control">
                </div>

                <div class="form-group col-5">
                    <label for="email">Email: </label>
                    <input type="Email" id="email" name="email" class="form-control" >
                </div>

                <div class="form-group col-4">
                    <label for="senha">Senha: </label>
                    <input type="password" id="senha" name="senha" class="form-control">
                </div>

                <div class="form-group col-1">
                    <label for="numero">Idade: </label>
                    <input type="number" id="numero" name="numero" class="form-control">
                </div>
            
				<div class="form-group col-7">
                    <label for="foto">Selecione </label>
                    <input type="file" id="foto" name="foto" class="form-control" >
                </div>
       
				<input type="submit" class="btn btn-primary" name="confirmar" value="Salvar">
				<a href="login.php" class="btn btn-danger">Voltar</a>

			</div>
    	</form>
</div>

</body>
</html>