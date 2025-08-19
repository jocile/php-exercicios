<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cadastro de Alunos</title>
</head>

<body>
  <h1>Cadastro de alunos</h1>

  <?php
  $aluno = ['Pietro Arcanjo', 'Fernanda', 'Karla', 'João', 'Lucas'];
  $curso = ['Informática', 'Programador', 'Designer'];

  echo "<h2>Usando var_dump</h2>";
  var_dump($aluno);
  var_dump($curso);

  echo "<h2>Usando print_r</h2>";
  print_r($aluno);
  print_r($curso);

  echo "<h2>Usando foreach</h2>";
  foreach ($aluno as $a) {
    echo "Aluno: $a <br>";
  }
  foreach ($curso as $c) {
    echo "Curso: $c <br>";
  }

  ?>
</body>

</html>