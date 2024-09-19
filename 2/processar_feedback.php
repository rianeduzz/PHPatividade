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
            background-color: #444444;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.5);
        }
        .feedback {
            background-color: #555555;
            padding: 20px;
            border-radius: 5px;
            margin-top: 20px;
        }
        .thank-you {
            color: #1abc9c;
            font-size: 1.2em;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>

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
