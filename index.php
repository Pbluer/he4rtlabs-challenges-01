<?php

?>

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

    <div class="left">
      
      <img src="./public/Images/logo-he4rt22.png" alt="he4rt">
      <h1>Uma calculadora que irá te mostrar o valor da sua hora perante o freelance cotado.</h1>
      <p>Este desafio foi desenvolvido pelo grupo <a href="https://heartdevs.com/">He4rt Developers</a> para uso livre da comunidade.</p>
  
    </div>
    
    <div class="right">

      <div id="logo">
        <img src="./public/Images/aaaa2.png" id="logoFreela" alt="Calc Freela">
      </div>    
      <form action="#" method="$_GET">
        <input type="number" id="horas" placeholder="Tempo diário" pattern="[0-9]">
        <input type="number" id="dias" placeholder="Dias Efetivos">
        <input type="number" name="ferias" id="ferias" placeholder="Dias de ferias">
        <h3 id="ValorHora">Valor por hora: R$100</h3>
        <button>Calcular</button>      
      </form>

    </div>

  </body>
</html>
