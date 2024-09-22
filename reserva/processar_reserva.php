<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $nome = htmlspecialchars($_POST['nome']);      // Nome do solicitante
    $data = htmlspecialchars($_POST['data']);      // Data da reunião
    $horario = htmlspecialchars($_POST['horario']); // Horário da reunião

    // Exibe o conteúdo HTML a seguir, que mostrará a confirmação da reserva
    ?>

    <!DOCTYPE html>
    <html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Confirmação da Reserva</title>
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
            margin-left: 700px; 
            margin-top: 245px; 
            padding: 20px;
            background-color: #262b4c;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
            width: 300px;
            color: #ffffff;
        }

        h2 {
            color: #ecf0f1;
            text-align: center;
        }

        p {
            font-size: 18px;
            color: #ffffff;
        }

        strong {
            color: #ffffff;
        }
        </style>
    </head>
    <body>

    <nav class="navbar">
        <ul class="nav-links">
            <li><a href='../inicio/inicio.php'>Início</a></li>
            <li><a href='../1/form.php'>Cadastro</a></li>
            <li><a href='../2/feedback.php'>Produto</a></li>
            <li><a href='../reserva/reserva.php'>Reserva</a></li>
        </ul>
    </nav>

    <div class="container">
        <h2>Reserva Confirmada!</h2>
        <p><strong>Nome do Solicitante:</strong> <?= $nome; ?></p> 
        <p><strong>Data da Reunião:</strong> <?= $data; ?></p>    
        <p><strong>Horário da Reunião:</strong> <?= $horario; ?></p> 
    </div>
    </body>
    </html>

    <?php
} else {
    // Caso o formulário não tenha sido enviado corretamente (não via POST), exibe uma mensagem de erro
    echo "<p>Erro ao processar a reserva. Tente novamente.</p>";
}
?>
    