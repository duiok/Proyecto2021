<?php
    
  
    include 'comprobacion.php';
  
   
    $nombre = $_POST['nombre'];
    $correo = $_POST['correo'];
    $usuario = $_POST['usuario'];
    $contrasena = $_POST['contrasena'];
    $contrasena = hash('sha512', $contrasena);

    $query = "INSERT INTO datos(Nombre, email, Usuario, Contrasena) VALUES('$nombre', '$correo', '$usuario', '$contrasena')";

    $verificar_correo = mysqli_query($conexion, "SELECT * FROM datos WHERE email='correo'");
    if(mysqli_num_rows($verificar_correo) > 0){
        echo'
        <script>
            alert("Este correo ya esta registrado, prueba con otro");
            window.location = "../index.php";
        </script>
        ';
        exit();
    }  

    $verificar_usuario = mysqli_query($conexion, "SELECT * FROM datos WHERE Usuario='usuario'");
    if(mysqli_num_rows($verificar_usuario) > 0){
        echo'
        <script>
            alert("Este usuario ya esta registrado, prueba con otro");
            window.location = "../index.php";
        </script>
        ';
        exit();
    }

    $ejecutar = mysqli_query($conexion, $query);

    if($ejecutar){
        echo'
        <script>
            window.location = "../index.php"
        </script>
        ';
    }else{
        echo '
            <script>
            alert("Intentelo de nuevo")
            window.location = "../index.php"
            </script>
        ';
    }

    mysqli_close($conexion);

?>