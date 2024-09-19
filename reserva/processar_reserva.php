<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = htmlspecialchars($_POST['nome']);
    $data = htmlspecialchars($_POST['data']);
    $horario = htmlspecialchars($_POST['horario']);

    echo "<h2>Reserva Confirmada!</h2>";
    echo "<p><strong>Nome do Solicitante:</strong> $nome</p>";
    echo "<p><strong>Data da Reunião:</strong> $data</p>";
    echo "<p><strong>Horário da Reunião:</strong> $horario</p>";
} else {
    echo "<p>Erro ao processar a reserva. Tente novamente.</p>";
}
?>
