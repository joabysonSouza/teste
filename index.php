<?php 
if(isset($_POST['submit']))
{

//     print_r($_POST['texto01']);

include_once('config.php');

$text0 = $_POST['texto01'];
  
 $result = mysqli_query($conexao, 
 "INSERT INTO anotacoes(texto01) 
 VALUES('$text0')");
 }



?>





<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>Document</title>
</head>
<body>
  <div class="corpo">
    <h1>NOTAS</h1>
    <div class="cadastro">
      <form action="index.php" method="POST">
        <input class="input" name="texto01" id="name" type="text" placeholder="Nova Nota...">
        <button class="botao" type="submit" name="submit" id="submit">+</button>
      </form>
    </div>
    <div class="conteudo">
      <div>
        <p>You know how there are JavaScript dialogs for alerting, confirming, and prompting user actions? Say you want to replace JavaScript dialogs with the new HTML dialog element.      </p>
      </div>
      <div>
        <p>You know how there are JavaScript dialogs for alerting, confirming, and prompting user actions? Say you want to replace JavaScript dialogs with the new HTML dialog element.      </p>
      </div>
      <div>
        <p>You know how there are JavaScript dialogs for alerting, confirming, and prompting user actions? Say you want to replace JavaScript dialogs with the new HTML dialog element.      </p>
      </div>
      <div>
        <p>You know how there are JavaScript dialogs for alerting, confirming, and prompting user actions? Say you want to replace JavaScript dialogs with the new HTML dialog element.      </p>
      </div>
      <div>
        <p>You know how there are JavaScript dialogs for alerting, confirming, and prompting user actions? Say you want to replace JavaScript dialogs with the new HTML dialog element.      </p>
      </div>
    </div>
  </div>
</body>
</html>