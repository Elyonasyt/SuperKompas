<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Super Kompras Valle de Bravo</title>

    
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">

 
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css">

    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            margin: 0;
            background-color: white;
        }

        #linea-azul {
            width: 100%;
            height: 120px;
            background-color: blue;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 0 20px;
        }

        #logo {
            width: 200px;
        }

        h1 {
            font-family: 'Times New Roman', serif;
            color: white;
            margin: 0;
        }

        #search-container {
            display: flex;
            align-items: center;
        }

        #search-bar {
            padding: 5px;
            font-size: 16px;
        }

        #auth-buttons {
            display: flex;
            flex-direction: column;
            align-items: flex-end;
        }

        #auth-buttons button {
            background-color: white;
            color: blue;
            padding: 10px;
            border: none;
            cursor: pointer;
            margin: 5px;
            transition: background-color 0.3s ease;
        }

        #auth-buttons button:hover {
            background-color: #0056b3;
        }

        /* Swiper Container */
        .swiper {
            width: 80%;
            margin: 20px auto;
        }

        .swiper-slide img {
            width: 100%;
            border-radius: 10px;
        }

        .swiper-button-next,
        .swiper-button-prev {
            color: blue;
        }

        .swiper-pagination-bullet {
            background-color: blue;
        }

        #mensaje {
            font-size: 20px;
            font-weight: bold;
        }

        .swiper {
            display: flex;
            justify-content: center;
            align-items: center;
            overflow: hidden;
            width: 100%;
        }

        .swiper-wrapper {
            display: flex;
            justify-content: space-between;
            width: 100%;
        }

        .swiper-slide {
            flex: 0 0 auto;  
            width: 30%;  
            padding: 10px;
            box-sizing: border-box;
        }

        .product-card {
            text-align: center;
            background-color: #fff;
            padding: 10px;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease;
        }

        .product-card:hover {
            transform: scale(1.05);
        }

        .product-img {
            width: 100%;  
            max-width: 120px;  
            height: auto;
            object-fit: contain;
            border-radius: 8px;
        }

        .product-info {
            margin-top: 10px;
        }

        .product-title {
            font-size: 14px;
            font-weight: bold;
        }

        .product-description {
            font-size: 12px;
            color: #666;
        }

        .product-price {
            font-size: 14px;
            color: #333;
            font-weight: bold;
            margin-top: 5px;
        }
        footer {
            background-color: #ffffff;
            padding: 20px 50px;
            font-family: Arial, sans-serif;
        }

        .footer-container {
            display: flex;
            justify-content: space-between;
            flex-wrap: wrap;
        }

        .footer-logo {
            width: 20%;
        }

        .footer-logo img {
            width: 120px;
            margin-bottom: 10px;
        }

        .footer-logo p {
            font-size: 14px;
            color: #333;
        }

        .footer-logo a {
            color: #007bff;
            text-decoration: none;
        }

        .social-icons {
            display: flex;
            gap: 10px;
            margin-top: 10px;
        }

        .social-icons img {
            width: 30px;
        }

        .footer-section {
            width: 15%;
        }

        .footer-section h4 {
            font-size: 16px;
            margin-bottom: 10px;
            color: #000;
        }

        .footer-section ul {
            list-style: none;
            padding: 0;
        }

        .footer-section ul li {
            font-size: 14px;
            color: #666;
            margin-bottom: 5px;
        }

        .contact-info {
            text-align: center;
        }

        .contact-info img {
            width: 40px;
            display: block;
            margin: auto;
        }

        .contact-info p {
            font-size: 16px;
            font-weight: bold;
            margin-top: 5px;
        }

        .payment-section {
            display: flex;
            align-items: center;
            gap: 10px;
            justify-content: center;
            margin-top: 20px;
        }

        .payment-section img {
            width: 50px;
        }

        .footer-bottom {
            text-align: center;
            font-size: 12px;
            color: #666;
            margin-top: 20px;
        }
        #auth-buttons {
            text-align: center;
            margin-top: 20px;
        }

                #auth-buttons {
            text-align: center;
            margin-top: 20px;
        }

        .btn {
            font-size: 16px;
            font-weight: bold;
            padding: 12px 24px;
            margin: 10px;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            transition: all 0.3s ease;
            text-transform: uppercase;
            box-shadow: 3px 3px 8px rgba(0, 0, 0, 0.2);
        }

        .register-btn {
            background: linear-gradient(45deg, #ff69b4, #ff1493); /* Rosa degradado */
            color: white;
        }

        .register-btn:hover {
            background: linear-gradient(45deg, #ff1493, #ff69b4);
            transform: scale(1.08);
            box-shadow: 0 4px 10px rgba(255, 20, 147, 0.4);
        }

        .login-btn {
            background: linear-gradient(45deg, #ff85a2, #ff4081); /* Rosa más fuerte */
            color: white;
        }

        .login-btn:hover {
            background: linear-gradient(45deg, #ff4081, #ff85a2);
            transform: scale(1.08);
            box-shadow: 0 4px 10px rgba(255, 64, 129, 0.4);
        }
        #search-container {
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            padding: 10px 20px;
            width: 80%;
            max-width: 600px;
        }

        #search-bar {
            width: 80%;
            padding: 12px;
            font-size: 16px;
            border: 1px solid #ccc;
            border-radius: 25px;
            outline: none;
            transition: all 0.3s ease;
        }

        #search-bar:focus {
            border-color: #3498db;
        }

        #search-button {
            padding: 12px 20px;
            font-size: 16px;
            background-color: #3498db;
            color: white;
            border: none;
            border-radius: 25px;
            margin-left: 10px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        #search-button:hover {
            background-color: #2980b9;
        }

        #search-button:active {
            background-color: #1abc9c;
        }

    </style>
    </head>
    <body>
        <div id="linea-azul">
            <div id="logo-container">
                <img id="logo" src="https://validaciontarjetaclub.superkompras.com.mx/img/logo-SK.705a03b0.png" alt="Logo de Super Kompras">
            </div>
            <h1>Super Kompras</h1>
            <div id="search-container">
                <input type="text" id="search-bar" placeholder="Buscar productos...">
            </div>
                   <div id="auth-buttons">
            <button class="btn register-btn" onclick="window.location.href='registro'">Registrarse</button>
            <button class="btn cesion-btn" onclick="window.location.href='cesion'">Iniciar sesión</button>
        </div>

        </div>
        <div class="swiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <img src="https://firebasestorage.googleapis.com/v0/b/super-kompras.appspot.com/o/media%2Fproj_tCJWQHSHNf7WoMu7r64pUJ%2Fapp_wNrtPZCZWGaffe28L5i87a%2FdataApplications%2FdymcDfnmqwAKRaLVJA2kgy?alt=media&token=0333432d-85db-4fb8-8283-00a05938e355" alt="Promoción 1">
                </div>
                <div class="swiper-slide">
                    <img src="https://firebasestorage.googleapis.com/v0/b/super-kompras.appspot.com/o/media%2Fproj_tCJWQHSHNf7WoMu7r64pUJ%2Fapp_wNrtPZCZWGaffe28L5i87a%2FdataApplications%2FvniEa1iGLpZbGzEvbyCar5?alt=media&token=638d976e-8bbe-449c-9523-b508f3fe1d68" alt="Promoción 2">
                </div>
                <div class="swiper-slide">
                    <img src="https://firebasestorage.googleapis.com/v0/b/super-kompras.appspot.com/o/media%2Fproj_tCJWQHSHNf7WoMu7r64pUJ%2Fapp_wNrtPZCZWGaffe28L5i87a%2FdataApplications%2F9t9zh97TZqfNkeYjt6jq8u?alt=media&token=e7b79d63-86f0-4039-b5b6-f53e205ce343" alt="Promoción 3">
                </div>
            </div>

            
            <div class="swiper-pagination"></div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>

            <div class="swiper">
            <div class="swiper-wrapper">
                <!-- Producto 1 -->
                <div class="swiper-slide">
                    <div class="product-card">
                        <img src="https://firebasestorage.googleapis.com/v0/b/super-kompras.appspot.com/o/10101_desayuno.png?alt=media&token=appsk" alt="Producto 1" class="product-img">
                        <div class="product-info">
                            <h3 class="product-title">Producto 1</h3>
                            <p class="product-description">Descripción corta del producto 1.</p>
                            <p class="product-price">$100</p>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="product-card">
                        <img src="https://firebasestorage.googleapis.com/v0/b/super-kompras.appspot.com/o/10102_aceites.png?alt=media&token=appsk" alt="Producto 2" class="product-img">
                        <div class="product-info">
                            <h3 class="product-title">Producto 2</h3>
                            <p class="product-description">Descripción corta del producto 2.</p>
                            <p class="product-price">$200</p>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="product-card">
                        <img src="https://firebasestorage.googleapis.com/v0/b/super-kompras.appspot.com/o/10103_conservas.png?alt=media&token=appsk" alt="Producto 3" class="product-img">
                        <div class="product-info">
                            <h3 class="product-title">Producto 3</h3>
                            <p class="product-description">Descripción corta del producto 3.</p>
                            <p class="product-price">$300</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="swiper-pagination"></div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>
            </div>
            <div class="swiper-pagination"></div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>
        
            <footer>
        <div class="footer-container">
            <div class="footer-logo">
                <img src="logo.png" alt="Super Kompras">
                <p><strong>Teléfono:</strong> +52 722 300 8035</p>
                <p><strong>Dirección:</strong> Paseo Tollocan 312 Oriente, Colonia Valle Verde, C.P. 50140 en Toluca, México</p>
                <p><strong>Página:</strong> <a href="https://www.superkompras.com.mx/" target="_blank">www.superkompras.com.mx</a></p>
                <div class="social-icons">
                    <a href="#"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTCaF0VkuO7Ini46mFPrESsCP4yeM5WYCqI5Acy9IP0__gz-jDbVOCgGsEh6CVJ_uDAQGI&usqp=CAU" alt="Facebook"></a>
                    <a href="#"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR5HG6wIaCiZ_gMBn2U9DeouQqaoX_wiVJO6g&s" alt="Instagram"></a>
                </div>
            </div>

            <div class="footer-section">
                <h4>Acerca de Nosotros</h4>
                <ul>
                    <li>Inicio</li>
                    <li>Departamentos</li>
                    <li>Acerca de Nosotros</li>
                    <li>Corporativo</li>
                </ul>
            </div>

            <div class="footer-section">
                <h4>Menú</h4>
                <ul>
                    <li>Abarrotes para el Desayuno</li>
                    <li>Aceites Semillas Y Sopas</li>
                    <li>Conservas</li>
                    <li>Dulces Galletas Y Botanas</li>
                    <li>Bebidas</li>
                </ul>
            </div>

            <div class="footer-section">
                <h4>Ayuda</h4>
                <ul>
                    <li>Pedidos</li>
                    <li>Cuenta</li>
                    <li>Lista de preferidos</li>
                    <li>Facturación Electrónica</li>
                    <li>Bolsa de Trabajo</li>
                    <li>Aviso de privacidad</li>
                    <li>Club Super Kompras</li>
                    <li>Tramita tu Tarjeta</li>
                    <li>Consulta de Monedero Electrónico</li>
                    <li>Portal de Proveedores</li>
                </ul>
            </div>

            <div class="footer-section contact-info">
                <h4>Información y dudas</h4>
                <div class="contact">
                    <img src="headset-icon.png" alt="Soporte">
                    <p><strong>+52 722 300 8035</strong></p>
                </div>
            </div>
        </div>

             <div class="payment-icons">
                    <h4>Aceptamos:</h4>
                    <img src="https://www.superkompras.com.mx/images/payment-icon/1.jpg" alt="Payment Icon 1">
                    <img src="https://www.superkompras.com.mx/images/payment-icon/2.jpg" alt="Payment Icon 2">
                    <img src="https://www.superkompras.com.mx/images/payment-icon/5.jpg" alt="Payment Icon 3">
                </div>

        <div class="footer-bottom">
            <p>© 2025 Copyright. Todos los derechos reservados Super Kompras.</p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
    <script>
        const swiper = new Swiper('.swiper', {
            loop: true,
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
        });

        document.getElementById('search-bar').addEventListener('input', function(event) {
            let query = event.target.value;
            console.log("Buscando: " + query);
        });
    </script>
</body>
</html>
