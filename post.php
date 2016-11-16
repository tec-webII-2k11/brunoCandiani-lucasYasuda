<!DOCTYPE html>
<html lang="pt-br">

	<head>
		<title>Novo evento</title>
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
        		<a href="index.php"><img src="logo1.png" height="100px" width="220px"></img></a>
    		</hgroup>
    
  		 <?php include "menu.inc" ?> 
    
		</header>
		
		<section id="corpopost">
		   	<form id="post">
		   		<br>
		   		<label for="titulopost"></label>Título: <br> <input type="text" placeholder="Insira o título do evento" for="titulopost" size="50" name="titulopost"><br><br>
		   		<label for="descricaopost"></label>Descrição <br> <textarea for="descricaopost" cols="120" rows="15" placeholder="Insira uma descrição do seu evento" name="descricaopost"></textarea><br><br>
		   		<p>Insira algumas imagens!</p>
		   		<label for="fotopost1"></label> <input type="file" for="fotopost1" name=fotopost1><br><br>
		   		<label for="fotopost2"></label> <input type="file" for="fotopost2" name="fotopost2"><br><br>
		   		<label for="fotopost3"></label> <input type="file" for="fotopost3" name="fotopost3"><br><br><br>
		   		<label for="valorpost">Valor entrada: </label> <input type="text" for="valorpost" placeholder="R$" name="valorpost"><br>
		   		<label for="localpost">Local do evento: </label> <input type="value" for="localpost" placeholder="Ex: Av. Brasil, 528" name="localpost"><br>
		   		<label for="datapost">Data do evento: </label> <input type="date" for="datapost" name="datapost"><br><br>
		   		<input type="submit" for="submitpost" value="Publicar Evento">
		   		<br>
		   		<br>
		   	</form>
		</section>
		
		<footer id="rodape">
			<p> by Bruno Squassoni & Lucas Yasuda <br></p>
		</footer>
	</div>
	</body>
</html>