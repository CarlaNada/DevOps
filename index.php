<?php echo "PHP está funcionando ✔<br>"; ?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Bienvenido a Prueba.local</title>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      font-family: 'Roboto', sans-serif;
      background: linear-gradient(135deg, #74ebd5, #acb6e5);
      color: #333;
      height: 100vh;
      display: flex;
      align-items: center;
      justify-content: center;
    }

    .container {
      background-color: white;
      padding: 40px;
      border-radius: 16px;
      box-shadow: 0 10px 20px rgba(0,0,0,0.2);
      text-align: center;
      max-width: 600px;
      width: 90%;
    }

    h1 {
      font-size: 2.5rem;
      margin-bottom: 20px;
      color: #444;
    }

    p {
      font-size: 1.2rem;
      color: #666;
    }

    .btn {
      margin-top: 30px;
      display: inline-block;
      padding: 12px 24px;
      font-size: 1rem;
      color: white;
      background-color: #5a67d8;
      border: none;
      border-radius: 8px;
      text-decoration: none;
      transition: background-color 0.3s ease;
    }

    .btn:hover {
      background-color: #434190;
    }
  </style>
</head>
<body>
  <div class="container">
    <h1>¡Bienvenido a prueba.local!</h1>
    <p>Este es un sitio de prueba sirviendo desde Nginx por el puerto 80 🚀</p>
    <a href="#" class="btn">Explorar más</a>
  </div>
</body>
</html>
