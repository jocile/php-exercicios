<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Condicional</title>
</head>

<body>
  <h1>Exercício com condicional</h1>

  <p>Faça um algoritmo para ler a altura e retornar o peso ideal.</p>
  <pre>
    <code>
/* programa pesoideal */
programa {
  funcao inicio() {
real ALT, PESOIDH, PESOIDM
  escreva("digite uma altura: ")
  leia ( ALT )
  se (ALT <= 2.50 e ALT >= 0.60)
    {
      PESOIDH = ( 72.7 * ALT ) - 58
      PESOIDM = ( 62.1 * ALT ) - 44.7
      escreva(" Se a altura for de um homem seu peso ideal e ", PESOIDH, "Kg")
      escreva(" Se a altura for de uma mulher seu peso ideal e ", PESOIDM, "Kg")
    } 
    se (ALT > 2.50 ou ALT < 0.60) { escreva("Altura invalida") }
  }
}
    </code>
  </pre>

  <form action="" method="post">
    <label for="altura">Digite a altura:</label>
    <input type="number" name="altura" id="altura" step="0.01" required>
    <br>
    <input type="submit" value="Enviar">
  </form>

  <?php   
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
$altura = $_POST["altura"];
  if ($altura <= 2.50 and $altura >= 0.60)
    {
      $pesoIdealH = ( 72.7 * $altura ) - 58;
      $pesoIdealM = ( 62.1 * $altura ) - 44.7;
      echo" Se a altura for de um homem seu peso ideal e $pesoIdealH Kg <br>";
      echo" Se a altura for de uma mulher seu peso ideal e $pesoIdealM Kg";
    } 
    if ($altura > 2.50 or $altura < 0.60) { echo "Altura invalida"; }
  }
  ?>

</body>

</html>