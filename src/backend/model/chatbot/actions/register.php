<?php
if (isset($_POST)) {
    $queries = $_POST['queries'];
    $replies = $_POST['replies'];
    require("../../../controller/controller.php");
    if (empty($_POST['idp'])){
        $query = $pdo->prepare("INSERT INTO chatbot (queries, replies) VALUES (:queries, :replies)");
        $query->bindParam(":queries", $queries);
        $query->bindParam(":replies", $replies);
        $query->execute();
        $pdo = null;
        echo "ok";
    }else{
        $id = $_POST['idp'];
        $query = $pdo->prepare("UPDATE chatbot SET queries = :queries, replies =:replies WHERE id = :id");
        $query->bindParam(":queries", $queries);
        $query->bindParam(":replies", $replies);
        $query->bindParam("id", $id);
        $query->execute();
        $pdo = null;
        echo "modificado";
    }
    
}