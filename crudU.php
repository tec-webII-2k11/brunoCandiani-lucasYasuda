<?php
    $opcao = $_POST['tipoCRUD'];
    switch($opcao){
        case "C":
            $formulario =
                "<h3> CADASTRAR </h3>		 
                <form id='cad' enctype='multipart/form-data' action='cadastrar.php' method='POST'>
		        <label for='nome'> Nome: </label> <input type = 'text' for='nome' size='31' name='nome'> <br><br>
		        <label for='sobrenome'> Sobrenome: </label> <input type = 'text' for='sobrenome' size='25' name='sobrenome'> <br><br>
		        <label for='data'> Data de Nascimento: </label> <input type = 'text' for='data' size='15' name='dtnasc'><br><br>
		        <label for='email'> Email: </label> <input type = 'text' for='email' size='31' name='email'> <br><br>
		        <label for='password'> Digite sua senha: </label> <input type='password' for 'password' name='senha'> <br><br>
		        <label for='passwordrep'> Repita sua senha: </label> <input type='password' for 'passwordrep' name='csenha'> <br><br>
		        <input type = 'radio' for='mas' value='Masculino' name='sexo'><label for='mas' name='sexo'> Masculino</label> 
		        <input type = 'radio' for='fem' value='Feminino' name='sexo'><label for='fem' name='sexo'>Feminino</label><br><br>
		        <label for='foto'> Foto: </label>
		        <input type='hidden' name='MAX_SIZE_FILE' value='100000'> <br />
				<input type='file' name='ARQUIVO' id='arquivo'> <br /><br>
		        <input type='submit' value='Cadastrar'>
		    </form>";
        break;
        
        case "R":
            $formulario = "<h3> LER </h3>
            <form action='readU.php' method='POST'>
                <input type='submit' value='BUSCAR'/>
            </form>";
        break;
        
        case "U":
            $formulario = 
                "<h3> ATUALIZAR </h3>
                		    <form id='cad' enctype='multipart/form-data' action='updateU.php' method='POST'>
                <label for='id'> ID: </label> <input type = 'text' for='id' size='31' name='id'> <br><br>		    
		        <label for='nome'> Nome: </label> <input type = 'text' for='nome' size='31' name='nome'> <br><br>
		        <label for='sobrenome'> Sobrenome: </label> <input type = 'text' for='sobrenome' size='25' name='sobrenome'> <br><br>
		        <label for='data'> Data de Nascimento: </label> <input type = 'text' for='data' size='15' name='dtnasc'><br><br>
		        <label for='email'> Email: </label> <input type = 'text' for='email' size='31' name='email'> <br><br>
		        <label for='password'> Digite sua senha: </label> <input type='password' for 'password' name='senha'> <br><br>
		        <label for='passwordrep'> Repita sua senha: </label> <input type='password' for 'passwordrep' name='csenha'> <br><br>
		        <input type = 'radio' for='mas' value='Masculino' name='sexo'><label for='mas' name='sexo'> Masculino</label> 
		        <input type = 'radio' for='fem' value='Feminino' name='sexo'><label for='fem' name='sexo'>Feminino</label><br><br>
		        <label for='foto'> Foto: </label>
		        <input type='hidden' name='MAX_SIZE_FILE' value='100000'> <br />
				<input type='file' name='ARQUIVO' id='arquivo'> <br /><br>
		        <input type='submit' value='Atualizar'>
		    </form>";      
        break;
        
        case "D":
            $formulario = "<h3> APAGAR </h3>
                <form action='deleteU.php' method='POST'>
                    <label for='tia'> ID: </label> 
                        <input type='text' id='id' name='id'/><br><br>   
                    <input type='submit' value='DELETAR'>";
        break;
    }    
        echo $formulario;
    
?>

    