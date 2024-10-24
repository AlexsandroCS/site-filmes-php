<?php

    $msg = '';
    
    if (isset($_GET['msg'])) {
        $msg = $_GET['msg'];
    }

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
    <?php require "../menu.php"; ?>

    <div class="main-content">
        <h1>Adicionar Perfil de usuário</h1>

        <form action="acoes/adicionarPerfil.php" method="GET">
            <div class="form-group">
                <label for="title">Nome do Perfil:</label>
                <input type="text" id="nomePerfil" name="nome" required>
            </div>

            <!-- <div class="form-group">
                <label for="title">E-mail:</label>
                <input type="text" id="title" name="titulo" required>
            </div> -->

            <!-- <div class="form-group">
                <label for="Pagamento">Tipo de Pagamento:</label>
                <select id="Pagamento" name="Pagamento" required>
                    <option value=" ">Selecione...</option>
                    <option value="Boleto">Boleto</option>
                    <option value="Cartao">Cartão</option>
                    <option value="Pix">Pix</option>
                </select>
            </div> -->

            <!-- <div class="form-group">
                <label for="release_date">Data de Cobrança:</label>
                <input type="date" id="release_date" name="dataDeLancamento" required>
            </div> -->

            <div class="form-group">
            <label for="genre">Gênero favorito:</label>
                <select id="genre" name="generoFavorito" required>
                    <option value="">Selecione...</option>
                    <option value="acao">Ação</option>
                    <option value="comedia">Comédia</option>
                    <option value="drama">Drama</option>
                    <option value="fantasia">Fantasia</option>
                    <option value="guerra">Guerra</option>
                    <option value="historia">História</option>
                    <option value="romance">Romance</option>
                    <option value="scifi">Sci-fi</option>
                    <option value="suspense">Suspense</option>
                    <option value="terror">Terror</option>
                </select>
            </div>

            <div class="form-group">
                <label for="languageAudio">Idioma de Áudio:</label>
                <select id="languageAudio" name="idiomaAudio" required>
                    <option value="">Selecione...</option>
                    <option value="original">Áudio Original</option>
                    <option value="portuguesBrasil">Áudio Português Brasileiro</option>
                    <option value="portuguesPortugal">Áudio Portugues Portugal</option>
                    <option value="ingles">Áudio Inglês</option>
                    <option value="espanhol">Áudio Espanhol</option>
                    <option value="chines">Áudio Chines</option>
                    <option value="russo">Áudio Russo</option>
                    <option value="japones">Áudio Japonês</option>
                    <option value="finlandes">Áudio Finlandes</option>
                    <option value="alemao">Áudio Alemão</option>
                </select>
            </div>

            <div class="form-group">
                <label for="languageAudio">Idioma de Legenda:</label>
                <select id="languageAudio" name="idiomaLegenda" required>
                    <option value="">Selecione...</option>
                    <option value="noLegenda">Sem legendas</option>
                    <option value="portuguesBrasil">Lengenda em Português Brasileiro</option>
                    <option value="portuguesPortugal">Lengenda em Portugues Portugal</option>
                    <option value="ingles">Lengenda em Inglês</option>
                    <option value="espanhol">Lengenda em Espanhol</option>
                    <option value="chines">Lengenda em Chines</option>
                    <option value="russo">Lengenda em Russo</option>
                    <option value="japones">Lengenda em Japonês</option>
                    <option value="finlandes">Lengenda em Finlandes</option>
                    <option value="alemao">Lengenda em Alemão</option>
                </select>
            </div>

            <div class="form-group">
                <label for="ageRarting">Classificação de conteúdo:</label>
                <select id="ageRarting" name="classificacaoEtaria" required>
                    <option value="">Selecione...</option>
                    <option value="livre">Conteúdo que todas faixa etária pode assistir</option>
                    <option value="10">Conteúdo com faixa etária de até 10 anos de idade</option>
                    <option value="12">Conteúdo com faixa etária de até 12 anos de idade</option>
                    <option value="14">Conteúdo com faixa etária de até 14 anos de idade</option>
                    <option value="16">Conteúdo com faixa etária de até 16 anos de idade</option>
                    <option value="18">Conteúdo com faixa etária de 18 anos de idade</option>
                </select>
            </div>

            <!-- <div class="form-group">
                <label for="description">Descrição:</label>
                <textarea id="description" name="descricao" rows="4" required></textarea>
            </div> -->

            <div class="form-group">
                <input type="submit" value="Adicionar Novo Perfil">
            </div>
        </form>
    </div>
    
</body>
</html>