<?php
    require "../conexao.php";
    
    session_start();

    $usuario = $_SESSION['userId'];
    
    $sql = "SELECT * FROM perfilUsuario WHERE idUsuario = $usuario";
    $resultado = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listar Perfis cadastrado na conta - Locadora</title>
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

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        table,
        th,
        td {
            border: 1px solid #ddd;
        }

        th,
        td {
            padding: 12px;
            text-align: left;
        }

        th {
            background-color: #2c3e50;
            color: white;
            text-transform: none;
        }

        tr{
            text-transform: capitalize;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
        
        tr:hover {
            background-color: #ddd;
        }
    </style>
</head>

<body>

    <?php require "../menu.php"; ?>

    <div class="main-content">
        <h1>Listar todos os perfis cadastrados na conta</h1>

        <table>
            <thead>
                <tr>
                    <th>#</th>
                    <th>Nome do Perfil</th>
                    <th>Gênero Favorito</th>
                    <th>Idioma do Áudio</th>
                    <th>Idioma da Legenda</th>
                    <th>Classificação Etária</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                <?php

                    while ($row = $resultado->fetch_assoc()) {
                        // $data = new DateTime($row["dataDeLancamento"]);
                        // $data = $data->format("d/m/Y");

                        $genero = $row["generoFavorito"];
                        switch ($genero) {
                            case "acao":
                                $genero = "Ação";
                                break;
                            case "comedia":
                                $genero = "Comédia";
                                break;
                            case "historia":
                                $genero = "História";
                                break;
                            case "scifi":
                                $genero = "Sci-fi";
                                break;
                            default:
                                break;
                        }

                        $audio = $row["idiomaAudio"];
                        switch ($audio){
                            case "portuguesBrasil":
                                $audio = "Português Brasileiro";
                                break;
                            case "portuguesPortugal":
                                $audio = "Português Portugal";
                                break;
                            case "ingles":
                                $audio = "Inglês";
                                break;
                            case "japones":
                                $audio = "Japonês";
                                break;
                            case "finlandes":
                                $audio = "Finlandês";
                                break;
                            case "Alemão":
                                $audio = "Alemão";
                                break;
                            default:
                        }

                        $legenda = $row["idiomaLegenda"];
                        switch ($legenda){
                            case "noLegenda":
                                $legenda = "Sem Legenda";
                                break;
                            case "portuguesBrasil":
                                $legenda = "Português Brasileiro";
                                break;
                            case "portuguesPortugal":
                                $legenda = "Português Portugal";
                                break;
                            case "ingles":
                                $legenda = "Inglês";
                                break;
                            case "japones":
                                $legenda = "Japonês";
                                break;
                            case "finlandes":
                                $legenda = "Finlandês";
                                break;
                            case "Alemão":
                                $legenda = "Alemão";
                                break;
                            default:
                                break;
                        }
                    ?>

                    <tr>
                        <td><?php echo $row["id"] ?></td>
                        <td><?php echo $row["nome"] ?></td>
                        <td><?php echo $genero ?></td>
                        <td><?php echo $audio ?></td>
                        <td><?php echo $legenda ?></td>
                        <td><?php echo $row["classificacaoEtaria"] ?></td>
                        <td>
                            <a href="atualizar.php?id=<?php echo $row['id']; ?>">Editar</a>
                            <a href="deletar.php?id=<?php echo $row['id']; ?>" style="color: red;">Excluir</a>
    <!--                             deletar.php?id=1 -->
    <!-- http://localhost/cursofullstack/locadora/filmes/deletar.php?id=1 -->
                        </td>
                    </tr>
                    <?php
                }
                ?>
            </tbody>
        </table>
    </div>

</body>

</html>