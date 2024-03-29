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
                <!-- Primer procesador Ryzen 3-->
                <div class="producto" > 
                    <div class="imagen">
                        <img src="../images/ryzen3.png" alt="procesador" width="100%">
                    </div>
                    <div class="descripcion">
                        <p class="nombre">Procesador AMD Ryzen 3 3200G con Gráficos Radeon Vega 8, S-AM4, 3.60GHz, Quad-Core, 4MB L3</p>
                        <p class="precio">$4,000.00</p>
                    </div>
                    <div class="agregar">
                        <button class="agregar-carrito">
                            Agregar al carrito
                        </button>
                    </div>
                </div>
                <!-- Segundo procesador Ryzen 5-->
                <div class="producto">
                    <div class="imagen">
                        <img src="../images/ryzen5.png" alt="procesador" width="100%">
                    </div>
                    <div class="descripcion">
                        <p class="nombre">Procesador AMD RYZEN 5 3500X 3.6ghz Base, 4.1 GHz Max Boost, 6 Núcleos Socket Am4</p>
                        <p class="precio">$4,500.00</p>
                    </div>
                    <div class="agregar">
                        <button class="agregar-carrito">
                            Agregar al carrito
                        </button>
                    </div>
                </div>
                <!-- tercero procesador Ryzen 7-->
                <div class="producto">
                    <div class="imagen">
                        <img src="../images/ryzen7.png" alt="procesador" width="100%">
                    </div>
                    <div class="descripcion">
                        <p class="nombre">Procesador AMD RYZEN 7 3700X 8 Cores 3.6Ghz Socket AM4</p>
                        <p class="precio">$8,300.00</p>
                    </div>
                    <div class="agregar">
                        <button class="agregar-carrito">
                            Agregar al carrito
                        </button>
                    </div>
                </div>
                <!-- cuarto procesador Ryzen 9-->
                <div class="producto">
                    <div class="imagen">
                        <img src="../images/ryzen9.png" alt="procesador" width="100%">
                    </div>
                    <div class="descripcion">
                        <p class="nombre">AMD - Procesador RYZEN 9 5900X, 3.7GHz, 12 Núcleos - Socket AM4</p>
                        <p class="precio">$13,000.00</p>
                    </div>
                    <div class="agregar">
                        <button class="agregar-carrito">
                            Agregar al carrito
                        </button>
                    </div>
                </div>
                <!-- quinto procesador threadripper-->
                <div class="producto">
                    <div class="imagen">
                        <img src="../images/threadripper.png" alt="procesador" width="100%">
                    </div>
                    <div class="descripcion">
                        <p class="nombre">AMD Ryzen Threadripper 3970X 32-Core, procesador de computadora Desbloqueado de 64 Hilos, sin refrigerador, CPU</p>
                        <p class="precio">$50,000.00</p>
                    </div>
                    <div class="agregar">
                        <button class="agregar-carrito">
                            Agregar al carrito
                        </button>
                    </div>
                </div>
                <!-- sexto procesador intel i3-->
                <div class="producto">
                    <div class="imagen">
                        <img src="../images/i3.png" alt="procesador" width="100%">
                    </div>
                    <div class="descripcion">
                        <p class="nombre">Intel BX8070110100F Core i3-10100F / 3,6 GHz / 6 MB LGA1200 4C / 8T</p>
                        <p class="precio">$2,000.00</p>
                    </div>
                    <div class="agregar">
                        <button class="agregar-carrito">
                            Agregar al carrito
                        </button>
                    </div>
                </div>
                <!-- septimo procesador intel i5-->
                <div class="producto">
                    <div class="imagen">
                        <img src="../images/i5.png" alt="procesador" width="100%">
                    </div>
                    <div class="descripcion">
                        <p class="nombre">Intel Procesador Core i5-10400 - S-1200-2.90GHz - Six-Core - 12MB Smart Cache (10ma. Generación - Comet Lake)</p>
                        <p class="precio">$4,700.00</p>
                    </div>
                    <div class="agregar">
                        <button class="agregar-carrito">
                            Agregar al carrito
                        </button>
                    </div>
                </div>
                <!-- octavo procesador intel i7-->
                <div class="producto">
                    <div class="imagen">
                        <img src="../images/i7.png" alt="procesador" width="100%">
                    </div>
                    <div class="descripcion">
                        <p class="nombre">Intel Procesador Core i7-10700 UHD Graphics 630 - S-1200-2.90GHz - Octa-Core - 16MB Caché - 10ma Generación</p>
                        <p class="precio">$8,300.00</p>
                    </div>
                    <div class="agregar">
                        <button class="agregar-carrito">
                            Agregar al carrito
                        </button>
                    </div>
                </div>
                <!-- noveno procesador intel i9-->
                <div class="producto">
                    <div class="imagen">
                        <img src="../images/i9.png" alt="procesador" width="100%">
                    </div>
                    <div class="descripcion">
                        <p class="nombre">Intel Core i9-10900K - Procesador de sobremesa (10 núcleos hasta 5,3 GHz, Desbloqueado LGA1200 (chipset Serie 400) 125 W</p>
                        <p class="precio">$15,000.00</p>
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