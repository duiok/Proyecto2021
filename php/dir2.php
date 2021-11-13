<?php

    include 'comprobacion.php';
  
    $calle = $_POST['calle'];
    $colonia = $_POST['colonia'];
    $n_i = $_POST['ni'];
    $n_e = $_POST['ne'];
    $estado = $_POST['estado'];
    $municipio = $_POST['municipio'];
    $cp = $_POST['cp'];

    $query = "INSERT INTO direccion(Calle, colonia, Numero_i, Numero_e, Estado, Municipio, CP) VALUES('$calle', '$colonia', '$n_i', '$n_e', '$estado', '$municipio', '$cp')";

    
    $ejecutar = mysqli_query($conexion, $query);

    if($ejecutar){
        echo'
        <script>
            window.location = "dir2.php"
        </script>
        ';
    }else{
        echo '
            <script>
            alert("Intentelo de nuevo")
            window.location = "dir.php"
            </script>
        ';
    }

   
    mysqli_close($conexion);

    
?>