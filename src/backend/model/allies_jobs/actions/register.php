<?php
if (isset($_POST)) {
    $title_job = $_POST['title_job'];
    $company_name = $_POST['company_name'];
    $job_address = $_POST['job_address'];
    $salary = $_POST['salary'];
    $type_job = $_POST['type_job'];
    $job_description = $_POST['job_description'];
    $email = $_POST['email'];
    require("../../../controller/controller.php");
    if (empty($_POST['idp'])){
        $query = $pdo->prepare("INSERT INTO jobs (title_job, company_name, job_address, salary, type_job, job_description, email) VALUES (:ttj, :cnm, :jads, :slry, :type_job, :jbd, :eml)");
        $query->bindParam(":ttj", $title_job);
        $query->bindParam(":cnm", $company_name);
        $query->bindParam(":jads", $job_address);
        $query->bindParam(":slry", $salary);
        $query->bindParam(":type_job", $type_job);
        $query->bindParam(":jbd", $job_description);
        $query->bindParam(":eml", $email);
        $query->execute();
        $pdo = null;
        echo "ok";
    }else{
        $id = $_POST['idp'];
        $query = $pdo->prepare("UPDATE jobs SET title_job = :ttj, company_name = :cnm, job_address =:jads, salary = :slry, type_job = :type_job, job_description = :jbd, email = :eml WHERE id = :id");
        $query->bindParam(":ttj", $title_job);
        $query->bindParam(":cnm", $company_name);
        $query->bindParam(":jads", $job_address);
        $query->bindParam(":slry", $salary);
        $query->bindParam(":type_job", $type_job);
        $query->bindParam(":jbd", $job_description);
        $query->bindParam(":eml", $email);
        $query->bindParam("id", $id);
        $query->execute();
        $pdo = null;
        echo "modificado";
    }
    
}