<!DOCTYPE html> 
<html lang="es">
<head>
    <link rel="icon" type="image/jpg" href="../images/logo_superior.jpg">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro&display=swap" rel="stylesheet">
    <title>Procesadores</title>
    <link rel="stylesheet" href="../css/header.css">
    <link rel="stylesheet" href="../fonts/style.css">
    <link rel="stylesheet" href="../css/estilo1.css">
</head>
<body>
    <i class="icon-menu bur-button" id="burger-menu"></i>
    <header class="header" style="justify-content: space-between;">
        <div class="container">
            <div class="logo">
                <a href="../index.php" class="return">
                    <img src="../images/logo_superior.jpg" alt="logo macware" width="100px" height="100px">
                    <h1>MAC<br>WARE</h1>
                </a>
            </div>
            <div class="header_section">
                <div class="header_section_second">
                    <div class="cuenta">
                    <?php
                            session_start(); 
                            if(!isset($_SESSION['usuario'])){
                            ?>
                                <a href="../php/sesion.php" class="entrar_cuenta">
                                    <h2>Cuenta</h2>
                                    <span class="icon-user"></span>
                                </a>
                            
                            <?php
                            }else{
                                $_SESSION['usuario'] = false;
                            ?>
                                <a href="../php/cerrar_sesion.php" class="entrar_cuenta">
                                    <h2>Cerrar sesión</h2>
                                    <span class="icon-user"></span>
                                </a>
                            <?php
                            }
                            ?>
                    </div>
                    <div class="carrito">
                        <h2>Carrito</h2>
                        <span class="icon-cart"></span>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <section class="products">
        <div class="container">
            <div class="space">
                <div class="menu">
                    <h2>MENU</h2>
                    <nav>
                        <ol>
                            <li>
                                <a class="link" href="../index.php">Inicio</a>
                            </li>
                            <li>
                                <a class="link" href="procesadores.php">Procesadores</a>
                            </li>
                            <li>
                                <a class="link" href="graficas.php">Gráficas</a>
                            </li>
                            <li>
                                <a class="link" href="tarjetamadre.php">Tarjeta madre</a>
                            </li>
                            <li>
                                <a class="link" href="almacenamiento.php">Almacenamiento</a>
                            </li>
                            <?php
                            
                            if(!isset($_SESSION['usuario'])){
                            ?>  

                            <?php
                            }else{
                                $_SESSION['usuario'] = false;
                            ?>
                                <li>
                                    <a class=link href="..php/dir.php">Dirección</a>
                                </li>
                            <?php
                            }
                        ?>
                        </ol>
                    </nav>
                </div>
            </div>
            <div class="other_products">
                <!-- Primer grafica 1060 msi-->
                <div class="producto"> 
                    <div class="imagen">
                        <img src="../images/msi1060.png" alt="procesador" width="90%">
                    </div>
                    <div class="descripcion">
                        <p class="nombre">Tarjeta de Video MSI NVIDIA GeForce GTX 1060 GamingX, 6GB 192-bit GDDR5, PCI Express 3.0 x16</p>
                        <p class="precio">$13,000.00</p>
                    </div>
                    <div class="agregar">
                        <button class="agregar-carrito">
                            Agregar al carrito
                        </button>
                    </div>
                </div>
                <!-- Segundo grafica 1060 tuf-->
                <div class="producto">
                    <div class="imagen">
                        <img src="../images/asus1060.png" alt="procesador" width="90%">
                    </div>
                    <div class="descripcion">
                        <p class="nombre">Tarjeta de Video ASUS NVIDIA GeForce GTX 1060 Dual OC, 3GB 192-bit GDDR5, PCI Express 3.0</p>
                        <p class="precio">$10,500.00</p>
                    </div>
                    <div class="agregar">
                        <button class="agregar-carrito">
                            Agregar al carrito
                        </button>
                    </div>
                </div>
                <!-- tercero grafica 1070 msi-->
                <div class="producto">
                    <div class="imagen">
                        <img src="../images/msi1070.png" alt="procesador" width="90%">
                    </div>
                    <div class="descripcion">
                        <p class="nombre">Tarjeta de Video MSI NVIDIA GeForce GTX 1070 Gaming X, 8GB 256-bit GDDR5, PCI Express x16 3.0</p>
                        <p class="precio">$13,500.00</p>
                    </div>
                    <div class="agregar">
                        <button class="agregar-carrito">
                            Agregar al carrito
                        </button>
                    </div>
                </div>
                <!-- cuarto grafica 1070 asus-->
                <div class="producto">
                    <div class="imagen">
                        <img src="../images/asus1070.png" alt="procesador" width="90%">
                    </div>
                    <div class="descripcion">
                        <p class="nombre">Tarjeta de Video ASUS NVIDIA GeForce GTX 1070 STRIX OC, 8GB 256-bit GDDR5, PCI Express 3.0</p>
                        <p class="precio">$11,500.00</p>
                    </div>
                    <div class="agregar">
                        <button class="agregar-carrito">
                            Agregar al carrito
                        </button>
                    </div>
                </div>
                <!-- quinto grafica 1080 msi-->
                <div class="producto">
                    <div class="imagen">
                        <img src="../images/msi1080.png" alt="procesador" width="90%">
                    </div>
                    <div class="descripcion">
                        <p class="nombre">Tarjeta de Video MSI NVIDIA GeForce GTX 1080 Gaming, 8GB 256-bit GDDR5X, PCI Express x16 3.0</p>
                        <p class="precio">$15,000.00</p>
                    </div>
                    <div class="agregar">
                        <button class="agregar-carrito">
                            Agregar al carrito
                        </button>
                    </div>
                </div>
                <!-- sexto grafica 1080 asus-->
                <div class="producto">
                    <div class="imagen">
                        <img src="../images/asus1080.png" alt="procesador" width="90%">
                    </div>
                    <div class="descripcion">
                        <p class="nombre">Tarjeta de Video ASUS ROG STRIX NVIDIA GeForce GTX 1080 GAMING, 8GB 256-bit GDDR5X, PCI Express 3.0</p>
                        <p class="precio">$26,000.00</p>
                    </div>
                    <div class="agregar">
                        <button class="agregar-carrito">
                            Agregar al carrito
                        </button>
                    </div>
                </div>
                <!-- septimo grafica 2060 msi-->
                <div class="producto">
                    <div class="imagen">
                        <img src="../images/msi2060.png" alt="procesador" width="90%">
                    </div>
                    <div class="descripcion">
                        <p class="nombre">Tarjeta de Video MSI NVIDIA GeForce RTX 2060 Gaming Z, 6GB 192-bit GDDR6, PCI Express x16 3.0</p>
                        <p class="precio">$16,000.00</p>
                    </div>
                    <div class="agregar">
                        <button class="agregar-carrito">
                            Agregar al carrito
                        </button>
                    </div>
                </div>
                <!-- octavo grafica 2060 asus-->
                <div class="producto">
                    <div class="imagen">
                        <img src="../images/asus2060.png" alt="procesador" width="90%">
                    </div>
                    <div class="descripcion">
                        <p class="nombre">Tarjeta de Video ASUS NVIDIA GeForce RTX 2060 Rog Strix Gaming Advanced Edition, 6GB 192-bit GDDR6, PCI Express x16 3.0</p>
                        <p class="precio">$16,000.00</p>
                    </div>
                    <div class="agregar">
                        <button class="agregar-carrito">
                            Agregar al carrito
                        </button>
                    </div>
                </div>
                <!-- noveno grafica 2070 msi-->
                <div class="producto">
                    <div class="imagen">
                        <img src="../images/msi2070.png" alt="procesador" width="90%">
                    </div>
                    <div class="descripcion">
                        <p class="nombre">Tarjeta de Video MSI NVIDIA GeForce RTX 2070 Gaming X, 8GB 256-bit GDDR6, PCI Express x16 3.0</p>
                        <p class="precio">$15,000.00</p>
                    </div>
                    <div class="agregar">
                        <button class="agregar-carrito">
                            Agregar al carrito
                        </button>
                    </div>
                </div>
                <!-- decimo grafica 2070 nvidia-->
                <div class="producto">
                    <div class="imagen">
                        <img src="../images/nvidia2070.png" alt="procesador" width="90%">
                    </div>
                    <div class="descripcion">
                        <p class="nombre">Tarjeta de Video ASUS NVIDIA GeForce RTX 2070 ROG Strix Gaming OC, 8GB 256-bit GDDR6, PCI Express 3.0</p>
                        <p class="precio">$18,000.00</p>
                    </div>
                    <div class="agregar">
                        <button class="agregar-carrito">
                            Agregar al carrito
                        </button>
                    </div>
                </div>
                <!-- noveno grafica 3060 msi-->
                <div class="producto">
                    <div class="imagen">
                        <img src="../images/msi3060.png" alt="procesador" width="90%">
                    </div>
                    <div class="descripcion">
                        <p class="nombre">Tarjeta de Video MSI NVIDIA GeForce RTX 3060 Gaming X 12G, 12GB 192-bit GDDR6, PCI Express 4.0</p>
                        <p class="precio">$23,000.00</p>
                    </div>
                    <div class="agregar">
                        <button class="agregar-carrito">
                            Agregar al carrito
                        </button>
                    </div>
                </div>
                <!-- noveno grafica 3060 asus-->
                <div class="producto">
                    <div class="imagen">
                        <img src="../images/asus3060.png" alt="procesador" width="90%">
                    </div>
                    <div class="descripcion">
                        <p class="nombre">Tarjeta de Video ASUS NVIDIA GeForce RTX 3060 Ti TUF Gaming OC Edition, 8GB 256-bit GDDR6, PCI Express 4.0</p>
                        <p class="precio">$23,200.00</p>
                    </div>
                    <div class="agregar">
                        <button class="agregar-carrito">
                            Agregar al carrito
                        </button>
                    </div>
                </div>
                <!-- noveno grafica 3070 msi-->
                <div class="producto">
                    <div class="imagen">
                        <img src="../images/msi3070.png" alt="procesador" width="90%">
                    </div>
                    <div class="descripcion">
                        <p class="nombre">Tarjeta de Video MSI NVIDIA GeForce RTX 3070 VENTUS 2X OC, 8GB 256-bit GDDR6, PCI Express 4.0</p>
                        <p class="precio">$31,000.00</p>
                    </div>
                    <div class="agregar">
                        <button class="agregar-carrito">
                            Agregar al carrito
                        </button>
                    </div>
                </div>
                <!-- noveno grafica 3070 asus-->
                <div class="producto">
                    <div class="imagen">
                        <img src="../images/asus3070.png" alt="procesador" width="90%">
                    </div>
                    <div class="descripcion">
                        <p class="nombre">Tarjeta de Video ASUS NVIDIA GeForce RTX 3070 Rog Strix Gaming, 8GB 256-bit GDDR6, PCI Express 4.0</p>
                        <p class="precio">$32,000.00</p>
                    </div>
                    <div class="agregar">
                        <button class="agregar-carrito">
                            Agregar al carrito
                        </button>
                    </div>
                </div>
                <!-- noveno grafica 3080 msi-->
                <div class="producto">
                    <div class="imagen">
                        <img src="../images/msi3080.png" alt="procesador" width="90%">
                    </div>
                    <div class="descripcion">
                        <p class="nombre">Tarjeta de Video MSI NVIDIA GeForce RTX 3080 VENTUS 3X OC, 10GB 320-bit GDDR6X, PCI Express x16 4.0</p>
                        <p class="precio">$28,000.00</p>
                    </div>
                    <div class="agregar">
                        <button class="agregar-carrito">
                            Agregar al carrito
                        </button>
                    </div>
                </div>
                <!-- noveno grafica 3080 asus-->
                <div class="producto">
                    <div class="imagen">
                        <img src="../images/asus3080.png" alt="procesador" width="90%">
                    </div>
                    <div class="descripcion">
                        <p class="nombre">Tarjeta de Video ASUS NVIDIA GeForce TUF RTX 3080 Gaming, 10GB 320-bit GDDR6X, PCI Express 4.0</p>
                        <p class="precio">$40,000.00</p>
                    </div>
                    <div class="agregar">
                        <button class="agregar-carrito">
                            Agregar al carrito
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer class="footer">
        <div class="container">
            <div class="contacto">
                <p>
                    Esto es un trabajo escolar hecho por una empresa 100% mexicana. Los productos, así como los precios son ficticios.
                </p>
            </div>
            <div class="sociales">
                <div class="redes">
                    <a href="https://www.facebook.com/roberto.vizcara" class="social-link facebook" target="_blank"></a>
                    <a href="https://twitter.com/roberto_viz" class="social-link twitter" target="_blank"></a>
                    <a href="https://www.instagram.com/rob_viz/" class="social-link instagram" target="_blank"></a>
                </div>
                <div class="atencion">
                    <h3>Atención a clientes <br> 56 2147 1332</h3>
                </div>
            </div>
        </div>
    </footer>

    <script src="../js/main.js"></script>
</body>
</html>