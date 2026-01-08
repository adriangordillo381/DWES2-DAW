<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Acceso permitido</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            background: #eef8f1;
            color: #333;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .box {
            text-align: center;
            padding: 40px;
            background: #ffffff;
            border: 2px solid #4CAF50;
            border-radius: 12px;
            box-shadow: 0 0 20px rgba(0,0,0,0.1);
        }

        .box h1 {
            font-size: 38px;
            margin-bottom: 10px;
            color: #2e7d32;
        }

        .box p {
            font-size: 18px;
            color: #555;
        }

        .icon {
            font-size: 70px;
            margin-bottom: 15px;
            color: #4CAF50;
        }

        .btn {
            margin-top: 20px;
            padding: 12px 20px;
            background: #4CAF50;
            color: white;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            font-size: 16px;
            transition: 0.3s;
        }

        .btn:hover {
            background: #45a049;
        }
    </style>
</head>
<body>

<div class="box">
    <div class="icon">✔️</div>
    <h1>¡Enhorabuena!</h1>
    <p>Acceso permitido al sistema.</p>
    <button class="btn" onclick="history.back()">Volver</button>
</div>

</body>
</html>
