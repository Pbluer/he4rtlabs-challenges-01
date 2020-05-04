<!-- valorHora = (valorProjeto / (diasEfetivos * 4 * horasDiarias) ) + ( ( diasFerias * diasEfetivos * horasDiarias ) )

diasEfetivos = dias
horasDiarias = horas
diasFerias = ferias
valorProjeto = projeto
valorHora = total -->

<?php

$dados = $_POST;

if(isset($dados['projeto']) && isset($dados['horas']) && isset($dados['dias']) && isset($dados['ferias'])){
    error_reporting(0);
    $total = ($dados['projeto'] / ($dados['dias'] * 4 * $dados['horas'])) + (($dados['ferias']* $dados['dias'] * $dados['horas']));
    $valorTotal = intval($total);
}else{
   
}

?>