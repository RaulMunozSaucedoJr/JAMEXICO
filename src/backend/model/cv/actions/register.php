<?php
if (isset($_POST)) {
    $full_name = $_POST['full_name'];
    $address = $_POST['address'];
    $cel_phone = $_POST['cel_phone'];
    $email = $_POST['email'];
    $website = $_POST['website'];
    $profesional_studies = $_POST['profesional_studies'];
    $skills = $_REQUEST['skills'];
    $skills = $_POST['skills'];
    $laboral_experience = $_POST['laboral_experience'];
    $laboral_links = $_POST['laboral_links'];
    
    
    require("../../../controller/controller.php");
    if (empty($_POST['idp'])){
        $query = $pdo->prepare("INSERT INTO cv (full_name, address, cel_phone, email, website, profesional_studies, skills, laboral_experience, laboral_links) 
        VALUES (:full_name, :address, :cel_phone, :email, :website, :profesional_studies, :skills, :laboral_experience, :laboral_links )");
        $query->bindParam(":full_name", $full_name);
        $query->bindParam(":address", $address);
        $query->bindParam(":cel_phone", $cel_phone);
        $query->bindParam(":email", $email);
        $query->bindParam(":website", $website);
        $query->bindParam(":profesional_studies", $profesional_studies);
        $query->bindParam(":skills", $skills);
        $query->bindParam(":laboral_experience", $laboral_experience);
        $query->bindParam(":laboral_links", $laboral_links);
        $query->execute();
        $pdo = null;
        echo "ok";
    }else{
        $id = $_POST['idp'];
        $query = $pdo->prepare("UPDATE cv SET full_name = :full_name, address = :address, cel_phone = :cel_phone, email = :email, website = :website, profesional_studies = :profesional_studies, skills = :skills, laboral_experience =:laboral_experience, laboral_links = :laboral_links WHERE id = :id");
        $query->bindParam(":full_name", $full_name);
        $query->bindParam(":address", $address);
        $query->bindParam(":cel_phone", $cel_phone);
        $query->bindParam(":email", $email);
        $query->bindParam(":website", $website);
        $query->bindParam(":profesional_studies", $profesional_studies);
        $query->bindParam(":skills", $skills);
        $query->bindParam(":laboral_experience", $laboral_experience);
        $query->bindParam(":laboral_links", $laboral_links);
        $query->bindParam("id", $id);
        $query->execute();
        $pdo = null;
        echo "modificado";
    }
    
}