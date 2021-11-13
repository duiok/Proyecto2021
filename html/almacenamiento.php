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
                                    <a class=link href="php/dir.php">Dirección</a>
                                </li>
                            <?php
                            }
                            ?>
                        </ol>
                    </nav>
                </div>
            </div>
            <div class="other_products">
                <!-- Primer disco duro yeyian-->
                <div class="producto"> 
                    <div class="imagen">
                        <img src="../images/DISCO DURO SOLIDO YEYIAN SSD 250GB SATA III.png" alt="Discoduro" width="100%">
                    </div>
                    <div class="descripcion">
                        <p class="nombre">SSD Yeyian Valk 4000, 250GB, SATA III, M.2</p>
                        <p class="precio">$800.00</p>
                    </div>
                    <div class="agregar">
                        <button class="agregar-carrito">
                            Agregar al carrito
                        </button>
                    </div>
                </div>
                <!-- Segundo disco duro solido-->
                <div class="producto">
                    <div class="imagen">
                        <img src="../images/DISCO DURO SOLIDO YEYIAN SSD 500GB SATA III.png" alt="Discoduro" width="100%">
                    </div>
                    <div class="descripcion">
                        <p class="nombre">SSD Yeyian Valk 3200, 500GB, SATA III, 2.5</p>
                        <p class="precio">$1,200.00</p>
                    </div>
                    <div class="agregar">
                        <button class="agregar-carrito">
                            Agregar al carrito
                        </button>
                    </div>
                </div>
                <!-- tercera disco duro solido-->
                <div class="producto">
                    <div class="imagen" style="margin-left: 16px; margin-top: 12px;">
                        <img src="../images/DISCO DURO SOLIDO KINGSTON SSD 240GB SATA III.png" alt="Discoduro" width="90%">
                    </div>
                    <div class="descripcion">
                        <p class="nombre">Kingston SSD A400 240GB SATA 3 (6Gb/s) 2.5" Lectura: 500MB/s y Escritura: 350MB/s (SA400S37/240G)</p>
                        <p class="precio">$1,000.00</p>
                    </div>
                    <div class="agregar">
                        <button class="agregar-carrito">
                            Agregar al carrito
                        </button>
                    </div>
                </div>
                <!-- cuarto disco duro solido-->
                <div class="producto">
                    <div class="imagen" style="margin-left: 16px; margin-top: 12px;">
                        <img src="../images/DISCO DURO SOLIDO KINGSTON SSD 480GB SATA III.png" alt="Discoduro" width="90%">
                    </div>
                    <div class="descripcion">
                        <p class="nombre">Kingston SSD A400 480GB M.2 SATA 2280 Lectura: 500MB/s y Escritura: 450MB/s (SA400M8/480G)</p>
                        <p class="precio">$1,400.00</p>
                    </div>
                    <div class="agregar">
                        <button class="agregar-carrito">
                            Agregar al carrito
                        </button>
                    </div>
                </div>
                <!-- quinto disco duro solido-->
                <div class="producto">
                    <div class="imagen" style="margin-left: 16px; margin-top: 12px;">
                        <img src="../images/DISCO DURO SOLIDO KINGSTON SSD 960GB SATA III.png" alt="Discoduro" width="90%">
                    </div>
                    <div class="descripcion">
                        <p class="nombre">Kingston SSD A400 960GB SATA 3 (6Gb/s) 2.5" Lectura: 500MB/s y Escritura: 450MB/s (SA400S37/960G)</p>
                        <p class="precio">$2,200.00</p>
                    </div>
                    <div class="agregar">
                        <button class="agregar-carrito">
                            Agregar al carrito
                        </button>
                    </div>
                </div>
                <!-- sexto disco duro solido-->
                <div class="producto">
                    <div class="imagen" style="margin-left: 16px; margin-top: 12px;">
                        <img src="../images/DISCO DURO SOLIDO WESTERN DIGITAL SSD 250GB SATA III.png" alt="Discoduro" width="100%">
                    </div>
                    <div class="descripcion">
                        <p class="nombre">WD Blue 3D NAND SSD 250GB</p>
                        <p class="precio">$1,000.00</p>
                    </div>
                    <div class="agregar">
                        <button class="agregar-carrito">
                            Agregar al carrito
                        </button>
                    </div>
                </div>
                <!-- septimo disco duro solido-->
                <div class="producto">
                    <div class="imagen" style="margin-left: 16px; margin-top: 12px;">
                        <img src="../images/DISCO DURO SOLIDO WESTERN DIGITAL SSD 500GB SATA III.png" alt="Discoduro" width="100%">
                    </div>
                    <div class="descripcion">
                        <p class="nombre">WD Blue 3D NAND SSD 500GB</p>
                        <p class="precio">$2,000.00</p>
                    </div>
                    <div class="agregar">
                        <button class="agregar-carrito">
                            Agregar al carrito
                        </button>
                    </div>
                </div>
                <!-- octavo disco duro solido-->
                <div class="producto">
                    <div class="imagen" style="margin-left: 16px; margin-top: 12px;">
                        <img src="../images/DISCO DURO SOLIDO WESTERN DIGITAL SSD 1TB SATA III.png" alt="Discoduro" width="100%">
                    </div>
                    <div class="descripcion">
                        <p class="nombre">WD Blue SSD M.2 1TB</p>
                        <p class="precio">$3,300.00</p>
                    </div>
                    <div class="agregar">
                        <button class="agregar-carrito">
                            Agregar al carrito
                        </button>
                    </div>
                </div>
                <!-- noveno disco duro solido-->
                <div class="producto">
                    <div class="imagen" style="margin-left: 15px;">
                        <img src="../images/DISCO DURO SOLIDO ADATA SSD 500GB SATA III.png" alt="Discoduro" width="100%">
                    </div>
                    <div class="descripcion">
                        <p class="nombre">ADATA- Disco de Estado sólido Falcon 3D NAND PCIe Gen3x4 NVMe M.2 2280 Velocidad de Lectura/1500 MB/s SSD Interno</p>
                        <p class="precio">$1,800.00</p>
                    </div>
                    <div class="agregar">
                        <button class="agregar-carrito">
                            Agregar al carrito
                        </button>
                    </div>
                </div>
                <!-- decimo disco duro solido-->
                <div class="producto">
                    <div class="imagen" style="margin-left: 15px;">
                        <img src="../images/DISCO DURO SOLIDO ADATA SSD 1TB SATA III.png" alt="Discoduro" width="100%">
                    </div>
                    <div class="descripcion">
                        <p class="nombre">Unidad de Estado Solido ADATA SSD SU800 1T 3D NAND, 2.5",TLC, 560 MB/s de lectura y 520 MB/s de escritura</p>
                        <p class="precio">$2,500.00</p>
                    </div>
                    <div class="agregar">
                        <button class="agregar-carrito">
                            Agregar al carrito
                        </button>
                    </div>
                </div>
                <!-- onceavo disco duro-->
                <div class="producto">
                    <div class="imagen" style="margin-left: 16px; margin-top: 12px;">
                        <img src="../images/DISCO DURO INTERNO SEAGATE 500GB SATA III.png" alt="Discoduro" width="90%">
                    </div>
                    <div class="descripcion">
                        <p class="nombre">Seagate ST500DM002 500GB 7200RPM SATA3/SATA 6.0 GB/s 16MB Hard Drive (3.5 inch)</p>
                        <p class="precio">$800.00</p>
                    </div>
                    <div class="agregar">
                        <button class="agregar-carrito">
                            Agregar al carrito
                        </button>
                    </div>
                </div>
                <!-- doceavo disco duro solido-->
                <div class="producto">
                    <div class="imagen" style="margin-left: 16px; margin-top: 10px;">
                        <img src="../images/DISCO DURO INTERNO SEAGATE BARRACUDA 1TB SATA III.png" alt="Discoduro" width="100%">
                    </div>
                    <div class="descripcion">
                        <p class="nombre">Seagate Barracuda ST500LMZ30 - Disco Duro Interno (SATA, 6 GB/s, 128 MB, caché de 2,5", 7 mm), 1 TB</p>
                        <p class="precio">$1,200.00</p>
                    </div>
                    <div class="agregar">
                        <button class="agregar-carrito">
                            Agregar al carrito
                        </button>
                    </div>
                </div>
                <!-- terceveao disco duro solido-->
                <div class="producto" >
                    <div class="imagen" style="margin-left: 16px; margin-top: 12px;">
                        <img src="../images/DISCO DURO INTERNO SEAGATE BARRACUDA 2TB SATA III.png" alt="Discoduro" width="100%">
                    </div>
                    <div class="descripcion">
                        <p class="nombre">Seagate BarraCuda Internal Hard Drive 2TB SATA 6Gb/s 128MB Cache 2.5-Inch 7mm</p>
                        <p class="precio">$4,300.00</p>
                    </div>
                    <div class="agregar">
                        <button class="agregar-carrito">
                            Agregar al carrito
                        </button>
                    </div>
                </div>
                <!-- cuartoavo disco duro solido-->
                <div class="producto">
                    <div class="imagen" style="margin-left: 16px; margin-top: 12px;">
                        <img src="../images/DISCO DURO TOSHIBA 500GB.png" alt="Discoduro" width="100%">
                    </div>
                    <div class="descripcion">
                        <p class="nombre">500GB Toshiba 2.5 pulgadas laptop disco duro SATA (5400 rpm, memoria caché 8MB)</p>
                        <p class="precio">$600.00</p>
                    </div>
                    <div class="agregar">
                        <button class="agregar-carrito">
                            Agregar al carrito
                        </button>
                    </div>
                </div>
                <!-- quinteavo disco duro solido-->
                <div class="producto">
                    <div class="imagen" style="margin-left: 16px; margin-top: 12px;">
                        <img src="../images/DISCO DURO INTERNO TOSHIBA 1TB.png" alt="Discoduro" width="100%">
                    </div>
                    <div class="descripcion">
                        <p class="nombre">Disco duro Toshiba desk 3.5 1 tb sata3 6gb/s 64mb 7200rpm p/pc/bulk</p>
                        <p class="precio">$1,000.00</p>
                    </div>
                    <div class="agregar">
                        <button class="agregar-carrito">
                            Agregar al carrito
                        </button>
                    </div>
                </div>
                <!-- sexteavo disco duro solido-->
                <div class="producto">
                    <div class="imagen" style="margin-left: 16px; margin-top: 5px;">
                        <img src="../images/DISCO DURO INTERNO TOSHIBA 2TB.png" alt="Discoduro" width="100%">
                    </div>
                    <div class="descripcion">
                        <p class="nombre">Disco duro Toshiba desk 3.5 2tb sata3 6gb/s 64mb 7200rpm p/pc/bulk</p>
                        <p class="precio">$1,800.00</p>
                    </div>
                    <div class="agregar">
                        <button class="agregar-carrito">
                            Agregar al carrito
                        </button>
                    </div>
                </div>
                <!-- diecisieteavo disco duro solido-->
                <div class="producto">
                    <div class="imagen" style="margin-left: 16px; margin-top: 12px;">
                        <img src="../images/DISCO DURO INTERNO WESTERN 500GB SATA III.png" alt="Discoduro" width="100%">
                    </div>
                    <div class="descripcion">
                        <p class="nombre">Western Digital WD5000AZLX Disco Duro de 500GB para PC de Computo Básico, Sata 3, 6 GB/s, 32 MB, 3.5", Blue</p>
                        <p class="precio">$1,200.00</p>
                    </div>
                    <div class="agregar">
                        <button class="agregar-carrito">
                            Agregar al carrito
                        </button>
                    </div>
                </div>
                <!-- decimoctavo no se los numeros la neta disco duro solido-->
                <div class="producto">
                    <div class="imagen" style="margin-left: 16px; margin-top: 12px;">
                        <img src="../images/DISCO DURO INTERNO WESTERN 1TB SATA III.png" alt="procesador" width="100%">
                    </div>
                    <div class="descripcion">
                        <p class="nombre">Western Digital Caviar Blue 1TB 3.5" 7200rpm SATA 6Gb/s 64MB -(Serial ATA III, 1000 GB, 1.2 Watts, 6.8 Watts, 6.8 Watts)</p>
                        <p class="precio">$1,800.00</p>
                    </div>
                    <div class="agregar">
                        <button class="agregar-carrito">
                            Agregar al carrito
                        </button>
                    </div>
                </div>
                <!--Primer procesador Ryzen 3
                <div class="producto"> 
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
                Segundo procesador Ryzen 5
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
                tercero procesador Ryzen 7
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
                <cuarto procesador Ryzen 9
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
                <quinto procesador threadripper
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
                sexto procesador intel i3
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
                septimo procesador intel i5
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
                <octavo procesador intel i
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
                noveno procesador intel i9
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
                -->
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