<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página con Pantalla de Carga</title>
    <link rel="stylesheet" href="css/index.css">
</head>
<body>
    <!-- Pantalla de carga -->
    <div id="loader" class="loader">
        <div class="loader-content">
            <img src="imagenes/logo.png" alt="Logo" class="logo">
            <div class="progress-bar">
                <div class="progress"></div>
            </div>
        </div>
    </div>

    <!-- Formulario de inicio de sesión -->
    <div id="content" class="login-container" style="display: none;">
        <form class="login-form">
        <img src="imagenes/logo.png" alt="Logo" style="width: 100px; height: 100px;">
        <h2>Ingresa a tu cuenta</h2>
            <input type="text" name="username" placeholder="Ingrese su usuario">
            <input type="password" name="password" placeholder="Ingrese su contraseña">
            <button type="submit">Entrar</button>
            <span>¿No estas registrado? Haz click <a href="registro.php">aqui</a>.</span>
            </label>
        </form>
    </div>

    <script src="javascript/script.js"></script>
</body>
</html>
