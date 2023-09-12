<html>
<head>
    <title>CRUD</title>
</head>
<body>
    <h1>CRUD</h1>
    
    <form>
        <table>
            <tr>
                
                <td>
                    <label for="clave">Clave:</label>
                    <input type="number" name="clave">
                </td>
                
            </tr>
            <tr>
            <tr>
                <td>
                    <label for="nombre">Nombre:</label>
                    <input type="text" name="nombre">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="direccion">Dirección:</label>
                    <input type="text" name="direccion">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="telefono">Teléfono:</label>
                    <input type="text" name="telefono">
                </td>
            </tr>
        </table>
        <button type="button" id="botonGuardar">Guardar</button>
        <!--<a href='javascript:void(0);' onclick='validarCamposVacios();'>Guardar</a>
        <button name="guardar" onclick="validarCamposVacios();">Guardar</button>-->
    </form>

    <hr>

    <h2>Registros</h2>
    <table border="1">
        <thead>
            <tr>
                <th>Clave</th>
                <th>Nombre</th>
                <th>Dirección</th>
                <th>Teléfono</th>
                <th>Editar</th>
                <th>Eliminar</th>
            </tr>
        </thead>
        <tbody>
            <?php
            require_once 'conexion.php';

            $registros = obtenerRegistros();

            foreach ($registros as $registro) {
                echo "<tr>";
                echo "<td>{$registro['clave']}</td>";
                echo "<td>{$registro['nombre']}</td>";
                echo "<td>{$registro['direccion']}</td>";
                echo "<td>{$registro['telefono']}</td>";
                echo "<td><a href='conexion.php?editar={$registro['clave']}'>Editar</a></td>";
                echo "<td><a href='javascript:void(0);' onclick='mostrarConfirmacionEliminar(\"{$registro['clave']}\");'>Eliminar</a></td>";
                echo "</tr>";
                }
                ?>
        </tbody>
    </table>
    <script src="notification.js"></script>
</body>
</html>