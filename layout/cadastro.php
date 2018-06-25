<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
	
	<title>Cadastro</title>
</head>
<body>

<form>
<div style="position: absolute; margin-left:20px; right: 90px; left:30%; top: 23%;">
  <div class="form-row">
    <div class="form-group col-md-4">
      <label for="inputEmail4">Email</label>
      <input type="email" class="form-control" id="email" placeholder="Email">
    </div>
    <div class="form-group col-md-3">
      <label for="inputPassword4">Senha</label>
      <input type="password" class="form-control" id="senha" placeholder="Senha">
    </div>
 
  <div class="form-group col-md-6">
    <label for="inputAddress">Nome</label>
    <input type="text" class="form-control" id="nome" placeholder="Nome">
  </div>

  <div class="form-group col-md-1">
    <label for="inputAddress2">Idade</label>
    <input type="number" class="form-control" id="idade">
  </div>
 
 </div>
  <button type="submit" class="btn btn-primary">Confirmar</button>
  <a href="login.php" class="btn btn-danger">Voltar</a>
</div>
</form>

</body>
</html>