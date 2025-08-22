<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cadastro de Alunos</title>
</head>

<body>
  <h1>Cadastro de alunos</h1>
  <form method="post" action="">
    <label for="aluno">Nome:</label>
    <input type="text" name="aluno" id="aluno"><br>
    <label for="curso">Curso:</label>
    <select name="curso" id="curso">
      <option value="informatica">Informática</option>
      <option value="programador">Programador</option>
      <option value="designer">Designer</option>
    </select>
    <input type="reset" value="Limpar" name="limpar">
    <input type="submit" value="Enviar" name="enviar">
    <button type="submit" name="salvar_arquivo">Salvar em arquivo</button>
  </form>
  

  <?php
  $aluno = ['Pietro Arcanjo', 'Fernanda', 'Karla'];
  $curso = ['Informática', 'Programador', 'Designer'];
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      $nome = $_POST['aluno'];
      $cursoSelecionado = $_POST['curso'];

      if (in_array($nome, $aluno)) {
        echo "O aluno $nome já está cadastrado no curso de $cursoSelecionado.";
      } else {
        $aluno[] = $nome; // Adiciona o novo aluno ao array
        $curso[] = $cursoSelecionado; // Adiciona o curso selecionado ao array
        echo "O aluno $nome foi cadastrado com sucesso no curso de $cursoSelecionado.";
      }
    }
    if (isset($_POST['salvar_arquivo'])) {
      salvarEmArquivo();
    }
    function salvarEmArquivo() {
      global $aluno, $curso;
      $dados = "Nome,Curso\n";
      for ($i = 0; $i < count($aluno); $i++) {
        $dados .= "{$aluno[$i]},{$curso[$i]}\n";
      }
      $myfile = fopen("cadastro_alunos.csv", "a") or die("Erro ao abrir o arquivo!");
      fwrite($myfile, $dados);
      fclose($myfile);
      echo "<br>Dados salvos em cadastro_alunos.csv";
    }
    if (isset($_POST['salvar_arquivo'])) {
      salvarEmArquivo();
    }
  ?>
</body>

</html>