<?php

include "conecta.php";


$id = $_POST['id'];


$sql = "DELETE FROM users WHERE id='$id'";

$resultado = mysqli_query($conexao,$sql) or die ("Não consigo executar a query:".mysqli_erro());

if($resultado){
    echo "<br> Usuario deletado com sucesso!";
}else{
    echo "<br> Erro !";
}

mysqli_close($conexao);

?>