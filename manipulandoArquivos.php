<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>manipulando arquivos</title>
</head>

<body>
  <?php
  // abre o arquivo
  $fp = fopen("file.txt", "w");
  // escreve no arquivo
  fwrite($fp, "Lendo o arquivo\n");
  fwrite($fp, "linha 1\n");
  fwrite($fp, "linha 2\n");
  fwrite($fp, "linha 3\n");

  // Lê o arquivo em formato de string
  echo file_get_contents('file.txt');

  // lê o arquivo linha por linha
  $fd = fopen("file.txt", "r");
  while (!feof($fd)) {
    // lê uma linha do arquivo
    $buffer = fgets($fd, 4096);
    // imprime a linha.
    echo $buffer;
  }

  // lê o arquivo para o array $arquivo
  $arquivo = file("file.txt");
  // exibe o conteúdo
  echo $arquivo[0];
  echo $arquivo[1];
  echo $arquivo[2];

  // fecha o arquivo
  fclose($fp);
  ?>
</body>

</html>