<?php

$dados = $_POST;

if(isset($dados['num1']) && isset($dados)){
    $total = $dados['num1'] + $dados['num2'];
}