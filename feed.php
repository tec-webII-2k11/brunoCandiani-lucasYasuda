<!DOCTYPE html>
<html lang="pt-br">

	<head>
		<meta charset="utf-8">
		<title>Feed - Yassoni Party</title>
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
		
		<section id="corpofeed">
			<div id="postagem">
				<div id="perfiluser">
					
				<h1>Eventos</h1>
				
				<?php
				include "conecta.php";
				
				$sql = "SELECT users.nome,users.sobrenome,users.imagem,post.descricao,post.valor,post.local,post.data,post.foto,post.titulo FROM users JOIN post ON users.email=post.email;";
				
			
				$resultado = mysqli_query($conexao,$sql) or die ("Não consigo executar a query:".mysqli_erro());
				
				if($resultado){
				    while ($row = mysqli_fetch_array($resultado)){
	
						echo "<img class=fotoperf src=".$row['imagem'].">";
				    	echo "<p class=nomeperf>".$row['nome']." ".$row['sobrenome']."</p>";
				        echo "<p class=titulo> Titulo: ".$row['titulo']."</p>";	
				        echo "<p class=descricao> Descrição: ".$row['descricao']."</p>";
				        echo "<div id=imagenslocal><img class=foto src=".$row['foto']."> </div><br>";
				        echo "<p class=data>Data: ".$row['data']."</p>";
				        echo "<p class=local>Local: ".$row['local']."</p>";
				        echo "<p class=valor>Valor: R$".$row['valor']."</p>";
				    	echo "<footer id='rodape'> </footer> <br>";
				    }
				}
				
				mysqli_close($conexao); ?>

		</section>
		
		<!--<aside id="lateral">

		</aside>-->
		
		<footer id="rodape">
			<p> by Bruno Squassoni & Lucas Yasuda <br></p>
		</footer>
	</div>
	</body>

</html>