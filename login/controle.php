<?php
//utilização de namespaces
namespace controle;

// Recebe os dados do formulário
if ($_SERVER["REQUEST_METHOD"] != "POST") {
  die("Acesso inválido.");
}

require("conexao.php");

// Criando o banco de dados
$banco = "CREATE DATABASE IF NOT EXISTS `teste-login`";
if ($conexao->query($banco)) {
  echo "Banco de dados 'teste-login' já criado com sucesso.<br>";
} else {
  echo "Erro ao criar banco de dados: " . $conexao->error;
}
mysqli_select_db($conexao, "teste-login");

// Criando a tabela
$tabela_usuario = "CREATE TABLE IF NOT EXISTS usuario (
    id INT(10) AUTO_INCREMENT PRIMARY KEY,
    login VARCHAR (50) NOT NULL,
    senha VARCHAR(50) NOT NULL,
    id_tipo_acesso INT(1) NOT NULL
    )";
$conexao->select_db("teste-login");
if ($conexao->query($tabela_usuario)) {
  echo "Tabela 'usuario' já criada com sucesso.<br>";
} else {
  echo "Erro ao criar a tabela: " . $conexao->error;
}

if ($_POST["cadastrar"]) {
  $login = $_POST["login"];
  $senha = md5($_POST["senha"]);
  $tipo_usuario = $_POST["tipo_usuario"];

  // Inserção dos dados na tabela
  $inserir = "INSERT INTO usuario (login, senha, id_tipo_acesso) VALUES ('$login', '$senha', '$tipo_usuario')";
  $arr = array("login" => $login, "senha" => $senha, "id_tipo_acesso" => $tipo_usuario);
  if (mysqli_query($conexao, $inserir)) {
    // Redireciona para a página de sucesso
    //header("Location: index.php?pagina=cadastro_sucesso");
    echo "Cadastro realizado com sucesso!";
  } else {
    echo "Erro ao cadastrar: " . mysqli_error($conexao);
  }
  mysqli_close($conexao);
}

/*
if ($_POST["enviar"]) {
  $login = $_POST["login"];
  $senha = md5($_POST["senha"]);
  $usuario = $controle->verificaAcesso($login, $senha);
  //redirecionando para pagina conforme o tipo do usuário
  if ($usuario[0]["id_tipo_acesso"] == 1) {
    header("Location:paginas/pagina1.html");
  } else if ($usuario[0]["id_tipo_acesso"] == 2) {
    header("Location:paginas/pagina2.html");
  }
}
*/