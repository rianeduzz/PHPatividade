<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feedback Recebido</title>
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

        .container {
            margin-left: 640px; 
            padding: 20px;
            background-color: #262b4c;
            border-radius: 10px;
            color: #ffffff;
            width: 400px;
            margin-top: 180px;
        }

        .thank-you {
            font-size: 1.2em;
            margin-bottom: 20px;
        }

        .feedback {
            background-color: #484859;
            padding: 20px;
            border-radius: 5px;
            margin-top: 20px;
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

<div class="container">
    <h2>Obrigado pelo seu feedback!</h2>
    <div class="thank-you">
        Agradecemos sua avaliação.
    </div>

    <div class="feedback">
        <h3>Feedback Recebido:</h3>
    <?php
    $produto = htmlspecialchars($_POST['produto']);      // Nome ou identificação do produto
    $nota = htmlspecialchars($_POST['nota']);            // Nota dada ao produto (provavelmente uma avaliação de 1 a 5, por exemplo)
    $comentario = htmlspecialchars($_POST['comentario']); // Comentário fornecido sobre o produto

    echo "<p><strong>Produto:</strong> $produto</p>";   // Exibe o nome do produto
    echo "<p><strong>Nota:</strong> $nota</p>";         // Exibe a nota atribuída ao produto
    echo "<p><strong>Comentário:</strong> $comentario</p>"; // Exibe o comentário fornecido pelo usuário
    ?>

    </div>
</div>

</body>
</html>
