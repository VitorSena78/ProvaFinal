<?php
    include "config/conn.php";
    $titulo=$_POST['titulo'];
    $descricao=$_POST['descricao'];

    echo "$titulo <br> $descricao";

    $stmt=$conect->prepare("INSERT INTO posts(titulo, descricao) VALUES (:titulo, :descricao)");
    $stmt->bindParam(":titulo", $titulo);
    $stmt->bindParam(":descricao", $descricao);
    $stmt->execute();
?>