<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de Feedback</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            justify-content: flex-start;
            align-items: center;
            height: 100vh;
        }

        .navbar {
            background-color: #3c638c;
            width: 100%;
            padding: 20px;
            z-index: 1;
            position: fixed;
            top: 0;
        }

        .navbar .container {
            max-width: 500px;
            margin: 0 auto;
            display: flex;
            justify-content: center;
            background-color:  #f4f4f4;
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
            color: rgb(0, 0, 0);
            text-decoration: none;
            font-size: 18px;
        }

        .nav-links a:hover {
            text-decoration: underline;
        }

        .container {
            background-color: #34495e;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.2);
            width: 90%;
            max-width: 500px;
            margin-top: 200px;
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
            background-color: #1abc9c;
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
            <option value="4">4">4</option>
            <option value="5">5</option>
        </select>

        <label for="comentario">Comentário:</label>
        <textarea id="comentario" name="comentario" rows="4" required></textarea>

        <button type="submit">Enviar Feedback</button>
    </form>
</div>

</body>
</html>
