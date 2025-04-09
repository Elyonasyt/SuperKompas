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
    <button class="btn clientes-btn" onclick="window.location.href='clientes'">cliente</button>
    <button class="btn detalle-ventas-btn" onclick="window.location.href='detalle_ventas'">detalle_ventas</button>
    <button class="btn inventarios-btn" onclick="window.location.href='inventarios'">inventario</button>
    <button class="btn personas-btn" onclick="window.location.href='personas'">personas</button>
    <button class="btn productos-btn" onclick="window.location.href='productos'">producto</button>
    <button class="btn proveedore-btn" onclick="window.location.href='proveedore'">proveedores</button>
    <button class="btn ventas-btn" onclick="window.location.href='ventas'">venta</button>
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


</body>
</html>
