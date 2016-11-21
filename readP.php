<?php

include "conecta.php";
$sql = "SELECT * from post";

$resultado = mysqli_query($conexao,$sql) or die ("Não consigo executar a query:".mysqli_erro());

if($resultado){
    while ($row = mysqli_fetch_array($resultado)){
        echo "ID: ".$row['id']." Titulo: ".$row['titulo']." Descricao: ".$row['descricao']." Valor: ".$row['valor']." Local: ".$row['local']." Data: ".$row['data']." Email: ".$row['email']." <img class=fotoperf src= ".$row['foto']."><br><br>";
    }
}

mysqli_close($conexao);

?>

