<?php
    $host = '/faisp-main';
    if($host == '') echo "COLOQUE O DIRETORIO CORRETO NO ARQUIVO MENU.PHP";
?>

<style>
    .sidebar {
            background-color: #2c3e50;
            width: 250px;
            padding: 20px;
            box-shadow: 4px 0 10px rgba(0, 0, 0, 0.2);
            height: 100%;
            display: inline-table;
            flex-direction: column;
            align-items: center;
        }

        .sidebar h2 {
            color: white;
            font-size: 24px;
            margin: 0;
            margin-bottom: 30px;
            text-align: center;
        }

        .sidebar ul {
            list-style-type: none;
            padding: 0;
            width: 100%;
        }

        .sidebar ul li {
            margin: 15px 0;
        }

        .sidebar ul li p{
            color: white;
            font-weight: bolder;
            border-bottom: 2px solid white;
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
</style>

<div class="sidebar">
    <h2>Locadora</h2>
    <ul>
        <li>
            <p>Filmes</p>
            <ul>
                <li><a href="<?php echo $host?>/filmes/criar.php">Adicionar</a></li>
                <li><a href="<?php echo $host?>/filmes/listar.php">Listar</a></li>
            </ul>
        </li>
        <li>
            <p>Planos</p>
            <ul>
                <li><a href="<?php echo $host?>/planos/criar.php">Adicionar</a></li>
                <li><a href="<?php echo $host?>/planos/listar.php">Listar</a></li>
            </ul>
        </li>
        <li>
            <p>Categorias</p>
            <ul>
                <li><a href="<?php echo $host?>/categorias/criar.php">Adicionar</a></li>
                <li><a href="<?php echo $host?>/categorias/listar.php">Listar</a></li>
            </ul>
        </li>
        <li>
            <p>Perfil</p>
            <ul>
                <li><a href="<?php echo $host?>/perfil/adicionar.php">Adicionar perfil</a></li>
                <li><a href="<?php echo $host?>/perfil/listar.php">Listar perfis</a></li>
            </ul>
        </li>
        <li>
            <p>Avaliações</p>
            <ul>
                <li><a href="<?php echo $host?>/avaliacoes/criar.php">Adicionar</a></li>
                <li><a href="<?php echo $host?>/avaliacoes/listar.php">Listar</a></li>
            </ul>
        </li>
        <li>
            <p>Favoritos</p>
            <ul>
                <li><a href="<?php echo $host?>/favoritos/criar.php">Adicionar</a></li>
                <li><a href="<?php echo $host?>/favoritos/listar.php">Listar</a></li>
            </ul>
        </li>
        <li>
            <p>FAQ</p>
            <ul>
                <li><a href="<?php echo $host?>/faq/criar.php">Adicionar</a></li>
                <li><a href="<?php echo $host?>/faq/listar.php">Listar</a></li>
            </ul>
        </li>
        <li><a href="<?php echo $host?>/usuarios/logout.php">Sair</a></li>
    </ul>
</div>