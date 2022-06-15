<?php
    include "config/conn.php";
    $id=2;
    $titulo="meu título";
    $descricao="minha descrição";


    $stmt=$conect->prepare("UPDATE posts set titulo=:titulo, descricao=:descricao WHERE id=:id");
    $stmt->bindParam(":id", $id);
    $stmt->bindParam(":titulo", $titulo);
    $stmt->bindParam(":descricao", $descricao);
    $stmt->execute();
?>