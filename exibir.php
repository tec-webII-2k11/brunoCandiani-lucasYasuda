<?php

include "conecta.php";


$sql = "SELECT * FROM users";

$resultado = mysqli_query($conexao,$sql) or die ("Não consigo executar a query:".mysqli_erro());

if($resultado){
    while ($row = mysqli_fetch_array($resultado)){
        echo "ID: ".$row['id']." Nome: ".$row['nome']." Sobrenome: ".$row['sobrenome']." Data de Nascimento: ".$row['dtnasc']." Email: ".$row['email']." Senha: ".$row['senha']." Sexo: ".$row['sexo']." Imagem: <img src='".$row['imagem']."' \"> <br><br>";
        
    }
    
    /*while($row=mysql_fetch_object($resultado)) { 
	    echo "<img src='getImagem.php?id=$row->id' \">"; 
    } */
    
}else{
    echo "<br> Erro na busca";
}

mysqli_close($conexao);

?>
