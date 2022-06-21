<?php
if (isset($_POST)) {
    $title_ticket = $_POST['title_ticket'];
    $section = $_POST['section'];
    $description = $_POST['description'];
    require("../../../controller/controller.php");
    if (empty($_POST['idp'])){
        $query = $pdo->prepare("INSERT INTO tickets (title_ticket, section, description) VALUES (:title_ticket, :section, :description)");
        $query->bindParam(":title_ticket", $title_ticket);
        $query->bindParam(":section", $section);
        $query->bindParam(":description", $description);
        $query->execute();
        $pdo = null;
        echo "ok";
    }else{
        $id = $_POST['idp'];
        $query = $pdo->prepare("UPDATE tickets SET title_ticket = :title_ticket, section =:section, description =:description WHERE id = :id");
        $title_ticket = $_POST['title_ticket'];
        $section = $_POST['section'];
        $description = $_POST['description'];
        $query->bindParam("id", $id);
        $query->execute();
        $pdo = null;
        echo "modificado";
    }
    
}