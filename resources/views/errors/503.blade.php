<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página en Mantenimiento</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            background: linear-gradient(135deg, #ff7e5f, #feb47b);
            font-family: 'Arial', sans-serif;
            color: #fff;
            text-align: center;
            padding: 20px;
        }

        .container {
            max-width: 500px;
            width: 100%;
            padding: 20px;
            background: rgba(0, 0, 0, 0.3);
            border-radius: 15px;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
            transition: transform 0.3s ease;
        }

        .container:hover {
            transform: scale(1.05);
        }

        h1 {
            font-size: 2em;
            margin-bottom: 0.5em;
            animation: fadeIn 1s ease-out;
        }

        p {
            font-size: 1em;
            margin-bottom: 1.5em;
            animation: fadeIn 1.5s ease-out;
        }

        .spinner {
            width: 50px;
            height: 50px;
            border: 5px solid rgba(255, 255, 255, 0.3);
            border-top: 5px solid #fff;
            border-radius: 50%;
            animation: spin 1s linear infinite;
            margin: 20px auto;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
            }

            to {
                opacity: 1;
            }
        }

        @keyframes spin {
            0% {
                transform: rotate(0deg);
            }

            100% {
                transform: rotate(360deg);
            }
        }

        /* Responsiveness */
        @media (max-width: 768px) {
            h1 {
                font-size: 1.8em;
            }

            p {
                font-size: 1em;
            }

            .spinner {
                width: 40px;
                height: 40px;
            }
        }

        @media (max-width: 480px) {
            h1 {
                font-size: 1.5em;
            }

            p {
                font-size: 0.9em;
            }

            .spinner {
                width: 35px;
                height: 35px;
            }
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="spinner"></div>
        <h1>Página en Mantenimiento</h1>
        <p>Estamos trabajando para mejorar tu experiencia. Vuelve pronto.</p>
    </div>
</body>

</html>
