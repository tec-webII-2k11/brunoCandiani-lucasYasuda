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
        		<a href="index.php"><img src="logo1.png" height="100px" width="220px"></img></a>
        		<h2>Promoção de festas e eventos!</h2>
    		</hgroup>
    
  			<!-- <?php include "menu.inc" ?> -->
    		
    	
    		<form id="login">
    				<label for="id"> Email: </label> <input type = "email" placeholder="Insira seu e-mail" for="id" size="30">
    				<label for="senha"> Senha: </label> <input type = "password" placeholder="Insira sua senha" for="senha"> 
    				<input type = "submit" value="Entrar">
    				
    		</form>
    		
    		<hgroup id="loginC">
    			<p><a href="cadastro.php">Cadastrar-se</a></p>
    		</hgroup>
    		
    		<hgroup id="loginE">
    			<p><a href="senha.php">Esqueci minha senha</a></p>
    		</hgroup>
    
		</header>
		
		<section id="corpo">
		    <h2>Aqui você poderá promover a sua festa e também encontrar diversos outros eventos para sua diversão!</h2>
		    <img id="imageindex" src="imageindex.jpg" alt="Festas"> 
		    <h4>A Yassoni é a plataforma certa pra você encontrar novos lugares para ir, conhecer novos amigos, e amores!</h4>
		    <h4>Baladas? Shows? Aqui você encontra o que procura! Faça já seu cadastro! </h4>
		    
		    <a href="feed.php">Caminho temporário para o feed</a><br>
		    
		</section>
		
		<!--<aside id="lateral">
	
		</aside>-->
		
		<footer id="rodape">
			<p> by Bruno Squassoni & Lucas Yasuda <br></p>
		</footer>
	</div>
	</body>
</html>