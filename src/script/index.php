<?php

If(isset($_POST['dias']) && isset($_POST['tempo']) && isset($_POST['ferias']) && isset($_POST['projeto'])){
    $dias = $_POST['dias'];
    $horas = $_POST['tempo'];
    $ferias = $_POST['ferias'];
    $projeto = $_POST['projeto'];
    isset($total);
}


if(isset($projeto) && isset($dias) && isset($horas) && isset($ferias)){
      
    if($projeto && $horas && $dias && $ferias){
        $total = ($projeto / ($dias * 4 * $horas)) + (($ferias* $dias * $horas));
        $valorTotal = number_format($total);        
    }
}else{
    error_reporting(0);
}