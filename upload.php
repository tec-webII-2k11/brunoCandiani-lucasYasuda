
<?php
			// 1. Definir os parâmetros de teste
			$tipos_aceitos = array(	"image/gif",
									"image/png",
									"image/bmp",
									"image/jpeg");
			// 2. Validar o arquivo enviado
			if($arquivo['error'] != 0) {
				echo '<p style="font-weight:bold;color:red">Erro no Upload do arquivo<br>';
				switch($arquivo['error']) {
				case  UPLOAD_ERR_INI_SIZE:
					echo 'O Arquivo excede o tamanho máximo permitido.';
					break;
				case UPLOAD_ERR_FORM_SIZE:
					echo 'O Arquivo enviado é muito grande.';
					break;
				case  UPLOAD_ERR_PARTIAL:
					echo 'O upload não foi completo.';
					break;
				case UPLOAD_ERR_NO_FILE:
					echo 'Nenhum arquivo foi informado para upload.';	
					break;
				}
				echo '</p>';
				exit;
			}
			if($arquivo['size']==0 OR $arquivo['tmp_name']==NULL) {
				echo '<p style="font-weight:bold;color:red">Nenhum arquivo enviado.</p>';
				exit;
			}
			if($arquivo['size']>$tamanho_maximo) {
				echo '<p style="font-weight:bold;color:red">O Arquivo enviado é muito grande
					(Tamanho Máximo = ' . $tamanho_maximo . ' bytes).</p>';
				exit;
			}
			if(array_search($arquivo['type'],$tipos_aceitos)===FALSE) {
				echo '<p style="font-weight:bold;color:red">O Arquivo enviado é do tipo (' . 
						$arquivo['type'] . ') não aceito para upload. 
						Os tipos aceitos são:	</p>';
				echo '<pre>';
				print_r($tipos_aceitos);
				echo '</pre>';
				exit;
			}
			
			// Agora podemos copiar o arquivo enviado
			if (!file_exists('imagem')) {
							mkdir('imagem', 0777, true);
						}
			$destino = 'imagem/' . $arquivo['name'];
			if(move_uploaded_file($arquivo['tmp_name'],$destino)) {
				// Tudo Ok, mostramos os dados 
				//echo "Todos os campos foram digitados corretamente.";
				//echo  '<p style="font-weight:bold;color:navy">';
				//echo 'O Arquivo foi carregado com sucesso para ' .$destino.'!</p>';
				//echo "<img src='$destino' border=0>";
				     /* $fp = fopen($arquivo['tmp_name'], "rb");
                      $conteudo = fread($fp, $arquivo['size']);
                      $conteudo = addslashes($conteudo);
                      fclose($fp);*/
			}
			else {
				echo '<p style="font-weight:bold;color:red">Ocorreu um erro durante o upload</p>';
				$erro=1;  
			}
			
            
            /*if (move_uploaded_file($imagem['tmp_name'], $arquivo['name'])) {
        		$tamanhoImg = filesize($arquivo['name']); 
        
        		$conteudo = addslashes(fread(fopen($arquivo['name'], "r"), $tamanhoImg)); 

	        }*/
		
	
	

?>