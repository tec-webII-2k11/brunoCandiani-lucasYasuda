<?php
    $opcao = $_POST['tipoCRUD'];
    switch($opcao){

        case "R":
            $formulario = "<h3> LER </h3>
            <form action='readP.php' method='POST'>
                <input type='submit' value='BUSCAR'/>
            </form>";
        break;
        
         case "D":
            $formulario = "<h3> APAGAR </h3>
                <form action='deleteP.php' method='POST'>
                    <label for='tia'> ID: </label> 
                        <input type='text' id='id' name='id'/><br><br>   
                    <input type='submit' value='DELETAR'>";
        break;
    }    
        echo $formulario;
    
?>

    