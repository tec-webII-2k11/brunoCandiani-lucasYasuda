<?php
    $erro = 0;
    
    if (empty($titulo)) {
        echo  "Favor digitar um titulo.<br>";
        $erro=1;
    }elseif (empty($descricao)) {
        echo  "Favor digitar uma descricao.<br>";
        $erro=1;
    }
    
    if (empty($valor)) {
        echo "Favor digitar um valor para o evento.<br>";
        $erro=1;
    }
    
    if (empty($local)) {
        echo "Favor digitar um local para o evento.<br>";
        $erro=1;
    }
        if (empty($data)) {
        echo "Favor digitar uma data para o evento.<br>";
        $erro=1;
    }

    
    include "upload.php";

?>