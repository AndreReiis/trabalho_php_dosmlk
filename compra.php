<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de Cartão</title>
    <link rel="stylesheet" href="compra.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f4f4f4;
        }
        form {
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            max-width: 400px;
            width: 100%;
        }
        label {
            font-weight: bold;
            display: block;
            margin-bottom: 5px;
        }
        input[type="text"], input[type="number"] {
            width: 100%;
            padding: 8px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            padding: 10px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            width: 100%;
            font-size: 16px;
        }
        input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
<form action="processa_formulario.php" method="post">
    
    <label for="nome">total de ingressos:</label>
    <input type="number" id="ingressos" name="ingressos" required maxlength="2" required> 
    
    <label for="nome">Nome:</label>
    <input type="text" id="nome" name="nome" required>

    <label for="numero_cartao">Número do Cartão:</label>
    <input type="number" id="numero_cartao" name="numero_cartao" required>

    <label for="validade_cartao">Validade do Cartão (MM/AA):</label>
    <input type="text" id="validade_cartao" name="validade_cartao" placeholder="MM/AA" maxlength="4" required> <!-- Limite de 5  -->

    <label for="cvv">CVV:</label>
    <input type="number" id="cvv" name="cvv" maxlength="3" required> <!-- limite 3 caracteres -->

    <input type="submit" value="Enviar">
</form>


</body>
</html>
