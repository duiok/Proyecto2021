<?php
    session_start();
    if(!isset($_SESSION['usuario'])){
        echo'
            <script>
                alert("Porfavor inicia sesion");
                window.location = "index.php";
            </script>
        ';
        session_destroy();
        die();
        
    }     

?>

<!DOCTYPE html>
<HTML lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenida</title>
</head>
<body>
    <h1>mision coomplete</h1>
    <a href="php/cerrar_sesion.php">Cerrar sesion</a>
    

</body>
</html>