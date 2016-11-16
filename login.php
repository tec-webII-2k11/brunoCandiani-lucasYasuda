<?php
	
include "conecta.php";

$username = $_POST['id'];
$password = $_POST['senha'];

$sql = "SELECT * FROM users where email='".$username."' and senha='".$password."'";

$resultado = mysqli_query($conexao,$sql) or die ("Não consigo executar a query:".mysqli_erro());

if($resultado){
    $row = mysqli_fetch_array($resultado);
    //$nome = $row['nome'];    
     
     if (isset($_POST["id"])) {
        
        if($row!=""){
    		session_start();
    
    		$_SESSION['id'] = $username;
    		$_SESSION['senha'] = $password;
    
    	
    		if (isset($_SESSION['id'])&& isset($_SESSION['senha'])){
    
    			header('Location: feed.php');
    	
    		}
        }
    }
 
    
    
}else{
    echo "<br> Erro na busca";
}

if($row==""){
    echo "<br> <script> alert('Usuario ou senha incorretos!'); window.location.href = 'index.php' </script>";
    exit;
}




	


?>


