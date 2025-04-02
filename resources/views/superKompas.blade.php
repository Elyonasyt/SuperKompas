<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Super Kompras  Registro de Productos</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background: #181818;
            color: #fff;
        }
        header {
            background-color: #1a1a1a;
            color: #00f9ff;
            padding: 20px;
            text-align: center;
            border-bottom: 2px solid #00f9ff;
        }
        header h1 {
            font-size: 2.5em;
            text-transform: uppercase;
        }
        header button {
            background-color: #333;
            border: none;
            color: #00f9ff;
            padding: 10px 20px;
            margin: 10px;
            font-size: 1.2em;
            cursor: pointer;
        }
        header button:hover {
            background-color: #00f9ff;
            color: #181818;
        }
        .container {
            padding: 20px;
        }
        .form-container {
            background: #222;
            padding: 20px;
            margin: 20px 0;
            border-radius: 5px;
            text-align: center;
        }
        input[type="text"], input[type="number"], select {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            background-color: #333;
            color: #fff;
            border: none;
            border-radius: 5px;
        }
        button {
            background-color: #00f9ff;
            color: #181818;
            padding: 10px 20px;
            border: none;
            cursor: pointer;
            font-size: 1.2em;
            border-radius: 5px;
        }
        button:hover {
            background-color: #181818;
            color: #00f9ff;
        }
        canvas {
            display: block;
            margin: 20px auto;
            max-width: 100%;
        }
        footer {
            text-align: center;
            padding: 20px;
            background: #1a1a1a;
            color: #00f9ff;
            font-size: 1em;
            margin-top: 30px;
            border-top: 2px solid #00f9ff;
        }
    </style>
</head>
<body>
    <header>
        <h1>Super Kompras</h1>
        <button onclick="window.location.href='index.html'">Ir al Inicio</button>
        <button class="btn register-btn" onclick="window.location.href='registro'">Registrarse</button>
        <button class="btn cesion-btn" onclick="window.location.href='cesion'">Iniciar sesión</button>
        <button class="btn registos-btn" onclick="window.location.href='registos'">Registros</button>

    </header>

    <div class="container">
        <div class="form-container">
            <h2>Registrar Producto</h2>
            <!-- Selector de tipo de producto -->
            <select id="tipoProducto">
                <option value="">Selecciona un tipo de producto</option>
                <option value="Electrónica">Electrónica</option>
                <option value="Ropa">Ropa</option>
                <option value="Alimentos">Alimentos</option>
                <option value="Hogar">Hogar</option>
            </select>
            <input type="text" id="producto" placeholder="Nombre del Producto" />
            <input type="number" id="precio" placeholder="Precio" />
            <input type="number" id="cantidad" placeholder="Cantidad" />
            <button onclick="registrarProducto()">Registrar Producto</button>
        </div>

        <div class="form-container">
            <h2>Gráfica de Productos Registrados</h2>
            <canvas id="productosChart" width="400" height="200"></canvas>
        </div>
    </div>

    <footer>
        &copy; 2025 Super Kompras - Todos los derechos reservados.
    </footer>

    <script>
        // Cargar productos desde el localStorage al inicio
        let productos = JSON.parse(localStorage.getItem("productos")) || [];

        function registrarProducto() {
            let tipoProducto = document.getElementById("tipoProducto").value;
            let producto = document.getElementById("producto").value;
            let precio = parseFloat(document.getElementById("precio").value);
            let cantidad = parseInt(document.getElementById("cantidad").value);

            if (tipoProducto && producto && !isNaN(precio) && !isNaN(cantidad) && cantidad > 0 && precio > 0) {
                // Agregar el producto al arreglo
                productos.push({ tipoProducto, producto, precio, cantidad });

                // Guardar los productos en localStorage
                localStorage.setItem("productos", JSON.stringify(productos));

                actualizarGrafica();
                alert("Producto registrado exitosamente");

                // Limpiar los campos del formulario
                document.getElementById("producto").value = '';
                document.getElementById("precio").value = '';
                document.getElementById("cantidad").value = '';
                document.getElementById("tipoProducto").value = '';
            } else {
                alert("Por favor, ingresa todos los datos correctamente.");
            }
        }

        function actualizarGrafica() {
            let ctx = document.getElementById("productosChart").getContext("2d");

            // Obtenemos los nombres de los productos y sus cantidades
            let productosNombres = productos.map(p => `${p.producto} (${p.tipoProducto})`);
            let cantidades = productos.map(p => p.cantidad);

            // Si la gráfica ya existe, destrúyela
            if (window.productosChart) {
                window.productosChart.destroy();
            }

            // Crear nueva gráfica
            window.productosChart = new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: productosNombres,
                    datasets: [{
                        label: 'Cantidad de productos registrados',
                        data: cantidades,
                        backgroundColor: 'rgba(54, 162, 235, 0.6)',
                        borderColor: 'rgba(54, 162, 235, 1)',
                        borderWidth: 1
                    }]
                },
                options: {
                    scales: {
                        y: {
                            beginAtZero: true
                        }
                    },
                    responsive: true,
                    maintainAspectRatio: false
                }
            });
        }

        // Cargar la gráfica al cargar la página
        window.onload = function() {
            actualizarGrafica();
        };
    </script>
</body>
</html>
