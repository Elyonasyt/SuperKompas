<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Super Kompras  Dashboard</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
        }

        body {
            display: flex;
            background-color: #181818;
            color: #fff;
        }

        .sidebar {
            width: 250px;
            background-color: #1a1a1a;
            padding: 20px;
            height: 100vh;
        }

        .profile img {
            width: 80px;
            border-radius: 50%;
            margin-bottom: 10px;
        }

        .profile h2 {
            color: #00f9ff;
            margin-bottom: 20px;
        }

        .profile .buttons {
            display: flex;
            flex-direction: column;
            gap: 10px;
        }

        .profile .buttons button {
            background-color: #00f9ff;
            color: #181818;
            padding: 10px;
            border: none;
            cursor: pointer;
            border-radius: 5px;
            width: 100%;
        }

        .profile .buttons button:hover {
            background-color: #1e2a4f;
        }

        nav a {
            display: block;
            padding: 10px;
            color: #00f9ff;
            text-decoration: none;
            margin-bottom: 5px;
            border-radius: 5px;
        }

        nav a.active,
        nav a:hover {
            background-color: #00f9ff;
            color: #181818;
        }

        .sign-out {
            background-color: #e74c3c;
            color: #fff;
            padding: 10px;
            border: none;
            cursor: pointer;
            border-radius: 5px;
            margin-top: 20px;
            width: 100%;
        }

        .main-content {
            flex-grow: 1;
            padding: 20px;
        }

        header {
            display: flex;
            justify-content: space-between;
            margin-bottom: 20px;
            background-color: #222;
            padding: 10px;
            border-radius: 5px;
        }

        .search input {
            padding: 8px;
            background-color: #333;
            color: #fff;
            border: none;
            border-radius: 5px;
        }

        .search button {
            padding: 8px;
            background-color: #00f9ff;
            color: #181818;
            border: none;
            cursor: pointer;
            border-radius: 5px;
        }

        .date {
            color: #00f9ff;
        }

        .cards {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 20px;
            margin-bottom: 20px;
        }

        .card {
            background-color: #222;
            padding: 20px;
            border-radius: 5px;
            text-align: center;
        }

        .form-container {
            background: #222;
            padding: 20px;
            margin-top: 20px;
            border-radius: 5px;
        }

        input,
        select,
        button {
            width: 100%;
            padding: 10px;
            margin-top: 10px;
            background-color: #333;
            color: #fff;
            border: none;
            border-radius: 5px;
        }

        button:hover {
            background-color: #00f9ff;
            color: #181818;
        }

        table {
            width: 100%;
            margin-top: 20px;
            border-collapse: collapse;
        }

        th,
        td {
            padding: 12px;
            border-bottom: 1px solid #333;
            text-align: center;
        }

        th {
            background-color: #333;
            color: #00f9ff;
        }

        footer {
            text-align: center;
            padding: 20px;
            background: #1a1a1a;
            color: #00f9ff;
            margin-top: 30px;
            border-top: 2px solid #00f9ff;
        }

        .chart-container {
            display: flex;
            justify-content: space-between;
            gap: 20px;
        }

        .chart-box {
            width: 45%;
            background-color: #222;
            padding: 20px;
            border-radius: 5px;
            text-align: center;
        }
    </style>
</head>

