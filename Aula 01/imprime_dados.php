<!DOCTYPE html>
<html lang="pt-br">


<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Imprime Dados</title>
</head>

<body>

  <?php
  require 'usuario.php';

  $objUsuario1 = new Usuario("Taty", "12345612344", "taty@gmail.com");
  echo $objUsuario1->nome;
  echo "<br>";
  echo $objUsuario1->cpf;
  echo "<br>";
  echo $objUsuario1->email;

  echo "<hr/>";

  $objUsuario2 = new Usuario("Maria", "12345612344", "maria@gmail.com");
  echo $objUsuario2->nome;
  echo "<br>";
  echo $objUsuario2->cpf;
  echo "<br>";
  echo $objUsuario2->email;
  echo "<hr/>";
  $objUsuario2->nome = "Maria da Silva";
  echo $objUsuario2->nome;

  ?>


</body>

</html>