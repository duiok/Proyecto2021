<?php

    session_start();
    include 'comprobacion.php';


    $correo = $_POST['correo'];
    $contrasena = $_POST['contrasena'];
    $contrasena = hash('sha512', $contrasena);


    $validar_login = mysqli_query($conexion, "SELECT * FROM datos WHERE email ='$correo' and Contrasena = '$contrasena'");

    if(mysqli_num_rows($validar_login) > 0){
        $_SESSION['usuario'] = $correo;
        header("location: ./bienvenida.php");
        exit();

    }else{
        echo'
        <script>
            alert("Usuario inexistente favor de verificar");
            window.location = "./sesion.php";
        </script>
        ';
        exit();
    }
?> 