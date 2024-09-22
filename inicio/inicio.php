<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-color: #f4f4f4;
    margin: auto;
    overflow: auto;
    background: linear-gradient(315deg, #262b4c 0%, #4a4f70 33%, #a7a9be 66%, #ffffff 100%);
    animation: gradient 15s ease infinite;
    background-size: 400% 400%;
    background-attachment: fixed;
}

@keyframes gradient {
    0% { background-position: 0% 0%; }
    50% { background-position: 100% 100%; }
    100% { background-position: 0% 0%; }
}

.wave {
    background: rgba(255, 255, 255, 0.25);
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

.wave:nth-of-type(2) {
    bottom: -1.25em;
    animation: wave 18s linear reverse infinite;
    opacity: 0.8;
}

.wave:nth-of-type(3) {
    bottom: -2.5em;
    animation: wave 20s -1s reverse infinite;
    opacity: 0.9;
}

@keyframes wave {
    2% { transform: translateX(1); }
    25% { transform: translateX(-25%); }
    50% { transform: translateX(-50%); }
    75% { transform: translateX(-25%); }
    100% { transform: translateX(1); }
}

        .navbar {
            background-color: #262b4c;
            padding: 20px;
            width: 200px;
            height: 100vh;
            position: fixed;
            top: 0;
            left: 0;
            display: flex;
            flex-direction: column;
            justify-content: flex-start;
            align-items: center;
        }

        .nav-links {
            list-style: none;
            padding: 0;
            margin-top: 50px;
            display: flex;
            flex-direction: column;
            gap: 20px;
        }

        .nav-links a {
            color: rgb(255, 255, 255);
            text-decoration: none;
            font-size: 18px;
            text-align: center;
            width: 100%;
        }

        .nav-links a:hover {
            text-decoration: underline;
        }

        .image-box {
            margin-left: 500px;
            max-width: 800px;
            padding: 20px;
            background-color: #262b4c;
            border-radius: 8px;
            margin-top: 220px;
        }

        h1 {
            text-align: center;
            color: #ffffff;
            height: 50px;
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
            width: 150px;
            height: 150px;
            border-radius: 50%;
            border: 2px solid white;
            object-fit: cover;
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
                width: 120px;
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

<div class="image-box">
    <h1>Integrantes</h1>
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
