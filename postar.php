<?php

include "conecta.php";

$titulo = $_POST['titulo'];
$descricao = $_POST['descricao'];
$valor = $_POST['valor'];
$local = $_POST['local'];
$data = $_POST['data'];
$email = $_POST['email'];
$arquivo = $_FILES['ARQUIVO'];
$tamanho_maximo=$_POST['MAX_SIZE_FILE'];


include "validacaopost.php";


if ($erro==0) {

    $sql = "INSERT INTO post(titulo,descricao,foto,valor,local,data,email) VALUES('".$titulo."','".$descricao."','".$destino."','".$valor."','".$local."','".$data."','".$email."')";
    
    $resultado = mysqli_query($conexao,$sql) or die ("Não consigo executar a query:".mysqli_erro());
    
    if($resultado){
        echo "<br> <script> alert('Post inserido com sucesso!'); window.location.href = 'feed.php' </script>"; //redirec
    }else{
        echo "<br> Erro na insercao!";
    }
    
    mysqli_close($conexao);

}


?>