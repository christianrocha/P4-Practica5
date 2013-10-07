<?php
session_start();
if(!isset($_SESSION['codigo'])){
header("Location: Sesion.php");
}
?>

</head>
    <body>
        <a href = 'Cerrar.php'><h4>Cerrar Sesion</h4></a>
	    <form method="post" action="Directorio.php">
	        <center>
            <fieldset style = "width : 35%;">
            <legend><h3>Ver datos</h3></legend><br/>
            <div align=left>
                <?php
                $Nombre = $_POST['nombre'];
                $Telefono = $_POST['tel'];
                $Celular = $_POST['cel'];
                $Domicilio = $_POST['dom'];

                echo "<h3>Nombre: </h3>".$Nombre;
                echo "<h3>Telefono: </h3>".$Telefono;
                echo "<h3>Celular: </h3>".$Celular;
                echo "<h3>Domicilio: </h3>".$Domicilio;
                ?>
            <a href = 'Directorio.php'><h4>Volver</h4></a>
            </div> 				
            </fieldset>                                                           
            </center> 
        </form>	
    </body>
</html>