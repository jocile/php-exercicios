<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Condicional</title>
</head>

<body>
  <h1>Exercício com condicional</h1>

  <p>Faça um algoritmo para ler dois números e
    imprimir o maior, o menor ou então dizer
    se são iguais.</p>
  <pre>
    <code>
programa {
  funcao inicio() {
    inteiro $num1, $num2
    $resultado
    escreva("Digite o primeiro numero: ")
    leia($num1)
    escreva("Digite o segundo numero: ")
    leia($num2)
    escreva("Você digitou o número ", $num1, " e o número ", $num2, "\n")
    se ($num1 > $num2) { resultado = "maior" } 
    se ($num1 < $num2) { resultado = "menor" }
    se ($num1 == $num2){ resultado = "igual" }
    escreva("O número ", $num1, " é ", resultado, " que o número ", $num2)
  }
}
    </code>
  </pre>

  <form action="" method="post">
    <label for="num1">Digite o primeiro numero:</label>
    <input type="number" name="num1" id="num1" required>
    <br>
    <label for="num2">Digite o segundo numero:</label>
    <input type="number" name="num2" id="num2" required>
    <br>
    <input type="submit" value="Enviar">
  </form>

  <?php
  $num1;
  $num2;
  $resultado;
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $num1 = $_POST["num1"];
    $num2 = $_POST["num2"];
    echo ("Você digitou o número $num1 e o número  $num2 <br>");
    if ($num1 > $num2) {
      $resultado = "maior";
    }
    if ($num1 < $num2) {
      $resultado = "menor";
    }
    if ($num1 == $num2) {
      $resultado = "igual";
    }
    echo ("O número $num1 é $resultado que o número $num2");
  }
  ?>

</body>

</html>