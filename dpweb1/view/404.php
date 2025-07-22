<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Error 404 - Página no encontrada</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #d1a0b8ff; 
            color: #010b14ff; 
            display: flex; 
            justify-content: center; 
            align-items: center; 
            min-height: 100vh; 
            margin: 0;
            text-align: center;
        }

        .error-container {
            padding: 40px;
            border-radius: 10px;
            background-color: #ecb5d7ff; 
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1); 
            max-width: 600px; 
            width: 90%; 
        }

        .error-container h1 {
            font-size: 10em; 
            color: #dc3545; 
            margin-bottom: 0;
            line-height: 1; 
        }

        .error-container h2 {
            font-size: 2.5em; 
            color: #17181aff; 
            margin-top: 10px;
            margin-bottom: 20px;
        }

        .error-container p {
            font-size: 1.2em; 
            line-height: 1.6;
            margin-bottom: 30px;
        }

        .error-container a {
            display: inline-block;
            background-color: #a34587ff; 
            color: white;
            padding: 12px 25px;
            border-radius: 5px;
            text-decoration: none; 
            font-size: 1.1em;
            transition: background-color 0.3s ease;  
        }

        .error-container a:hover {
            background-color: #0056b3; 
        }

        @media (max-width: 768px) {
            .error-container h1 {
                font-size: 8em; 
            }
            .error-container h2 {
                font-size: 2em;
            }
        }
        @media (max-width: 480px) {
            .error-container h1 {
                font-size: 6em; 
            }
            .error-container h2 {
                font-size: 1.8em;
            }
            .error-container p {
                font-size: 1em;
            }
        }
    </style>
</head>
<body>
    <div class="error-container">
        <h1>404</h1>
        <h2>¡Ups! Página no encontrada</h2>
        <p>Parece que la página que buscas no existe o se ha movido. Por favor, verifica la URL o vuelve a la página de inicio.</p>
        <a href="/">Volver al inicio</a>
    </div>
</body>
</html>