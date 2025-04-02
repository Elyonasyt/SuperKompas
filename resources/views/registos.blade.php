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
            { ID: 1, Nombre: "Juan Perez", Apellido_Paterno: "Gomez", Apellido_Materno: "", Telefono: "5551234567", Correo: "juan.perez@example.com", Direccion: "Calle Falsa 123, CDMX" },
            { ID: 2, Nombre: "Maria Lopez", Apellido_Paterno: "Hernandez", Apellido_Materno: "", Telefono: "5559876543", Correo: "maria.lopez@example.com", Direccion: "Av. Reforma 456, CDMX" },
            { ID: 3, Nombre: "Carlos Rodriguez", Apellido_Paterno: "Diaz", Apellido_Materno: "", Telefono: "5557418529", Correo: "carlos.rod@example.com", Direccion: "Blvd. Principal 789, CDMX" }
        ],
        clientes: [
            { ID: 1, ID_Persona: 1 },
            { ID: 2, ID_Persona: 2 }
        ],
        proveedores: [
            { ID: 1, ID_Persona: 3, Nombre_Proveedor: "Distribuidora Alimentos S.A." }
        ],
        productos: [
            { ID: 1, Nombre_Producto: "Leche Entera", Descripcion: "1 litro de leche entera", Precio: 20.50, Unidades_Stock: 100, ID_Proveedor: 1 },
            { ID: 2, Nombre_Producto: "Pan Blanco", Descripcion: "Pan de caja 500g", Precio: 35.00, Unidades_Stock: 50, ID_Proveedor: 1 },
            { ID: 3, Nombre_Producto: "Arroz 1kg", Descripcion: "Paquete de arroz blanco", Precio: 25.75, Unidades_Stock: 80, ID_Proveedor: 1 }
        ],
        inventario: [
            { ID: 1, Producto: "Leche Entera", Cantidad_Disponible: 100, Fecha_Actualizacion: "2024-04-01" },
            { ID: 2, Producto: "Pan Blanco", Cantidad_Disponible: 50, Fecha_Actualizacion: "2024-04-01" },
            { ID: 3, Producto: "Arroz 1kg", Cantidad_Disponible: 80, Fecha_Actualizacion: "2024-04-01" }
        ],
        ventas: [
            { ID: 1, ID_Cliente: 1, Fecha_Venta: "2024-04-01", Total_Venta: 81.25 },
            { ID: 2, ID_Cliente: 2, Fecha_Venta: "2024-04-02", Total_Venta: 56.25 }
        ],
        detalle_venta: [
            { ID: 1, ID_Venta: 1, ID_Producto: 1, Cantidad: 2, Precio_Unitario: 20.50 },
            { ID: 2, ID_Venta: 1, ID_Producto: 3, Cantidad: 1, Precio_Unitario: 25.75 },
            { ID: 3, ID_Venta: 2, ID_Producto: 2, Cantidad: 1, Precio_Unitario: 35.00 },
            { ID: 4, ID_Venta: 2, ID_Producto: 3, Cantidad: 1, Precio_Unitario: 25.75 }
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
