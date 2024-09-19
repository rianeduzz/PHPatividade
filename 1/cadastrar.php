<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cliente Cadastrado</title>
    <style>
        body {
            background-color: #2c3e50;
            color: #ecf0f1;
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .result-container {
            background-color: #34495e;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
            width: 300px;
        }
        h2 {
            text-align: center;
        }
        ul {
            list-style-type: none;
            padding: 0;
        }
        ul li {
            margin-bottom: 10px;
        }
        .success-message {
            color: #1abc9c;
            text-align: center;
            margin-top: 15px;
        }
    </style>
</head>
<body>

<div class="result-container">
    <h2>Dados do Cliente</h2>
    <ul>
        <li><strong>Nome:</strong> <?php echo htmlspecialchars($_POST['nome']); ?></li>
        <li><strong>E-mail:</strong> <?php echo htmlspecialchars($_POST['email']); ?></li>
        <li><strong>Telefone:</strong> <?php echo htmlspecialchars($_POST['telefone']); ?></li>
    </ul>
    <p class="success-message">Cliente cadastrado com sucesso!</p>
</div>

</body>
</html>
