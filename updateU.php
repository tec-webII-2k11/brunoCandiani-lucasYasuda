<?php

include "conecta.php";

$id = $_POST['id'];
$nome = $_POST['nome'];
$sobrenome = $_POST['sobrenome'];
$dtnasc = $_POST['dtnasc'];
$email = $_POST['email'];
$senha = $_POST['senha'];
$csenha = $_POST['csenha'];
$sexo = $_POST['sexo'];
$arquivo = $_FILES['ARQUIVO'];
$tamanho_maximo=$_POST['MAX_SIZE_FILE'];


include "validacao.php";

if ($erro==0) {
        
    
    $sql = "UPDATE users SET nome='$nome', sobrenome ='$sobrenome', dtnasc = '$dtnasc', email = '$email', senha = '$senha', sexo = '$sexo', imagem = '$destino'  WHERE id='$id'";
    
    $resultado = mysqli_query($conexao,$sql) or die ("Não consigo executar a query:".mysqli_erro());
    
    if($resultado){
        echo "<br> <script> alert('Usuario alterado com sucesso!'); window.location.href = 'pgadm.php' </script>"; //redirec
    }else{
        echo "<br> Erro na insercao!";
    }
    
    mysqli_close($conexao);

}


?>