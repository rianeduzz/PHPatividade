<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $nome = htmlspecialchars($_POST['nome']);
    $data = htmlspecialchars($_POST['data']);
    $horario = htmlspecialchars($_POST['horario']);
    ?>

    <!DOCTYPE html>
    <html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Confirmação da Reserva</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <style>
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
        </style>
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
        <h2>Reserva Confirmada!</h2>
        <p><strong>Nome do Solicitante:</strong> <?= $nome; ?></p>
        <p><strong>Data da Reunião:</strong> <?= $data; ?></p>
        <p><strong>Horário da Reunião:</strong> <?= $horario; ?></p>
    </div>
    </body>
    </html>

    <?php
} else {

    echo "<p>Erro ao processar a reserva. Tente novamente.</p>";
}
?>
