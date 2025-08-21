<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Condicional</title>
</head>

<body>
  <h1>Exercício com condicional</h1>

  <p>Faça um algoritmo para ler a altura e o peso e retornar o índice de massa corporal (IMC).</p>
  <pre>
    <code>
programa {
  funcao inicio() {
real ALT, PESO, IMC
  escreva("digite uma altura: ")
  leia ( ALT )
  escreva("digite o peso: ")
  leia ( PESO )
  IMC =   PESO / (ALT * ALT)
  escreva("O IMC para é:", IMC)
  se (IMC < 19) {
    escreva("Abaixo do peso")
  } senao
  se (IMC < 26) {
    escreva("Peso ideal")
  } senao
  se (IMC < 29) {
    escreva("Obeso")
  } senao {
    escreva("Obesidade excessiva")
  }
  }
}

    </code>
  </pre>

  <form action="" method="post">
    <label for="altura">Digite a altura:</label>
    <input type="number" name="altura" id="altura" step="0.01" required>
    <br>
    <label for="peso">Digite o peso:</label>
    <input type="number" name="peso" id="peso" step="0.01" required>
    <input type="submit" value="Enviar">
  </form>

  <?php
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $altura = $_POST["altura"];
    $peso = $_POST["peso"];
    $imc =  $peso / ($altura * $altura);
    echo "O IMC para a altura $altura e peso $peso é: $imc <br>Resultado: ";
    if ($imc < 19) {
      print("Abaixo do peso");
    } else if ($imc < 26) {
      print("Peso ideal");
    } else if ($imc < 29) {
      print("Obeso");
    } else {
      print("Obesidade excessiva");
    }
  }
  ?>

</body>

</html>