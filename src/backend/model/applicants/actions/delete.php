<?php
    $data = file_get_contents("php://input");
    require "../../../controller/controller.php";
    $query = $pdo->prepare("DELETE FROM applicants WHERE id = :id");
    $query->bindParam(":id", $data);
    $query->execute();
    echo "ok";
?>