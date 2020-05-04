<!DOCTYPE html>
<html lang="pt_BR">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./public/css/main.css" />
    <link rel="icon" type="imagem/png" href="./public/Images/he4rt.png">
    <title>Calculadora de Freela - He4rtDevs</title>
  </head>
  <body>
    <?php require_once("src/index.php") ?>
    <div class="left">
      
      <img src="./public/css/Images/logo-he4rt22.png" alt="he4rt">
      <h1>Uma calculadora que irá te mostrar o valor da sua hora perante o freelance cotado.</h1>
      <p>Este desafio foi desenvolvido pelo grupo <a href="https://heartdevs.com/">He4rt Developers</a> para uso livre da comunidade.</p>
      
    </div>
    
    <div class="right">

      <div id="logo">
        <img src="./public/css/Images/aaaa2.png" id="logoFreela" alt="Calc Freela">        
      </div>    
      <form action="" method="POST">        
        <input type="number" name="horas" placeholder="Tempo Diário">
        <input type="number" name="dias" placeholder="Dias Efetivos">
        <input type="number" name="ferias" name="ferias" placeholder="Dias de Ferias">
        <input type="number" name="projeto" placeholder="Valor do Projeto">
        <h3 id="ValorHora">Valor por hora: <?= isset($total) ? " R$ $valorTotal" : ''?></h3>
        <button>Calcular</button>      
      </form>

    </div>

  </body>
</html>


<?php


?>