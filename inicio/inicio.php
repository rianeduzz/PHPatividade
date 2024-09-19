<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            margin: auto;
            font-family: -apple-system, BlinkMacSystemFont, sans-serif;
            overflow: auto;
            background: linear-gradient(315deg, #d3d3d3 3%, #c8a2c8 38%, #4b0082 68%);
            animation: gradient 15s ease infinite;
            background-size: 400% 400%;
            background-attachment: fixed;
        }

        @keyframes gradient {
            0% {
                background-position: 0% 0%;
            }
            50% {
                background-position: 100% 100%;
            }
            100% {
                background-position: 0% 0%;
            }
        }

        .wave {
            background: rgb(255 255 255 / 25%);
            border-radius: 1000% 1000% 0 0;
            position: fixed;
            width: 200%;
            height: 12em;
            animation: wave 10s -3s linear infinite;
            transform: translate3d(0, 0, 0);
            opacity: 0.8;
            bottom: 0;
            left: 0;
            z-index: -1;
        }

        .navbar {
            background-color: #371f60;
            padding: 20px;
            width: 100%;
            position: fixed;
            top: 0;
            left: 0;
            display: flex;
            justify-content: center;
        }

        .nav-links {
            list-style: none;
            display: flex;
            gap: 30px; 
        }

        .nav-links a {
            color: rgb(255, 255, 255);
            text-decoration: none;
            font-size: 18px;
        }

        .nav-links a:hover {
            text-decoration: underline;
        }

        h1 {
            text-align: center;
            color: #ffffff;
            margin-top: 80px; /* Ajustado para o espaço após o navbar */
        }

        .image-box {
            max-width: 800px; /* Largura máxima da box */
            margin: 20px auto; /* Centraliza e adiciona margem */
            padding: 20px;
            background-color: #371f60; /* Cor igual à da navbar */
            border-radius: 8px;
        }

        .image-container {
            display: flex;
            justify-content: center;
            gap: 30px;
            margin-top: 20px;
        }

        .image-item {
            text-align: center;
        }

        .image-item img {
            width: 150px; /* Ajuste a largura */
            height: 150px; /* Ajuste a altura */
            border-radius: 50%;
            border: 2px solid white;
            object-fit: cover; /* Impede o estiramento da imagem */
        }

        .image-item p {
            color: white;
            margin-top: 10px;
        }

        @media (max-width: 600px) {
            .image-container {
                flex-direction: column;
                align-items: center;
            }

            .image-item img {
                width: 120px; /* Ajusta o tamanho da imagem no mobile */
                height: 120px;
            }
        }
    </style>
</head>
<body>

<nav class="navbar">
    <ul class="nav-links">
        <li><a href="../inicio/inicio.php">Início</a></li>
        <li><a href="../1/form.php">Cadastro</a></li>
        <li><a href="../2/feedback.php">Produto</a></li>
        <li><a href="../reserva/reserva.php">Reserva</a></li>
    </ul>
</nav>

<h1>Integrantes</h1>

<div class="image-box">
    <div class="image-container">
        <div class="image-item">
            <img src="../imagens/DSCN3138.JPG" alt="Integrante 1">
            <p>Gustavo Martins</p>
        </div>
        <div class="image-item">
            <img src="../imagens/DSCN3186.JPG" alt="Integrante 2">
            <p>Rafael Leal</p>
        </div>
        <div class="image-item">
            <img src="../imagens/DSCN3187.JPG" alt="Integrante 3">
            <p>Rian Eduardo</p>
        </div>
    </div>
</div>

</body>
</html>
