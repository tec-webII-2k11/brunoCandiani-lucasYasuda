<?php
    $erro = 0;
    
    if (empty($nome)) {
        echo  "Favor digitar seu nome corretamente.<br>";
        $erro=1;
    }elseif (empty($sobrenome)) {
        echo  "Favor digitar seu sobrenome corretamente.<br>";
        $erro=1;
    }
    
    if (empty($dtnasc)) {
        echo "Favor digitar sua data de nascimento corretamente.<br>";
        $erro=1;
    }
    
    if (strlen($email) < 8 || strstr($email, '@') == FALSE) {
        echo "Favor digitar o seu e-mail corretamente.<br>";
        $erro=1;
    }
    
    if (empty($senha)) {
        echo "Favor digitar uma senha.<br>";
        $erro=1;
    }elseif($csenha != $senha){
        echo "Confirmação de senha incorreta.<br>";
        $erro=1;  
    }
    
    include "upload.php";

?>