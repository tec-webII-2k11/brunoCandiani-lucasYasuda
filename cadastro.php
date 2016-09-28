<!DOCTYPE html>
<html lang="pt-br">

	<head>
		<meta charset="UTF-8"/>
		<title>Yassoni Party</title>
		<link rel="stylesheet" type="text/css" href="estilo.css">
		<link rel="shortcut icon" href="favicon-32x32.png" >
	</head>
	
	<body>
	<div id="interface">
		
		<header id="cabecalho">
    		<hgroup>
        		<img src="logo1.png" height="100px" width="220px"></img>
        		
        		<h2>Promoção de festas e eventos!</h2>
    		</hgroup>
    
  			<!-- <?php include "menu.inc" ?> -->
    		
    	
    		<form id="login">
    				<label for="id"> Email: </label> <input type = "email" placeholder="Insira seu e-mail" for="id" size="30">
    				<label for="senha"> Senha: </label> <input type = "password" placeholder="Insira sua senha" for="senha"> 
    				<input type = "submit" value="Entrar">
    				
    		</form>
    		
    		<hgroup id="loginC">
    			<p><a href="">Cadastrar-se</a></p>
    		</hgroup>
    		
    		<hgroup id="loginE">
    			<p><a href="">Esqueci minha senha</a></p>
    		</hgroup>
    
		</header>
		
		<section id="corpo">
		    <form id="cad">
		        <label for="nome"> Nome: </label> <input type = "text" for="nome" size="25"> <br><br>
		        <label for="sobrenome"> Sobrenome: </label> <input type = "text" for="sobrenome" size="25"> <br><br>
		        <label for="email"> Email: </label> <input type = "text" for="email" size="30"> <br><br>
		        <label for="data"> Data de Nascimento: </label> <input type = "text" for="data" size="10"><br><br>
		        <input type = "radio" for="mas" value="Masculino" name="sexo"><label for="mas"> Masculino</label> 
		        <input type = "radio" for="fem" value="Feminino" name="sexo"><label for="fem">Feminino</label> 
		    </form>
		</section>
		
		<!--<aside id="lateral">
	
		</aside>-->
		
		<footer id="rodape">
			<p> by Bruno Squassoni & Lucas Yasuda <br></p>
		</footer>
	</div>
	</body>
</html>