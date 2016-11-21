<?php

include "conecta.php";
$sql = "SELECT * from users";

$resultado = mysqli_query($conexao,$sql) or die ("Não consigo executar a query:".mysqli_erro());

if($resultado){
    while ($row = mysqli_fetch_array($resultado)){
        echo "ID: ".$row['id']." Nome: ".$row['nome']." Sobrenome: ".$row['sobrenome']." Data de Nascimento: ".$row['dtnasc']." Email: ".$row['email']." Senha: ".$row['senha']." Sexo: ".$row['sexo']." <img class=fotoperf src= ".$row['imagem']."><br>";
    }
}

mysqli_close($conexao);

?>

