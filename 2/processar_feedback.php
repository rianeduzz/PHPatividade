<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feedback Recebido</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #2c2c2c;
            color: #ffffff;
        }
        .container {
            width: 50%;
            margin: auto;
            padding: 20px;
            background-color: #371f60;
            border-radius: 10px;
        }
        .feedback {
            background-color: #4a0f78;
            padding: 20px;
            border-radius: 5px;
            margin-top: 20px;
        }
        .thank-you {
            color: #ffffff;
            font-size: 1.2em;
            margin-bottom: 20px;
        }
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            justify-content: flex-start;
            align-items: center;
            height: 100vh;
        }

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
    2% {
        transform: translateX(1);
    }

    25% {
        transform: translateX(-25%);
    }

    50% {
        transform: translateX(-50%);
    }

    75% {
        transform: translateX(-25%);
    }

    100% {
        transform: translateX(1);
    }
}

        .navbar {
    background-color:  #371f60;
    padding: 20px;
    width: 100%;
}

.navbar .container {
    max-width: 500px;
    margin: 0 auto;
    display: flex;
    justify-content: center;
}

.nav-links {
    list-style: none;
    display: flex;
    gap: 30px; 
}

.nav-links li {
    margin: 0;
}

.nav-links a {
    color: rgb(255, 255, 255);
    text-decoration: none;
    font-size: 18px;
}

.nav-links a:hover {
    text-decoration: underline;
}
        
    </style>
</head>
<body>
<nav class="navbar">
    <div class="container">
        <ul class="nav-links">
            <li><a href="../inicio/inicio.php">Início</a></li>
            <li><a href='../1/form.php'>Cadastro</a></li>
            <li><a href='../2/feedback.php'>Produto</a></li>
            <li><a href='../reserva/reserva.php'>Reserva</a></li>
        </ul>
    </div>
</nav>

<div class="container">
    <h2>Obrigado pelo seu feedback!</h2>
    <div class="thank-you">
        Agradecemos sua avaliação.
    </div>

    <div class="feedback">
        <h3>Feedback Recebido:</h3>
        <?php
        $produto = htmlspecialchars($_POST['produto']);
        $nota = htmlspecialchars($_POST['nota']);
        $comentario = htmlspecialchars($_POST['comentario']);
        
        echo "<p><strong>Produto:</strong> $produto</p>";
        echo "<p><strong>Nota:</strong> $nota</p>";
        echo "<p><strong>Comentário:</strong> $comentario</p>";
        ?>
    </div>
</div>

</body>
</html>
