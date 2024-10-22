<?php

    #$msg = '';
    #if (isset($_GET['msg'])) {
    #    $msg = $_GET['msg'];
    #}

    require "../../conexao.php";
    
    session_start();
    
    $email = $_GET['email'];
    $cpf = $_GET['cpf'];
    $telefone = $_GET['telefone'];
    $forma_de_pagamento = $_GET['forma_de_pagamento'];
    $data_de_pagamento = $_GET['data_de_pagamento'];
    
    $sql = "INSERT INTO perfil_de_usuario (email, cpf, telefone, forma_de_pagamento, data_de_pagamento) VALUES('$email', '$cpf', '$telefone', '$forma_de_pagamento', '$data_de_pagamento')";
    
    
    if ($conn->query($sql) === TRUE) {
        $conn->close();
        header('Location:../criar.php?msg=filme '. $email .' cadastrado :)');
    } else {
        echo $titulo . "nao foi inserido com sucesso :( ";
    
    }
    
    $conn->close();
    
    ?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuarios </title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #6e8efb, #a777e3);
            margin: 0;
            display: flex;
            height: 100vh;
            color: #333;
        }

        .sidebar {
            background-color: #2c3e50;
            width: 250px;
            padding: 20px;
            box-shadow: 4px 0 10px rgba(0, 0, 0, 0.2);
            height: 100%;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .sidebar h2 {
            color: white;
            font-size: 24px;
            margin: 0;
            margin-bottom: 30px;
        }

        .sidebar ul {
            list-style-type: none;
            padding: 0;
            width: 100%;
        }

        .sidebar ul li {
            margin: 15px 0;
        }

        .sidebar ul li a {
            text-decoration: none;
            color: #ecf0f1;
            font-size: 18px;
            display: block;
            padding: 12px;
            border-radius: 8px;
            transition: background-color 0.3s, color 0.3s;
        }

        .sidebar ul li a:hover {
            background-color: #34495e;
            color: #ecf0f1;
        }

        .main-content {
            flex: 1;
            padding: 30px;
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
            margin: 20px;
            overflow-y: auto;
        }

        .main-content h1 {
            margin-top: 0;
            color: #2c3e50;
            font-size: 28px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
            color: #2c3e50;
        }

        .form-group input,
        .form-group select {
            width: 100%;
            padding: 12px;
            border: 1px solid #ddd;
            border-radius: 8px;
            font-size: 16px;
        }

        .form-group input[type="submit"] {
            background-color: #2c3e50;
            color: white;
            border: none;
            cursor: pointer;
            font-size: 18px;
            transition: background-color 0.3s;
        }

        .form-group input[type="submit"]:hover {
            background-color: #34495e;
        }
    </style>
</head>

<body>
    <?php require "../../menu.php"; ?>

    <div class="main-content">
        <h1><?php echo $msg; ?></h1>
        <h1>Adicionar Usuario </h1>

        <form action="acoes/inserir.php" method="GET">
            <div class="form-group">
                <label for="title">Nome de usuario:</label>
                <input type="text" id="title" name="titulo" required>
            </div>


            <div class="form-group">
                <label for="title">E-mail:</label>
                <input type="text" id="title" name="titulo" required>
            </div>

            <div class="form-group">
                <label for="Pagamento">Tipo de Pagamento:</label>
                <select id="Pagamento" name="Pagamento" required>
                    <option value=" ">Selecione...</option>
                    <option value="Boleto">Boleto</option>
                    <option value="Cartao">Cartão</option>
                    <option value="Pix">Pix</option>
                </select>
            </div>

            <div class="form-group">
                <label for="release_date">Data de Cobrança:</label>
                <input type="date" id="release_date" name="dataDeLancamento" required>
            </div>

            <div class="form-group">
                <label for="director">Diretor:</label>
                <input type="text" id="director" name="diretor" required>
            </div>

            <div class="form-group">
                <label for="rating">Classificação de Idade:</label>
                <input type="number" id="rating" name="classificacao" required>
            </div>

            <div class="form-group">
                <label for="description">Descrição:</label>
                <textarea id="description" name="descricao" rows="4" required></textarea>
            </div>

            <div class="form-group">
                <input type="submit" value="Adicionar Filme">
            </div>
        </form>
    </div>

</body>

</html>