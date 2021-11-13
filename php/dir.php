<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <link rel="icon" type="image/jpg" href="../images/logo_superior.jpg">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cuenta</title>
    <link rel="stylesheet" href="../css/usuario.css">
</head>
<body>
    <section class="info">
        <div class="container">
            <div class="macware">
                <a href="../index.php">
                    <img src="../images/logo_superior.jpg" alt="macware" width="80px" height="80px">
                </a>
            </div>
            <div class="usuario">
                <div class="img_usuario">
                    <img src="../images/usuario2.png" alt="img_usuario" width="130px" height="130px">
                </div>
    
                <div class="info_usuario">
                    <p>aqui tiene que aparecer la info de la persona que inicia sesion</p>
                </div>
            </div>
        </div>
    </section>

    <section class="direccion">
        <div class="container">
            <div class="entrada_direccion">
                <form action="dir2.php" method="POST" class="formulario__sesion">
                    <h1>
                        Direccion de entrega: 
                    </h1>
                    <input type="text" placeholder="Calle" name="calle">
                    <input type="text" placeholder="Colonia" name="colonia">
                    <input type="text" placeholder="Número exterior" name="ne">
                    <input type="text" placeholder="Número interior (opcional)" name="ni">
                    <input type="text" placeholder="Municipio" name="municipio">
                    <input type="text" placeholder="Estado" name="estado">
                    <input type="text" placeholder="Código postal" name="cp">
                    <button>Agregar</button>
                </form>
            </div>
        </div>
    </section>

    <section class="botones">
        <div class="container">
            <div class="cerrar_sesion">
                <form action="cerrar_sesion.php">
                    <button>
                        Cerrar sesion
                    </button>
                </form>
                <form action="">
                    <button>
                        Borrar cuenta
                    </button>
                </form>
            </div>
        </div>
    </section>

</body>
</html>
