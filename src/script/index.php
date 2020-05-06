
<!-- valorHora = (valorProjeto / (diasEfetivos * 4 * horasDiarias) ) + ( ( diasFerias * diasEfetivos * horasDiarias ) )
diasEfetivos = dias
horasDiarias = horas
diasFerias = ferias
valorProjeto = projeto
valorHora = total -->

<?php

$dias = $_POST['dias'] ? $_POST['dias'] : null;
$horas = $_POST['tempo'] ? $_POST['tempo'] : null;
$ferias = $_POST['ferias'] ? $_POST['ferias'] : null;
$projeto = $_POST['projeto'] ? $_POST['projeto'] : null;


if(isset($projeto) && isset($dias) && isset($horas) && isset($ferias)){
    
    if($projeto && $horas && $dias && $ferias){
        $total = ($projeto / ($dias * 4 * $horas)) + (($ferias* $dias * $horas));
        $valorTotal = intval($total);
    }else{
    
    }

}else{
    error_reporting(0);
}
