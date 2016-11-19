<!DOCTYPE html>
<html lang="pt-br">

	<head>
		<title>Perfil - Yassoni Party</title>
		<meta charset="UTF-8"/>
		<title>Yassoni Party</title>
		<link rel="stylesheet" type="text/css" href="estilo.css">
		<link rel="shortcut icon" href="favicon-32x32.png" >
	</head>
	
	<body>
	<?php include "sessao.php"; ?>
	<div id="interface">
		
		<header id="cabecalho">
    		<hgroup>
        		<a href="feed.php"><img src="logo1.png" height="100px" width="220px"></img></a>
    		</hgroup>
    
  		 <?php include "menu.inc" ?> 
    
		</header>
		
		<section id="corpoperfil">
		   	<form id="perfil">
		   		<br>
		   		<label for="senhaantiga"></label>Deseja alterar sua senha? <br><br> <input type="password" for="senhaantiga" placeholder="Insira sua senha atual" name="senhaantiga"><br>
		   		<label for="senhanova"></label><br> <input type="password" for="senhanova" placeholder="Insira a nova senha" name="senhanova"><br><br>
		   		<label for="fotoperfil">Alterar imagem de perfil:</label><br><br> <input type="file" for="fotoperfil"><br><br>
		   		<input type="submit" for="submitperfil" value="Salvar alterações"><br><br><br><br>
		   		<label for="excluirperfil"> Excluir a conta? ):</label> <br><br><input type="password" for=excluirperfil placeholder="Insira sua senha para excluir a conta"><br><br>	
		   		<label for="excluirperfil2"></label> <input type="password" for=excluirperfil2 placeholder="Certeza disso? Insira a senha novamente"><br><br>
		   		<label for="motivo">Conte-nos por que! O que podemos mudar? </label><br><br> <textarea for=motivo placeholder="Esse campo é opcional" cols="120" rows="10"></textarea><br><br>
		   		<input type="submit" for="confexcluir" value="Confirmar exclusão"><br><br><br>
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