function calcularMedia(nota1, nota2, nota3) {
  // Calcula a média das três notas fornecidas pelo usuário
  const media = (nota1 + nota2 + nota3) / 3;
  
  // Verifica se o aluno foi aprovado ou reprovado com base na média
  if (media >= 7.0) {
    return "Aprovado";
  } else if (media >= 5.0 && media < 7.0) {
    return "Recuperação";
  } else {
    return "Reprovado";
  }
}

// Testando a função
console.log(calcularMedia(8, 9, 10)); // Saída: Aprovado
console.log(calcularMedia(5.5, 6.5, 7.5)); // Saída: Recuperação