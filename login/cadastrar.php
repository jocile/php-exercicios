<html>

<head>
  <title>Cadastro de usuários</title>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <!-- Latest compiled and minified CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- Latest compiled JavaScript -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <style>
    body {
      background-color: #f2f2f2;
    }
  </style>
</head>

<body>
  <div class="container">
    <div class="row mt-5">
      <div class="card col-lg-4 col-md-6 col-sm-8 offset-lg-4 offset-md-3 offset-sm-2">
        <div class="card-header text-center">
          <h2>Cadastro de usuário</h2>
        </div>
        <div class="card-body">
          <form action="controle.php" method="post">
            <div class="mb-3">
              <label for="login" class="form-label">Login</label>
              <input type="text" class="form-control" id="login" name="login" required />
            </div>
            <div class="mb-3">
              <label for="senha" class="form-label">Senha</label>
              <input type="password" class="form-control" id="senha" name="senha" required />
            </div>
            <div class="mb-3">
              <label for="tipo_usuario" class="form-label">Tipo de usuário</label>
              <select class="form-select" id="tipo_usuario" name="tipo_usuario" required>
                <option value="">Selecione</option>
                <option value="1">Usuário Comum</option>
                <option value="2">Administrador</option>
              </select>
            </div>
            <div class="mb-3">
              <button type="submit" class="btn btn-primary" name="cadastrar" value="cadastrar">Cadastrar</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>

</body>

</html>