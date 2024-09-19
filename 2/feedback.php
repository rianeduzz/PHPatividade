<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de Feedback</title>
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
        input, select, textarea {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        input[type="submit"] {
            background-color: #1abc9c;
            color: white;
            border: none;
        }
        input[type="submit"]:hover {
            background-color: #16a085;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Feedback de Produto</h2>
    <form action="processar_feedback.php" method="POST">
        <label for="produto">Nome do Produto:</label>
        <input type="text" id="produto" name="produto" required>

        <label for="nota">Nota (1 a 5):</label>
        <select id="nota" name="nota" required>
            <option value="">Selecione</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
        </select>

        <label for="comentario">Comentário:</label>
        <textarea id="comentario" name="comentario" rows="4" required></textarea>

        <input type="submit" value="Enviar Feedback">
    </form>
</div>

</body>
</html>
