<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LINA INDUSTRY - Registro de Empleados</title>
    <link rel="stylesheet" href="css/style.css">
    <script src="js/scripts.js" defer></script>
</head>
<body>
    <header>
        <h1>LINA INDUSTRY</h1>
    </header>
    <main>
        <h2>Registro de Empleados</h2>
        <form id="registroForm" action="create.php" method="post">
            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre" required oninput="validarTexto(this)">
            
            <label for="apellido_paterno">Apellido Paterno:</label>
            <input type="text" id="apellido_paterno" name="apellido_paterno" required oninput="validarTexto(this)">
            
            <label for="apellido_materno">Apellido Materno:</label>
            <input type="text" id="apellido_materno" name="apellido_materno" required oninput="validarTexto(this)">
            
            <label for="puesto">Puesto:</label>
            <input type="text" id="puesto" name="puesto" required oninput="validarTexto(this)">
            
            <label for="dias_trabajo">Días de Trabajo (a la semana):</label>
            <input type="number" id="dias_trabajo" name="dias_trabajo" required oninput="validarNumero(this, 7)">
            
            <label for="horas_trabajo">Horas de Trabajo (al día):</label>
            <input type="number" id="horas_trabajo" name="horas_trabajo" required oninput="validarNumero(this, 24); calcularHoraSalida()">
            
            <label for="dias_vacaciones">Días de Vacaciones:</label>
            <input type="number" id="dias_vacaciones" name="dias_vacaciones" required oninput="validarNumero(this, 24)">
            
            <button type="submit">Registrar</button>
        </form>
        <a href="read.php" id="verLista">Ver lista de empleados</a>
    </main>
    <div id="mensajeRegistro" style="display:none;">Registro exitoso</div>
    <div id="mensajeError" class="mensaje-error" style="display:none;">Por favor, completa los campos correctamente.</div>

</body>
</html>
