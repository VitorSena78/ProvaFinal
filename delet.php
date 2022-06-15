<?php
    include "config/conn.php";
    $id=3;
    
    $stmt=$conect->prepare("DELETE FROM posts WHERE id=:id");
    $stmt->bindParam(":id", $id);
    $stmt->execute();
?>