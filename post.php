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
        		<a href="feed.php"><img src="logo1.png" height="100px" width="220px"></img></a>
    		</hgroup>
    
  		 <?php include "menu.inc" ?> 
    
		</header>
		
		<section id="corpopost">
		   	<form id="post" enctype="multipart/form-data" action='postar.php' method='POST'>
		   		<br>
		   		<label for="titulo"></label>Título: <br> <input type="text" placeholder="Insira o título do evento" for="titulo" size="50" name="titulo"><br><br>
		   		<label for="descricao"></label>Descrição <br> <textarea for="descricao" cols="120" rows="15" placeholder="Insira uma descrição do seu evento" name="descricao"></textarea><br><br>
		   		<label for="foto"> Foto: </label>
		        <input type="hidden" name="MAX_SIZE_FILE" value="100000"> <br />
				<input type="file" name="ARQUIVO" id="arquivo"> <br /><br>
		   		<label for="valor">Valor entrada: </label> <input type="text" for="valor" placeholder="R$" name="valor"><br>
		   		<label for="local">Local do evento: </label> <input type="value" for="local" placeholder="Ex: Av. Brasil, 528" name="local"><br>
		   		<label for="data">Data do evento: </label> <input type="text" for="data" placeholder="00/00/0000"name="data"><br><br>
		   		<input type="hidden" value= "<?php echo $usuario;?>" name="email">
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