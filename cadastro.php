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
		    <form id="cad" enctype="multipart/form-data" action='cadastrar.php' method='POST'>
		        <label for="nome"> Nome: </label> <input type = "text" for="nome" size="31" name="nome"> <br><br>
		        <label for="sobrenome"> Sobrenome: </label> <input type = "text" for="sobrenome" size="25" name="sobrenome"> <br><br>
		        <label for="data"> Data de Nascimento: </label> <input type = "text" for="data" size="15" name="dtnasc"><br><br>
		        <label for="email"> Email: </label> <input type = "text" for="email" size="31" name="email"> <br><br>
		        <label for="password"> Digite sua senha: </label> <input type="password" for "password" name="senha"> <br><br>
		        <label for="passwordrep"> Repita sua senha: </label> <input type="password" for "passwordrep" name="csenha"> <br><br>
		        <input type = "radio" for="mas" value="Masculino" name="sexo"><label for="mas" name="sexo"> Masculino</label> 
		        <input type = "radio" for="fem" value="Feminino" name="sexo"><label for="fem" name="sexo">Feminino</label><br><br>
		        <label for="foto"> Foto: </label>
		        <input type="hidden" name="MAX_SIZE_FILE" value="100000"> <br />
				<input type="file" name="ARQUIVO" id="arquivo"> <br /><br>
		        <input type="submit" value="Cadastrar">
		    </form>
		    
		    <!--<form action="exibir.php">
		    	<input type="submit" value="Mostrar">
		    </form> -->  
		</section>
		
		<footer id="rodape">
			<p> by Bruno Squassoni & Lucas Yasuda <br></p>
		</footer>
	</div>
	</body>
</html>