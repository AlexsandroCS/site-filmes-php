


    <?php
    $host = '/faisp-main';
    if($host == '') echo "COLOQUE O DIRETORIO CORRETO NO ARQUIVO MENU.PHP";
?>

<style>
.sidebar {
            color:white;
}
</style>
<div class="sidebar">
<h2>Locadora</h2>
<ul>
    <li>Filmes
        <ul>
            <li><a href="<?php echo $host?>/filmes/criar.php">Adicionar</a></li>
            <li><a href="<?php echo $host?>/filmes/listar.php">Listar</a></li>
        </ul>
    </li>
    <li>Planos
        <ul>
            <li><a href="<?php echo $host?>/planos/criar.php">Adicionar</a></li>
            <li><a href="<?php echo $host?>/planos/listar.php">Listar</a></li>
        </ul>
    </li>
    <li>Categorias
        <ul>
            <li><a href="<?php echo $host?>/categorias/criar.php">Adicionar</a></li>
            <li><a href="<?php echo $host?>/categorias/listar.php">Listar</a></li>
        </ul>
    </li>
    <li>Usuários
        <ul>
            <li><a href="<?php echo $host?>/perfil/acoes/inserir.php">Adicionar</a></li>
            <li><a href="<?php echo $host?>/usuarios/listar.php">Listar</a></li>
        </ul>
    </li>
    <li>Avaliações
        <ul>
            <li><a href="<?php echo $host?>/avaliacoes/criar.php">Adicionar</a></li>
            <li><a href="<?php echo $host?>/avaliacoes/listar.php">Listar</a></li>
        </ul>
    </li>
    <li>Favoritos
        <ul>
            <li><a href="<?php echo $host?>/favoritos/criar.php">Adicionar</a></li>
            <li><a href="<?php echo $host?>/favoritos/listar.php">Listar</a></li>
        </ul>
    </li>
    <li>FAQ
        <ul>
            <li><a href="<?php echo $host?>/faq/criar.php">Adicionar</a></li>
            <li><a href="<?php echo $host?>/faq/listar.php">Listar</a></li>
        </ul>
    </li>
    <li><a href="<?php echo $host?>/usuarios/logout.php">Sair</a></li>
</ul>
</div>