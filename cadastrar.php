<?php

include "conecta.php";

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
        

    $sql = "INSERT INTO users(nome,sobrenome,dtnasc,email,senha,sexo,imagem) VALUES('".$nome."','".$sobrenome."','".$dtnasc."','".$email."','".$senha."','".$sexo."','".$destino."')";
    
    $resultado = mysqli_query($conexao,$sql) or die ("Não consigo executar a query:".mysqli_erro());
    
    if($resultado){
        echo "<br> <script> alert('Usuario inserido com sucesso!'); window.location.href = 'index.php' </script>"; //redirec
    }else{
        echo "<br> Erro na insercao!";
    }
    
    mysqli_close($conexao);

}


?>