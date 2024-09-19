<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reserva de Sala de Reunião</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<nav class="navbar">
        <div class="container">
            <ul class="nav-links">
            <li><a href='../1/form.php'>Cadastro</a></li>
                <li><a href='../2/feedback.php'>Produto</a></li>
                <li><a href='../reserva/reserva.php'>Reserva</a></li>
            </ul>
        </div>
    </nav>
    <div class="container">
        <h2>Reserva de Sala de Reunião</h2>
        <form id="reservaForm">
            <label for="nome">Nome do Solicitante:</label>
            <input type="text" id="nome" name="nome" required>

            <label for="data">Data da Reunião:</label>
            <input type="date" id="data" name="data" required>

            <label for="horario">Horário da Reunião:</label>
            <input type="time" id="horario" name="horario" required>

            <input type="submit" value="Reservar Sala">
        </form>
        <div id="mensagem-confirmacao"></div>
    </div>
    

    <script src="script.js"></script>
</body>
</html>
