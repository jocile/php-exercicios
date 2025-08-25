<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Lista em PHP</title>
</head>
<body>
<h1>Lista em PHP</h1>
<form action="" method="POST">
Name: <input type="text" name="name"><br>
<input type="submit">
</form>

<?php
$arquivo = "lista.txt";
$listaPadrao = ["Tanuzia","Fco Ant","Lucas", "Karla"];

// Se o arquivo não existe, cria com a lista padrão
if (!file_exists($arquivo)) {
  file_put_contents($arquivo, implode("\n", $listaPadrao));
}

$lista = file($arquivo, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (isset($_POST['name']) && !empty($_POST['name'])) {
    echo "----------------<br>";
    echo "Bem vindo " . $_POST['name'] . "<br>";
    $novoNome = trim($_POST['name']);
    if (!in_array($novoNome, $lista)) {
      $lista[] = $novoNome;
      file_put_contents($arquivo, implode("\n", $lista));
    }
  }
}
sort($lista);
echo "----------------<br>";
foreach($lista as $item){
  echo "Aluno: " .$item . "<br>";
}
?>  

</body>
</html>