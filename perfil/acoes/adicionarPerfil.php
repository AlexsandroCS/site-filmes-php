<?php

    require "../../conexao.php";
    
    session_start();
    
    $nome = $_GET['nome'];
    $generoFavorito = $_GET['generoFavorito'];
    $idiomaAudio = $_GET['idiomaAudio'];
    $idiomaLegenda = $_GET['idiomaLegenda'];
    $classificacaoEtaria = $_GET['classificacaoEtaria'];
    $createdBy = $_SESSION['userId'];
    
    $sql = "INSERT INTO perfil_de_usuario (nome, generoFavorito, idiomaAudio, idiomaLegenda, classificacaoEtaria, idUsuario) VALUES('$nome', '$generoFavorito', '$idiomaAudio', '$idiomaLegenda', '$classificacaoEtaria', $createdBy)";
    
    
    if ($conn->query($sql) === TRUE) {
        $conn->close();
        header('Location:../adicionar.php?msg=perfil'. $nome .'criado com sucesso! :)');
    } else {
        echo $titulo . "Perfil não foi criado, ocorreu algum erro! :( ";
    
    }
    
    $conn->close();  
?>