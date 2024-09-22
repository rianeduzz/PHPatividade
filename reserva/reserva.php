<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reserva de Sala de Reunião</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <style>
        * {
            box-sizing: border-box;
        }

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
            width: 236px;
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
            background-color: #262b4c;
            padding: 20px;
            border-radius: 10px;
            width: 90%;
            max-width: 500px;
            margin-top: 160px;
            z-index: 2;
            position: relative;
            margin-left: 637px; 
        }

        .container h2 {
            color: #ecf0f1;
            text-align: center;
            margin-bottom: 20px;
        }

        .container label {
            color: #ecf0f1;
            font-size: 14px;
            margin-bottom: 5px;
            display: block;
        }

        .container input[type="text"], 
        .container input[type="date"], 
        .container input[type="time"] {
            width: 96%;
            padding: 10px;
            margin-bottom: 15px;
            border-radius: 5px;
            border: none;
            outline: none;
            background-color: #ecf0f1;
        }

        .container button {
            width: 100%;
            padding: 10px;
            background-color: #104995;
            border: none;
            border-radius: 5px;
            color: white;
            font-size: 16px;
            cursor: pointer;
        }

        @media (max-width: 600px) {
            .navbar {
                width: 100%;
                height: auto;
                position: relative;
                flex-direction: row;
                justify-content: space-around;
            }

            .container {
                margin-left: 0;
            }

            .nav-links {
                flex-direction: row;
                gap: 10px;
            }
        }
    </style>

    <nav class="navbar">
        <ul class="nav-links">
            <li><a href="../inicio/inicio.php">Início</a></li>
            <li><a href='../1/form.php'>Cadastro</a></li>
            <li><a href='../2/feedback.php'>Produto</a></li>
            <li><a href='../reserva/reserva.php'>Reserva</a></li>
        </ul>
    </nav>

    <div>
        <div class="wave"></div>
        <div class="wave"></div>
        <div class="wave"></div>
    </div>

    <div class="container">
        <h2>Reserva de Sala de Reunião</h2>
        <form id="reservaForm" action="processar_reserva.php" method="POST">
            <label for="nome">Nome do Solicitante:</label>
            <input type="text" id="nome" name="nome" required>

            <label for="data">Data da Reunião:</label>
            <input type="date" id="data" name="data" required>

            <label for="horario">Horário da Reunião:</label>
            <input type="time" id="horario" name="horario" required>

            <button type="submit">Reservar Sala</button>
        </form>
    </div>
</body>
</html>
