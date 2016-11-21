<?php
    $opcao = $_POST['tipo'];
    switch($opcao){
        case "U":
            $formulario =
                "<form action='crudU.php' method='post'>
              <h1> Manter Usuario</h1>
              <input type='radio' name='tipoCRUD' value='C' checked> Inserir <br>
              <input type='radio' name='tipoCRUD' value='R' > Ler <br>
              <input type='radio' name='tipoCRUD' value='U' > Alterar <br>
              <input type='radio' name='tipoCRUD' value='D' > Apagar <br>
              <input type='submit' value='Ok'>
          </form>";
        break;
        
        case "P":
            $formulario = "<form action='crudP.php' method='post'>
              <h1> Manter Postagem</h1>
              <input type='radio' name='tipoCRUD' value='R' > Ler <br>
              <input type='radio' name='tipoCRUD' value='D' > Apagar <br>
              <input type='submit' value='Ok'>
          </form>";
        break;
        
    }    
        echo $formulario;
    
?>

    