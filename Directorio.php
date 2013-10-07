<!DOCTYPE html>
<html>
        <head>
            <title>Directorio</title>        
        </head>
        <body>
		    <h1>Directorio</h1>
		        <?php
		        session_start();
		        $Codigo = $_POST['codigo'];
		        $Password = $_POST['pass'];
		
		        if(($Codigo == 100 && $Password == 'udg')||
		        ($Codigo == 110 && $Password == 'tonala')||
	            ($Codigo == 1 && $Password == 'root')){
	  
	            $_SESSION['codigo'] = $Codigo;
		        $_SESSION['pass'] = $Password;
		        echo "Codigo y Contrase&ntilde;a correctos &iexcl;&iexcl;&iexcl;BIENVENIDO!!!"; 
		        header('Location: Nuevo.php');
	            }else{
	            header('Location: Cerrar.php');
                }
				echo "<input type = 'submit' value = 'Guardar'/>";   
	            ?>
        </body> 
</html>