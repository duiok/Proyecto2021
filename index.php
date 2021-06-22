<!DOCTYPE html>
<html lang="es">
<head>
    <link rel="icon" type="image/jpg" href="images/logo_superior.jpg">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro&display=swap" rel="stylesheet">
    <title>MACWARE</title>
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="fonts/style.css">
</head>
<body>
    <i class="icon-menu bur-button" id="burger-menu"></i>
    <header class="header" style="justify-content: space-between;">
        <div class="container">
            <div class="logo">
                <a href="index.php" class="return">
                    <img src="images/logo_superior.jpg" alt="logo macware" width="100px" height="100px">
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
                                <a href="php/sesion.php" class="entrar_cuenta">
                                    <h2>Cuenta</h2>
                                    <span class="icon-user"></span>
                                </a>
                            
                            <?php
                            }else{
                                $_SESSION['usuario'] = false;
                            ?>
                                <a href="php/cerrar_sesion.php" class="entrar_cuenta">
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
                                <a class="link" href="index.php">Inicio</a>
                            </li>
                            <li>
                                <a class="link" href="html/procesadores.php">Procesadores</a>
                            </li>
                            <li>
                                <a class="link" href="html/graficas.php">Gráficas</a>
                            </li>
                            <li>
                                <a class="link" href="html/tarjetamadre.php">Tarjeta madre</a>
                            </li>
                            <li>
                                <a class="link" href="html/almacenamiento.php">Almacenamiento</a>
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
            <div class="productos">
                <div class="ofertas">
                    <div class="container-slider">
                        <div class="slider" id="slider">
                            <div class="slider_section">
                                <img src="images/1.png" alt="" class="slider_img" width="100%">
                            </div>
                            <div class="slider_section">
                                <img src="images/2.png" alt="" class="slider_img" width="100%">
                            </div>
                            <div class="slider_section">
                                <img src="images/3.png" alt="" class="slider_img" width="100%">
                            </div>
                        </div>
                        <div class="slider_btn slider_btn-left" id="btn-left">
                            &#60;
                        </div>
                        <div class="slider_btn slider_btn-rigth" id="btn-right">
                            &#62;
                        </div>

                    </div>
                </div>

                <div class="other-products">
                    <div class="ofertas_diarias">
                        <div class="ofertas_img">
                            <img src="images/dde.png" alt="discoDuro" width="90%" height="90%">
                        </div>
                        <div class="desc">
                            <h2>Articulo patrocinado</h2>
                        </div>
                    </div>
                    <div class="ofertas_diarias">
                        <div class="ofertas_img">
                            <img src="images/grafica.png" alt="discoDuro" width="90%" height="90%">
                        </div>
                        <div class="desc">
                            
                        </div>
                    </div>
                    <div class="ofertas_diarias">
                        <div class="ofertas_img">
                            <img src="images/mother.png" alt="discoDuro" width="90%" height="90%">
                        </div>
                        <div class="desc">

                        </div>
                    </div>
                    <div class="ofertas_diarias">
                        <div class="ofertas_img">
                            <img src="images/procesador.png" alt="discoDuro" width="90%" height="90%">
                        </div>
                        <div class="desc">

                        </div>
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
    <script src="js/main.js"></script>
    <script src="js/slider.js"></script>
</body>
</html>