<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Super Kompras Registro de Productos</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background: #181818;
            color: #fff;
            margin: 0;
            padding: 0;
        }
        header {
            background-color: #1a1a1a;
            color: #00f9ff;
            padding: 20px;
            text-align: center;
            border-bottom: 2px solid #00f9ff;
        }
        .container {
            padding: 20px;
        }
        .table-container {
            margin-top: 20px;
            display: none;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 10px;
            background: #222;
        }
        th, td {
            border: 1px solid #00f9ff;
            padding: 10px;
            text-align: left;
        }
        th {
            background: #00f9ff;
            color: #181818;
        }
        button {
            background-color: #00f9ff;
            color: #181818;
            padding: 10px 20px;
            border: none;
            cursor: pointer;
            font-size: 1.2em;
            margin: 5px;
        }
        button:hover {
            background-color: #181818;
            color: #00f9ff;
        }
    </style>
</head>
<body>
<header>
    <h1>Super Kompras</h1>
    <button onclick="mostrarTabla('personas')">Ver Personas</button>
    <button onclick="mostrarTabla('clientes')">Ver Clientes</button>
    <button onclick="mostrarTabla('proveedores')">Ver Proveedores</button>
    <button onclick="mostrarTabla('productos')">Ver Productos</button>
    <button onclick="mostrarTabla('inventario')">Ver Inventario</button>
    <button onclick="mostrarTabla('ventas')">Ver Ventas</button>
    <button onclick="mostrarTabla('detalle_venta')">Ver Detalle Venta</button>
</header>

<div class="container">
    <div id="tabla-container" class="table-container">
        <h2 id="tabla-titulo"></h2>
        <table>
            <thead id="tabla-head"></thead>
            <tbody id="tabla-body"></tbody>
        </table>
    </div>
</div>

<script>
    const datos = {
        personas: [
            { ID: 1, Nombre: "Juan Pérez", Edad: 30 },
            { ID: 2, Nombre: "Ana López", Edad: 25 }
        ],
        clientes: [
            { ID: 1, Nombre: "Carlos García", Compras: 5 },
            { ID: 2, Nombre: "Sofía Márquez", Compras: 3 }
        ],
        proveedores: [
            { ID: 1, Nombre: "Electro S.A.", Producto: "TVs" },
            { ID: 2, Nombre: "Moda Plus", Producto: "Ropa" }
        ],
        productos: [
            { ID: 1, Nombre: "Laptop", Precio: 15000 },
            { ID: 2, Nombre: "Teléfono", Precio: 8000 }
        ],
        inventario: [
            { ID: 1, Producto: "Laptop", Stock: 10 },
            { ID: 2, Producto: "Teléfono", Stock: 15 }
        ],
        ventas: [
            { ID: 1, Cliente: "Carlos García", Monto: 20000 },
            { ID: 2, Cliente: "Sofía Márquez", Monto: 12000 }
        ],
        detalle_venta: [
            { ID: 1, Venta: 1, Producto: "Laptop", Cantidad: 1 },
            { ID: 2, Venta: 2, Producto: "Teléfono", Cantidad: 2 }
        ]
    };

    function mostrarTabla(tipo) {
        const tablaContainer = document.getElementById("tabla-container");
        const tablaTitulo = document.getElementById("tabla-titulo");
        const tablaHead = document.getElementById("tabla-head");
        const tablaBody = document.getElementById("tabla-body");

        tablaTitulo.textContent = `Tabla de ${tipo.charAt(0).toUpperCase() + tipo.slice(1)}`;

        const items = datos[tipo];
        if (!items || items.length === 0) {
            tablaBody.innerHTML = "<tr><td colspan='100%'>No hay datos disponibles</td></tr>";
            return;
        }

        const headers = Object.keys(items[0]);
        tablaHead.innerHTML = `<tr>${headers.map(h => `<th>${h}</th>`).join('')}</tr>`;
        tablaBody.innerHTML = items.map(item => `<tr>${headers.map(h => `<td>${item[h]}</td>`).join('')}</tr>`).join('');

        tablaContainer.style.display = "block";
    }
</script>
</body>
</html>
S
