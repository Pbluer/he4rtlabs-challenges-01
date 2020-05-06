<?php 

require_once("./script/index.php")

?>

<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href=".\css\style.css">
    <link rel="icon" href=".\img\he4rt.svg">
    <title>he4rtlabs-challenges-01</title>
</head>
<body>

    <header>

        <img src=".\img\logo-he-1.svg" id="he4rt" alt="He4rt">
        <hr>        
        <nav class="menu" id="open-Menu">
            <a href="#" class="link">GitHub</a>
            <a href="#" class="link">Twitter</a>
            <a href="#" class="link">Discord</a>
            <a href="#" class="link">Desafio</a>
        </nav>
       
    </header>

    <div class="container">

        <div class="right"> 
            <img src=".\img\Mesa de trabajo 1.svg" alt="">
        </div>

        <div class="left">
            <form action="#" method="POST">
                <label for="tempo">Valor Projeto</label>
                <input type="number" name="projeto">
                <label for="tempo">Tempo Diário</label>
                <input type="number" name="tempo">
                <label for="tempo">Dias Efetivos</label>
                <input type="number" name="dias">
                <label for="tempo">Dias de Férias</label>
                <input type="number" name="ferias">
                <button>Calcular</button>
                <h2><?= $valorTotal ?></h2>
            </form>
        </div>    
    </div>

    <footer>
        <hr>
        <p>Este desafio foi desenvolvido pelo grupo <a href="https://heartdevs.com/">He4rt Developers</a> para uso livre da comunidade.</p>
    </footer>
</body>
</html>