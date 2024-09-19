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
    background-color:  #34495e;
    padding: 20px;
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

.container {
    max-width: 600px;
    margin: 50px auto;
    padding: 20px;
    background-color: #34495e;
    border-radius: 8px;
    text-align: left; 
}

h2 {
    text-align: center;
    color: #ffffff;
}

form {
    display: flex;
    flex-direction: column;
}

label {
    margin-top: 15px;
    color: #ffffff;
}

input[type="text"],
input[type="date"],
input[type="time"] {
    padding: 10px;
    margin-top: 5px;
    border: 1px solid #ccc;
    border-radius: 4px;
}

input[type="submit"] {
    margin-top: 20px;
    padding: 10px;
    background-color: #28a745;
    color: white;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type="submit"]:hover {
    background-color: #218838;
}

@media (max-width: 600px) {
    .container {
        width: 90%;
    }

    .navbar .container {
        flex-direction: column;
        align-items: center;
    }

    .nav-links {
        flex-direction: column;
        gap: 10px;
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
        .container {
            background-color: #371f60;
            padding: 20px;
            border-radius: 10px;
            width: 90%;
            max-width: 500px;
            margin-top: 100px;
            z-index: 2;
            position: relative;
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

        .container input[type="text"], .container textarea, .container select {
            width: 96%;
            padding: 10px;
            margin-bottom: 15px;
            border-radius: 5px;
            border: none;
            outline: none;
            background-color: #ecf0f1;
        }

        .container textarea {
            resize: vertical;
            height: 100px;
            width: 96%;
        }

        .container button {
            width: 100%;
            padding: 10px;
            background-color: #3c1095;
            border: none;
            border-radius: 5px;
            color: white;
            font-size: 16px;
            cursor: pointer;
        }

        .container button:hover {
            background-color: #16a085;
        }

    </style>
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

        <input type="submit" value="Reservar Sala">
    </form>
</div>
</body>
</html>
