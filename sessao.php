	<?php
	
	session_start();
	
	if (isset($_SESSION["id"])&& isset($_SESSION['senha'])) {
		
			
		$usuario = $_SESSION["id"];
			
		$senha = $_SESSION['senha'];
	
		    
		    echo "<hgroup id='login'>
    			<p> Bem vindo ". $usuario."! <br> </p>
    		</hgroup>";
			 
		
		}
	
	        
	
	?>