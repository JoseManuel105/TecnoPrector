<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página con 3 Columnas</title>
    <link rel="stylesheet" href="CSS/index_clases.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">
    <style>
        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .column {
            flex: 1;
            max-width: 300px; /* Ancho máximo de las columnas */
            margin: 10px;
            text-align: center;
        }

        .panel {
            background-color: #ffffff;
            border-radius: 10px;
            box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
            padding: 20px;
        }

        .panel h2 {
            font-size: 1.5em; /* Tamaño de fuente reducido */
            margin-bottom: 10px;
        }

        .panel p {
            font-size: 1em; /* Tamaño de fuente reducido */
        }

        .panel button {
            font-size: 1em; /* Tamaño de fuente reducido */
            padding: 8px 20px; /* Tamaño del botón reducido */
        }
    </style>
</head>
<body>
    
    <div class="container">
        <div class="column">
            <div class="panel">
                <h2>Título de la Columna 1</h2>
                <p>Información sobre la columna 1.</p>
                <a href="pagina1.html"><button>Ir a la Página 1</button></a>
            </div>
        </div>
        
        <div class="column">
            <div class="panel">
                <h2>Título de la Columna 2</h2>
                <p>Información sobre la columna 2.</p>
                <a href="pagina2.html"><button>Ir a la Página 2</button></a>
            </div>
        </div>
        
        <div class="column">
            <div class="panel">
                <h2>Título de la Columna 3</h2>
                <p>Información sobre la columna 3.</p>
                <a href="pagina3.html"><button>Ir a la Página 3</button></a>
            </div>
        </div>
    </div>
</body>
</html>