<body>

    <div class="sidebar">
        <div class="profile">
            <img src="profile.png" alt="Profile">
            <h2>USERNAME</h2>
            <div class="buttons">
               <button class="btn register-btn" onclick="window.location.href='registro'">Registrarse</button>
                <button class="btn cesion-btn" onclick="window.location.href='cesion'">Iniciar sesión</button>
            </div>
        </div>
        <nav>
            <a href="#" class="active">Dashboard</a>
            <a href="#">Chart</a>
            <a href="#">Apps</a>
            <a href="#">Form</a>
            <a href="#">Email</a>
            <a href="#">Settings</a>
        </nav>
        <button class="sign-out">Sign Out</button>
    </div>

    <div class="main-content">
        <header>
            <div class="search">
                <input type="text" placeholder="Buscar..." />
                <button>🔍</button>
            </div>
            <div class="date">13:00 - Viernes, 17 de Septiembre</div>
        </header>

        <div class="cards">
            <div class="card">
                <h3>$1,021</h3>
                <p>Ventas Totales</p>
            </div>
            <div class="card">
                <h3>87.3%</h3>
                <p>Tasa de Conversión</p>
            </div>
            <div class="card">
                <h3>64.5%</h3>
                <p>Productos en Stock</p>
            </div>
        </div>

        <div class="chart-container">
            <div class="chart-box">
                <h3>Ventas Totales</h3>
                <canvas id="ventasChart" width="300" height="150"></canvas>
            </div>
            <div class="chart-box">
                <h3>Productos Registrados</h3>
                <canvas id="productosChart" width="300" height="150"></canvas>
            </div>
        </div>

        <div class="form-container">
            <h2>Registrar Producto</h2>
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
            <h2>Productos Registrados</h2>
            <table id="productosTable">
                <thead>
                    <tr>
                        <th>Tipo de Producto</th>
                        <th>Producto</th>
                        <th>Precio</th>
                        <th>Cantidad</th>
                    </tr>
                </thead>
                <tbody></tbody>
            </table>
        </div>
    </div>

    <footer>
        &copy; 2025 Super Kompras - Todos los derechos reservados.
    </footer>

    <script>
        // Datos falsos para Ventas Totales
        const ventasTotalesDatos = {
            labels: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'],
            datasets: [{
                label: 'Ventas Totales ($)',
                data: [1200, 1300, 1400, 1500, 1600, 1700, 1800, 1900, 2000, 2100, 2200, 2300], // Datos de ventas
                borderColor: '#00f9ff',
                backgroundColor: 'rgba(0, 249, 255, 0.2)',
                borderWidth: 2,
                fill: true
            }]
        };

        const ctxVentas = document.getElementById('ventasChart').getContext('2d');
        const ventasChart = new Chart(ctxVentas, {
            type: 'line',
            data: ventasTotalesDatos,
            options: {
                responsive: true,
                plugins: {
                    title: {
                        display: true,
                        text: 'Gráfico de Ventas Totales',
                        color: '#00f9ff'
                    }
                },
                scales: {
                    y: {
                        beginAtZero: true,
                        ticks: {
                            color: '#fff'
                        }
                    },
                    x: {
                        ticks: {
                            color: '#fff'
                        }
                    }
                }
            }
        });

        let productos = []; // Arreglo para almacenar los productos registrados

        function registrarProducto() {
            const producto = document.getElementById("producto").value;
            const tipo = document.getElementById("tipoProducto").value;
            const precio = parseFloat(document.getElementById("precio").value);
            const cantidad = parseInt(document.getElementById("cantidad").value);

            if (producto && tipo && !isNaN(precio) && !isNaN(cantidad)) {
                productos.push({ producto, tipo, precio, cantidad });
                actualizarTabla();
                actualizarGrafico();
            } else {
                alert("Por favor, complete todos los campos correctamente.");
            }
        }

        function actualizarTabla() {
            const tbody = document.querySelector("#productosTable tbody");
            tbody.innerHTML = "";
            productos.forEach(producto => {
                const row = document.createElement("tr");
                row.innerHTML = `<td>${producto.tipo}</td><td>${producto.producto}</td><td>${producto.precio}</td><td>${producto.cantidad}</td>`;
                tbody.appendChild(row);
            });
        }

        function generarColorAleatorio() {
            const letras = '0123456789ABCDEF';
            let color = '#';
            for (let i = 0; i < 6; i++) {
                color += letras[Math.floor(Math.random() * 16)];
            }
            return color;
        }

        function actualizarGrafico() {
            const tipos = [...new Set(productos.map(p => p.tipo))];
            const cantidadPorTipo = tipos.reduce((acc, tipo) => {
                acc[tipo] = productos.filter(p => p.tipo === tipo).reduce((sum, p) => sum + p.cantidad, 0);
                return acc;
            }, {});

            const cantidades = tipos.map(tipo => cantidadPorTipo[tipo]);

            const colores = tipos.map(() => generarColorAleatorio());

            const ctxProductos = document.getElementById('productosChart').getContext('2d');
            new Chart(ctxProductos, {
                type: 'bar',
                data: {
                    labels: tipos,
                    datasets: [{
                        label: 'Productos Registrados',
                        data: cantidades,
                        backgroundColor: colores,
                        borderColor: colores,
                        borderWidth: 1
                    }]
                },
                options: {
                    responsive: true,
                    plugins: {
                        title: {
                            display: true,
                            text: 'Cantidad de Productos Registrados por Tipo',
                            color: '#00f9ff'
                        }
                    },
                    scales: {
                        y: {
                            beginAtZero: true,
                            ticks: {
                                color: '#fff'
                            }
                        },
                        x: {
                            ticks: {
                                color: '#fff'
                            }
                        }
                    }
                }
            });
        }
    </script>

</body>

</html>
